<?php namespace App\Services;

use Illuminate\Filesystem\Filesystem;
use Illuminate\Contracts\Cache\Repository as Cache;

class Documentation {

	/**
	 * The filesystem implementation.
	 *
	 * @var Filesystem
	 */
	protected $files;

	/**
	 * The cache implementation.
	 *
	 * @var Cache
	 */
	protected $cache;

	/**
	 * Create a new documentation instance.
	 *
	 * @param  Filesystem  $files
	 * @param  Cache  $cache
	 * @return void
	 */
	public function __construct(Filesystem $files, Cache $cache)
	{
		$this->files = $files;
		$this->cache = $cache;
	}

	/**
	 * Get the documentation index page.
	 *
	 * @param  string  $version
	 * @return string
	 */
	public function getIndex($version)
	{
		return $this->cache->remember('docs.'.$version.'.index', env('TIME_CACHE', 5), function() use ($version) {
			$path = base_raw_path($version.'/documentation.md');

			//if (file_raw_exists($path)) {
				return $this->replaceLinks($version, markdown(@file_get_contents($path)));
			//}

			//return null;
		});
	}

	/**
	 * Get the given documentation page.
	 *
	 * @param  string  $version
	 * @param  string  $page
	 * @return string
	 */
	public function get($version, $page)
	{
		return $this->cache->remember('docs.'.$version.'.'.$page, env('TIME_CACHE', 5), function() use ($version, $page) {
			$path = base_raw_path($version.'/'.$page.'.md');

			//if (file_raw_exists($path)) {
				return $this->replaceLinks($version, markdown(@file_get_contents($path)));
			//}

			//return null;
		});
	}

	/**
	 * Replace the version place-holder in links.
	 *
	 * @param  string  $version
	 * @param  string  $content
	 * @return string
	 */
	public static function replaceLinks($version, $content)
	{
		return str_replace('.md', '', str_replace('{{version}}', $version, $content));
	}

	/**
	 * Check if the given section exists.
	 *
	 * @param  string  $version
	 * @param  string  $page
	 * @return boolean
	 */
	public function sectionExists($version, $page)
	{
		return true;
		
		//return file_raw_exists(
		//	base_raw_path($version.'/'.$page.'.md')
		//);
	}

	/**
	 * Get the publicly available versions of the documentation
	 *
	 * @return array
	 */
	public static function getDocVersions()
	{
		return [
			'master' => 'Master',
            '8.0' => '8.0',
            '7.0' => '7.0',
			'6.1' => '6.1',
			'5.0' => '5.0',
			'4.1' => '4.1',
		];
	}
}
