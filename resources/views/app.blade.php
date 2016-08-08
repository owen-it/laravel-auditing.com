<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>{{ isset($title) ? $title . ' - ' : null }}Laravel Auditing</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
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
	<link rel="stylesheet" href="{{ elixir('assets/css/laravel.css') }}">
	<link rel="apple-touch-icon" href="/favicon.png">
</head>
<body class="@yield('body-class', 'docs') language-php">

	<span class="overlay"></span>

	<nav class="main">
		<div class="container">
			<a href="/" class="brand">
				<img src="/assets/img/laravel-auditing-logo.png" alt="Laravel Auditing logo" style="margin-left: 15px;margin-right: 0;height: 40px;top: 14px;">
				Laravel Auditing
			</a>
			
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
		<p>Laravel is a trademark of Taylor Otwell. Copyright &copy; Taylor Otwell.</p>
		<p class="less-significant"><a href="http://jackmcdade.com">Design by Jack McDade</a></p>
	</footer>



	<script src="{{ elixir('assets/js/laravel.js') }}"></script>
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
