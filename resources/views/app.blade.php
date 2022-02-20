<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="flattr:id" content="12ek11">
	<title>{{ isset($title) ? $title . ' - ' : null }}Laravel Auditing</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="flattr:id" content="62prjo">
	<meta name="author" content="OwenIt">
	<meta name="description" content="Laravel Auditing allows you to record changes to an Eloquent model's set of data by simply adding its trait to your model.">
	<meta name="keywords" content="laravel, auditing, owen-it, php, framework, web">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	@if (isset($canonical))
	<link rel="canonical" href="{{ url($canonical) }}" />
	@endif

	<!--[if lte IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	<link rel="stylesheet" href="/assets/css/app.css?id=9">
	<link rel="apple-touch-icon" href="/favicon.png">

	<!-- at the end of the HEAD -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@alpha" />
</head>

<body class="@yield('body-class', 'docs') language-php">

	<span class="overlay"></span>

	<nav class="main">
		<div class="container">
			<a href="/" class="brand" style="margin-right: 0;">
				<img src="/assets/img/laravel-auditing-logo.png" alt="Laravel Auditing logo" style="margin-left: 15px;margin-right: 0;height: 40px;top: 14px;">
				Laravel Auditing
			</a>

			<div class="search nav-block invisible" id="docsearch">
				<i class="fas fa-search"></i>
				<input placeholder="search" type="text" />
			</div>

			<div class="responsive-sidebar-nav">
				<a href="#" class="toggle-slide menu-link btn">&#9776;</a>
			</div>

			@if (Request::is('docs*') && isset($currentVersion))
			@include('partials.switcher')
			@endif

			<ul class="main-nav">
				@include('partials.main-nav')
			</ul>
		</div>
	</nav>

	@yield('content')

	<footer class="main">
		<ul>
			@include('partials.main-nav')
		</ul>
		<p>The Laravel Auditing package - Copyright &copy; {!! date('Y') !!}.</p>
	</footer>


	<!-- at the end of the BODY -->

	<script src="https://cdn.jsdelivr.net/npm/@docsearch/js@alpha"></script>

	<script type="text/javascript">
		docsearch({
			container: '#docsearch',
			appId: 'LZPX1EL6QD',
			indexName: 'prod_laravel_auditing',
			apiKey: '215922eeb1e2b17767f91dbb38d9e70b',
			searchParameters: {
				facetFilters: ['version:{{ isset($currentVersion) ? $currentVersion : DEFAULT_VERSION }}'],
			},
		});
	</script>

	<style>
		.algolia-search-box {
			padding-top: 1px;
		}

		@media (min-width: 751px) {
			.algolia-search-box .DocSearch-Button-Placeholder {
				padding-left: 8px;
				font-size: 0.9rem;
				font-weight: 500;
			}
		}

		.DocSearch {
			--docsearch-container-background: rgba(220, 220, 220, 0.6);
			--docsearch-primary-color: #ff1e45;
			--docsearch-highlight-color: var(--docsearch-primary-color);
			--docsearch-searchbox-shadow: inset 0 0 0 2px var(--docsearch-primary-color);
			--docsearch-text-color: var(--c-text-light);
		}

		html.dark .DocSearch {
			--docsearch-container-background: rgba(0, 0, 0, 0.8);
		}

		.DocSearch-Button-Key {
			padding-bottom: 0;
		}

		@media (max-width: 750px) {
			.DocSearch-Dropdown {
				--docsearch-modal-height: 100vh;
			}
		}
	</style>
	<!-- 
	<script>
        var algolia_app_id      = '{{ Config::get('algolia.connections.main.id') }}';
        var algolia_search_key  = '{{ Config::get('algolia.connections.main.search_key') }}';
		var algolia_index_nane  = '{{ Config::get('algolia.connections.main.index_name') }}';
        var version             = '{{ isset($currentVersion) ? $currentVersion : DEFAULT_VERSION }}';
    </script> -->

	<!-- @include('partials.algolia_template') -->

	<script src="/assets/js/app.js?id=5"></script>
	<script src="/assets/js/viewport-units-buggyfill.js"></script>

	<script>
		(function(i, s, o, g, r, a, m) {
			i['GoogleAnalyticsObject'] = r;
			i[r] = i[r] || function() {
				(i[r].q = i[r].q || []).push(arguments)
			}, i[r].l = 1 * new Date();
			a = s.createElement(o),
				m = s.getElementsByTagName(o)[0];
			a.async = 1;
			a.src = g;
			m.parentNode.insertBefore(a, m)
		})(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

		ga('create', 'UA-81888356-1', 'auto');
		ga('send', 'pageview');
	</script>
</body>

</html>