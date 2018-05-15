@extends('app')

@section('content')
<div class="container wrapper-logo">
  <a href="/" class="stamp">
    <img src="/assets/img/laravel-auditing-logo.png" alt="Laravel Auditing logo">
  </a>
  <div>
    <h1>Why auditing?</h1>
    <p class="container why">
      This package will help you understand changes in your Eloquent models, by providing information <br > 
      about possible discrepancies and anomalies that could indicate business concerns or suspect activities.
    </p>
    <p class="buttons">
      <a href="/docs/{!! $currentVersion !!}/introduction" class="btn btn-default">GET STARTED</a>
      or 
      <a target="_blank" aria-label="Star me on GitHub" href="https://github.com/owen-it/laravel-auditing" >
      <span class="svg-icon"><svg id="i-github" viewBox="0 0 64 64" width="40" height="40" style="vertical-align: bottom;">
        <path stroke-width="0" fill="currentColor" d="M32 0 C14 0 0 14 0 32 0 53 19 62 22 62 24 62 24 61 24 60 L24 55 C17 57 14 53 13 50 13 50 13 49 11 47 10 46 6 44 10 44 13 44 15 48 15 48 18 52 22 51 24 50 24 48 26 46 26 46 18 45 12 42 12 31 12 27 13 24 15 22 15 22 13 18 15 13 15 13 20 13 24 17 27 15 37 15 40 17 44 13 49 13 49 13 51 20 49 22 49 22 51 24 52 27 52 31 52 42 45 45 38 46 39 47 40 49 40 52 L40 60 C40 61 40 62 42 62 45 62 64 53 64 32 64 14 50 0 32 0 Z"></path>
        </svg>
        </span>
      </a>  
    </p>
    <p class="buttons">
      <a href="https://opencollective.com/laravel-auditing/donate" class="btn btn-default">
        <i class="material-icons">favorite</i> DONATE
      </a>
    </p>
  </div>
</div>
<div class="container">
  <div class="callout rule">
    <span class="text">Features</span>
  </div>
  <div class="packages">
      <div class="third">
          <div class="package">
              <div class="icon">{!! svg('package') !!}</div>
              <div class="content">
                  <a href="/docs/valet" class="package-title">Valet</a>
                  <p>A Laravel development environment for Mac minimalists. No Vagrant, no Apache, no fuss.</p>
              </div>
          </div>
          <div class="package">
              <div class="icon">{!! svg('package') !!}</div>
              <div class="content">
                  <a href="https://cachethq.io" class="package-title">Cachet</a>
                  <p>Cachet is the best way to inform customers of downtime. This is your status page.</p>
              </div>
          </div>
      </div>
      <div class="third">
          <div class="package">
              <div class="icon">{!! svg('package') !!}</div>
              <div class="content">
                  <a href="/docs/mix" class="package-title">Mix</a>
                  <!-- <p>If you've ever been frustrated with Gulp and asset compilation, Elixir is for you.</p> -->
                  <p>Laravel Mix makes front-end a breeze. Start using SASS and Webpack in minutes.</p>
              </div>
          </div>
          <div class="package">
              <div class="icon">{!! svg('package') !!}</div>
              <div class="content">
                  <a href="https://spark.laravel.com" class="package-title">Spark</a>
                  <p>Powerful SaaS application scaffolding. Stop writing boilerplate & focus on your application.</p>
              </div>
          </div>
      </div>
      <div class="third">
          <div class="package">
              <div class="icon">{!! svg('package') !!}</div>
              <div class="content">
                  <a href="https://lumen.laravel.com" class="package-title">Lumen</a>
                  <p>If all you need is an API and lightning fast speed, try Lumen. It’s Laravel super-light.</p>
              </div>
          </div>
          <div class="package last">
              <div class="icon">{!! svg('package') !!}</div>
              <div class="content">
                  <a href="https://statamic.com" class="package-title">Statamic</a>
                  <p>Need a CMS that runs on Laravel and is built for developers <em>and</em> clients? Look no further. </p>
              </div>
          </div>
      </div>
  </div>
</div>

@endsection
