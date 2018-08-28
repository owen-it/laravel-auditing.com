@extends('app')

@section('content')
<nav id="slide-menu" class="slide-menu" role="navigation">

	<div class="brand">
		<a href="/" style="margin-right: 0;">
			<img src="/assets/img/laravel-logo-white.png" height="50">
		</a>
	</div>

	<ul class="slide-main-nav">
		<li><a href="/">Home</a></li>
		@include('partials.main-nav')
	</ul>

	<div class="slide-docs-nav">
		<h2>Documentation</h2>
		{!! $index !!}
	</div>

</nav>

<div class="docs-wrapper container">

	<section class="sidebar">
		{!! $index !!}
	</section>

	<article>
		{!! $content !!}

		<div class="footer-contribute">
			Caught a mistake or want to contribute to the documentation?
			<a href="https://github.com/owen-it/laravel-auditing-doc/blob/{!! $currentVersion !!}/{!! $sectionPage !!}.md" target="_blank">
				Edit this page on Github!
			</a>
		</div>
	</article>
	
</div>
@endsection
