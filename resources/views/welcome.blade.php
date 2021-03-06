@extends('app')

@section('content')

<nav id="slide-menu" class="slide-menu" role="navigation">

	<div class="brand">
		<a href="/">
			<img src="/assets/img/laravel-logo-white.png" alt="Laravel Auditing" height="50">
		</a>
	</div>

	<ul class="slide-main-nav">
		@include('partials.main-nav')
	</ul>

</nav>

<div class="container hero">
  <div class="why">
    <h1>Why auditing?</h1>
    <p class="container">
        This package will help you understand changes in your Eloquent models, by providing information <br > 
        about possible discrepancies and anomalies that could indicate business concerns or suspect activities. <nr>
    </p>

    <a href="/docs" style="margin-top: 15px" class="btn menu-link">
        Get Started →
    </a>
  </div>
  <div class="callout rule">
    <span class="text">Features</span>
  </div>
  <div class="packages" style="padding: 0 15px;">
      <div class="third">
          <div class="package">
              <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="15.7" height="18" viewBox="0 0 15.7 18"><g fill="#7F7F7F"><path d="M15.7 4.7c0-.2-.1-.3-.3-.4L8.1.1C8 0 7.8 0 7.6.1L.3 4.3c-.2.1-.3.3-.3.4v8.5c0 .2.1.4.3.5l7.3 4.2h.2l.2.1h.1l7.3-4.2c.2-.1.3-.3.3-.5V4.7c0 .1 0 .1 0 0zM7.9 1.2l6.3 3.6-6.3 3.6-6.3-3.6 6.3-3.6zM1.1 5.7l5.8 3.4h-.1l-.6.4c-.1 0-.1.2-.1.2 0 .1.1.1.2.1h.1l.6-.4c.1 0 .1-.1.1-.2l.2.1v7.2l-6.2-3.6V5.7zm7.3 10.8V9.3l.2-.1c0 .1 0 .2.1.2l.6.4h.1c.1 0 .1 0 .2-.1 0-.1 0-.2-.1-.2l-.6-.4h-.1l5.8-3.4v7.2l-6.2 3.6z"></path><path d="M13.1 11.6l-.6-.4c-.1-.1-.2 0-.2.1s0 .2.1.2l.6.4h.1c.1 0 .1 0 .2-.1 0 0-.1-.2-.2-.2zM14.4 12.3l-.6-.4c-.1-.1-.2 0-.2.1s0 .2.1.2l.6.4h.1c.1 0 .1 0 .2-.1-.1 0-.2-.2-.2-.2zM11.9 10.9l-.6-.4c-.1-.1-.2 0-.2.1s0 .2.1.2l.6.4h.1c.1 0 .1 0 .2-.1-.1 0-.1-.2-.2-.2zM10.7 10.2l-.6-.4c-.1-.1-.2 0-.2.1s0 .2.1.2l.6.4h.1c.1 0 .1 0 .2-.1-.1-.1-.1-.2-.2-.2zM2 11.9l-.6.4c-.1 0-.1.2-.1.2 0 .1.1.1.2.1h.1l.6-.4c.1 0 .1-.2.1-.2-.1-.1-.2-.1-.3-.1zM5.6 9.8l-.6.4c-.1 0-.1.2-.1.2 0 .1.1.1.2.1h.1l.6-.4c.1 0 .1-.2.1-.2-.1-.1-.2-.1-.3-.1zM3.2 11.2l-.6.4c-.1 0-.1.2-.1.2 0 .1.1.1.2.1h.1l.6-.4c.1 0 .1-.2.1-.2-.1-.1-.2-.1-.3-.1zM4.4 10.5l-.6.4c-.1 0-.1.2-.1.2 0 .1.1.1.2.1H4l.6-.4c.1 0 .1-.2.1-.2-.1-.1-.2-.1-.3-.1z"></path></g></svg></div>
              <div class="content">
                  <a href="/docs/auditor" class="package-title">Auditor</a>
                  <p>The Auditor class is responsible for auditing and clearing Audit records.</p>
              </div>
          </div>
          <div class="package">
              <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="15.7" height="18" viewBox="0 0 15.7 18"><g fill="#7F7F7F"><path d="M15.7 4.7c0-.2-.1-.3-.3-.4L8.1.1C8 0 7.8 0 7.6.1L.3 4.3c-.2.1-.3.3-.3.4v8.5c0 .2.1.4.3.5l7.3 4.2h.2l.2.1h.1l7.3-4.2c.2-.1.3-.3.3-.5V4.7c0 .1 0 .1 0 0zM7.9 1.2l6.3 3.6-6.3 3.6-6.3-3.6 6.3-3.6zM1.1 5.7l5.8 3.4h-.1l-.6.4c-.1 0-.1.2-.1.2 0 .1.1.1.2.1h.1l.6-.4c.1 0 .1-.1.1-.2l.2.1v7.2l-6.2-3.6V5.7zm7.3 10.8V9.3l.2-.1c0 .1 0 .2.1.2l.6.4h.1c.1 0 .1 0 .2-.1 0-.1 0-.2-.1-.2l-.6-.4h-.1l5.8-3.4v7.2l-6.2 3.6z"></path><path d="M13.1 11.6l-.6-.4c-.1-.1-.2 0-.2.1s0 .2.1.2l.6.4h.1c.1 0 .1 0 .2-.1 0 0-.1-.2-.2-.2zM14.4 12.3l-.6-.4c-.1-.1-.2 0-.2.1s0 .2.1.2l.6.4h.1c.1 0 .1 0 .2-.1-.1 0-.2-.2-.2-.2zM11.9 10.9l-.6-.4c-.1-.1-.2 0-.2.1s0 .2.1.2l.6.4h.1c.1 0 .1 0 .2-.1-.1 0-.1-.2-.2-.2zM10.7 10.2l-.6-.4c-.1-.1-.2 0-.2.1s0 .2.1.2l.6.4h.1c.1 0 .1 0 .2-.1-.1-.1-.1-.2-.2-.2zM2 11.9l-.6.4c-.1 0-.1.2-.1.2 0 .1.1.1.2.1h.1l.6-.4c.1 0 .1-.2.1-.2-.1-.1-.2-.1-.3-.1zM5.6 9.8l-.6.4c-.1 0-.1.2-.1.2 0 .1.1.1.2.1h.1l.6-.4c.1 0 .1-.2.1-.2-.1-.1-.2-.1-.3-.1zM3.2 11.2l-.6.4c-.1 0-.1.2-.1.2 0 .1.1.1.2.1h.1l.6-.4c.1 0 .1-.2.1-.2-.1-.1-.2-.1-.3-.1zM4.4 10.5l-.6.4c-.1 0-.1.2-.1.2 0 .1.1.1.2.1H4l.6-.4c.1 0 .1-.2.1-.2-.1-.1-.2-.1-.3-.1z"></path></g></svg></div>
              <div class="content">
                  <a href="/docs/audit-redactors" class="package-title">Redactors</a>
                  <p>Redactors were introduced in version 6.1.0, and are an easy way to mask sensitive information when auditing.</p>
              </div>
          </div>
          <div class="package">
              <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="15.7" height="18" viewBox="0 0 15.7 18"><g fill="#7F7F7F"><path d="M15.7 4.7c0-.2-.1-.3-.3-.4L8.1.1C8 0 7.8 0 7.6.1L.3 4.3c-.2.1-.3.3-.3.4v8.5c0 .2.1.4.3.5l7.3 4.2h.2l.2.1h.1l7.3-4.2c.2-.1.3-.3.3-.5V4.7c0 .1 0 .1 0 0zM7.9 1.2l6.3 3.6-6.3 3.6-6.3-3.6 6.3-3.6zM1.1 5.7l5.8 3.4h-.1l-.6.4c-.1 0-.1.2-.1.2 0 .1.1.1.2.1h.1l.6-.4c.1 0 .1-.1.1-.2l.2.1v7.2l-6.2-3.6V5.7zm7.3 10.8V9.3l.2-.1c0 .1 0 .2.1.2l.6.4h.1c.1 0 .1 0 .2-.1 0-.1 0-.2-.1-.2l-.6-.4h-.1l5.8-3.4v7.2l-6.2 3.6z"></path><path d="M13.1 11.6l-.6-.4c-.1-.1-.2 0-.2.1s0 .2.1.2l.6.4h.1c.1 0 .1 0 .2-.1 0 0-.1-.2-.2-.2zM14.4 12.3l-.6-.4c-.1-.1-.2 0-.2.1s0 .2.1.2l.6.4h.1c.1 0 .1 0 .2-.1-.1 0-.2-.2-.2-.2zM11.9 10.9l-.6-.4c-.1-.1-.2 0-.2.1s0 .2.1.2l.6.4h.1c.1 0 .1 0 .2-.1-.1 0-.1-.2-.2-.2zM10.7 10.2l-.6-.4c-.1-.1-.2 0-.2.1s0 .2.1.2l.6.4h.1c.1 0 .1 0 .2-.1-.1-.1-.1-.2-.2-.2zM2 11.9l-.6.4c-.1 0-.1.2-.1.2 0 .1.1.1.2.1h.1l.6-.4c.1 0 .1-.2.1-.2-.1-.1-.2-.1-.3-.1zM5.6 9.8l-.6.4c-.1 0-.1.2-.1.2 0 .1.1.1.2.1h.1l.6-.4c.1 0 .1-.2.1-.2-.1-.1-.2-.1-.3-.1zM3.2 11.2l-.6.4c-.1 0-.1.2-.1.2 0 .1.1.1.2.1h.1l.6-.4c.1 0 .1-.2.1-.2-.1-.1-.2-.1-.3-.1zM4.4 10.5l-.6.4c-.1 0-.1.2-.1.2 0 .1.1.1.2.1H4l.6-.4c.1 0 .1-.2.1-.2-.1-.1-.2-.1-.3-.1z"></path></g></svg></div>
              <div class="content">
                  <a href="/docs/audit-presentation" class="package-title">Presentation</a>
                  <p>The metadata and modified data can be accessed in several ways..</p>
              </div>
          </div>
      </div>
      <div class="third">
          <div class="package">
              <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="15.7" height="18" viewBox="0 0 15.7 18"><g fill="#7F7F7F"><path d="M15.7 4.7c0-.2-.1-.3-.3-.4L8.1.1C8 0 7.8 0 7.6.1L.3 4.3c-.2.1-.3.3-.3.4v8.5c0 .2.1.4.3.5l7.3 4.2h.2l.2.1h.1l7.3-4.2c.2-.1.3-.3.3-.5V4.7c0 .1 0 .1 0 0zM7.9 1.2l6.3 3.6-6.3 3.6-6.3-3.6 6.3-3.6zM1.1 5.7l5.8 3.4h-.1l-.6.4c-.1 0-.1.2-.1.2 0 .1.1.1.2.1h.1l.6-.4c.1 0 .1-.1.1-.2l.2.1v7.2l-6.2-3.6V5.7zm7.3 10.8V9.3l.2-.1c0 .1 0 .2.1.2l.6.4h.1c.1 0 .1 0 .2-.1 0-.1 0-.2-.1-.2l-.6-.4h-.1l5.8-3.4v7.2l-6.2 3.6z"></path><path d="M13.1 11.6l-.6-.4c-.1-.1-.2 0-.2.1s0 .2.1.2l.6.4h.1c.1 0 .1 0 .2-.1 0 0-.1-.2-.2-.2zM14.4 12.3l-.6-.4c-.1-.1-.2 0-.2.1s0 .2.1.2l.6.4h.1c.1 0 .1 0 .2-.1-.1 0-.2-.2-.2-.2zM11.9 10.9l-.6-.4c-.1-.1-.2 0-.2.1s0 .2.1.2l.6.4h.1c.1 0 .1 0 .2-.1-.1 0-.1-.2-.2-.2zM10.7 10.2l-.6-.4c-.1-.1-.2 0-.2.1s0 .2.1.2l.6.4h.1c.1 0 .1 0 .2-.1-.1-.1-.1-.2-.2-.2zM2 11.9l-.6.4c-.1 0-.1.2-.1.2 0 .1.1.1.2.1h.1l.6-.4c.1 0 .1-.2.1-.2-.1-.1-.2-.1-.3-.1zM5.6 9.8l-.6.4c-.1 0-.1.2-.1.2 0 .1.1.1.2.1h.1l.6-.4c.1 0 .1-.2.1-.2-.1-.1-.2-.1-.3-.1zM3.2 11.2l-.6.4c-.1 0-.1.2-.1.2 0 .1.1.1.2.1h.1l.6-.4c.1 0 .1-.2.1-.2-.1-.1-.2-.1-.3-.1zM4.4 10.5l-.6.4c-.1 0-.1.2-.1.2 0 .1.1.1.2.1H4l.6-.4c.1 0 .1-.2.1-.2-.1-.1-.2-.1-.3-.1z"></path></g></svg></div>
              <div class="content">
                  <a href="/docs/audit-resolvers" class="package-title">Resolvers</a>
                  <p>Resolvers provide a convenient way to get the basic data for audit.</p>
              </div>
          </div>
          <div class="package">
              <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="15.7" height="18" viewBox="0 0 15.7 18"><g fill="#7F7F7F"><path d="M15.7 4.7c0-.2-.1-.3-.3-.4L8.1.1C8 0 7.8 0 7.6.1L.3 4.3c-.2.1-.3.3-.3.4v8.5c0 .2.1.4.3.5l7.3 4.2h.2l.2.1h.1l7.3-4.2c.2-.1.3-.3.3-.5V4.7c0 .1 0 .1 0 0zM7.9 1.2l6.3 3.6-6.3 3.6-6.3-3.6 6.3-3.6zM1.1 5.7l5.8 3.4h-.1l-.6.4c-.1 0-.1.2-.1.2 0 .1.1.1.2.1h.1l.6-.4c.1 0 .1-.1.1-.2l.2.1v7.2l-6.2-3.6V5.7zm7.3 10.8V9.3l.2-.1c0 .1 0 .2.1.2l.6.4h.1c.1 0 .1 0 .2-.1 0-.1 0-.2-.1-.2l-.6-.4h-.1l5.8-3.4v7.2l-6.2 3.6z"></path><path d="M13.1 11.6l-.6-.4c-.1-.1-.2 0-.2.1s0 .2.1.2l.6.4h.1c.1 0 .1 0 .2-.1 0 0-.1-.2-.2-.2zM14.4 12.3l-.6-.4c-.1-.1-.2 0-.2.1s0 .2.1.2l.6.4h.1c.1 0 .1 0 .2-.1-.1 0-.2-.2-.2-.2zM11.9 10.9l-.6-.4c-.1-.1-.2 0-.2.1s0 .2.1.2l.6.4h.1c.1 0 .1 0 .2-.1-.1 0-.1-.2-.2-.2zM10.7 10.2l-.6-.4c-.1-.1-.2 0-.2.1s0 .2.1.2l.6.4h.1c.1 0 .1 0 .2-.1-.1-.1-.1-.2-.2-.2zM2 11.9l-.6.4c-.1 0-.1.2-.1.2 0 .1.1.1.2.1h.1l.6-.4c.1 0 .1-.2.1-.2-.1-.1-.2-.1-.3-.1zM5.6 9.8l-.6.4c-.1 0-.1.2-.1.2 0 .1.1.1.2.1h.1l.6-.4c.1 0 .1-.2.1-.2-.1-.1-.2-.1-.3-.1zM3.2 11.2l-.6.4c-.1 0-.1.2-.1.2 0 .1.1.1.2.1h.1l.6-.4c.1 0 .1-.2.1-.2-.1-.1-.2-.1-.3-.1zM4.4 10.5l-.6.4c-.1 0-.1.2-.1.2 0 .1.1.1.2.1H4l.6-.4c.1 0 .1-.2.1-.2-.1-.1-.2-.1-.3-.1z"></path></g></svg></div>
              <div class="content">
                  <a href="/docs/audit-resolvers" class="package-title">Drivers</a>
                  <p>Besides storing model attribute changes, drivers also handle pruning when an audit threshold is set.</p>
              </div>
          </div>
          <div class="package">
              <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="15.7" height="18" viewBox="0 0 15.7 18"><g fill="#7F7F7F"><path d="M15.7 4.7c0-.2-.1-.3-.3-.4L8.1.1C8 0 7.8 0 7.6.1L.3 4.3c-.2.1-.3.3-.3.4v8.5c0 .2.1.4.3.5l7.3 4.2h.2l.2.1h.1l7.3-4.2c.2-.1.3-.3.3-.5V4.7c0 .1 0 .1 0 0zM7.9 1.2l6.3 3.6-6.3 3.6-6.3-3.6 6.3-3.6zM1.1 5.7l5.8 3.4h-.1l-.6.4c-.1 0-.1.2-.1.2 0 .1.1.1.2.1h.1l.6-.4c.1 0 .1-.1.1-.2l.2.1v7.2l-6.2-3.6V5.7zm7.3 10.8V9.3l.2-.1c0 .1 0 .2.1.2l.6.4h.1c.1 0 .1 0 .2-.1 0-.1 0-.2-.1-.2l-.6-.4h-.1l5.8-3.4v7.2l-6.2 3.6z"></path><path d="M13.1 11.6l-.6-.4c-.1-.1-.2 0-.2.1s0 .2.1.2l.6.4h.1c.1 0 .1 0 .2-.1 0 0-.1-.2-.2-.2zM14.4 12.3l-.6-.4c-.1-.1-.2 0-.2.1s0 .2.1.2l.6.4h.1c.1 0 .1 0 .2-.1-.1 0-.2-.2-.2-.2zM11.9 10.9l-.6-.4c-.1-.1-.2 0-.2.1s0 .2.1.2l.6.4h.1c.1 0 .1 0 .2-.1-.1 0-.1-.2-.2-.2zM10.7 10.2l-.6-.4c-.1-.1-.2 0-.2.1s0 .2.1.2l.6.4h.1c.1 0 .1 0 .2-.1-.1-.1-.1-.2-.2-.2zM2 11.9l-.6.4c-.1 0-.1.2-.1.2 0 .1.1.1.2.1h.1l.6-.4c.1 0 .1-.2.1-.2-.1-.1-.2-.1-.3-.1zM5.6 9.8l-.6.4c-.1 0-.1.2-.1.2 0 .1.1.1.2.1h.1l.6-.4c.1 0 .1-.2.1-.2-.1-.1-.2-.1-.3-.1zM3.2 11.2l-.6.4c-.1 0-.1.2-.1.2 0 .1.1.1.2.1h.1l.6-.4c.1 0 .1-.2.1-.2-.1-.1-.2-.1-.3-.1zM4.4 10.5l-.6.4c-.1 0-.1.2-.1.2 0 .1.1.1.2.1H4l.6-.4c.1 0 .1-.2.1-.2-.1-.1-.2-.1-.3-.1z"></path></g></svg></div>
              <div class="content">
                  <a href="/docs/audit-transformation" class="package-title">Transformation</a>
                  <p>If needed, the Audit data can be transformed before being stored.</p>
              </div>
          </div>
      </div>
      <div class="third">
          <div class="package">
              <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="15.7" height="18" viewBox="0 0 15.7 18"><g fill="#7F7F7F"><path d="M15.7 4.7c0-.2-.1-.3-.3-.4L8.1.1C8 0 7.8 0 7.6.1L.3 4.3c-.2.1-.3.3-.3.4v8.5c0 .2.1.4.3.5l7.3 4.2h.2l.2.1h.1l7.3-4.2c.2-.1.3-.3.3-.5V4.7c0 .1 0 .1 0 0zM7.9 1.2l6.3 3.6-6.3 3.6-6.3-3.6 6.3-3.6zM1.1 5.7l5.8 3.4h-.1l-.6.4c-.1 0-.1.2-.1.2 0 .1.1.1.2.1h.1l.6-.4c.1 0 .1-.1.1-.2l.2.1v7.2l-6.2-3.6V5.7zm7.3 10.8V9.3l.2-.1c0 .1 0 .2.1.2l.6.4h.1c.1 0 .1 0 .2-.1 0-.1 0-.2-.1-.2l-.6-.4h-.1l5.8-3.4v7.2l-6.2 3.6z"></path><path d="M13.1 11.6l-.6-.4c-.1-.1-.2 0-.2.1s0 .2.1.2l.6.4h.1c.1 0 .1 0 .2-.1 0 0-.1-.2-.2-.2zM14.4 12.3l-.6-.4c-.1-.1-.2 0-.2.1s0 .2.1.2l.6.4h.1c.1 0 .1 0 .2-.1-.1 0-.2-.2-.2-.2zM11.9 10.9l-.6-.4c-.1-.1-.2 0-.2.1s0 .2.1.2l.6.4h.1c.1 0 .1 0 .2-.1-.1 0-.1-.2-.2-.2zM10.7 10.2l-.6-.4c-.1-.1-.2 0-.2.1s0 .2.1.2l.6.4h.1c.1 0 .1 0 .2-.1-.1-.1-.1-.2-.2-.2zM2 11.9l-.6.4c-.1 0-.1.2-.1.2 0 .1.1.1.2.1h.1l.6-.4c.1 0 .1-.2.1-.2-.1-.1-.2-.1-.3-.1zM5.6 9.8l-.6.4c-.1 0-.1.2-.1.2 0 .1.1.1.2.1h.1l.6-.4c.1 0 .1-.2.1-.2-.1-.1-.2-.1-.3-.1zM3.2 11.2l-.6.4c-.1 0-.1.2-.1.2 0 .1.1.1.2.1h.1l.6-.4c.1 0 .1-.2.1-.2-.1-.1-.2-.1-.3-.1zM4.4 10.5l-.6.4c-.1 0-.1.2-.1.2 0 .1.1.1.2.1H4l.6-.4c.1 0 .1-.2.1-.2-.1-.1-.2-.1-.3-.1z"></path></g></svg></div>
              <div class="content">
                  <a href="/docs/audit-tags" class="package-title">Tags</a>
                  <p>Tags mark audit logs and are very useful for filtering..</p>
              </div>
          </div>
          <div class="package">
              <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="15.7" height="18" viewBox="0 0 15.7 18"><g fill="#7F7F7F"><path d="M15.7 4.7c0-.2-.1-.3-.3-.4L8.1.1C8 0 7.8 0 7.6.1L.3 4.3c-.2.1-.3.3-.3.4v8.5c0 .2.1.4.3.5l7.3 4.2h.2l.2.1h.1l7.3-4.2c.2-.1.3-.3.3-.5V4.7c0 .1 0 .1 0 0zM7.9 1.2l6.3 3.6-6.3 3.6-6.3-3.6 6.3-3.6zM1.1 5.7l5.8 3.4h-.1l-.6.4c-.1 0-.1.2-.1.2 0 .1.1.1.2.1h.1l.6-.4c.1 0 .1-.1.1-.2l.2.1v7.2l-6.2-3.6V5.7zm7.3 10.8V9.3l.2-.1c0 .1 0 .2.1.2l.6.4h.1c.1 0 .1 0 .2-.1 0-.1 0-.2-.1-.2l-.6-.4h-.1l5.8-3.4v7.2l-6.2 3.6z"></path><path d="M13.1 11.6l-.6-.4c-.1-.1-.2 0-.2.1s0 .2.1.2l.6.4h.1c.1 0 .1 0 .2-.1 0 0-.1-.2-.2-.2zM14.4 12.3l-.6-.4c-.1-.1-.2 0-.2.1s0 .2.1.2l.6.4h.1c.1 0 .1 0 .2-.1-.1 0-.2-.2-.2-.2zM11.9 10.9l-.6-.4c-.1-.1-.2 0-.2.1s0 .2.1.2l.6.4h.1c.1 0 .1 0 .2-.1-.1 0-.1-.2-.2-.2zM10.7 10.2l-.6-.4c-.1-.1-.2 0-.2.1s0 .2.1.2l.6.4h.1c.1 0 .1 0 .2-.1-.1-.1-.1-.2-.2-.2zM2 11.9l-.6.4c-.1 0-.1.2-.1.2 0 .1.1.1.2.1h.1l.6-.4c.1 0 .1-.2.1-.2-.1-.1-.2-.1-.3-.1zM5.6 9.8l-.6.4c-.1 0-.1.2-.1.2 0 .1.1.1.2.1h.1l.6-.4c.1 0 .1-.2.1-.2-.1-.1-.2-.1-.3-.1zM3.2 11.2l-.6.4c-.1 0-.1.2-.1.2 0 .1.1.1.2.1h.1l.6-.4c.1 0 .1-.2.1-.2-.1-.1-.2-.1-.3-.1zM4.4 10.5l-.6.4c-.1 0-.1.2-.1.2 0 .1.1.1.2.1H4l.6-.4c.1 0 .1-.2.1-.2-.1-.1-.2-.1-.3-.1z"></path></g></svg></div>
              <div class="content">
                  <a href="/docs/audit-events" class="package-title">Events</a>
                  <p>During and after the audit process, two events are fired. </p>
              </div>
          </div>
          <div class="package last">
              <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="15.7" height="18" viewBox="0 0 15.7 18"><g fill="#7F7F7F"><path d="M15.7 4.7c0-.2-.1-.3-.3-.4L8.1.1C8 0 7.8 0 7.6.1L.3 4.3c-.2.1-.3.3-.3.4v8.5c0 .2.1.4.3.5l7.3 4.2h.2l.2.1h.1l7.3-4.2c.2-.1.3-.3.3-.5V4.7c0 .1 0 .1 0 0zM7.9 1.2l6.3 3.6-6.3 3.6-6.3-3.6 6.3-3.6zM1.1 5.7l5.8 3.4h-.1l-.6.4c-.1 0-.1.2-.1.2 0 .1.1.1.2.1h.1l.6-.4c.1 0 .1-.1.1-.2l.2.1v7.2l-6.2-3.6V5.7zm7.3 10.8V9.3l.2-.1c0 .1 0 .2.1.2l.6.4h.1c.1 0 .1 0 .2-.1 0-.1 0-.2-.1-.2l-.6-.4h-.1l5.8-3.4v7.2l-6.2 3.6z"></path><path d="M13.1 11.6l-.6-.4c-.1-.1-.2 0-.2.1s0 .2.1.2l.6.4h.1c.1 0 .1 0 .2-.1 0 0-.1-.2-.2-.2zM14.4 12.3l-.6-.4c-.1-.1-.2 0-.2.1s0 .2.1.2l.6.4h.1c.1 0 .1 0 .2-.1-.1 0-.2-.2-.2-.2zM11.9 10.9l-.6-.4c-.1-.1-.2 0-.2.1s0 .2.1.2l.6.4h.1c.1 0 .1 0 .2-.1-.1 0-.1-.2-.2-.2zM10.7 10.2l-.6-.4c-.1-.1-.2 0-.2.1s0 .2.1.2l.6.4h.1c.1 0 .1 0 .2-.1-.1-.1-.1-.2-.2-.2zM2 11.9l-.6.4c-.1 0-.1.2-.1.2 0 .1.1.1.2.1h.1l.6-.4c.1 0 .1-.2.1-.2-.1-.1-.2-.1-.3-.1zM5.6 9.8l-.6.4c-.1 0-.1.2-.1.2 0 .1.1.1.2.1h.1l.6-.4c.1 0 .1-.2.1-.2-.1-.1-.2-.1-.3-.1zM3.2 11.2l-.6.4c-.1 0-.1.2-.1.2 0 .1.1.1.2.1h.1l.6-.4c.1 0 .1-.2.1-.2-.1-.1-.2-.1-.3-.1zM4.4 10.5l-.6.4c-.1 0-.1.2-.1.2 0 .1.1.1.2.1H4l.6-.4c.1 0 .1-.2.1-.2-.1-.1-.2-.1-.3-.1z"></path></g></svg></div>
              <div class="content">
                  <a href="/docs/auditable-transition" class="package-title">Transition</a>
                  <p>Ability use an Audit record to transition between the states of an Auditable model. </p>
              </div>
          </div>
      </div>
  </div>
</div>

<style>
	.docs .slide-main-nav .nav-docs {
		display: block;
	}
	
	.slide-menu .slide-main-nav li {
	    margin: 15px 0;
	}
</style>

@endsection


