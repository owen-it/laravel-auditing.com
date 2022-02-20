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

<style>
.relative {
  position: relative;
}

.absolute {
  position: absolute;
}

.max-w-screen-xl {
  max-width: 1280px;
}

.px-5 {
  padding-left: 1.25rem; /* 20px */
  padding-right: 1.25rem; /* 20px */
}

.mx-auto {
  margin-left: auto;
  margin-right: auto;
}

.-left-2 {
  left: -0.5rem; /* -8px */
}

.-translate-y-12 {
  --tw-translate-y: -3rem; /* -48px */
}

.pointer-events-none {
  pointer-events: none;
}

@media (min-width: 768px) {
  .md\:left-\[12\%\] {
    left: 12%;
  }
}

.text-gray-300 {
  --tw-text-opacity: 1;
  color: rgba(209, 213, 219, var(--tw-text-opacity));
}

.-right-2 {
  right: -0.5rem; /* -8px */
}

.-translate-y-20 {
  --tw-translate-y: -5rem; /* -80px */
}

@media (min-width: 768px) {
  .md\:right-1\/4 {
    right: 25%;
  }
}

.right-6 {
  right: 1.5rem; /* 24px */
}

.bottom-0 {
  bottom: 0px;
}

.translate-y-20 {
  --tw-translate-y: 5rem; /* 80px */
}

@media (min-width: 768px) {
  .md\:right-\[12\%\] {
    right: 12%;
  }
}

.translate-y-12 {
  --tw-translate-y: 3rem; /* 48px */
}

.h-full {
  height: 100%;
}

.left-5 {
  left: 1.25rem; /* 20px */
}

@media (min-width: 768px) {
  .md\:left-\[35\%\] {
    left: 35%;
  }
}

.-bottom-10 {
  bottom: -2.5rem; /* -40px */
}

.transform {
    transform: var(--tw-transform);
}

@-webkit-keyframes cube {
    50% {
        transform: translateY(2rem)
    }
}

@keyframes cube {
    50% {
        transform: translateY(2rem)
    }
}

.animate-cube {
    -webkit-animation: cube 6s ease-in-out infinite;
    animation: cube 6s ease-in-out infinite
}

.animate-delay-1s {
  -webkit-animation-delay: 1s;
  animation-delay: 1s;
}

.animate-delay-2s {
  -webkit-animation-delay: 2s;
  animation-delay: 2s;
}

.animate-delay-3s {
  -webkit-animation-delay: 3s;
  animation-delay: 3s;
}

.animate-delay-4s {
  -webkit-animation-delay: 4s;
  animation-delay: 4s;
}

.text-gray-300 {
  --tw-text-opacity: 1;
  color: rgba(209, 213, 219, var(--tw-text-opacity));
}
</style>

<div class="container hero">
    <div class="why">
        <div class="relative max-w-screen-xl px-5 mx-auto">
            <div class="absolute -left-2 translate-y-12 pointer-events-none md:left-[12%]">
                <svg class="text-gray-300 animate-delay-1s animate-cube" width="26" height="33" viewBox="0 0 46 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="m23.102 1 22.1 12.704v25.404M23.101 1l-22.1 12.704v25.404" stroke="currentColor" stroke-width="1.435" stroke-linejoin="bevel"></path>
                    <path d="m45.202 39.105-22.1 12.702L1 39.105" stroke="currentColor" stroke-width="1.435" stroke-linejoin="bevel"></path>
                    <path transform="matrix(.86698 .49834 .00003 1 1 13.699)" stroke="currentColor" stroke-width="1.435" stroke-linejoin="bevel" d="M0 0h25.491v25.405H0z"></path>
                    <path transform="matrix(.86698 -.49834 -.00003 1 23.102 26.402)" stroke="currentColor" stroke-width="1.435" stroke-linejoin="bevel" d="M0 0h25.491v25.405H0z"></path>
                    <path transform="matrix(.86701 -.49829 .86701 .49829 1 13.702)" stroke="currentColor" stroke-width="1.435" stroke-linejoin="bevel" d="M0 0h25.491v25.491H0z"></path>
                </svg>
            </div>
            <div class="absolute -right-2 translate-y-20 pointer-events-none md:right-1/4">
                <svg class="text-gray-300 animate-delay-3s animate-cube" width="26" height="33" viewBox="0 0 46 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="m23.102 1 22.1 12.704v25.404M23.101 1l-22.1 12.704v25.404" stroke="currentColor" stroke-width="1.435" stroke-linejoin="bevel"></path>
                    <path d="m45.202 39.105-22.1 12.702L1 39.105" stroke="currentColor" stroke-width="1.435" stroke-linejoin="bevel"></path>
                    <path transform="matrix(.86698 .49834 .00003 1 1 13.699)" stroke="currentColor" stroke-width="1.435" stroke-linejoin="bevel" d="M0 0h25.491v25.405H0z"></path>
                    <path transform="matrix(.86698 -.49834 -.00003 1 23.102 26.402)" stroke="currentColor" stroke-width="1.435" stroke-linejoin="bevel" d="M0 0h25.491v25.405H0z"></path>
                    <path transform="matrix(.86701 -.49829 .86701 .49829 1 13.702)" stroke="currentColor" stroke-width="1.435" stroke-linejoin="bevel" d="M0 0h25.491v25.491H0z"></path>
                </svg>
            </div>
            <div class="absolute bottom-0 right-6 pointer-events-none md:right-[12%]">
                <svg class="text-gray-300 animate-delay-2s animate-cube" width="26" height="33" viewBox="0 0 46 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="m23.102 1 22.1 12.704v25.404M23.101 1l-22.1 12.704v25.404" stroke="currentColor" stroke-width="1.435" stroke-linejoin="bevel"></path>
                    <path d="m45.202 39.105-22.1 12.702L1 39.105" stroke="currentColor" stroke-width="1.435" stroke-linejoin="bevel"></path>
                    <path transform="matrix(.86698 .49834 .00003 1 1 13.699)" stroke="currentColor" stroke-width="1.435" stroke-linejoin="bevel" d="M0 0h25.491v25.405H0z"></path>
                    <path transform="matrix(.86698 -.49834 -.00003 1 23.102 26.402)" stroke="currentColor" stroke-width="1.435" stroke-linejoin="bevel" d="M0 0h25.491v25.405H0z"></path>
                    <path transform="matrix(.86701 -.49829 .86701 .49829 1 13.702)" stroke="currentColor" stroke-width="1.435" stroke-linejoin="bevel" d="M0 0h25.491v25.491H0z"></path>
                </svg>
            </div>
            <div class="absolute -bottom-10 left-5 pointer-events-none md:left-[35%]">
                <svg class="text-gray-300 animate-cube" width="26" height="33" viewBox="0 0 46 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="m23.102 1 22.1 12.704v25.404M23.101 1l-22.1 12.704v25.404" stroke="currentColor" stroke-width="1.435" stroke-linejoin="bevel"></path>
                    <path d="m45.202 39.105-22.1 12.702L1 39.105" stroke="currentColor" stroke-width="1.435" stroke-linejoin="bevel"></path>
                    <path transform="matrix(.86698 .49834 .00003 1 1 13.699)" stroke="currentColor" stroke-width="1.435" stroke-linejoin="bevel" d="M0 0h25.491v25.405H0z"></path>
                    <path transform="matrix(.86698 -.49834 -.00003 1 23.102 26.402)" stroke="currentColor" stroke-width="1.435" stroke-linejoin="bevel" d="M0 0h25.491v25.405H0z"></path>
                    <path transform="matrix(.86701 -.49829 .86701 .49829 1 13.702)" stroke="currentColor" stroke-width="1.435" stroke-linejoin="bevel" d="M0 0h25.491v25.491H0z"></path>
                </svg>
            </div>
            <div>
                <h1>Why auditing?</h1>
                <p class="container">
                    This package will help you understand changes in your Eloquent models, by providing information <br>
                    about possible discrepancies and anomalies that could indicate business concerns or suspect activities. <nr>
                </p>

                <a href="/docs/{{ DEFAULT_VERSION }}" style="margin-top: 15px" class="btn menu-link">
                    Get Started →
                </a>
            </div>
        </div>
    </div>
    <div class="callout rule">
        <span class="text">Features</span>
    </div>
    <div class="packages" style="padding: 0 15px;">
        <div class="third">
            <div class="package">
                <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="15.7" height="18" viewBox="0 0 15.7 18">
                        <g fill="#7F7F7F">
                            <path d="M15.7 4.7c0-.2-.1-.3-.3-.4L8.1.1C8 0 7.8 0 7.6.1L.3 4.3c-.2.1-.3.3-.3.4v8.5c0 .2.1.4.3.5l7.3 4.2h.2l.2.1h.1l7.3-4.2c.2-.1.3-.3.3-.5V4.7c0 .1 0 .1 0 0zM7.9 1.2l6.3 3.6-6.3 3.6-6.3-3.6 6.3-3.6zM1.1 5.7l5.8 3.4h-.1l-.6.4c-.1 0-.1.2-.1.2 0 .1.1.1.2.1h.1l.6-.4c.1 0 .1-.1.1-.2l.2.1v7.2l-6.2-3.6V5.7zm7.3 10.8V9.3l.2-.1c0 .1 0 .2.1.2l.6.4h.1c.1 0 .1 0 .2-.1 0-.1 0-.2-.1-.2l-.6-.4h-.1l5.8-3.4v7.2l-6.2 3.6z"></path>
                            <path d="M13.1 11.6l-.6-.4c-.1-.1-.2 0-.2.1s0 .2.1.2l.6.4h.1c.1 0 .1 0 .2-.1 0 0-.1-.2-.2-.2zM14.4 12.3l-.6-.4c-.1-.1-.2 0-.2.1s0 .2.1.2l.6.4h.1c.1 0 .1 0 .2-.1-.1 0-.2-.2-.2-.2zM11.9 10.9l-.6-.4c-.1-.1-.2 0-.2.1s0 .2.1.2l.6.4h.1c.1 0 .1 0 .2-.1-.1 0-.1-.2-.2-.2zM10.7 10.2l-.6-.4c-.1-.1-.2 0-.2.1s0 .2.1.2l.6.4h.1c.1 0 .1 0 .2-.1-.1-.1-.1-.2-.2-.2zM2 11.9l-.6.4c-.1 0-.1.2-.1.2 0 .1.1.1.2.1h.1l.6-.4c.1 0 .1-.2.1-.2-.1-.1-.2-.1-.3-.1zM5.6 9.8l-.6.4c-.1 0-.1.2-.1.2 0 .1.1.1.2.1h.1l.6-.4c.1 0 .1-.2.1-.2-.1-.1-.2-.1-.3-.1zM3.2 11.2l-.6.4c-.1 0-.1.2-.1.2 0 .1.1.1.2.1h.1l.6-.4c.1 0 .1-.2.1-.2-.1-.1-.2-.1-.3-.1zM4.4 10.5l-.6.4c-.1 0-.1.2-.1.2 0 .1.1.1.2.1H4l.6-.4c.1 0 .1-.2.1-.2-.1-.1-.2-.1-.3-.1z"></path>
                        </g>
                    </svg></div>
                <div class="content">
                    <a href="/docs/{{ DEFAULT_VERSION }}/auditor" class="package-title">Auditor</a>
                    <p>The Auditor class is responsible for auditing and clearing Audit records.</p>
                </div>
            </div>
            <div class="package">
                <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="15.7" height="18" viewBox="0 0 15.7 18">
                        <g fill="#7F7F7F">
                            <path d="M15.7 4.7c0-.2-.1-.3-.3-.4L8.1.1C8 0 7.8 0 7.6.1L.3 4.3c-.2.1-.3.3-.3.4v8.5c0 .2.1.4.3.5l7.3 4.2h.2l.2.1h.1l7.3-4.2c.2-.1.3-.3.3-.5V4.7c0 .1 0 .1 0 0zM7.9 1.2l6.3 3.6-6.3 3.6-6.3-3.6 6.3-3.6zM1.1 5.7l5.8 3.4h-.1l-.6.4c-.1 0-.1.2-.1.2 0 .1.1.1.2.1h.1l.6-.4c.1 0 .1-.1.1-.2l.2.1v7.2l-6.2-3.6V5.7zm7.3 10.8V9.3l.2-.1c0 .1 0 .2.1.2l.6.4h.1c.1 0 .1 0 .2-.1 0-.1 0-.2-.1-.2l-.6-.4h-.1l5.8-3.4v7.2l-6.2 3.6z"></path>
                            <path d="M13.1 11.6l-.6-.4c-.1-.1-.2 0-.2.1s0 .2.1.2l.6.4h.1c.1 0 .1 0 .2-.1 0 0-.1-.2-.2-.2zM14.4 12.3l-.6-.4c-.1-.1-.2 0-.2.1s0 .2.1.2l.6.4h.1c.1 0 .1 0 .2-.1-.1 0-.2-.2-.2-.2zM11.9 10.9l-.6-.4c-.1-.1-.2 0-.2.1s0 .2.1.2l.6.4h.1c.1 0 .1 0 .2-.1-.1 0-.1-.2-.2-.2zM10.7 10.2l-.6-.4c-.1-.1-.2 0-.2.1s0 .2.1.2l.6.4h.1c.1 0 .1 0 .2-.1-.1-.1-.1-.2-.2-.2zM2 11.9l-.6.4c-.1 0-.1.2-.1.2 0 .1.1.1.2.1h.1l.6-.4c.1 0 .1-.2.1-.2-.1-.1-.2-.1-.3-.1zM5.6 9.8l-.6.4c-.1 0-.1.2-.1.2 0 .1.1.1.2.1h.1l.6-.4c.1 0 .1-.2.1-.2-.1-.1-.2-.1-.3-.1zM3.2 11.2l-.6.4c-.1 0-.1.2-.1.2 0 .1.1.1.2.1h.1l.6-.4c.1 0 .1-.2.1-.2-.1-.1-.2-.1-.3-.1zM4.4 10.5l-.6.4c-.1 0-.1.2-.1.2 0 .1.1.1.2.1H4l.6-.4c.1 0 .1-.2.1-.2-.1-.1-.2-.1-.3-.1z"></path>
                        </g>
                    </svg></div>
                <div class="content">
                    <a href="/docs/{{ DEFAULT_VERSION }}/audit-redactors" class="package-title">Redactors</a>
                    <p>Redactors were introduced in version 6.1.0, and are an easy way to mask sensitive information when auditing.</p>
                </div>
            </div>
            <div class="package">
                <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="15.7" height="18" viewBox="0 0 15.7 18">
                        <g fill="#7F7F7F">
                            <path d="M15.7 4.7c0-.2-.1-.3-.3-.4L8.1.1C8 0 7.8 0 7.6.1L.3 4.3c-.2.1-.3.3-.3.4v8.5c0 .2.1.4.3.5l7.3 4.2h.2l.2.1h.1l7.3-4.2c.2-.1.3-.3.3-.5V4.7c0 .1 0 .1 0 0zM7.9 1.2l6.3 3.6-6.3 3.6-6.3-3.6 6.3-3.6zM1.1 5.7l5.8 3.4h-.1l-.6.4c-.1 0-.1.2-.1.2 0 .1.1.1.2.1h.1l.6-.4c.1 0 .1-.1.1-.2l.2.1v7.2l-6.2-3.6V5.7zm7.3 10.8V9.3l.2-.1c0 .1 0 .2.1.2l.6.4h.1c.1 0 .1 0 .2-.1 0-.1 0-.2-.1-.2l-.6-.4h-.1l5.8-3.4v7.2l-6.2 3.6z"></path>
                            <path d="M13.1 11.6l-.6-.4c-.1-.1-.2 0-.2.1s0 .2.1.2l.6.4h.1c.1 0 .1 0 .2-.1 0 0-.1-.2-.2-.2zM14.4 12.3l-.6-.4c-.1-.1-.2 0-.2.1s0 .2.1.2l.6.4h.1c.1 0 .1 0 .2-.1-.1 0-.2-.2-.2-.2zM11.9 10.9l-.6-.4c-.1-.1-.2 0-.2.1s0 .2.1.2l.6.4h.1c.1 0 .1 0 .2-.1-.1 0-.1-.2-.2-.2zM10.7 10.2l-.6-.4c-.1-.1-.2 0-.2.1s0 .2.1.2l.6.4h.1c.1 0 .1 0 .2-.1-.1-.1-.1-.2-.2-.2zM2 11.9l-.6.4c-.1 0-.1.2-.1.2 0 .1.1.1.2.1h.1l.6-.4c.1 0 .1-.2.1-.2-.1-.1-.2-.1-.3-.1zM5.6 9.8l-.6.4c-.1 0-.1.2-.1.2 0 .1.1.1.2.1h.1l.6-.4c.1 0 .1-.2.1-.2-.1-.1-.2-.1-.3-.1zM3.2 11.2l-.6.4c-.1 0-.1.2-.1.2 0 .1.1.1.2.1h.1l.6-.4c.1 0 .1-.2.1-.2-.1-.1-.2-.1-.3-.1zM4.4 10.5l-.6.4c-.1 0-.1.2-.1.2 0 .1.1.1.2.1H4l.6-.4c.1 0 .1-.2.1-.2-.1-.1-.2-.1-.3-.1z"></path>
                        </g>
                    </svg></div>
                <div class="content">
                    <a href="/docs/{{ DEFAULT_VERSION }}/audit-presentation" class="package-title">Presentation</a>
                    <p>The metadata and modified data can be accessed in several ways..</p>
                </div>
            </div>
        </div>
        <div class="third">
            <div class="package">
                <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="15.7" height="18" viewBox="0 0 15.7 18">
                        <g fill="#7F7F7F">
                            <path d="M15.7 4.7c0-.2-.1-.3-.3-.4L8.1.1C8 0 7.8 0 7.6.1L.3 4.3c-.2.1-.3.3-.3.4v8.5c0 .2.1.4.3.5l7.3 4.2h.2l.2.1h.1l7.3-4.2c.2-.1.3-.3.3-.5V4.7c0 .1 0 .1 0 0zM7.9 1.2l6.3 3.6-6.3 3.6-6.3-3.6 6.3-3.6zM1.1 5.7l5.8 3.4h-.1l-.6.4c-.1 0-.1.2-.1.2 0 .1.1.1.2.1h.1l.6-.4c.1 0 .1-.1.1-.2l.2.1v7.2l-6.2-3.6V5.7zm7.3 10.8V9.3l.2-.1c0 .1 0 .2.1.2l.6.4h.1c.1 0 .1 0 .2-.1 0-.1 0-.2-.1-.2l-.6-.4h-.1l5.8-3.4v7.2l-6.2 3.6z"></path>
                            <path d="M13.1 11.6l-.6-.4c-.1-.1-.2 0-.2.1s0 .2.1.2l.6.4h.1c.1 0 .1 0 .2-.1 0 0-.1-.2-.2-.2zM14.4 12.3l-.6-.4c-.1-.1-.2 0-.2.1s0 .2.1.2l.6.4h.1c.1 0 .1 0 .2-.1-.1 0-.2-.2-.2-.2zM11.9 10.9l-.6-.4c-.1-.1-.2 0-.2.1s0 .2.1.2l.6.4h.1c.1 0 .1 0 .2-.1-.1 0-.1-.2-.2-.2zM10.7 10.2l-.6-.4c-.1-.1-.2 0-.2.1s0 .2.1.2l.6.4h.1c.1 0 .1 0 .2-.1-.1-.1-.1-.2-.2-.2zM2 11.9l-.6.4c-.1 0-.1.2-.1.2 0 .1.1.1.2.1h.1l.6-.4c.1 0 .1-.2.1-.2-.1-.1-.2-.1-.3-.1zM5.6 9.8l-.6.4c-.1 0-.1.2-.1.2 0 .1.1.1.2.1h.1l.6-.4c.1 0 .1-.2.1-.2-.1-.1-.2-.1-.3-.1zM3.2 11.2l-.6.4c-.1 0-.1.2-.1.2 0 .1.1.1.2.1h.1l.6-.4c.1 0 .1-.2.1-.2-.1-.1-.2-.1-.3-.1zM4.4 10.5l-.6.4c-.1 0-.1.2-.1.2 0 .1.1.1.2.1H4l.6-.4c.1 0 .1-.2.1-.2-.1-.1-.2-.1-.3-.1z"></path>
                        </g>
                    </svg></div>
                <div class="content">
                    <a href="/docs/{{ DEFAULT_VERSION }}/audit-resolvers" class="package-title">Resolvers</a>
                    <p>Resolvers provide a convenient way to get the basic data for audit.</p>
                </div>
            </div>
            <div class="package">
                <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="15.7" height="18" viewBox="0 0 15.7 18">
                        <g fill="#7F7F7F">
                            <path d="M15.7 4.7c0-.2-.1-.3-.3-.4L8.1.1C8 0 7.8 0 7.6.1L.3 4.3c-.2.1-.3.3-.3.4v8.5c0 .2.1.4.3.5l7.3 4.2h.2l.2.1h.1l7.3-4.2c.2-.1.3-.3.3-.5V4.7c0 .1 0 .1 0 0zM7.9 1.2l6.3 3.6-6.3 3.6-6.3-3.6 6.3-3.6zM1.1 5.7l5.8 3.4h-.1l-.6.4c-.1 0-.1.2-.1.2 0 .1.1.1.2.1h.1l.6-.4c.1 0 .1-.1.1-.2l.2.1v7.2l-6.2-3.6V5.7zm7.3 10.8V9.3l.2-.1c0 .1 0 .2.1.2l.6.4h.1c.1 0 .1 0 .2-.1 0-.1 0-.2-.1-.2l-.6-.4h-.1l5.8-3.4v7.2l-6.2 3.6z"></path>
                            <path d="M13.1 11.6l-.6-.4c-.1-.1-.2 0-.2.1s0 .2.1.2l.6.4h.1c.1 0 .1 0 .2-.1 0 0-.1-.2-.2-.2zM14.4 12.3l-.6-.4c-.1-.1-.2 0-.2.1s0 .2.1.2l.6.4h.1c.1 0 .1 0 .2-.1-.1 0-.2-.2-.2-.2zM11.9 10.9l-.6-.4c-.1-.1-.2 0-.2.1s0 .2.1.2l.6.4h.1c.1 0 .1 0 .2-.1-.1 0-.1-.2-.2-.2zM10.7 10.2l-.6-.4c-.1-.1-.2 0-.2.1s0 .2.1.2l.6.4h.1c.1 0 .1 0 .2-.1-.1-.1-.1-.2-.2-.2zM2 11.9l-.6.4c-.1 0-.1.2-.1.2 0 .1.1.1.2.1h.1l.6-.4c.1 0 .1-.2.1-.2-.1-.1-.2-.1-.3-.1zM5.6 9.8l-.6.4c-.1 0-.1.2-.1.2 0 .1.1.1.2.1h.1l.6-.4c.1 0 .1-.2.1-.2-.1-.1-.2-.1-.3-.1zM3.2 11.2l-.6.4c-.1 0-.1.2-.1.2 0 .1.1.1.2.1h.1l.6-.4c.1 0 .1-.2.1-.2-.1-.1-.2-.1-.3-.1zM4.4 10.5l-.6.4c-.1 0-.1.2-.1.2 0 .1.1.1.2.1H4l.6-.4c.1 0 .1-.2.1-.2-.1-.1-.2-.1-.3-.1z"></path>
                        </g>
                    </svg></div>
                <div class="content">
                    <a href="/docs/{{ DEFAULT_VERSION }}/audit-resolvers" class="package-title">Drivers</a>
                    <p>Besides storing model attribute changes, drivers also handle pruning when an audit threshold is set.</p>
                </div>
            </div>
            <div class="package">
                <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="15.7" height="18" viewBox="0 0 15.7 18">
                        <g fill="#7F7F7F">
                            <path d="M15.7 4.7c0-.2-.1-.3-.3-.4L8.1.1C8 0 7.8 0 7.6.1L.3 4.3c-.2.1-.3.3-.3.4v8.5c0 .2.1.4.3.5l7.3 4.2h.2l.2.1h.1l7.3-4.2c.2-.1.3-.3.3-.5V4.7c0 .1 0 .1 0 0zM7.9 1.2l6.3 3.6-6.3 3.6-6.3-3.6 6.3-3.6zM1.1 5.7l5.8 3.4h-.1l-.6.4c-.1 0-.1.2-.1.2 0 .1.1.1.2.1h.1l.6-.4c.1 0 .1-.1.1-.2l.2.1v7.2l-6.2-3.6V5.7zm7.3 10.8V9.3l.2-.1c0 .1 0 .2.1.2l.6.4h.1c.1 0 .1 0 .2-.1 0-.1 0-.2-.1-.2l-.6-.4h-.1l5.8-3.4v7.2l-6.2 3.6z"></path>
                            <path d="M13.1 11.6l-.6-.4c-.1-.1-.2 0-.2.1s0 .2.1.2l.6.4h.1c.1 0 .1 0 .2-.1 0 0-.1-.2-.2-.2zM14.4 12.3l-.6-.4c-.1-.1-.2 0-.2.1s0 .2.1.2l.6.4h.1c.1 0 .1 0 .2-.1-.1 0-.2-.2-.2-.2zM11.9 10.9l-.6-.4c-.1-.1-.2 0-.2.1s0 .2.1.2l.6.4h.1c.1 0 .1 0 .2-.1-.1 0-.1-.2-.2-.2zM10.7 10.2l-.6-.4c-.1-.1-.2 0-.2.1s0 .2.1.2l.6.4h.1c.1 0 .1 0 .2-.1-.1-.1-.1-.2-.2-.2zM2 11.9l-.6.4c-.1 0-.1.2-.1.2 0 .1.1.1.2.1h.1l.6-.4c.1 0 .1-.2.1-.2-.1-.1-.2-.1-.3-.1zM5.6 9.8l-.6.4c-.1 0-.1.2-.1.2 0 .1.1.1.2.1h.1l.6-.4c.1 0 .1-.2.1-.2-.1-.1-.2-.1-.3-.1zM3.2 11.2l-.6.4c-.1 0-.1.2-.1.2 0 .1.1.1.2.1h.1l.6-.4c.1 0 .1-.2.1-.2-.1-.1-.2-.1-.3-.1zM4.4 10.5l-.6.4c-.1 0-.1.2-.1.2 0 .1.1.1.2.1H4l.6-.4c.1 0 .1-.2.1-.2-.1-.1-.2-.1-.3-.1z"></path>
                        </g>
                    </svg></div>
                <div class="content">
                    <a href="/docs/{{ DEFAULT_VERSION }}/audit-transformation" class="package-title">Transformation</a>
                    <p>If needed, the Audit data can be transformed before being stored.</p>
                </div>
            </div>
        </div>
        <div class="third">
            <div class="package">
                <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="15.7" height="18" viewBox="0 0 15.7 18">
                        <g fill="#7F7F7F">
                            <path d="M15.7 4.7c0-.2-.1-.3-.3-.4L8.1.1C8 0 7.8 0 7.6.1L.3 4.3c-.2.1-.3.3-.3.4v8.5c0 .2.1.4.3.5l7.3 4.2h.2l.2.1h.1l7.3-4.2c.2-.1.3-.3.3-.5V4.7c0 .1 0 .1 0 0zM7.9 1.2l6.3 3.6-6.3 3.6-6.3-3.6 6.3-3.6zM1.1 5.7l5.8 3.4h-.1l-.6.4c-.1 0-.1.2-.1.2 0 .1.1.1.2.1h.1l.6-.4c.1 0 .1-.1.1-.2l.2.1v7.2l-6.2-3.6V5.7zm7.3 10.8V9.3l.2-.1c0 .1 0 .2.1.2l.6.4h.1c.1 0 .1 0 .2-.1 0-.1 0-.2-.1-.2l-.6-.4h-.1l5.8-3.4v7.2l-6.2 3.6z"></path>
                            <path d="M13.1 11.6l-.6-.4c-.1-.1-.2 0-.2.1s0 .2.1.2l.6.4h.1c.1 0 .1 0 .2-.1 0 0-.1-.2-.2-.2zM14.4 12.3l-.6-.4c-.1-.1-.2 0-.2.1s0 .2.1.2l.6.4h.1c.1 0 .1 0 .2-.1-.1 0-.2-.2-.2-.2zM11.9 10.9l-.6-.4c-.1-.1-.2 0-.2.1s0 .2.1.2l.6.4h.1c.1 0 .1 0 .2-.1-.1 0-.1-.2-.2-.2zM10.7 10.2l-.6-.4c-.1-.1-.2 0-.2.1s0 .2.1.2l.6.4h.1c.1 0 .1 0 .2-.1-.1-.1-.1-.2-.2-.2zM2 11.9l-.6.4c-.1 0-.1.2-.1.2 0 .1.1.1.2.1h.1l.6-.4c.1 0 .1-.2.1-.2-.1-.1-.2-.1-.3-.1zM5.6 9.8l-.6.4c-.1 0-.1.2-.1.2 0 .1.1.1.2.1h.1l.6-.4c.1 0 .1-.2.1-.2-.1-.1-.2-.1-.3-.1zM3.2 11.2l-.6.4c-.1 0-.1.2-.1.2 0 .1.1.1.2.1h.1l.6-.4c.1 0 .1-.2.1-.2-.1-.1-.2-.1-.3-.1zM4.4 10.5l-.6.4c-.1 0-.1.2-.1.2 0 .1.1.1.2.1H4l.6-.4c.1 0 .1-.2.1-.2-.1-.1-.2-.1-.3-.1z"></path>
                        </g>
                    </svg></div>
                <div class="content">
                    <a href="/docs/{{ DEFAULT_VERSION }}/audit-tags" class="package-title">Tags</a>
                    <p>Tags mark audit logs and are very useful for filtering..</p>
                </div>
            </div>
            <div class="package">
                <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="15.7" height="18" viewBox="0 0 15.7 18">
                        <g fill="#7F7F7F">
                            <path d="M15.7 4.7c0-.2-.1-.3-.3-.4L8.1.1C8 0 7.8 0 7.6.1L.3 4.3c-.2.1-.3.3-.3.4v8.5c0 .2.1.4.3.5l7.3 4.2h.2l.2.1h.1l7.3-4.2c.2-.1.3-.3.3-.5V4.7c0 .1 0 .1 0 0zM7.9 1.2l6.3 3.6-6.3 3.6-6.3-3.6 6.3-3.6zM1.1 5.7l5.8 3.4h-.1l-.6.4c-.1 0-.1.2-.1.2 0 .1.1.1.2.1h.1l.6-.4c.1 0 .1-.1.1-.2l.2.1v7.2l-6.2-3.6V5.7zm7.3 10.8V9.3l.2-.1c0 .1 0 .2.1.2l.6.4h.1c.1 0 .1 0 .2-.1 0-.1 0-.2-.1-.2l-.6-.4h-.1l5.8-3.4v7.2l-6.2 3.6z"></path>
                            <path d="M13.1 11.6l-.6-.4c-.1-.1-.2 0-.2.1s0 .2.1.2l.6.4h.1c.1 0 .1 0 .2-.1 0 0-.1-.2-.2-.2zM14.4 12.3l-.6-.4c-.1-.1-.2 0-.2.1s0 .2.1.2l.6.4h.1c.1 0 .1 0 .2-.1-.1 0-.2-.2-.2-.2zM11.9 10.9l-.6-.4c-.1-.1-.2 0-.2.1s0 .2.1.2l.6.4h.1c.1 0 .1 0 .2-.1-.1 0-.1-.2-.2-.2zM10.7 10.2l-.6-.4c-.1-.1-.2 0-.2.1s0 .2.1.2l.6.4h.1c.1 0 .1 0 .2-.1-.1-.1-.1-.2-.2-.2zM2 11.9l-.6.4c-.1 0-.1.2-.1.2 0 .1.1.1.2.1h.1l.6-.4c.1 0 .1-.2.1-.2-.1-.1-.2-.1-.3-.1zM5.6 9.8l-.6.4c-.1 0-.1.2-.1.2 0 .1.1.1.2.1h.1l.6-.4c.1 0 .1-.2.1-.2-.1-.1-.2-.1-.3-.1zM3.2 11.2l-.6.4c-.1 0-.1.2-.1.2 0 .1.1.1.2.1h.1l.6-.4c.1 0 .1-.2.1-.2-.1-.1-.2-.1-.3-.1zM4.4 10.5l-.6.4c-.1 0-.1.2-.1.2 0 .1.1.1.2.1H4l.6-.4c.1 0 .1-.2.1-.2-.1-.1-.2-.1-.3-.1z"></path>
                        </g>
                    </svg></div>
                <div class="content">
                    <a href="/docs/{{ DEFAULT_VERSION }}/audit-events" class="package-title">Events</a>
                    <p>Auditing's events provide a simple observer pattern implementation, allowing you to subscribe and listen to the audit events.</p>
                </div>
            </div>
            <div class="package last">
                <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="15.7" height="18" viewBox="0 0 15.7 18">
                        <g fill="#7F7F7F">
                            <path d="M15.7 4.7c0-.2-.1-.3-.3-.4L8.1.1C8 0 7.8 0 7.6.1L.3 4.3c-.2.1-.3.3-.3.4v8.5c0 .2.1.4.3.5l7.3 4.2h.2l.2.1h.1l7.3-4.2c.2-.1.3-.3.3-.5V4.7c0 .1 0 .1 0 0zM7.9 1.2l6.3 3.6-6.3 3.6-6.3-3.6 6.3-3.6zM1.1 5.7l5.8 3.4h-.1l-.6.4c-.1 0-.1.2-.1.2 0 .1.1.1.2.1h.1l.6-.4c.1 0 .1-.1.1-.2l.2.1v7.2l-6.2-3.6V5.7zm7.3 10.8V9.3l.2-.1c0 .1 0 .2.1.2l.6.4h.1c.1 0 .1 0 .2-.1 0-.1 0-.2-.1-.2l-.6-.4h-.1l5.8-3.4v7.2l-6.2 3.6z"></path>
                            <path d="M13.1 11.6l-.6-.4c-.1-.1-.2 0-.2.1s0 .2.1.2l.6.4h.1c.1 0 .1 0 .2-.1 0 0-.1-.2-.2-.2zM14.4 12.3l-.6-.4c-.1-.1-.2 0-.2.1s0 .2.1.2l.6.4h.1c.1 0 .1 0 .2-.1-.1 0-.2-.2-.2-.2zM11.9 10.9l-.6-.4c-.1-.1-.2 0-.2.1s0 .2.1.2l.6.4h.1c.1 0 .1 0 .2-.1-.1 0-.1-.2-.2-.2zM10.7 10.2l-.6-.4c-.1-.1-.2 0-.2.1s0 .2.1.2l.6.4h.1c.1 0 .1 0 .2-.1-.1-.1-.1-.2-.2-.2zM2 11.9l-.6.4c-.1 0-.1.2-.1.2 0 .1.1.1.2.1h.1l.6-.4c.1 0 .1-.2.1-.2-.1-.1-.2-.1-.3-.1zM5.6 9.8l-.6.4c-.1 0-.1.2-.1.2 0 .1.1.1.2.1h.1l.6-.4c.1 0 .1-.2.1-.2-.1-.1-.2-.1-.3-.1zM3.2 11.2l-.6.4c-.1 0-.1.2-.1.2 0 .1.1.1.2.1h.1l.6-.4c.1 0 .1-.2.1-.2-.1-.1-.2-.1-.3-.1zM4.4 10.5l-.6.4c-.1 0-.1.2-.1.2 0 .1.1.1.2.1H4l.6-.4c.1 0 .1-.2.1-.2-.1-.1-.2-.1-.3-.1z"></path>
                        </g>
                    </svg></div>
                <div class="content">
                    <a href="/docs/{{ DEFAULT_VERSION }}/auditable-transition" class="package-title">Transition</a>
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