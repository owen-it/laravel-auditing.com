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
	<link rel="stylesheet" href="/assets/css/laravel.css?id=1">
	<link rel="apple-touch-icon" href="/favicon.png">
	
	<!-- at the end of the HEAD --> 
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/docsearch.js@2/dist/cdn/docsearch.min.css" /> 

</head>
<body class="@yield('body-class', 'docs') language-php">

	<span class="overlay"></span>

	<nav class="main">
		<div class="container">
			<a href="/" class="brand" style="margin-right: 0;">
				<img src="/assets/img/laravel-auditing-logo.png" alt="Laravel Auditing logo" style="margin-left: 15px;margin-right: 0;height: 40px;top: 14px;">
				Laravel Auditing
			</a>

			<div class="search nav-block invisible">
				<i class="fas fa-search"></i>
				<input placeholder="search" type="text" v-model="search" id="search-input" v-on:blur="reset" />
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
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/docsearch.js@2/dist/cdn/docsearch.min.js"></script> 
	<script type="text/javascript"> docsearch({ 
		apiKey: '7568f04f8dfd7cbb979379531b12d54a', 
		indexName: 'laravel_auditing', 
		inputSelector: '#search-input', 
		algoliaOptions: { 'facetFilters': ["version:{{ $currentVersion }}"] }, 
		debug: false // Set debug to true if you want to inspect the dropdown 
	}); 
	</script> 

	<script>
        var algolia_app_id      = '{{ Config::get('algolia.connections.main.id', false) }}';
        var algolia_search_key  = '{{ Config::get('algolia.connections.main.search_key', false) }}';
        var version             = '{{ isset($currentVersion) ? $currentVersion : DEFAULT_VERSION }}';
    </script>

    @include('partials.algolia_template')

	<script src="/assets/js/laravel.js?id=1"></script>
	<script src="/assets/js/viewport-units-buggyfill.js"></script>
	<script>window.viewportUnitsBuggyfill.init();</script>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-81888356-1', 'auto');
	  ga('send', 'pageview');
	</script>
</body>
</html>
