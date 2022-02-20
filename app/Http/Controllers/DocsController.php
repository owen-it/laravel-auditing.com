<?php

namespace App\Http\Controllers;

use App\Services\Documentation;
use App\Services\Documentation\Indexer;
use Symfony\Component\DomCrawler\Crawler;

class DocsController extends Controller {

	/**
	 * The documentation repository.
	 *
	 * @var Documentation
	 */
	protected $docs;

	/**
	 * Create a new controller instance.
	 *
	 * @param  Documentation  $docs
	 * @return void
	 */
	public function __construct(Documentation $docs, Indexer $indexer)
	{
		$this->docs = $docs;
		$this->indexer = $indexer;
	}

	/**
	 * Show the root documentation page (/docs).
	 *
	 * @return Response
	 */
	public function showRootPage()
	{
		return redirect('docs/'.DEFAULT_VERSION);
	}

	/**
	 * Redirect to target page.
	 *
	 * @return Response
	 */
	public function showTargetPage($target) {
		return redirect('docs/'.DEFAULT_VERSION.'/'.$target);
	}


	/**
	 * Show the welcome documentation page (/welcome).
	 *
	 * @return Response
	 */
	 public function showWelcomePage()
	 {
		 return view('welcome', [
			'currentVersion' => DEFAULT_VERSION,
			'versions' => Documentation::getDocVersions(),
		 ]);
	 }

	/**
	 * Show a documentation page.
	 *
	 * @return Response
	 */
	public function show($version, $page = null)
	{
		if ( ! $this->isVersion($version)) {
			return redirect('docs/'.DEFAULT_VERSION, 301);
		}
		
		if (! defined('CURRENT_VERSION')) {
			define('CURRENT_VERSION', $version);
		}

		$sectionPage = $page ?: 'introduction';
		$content = $this->docs->get($version, $sectionPage);

		if (is_null($content)) {
			abort(404);
		}

		$title = (new Crawler($content))->filterXPath('//h1');

		$section = '';

		if ($this->docs->sectionExists($version, $page)) {
			$section .= '/'.$page;
		} elseif ( ! is_null($page)) {
			return redirect('/docs/'.$version);
		}
		
		$canonical = null;
		
		if ($this->docs->sectionExists(DEFAULT_VERSION, $sectionPage)) {
			$canonical = 'docs/'.DEFAULT_VERSION.'/'.$sectionPage;
		}

		return view('docs', [
			'title' => count($title) ? $title->text() : null,
			'index' => $this->docs->getIndex($version),
			'content' => $content,
			'currentVersion' => $version,
			'versions' => Documentation::getDocVersions(),
			'currentSection' => $section,
			'canonical' => $canonical,
			'sectionPage' => $sectionPage,
		]);
	}

	/**
	 * Determine if the given URL segment is a valid version.
	 *
	 * @param  string  $version
	 * @return bool
	 */
	protected function isVersion($version)
	{
		return in_array($version, array_keys(Documentation::getDocVersions()));
	}

	/**
	 * Update all documentation
	 */
	public function updateIndexes () {
		$this->indexer->indexAllDocuments();
	}
}
