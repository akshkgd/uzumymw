@extends('layouts.ck')
@section('content')
    <div class="site-wrapper">
        <div class="hero wf-section">
            <div class="container wide">
                <div class="hero-inner move-up-on-scroll">
                    <div class="container">
                        <div class="navbar-wrapper">
                            <div class="navbar-sticky-wrapper is-sticky">
                                <div class="navbar-sticky-container">
                                    <div data-collapse="medium" data-animation="default" data-duration="400" data-easing="ease-in-out" data-easing2="ease-in-out" role="banner" class="navbar w-nav">
                                        <div class="menu-button w-nav-button">
                                            <div class="menu-button-icon w-embed"><svg width="1em" height="1em" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M11.5 18a1.5 1.5 0 000 3h25a1.5 1.5 0 000-3h-25zm0 9a1.5 1.5 0 000 3h25a1.5 1.5 0 000-3h-25z" fill="currentcolor" /></svg></div>
                                            <div
                                                class="menu-button-icon close w-embed"><svg width="1em" height="1em" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M17.56 15.44a1.5 1.5 0 00-2.12 2.12L21.88 24l-6.32 6.32a1.5 1.5 0 102.12 2.12L24 26.12l6.29 6.29a1.5 1.5 0 102.12-2.12L26.12 24l6.41-6.41a1.5 1.5 0 10-2.12-2.12L24 21.87l-6.44-6.43z" fill="currentcolor" /></svg></div>
                                    </div><a href="/" aria-current="page" class="header-logo w-nav-brand w--current"><img src="https://assets.website-files.com/60f05dbf1d8b772819778341/60f05dbf1d8b770a5d77835b_logo-superpeer.svg" loading="lazy" width="146" height="39" alt="" /></a>
                                    <div
                                        class="header-buttons-wrapper hide-from-users">
                                        <div class="header-buttons-desktop">
                                            <div class="header-buttons-desktop-sign-in"><a href="/login" class="button button-bordered button-medium button-small-text-on-mobile uppercase"><span class="nowrap-text">Sign In</span></a></div>
                                            <div class="header-buttons-desktop-cta">
                                                <a href="/register" class="button button-primary nowrap-text w-inline-block">
                                                    <div class="icon-in-button left w-embed"><svg width="1em" height="1em" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M13.82 13.24l-1.54-.33-.75-.17.09-.76v-.12c0-.16-.02-.32-.08-.47l-.18-.4.24-.4c.14-.22.2-.48.2-.77 0-.3-.08-.58-.25-.8l-.3-.4.2-.46c.08-.18.11-.37.11-.56 0-.27 0-1.08-1.26-1.56a4.26 4.26 0 00-1.2-.2l-1.37-.1.65-1.18c.53-.95.82-1.8.82-2.4 0-.55-.18-1.04-.59-1.2C7.2.34 6.2 1.3 5.47 2.48c-.57.95-1.29 2.18-1.72 3.09-.93 1.96-2.31 3.38-2.31 5.35 0 1.79 1.2 3.19 3.4 3.93 2.69.9 6.71 1.15 8.46 1.15 1.25 0 1.94-.49 1.94-1.38 0-.93-.88-1.26-1.42-1.38z" fill="#FFD338" />
<path d="M13.26 12.45l-2.7-.59c.21-.15.44-.47.44-.87 0-.46-.24-.72-.43-.86.25-.2.6-.54.6-1.17 0-.67-.46-1.02-.7-1.18.19-.18.46-.54.46-1.04 0-.88-.68-1.28-1.23-1.5a7 7 0 00-2.03-.22c-1.21 0-2.31.09-2.84.09-.62 0-.54-.32-.32-.62.15-.16 1.92-2.5 2.25-2.92.23-.3.5-.6.7-.49.22.12.13.66-.1 1.24-.34.92-.83 1.51-.94 1.71l.82.5c.31-.4 1.35-2.12 1.35-3.23 0-.5-.2-.92-.56-1.15-.37-.21-.85-.2-1.27.05-.28.17-.56.41-.8.72l-2.5 3.17c-.7.93-.38 2.08 1.14 2.08.54 0 2.29-.13 2.97-.13.78 0 1.16.04 1.43.08.5.07.8.3.8.6 0 .23-.1.38-.28.5-.18.13-.34.33-.34.6 0 .31.29.44.48.57.26.17.41.28.41.55 0 .24-.18.38-.38.53-.17.13-.39.27-.39.57 0 .26.2.4.32.5.13.1.27.21.27.43s-.1.32-.36.47c-.2.12-.5.33-.5.64 0 .34.25.5.54.57.7.17 2.8.62 3.51.78.23.05.46.13.46.32 0 .2-.3.28-.74.28-1.5 0-5.7-.3-8.16-1.16-1.67-.56-2.59-1.6-2.59-2.83 0-1.08.72-2.03 1.5-2.58l-.7-.72a4.17 4.17 0 00-1.9 3.32c0 1.5.9 3.04 3.36 3.87 2.62.88 6.59 1.15 8.44 1.15 1.27 0 1.88-.52 1.88-1.31-.01-.76-.63-1.17-1.37-1.32z" fill="#222" />
</svg></div>
                                                    <div class="uppercase">Become a Superpeer</div>
                                                </a>
                                            </div>
                                        </div>
                                </div>
                                <div class="header-buttons-wrapper hide-from-visitors">
                                    <div class="header-buttons-desktop">
                                        <div class="header-buttons-desktop-dashboard"><a href="/dashboard" class="button button-bordered button-medium uppercase">Go to Dashboard</a></div>
                                        <a href="/dashboard" class="header-buttons-desktop-dashboard-icon-button w-inline-block">
                                            <div class="html-embed w-embed"><svg width="1em" height="1em" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M12.42 1a5.42 5.42 0 100 10.83 5.42 5.42 0 000-10.83zM8.5 6.42a3.92 3.92 0 117.83 0 3.92 3.92 0 01-7.83 0zm-4 15.33a7.92 7.92 0 1115.83 0 .75.75 0 001.5 0 9.42 9.42 0 10-18.83 0 .75.75 0 001.5 0z" fill="currentcolor" /></svg></div>
                                        </a>
                                    </div>
                                </div>
                                <nav role="navigation" class="header-menu w-nav-menu"><a href="/" aria-current="page" class="header-menu-link w-nav-link w--current">Home</a><a href="/features" class="header-menu-link w-nav-link">Features</a><a href="/about" class="header-menu-link w-nav-link">About Us</a>
                                    <div
                                        class="header-buttons-mobile">
                                        <div class="header-buttons-mobile-cta hide-from-users">
                                            <a href="/register" class="button button-primary nowrap-text w-inline-block">
                                                <div class="icon-in-button left w-embed"><svg width="1em" height="1em" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M13.82 13.24l-1.54-.33-.75-.17.09-.76v-.12c0-.16-.02-.32-.08-.47l-.18-.4.24-.4c.14-.22.2-.48.2-.77 0-.3-.08-.58-.25-.8l-.3-.4.2-.46c.08-.18.11-.37.11-.56 0-.27 0-1.08-1.26-1.56a4.26 4.26 0 00-1.2-.2l-1.37-.1.65-1.18c.53-.95.82-1.8.82-2.4 0-.55-.18-1.04-.59-1.2C7.2.34 6.2 1.3 5.47 2.48c-.57.95-1.29 2.18-1.72 3.09-.93 1.96-2.31 3.38-2.31 5.35 0 1.79 1.2 3.19 3.4 3.93 2.69.9 6.71 1.15 8.46 1.15 1.25 0 1.94-.49 1.94-1.38 0-.93-.88-1.26-1.42-1.38z" fill="#FFD338" />
<path d="M13.26 12.45l-2.7-.59c.21-.15.44-.47.44-.87 0-.46-.24-.72-.43-.86.25-.2.6-.54.6-1.17 0-.67-.46-1.02-.7-1.18.19-.18.46-.54.46-1.04 0-.88-.68-1.28-1.23-1.5a7 7 0 00-2.03-.22c-1.21 0-2.31.09-2.84.09-.62 0-.54-.32-.32-.62.15-.16 1.92-2.5 2.25-2.92.23-.3.5-.6.7-.49.22.12.13.66-.1 1.24-.34.92-.83 1.51-.94 1.71l.82.5c.31-.4 1.35-2.12 1.35-3.23 0-.5-.2-.92-.56-1.15-.37-.21-.85-.2-1.27.05-.28.17-.56.41-.8.72l-2.5 3.17c-.7.93-.38 2.08 1.14 2.08.54 0 2.29-.13 2.97-.13.78 0 1.16.04 1.43.08.5.07.8.3.8.6 0 .23-.1.38-.28.5-.18.13-.34.33-.34.6 0 .31.29.44.48.57.26.17.41.28.41.55 0 .24-.18.38-.38.53-.17.13-.39.27-.39.57 0 .26.2.4.32.5.13.1.27.21.27.43s-.1.32-.36.47c-.2.12-.5.33-.5.64 0 .34.25.5.54.57.7.17 2.8.62 3.51.78.23.05.46.13.46.32 0 .2-.3.28-.74.28-1.5 0-5.7-.3-8.16-1.16-1.67-.56-2.59-1.6-2.59-2.83 0-1.08.72-2.03 1.5-2.58l-.7-.72a4.17 4.17 0 00-1.9 3.32c0 1.5.9 3.04 3.36 3.87 2.62.88 6.59 1.15 8.44 1.15 1.27 0 1.88-.52 1.88-1.31-.01-.76-.63-1.17-1.37-1.32z" fill="#222" />
</svg></div>
                                                <div class="uppercase">Become a Superpeer</div>
                                            </a>
                                        </div>
                                        <div class="header-buttons-mobile-dashboard hide-from-visitors">
                                            <a href="/dashboard" class="button button-bordered w-inline-block">
                                                <div class="uppercase">Go to Dashboard</div>
                                            </a>
                                        </div>
                            </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="jumbotron">
                <div class="flex-column-centered">
                    <h1>Host cohort-based courses, live events, or 1:1 sessions</h1>
                    <p class="hero-lead">Superpeer is an all-in-one video platform<strong> </strong>that gives you<strong> </strong>the tools you need to engage with your audience through video, and connect in a more authentic way.</p>
                    <div class="jumbotron-buttons">
                        <a href="/register" class="button button-primary button-large w-inline-block">
                            <div class="icon _24px mr-2 w-embed"><svg width="1em" height="1em" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M13.82 13.24l-1.54-.33-.75-.17.09-.76v-.12c0-.16-.02-.32-.08-.47l-.18-.4.24-.4c.14-.22.2-.48.2-.77 0-.3-.08-.58-.25-.8l-.3-.4.2-.46c.08-.18.11-.37.11-.56 0-.27 0-1.08-1.26-1.56a4.26 4.26 0 00-1.2-.2l-1.37-.1.65-1.18c.53-.95.82-1.8.82-2.4 0-.55-.18-1.04-.59-1.2C7.2.34 6.2 1.3 5.47 2.48c-.57.95-1.29 2.18-1.72 3.09-.93 1.96-2.31 3.38-2.31 5.35 0 1.79 1.2 3.19 3.4 3.93 2.69.9 6.71 1.15 8.46 1.15 1.25 0 1.94-.49 1.94-1.38 0-.93-.88-1.26-1.42-1.38z" fill="#FFD338" />
<path d="M13.26 12.45l-2.7-.59c.21-.15.44-.47.44-.87 0-.46-.24-.72-.43-.86.25-.2.6-.54.6-1.17 0-.67-.46-1.02-.7-1.18.19-.18.46-.54.46-1.04 0-.88-.68-1.28-1.23-1.5a7 7 0 00-2.03-.22c-1.21 0-2.31.09-2.84.09-.62 0-.54-.32-.32-.62.15-.16 1.92-2.5 2.25-2.92.23-.3.5-.6.7-.49.22.12.13.66-.1 1.24-.34.92-.83 1.51-.94 1.71l.82.5c.31-.4 1.35-2.12 1.35-3.23 0-.5-.2-.92-.56-1.15-.37-.21-.85-.2-1.27.05-.28.17-.56.41-.8.72l-2.5 3.17c-.7.93-.38 2.08 1.14 2.08.54 0 2.29-.13 2.97-.13.78 0 1.16.04 1.43.08.5.07.8.3.8.6 0 .23-.1.38-.28.5-.18.13-.34.33-.34.6 0 .31.29.44.48.57.26.17.41.28.41.55 0 .24-.18.38-.38.53-.17.13-.39.27-.39.57 0 .26.2.4.32.5.13.1.27.21.27.43s-.1.32-.36.47c-.2.12-.5.33-.5.64 0 .34.25.5.54.57.7.17 2.8.62 3.51.78.23.05.46.13.46.32 0 .2-.3.28-.74.28-1.5 0-5.7-.3-8.16-1.16-1.67-.56-2.59-1.6-2.59-2.83 0-1.08.72-2.03 1.5-2.58l-.7-.72a4.17 4.17 0 00-1.9 3.32c0 1.5.9 3.04 3.36 3.87 2.62.88 6.59 1.15 8.44 1.15 1.27 0 1.88-.52 1.88-1.31-.01-.76-.63-1.17-1.37-1.32z" fill="#222" />
</svg></div>
                            <div class="uppercase">Become a Superpeer</div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="hero-click-to-play">
                <div class="flex-column-centered">
                    <div data-click-to-play-mp4="https://stream.mux.com/2EfMeIuFfCSJ9T02hKGKKHqQ73H6cq1UbAI1JUB0000Oxc/high.mp4" class="click-to-play">
                        <div class="w-embed">
                            <style>
                                .click-to-play-icon::before {
                                    position: absolute;
                                    z-index: -10000;
                                    left: 50%;
                                    top: 50%;
                                    transform: translate(-50%, -50%);
                                    content: "";
                                    display: block;
                                    width: 100vw;
                                    height: 100vh;
                                }

                                .click-to-play-figure,
                                .click-to-play video {
                                    transition: opacity 240ms ease-in-out 120ms;
                                }

                                .click-to-play.playing .click-to-play-figure,
                                .click-to-play:not(.playing) video {
                                    opacity: 0;
                                    pointer-events: none;
                                }
                            </style>
                        </div>
                        <div class="click-to-play-inner">
                            <div class="click-to-play-figure">
                                <div class="click-to-play-icon w-embed"><svg width="1em" height="1em" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill="currentColor" fill-rule="evenodd" clip-rule="evenodd" d="M25.6 12.32a1.93 1.93 0 010 3.35L9.66 24.9a1.93 1.93 0 01-2.9-1.68V4.8a1.93 1.93 0 012.9-1.68l15.96 9.21z" />
</svg></div><img src="{{asset('assets/img/A.png')}}" loading="lazy" width="850" height="529"  class="click-to-play-content" /></div>
                        </div>
                        <div class="hidden w-embed w-script">
                            <script type="31295c7f172648a7863346db-text/javascript">
                                document.addEventListener('DOMContentLoaded', function() {
                                    (function($) {
                                        var isTouchDevice = matchMedia('(hover: none)').matches;
                                        $(document).on('click', '.click-to-play .click-to-play-icon', function() {
                                            var $playIcon = $(this);
                                            var $parent = $playIcon.closest('.click-to-play');
                                            var $inner = $parent.find('.click-to-play-inner');
                                            var $video = $parent.find('video');
                                            if ($video.length === 0) {
                                                var mp4_url = $parent.attr('data-click-to-play-mp4');
                                                var videoHTML = '<video class="click-to-play-content" width="320" height="240" controls playsinline>\
<source src="' + mp4_url + '" type="video/mp4">\
Your browser does not support the video tag.\
  </video>';
                                                var $video = $(videoHTML);
                                                $video.appendTo($inner);
                                                $video.on('pause', function() {
                                                    setTimeout(function() {
                                                        $parent.removeClass('playing');
                                                    }, isTouchDevice ? 300 : 16);
                                                });
                                                $video.on('play', function() {
                                                    $parent.addClass('playing');
                                                });
                                            }
                                            $parent.addClass('playing');
                                            $video[0].play();
                                        });
                                    })(jQuery);
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <div class="series-list-section wf-section">
        <div class="wave-background">
            <div class="wave-background-inner primary">
                <div class="wrapper">
                    <div class="container">
                        <div class="series-list-section-body">
                            <div class="series-list-section-header move-up-on-scroll">
                                <div class="flex-column-centered container">
                                    <div class="icon _44px mb-5 w-embed"><svg width="1em" height="1em" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M18.9585 16.6684C18.4299 16.4208 17.8137 16.4475 17.3085 16.7399C16.8142 17.0169 16.5058 17.5372 16.5 18.1039V25.8937C16.5051 26.4605 16.8128 26.9814 17.3067 27.2595C17.812 27.5513 18.428 27.578 18.9567 27.331L26.2662 23.8789C27.0139 23.5532 27.4974 22.8153 27.4974 21.9997C27.4974 21.1842 27.0139 20.4462 26.2662 20.1205L18.9585 16.6684Z" stroke="#FFD338" stroke-width="2.75" stroke-linecap="round" stroke-linejoin="round" />
<rect x="8.25" y="5.5" width="27.5" height="33" rx="1.42817" stroke="#FFD338" stroke-width="2.75" stroke-linecap="round" stroke-linejoin="round" />
<path d="M3.54572 9.625C2.96613 9.62888 2.41182 9.86284 2.00473 10.2754C1.59765 10.688 1.37115 11.2454 1.37505 11.825V32.175C1.37115 32.7546 1.59765 33.312 2.00473 33.7246C2.41182 34.1372 2.96613 34.3711 3.54572 34.375" stroke="#FFD338" stroke-width="2.75" stroke-linecap="round" stroke-linejoin="round" />
<path d="M40.4551 9.625C41.0347 9.62888 41.589 9.86284 41.9961 10.2754C42.4031 10.688 42.6296 11.2454 42.6257 11.825V32.175C42.6296 32.7546 42.4031 33.312 41.9961 33.7246C41.589 34.1372 41.0347 34.3711 40.4551 34.375" stroke="#FFD338" stroke-width="2.75" stroke-linecap="round" stroke-linejoin="round" />
</svg></div>
                                    <h2 class="fixex-678"><span class="block-on-phone-landscape">See what magic</span> our community is creating</h2>
                                    <p class="lead-alternate fixed-520">Explore these examples of Series, <strong>created </strong>by our Superpeers, and reserve your spot today</p>
                                </div>
                            </div>
                            <div class="w-dyn-list">
                                <div role="list" class="post-entries w-dyn-items">
                                    <div role="listitem" class="post-entries-item-wrapper w-dyn-item">
                                        <div class="post-entries-item flex-column-centered move-up-on-scroll">
                                            <div class="featured-frame mb-6">
                                                <div class="featured-frame-body small"><a href="https://superpeer.com/dawndickson/collection/masterclass-on-fundraising-strategies/" class="featured-frame-link w-inline-block"><img alt="" loading="lazy" width="402" height="224" src="https://assets.website-files.com/60f070302df82b4bb19e42f6/60f16a04c460146b43983b47_60f05dbf1d8b7748177783b6_eatured-superpeer-series-featured-v3.jpeg" sizes="(max-width: 479px) 85vw, (max-width: 767px) 402px, (max-width: 991px) 44vw, 402px" srcset="https://assets.website-files.com/60f070302df82b4bb19e42f6/60f16a04c460146b43983b47_60f05dbf1d8b7748177783b6_eatured-superpeer-series-featured-v3-p-800.jpeg 800w, https://assets.website-files.com/60f070302df82b4bb19e42f6/60f16a04c460146b43983b47_60f05dbf1d8b7748177783b6_eatured-superpeer-series-featured-v3-p-1600.jpeg 1600w, https://assets.website-files.com/60f070302df82b4bb19e42f6/60f16a04c460146b43983b47_60f05dbf1d8b7748177783b6_eatured-superpeer-series-featured-v3.jpeg 1668w" class="featured-frame-image" /></a>
                                                    <div
                                                        class="coming-soon uppercase w-condition-invisible">Coming Soon</div>
                                            </div>
                                            <div class="featured-frame-frame small"></div>
                                            <div class="featured-frame-badge">
                                                <div data-tooltip=".tooltip-content" data-theme="light" data-interactive="true" data-delay="[0,300]" class="avatar-v2 _72px"><img height="72" loading="lazy" width="72" src="https://assets.website-files.com/60f070302df82b4bb19e42f6/60f14979a698c5773046773c_60f05dbf1d8b77023877838b_avatar-dawn-dickson-p-500.jpeg" alt="Dawn Dickson"
                                                        sizes="70px" srcset="https://assets.website-files.com/60f070302df82b4bb19e42f6/60f14979a698c5773046773c_60f05dbf1d8b77023877838b_avatar-dawn-dickson-p-500-p-500.jpeg 500w, https://assets.website-files.com/60f070302df82b4bb19e42f6/60f14979a698c5773046773c_60f05dbf1d8b77023877838b_avatar-dawn-dickson-p-500.jpeg 500w"
                                                        class="avatar-v2-image" />
                                                    <div class="hidden">
                                                        <div class="tooltip-content">
                                                            <div class="profile-card">
                                                                <div class="profile-card-header"><a href="https://superpeer.com/dawndickson" target="_blank" class="avatar-v2 _56px w-inline-block"><img height="64" loading="lazy" width="64" src="https://assets.website-files.com/60f070302df82b4bb19e42f6/60f14979a698c5773046773c_60f05dbf1d8b77023877838b_avatar-dawn-dickson-p-500.jpeg" alt="Dawn Dickson" sizes="100vw" srcset="https://assets.website-files.com/60f070302df82b4bb19e42f6/60f14979a698c5773046773c_60f05dbf1d8b77023877838b_avatar-dawn-dickson-p-500-p-500.jpeg 500w, https://assets.website-files.com/60f070302df82b4bb19e42f6/60f14979a698c5773046773c_60f05dbf1d8b77023877838b_avatar-dawn-dickson-p-500.jpeg 500w" class="avatar-v2-image" /><div class="avatar-badge small w-embed"><svg width="1em" height="1em" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M15.48 14.9c-.63-.13-1.23-.28-1.74-.38l-.84-.18.1-.87.01-.12c0-.2-.03-.36-.1-.54l-.2-.46.27-.43c.16-.26.23-.54.23-.87 0-.35-.1-.65-.29-.9l-.33-.45.22-.52c.09-.2.13-.42.13-.63 0-.3 0-1.21-1.42-1.76a4.8 4.8 0 00-1.35-.23l-1.54-.1.73-1.33c.59-1.07.92-2.03.92-2.7 0-.62-.2-1.17-.66-1.35-1.6-.7-2.73.38-3.53 1.7a48.01 48.01 0 00-1.94 3.48c-1.05 2.22-2.6 3.81-2.6 6.02 0 2.01 1.35 3.6 3.82 4.43C8.4 17.73 12.92 18 14.89 18c1.41 0 2.19-.55 2.19-1.55 0-1.05-1-1.42-1.6-1.55z" fill="#FFD338" />
<path d="M14.85 14l-3.05-.65c.25-.18.5-.54.5-.98 0-.52-.27-.82-.48-.98.29-.21.67-.6.67-1.3 0-.77-.51-1.16-.79-1.34.22-.2.52-.6.52-1.17 0-.99-.76-1.43-1.38-1.68a7.87 7.87 0 00-2.28-.25c-1.37 0-2.6.1-3.2.1-.7 0-.61-.36-.35-.7.16-.18 2.15-2.81 2.53-3.28.26-.35.56-.68.79-.55.24.13.14.73-.12 1.4-.39 1.03-.93 1.69-1.06 1.92l.92.56c.36-.45 1.52-2.39 1.52-3.64C9.6.9 9.38.43 8.96.17a1.37 1.37 0 00-1.42.06c-.32.19-.64.46-.9.8L3.82 4.6c-.8 1.05-.43 2.34 1.28 2.34.6 0 2.57-.15 3.33-.15.88 0 1.3.05 1.61.1.58.08.9.34.9.68 0 .24-.1.42-.31.56-.2.14-.39.36-.39.66 0 .36.33.5.55.65.29.18.46.31.46.62 0 .27-.2.43-.43.6-.19.14-.43.3-.43.63 0 .3.21.45.35.56.15.12.3.25.3.49s-.1.36-.4.53c-.23.13-.56.37-.56.72 0 .39.28.56.6.65l3.96.87c.26.06.52.15.52.36 0 .22-.35.32-.84.32-1.7 0-6.4-.35-9.18-1.31-1.88-.63-2.91-1.8-2.91-3.19 0-1.2.8-2.28 1.68-2.9l-.8-.8A4.69 4.69 0 001 11.31c0 1.7 1 3.42 3.78 4.35 2.94 1 7.41 1.3 9.5 1.3 1.42 0 2.1-.6 2.1-1.48 0-.85-.7-1.31-1.53-1.48z" fill="#222" />
</svg></div></a>
                                                                    <div class="profile-card-subscribe"><a href="https://superpeer.com/dawndickson" class="button button-bordered blue button-small w-button">Subscribe</a></div>
                                                                </div>
                                                                <div class="profile-card-body">
                                                                    <div class="profile-card-info"><a href="https://superpeer.com/dawndickson" target="_blank" class="profile-card-title">Dawn Dickson</a>
                                                                        <div class="profile-card-location">
                                                                            <div class="profile-card-location-icon w-embed"><svg width="1em" height="1em" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10.5 5c0 3.5-4.5 6.5-4.5 6.5S1.5 8.5 1.5 5a4.5 4.5 0 019 0z" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" /><path d="M6 6.5a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" /></svg></div>
                                                                            <div
                                                                                class="profile-card-location-text">Miami, FL</div>
                                                                    </div>
                                                                    <div class="profile-card-bio">Serial entrepreneur (4X), fundraising strategist</div>
                                                                </div>
                                                                <div class="profile-card-social-profiles">
                                                                    <div class="social-profile-list">
                                                                        <a href="https://twitter.com/THEDawnDickson" target="_blank" class="social-profile-list-item w-inline-block">
                                                                            <div class="social-profile-list-icon twitter w-embed"><svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13.97 2.67c-.52.23-1.08.38-1.65.45a2.9 2.9 0 001.27-1.6c-.56.33-1.17.57-1.83.7a2.87 2.87 0 00-4.89 2.61A8.13 8.13 0 01.96 1.84a2.87 2.87 0 00.89 3.83c-.46 0-.9-.13-1.3-.35v.03a2.87 2.87 0 002.3 2.82c-.42.11-.87.13-1.3.05a2.88 2.88 0 002.7 2A5.76 5.76 0 010 11.4a8.16 8.16 0 004.4 1.29c5.29 0 8.17-4.37 8.17-8.16v-.37A5.8 5.8 0 0014 2.68l-.03-.01z" fill="#1DA1F2" /></svg></div>
                                                                            <div
                                                                                class="social-profile-list-title">THEDawnDickson</div>
                                                                    </a>
                                                                    <div class="social-profile-list-inline-items">
                                                                        <a href="#" class="social-profile-list-item inline w-inline-block w-condition-invisible">
                                                                            <div class="social-profile-list-icon inline youtube w-embed"><svg width="1em" height="1em" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M11.91 2.84c.55.15.97.58 1.12 1.12.26.99.26 3.05.26 3.05s0 2.06-.26 3.05c-.15.54-.57.95-1.12 1.1-.98.26-4.91.26-4.91.26s-3.93 0-4.91-.26a1.56 1.56 0 01-1.12-1.1C.71 9.06.71 7 .71 7s0-2.06.26-3.05c.15-.54.57-.97 1.12-1.12C3.07 2.58 7 2.58 7 2.58s3.93 0 4.91.26zm-6.2 2.3v3.74L9.01 7 5.7 5.14z" fill="red" /></svg></div>
                                                                        </a>
                                                                        <a href="#" class="social-profile-list-item inline w-inline-block w-condition-invisible">
                                                                            <div class="social-profile-list-icon inline instagram w-embed"><svg width="1em" height="1em" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M11.58 3.26a.84.84 0 11-1.68 0 .84.84 0 011.68 0zM7 9.33a2.33 2.33 0 110-4.66 2.33 2.33 0 010 4.66zm0-5.92a3.6 3.6 0 100 7.18 3.6 3.6 0 000-7.18zm0-2.15c1.87 0 2.09 0 2.83.04.68.03 1.05.15 1.3.24.33.13.56.28.8.53.25.24.4.47.53.8.1.25.2.62.24 1.3.03.74.04.96.04 2.83s0 2.1-.04 2.83a3.87 3.87 0 01-.24 1.3c-.13.33-.28.56-.53.8-.24.25-.47.4-.8.53-.25.1-.62.2-1.3.24-.74.03-.96.04-2.83.04s-2.1 0-2.83-.04a3.87 3.87 0 01-1.3-.24 2.17 2.17 0 01-.8-.53c-.25-.24-.4-.47-.53-.8-.1-.25-.2-.62-.24-1.3-.03-.74-.04-.96-.04-2.83s0-2.09.04-2.83c.03-.68.15-1.05.24-1.3.13-.32.28-.56.53-.8.24-.25.47-.4.8-.53.25-.1.62-.2 1.3-.24.74-.03.96-.04 2.83-.04zM7 0C5.1 0 4.86 0 4.11.04c-.74.04-1.25.15-1.7.33-.46.18-.85.42-1.24.8-.38.4-.62.78-.8 1.24-.18.45-.3.96-.33 1.7C.01 4.86 0 5.1 0 7c0 1.9 0 2.14.04 2.89.04.74.15 1.25.33 1.7.18.46.42.85.8 1.24.4.38.78.62 1.24.8.45.18.96.3 1.7.33.75.03.99.04 2.89.04 1.9 0 2.14 0 2.89-.04a5.14 5.14 0 001.7-.33c.46-.18.85-.42 1.24-.8.38-.4.62-.78.8-1.24.18-.45.3-.96.33-1.7.03-.75.04-.99.04-2.89 0-1.9 0-2.14-.04-2.89a5.14 5.14 0 00-.33-1.7 3.43 3.43 0 00-.8-1.24 3.43 3.43 0 00-1.24-.8c-.45-.18-.96-.3-1.7-.33C9.14.01 8.9 0 7 0z" fill="#e95950" /></svg></div>
                                                                        </a>
                                                                        <a href="#" class="social-profile-list-item inline w-inline-block w-condition-invisible">
                                                                            <div class="social-profile-list-icon inline twitch w-embed"><svg width="1em" height="1em" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.7.46L.88 2.9v9h3.27v1.63h1.63l1.63-1.63h2.44l3.27-3.49V.46H1.7zm10.6 7.36l-2.28 2.45h-2.9l-1.75 1.28v-1.28H2.5v-9h9.8v6.55z" fill="#7743D4" /><path d="M7.4 3.73h-.8V7h.8V3.73zM9.85 3.73h-.81V7h.81V3.73z" fill="#7743D4" /></svg></div>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-column-centered">
                                    <a href="https://superpeer.com/dawndickson/collection/masterclass-on-fundraising-strategies/" class="post-entries-title-link silent-hover w-inline-block">
                                        <h3>Masterclass on Fundraising Strategies</h3>
                                    </a><a href="https://superpeer.com/dawndickson" class="post-entries-host-name silent-hover">Dawn Dickson</a>
                                    <p>Entry-level strategies from an expert in entrepreneurship, business development and fundraising. The first female founder to raise $1M&gt; in an equity crowdfunding campaign will teach you the best in investment, crowdfunding
                                        and overall fundraising strategies to capitalize your business at every level.</p>
                                    <div class="flex centered move-up-on-scroll">
                                        <div class="meta vertical-on-mobile mr-5">
                                            <div class="meta-label mr-2">Starts</div>
                                            <div class="meta-value">September 9, 2021</div>
                                        </div><a href="https://superpeer.com/dawndickson/collection/masterclass-on-fundraising-strategies/" class="button button-large button-secondary uppercase">ENROLL</a></div>
                                    <div data-tooltip=".notify-form" data-delay="[0, 300]"
                                        class="flex centered move-up-on-scroll relative w-condition-invisible" data-trigger-target-selector=".button" data-arrow="false" data-theme="light large" data-trigger="click" data-max-width="464" data-interactive="true">
                                        <div class="meta vertical-on-mobile mr-5">
                                            <div class="meta-label mr-2">Starts</div>
                                            <div class="meta-value nowrap-text">September 9, 2021</div>
                                        </div><a href="#" class="button button-large button-secondary uppercase ml-3 nowrap-text">Notify Me</a>
                                        <div class="hidden">
                                            <div class="notify-form">
                                                <div class="notify-form-header">
                                                    <div class="notify-form-title">Get notified when the series registrations open</div>
                                                    <a data-dismiss="tooltip" href="#" class="notify-form-close w-inline-block">
                                                        <div class="notify-form-close-icon w-embed"><svg width="1em" height="1em" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M17.89 16l5.72-5.72a1.33 1.33 0 10-1.89-1.89L16 14.11 10.28 8.4a1.33 1.33 0 10-1.89 1.89L14.11 16 8.4 21.72a1.33 1.33 0 101.89 1.89L16 17.89l5.72 5.72a1.33 1.33 0 001.89 0c.52-.52.52-1.36 0-1.89L17.89 16z" fill="currentcolor" /></svg></div>
                                                    </a>
                                                </div>
                                                <div class="notify-form-body">
                                                    <div class="notify-form-form w-form">
                                                        <form id="wf-form-Notify-Me-Form" name="wf-form-Notify-Me-Form" data-name="Notify Me Form">
                                                            <div class="field-group"><label for="Email-3" class="field-label">Your email</label><input type="email" class="text-field w-input" maxlength="256" name="Email" data-name="Email" placeholder="" id="Email" required=""
                                                                /></div>
                                                            <div class="button-block"><input type="submit" value="Notify Me" data-wait="Please wait..." class="button button-primary button-large uppercase button-block w-button" /></div>
                                                            <div class="hidden">
                                                                <div data-convert-to-hidden="SerieID">11</div>
                                                                <div data-convert-to-hidden="SerieName">Masterclass on Fundraising Strategies</div>
                                                                <div data-convert-to-hidden="SerieLink">https://superpeer.com/dawndickson/collection/masterclass-on-fundraising-strategies/</div>
                                                                <div data-convert-to-hidden="HostName">Dawn Dickson</div>
                                                                <div data-convert-to-hidden="HostLink">https://superpeer.com/dawndickson</div>
                                                            </div>
                                                        </form>
                                                        <div class="success-message-v2 w-form-done">
                                                            <div class="success-message-v2-body">
                                                                <div class="success-message-v2-icon w-embed"><svg width="1em" height="1em" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M29.67 15.71c0-.76-.6-1.37-1.34-1.37-.74 0-1.33.62-1.33 1.38 0 2.94-1.1 5.7-3.1 7.79-2.01 2.08-4.69 3.23-7.54 3.24h-.03c-2.84 0-5.5-1.14-7.52-3.2a11.1 11.1 0 01-3.14-7.77c-.01-2.94 1.09-5.7 3.1-7.79a10.44 10.44 0 0110.07-2.93c.72.17 1.44-.28 1.61-1.02a1.38 1.38 0 00-.98-1.66 13.05 13.05 0 00-12.6 3.67A13.88 13.88 0 003 15.8c.01 3.67 1.4 7.12 3.93 9.71 2.52 2.58 5.86 4 9.4 4h.04c3.56-.01 6.9-1.45 9.42-4.05a13.88 13.88 0 003.88-9.74zm-16.4-.93a1.3 1.3 0 00-1.88 0 1.4 1.4 0 000 1.94l4 4.13c.25.26.59.4.94.4h.05c.37-.01.71-.18.96-.47l9.33-11a1.4 1.4 0 00-.12-1.94 1.3 1.3 0 00-1.89.13l-8.4 9.9-2.98-3.1z" fill="currentcolor" /></svg></div>
                                                                <div
                                                                    class="success-message-v2-text">Success</div>
                                                        </div>
                                                    </div>
                                                    <div class="error-message-v2 w-form-fail">
                                                        <div class="error-message-v2-body">
                                                            <div class="error-message-v2-icon w-embed"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M8 4.67A.67.67 0 108 6a.67.67 0 000-1.33zm0 2c-.37 0-.67.3-.67.66v3.34a.67.67 0 001.34 0V7.33c0-.36-.3-.66-.67-.66zM2.67 8a5.34 5.34 0 1010.68-.01A5.34 5.34 0 002.67 8zM1.33 8a6.67 6.67 0 1113.34 0A6.67 6.67 0 011.33 8z" fill="currentcolor" /></svg></div>
                                                            <div
                                                                class="error-message-v2-text">Something went wrong. Please try again.</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div role="listitem" class="post-entries-item-wrapper w-dyn-item">
                    <div class="post-entries-item flex-column-centered move-up-on-scroll">
                        <div class="featured-frame mb-6">
                            <div class="featured-frame-body small"><a href="https://superpeer.com/thop/collection/paid-marketing-live-course" class="featured-frame-link w-inline-block"><img alt="" loading="lazy" width="402" height="224" src="https://assets.website-files.com/60f070302df82b4bb19e42f6/60f1556792cdf03b3d972126_60f05dbf1d8b7756ab7783b7_series-v3-01.jpeg" class="featured-frame-image" /></a>
                                <div
                                    class="coming-soon uppercase w-condition-invisible">Coming Soon</div>
                        </div>
                        <div class="featured-frame-frame small"></div>
                        <div class="featured-frame-badge">
                            <div data-tooltip=".tooltip-content" data-theme="light" data-interactive="true" data-delay="[0,300]" class="avatar-v2 _72px"><img height="72" loading="lazy" width="72" src="https://assets.website-files.com/60f070302df82b4bb19e42f6/60f148b8e07a74c0dd63277b_60f05dbf1d8b77bfd977839b_avatar-thomas-hopkins.jpeg" alt="Thomas Hopkins" sizes="70px" srcset="https://assets.website-files.com/60f070302df82b4bb19e42f6/60f148b8e07a74c0dd63277b_60f05dbf1d8b77bfd977839b_avatar-thomas-hopkins-p-800.jpeg 800w, https://assets.website-files.com/60f070302df82b4bb19e42f6/60f148b8e07a74c0dd63277b_60f05dbf1d8b77bfd977839b_avatar-thomas-hopkins.jpeg 800w"
                                    class="avatar-v2-image" />
                                <div class="hidden">
                                    <div class="tooltip-content">
                                        <div class="profile-card">
                                            <div class="profile-card-header"><a href="https://superpeer.com/thop" target="_blank" class="avatar-v2 _56px w-inline-block"><img height="64" loading="lazy" width="64" src="https://assets.website-files.com/60f070302df82b4bb19e42f6/60f148b8e07a74c0dd63277b_60f05dbf1d8b77bfd977839b_avatar-thomas-hopkins.jpeg" alt="Thomas Hopkins" sizes="100vw" srcset="https://assets.website-files.com/60f070302df82b4bb19e42f6/60f148b8e07a74c0dd63277b_60f05dbf1d8b77bfd977839b_avatar-thomas-hopkins-p-800.jpeg 800w, https://assets.website-files.com/60f070302df82b4bb19e42f6/60f148b8e07a74c0dd63277b_60f05dbf1d8b77bfd977839b_avatar-thomas-hopkins.jpeg 800w" class="avatar-v2-image" /><div class="avatar-badge small w-embed"><svg width="1em" height="1em" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M15.48 14.9c-.63-.13-1.23-.28-1.74-.38l-.84-.18.1-.87.01-.12c0-.2-.03-.36-.1-.54l-.2-.46.27-.43c.16-.26.23-.54.23-.87 0-.35-.1-.65-.29-.9l-.33-.45.22-.52c.09-.2.13-.42.13-.63 0-.3 0-1.21-1.42-1.76a4.8 4.8 0 00-1.35-.23l-1.54-.1.73-1.33c.59-1.07.92-2.03.92-2.7 0-.62-.2-1.17-.66-1.35-1.6-.7-2.73.38-3.53 1.7a48.01 48.01 0 00-1.94 3.48c-1.05 2.22-2.6 3.81-2.6 6.02 0 2.01 1.35 3.6 3.82 4.43C8.4 17.73 12.92 18 14.89 18c1.41 0 2.19-.55 2.19-1.55 0-1.05-1-1.42-1.6-1.55z" fill="#FFD338" />
<path d="M14.85 14l-3.05-.65c.25-.18.5-.54.5-.98 0-.52-.27-.82-.48-.98.29-.21.67-.6.67-1.3 0-.77-.51-1.16-.79-1.34.22-.2.52-.6.52-1.17 0-.99-.76-1.43-1.38-1.68a7.87 7.87 0 00-2.28-.25c-1.37 0-2.6.1-3.2.1-.7 0-.61-.36-.35-.7.16-.18 2.15-2.81 2.53-3.28.26-.35.56-.68.79-.55.24.13.14.73-.12 1.4-.39 1.03-.93 1.69-1.06 1.92l.92.56c.36-.45 1.52-2.39 1.52-3.64C9.6.9 9.38.43 8.96.17a1.37 1.37 0 00-1.42.06c-.32.19-.64.46-.9.8L3.82 4.6c-.8 1.05-.43 2.34 1.28 2.34.6 0 2.57-.15 3.33-.15.88 0 1.3.05 1.61.1.58.08.9.34.9.68 0 .24-.1.42-.31.56-.2.14-.39.36-.39.66 0 .36.33.5.55.65.29.18.46.31.46.62 0 .27-.2.43-.43.6-.19.14-.43.3-.43.63 0 .3.21.45.35.56.15.12.3.25.3.49s-.1.36-.4.53c-.23.13-.56.37-.56.72 0 .39.28.56.6.65l3.96.87c.26.06.52.15.52.36 0 .22-.35.32-.84.32-1.7 0-6.4-.35-9.18-1.31-1.88-.63-2.91-1.8-2.91-3.19 0-1.2.8-2.28 1.68-2.9l-.8-.8A4.69 4.69 0 001 11.31c0 1.7 1 3.42 3.78 4.35 2.94 1 7.41 1.3 9.5 1.3 1.42 0 2.1-.6 2.1-1.48 0-.85-.7-1.31-1.53-1.48z" fill="#222" />
</svg></div></a>
                                                <div class="profile-card-subscribe"><a href="https://superpeer.com/thop" class="button button-bordered blue button-small w-button">Subscribe</a></div>
                                            </div>
                                            <div class="profile-card-body">
                                                <div class="profile-card-info"><a href="https://superpeer.com/thop" target="_blank" class="profile-card-title">Thomas Hopkins</a>
                                                    <div class="profile-card-location">
                                                        <div class="profile-card-location-icon w-embed"><svg width="1em" height="1em" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10.5 5c0 3.5-4.5 6.5-4.5 6.5S1.5 8.5 1.5 5a4.5 4.5 0 019 0z" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" /><path d="M6 6.5a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" /></svg></div>
                                                        <div
                                                            class="profile-card-location-text">San Diego, CA</div>
                                                </div>
                                                <div class="profile-card-bio">Cofounder &amp; CMO Superpeer, Ex-Perf &amp; Lifecycle Marketing @MasterClass, Lyft,Penn</div>
                                            </div>
                                            <div class="profile-card-social-profiles">
                                                <div class="social-profile-list">
                                                    <a href="https://twitter.com/thomashops" target="_blank" class="social-profile-list-item w-inline-block">
                                                        <div class="social-profile-list-icon twitter w-embed"><svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13.97 2.67c-.52.23-1.08.38-1.65.45a2.9 2.9 0 001.27-1.6c-.56.33-1.17.57-1.83.7a2.87 2.87 0 00-4.89 2.61A8.13 8.13 0 01.96 1.84a2.87 2.87 0 00.89 3.83c-.46 0-.9-.13-1.3-.35v.03a2.87 2.87 0 002.3 2.82c-.42.11-.87.13-1.3.05a2.88 2.88 0 002.7 2A5.76 5.76 0 010 11.4a8.16 8.16 0 004.4 1.29c5.29 0 8.17-4.37 8.17-8.16v-.37A5.8 5.8 0 0014 2.68l-.03-.01z" fill="#1DA1F2" /></svg></div>
                                                        <div
                                                            class="social-profile-list-title">thomashops</div>
                                                </a>
                                                <div class="social-profile-list-inline-items">
                                                    <a href="#" class="social-profile-list-item inline w-inline-block w-condition-invisible">
                                                        <div class="social-profile-list-icon inline youtube w-embed"><svg width="1em" height="1em" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M11.91 2.84c.55.15.97.58 1.12 1.12.26.99.26 3.05.26 3.05s0 2.06-.26 3.05c-.15.54-.57.95-1.12 1.1-.98.26-4.91.26-4.91.26s-3.93 0-4.91-.26a1.56 1.56 0 01-1.12-1.1C.71 9.06.71 7 .71 7s0-2.06.26-3.05c.15-.54.57-.97 1.12-1.12C3.07 2.58 7 2.58 7 2.58s3.93 0 4.91.26zm-6.2 2.3v3.74L9.01 7 5.7 5.14z" fill="red" /></svg></div>
                                                    </a>
                                                    <a href="#" class="social-profile-list-item inline w-inline-block w-condition-invisible">
                                                        <div class="social-profile-list-icon inline instagram w-embed"><svg width="1em" height="1em" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M11.58 3.26a.84.84 0 11-1.68 0 .84.84 0 011.68 0zM7 9.33a2.33 2.33 0 110-4.66 2.33 2.33 0 010 4.66zm0-5.92a3.6 3.6 0 100 7.18 3.6 3.6 0 000-7.18zm0-2.15c1.87 0 2.09 0 2.83.04.68.03 1.05.15 1.3.24.33.13.56.28.8.53.25.24.4.47.53.8.1.25.2.62.24 1.3.03.74.04.96.04 2.83s0 2.1-.04 2.83a3.87 3.87 0 01-.24 1.3c-.13.33-.28.56-.53.8-.24.25-.47.4-.8.53-.25.1-.62.2-1.3.24-.74.03-.96.04-2.83.04s-2.1 0-2.83-.04a3.87 3.87 0 01-1.3-.24 2.17 2.17 0 01-.8-.53c-.25-.24-.4-.47-.53-.8-.1-.25-.2-.62-.24-1.3-.03-.74-.04-.96-.04-2.83s0-2.09.04-2.83c.03-.68.15-1.05.24-1.3.13-.32.28-.56.53-.8.24-.25.47-.4.8-.53.25-.1.62-.2 1.3-.24.74-.03.96-.04 2.83-.04zM7 0C5.1 0 4.86 0 4.11.04c-.74.04-1.25.15-1.7.33-.46.18-.85.42-1.24.8-.38.4-.62.78-.8 1.24-.18.45-.3.96-.33 1.7C.01 4.86 0 5.1 0 7c0 1.9 0 2.14.04 2.89.04.74.15 1.25.33 1.7.18.46.42.85.8 1.24.4.38.78.62 1.24.8.45.18.96.3 1.7.33.75.03.99.04 2.89.04 1.9 0 2.14 0 2.89-.04a5.14 5.14 0 001.7-.33c.46-.18.85-.42 1.24-.8.38-.4.62-.78.8-1.24.18-.45.3-.96.33-1.7.03-.75.04-.99.04-2.89 0-1.9 0-2.14-.04-2.89a5.14 5.14 0 00-.33-1.7 3.43 3.43 0 00-.8-1.24 3.43 3.43 0 00-1.24-.8c-.45-.18-.96-.3-1.7-.33C9.14.01 8.9 0 7 0z" fill="#e95950" /></svg></div>
                                                    </a>
                                                    <a href="#" class="social-profile-list-item inline w-inline-block w-condition-invisible">
                                                        <div class="social-profile-list-icon inline twitch w-embed"><svg width="1em" height="1em" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.7.46L.88 2.9v9h3.27v1.63h1.63l1.63-1.63h2.44l3.27-3.49V.46H1.7zm10.6 7.36l-2.28 2.45h-2.9l-1.75 1.28v-1.28H2.5v-9h9.8v6.55z" fill="#7743D4" /><path d="M7.4 3.73h-.8V7h.8V3.73zM9.85 3.73h-.81V7h.81V3.73z" fill="#7743D4" /></svg></div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex-column-centered">
                <a href="https://superpeer.com/thop/collection/paid-marketing-live-course" class="post-entries-title-link silent-hover w-inline-block">
                    <h3>Paid Marketing</h3>
                </a><a href="https://superpeer.com/thop" class="post-entries-host-name silent-hover">Thomas Hopkins</a>
                <p>Over the past 7 years I&#x27;ve unlocked company growth potential for brands like Lyft and Masterclass – after this series, you will too. Discover what makes a successful paid marketing campaign and how to scale a revenue-generating system.</p>
                <div
                    class="flex centered move-up-on-scroll">
                    <div class="meta vertical-on-mobile mr-5">
                        <div class="meta-label mr-2">Starts</div>
                        <div class="meta-value">August 6, 2021</div>
                    </div><a href="https://superpeer.com/thop/collection/paid-marketing-live-course" class="button button-large button-secondary uppercase">ENROLL</a></div>
            <div data-tooltip=".notify-form" data-delay="[0, 300]" class="flex centered move-up-on-scroll relative w-condition-invisible"
                data-trigger-target-selector=".button" data-arrow="false" data-theme="light large" data-trigger="click" data-max-width="464" data-interactive="true">
                <div class="meta vertical-on-mobile mr-5">
                    <div class="meta-label mr-2">Starts</div>
                    <div class="meta-value nowrap-text">August 6, 2021</div>
                </div><a href="#" class="button button-large button-secondary uppercase ml-3 nowrap-text">Notify Me</a>
                <div class="hidden">
                    <div class="notify-form">
                        <div class="notify-form-header">
                            <div class="notify-form-title">Get notified when the series registrations open</div>
                            <a data-dismiss="tooltip" href="#" class="notify-form-close w-inline-block">
                                <div class="notify-form-close-icon w-embed"><svg width="1em" height="1em" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M17.89 16l5.72-5.72a1.33 1.33 0 10-1.89-1.89L16 14.11 10.28 8.4a1.33 1.33 0 10-1.89 1.89L14.11 16 8.4 21.72a1.33 1.33 0 101.89 1.89L16 17.89l5.72 5.72a1.33 1.33 0 001.89 0c.52-.52.52-1.36 0-1.89L17.89 16z" fill="currentcolor" /></svg></div>
                            </a>
                        </div>
                        <div class="notify-form-body">
                            <div class="notify-form-form w-form">
                                <form id="wf-form-Notify-Me-Form" name="wf-form-Notify-Me-Form" data-name="Notify Me Form">
                                    <div class="field-group"><label for="Email-3" class="field-label">Your email</label><input type="email" class="text-field w-input" maxlength="256" name="Email" data-name="Email" placeholder="" id="Email" required="" /></div>
                                    <div class="button-block"><input type="submit" value="Notify Me" data-wait="Please wait..." class="button button-primary button-large uppercase button-block w-button" /></div>
                                    <div class="hidden">
                                        <div data-convert-to-hidden="SerieID">2</div>
                                        <div data-convert-to-hidden="SerieName">Paid Marketing</div>
                                        <div data-convert-to-hidden="SerieLink">https://superpeer.com/thop/collection/paid-marketing-live-course</div>
                                        <div data-convert-to-hidden="HostName">Thomas Hopkins</div>
                                        <div data-convert-to-hidden="HostLink">https://superpeer.com/thop</div>
                                    </div>
                                </form>
                                <div class="success-message-v2 w-form-done">
                                    <div class="success-message-v2-body">
                                        <div class="success-message-v2-icon w-embed"><svg width="1em" height="1em" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M29.67 15.71c0-.76-.6-1.37-1.34-1.37-.74 0-1.33.62-1.33 1.38 0 2.94-1.1 5.7-3.1 7.79-2.01 2.08-4.69 3.23-7.54 3.24h-.03c-2.84 0-5.5-1.14-7.52-3.2a11.1 11.1 0 01-3.14-7.77c-.01-2.94 1.09-5.7 3.1-7.79a10.44 10.44 0 0110.07-2.93c.72.17 1.44-.28 1.61-1.02a1.38 1.38 0 00-.98-1.66 13.05 13.05 0 00-12.6 3.67A13.88 13.88 0 003 15.8c.01 3.67 1.4 7.12 3.93 9.71 2.52 2.58 5.86 4 9.4 4h.04c3.56-.01 6.9-1.45 9.42-4.05a13.88 13.88 0 003.88-9.74zm-16.4-.93a1.3 1.3 0 00-1.88 0 1.4 1.4 0 000 1.94l4 4.13c.25.26.59.4.94.4h.05c.37-.01.71-.18.96-.47l9.33-11a1.4 1.4 0 00-.12-1.94 1.3 1.3 0 00-1.89.13l-8.4 9.9-2.98-3.1z" fill="currentcolor" /></svg></div>
                                        <div
                                            class="success-message-v2-text">Success</div>
                                </div>
                            </div>
                            <div class="error-message-v2 w-form-fail">
                                <div class="error-message-v2-body">
                                    <div class="error-message-v2-icon w-embed"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M8 4.67A.67.67 0 108 6a.67.67 0 000-1.33zm0 2c-.37 0-.67.3-.67.66v3.34a.67.67 0 001.34 0V7.33c0-.36-.3-.66-.67-.66zM2.67 8a5.34 5.34 0 1010.68-.01A5.34 5.34 0 002.67 8zM1.33 8a6.67 6.67 0 1113.34 0A6.67 6.67 0 011.33 8z" fill="currentcolor" /></svg></div>
                                    <div
                                        class="error-message-v2-text">Something went wrong. Please try again.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    <div role="listitem" class="post-entries-item-wrapper w-dyn-item">
        <div class="post-entries-item flex-column-centered move-up-on-scroll">
            <div class="featured-frame mb-6">
                <div class="featured-frame-body small"><a href="https://superpeer.com/alicepsychic/collection/connect-with-your-twinflamer" class="featured-frame-link w-inline-block"><img alt="" loading="lazy" width="402" height="224" src="https://assets.website-files.com/60f070302df82b4bb19e42f6/60f15567f352ce9fcd50d5f9_60f05dbf1d8b771d807783bd_series-v3-03.jpeg" sizes="(max-width: 479px) 85vw, (max-width: 767px) 402px, (max-width: 991px) 44vw, 402px" srcset="https://assets.website-files.com/60f070302df82b4bb19e42f6/60f15567f352ce9fcd50d5f9_60f05dbf1d8b771d807783bd_series-v3-03-p-500.jpeg 500w, https://assets.website-files.com/60f070302df82b4bb19e42f6/60f15567f352ce9fcd50d5f9_60f05dbf1d8b771d807783bd_series-v3-03.jpeg 804w" class="featured-frame-image" /></a>
                    <div
                        class="coming-soon uppercase w-condition-invisible">Coming Soon</div>
            </div>
            <div class="featured-frame-frame small"></div>
            <div class="featured-frame-badge">
                <div data-tooltip=".tooltip-content" data-theme="light" data-interactive="true" data-delay="[0,300]" class="avatar-v2 _72px"><img height="72" loading="lazy" width="72" src="https://assets.website-files.com/60f070302df82b4bb19e42f6/60f148b78e48a780a6cc080c_60f05dbf1d8b77026c77838c_avatar-alice-johnson.jpeg" alt="Alice Johnson" sizes="70px" srcset="https://assets.website-files.com/60f070302df82b4bb19e42f6/60f148b78e48a780a6cc080c_60f05dbf1d8b77026c77838c_avatar-alice-johnson-p-800.jpeg 800w, https://assets.website-files.com/60f070302df82b4bb19e42f6/60f148b78e48a780a6cc080c_60f05dbf1d8b77026c77838c_avatar-alice-johnson.jpeg 800w"
                        class="avatar-v2-image" />
                    <div class="hidden">
                        <div class="tooltip-content">
                            <div class="profile-card">
                                <div class="profile-card-header"><a href="https://superpeer.com/alicepsychic" target="_blank" class="avatar-v2 _56px w-inline-block"><img height="64" loading="lazy" width="64" src="https://assets.website-files.com/60f070302df82b4bb19e42f6/60f148b78e48a780a6cc080c_60f05dbf1d8b77026c77838c_avatar-alice-johnson.jpeg" alt="Alice Johnson" sizes="100vw" srcset="https://assets.website-files.com/60f070302df82b4bb19e42f6/60f148b78e48a780a6cc080c_60f05dbf1d8b77026c77838c_avatar-alice-johnson-p-800.jpeg 800w, https://assets.website-files.com/60f070302df82b4bb19e42f6/60f148b78e48a780a6cc080c_60f05dbf1d8b77026c77838c_avatar-alice-johnson.jpeg 800w" class="avatar-v2-image" /><div class="avatar-badge small w-embed"><svg width="1em" height="1em" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M15.48 14.9c-.63-.13-1.23-.28-1.74-.38l-.84-.18.1-.87.01-.12c0-.2-.03-.36-.1-.54l-.2-.46.27-.43c.16-.26.23-.54.23-.87 0-.35-.1-.65-.29-.9l-.33-.45.22-.52c.09-.2.13-.42.13-.63 0-.3 0-1.21-1.42-1.76a4.8 4.8 0 00-1.35-.23l-1.54-.1.73-1.33c.59-1.07.92-2.03.92-2.7 0-.62-.2-1.17-.66-1.35-1.6-.7-2.73.38-3.53 1.7a48.01 48.01 0 00-1.94 3.48c-1.05 2.22-2.6 3.81-2.6 6.02 0 2.01 1.35 3.6 3.82 4.43C8.4 17.73 12.92 18 14.89 18c1.41 0 2.19-.55 2.19-1.55 0-1.05-1-1.42-1.6-1.55z" fill="#FFD338" />
<path d="M14.85 14l-3.05-.65c.25-.18.5-.54.5-.98 0-.52-.27-.82-.48-.98.29-.21.67-.6.67-1.3 0-.77-.51-1.16-.79-1.34.22-.2.52-.6.52-1.17 0-.99-.76-1.43-1.38-1.68a7.87 7.87 0 00-2.28-.25c-1.37 0-2.6.1-3.2.1-.7 0-.61-.36-.35-.7.16-.18 2.15-2.81 2.53-3.28.26-.35.56-.68.79-.55.24.13.14.73-.12 1.4-.39 1.03-.93 1.69-1.06 1.92l.92.56c.36-.45 1.52-2.39 1.52-3.64C9.6.9 9.38.43 8.96.17a1.37 1.37 0 00-1.42.06c-.32.19-.64.46-.9.8L3.82 4.6c-.8 1.05-.43 2.34 1.28 2.34.6 0 2.57-.15 3.33-.15.88 0 1.3.05 1.61.1.58.08.9.34.9.68 0 .24-.1.42-.31.56-.2.14-.39.36-.39.66 0 .36.33.5.55.65.29.18.46.31.46.62 0 .27-.2.43-.43.6-.19.14-.43.3-.43.63 0 .3.21.45.35.56.15.12.3.25.3.49s-.1.36-.4.53c-.23.13-.56.37-.56.72 0 .39.28.56.6.65l3.96.87c.26.06.52.15.52.36 0 .22-.35.32-.84.32-1.7 0-6.4-.35-9.18-1.31-1.88-.63-2.91-1.8-2.91-3.19 0-1.2.8-2.28 1.68-2.9l-.8-.8A4.69 4.69 0 001 11.31c0 1.7 1 3.42 3.78 4.35 2.94 1 7.41 1.3 9.5 1.3 1.42 0 2.1-.6 2.1-1.48 0-.85-.7-1.31-1.53-1.48z" fill="#222" />
</svg></div></a>
                                    <div class="profile-card-subscribe"><a href="https://superpeer.com/alicepsychic" class="button button-bordered blue button-small w-button">Subscribe</a></div>
                                </div>
                                <div class="profile-card-body">
                                    <div class="profile-card-info"><a href="https://superpeer.com/alicepsychic" target="_blank" class="profile-card-title">Alice Johnson</a>
                                        <div class="profile-card-location">
                                            <div class="profile-card-location-icon w-embed"><svg width="1em" height="1em" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10.5 5c0 3.5-4.5 6.5-4.5 6.5S1.5 8.5 1.5 5a4.5 4.5 0 019 0z" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" /><path d="M6 6.5a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" /></svg></div>
                                            <div
                                                class="profile-card-location-text">Houston texas</div>
                                    </div>
                                    <div class="profile-card-bio">Tarot and Energy reading</div>
                                </div>
                                <div class="profile-card-social-profiles">
                                    <div class="social-profile-list">
                                        <a href="#" class="social-profile-list-item w-inline-block w-condition-invisible">
                                            <div class="social-profile-list-icon twitter w-embed"><svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13.97 2.67c-.52.23-1.08.38-1.65.45a2.9 2.9 0 001.27-1.6c-.56.33-1.17.57-1.83.7a2.87 2.87 0 00-4.89 2.61A8.13 8.13 0 01.96 1.84a2.87 2.87 0 00.89 3.83c-.46 0-.9-.13-1.3-.35v.03a2.87 2.87 0 002.3 2.82c-.42.11-.87.13-1.3.05a2.88 2.88 0 002.7 2A5.76 5.76 0 010 11.4a8.16 8.16 0 004.4 1.29c5.29 0 8.17-4.37 8.17-8.16v-.37A5.8 5.8 0 0014 2.68l-.03-.01z" fill="#1DA1F2" /></svg></div>
                                            <div
                                                class="social-profile-list-title w-dyn-bind-empty"></div>
                                    </a>
                                    <div class="social-profile-list-inline-items">
                                        <a href="#" class="social-profile-list-item inline w-inline-block w-condition-invisible">
                                            <div class="social-profile-list-icon inline youtube w-embed"><svg width="1em" height="1em" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M11.91 2.84c.55.15.97.58 1.12 1.12.26.99.26 3.05.26 3.05s0 2.06-.26 3.05c-.15.54-.57.95-1.12 1.1-.98.26-4.91.26-4.91.26s-3.93 0-4.91-.26a1.56 1.56 0 01-1.12-1.1C.71 9.06.71 7 .71 7s0-2.06.26-3.05c.15-.54.57-.97 1.12-1.12C3.07 2.58 7 2.58 7 2.58s3.93 0 4.91.26zm-6.2 2.3v3.74L9.01 7 5.7 5.14z" fill="red" /></svg></div>
                                        </a>
                                        <a href="#" class="social-profile-list-item inline w-inline-block w-condition-invisible">
                                            <div class="social-profile-list-icon inline instagram w-embed"><svg width="1em" height="1em" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M11.58 3.26a.84.84 0 11-1.68 0 .84.84 0 011.68 0zM7 9.33a2.33 2.33 0 110-4.66 2.33 2.33 0 010 4.66zm0-5.92a3.6 3.6 0 100 7.18 3.6 3.6 0 000-7.18zm0-2.15c1.87 0 2.09 0 2.83.04.68.03 1.05.15 1.3.24.33.13.56.28.8.53.25.24.4.47.53.8.1.25.2.62.24 1.3.03.74.04.96.04 2.83s0 2.1-.04 2.83a3.87 3.87 0 01-.24 1.3c-.13.33-.28.56-.53.8-.24.25-.47.4-.8.53-.25.1-.62.2-1.3.24-.74.03-.96.04-2.83.04s-2.1 0-2.83-.04a3.87 3.87 0 01-1.3-.24 2.17 2.17 0 01-.8-.53c-.25-.24-.4-.47-.53-.8-.1-.25-.2-.62-.24-1.3-.03-.74-.04-.96-.04-2.83s0-2.09.04-2.83c.03-.68.15-1.05.24-1.3.13-.32.28-.56.53-.8.24-.25.47-.4.8-.53.25-.1.62-.2 1.3-.24.74-.03.96-.04 2.83-.04zM7 0C5.1 0 4.86 0 4.11.04c-.74.04-1.25.15-1.7.33-.46.18-.85.42-1.24.8-.38.4-.62.78-.8 1.24-.18.45-.3.96-.33 1.7C.01 4.86 0 5.1 0 7c0 1.9 0 2.14.04 2.89.04.74.15 1.25.33 1.7.18.46.42.85.8 1.24.4.38.78.62 1.24.8.45.18.96.3 1.7.33.75.03.99.04 2.89.04 1.9 0 2.14 0 2.89-.04a5.14 5.14 0 001.7-.33c.46-.18.85-.42 1.24-.8.38-.4.62-.78.8-1.24.18-.45.3-.96.33-1.7.03-.75.04-.99.04-2.89 0-1.9 0-2.14-.04-2.89a5.14 5.14 0 00-.33-1.7 3.43 3.43 0 00-.8-1.24 3.43 3.43 0 00-1.24-.8c-.45-.18-.96-.3-1.7-.33C9.14.01 8.9 0 7 0z" fill="#e95950" /></svg></div>
                                        </a>
                                        <a href="#" class="social-profile-list-item inline w-inline-block w-condition-invisible">
                                            <div class="social-profile-list-icon inline twitch w-embed"><svg width="1em" height="1em" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.7.46L.88 2.9v9h3.27v1.63h1.63l1.63-1.63h2.44l3.27-3.49V.46H1.7zm10.6 7.36l-2.28 2.45h-2.9l-1.75 1.28v-1.28H2.5v-9h9.8v6.55z" fill="#7743D4" /><path d="M7.4 3.73h-.8V7h.8V3.73zM9.85 3.73h-.81V7h.81V3.73z" fill="#7743D4" /></svg></div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="flex-column-centered">
        <a href="https://superpeer.com/alicepsychic/collection/connect-with-your-twinflamer" class="post-entries-title-link silent-hover w-inline-block">
            <h3>Find Your True Love, your TwinFlame®</h3>
        </a><a href="https://superpeer.com/alicepsychic" class="post-entries-host-name silent-hover">Alice Johnson</a>
        <p>I&#x27;m an 8th-generation psychic, and together we&#x27;ll discover how your aura operates and the magic you have within to facilitate self-love and romantic love. If you’re looking for your Twinflame®, your true love, or you’re ready to find
            yourself, this is the course for you.</p>
        <div class="flex centered move-up-on-scroll">
            <div class="meta vertical-on-mobile mr-5">
                <div class="meta-label mr-2">Starts</div>
                <div class="meta-value">July 26, 2021</div>
            </div><a href="https://superpeer.com/alicepsychic/collection/connect-with-your-twinflamer" class="button button-large button-secondary uppercase">ENROLL</a></div>
        <div data-tooltip=".notify-form" data-delay="[0, 300]" class="flex centered move-up-on-scroll relative w-condition-invisible"
            data-trigger-target-selector=".button" data-arrow="false" data-theme="light large" data-trigger="click" data-max-width="464" data-interactive="true">
            <div class="meta vertical-on-mobile mr-5">
                <div class="meta-label mr-2">Starts</div>
                <div class="meta-value nowrap-text">July 26, 2021</div>
            </div><a href="#" class="button button-large button-secondary uppercase ml-3 nowrap-text">Notify Me</a>
            <div class="hidden">
                <div class="notify-form">
                    <div class="notify-form-header">
                        <div class="notify-form-title">Get notified when the series registrations open</div>
                        <a data-dismiss="tooltip" href="#" class="notify-form-close w-inline-block">
                            <div class="notify-form-close-icon w-embed"><svg width="1em" height="1em" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M17.89 16l5.72-5.72a1.33 1.33 0 10-1.89-1.89L16 14.11 10.28 8.4a1.33 1.33 0 10-1.89 1.89L14.11 16 8.4 21.72a1.33 1.33 0 101.89 1.89L16 17.89l5.72 5.72a1.33 1.33 0 001.89 0c.52-.52.52-1.36 0-1.89L17.89 16z" fill="currentcolor" /></svg></div>
                        </a>
                    </div>
                    <div class="notify-form-body">
                        <div class="notify-form-form w-form">
                            <form id="wf-form-Notify-Me-Form" name="wf-form-Notify-Me-Form" data-name="Notify Me Form">
                                <div class="field-group"><label for="Email-3" class="field-label">Your email</label><input type="email" class="text-field w-input" maxlength="256" name="Email" data-name="Email" placeholder="" id="Email" required="" /></div>
                                <div class="button-block"><input type="submit" value="Notify Me" data-wait="Please wait..." class="button button-primary button-large uppercase button-block w-button" /></div>
                                <div class="hidden">
                                    <div data-convert-to-hidden="SerieID">3</div>
                                    <div data-convert-to-hidden="SerieName">Find Your True Love, your TwinFlame®</div>
                                    <div data-convert-to-hidden="SerieLink">https://superpeer.com/alicepsychic/collection/connect-with-your-twinflamer</div>
                                    <div data-convert-to-hidden="HostName">Alice Johnson</div>
                                    <div data-convert-to-hidden="HostLink">https://superpeer.com/alicepsychic</div>
                                </div>
                            </form>
                            <div class="success-message-v2 w-form-done">
                                <div class="success-message-v2-body">
                                    <div class="success-message-v2-icon w-embed"><svg width="1em" height="1em" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M29.67 15.71c0-.76-.6-1.37-1.34-1.37-.74 0-1.33.62-1.33 1.38 0 2.94-1.1 5.7-3.1 7.79-2.01 2.08-4.69 3.23-7.54 3.24h-.03c-2.84 0-5.5-1.14-7.52-3.2a11.1 11.1 0 01-3.14-7.77c-.01-2.94 1.09-5.7 3.1-7.79a10.44 10.44 0 0110.07-2.93c.72.17 1.44-.28 1.61-1.02a1.38 1.38 0 00-.98-1.66 13.05 13.05 0 00-12.6 3.67A13.88 13.88 0 003 15.8c.01 3.67 1.4 7.12 3.93 9.71 2.52 2.58 5.86 4 9.4 4h.04c3.56-.01 6.9-1.45 9.42-4.05a13.88 13.88 0 003.88-9.74zm-16.4-.93a1.3 1.3 0 00-1.88 0 1.4 1.4 0 000 1.94l4 4.13c.25.26.59.4.94.4h.05c.37-.01.71-.18.96-.47l9.33-11a1.4 1.4 0 00-.12-1.94 1.3 1.3 0 00-1.89.13l-8.4 9.9-2.98-3.1z" fill="currentcolor" /></svg></div>
                                    <div
                                        class="success-message-v2-text">Success</div>
                            </div>
                        </div>
                        <div class="error-message-v2 w-form-fail">
                            <div class="error-message-v2-body">
                                <div class="error-message-v2-icon w-embed"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M8 4.67A.67.67 0 108 6a.67.67 0 000-1.33zm0 2c-.37 0-.67.3-.67.66v3.34a.67.67 0 001.34 0V7.33c0-.36-.3-.66-.67-.66zM2.67 8a5.34 5.34 0 1010.68-.01A5.34 5.34 0 002.67 8zM1.33 8a6.67 6.67 0 1113.34 0A6.67 6.67 0 011.33 8z" fill="currentcolor" /></svg></div>
                                <div
                                    class="error-message-v2-text">Something went wrong. Please try again.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div role="listitem" class="post-entries-item-wrapper w-dyn-item">
        <div class="post-entries-item flex-column-centered move-up-on-scroll">
            <div class="featured-frame mb-6">
                <div class="featured-frame-body small"><a href="https://superpeer.com/wahlbeck/collection/fiction-writing" class="featured-frame-link w-inline-block"><img alt="" loading="lazy" width="402" height="224" src="https://assets.website-files.com/60f070302df82b4bb19e42f6/60f1556754c9c838d0967cda_60f05dbf1d8b773a807783c4_series-v3-11.jpeg" class="featured-frame-image" /></a>
                    <div
                        class="coming-soon uppercase w-condition-invisible">Coming Soon</div>
            </div>
            <div class="featured-frame-frame small"></div>
            <div class="featured-frame-badge">
                <div data-tooltip=".tooltip-content" data-theme="light" data-interactive="true" data-delay="[0,300]" class="avatar-v2 _72px"><img height="72" loading="lazy" width="72" src="https://assets.website-files.com/60f070302df82b4bb19e42f6/60f148b7da65b81b24504703_60f05dbf1d8b77beeb7783c5_avatar-mark-wahlbeck.jpeg" alt="Mark Wahlbeck" class="avatar-v2-image" />
                    <div class="hidden">
                        <div class="tooltip-content">
                            <div class="profile-card">
                                <div class="profile-card-header"><a href="https://superpeer.com/wahlbeck" target="_blank" class="avatar-v2 _56px w-inline-block"><img height="64" loading="lazy" width="64" src="https://assets.website-files.com/60f070302df82b4bb19e42f6/60f148b7da65b81b24504703_60f05dbf1d8b77beeb7783c5_avatar-mark-wahlbeck.jpeg" alt="Mark Wahlbeck" class="avatar-v2-image" /><div class="avatar-badge small w-embed"><svg width="1em" height="1em" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M15.48 14.9c-.63-.13-1.23-.28-1.74-.38l-.84-.18.1-.87.01-.12c0-.2-.03-.36-.1-.54l-.2-.46.27-.43c.16-.26.23-.54.23-.87 0-.35-.1-.65-.29-.9l-.33-.45.22-.52c.09-.2.13-.42.13-.63 0-.3 0-1.21-1.42-1.76a4.8 4.8 0 00-1.35-.23l-1.54-.1.73-1.33c.59-1.07.92-2.03.92-2.7 0-.62-.2-1.17-.66-1.35-1.6-.7-2.73.38-3.53 1.7a48.01 48.01 0 00-1.94 3.48c-1.05 2.22-2.6 3.81-2.6 6.02 0 2.01 1.35 3.6 3.82 4.43C8.4 17.73 12.92 18 14.89 18c1.41 0 2.19-.55 2.19-1.55 0-1.05-1-1.42-1.6-1.55z" fill="#FFD338" />
<path d="M14.85 14l-3.05-.65c.25-.18.5-.54.5-.98 0-.52-.27-.82-.48-.98.29-.21.67-.6.67-1.3 0-.77-.51-1.16-.79-1.34.22-.2.52-.6.52-1.17 0-.99-.76-1.43-1.38-1.68a7.87 7.87 0 00-2.28-.25c-1.37 0-2.6.1-3.2.1-.7 0-.61-.36-.35-.7.16-.18 2.15-2.81 2.53-3.28.26-.35.56-.68.79-.55.24.13.14.73-.12 1.4-.39 1.03-.93 1.69-1.06 1.92l.92.56c.36-.45 1.52-2.39 1.52-3.64C9.6.9 9.38.43 8.96.17a1.37 1.37 0 00-1.42.06c-.32.19-.64.46-.9.8L3.82 4.6c-.8 1.05-.43 2.34 1.28 2.34.6 0 2.57-.15 3.33-.15.88 0 1.3.05 1.61.1.58.08.9.34.9.68 0 .24-.1.42-.31.56-.2.14-.39.36-.39.66 0 .36.33.5.55.65.29.18.46.31.46.62 0 .27-.2.43-.43.6-.19.14-.43.3-.43.63 0 .3.21.45.35.56.15.12.3.25.3.49s-.1.36-.4.53c-.23.13-.56.37-.56.72 0 .39.28.56.6.65l3.96.87c.26.06.52.15.52.36 0 .22-.35.32-.84.32-1.7 0-6.4-.35-9.18-1.31-1.88-.63-2.91-1.8-2.91-3.19 0-1.2.8-2.28 1.68-2.9l-.8-.8A4.69 4.69 0 001 11.31c0 1.7 1 3.42 3.78 4.35 2.94 1 7.41 1.3 9.5 1.3 1.42 0 2.1-.6 2.1-1.48 0-.85-.7-1.31-1.53-1.48z" fill="#222" />
</svg></div></a>
                                    <div class="profile-card-subscribe"><a href="https://superpeer.com/wahlbeck" class="button button-bordered blue button-small w-button">Subscribe</a></div>
                                </div>
                                <div class="profile-card-body">
                                    <div class="profile-card-info"><a href="https://superpeer.com/wahlbeck" target="_blank" class="profile-card-title">Mark Wahlbeck</a>
                                        <div class="profile-card-location">
                                            <div class="profile-card-location-icon w-embed"><svg width="1em" height="1em" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10.5 5c0 3.5-4.5 6.5-4.5 6.5S1.5 8.5 1.5 5a4.5 4.5 0 019 0z" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" /><path d="M6 6.5a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" /></svg></div>
                                            <div
                                                class="profile-card-location-text">Houston, TX</div>
                                    </div>
                                    <div class="profile-card-bio">I write fiction and help aspiring authors achieve success</div>
                                </div>
                                <div class="profile-card-social-profiles">
                                    <div class="social-profile-list">
                                        <a href="https://twitter.com/markwahlbeck" target="_blank" class="social-profile-list-item w-inline-block">
                                            <div class="social-profile-list-icon twitter w-embed"><svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13.97 2.67c-.52.23-1.08.38-1.65.45a2.9 2.9 0 001.27-1.6c-.56.33-1.17.57-1.83.7a2.87 2.87 0 00-4.89 2.61A8.13 8.13 0 01.96 1.84a2.87 2.87 0 00.89 3.83c-.46 0-.9-.13-1.3-.35v.03a2.87 2.87 0 002.3 2.82c-.42.11-.87.13-1.3.05a2.88 2.88 0 002.7 2A5.76 5.76 0 010 11.4a8.16 8.16 0 004.4 1.29c5.29 0 8.17-4.37 8.17-8.16v-.37A5.8 5.8 0 0014 2.68l-.03-.01z" fill="#1DA1F2" /></svg></div>
                                            <div
                                                class="social-profile-list-title">markwahlbeck</div>
                                    </a>
                                    <div class="social-profile-list-inline-items">
                                        <a href="#" class="social-profile-list-item inline w-inline-block w-condition-invisible">
                                            <div class="social-profile-list-icon inline youtube w-embed"><svg width="1em" height="1em" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M11.91 2.84c.55.15.97.58 1.12 1.12.26.99.26 3.05.26 3.05s0 2.06-.26 3.05c-.15.54-.57.95-1.12 1.1-.98.26-4.91.26-4.91.26s-3.93 0-4.91-.26a1.56 1.56 0 01-1.12-1.1C.71 9.06.71 7 .71 7s0-2.06.26-3.05c.15-.54.57-.97 1.12-1.12C3.07 2.58 7 2.58 7 2.58s3.93 0 4.91.26zm-6.2 2.3v3.74L9.01 7 5.7 5.14z" fill="red" /></svg></div>
                                        </a>
                                        <a href="#" class="social-profile-list-item inline w-inline-block w-condition-invisible">
                                            <div class="social-profile-list-icon inline instagram w-embed"><svg width="1em" height="1em" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M11.58 3.26a.84.84 0 11-1.68 0 .84.84 0 011.68 0zM7 9.33a2.33 2.33 0 110-4.66 2.33 2.33 0 010 4.66zm0-5.92a3.6 3.6 0 100 7.18 3.6 3.6 0 000-7.18zm0-2.15c1.87 0 2.09 0 2.83.04.68.03 1.05.15 1.3.24.33.13.56.28.8.53.25.24.4.47.53.8.1.25.2.62.24 1.3.03.74.04.96.04 2.83s0 2.1-.04 2.83a3.87 3.87 0 01-.24 1.3c-.13.33-.28.56-.53.8-.24.25-.47.4-.8.53-.25.1-.62.2-1.3.24-.74.03-.96.04-2.83.04s-2.1 0-2.83-.04a3.87 3.87 0 01-1.3-.24 2.17 2.17 0 01-.8-.53c-.25-.24-.4-.47-.53-.8-.1-.25-.2-.62-.24-1.3-.03-.74-.04-.96-.04-2.83s0-2.09.04-2.83c.03-.68.15-1.05.24-1.3.13-.32.28-.56.53-.8.24-.25.47-.4.8-.53.25-.1.62-.2 1.3-.24.74-.03.96-.04 2.83-.04zM7 0C5.1 0 4.86 0 4.11.04c-.74.04-1.25.15-1.7.33-.46.18-.85.42-1.24.8-.38.4-.62.78-.8 1.24-.18.45-.3.96-.33 1.7C.01 4.86 0 5.1 0 7c0 1.9 0 2.14.04 2.89.04.74.15 1.25.33 1.7.18.46.42.85.8 1.24.4.38.78.62 1.24.8.45.18.96.3 1.7.33.75.03.99.04 2.89.04 1.9 0 2.14 0 2.89-.04a5.14 5.14 0 001.7-.33c.46-.18.85-.42 1.24-.8.38-.4.62-.78.8-1.24.18-.45.3-.96.33-1.7.03-.75.04-.99.04-2.89 0-1.9 0-2.14-.04-2.89a5.14 5.14 0 00-.33-1.7 3.43 3.43 0 00-.8-1.24 3.43 3.43 0 00-1.24-.8c-.45-.18-.96-.3-1.7-.33C9.14.01 8.9 0 7 0z" fill="#e95950" /></svg></div>
                                        </a>
                                        <a href="#" class="social-profile-list-item inline w-inline-block w-condition-invisible">
                                            <div class="social-profile-list-icon inline twitch w-embed"><svg width="1em" height="1em" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.7.46L.88 2.9v9h3.27v1.63h1.63l1.63-1.63h2.44l3.27-3.49V.46H1.7zm10.6 7.36l-2.28 2.45h-2.9l-1.75 1.28v-1.28H2.5v-9h9.8v6.55z" fill="#7743D4" /><path d="M7.4 3.73h-.8V7h.8V3.73zM9.85 3.73h-.81V7h.81V3.73z" fill="#7743D4" /></svg></div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="flex-column-centered">
        <a href="https://superpeer.com/wahlbeck/collection/fiction-writing" class="post-entries-title-link silent-hover w-inline-block">
            <h3>Fiction Writing For Absolute Beginners: How To Publish Your First Story</h3>
        </a><a href="https://superpeer.com/wahlbeck" class="post-entries-host-name silent-hover">Mark Wahlbeck</a>
        <p>Writing can be hard! Publishing can be even harder! In this Series not only will you learn how to write good fiction, you’ll also learn how to publish your writing.</p>
        <div class="flex centered move-up-on-scroll">
            <div class="meta vertical-on-mobile mr-5">
                <div class="meta-label mr-2">Starts</div>
                <div class="meta-value">August 2, 2021</div>
            </div><a href="https://superpeer.com/wahlbeck/collection/fiction-writing" class="button button-large button-secondary uppercase">ENROLL</a></div>
        <div data-tooltip=".notify-form" data-delay="[0, 300]" class="flex centered move-up-on-scroll relative w-condition-invisible"
            data-trigger-target-selector=".button" data-arrow="false" data-theme="light large" data-trigger="click" data-max-width="464" data-interactive="true">
            <div class="meta vertical-on-mobile mr-5">
                <div class="meta-label mr-2">Starts</div>
                <div class="meta-value nowrap-text">August 2, 2021</div>
            </div><a href="#" class="button button-large button-secondary uppercase ml-3 nowrap-text">Notify Me</a>
            <div class="hidden">
                <div class="notify-form">
                    <div class="notify-form-header">
                        <div class="notify-form-title">Get notified when the series registrations open</div>
                        <a data-dismiss="tooltip" href="#" class="notify-form-close w-inline-block">
                            <div class="notify-form-close-icon w-embed"><svg width="1em" height="1em" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M17.89 16l5.72-5.72a1.33 1.33 0 10-1.89-1.89L16 14.11 10.28 8.4a1.33 1.33 0 10-1.89 1.89L14.11 16 8.4 21.72a1.33 1.33 0 101.89 1.89L16 17.89l5.72 5.72a1.33 1.33 0 001.89 0c.52-.52.52-1.36 0-1.89L17.89 16z" fill="currentcolor" /></svg></div>
                        </a>
                    </div>
                    <div class="notify-form-body">
                        <div class="notify-form-form w-form">
                            <form id="wf-form-Notify-Me-Form" name="wf-form-Notify-Me-Form" data-name="Notify Me Form">
                                <div class="field-group"><label for="Email-3" class="field-label">Your email</label><input type="email" class="text-field w-input" maxlength="256" name="Email" data-name="Email" placeholder="" id="Email" required="" /></div>
                                <div class="button-block"><input type="submit" value="Notify Me" data-wait="Please wait..." class="button button-primary button-large uppercase button-block w-button" /></div>
                                <div class="hidden">
                                    <div data-convert-to-hidden="SerieID">4</div>
                                    <div data-convert-to-hidden="SerieName">Fiction Writing For Absolute Beginners: How To Publish Your First Story</div>
                                    <div data-convert-to-hidden="SerieLink">https://superpeer.com/wahlbeck/collection/fiction-writing</div>
                                    <div data-convert-to-hidden="HostName">Mark Wahlbeck</div>
                                    <div data-convert-to-hidden="HostLink">https://superpeer.com/wahlbeck</div>
                                </div>
                            </form>
                            <div class="success-message-v2 w-form-done">
                                <div class="success-message-v2-body">
                                    <div class="success-message-v2-icon w-embed"><svg width="1em" height="1em" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M29.67 15.71c0-.76-.6-1.37-1.34-1.37-.74 0-1.33.62-1.33 1.38 0 2.94-1.1 5.7-3.1 7.79-2.01 2.08-4.69 3.23-7.54 3.24h-.03c-2.84 0-5.5-1.14-7.52-3.2a11.1 11.1 0 01-3.14-7.77c-.01-2.94 1.09-5.7 3.1-7.79a10.44 10.44 0 0110.07-2.93c.72.17 1.44-.28 1.61-1.02a1.38 1.38 0 00-.98-1.66 13.05 13.05 0 00-12.6 3.67A13.88 13.88 0 003 15.8c.01 3.67 1.4 7.12 3.93 9.71 2.52 2.58 5.86 4 9.4 4h.04c3.56-.01 6.9-1.45 9.42-4.05a13.88 13.88 0 003.88-9.74zm-16.4-.93a1.3 1.3 0 00-1.88 0 1.4 1.4 0 000 1.94l4 4.13c.25.26.59.4.94.4h.05c.37-.01.71-.18.96-.47l9.33-11a1.4 1.4 0 00-.12-1.94 1.3 1.3 0 00-1.89.13l-8.4 9.9-2.98-3.1z" fill="currentcolor" /></svg></div>
                                    <div
                                        class="success-message-v2-text">Success</div>
                            </div>
                        </div>
                        <div class="error-message-v2 w-form-fail">
                            <div class="error-message-v2-body">
                                <div class="error-message-v2-icon w-embed"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M8 4.67A.67.67 0 108 6a.67.67 0 000-1.33zm0 2c-.37 0-.67.3-.67.66v3.34a.67.67 0 001.34 0V7.33c0-.36-.3-.66-.67-.66zM2.67 8a5.34 5.34 0 1010.68-.01A5.34 5.34 0 002.67 8zM1.33 8a6.67 6.67 0 1113.34 0A6.67 6.67 0 011.33 8z" fill="currentcolor" /></svg></div>
                                <div
                                    class="error-message-v2-text">Something went wrong. Please try again.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div role="listitem" class="post-entries-item-wrapper w-dyn-item">
        <div class="post-entries-item flex-column-centered move-up-on-scroll">
            <div class="featured-frame mb-6">
                <div class="featured-frame-body small"><a href="https://superpeer.com/hypnosis/collection/hypnosis-adventures" class="featured-frame-link w-inline-block"><img alt="" loading="lazy" width="402" height="224" src="https://assets.website-files.com/60f070302df82b4bb19e42f6/60f1556841211470a6ee0e26_60f05dbf1d8b770dc67783be_series-v3-04.jpeg" class="featured-frame-image" /></a>
                    <div
                        class="coming-soon uppercase w-condition-invisible">Coming Soon</div>
            </div>
            <div class="featured-frame-frame small"></div>
            <div class="featured-frame-badge">
                <div data-tooltip=".tooltip-content" data-theme="light" data-interactive="true" data-delay="[0,300]" class="avatar-v2 _72px"><img height="72" loading="lazy" width="72" src="https://assets.website-files.com/60f070302df82b4bb19e42f6/60f148b8be2d71a2bdd62d6a_60f05dbf1d8b772cc1778393_avatar-jason-akel.jpeg" alt="Jason Akel" class="avatar-v2-image" />
                    <div class="hidden">
                        <div class="tooltip-content">
                            <div class="profile-card">
                                <div class="profile-card-header"><a href="https://superpeer.com/hypnosis" target="_blank" class="avatar-v2 _56px w-inline-block"><img height="64" loading="lazy" width="64" src="https://assets.website-files.com/60f070302df82b4bb19e42f6/60f148b8be2d71a2bdd62d6a_60f05dbf1d8b772cc1778393_avatar-jason-akel.jpeg" alt="Jason Akel" class="avatar-v2-image" /><div class="avatar-badge small w-embed"><svg width="1em" height="1em" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M15.48 14.9c-.63-.13-1.23-.28-1.74-.38l-.84-.18.1-.87.01-.12c0-.2-.03-.36-.1-.54l-.2-.46.27-.43c.16-.26.23-.54.23-.87 0-.35-.1-.65-.29-.9l-.33-.45.22-.52c.09-.2.13-.42.13-.63 0-.3 0-1.21-1.42-1.76a4.8 4.8 0 00-1.35-.23l-1.54-.1.73-1.33c.59-1.07.92-2.03.92-2.7 0-.62-.2-1.17-.66-1.35-1.6-.7-2.73.38-3.53 1.7a48.01 48.01 0 00-1.94 3.48c-1.05 2.22-2.6 3.81-2.6 6.02 0 2.01 1.35 3.6 3.82 4.43C8.4 17.73 12.92 18 14.89 18c1.41 0 2.19-.55 2.19-1.55 0-1.05-1-1.42-1.6-1.55z" fill="#FFD338" />
<path d="M14.85 14l-3.05-.65c.25-.18.5-.54.5-.98 0-.52-.27-.82-.48-.98.29-.21.67-.6.67-1.3 0-.77-.51-1.16-.79-1.34.22-.2.52-.6.52-1.17 0-.99-.76-1.43-1.38-1.68a7.87 7.87 0 00-2.28-.25c-1.37 0-2.6.1-3.2.1-.7 0-.61-.36-.35-.7.16-.18 2.15-2.81 2.53-3.28.26-.35.56-.68.79-.55.24.13.14.73-.12 1.4-.39 1.03-.93 1.69-1.06 1.92l.92.56c.36-.45 1.52-2.39 1.52-3.64C9.6.9 9.38.43 8.96.17a1.37 1.37 0 00-1.42.06c-.32.19-.64.46-.9.8L3.82 4.6c-.8 1.05-.43 2.34 1.28 2.34.6 0 2.57-.15 3.33-.15.88 0 1.3.05 1.61.1.58.08.9.34.9.68 0 .24-.1.42-.31.56-.2.14-.39.36-.39.66 0 .36.33.5.55.65.29.18.46.31.46.62 0 .27-.2.43-.43.6-.19.14-.43.3-.43.63 0 .3.21.45.35.56.15.12.3.25.3.49s-.1.36-.4.53c-.23.13-.56.37-.56.72 0 .39.28.56.6.65l3.96.87c.26.06.52.15.52.36 0 .22-.35.32-.84.32-1.7 0-6.4-.35-9.18-1.31-1.88-.63-2.91-1.8-2.91-3.19 0-1.2.8-2.28 1.68-2.9l-.8-.8A4.69 4.69 0 001 11.31c0 1.7 1 3.42 3.78 4.35 2.94 1 7.41 1.3 9.5 1.3 1.42 0 2.1-.6 2.1-1.48 0-.85-.7-1.31-1.53-1.48z" fill="#222" />
</svg></div></a>
                                    <div class="profile-card-subscribe"><a href="https://superpeer.com/hypnosis" class="button button-bordered blue button-small w-button">Subscribe</a></div>
                                </div>
                                <div class="profile-card-body">
                                    <div class="profile-card-info"><a href="https://superpeer.com/hypnosis" target="_blank" class="profile-card-title">Jason Akel</a>
                                        <div class="profile-card-location">
                                            <div class="profile-card-location-icon w-embed"><svg width="1em" height="1em" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10.5 5c0 3.5-4.5 6.5-4.5 6.5S1.5 8.5 1.5 5a4.5 4.5 0 019 0z" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" /><path d="M6 6.5a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" /></svg></div>
                                            <div
                                                class="profile-card-location-text">San Francisco Bay Area</div>
                                    </div>
                                    <div class="profile-card-bio">Master Hypnotist, Certified Hypnotherapist &amp; Coach</div>
                                </div>
                                <div class="profile-card-social-profiles">
                                    <div class="social-profile-list">
                                        <a href="https://twitter.com/JasonAkel" target="_blank" class="social-profile-list-item w-inline-block">
                                            <div class="social-profile-list-icon twitter w-embed"><svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13.97 2.67c-.52.23-1.08.38-1.65.45a2.9 2.9 0 001.27-1.6c-.56.33-1.17.57-1.83.7a2.87 2.87 0 00-4.89 2.61A8.13 8.13 0 01.96 1.84a2.87 2.87 0 00.89 3.83c-.46 0-.9-.13-1.3-.35v.03a2.87 2.87 0 002.3 2.82c-.42.11-.87.13-1.3.05a2.88 2.88 0 002.7 2A5.76 5.76 0 010 11.4a8.16 8.16 0 004.4 1.29c5.29 0 8.17-4.37 8.17-8.16v-.37A5.8 5.8 0 0014 2.68l-.03-.01z" fill="#1DA1F2" /></svg></div>
                                            <div
                                                class="social-profile-list-title">JasonAkel</div>
                                    </a>
                                    <div class="social-profile-list-inline-items">
                                        <a href="#" class="social-profile-list-item inline w-inline-block w-condition-invisible">
                                            <div class="social-profile-list-icon inline youtube w-embed"><svg width="1em" height="1em" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M11.91 2.84c.55.15.97.58 1.12 1.12.26.99.26 3.05.26 3.05s0 2.06-.26 3.05c-.15.54-.57.95-1.12 1.1-.98.26-4.91.26-4.91.26s-3.93 0-4.91-.26a1.56 1.56 0 01-1.12-1.1C.71 9.06.71 7 .71 7s0-2.06.26-3.05c.15-.54.57-.97 1.12-1.12C3.07 2.58 7 2.58 7 2.58s3.93 0 4.91.26zm-6.2 2.3v3.74L9.01 7 5.7 5.14z" fill="red" /></svg></div>
                                        </a>
                                        <a href="#" class="social-profile-list-item inline w-inline-block w-condition-invisible">
                                            <div class="social-profile-list-icon inline instagram w-embed"><svg width="1em" height="1em" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M11.58 3.26a.84.84 0 11-1.68 0 .84.84 0 011.68 0zM7 9.33a2.33 2.33 0 110-4.66 2.33 2.33 0 010 4.66zm0-5.92a3.6 3.6 0 100 7.18 3.6 3.6 0 000-7.18zm0-2.15c1.87 0 2.09 0 2.83.04.68.03 1.05.15 1.3.24.33.13.56.28.8.53.25.24.4.47.53.8.1.25.2.62.24 1.3.03.74.04.96.04 2.83s0 2.1-.04 2.83a3.87 3.87 0 01-.24 1.3c-.13.33-.28.56-.53.8-.24.25-.47.4-.8.53-.25.1-.62.2-1.3.24-.74.03-.96.04-2.83.04s-2.1 0-2.83-.04a3.87 3.87 0 01-1.3-.24 2.17 2.17 0 01-.8-.53c-.25-.24-.4-.47-.53-.8-.1-.25-.2-.62-.24-1.3-.03-.74-.04-.96-.04-2.83s0-2.09.04-2.83c.03-.68.15-1.05.24-1.3.13-.32.28-.56.53-.8.24-.25.47-.4.8-.53.25-.1.62-.2 1.3-.24.74-.03.96-.04 2.83-.04zM7 0C5.1 0 4.86 0 4.11.04c-.74.04-1.25.15-1.7.33-.46.18-.85.42-1.24.8-.38.4-.62.78-.8 1.24-.18.45-.3.96-.33 1.7C.01 4.86 0 5.1 0 7c0 1.9 0 2.14.04 2.89.04.74.15 1.25.33 1.7.18.46.42.85.8 1.24.4.38.78.62 1.24.8.45.18.96.3 1.7.33.75.03.99.04 2.89.04 1.9 0 2.14 0 2.89-.04a5.14 5.14 0 001.7-.33c.46-.18.85-.42 1.24-.8.38-.4.62-.78.8-1.24.18-.45.3-.96.33-1.7.03-.75.04-.99.04-2.89 0-1.9 0-2.14-.04-2.89a5.14 5.14 0 00-.33-1.7 3.43 3.43 0 00-.8-1.24 3.43 3.43 0 00-1.24-.8c-.45-.18-.96-.3-1.7-.33C9.14.01 8.9 0 7 0z" fill="#e95950" /></svg></div>
                                        </a>
                                        <a href="#" class="social-profile-list-item inline w-inline-block w-condition-invisible">
                                            <div class="social-profile-list-icon inline twitch w-embed"><svg width="1em" height="1em" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.7.46L.88 2.9v9h3.27v1.63h1.63l1.63-1.63h2.44l3.27-3.49V.46H1.7zm10.6 7.36l-2.28 2.45h-2.9l-1.75 1.28v-1.28H2.5v-9h9.8v6.55z" fill="#7743D4" /><path d="M7.4 3.73h-.8V7h.8V3.73zM9.85 3.73h-.81V7h.81V3.73z" fill="#7743D4" /></svg></div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="flex-column-centered">
        <a href="https://superpeer.com/hypnosis/collection/hypnosis-adventures" class="post-entries-title-link silent-hover w-inline-block">
            <h3>Self-Hypnosis and HypnoTherapy Adventures</h3>
        </a><a href="https://superpeer.com/hypnosis" class="post-entries-host-name silent-hover">Jason Akel</a>
        <p>Stop being so critical of yourself and overanalyzing everything. Discover the power of hypnosis and hypnotherapy: you could be living a more confident, free-thinking life. For first-timers and experienced meditators – relax, learn and get motivated.</p>
        <div
            class="flex centered move-up-on-scroll">
            <div class="meta vertical-on-mobile mr-5">
                <div class="meta-label mr-2">Starts</div>
                <div class="meta-value">August 20, 2021</div>
            </div><a href="https://superpeer.com/hypnosis/collection/hypnosis-adventures" class="button button-large button-secondary uppercase">ENROLL</a></div>
    <div data-tooltip=".notify-form" data-delay="[0, 300]" class="flex centered move-up-on-scroll relative w-condition-invisible"
        data-trigger-target-selector=".button" data-arrow="false" data-theme="light large" data-trigger="click" data-max-width="464" data-interactive="true">
        <div class="meta vertical-on-mobile mr-5">
            <div class="meta-label mr-2">Starts</div>
            <div class="meta-value nowrap-text">August 20, 2021</div>
        </div><a href="#" class="button button-large button-secondary uppercase ml-3 nowrap-text">Notify Me</a>
        <div class="hidden">
            <div class="notify-form">
                <div class="notify-form-header">
                    <div class="notify-form-title">Get notified when the series registrations open</div>
                    <a data-dismiss="tooltip" href="#" class="notify-form-close w-inline-block">
                        <div class="notify-form-close-icon w-embed"><svg width="1em" height="1em" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M17.89 16l5.72-5.72a1.33 1.33 0 10-1.89-1.89L16 14.11 10.28 8.4a1.33 1.33 0 10-1.89 1.89L14.11 16 8.4 21.72a1.33 1.33 0 101.89 1.89L16 17.89l5.72 5.72a1.33 1.33 0 001.89 0c.52-.52.52-1.36 0-1.89L17.89 16z" fill="currentcolor" /></svg></div>
                    </a>
                </div>
                <div class="notify-form-body">
                    <div class="notify-form-form w-form">
                        <form id="wf-form-Notify-Me-Form" name="wf-form-Notify-Me-Form" data-name="Notify Me Form">
                            <div class="field-group"><label for="Email-3" class="field-label">Your email</label><input type="email" class="text-field w-input" maxlength="256" name="Email" data-name="Email" placeholder="" id="Email" required="" /></div>
                            <div class="button-block"><input type="submit" value="Notify Me" data-wait="Please wait..." class="button button-primary button-large uppercase button-block w-button" /></div>
                            <div class="hidden">
                                <div data-convert-to-hidden="SerieID">5</div>
                                <div data-convert-to-hidden="SerieName">Self-Hypnosis and HypnoTherapy Adventures</div>
                                <div data-convert-to-hidden="SerieLink">https://superpeer.com/hypnosis/collection/hypnosis-adventures</div>
                                <div data-convert-to-hidden="HostName">Jason Akel</div>
                                <div data-convert-to-hidden="HostLink">https://superpeer.com/hypnosis</div>
                            </div>
                        </form>
                        <div class="success-message-v2 w-form-done">
                            <div class="success-message-v2-body">
                                <div class="success-message-v2-icon w-embed"><svg width="1em" height="1em" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M29.67 15.71c0-.76-.6-1.37-1.34-1.37-.74 0-1.33.62-1.33 1.38 0 2.94-1.1 5.7-3.1 7.79-2.01 2.08-4.69 3.23-7.54 3.24h-.03c-2.84 0-5.5-1.14-7.52-3.2a11.1 11.1 0 01-3.14-7.77c-.01-2.94 1.09-5.7 3.1-7.79a10.44 10.44 0 0110.07-2.93c.72.17 1.44-.28 1.61-1.02a1.38 1.38 0 00-.98-1.66 13.05 13.05 0 00-12.6 3.67A13.88 13.88 0 003 15.8c.01 3.67 1.4 7.12 3.93 9.71 2.52 2.58 5.86 4 9.4 4h.04c3.56-.01 6.9-1.45 9.42-4.05a13.88 13.88 0 003.88-9.74zm-16.4-.93a1.3 1.3 0 00-1.88 0 1.4 1.4 0 000 1.94l4 4.13c.25.26.59.4.94.4h.05c.37-.01.71-.18.96-.47l9.33-11a1.4 1.4 0 00-.12-1.94 1.3 1.3 0 00-1.89.13l-8.4 9.9-2.98-3.1z" fill="currentcolor" /></svg></div>
                                <div
                                    class="success-message-v2-text">Success</div>
                        </div>
                    </div>
                    <div class="error-message-v2 w-form-fail">
                        <div class="error-message-v2-body">
                            <div class="error-message-v2-icon w-embed"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M8 4.67A.67.67 0 108 6a.67.67 0 000-1.33zm0 2c-.37 0-.67.3-.67.66v3.34a.67.67 0 001.34 0V7.33c0-.36-.3-.66-.67-.66zM2.67 8a5.34 5.34 0 1010.68-.01A5.34 5.34 0 002.67 8zM1.33 8a6.67 6.67 0 1113.34 0A6.67 6.67 0 011.33 8z" fill="currentcolor" /></svg></div>
                            <div
                                class="error-message-v2-text">Something went wrong. Please try again.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div role="listitem" class="post-entries-item-wrapper w-dyn-item">
        <div class="post-entries-item flex-column-centered move-up-on-scroll">
            <div class="featured-frame mb-6">
                <div class="featured-frame-body small"><a href="https://superpeer.com/tristanpollock/collection/movement-building-mission-driven-growth-hacking" class="featured-frame-link w-inline-block"><img alt="" loading="lazy" width="402" height="224" src="https://assets.website-files.com/60f070302df82b4bb19e42f6/60f15567b0f46b5d8a06fba0_60f05dbf1d8b7746637783ba_series-v3-06.jpeg" sizes="(max-width: 479px) 85vw, (max-width: 767px) 402px, (max-width: 991px) 44vw, 402px" srcset="https://assets.website-files.com/60f070302df82b4bb19e42f6/60f15567b0f46b5d8a06fba0_60f05dbf1d8b7746637783ba_series-v3-06-p-800.jpeg 800w, https://assets.website-files.com/60f070302df82b4bb19e42f6/60f15567b0f46b5d8a06fba0_60f05dbf1d8b7746637783ba_series-v3-06.jpeg 804w" class="featured-frame-image" /></a>
                    <div
                        class="coming-soon uppercase w-condition-invisible">Coming Soon</div>
            </div>
            <div class="featured-frame-frame small"></div>
            <div class="featured-frame-badge">
                <div data-tooltip=".tooltip-content" data-theme="light" data-interactive="true" data-delay="[0,300]" class="avatar-v2 _72px"><img height="72" loading="lazy" width="72" src="https://assets.website-files.com/60f070302df82b4bb19e42f6/60f08c052a4d992e5e744f2f_60f05dbf1d8b77de45778398_avatar-tristan-pollock.jpeg" alt="Tristan Pollock" sizes="70px" srcset="https://assets.website-files.com/60f070302df82b4bb19e42f6/60f08c052a4d992e5e744f2f_60f05dbf1d8b77de45778398_avatar-tristan-pollock-p-800.jpeg 800w, https://assets.website-files.com/60f070302df82b4bb19e42f6/60f08c052a4d992e5e744f2f_60f05dbf1d8b77de45778398_avatar-tristan-pollock.jpeg 800w"
                        class="avatar-v2-image" />
                    <div class="hidden">
                        <div class="tooltip-content">
                            <div class="profile-card">
                                <div class="profile-card-header"><a href="https://superpeer.com/tristanpollock" target="_blank" class="avatar-v2 _56px w-inline-block"><img height="64" loading="lazy" width="64" src="https://assets.website-files.com/60f070302df82b4bb19e42f6/60f08c052a4d992e5e744f2f_60f05dbf1d8b77de45778398_avatar-tristan-pollock.jpeg" alt="Tristan Pollock" sizes="100vw" srcset="https://assets.website-files.com/60f070302df82b4bb19e42f6/60f08c052a4d992e5e744f2f_60f05dbf1d8b77de45778398_avatar-tristan-pollock-p-800.jpeg 800w, https://assets.website-files.com/60f070302df82b4bb19e42f6/60f08c052a4d992e5e744f2f_60f05dbf1d8b77de45778398_avatar-tristan-pollock.jpeg 800w" class="avatar-v2-image" /><div class="avatar-badge small w-embed"><svg width="1em" height="1em" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M15.48 14.9c-.63-.13-1.23-.28-1.74-.38l-.84-.18.1-.87.01-.12c0-.2-.03-.36-.1-.54l-.2-.46.27-.43c.16-.26.23-.54.23-.87 0-.35-.1-.65-.29-.9l-.33-.45.22-.52c.09-.2.13-.42.13-.63 0-.3 0-1.21-1.42-1.76a4.8 4.8 0 00-1.35-.23l-1.54-.1.73-1.33c.59-1.07.92-2.03.92-2.7 0-.62-.2-1.17-.66-1.35-1.6-.7-2.73.38-3.53 1.7a48.01 48.01 0 00-1.94 3.48c-1.05 2.22-2.6 3.81-2.6 6.02 0 2.01 1.35 3.6 3.82 4.43C8.4 17.73 12.92 18 14.89 18c1.41 0 2.19-.55 2.19-1.55 0-1.05-1-1.42-1.6-1.55z" fill="#FFD338" />
<path d="M14.85 14l-3.05-.65c.25-.18.5-.54.5-.98 0-.52-.27-.82-.48-.98.29-.21.67-.6.67-1.3 0-.77-.51-1.16-.79-1.34.22-.2.52-.6.52-1.17 0-.99-.76-1.43-1.38-1.68a7.87 7.87 0 00-2.28-.25c-1.37 0-2.6.1-3.2.1-.7 0-.61-.36-.35-.7.16-.18 2.15-2.81 2.53-3.28.26-.35.56-.68.79-.55.24.13.14.73-.12 1.4-.39 1.03-.93 1.69-1.06 1.92l.92.56c.36-.45 1.52-2.39 1.52-3.64C9.6.9 9.38.43 8.96.17a1.37 1.37 0 00-1.42.06c-.32.19-.64.46-.9.8L3.82 4.6c-.8 1.05-.43 2.34 1.28 2.34.6 0 2.57-.15 3.33-.15.88 0 1.3.05 1.61.1.58.08.9.34.9.68 0 .24-.1.42-.31.56-.2.14-.39.36-.39.66 0 .36.33.5.55.65.29.18.46.31.46.62 0 .27-.2.43-.43.6-.19.14-.43.3-.43.63 0 .3.21.45.35.56.15.12.3.25.3.49s-.1.36-.4.53c-.23.13-.56.37-.56.72 0 .39.28.56.6.65l3.96.87c.26.06.52.15.52.36 0 .22-.35.32-.84.32-1.7 0-6.4-.35-9.18-1.31-1.88-.63-2.91-1.8-2.91-3.19 0-1.2.8-2.28 1.68-2.9l-.8-.8A4.69 4.69 0 001 11.31c0 1.7 1 3.42 3.78 4.35 2.94 1 7.41 1.3 9.5 1.3 1.42 0 2.1-.6 2.1-1.48 0-.85-.7-1.31-1.53-1.48z" fill="#222" />
</svg></div></a>
                                    <div class="profile-card-subscribe"><a href="https://superpeer.com/tristanpollock" class="button button-bordered blue button-small w-button">Subscribe</a></div>
                                </div>
                                <div class="profile-card-body">
                                    <div class="profile-card-info"><a href="https://superpeer.com/tristanpollock" target="_blank" class="profile-card-title">Tristan Pollock</a>
                                        <div class="profile-card-location">
                                            <div class="profile-card-location-icon w-embed"><svg width="1em" height="1em" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10.5 5c0 3.5-4.5 6.5-4.5 6.5S1.5 8.5 1.5 5a4.5 4.5 0 019 0z" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" /><path d="M6 6.5a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" /></svg></div>
                                            <div
                                                class="profile-card-location-text">San Francisco</div>
                                    </div>
                                    <div class="profile-card-bio">2X Founder // VC // Community Movement Builder</div>
                                </div>
                                <div class="profile-card-social-profiles">
                                    <div class="social-profile-list">
                                        <a href="https://twitter.com/pollock" target="_blank" class="social-profile-list-item w-inline-block">
                                            <div class="social-profile-list-icon twitter w-embed"><svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13.97 2.67c-.52.23-1.08.38-1.65.45a2.9 2.9 0 001.27-1.6c-.56.33-1.17.57-1.83.7a2.87 2.87 0 00-4.89 2.61A8.13 8.13 0 01.96 1.84a2.87 2.87 0 00.89 3.83c-.46 0-.9-.13-1.3-.35v.03a2.87 2.87 0 002.3 2.82c-.42.11-.87.13-1.3.05a2.88 2.88 0 002.7 2A5.76 5.76 0 010 11.4a8.16 8.16 0 004.4 1.29c5.29 0 8.17-4.37 8.17-8.16v-.37A5.8 5.8 0 0014 2.68l-.03-.01z" fill="#1DA1F2" /></svg></div>
                                            <div
                                                class="social-profile-list-title">pollock</div>
                                    </a>
                                    <div class="social-profile-list-inline-items">
                                        <a href="#" class="social-profile-list-item inline w-inline-block w-condition-invisible">
                                            <div class="social-profile-list-icon inline youtube w-embed"><svg width="1em" height="1em" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M11.91 2.84c.55.15.97.58 1.12 1.12.26.99.26 3.05.26 3.05s0 2.06-.26 3.05c-.15.54-.57.95-1.12 1.1-.98.26-4.91.26-4.91.26s-3.93 0-4.91-.26a1.56 1.56 0 01-1.12-1.1C.71 9.06.71 7 .71 7s0-2.06.26-3.05c.15-.54.57-.97 1.12-1.12C3.07 2.58 7 2.58 7 2.58s3.93 0 4.91.26zm-6.2 2.3v3.74L9.01 7 5.7 5.14z" fill="red" /></svg></div>
                                        </a>
                                        <a href="#" class="social-profile-list-item inline w-inline-block w-condition-invisible">
                                            <div class="social-profile-list-icon inline instagram w-embed"><svg width="1em" height="1em" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M11.58 3.26a.84.84 0 11-1.68 0 .84.84 0 011.68 0zM7 9.33a2.33 2.33 0 110-4.66 2.33 2.33 0 010 4.66zm0-5.92a3.6 3.6 0 100 7.18 3.6 3.6 0 000-7.18zm0-2.15c1.87 0 2.09 0 2.83.04.68.03 1.05.15 1.3.24.33.13.56.28.8.53.25.24.4.47.53.8.1.25.2.62.24 1.3.03.74.04.96.04 2.83s0 2.1-.04 2.83a3.87 3.87 0 01-.24 1.3c-.13.33-.28.56-.53.8-.24.25-.47.4-.8.53-.25.1-.62.2-1.3.24-.74.03-.96.04-2.83.04s-2.1 0-2.83-.04a3.87 3.87 0 01-1.3-.24 2.17 2.17 0 01-.8-.53c-.25-.24-.4-.47-.53-.8-.1-.25-.2-.62-.24-1.3-.03-.74-.04-.96-.04-2.83s0-2.09.04-2.83c.03-.68.15-1.05.24-1.3.13-.32.28-.56.53-.8.24-.25.47-.4.8-.53.25-.1.62-.2 1.3-.24.74-.03.96-.04 2.83-.04zM7 0C5.1 0 4.86 0 4.11.04c-.74.04-1.25.15-1.7.33-.46.18-.85.42-1.24.8-.38.4-.62.78-.8 1.24-.18.45-.3.96-.33 1.7C.01 4.86 0 5.1 0 7c0 1.9 0 2.14.04 2.89.04.74.15 1.25.33 1.7.18.46.42.85.8 1.24.4.38.78.62 1.24.8.45.18.96.3 1.7.33.75.03.99.04 2.89.04 1.9 0 2.14 0 2.89-.04a5.14 5.14 0 001.7-.33c.46-.18.85-.42 1.24-.8.38-.4.62-.78.8-1.24.18-.45.3-.96.33-1.7.03-.75.04-.99.04-2.89 0-1.9 0-2.14-.04-2.89a5.14 5.14 0 00-.33-1.7 3.43 3.43 0 00-.8-1.24 3.43 3.43 0 00-1.24-.8c-.45-.18-.96-.3-1.7-.33C9.14.01 8.9 0 7 0z" fill="#e95950" /></svg></div>
                                        </a>
                                        <a href="#" class="social-profile-list-item inline w-inline-block w-condition-invisible">
                                            <div class="social-profile-list-icon inline twitch w-embed"><svg width="1em" height="1em" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.7.46L.88 2.9v9h3.27v1.63h1.63l1.63-1.63h2.44l3.27-3.49V.46H1.7zm10.6 7.36l-2.28 2.45h-2.9l-1.75 1.28v-1.28H2.5v-9h9.8v6.55z" fill="#7743D4" /><path d="M7.4 3.73h-.8V7h.8V3.73zM9.85 3.73h-.81V7h.81V3.73z" fill="#7743D4" /></svg></div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="flex-column-centered">
        <a href="https://superpeer.com/tristanpollock/collection/movement-building-mission-driven-growth-hacking" class="post-entries-title-link silent-hover w-inline-block">
            <h3>Movement Building</h3>
        </a><a href="https://superpeer.com/tristanpollock" class="post-entries-host-name silent-hover">Tristan Pollock</a>
        <p>Calling all startup founders, entrepreneurs, execs, and business leaders. Learn to build communities, make a pitch deck and create a movement around a company mission. Global impact-driven movements have all started somewhere, and today it&#x27;s
            here</p>
        <div class="flex centered move-up-on-scroll">
            <div class="meta vertical-on-mobile mr-5">
                <div class="meta-label mr-2">Starts</div>
                <div class="meta-value">August 26, 2021</div>
            </div><a href="https://superpeer.com/tristanpollock/collection/movement-building-mission-driven-growth-hacking" class="button button-large button-secondary uppercase">ENROLL</a></div>
        <div data-tooltip=".notify-form" data-delay="[0, 300]" class="flex centered move-up-on-scroll relative w-condition-invisible"
            data-trigger-target-selector=".button" data-arrow="false" data-theme="light large" data-trigger="click" data-max-width="464" data-interactive="true">
            <div class="meta vertical-on-mobile mr-5">
                <div class="meta-label mr-2">Starts</div>
                <div class="meta-value nowrap-text">August 26, 2021</div>
            </div><a href="#" class="button button-large button-secondary uppercase ml-3 nowrap-text">Notify Me</a>
            <div class="hidden">
                <div class="notify-form">
                    <div class="notify-form-header">
                        <div class="notify-form-title">Get notified when the series registrations open</div>
                        <a data-dismiss="tooltip" href="#" class="notify-form-close w-inline-block">
                            <div class="notify-form-close-icon w-embed"><svg width="1em" height="1em" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M17.89 16l5.72-5.72a1.33 1.33 0 10-1.89-1.89L16 14.11 10.28 8.4a1.33 1.33 0 10-1.89 1.89L14.11 16 8.4 21.72a1.33 1.33 0 101.89 1.89L16 17.89l5.72 5.72a1.33 1.33 0 001.89 0c.52-.52.52-1.36 0-1.89L17.89 16z" fill="currentcolor" /></svg></div>
                        </a>
                    </div>
                    <div class="notify-form-body">
                        <div class="notify-form-form w-form">
                            <form id="wf-form-Notify-Me-Form" name="wf-form-Notify-Me-Form" data-name="Notify Me Form">
                                <div class="field-group"><label for="Email-3" class="field-label">Your email</label><input type="email" class="text-field w-input" maxlength="256" name="Email" data-name="Email" placeholder="" id="Email" required="" /></div>
                                <div class="button-block"><input type="submit" value="Notify Me" data-wait="Please wait..." class="button button-primary button-large uppercase button-block w-button" /></div>
                                <div class="hidden">
                                    <div data-convert-to-hidden="SerieID">1</div>
                                    <div data-convert-to-hidden="SerieName">Movement Building</div>
                                    <div data-convert-to-hidden="SerieLink">https://superpeer.com/tristanpollock/collection/movement-building-mission-driven-growth-hacking</div>
                                    <div data-convert-to-hidden="HostName">Tristan Pollock</div>
                                    <div data-convert-to-hidden="HostLink">https://superpeer.com/tristanpollock</div>
                                </div>
                            </form>
                            <div class="success-message-v2 w-form-done">
                                <div class="success-message-v2-body">
                                    <div class="success-message-v2-icon w-embed"><svg width="1em" height="1em" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M29.67 15.71c0-.76-.6-1.37-1.34-1.37-.74 0-1.33.62-1.33 1.38 0 2.94-1.1 5.7-3.1 7.79-2.01 2.08-4.69 3.23-7.54 3.24h-.03c-2.84 0-5.5-1.14-7.52-3.2a11.1 11.1 0 01-3.14-7.77c-.01-2.94 1.09-5.7 3.1-7.79a10.44 10.44 0 0110.07-2.93c.72.17 1.44-.28 1.61-1.02a1.38 1.38 0 00-.98-1.66 13.05 13.05 0 00-12.6 3.67A13.88 13.88 0 003 15.8c.01 3.67 1.4 7.12 3.93 9.71 2.52 2.58 5.86 4 9.4 4h.04c3.56-.01 6.9-1.45 9.42-4.05a13.88 13.88 0 003.88-9.74zm-16.4-.93a1.3 1.3 0 00-1.88 0 1.4 1.4 0 000 1.94l4 4.13c.25.26.59.4.94.4h.05c.37-.01.71-.18.96-.47l9.33-11a1.4 1.4 0 00-.12-1.94 1.3 1.3 0 00-1.89.13l-8.4 9.9-2.98-3.1z" fill="currentcolor" /></svg></div>
                                    <div
                                        class="success-message-v2-text">Success</div>
                            </div>
                        </div>
                        <div class="error-message-v2 w-form-fail">
                            <div class="error-message-v2-body">
                                <div class="error-message-v2-icon w-embed"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M8 4.67A.67.67 0 108 6a.67.67 0 000-1.33zm0 2c-.37 0-.67.3-.67.66v3.34a.67.67 0 001.34 0V7.33c0-.36-.3-.66-.67-.66zM2.67 8a5.34 5.34 0 1010.68-.01A5.34 5.34 0 002.67 8zM1.33 8a6.67 6.67 0 1113.34 0A6.67 6.67 0 011.33 8z" fill="currentcolor" /></svg></div>
                                <div
                                    class="error-message-v2-text">Something went wrong. Please try again.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div role="listitem" class="post-entries-item-wrapper w-dyn-item">
        <div class="post-entries-item flex-column-centered move-up-on-scroll">
            <div class="featured-frame mb-6">
                <div class="featured-frame-body small"><a href="https://superpeer.com/slidebean/collection/live-how-to-rock-your-startup-pitch-deck-examples-and-how-tos" class="featured-frame-link w-inline-block"><img alt="" loading="lazy" width="402" height="224" src="https://assets.website-files.com/60f070302df82b4bb19e42f6/60f15567da65b8d5a7554e0c_60f05dbf1d8b77c1a67783b9_series-v3-07.jpeg" sizes="(max-width: 479px) 85vw, (max-width: 767px) 402px, (max-width: 991px) 44vw, 402px" srcset="https://assets.website-files.com/60f070302df82b4bb19e42f6/60f15567da65b8d5a7554e0c_60f05dbf1d8b77c1a67783b9_series-v3-07-p-800.jpeg 800w, https://assets.website-files.com/60f070302df82b4bb19e42f6/60f15567da65b8d5a7554e0c_60f05dbf1d8b77c1a67783b9_series-v3-07.jpeg 804w" class="featured-frame-image" /></a>
                    <div
                        class="coming-soon uppercase w-condition-invisible">Coming Soon</div>
            </div>
            <div class="featured-frame-frame small"></div>
            <div class="featured-frame-badge">
                <div data-tooltip=".tooltip-content" data-theme="light" data-interactive="true" data-delay="[0,300]" class="avatar-v2 _72px"><img height="72" loading="lazy" width="72" src="https://assets.website-files.com/60f070302df82b4bb19e42f6/60f148b72974241b9597c109_60f05dbf1d8b77541b778399_avatar-jose-cayasso.jpeg" alt="Jose Caya" sizes="70px" srcset="https://assets.website-files.com/60f070302df82b4bb19e42f6/60f148b72974241b9597c109_60f05dbf1d8b77541b778399_avatar-jose-cayasso-p-800.jpeg 800w, https://assets.website-files.com/60f070302df82b4bb19e42f6/60f148b72974241b9597c109_60f05dbf1d8b77541b778399_avatar-jose-cayasso.jpeg 800w"
                        class="avatar-v2-image" />
                    <div class="hidden">
                        <div class="tooltip-content">
                            <div class="profile-card">
                                <div class="profile-card-header"><a href="https://superpeer.com/caya" target="_blank" class="avatar-v2 _56px w-inline-block"><img height="64" loading="lazy" width="64" src="https://assets.website-files.com/60f070302df82b4bb19e42f6/60f148b72974241b9597c109_60f05dbf1d8b77541b778399_avatar-jose-cayasso.jpeg" alt="Jose Caya" sizes="100vw" srcset="https://assets.website-files.com/60f070302df82b4bb19e42f6/60f148b72974241b9597c109_60f05dbf1d8b77541b778399_avatar-jose-cayasso-p-800.jpeg 800w, https://assets.website-files.com/60f070302df82b4bb19e42f6/60f148b72974241b9597c109_60f05dbf1d8b77541b778399_avatar-jose-cayasso.jpeg 800w" class="avatar-v2-image" /><div class="avatar-badge small w-embed"><svg width="1em" height="1em" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M15.48 14.9c-.63-.13-1.23-.28-1.74-.38l-.84-.18.1-.87.01-.12c0-.2-.03-.36-.1-.54l-.2-.46.27-.43c.16-.26.23-.54.23-.87 0-.35-.1-.65-.29-.9l-.33-.45.22-.52c.09-.2.13-.42.13-.63 0-.3 0-1.21-1.42-1.76a4.8 4.8 0 00-1.35-.23l-1.54-.1.73-1.33c.59-1.07.92-2.03.92-2.7 0-.62-.2-1.17-.66-1.35-1.6-.7-2.73.38-3.53 1.7a48.01 48.01 0 00-1.94 3.48c-1.05 2.22-2.6 3.81-2.6 6.02 0 2.01 1.35 3.6 3.82 4.43C8.4 17.73 12.92 18 14.89 18c1.41 0 2.19-.55 2.19-1.55 0-1.05-1-1.42-1.6-1.55z" fill="#FFD338" />
<path d="M14.85 14l-3.05-.65c.25-.18.5-.54.5-.98 0-.52-.27-.82-.48-.98.29-.21.67-.6.67-1.3 0-.77-.51-1.16-.79-1.34.22-.2.52-.6.52-1.17 0-.99-.76-1.43-1.38-1.68a7.87 7.87 0 00-2.28-.25c-1.37 0-2.6.1-3.2.1-.7 0-.61-.36-.35-.7.16-.18 2.15-2.81 2.53-3.28.26-.35.56-.68.79-.55.24.13.14.73-.12 1.4-.39 1.03-.93 1.69-1.06 1.92l.92.56c.36-.45 1.52-2.39 1.52-3.64C9.6.9 9.38.43 8.96.17a1.37 1.37 0 00-1.42.06c-.32.19-.64.46-.9.8L3.82 4.6c-.8 1.05-.43 2.34 1.28 2.34.6 0 2.57-.15 3.33-.15.88 0 1.3.05 1.61.1.58.08.9.34.9.68 0 .24-.1.42-.31.56-.2.14-.39.36-.39.66 0 .36.33.5.55.65.29.18.46.31.46.62 0 .27-.2.43-.43.6-.19.14-.43.3-.43.63 0 .3.21.45.35.56.15.12.3.25.3.49s-.1.36-.4.53c-.23.13-.56.37-.56.72 0 .39.28.56.6.65l3.96.87c.26.06.52.15.52.36 0 .22-.35.32-.84.32-1.7 0-6.4-.35-9.18-1.31-1.88-.63-2.91-1.8-2.91-3.19 0-1.2.8-2.28 1.68-2.9l-.8-.8A4.69 4.69 0 001 11.31c0 1.7 1 3.42 3.78 4.35 2.94 1 7.41 1.3 9.5 1.3 1.42 0 2.1-.6 2.1-1.48 0-.85-.7-1.31-1.53-1.48z" fill="#222" />
</svg></div></a>
                                    <div class="profile-card-subscribe"><a href="https://superpeer.com/caya" class="button button-bordered blue button-small w-button">Subscribe</a></div>
                                </div>
                                <div class="profile-card-body">
                                    <div class="profile-card-info"><a href="https://superpeer.com/caya" target="_blank" class="profile-card-title">Jose Caya</a>
                                        <div class="profile-card-location">
                                            <div class="profile-card-location-icon w-embed"><svg width="1em" height="1em" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10.5 5c0 3.5-4.5 6.5-4.5 6.5S1.5 8.5 1.5 5a4.5 4.5 0 019 0z" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" /><path d="M6 6.5a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" /></svg></div>
                                            <div
                                                class="profile-card-location-text">United States</div>
                                    </div>
                                    <div class="profile-card-bio">CEO at Slidebean. Growth Hacker. Host of Startups 101 and Company Forensics. Frequent flyer miles hoarder.</div>
                                </div>
                                <div class="profile-card-social-profiles">
                                    <div class="social-profile-list">
                                        <a href="https://twitter.com/cayahere" target="_blank" class="social-profile-list-item w-inline-block">
                                            <div class="social-profile-list-icon twitter w-embed"><svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13.97 2.67c-.52.23-1.08.38-1.65.45a2.9 2.9 0 001.27-1.6c-.56.33-1.17.57-1.83.7a2.87 2.87 0 00-4.89 2.61A8.13 8.13 0 01.96 1.84a2.87 2.87 0 00.89 3.83c-.46 0-.9-.13-1.3-.35v.03a2.87 2.87 0 002.3 2.82c-.42.11-.87.13-1.3.05a2.88 2.88 0 002.7 2A5.76 5.76 0 010 11.4a8.16 8.16 0 004.4 1.29c5.29 0 8.17-4.37 8.17-8.16v-.37A5.8 5.8 0 0014 2.68l-.03-.01z" fill="#1DA1F2" /></svg></div>
                                            <div
                                                class="social-profile-list-title">cayahere</div>
                                    </a>
                                    <div class="social-profile-list-inline-items">
                                        <a href="#" class="social-profile-list-item inline w-inline-block w-condition-invisible">
                                            <div class="social-profile-list-icon inline youtube w-embed"><svg width="1em" height="1em" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M11.91 2.84c.55.15.97.58 1.12 1.12.26.99.26 3.05.26 3.05s0 2.06-.26 3.05c-.15.54-.57.95-1.12 1.1-.98.26-4.91.26-4.91.26s-3.93 0-4.91-.26a1.56 1.56 0 01-1.12-1.1C.71 9.06.71 7 .71 7s0-2.06.26-3.05c.15-.54.57-.97 1.12-1.12C3.07 2.58 7 2.58 7 2.58s3.93 0 4.91.26zm-6.2 2.3v3.74L9.01 7 5.7 5.14z" fill="red" /></svg></div>
                                        </a>
                                        <a href="#" class="social-profile-list-item inline w-inline-block w-condition-invisible">
                                            <div class="social-profile-list-icon inline instagram w-embed"><svg width="1em" height="1em" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M11.58 3.26a.84.84 0 11-1.68 0 .84.84 0 011.68 0zM7 9.33a2.33 2.33 0 110-4.66 2.33 2.33 0 010 4.66zm0-5.92a3.6 3.6 0 100 7.18 3.6 3.6 0 000-7.18zm0-2.15c1.87 0 2.09 0 2.83.04.68.03 1.05.15 1.3.24.33.13.56.28.8.53.25.24.4.47.53.8.1.25.2.62.24 1.3.03.74.04.96.04 2.83s0 2.1-.04 2.83a3.87 3.87 0 01-.24 1.3c-.13.33-.28.56-.53.8-.24.25-.47.4-.8.53-.25.1-.62.2-1.3.24-.74.03-.96.04-2.83.04s-2.1 0-2.83-.04a3.87 3.87 0 01-1.3-.24 2.17 2.17 0 01-.8-.53c-.25-.24-.4-.47-.53-.8-.1-.25-.2-.62-.24-1.3-.03-.74-.04-.96-.04-2.83s0-2.09.04-2.83c.03-.68.15-1.05.24-1.3.13-.32.28-.56.53-.8.24-.25.47-.4.8-.53.25-.1.62-.2 1.3-.24.74-.03.96-.04 2.83-.04zM7 0C5.1 0 4.86 0 4.11.04c-.74.04-1.25.15-1.7.33-.46.18-.85.42-1.24.8-.38.4-.62.78-.8 1.24-.18.45-.3.96-.33 1.7C.01 4.86 0 5.1 0 7c0 1.9 0 2.14.04 2.89.04.74.15 1.25.33 1.7.18.46.42.85.8 1.24.4.38.78.62 1.24.8.45.18.96.3 1.7.33.75.03.99.04 2.89.04 1.9 0 2.14 0 2.89-.04a5.14 5.14 0 001.7-.33c.46-.18.85-.42 1.24-.8.38-.4.62-.78.8-1.24.18-.45.3-.96.33-1.7.03-.75.04-.99.04-2.89 0-1.9 0-2.14-.04-2.89a5.14 5.14 0 00-.33-1.7 3.43 3.43 0 00-.8-1.24 3.43 3.43 0 00-1.24-.8c-.45-.18-.96-.3-1.7-.33C9.14.01 8.9 0 7 0z" fill="#e95950" /></svg></div>
                                        </a>
                                        <a href="#" class="social-profile-list-item inline w-inline-block w-condition-invisible">
                                            <div class="social-profile-list-icon inline twitch w-embed"><svg width="1em" height="1em" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.7.46L.88 2.9v9h3.27v1.63h1.63l1.63-1.63h2.44l3.27-3.49V.46H1.7zm10.6 7.36l-2.28 2.45h-2.9l-1.75 1.28v-1.28H2.5v-9h9.8v6.55z" fill="#7743D4" /><path d="M7.4 3.73h-.8V7h.8V3.73zM9.85 3.73h-.81V7h.81V3.73z" fill="#7743D4" /></svg></div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="flex-column-centered">
        <a href="https://superpeer.com/slidebean/collection/live-how-to-rock-your-startup-pitch-deck-examples-and-how-tos" class="post-entries-title-link silent-hover w-inline-block">
            <h3>Pitch Deck Examples &amp; How to Class</h3>
        </a><a href="https://superpeer.com/caya" class="post-entries-host-name silent-hover">Jose Caya</a>
        <p>We’ve looked at thousands of investor pitch decks, so we know what a good one looks like. Learn how to tell your company story in a way that excites investors. See what the pros in the game did – AirBnb and Uber – and get set up to pitch a homerun.</p>
        <div
            class="flex centered move-up-on-scroll">
            <div class="meta vertical-on-mobile mr-5">
                <div class="meta-label mr-2">Starts</div>
                <div class="meta-value">August 24, 2021</div>
            </div><a href="https://superpeer.com/slidebean/collection/live-how-to-rock-your-startup-pitch-deck-examples-and-how-tos" class="button button-large button-secondary uppercase">ENROLL</a></div>
    <div data-tooltip=".notify-form" data-delay="[0, 300]"
        class="flex centered move-up-on-scroll relative w-condition-invisible" data-trigger-target-selector=".button" data-arrow="false" data-theme="light large" data-trigger="click" data-max-width="464" data-interactive="true">
        <div class="meta vertical-on-mobile mr-5">
            <div class="meta-label mr-2">Starts</div>
            <div class="meta-value nowrap-text">August 24, 2021</div>
        </div><a href="#" class="button button-large button-secondary uppercase ml-3 nowrap-text">Notify Me</a>
        <div class="hidden">
            <div class="notify-form">
                <div class="notify-form-header">
                    <div class="notify-form-title">Get notified when the series registrations open</div>
                    <a data-dismiss="tooltip" href="#" class="notify-form-close w-inline-block">
                        <div class="notify-form-close-icon w-embed"><svg width="1em" height="1em" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M17.89 16l5.72-5.72a1.33 1.33 0 10-1.89-1.89L16 14.11 10.28 8.4a1.33 1.33 0 10-1.89 1.89L14.11 16 8.4 21.72a1.33 1.33 0 101.89 1.89L16 17.89l5.72 5.72a1.33 1.33 0 001.89 0c.52-.52.52-1.36 0-1.89L17.89 16z" fill="currentcolor" /></svg></div>
                    </a>
                </div>
                <div class="notify-form-body">
                    <div class="notify-form-form w-form">
                        <form id="wf-form-Notify-Me-Form" name="wf-form-Notify-Me-Form" data-name="Notify Me Form">
                            <div class="field-group"><label for="Email-3" class="field-label">Your email</label><input type="email" class="text-field w-input" maxlength="256" name="Email" data-name="Email" placeholder="" id="Email" required="" /></div>
                            <div class="button-block"><input type="submit" value="Notify Me" data-wait="Please wait..." class="button button-primary button-large uppercase button-block w-button" /></div>
                            <div class="hidden">
                                <div data-convert-to-hidden="SerieID">7</div>
                                <div data-convert-to-hidden="SerieName">Pitch Deck Examples &amp; How to Class</div>
                                <div data-convert-to-hidden="SerieLink">https://superpeer.com/slidebean/collection/live-how-to-rock-your-startup-pitch-deck-examples-and-how-tos</div>
                                <div data-convert-to-hidden="HostName">Jose Caya</div>
                                <div data-convert-to-hidden="HostLink">https://superpeer.com/caya</div>
                            </div>
                        </form>
                        <div class="success-message-v2 w-form-done">
                            <div class="success-message-v2-body">
                                <div class="success-message-v2-icon w-embed"><svg width="1em" height="1em" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M29.67 15.71c0-.76-.6-1.37-1.34-1.37-.74 0-1.33.62-1.33 1.38 0 2.94-1.1 5.7-3.1 7.79-2.01 2.08-4.69 3.23-7.54 3.24h-.03c-2.84 0-5.5-1.14-7.52-3.2a11.1 11.1 0 01-3.14-7.77c-.01-2.94 1.09-5.7 3.1-7.79a10.44 10.44 0 0110.07-2.93c.72.17 1.44-.28 1.61-1.02a1.38 1.38 0 00-.98-1.66 13.05 13.05 0 00-12.6 3.67A13.88 13.88 0 003 15.8c.01 3.67 1.4 7.12 3.93 9.71 2.52 2.58 5.86 4 9.4 4h.04c3.56-.01 6.9-1.45 9.42-4.05a13.88 13.88 0 003.88-9.74zm-16.4-.93a1.3 1.3 0 00-1.88 0 1.4 1.4 0 000 1.94l4 4.13c.25.26.59.4.94.4h.05c.37-.01.71-.18.96-.47l9.33-11a1.4 1.4 0 00-.12-1.94 1.3 1.3 0 00-1.89.13l-8.4 9.9-2.98-3.1z" fill="currentcolor" /></svg></div>
                                <div
                                    class="success-message-v2-text">Success</div>
                        </div>
                    </div>
                    <div class="error-message-v2 w-form-fail">
                        <div class="error-message-v2-body">
                            <div class="error-message-v2-icon w-embed"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M8 4.67A.67.67 0 108 6a.67.67 0 000-1.33zm0 2c-.37 0-.67.3-.67.66v3.34a.67.67 0 001.34 0V7.33c0-.36-.3-.66-.67-.66zM2.67 8a5.34 5.34 0 1010.68-.01A5.34 5.34 0 002.67 8zM1.33 8a6.67 6.67 0 1113.34 0A6.67 6.67 0 011.33 8z" fill="currentcolor" /></svg></div>
                            <div
                                class="error-message-v2-text">Something went wrong. Please try again.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div role="listitem" class="post-entries-item-wrapper w-dyn-item">
        <div class="post-entries-item flex-column-centered move-up-on-scroll">
            <div class="featured-frame mb-6">
                <div class="featured-frame-body small"><a href="https://superpeer.com/jasminelawrence/collection/entrePM" class="featured-frame-link w-inline-block"><img alt="" loading="lazy" width="402" height="224" src="https://assets.website-files.com/60f070302df82b4bb19e42f6/60f15567be2d718994db09f1_60f05dbf1d8b7795bf7783bc_series-v3-05.jpeg" class="featured-frame-image" /></a>
                    <div
                        class="coming-soon uppercase w-condition-invisible">Coming Soon</div>
            </div>
            <div class="featured-frame-frame small"></div>
            <div class="featured-frame-badge">
                <div data-tooltip=".tooltip-content" data-theme="light" data-interactive="true" data-delay="[0,300]" class="avatar-v2 _72px"><img height="72" loading="lazy" width="72" src="https://assets.website-files.com/60f070302df82b4bb19e42f6/60f148b71c88a8be38a109ff_60f05dbf1d8b7709bc778391_avatar-jasmine-lawrence.jpeg" alt="Jasmine Lawrence" sizes="70px" srcset="https://assets.website-files.com/60f070302df82b4bb19e42f6/60f148b71c88a8be38a109ff_60f05dbf1d8b7709bc778391_avatar-jasmine-lawrence-p-800.jpeg 800w, https://assets.website-files.com/60f070302df82b4bb19e42f6/60f148b71c88a8be38a109ff_60f05dbf1d8b7709bc778391_avatar-jasmine-lawrence.jpeg 800w"
                        class="avatar-v2-image" />
                    <div class="hidden">
                        <div class="tooltip-content">
                            <div class="profile-card">
                                <div class="profile-card-header"><a href="https://superpeer.com/jasminelawrence" target="_blank" class="avatar-v2 _56px w-inline-block"><img height="64" loading="lazy" width="64" src="https://assets.website-files.com/60f070302df82b4bb19e42f6/60f148b71c88a8be38a109ff_60f05dbf1d8b7709bc778391_avatar-jasmine-lawrence.jpeg" alt="Jasmine Lawrence" sizes="100vw" srcset="https://assets.website-files.com/60f070302df82b4bb19e42f6/60f148b71c88a8be38a109ff_60f05dbf1d8b7709bc778391_avatar-jasmine-lawrence-p-800.jpeg 800w, https://assets.website-files.com/60f070302df82b4bb19e42f6/60f148b71c88a8be38a109ff_60f05dbf1d8b7709bc778391_avatar-jasmine-lawrence.jpeg 800w" class="avatar-v2-image" /><div class="avatar-badge small w-embed"><svg width="1em" height="1em" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M15.48 14.9c-.63-.13-1.23-.28-1.74-.38l-.84-.18.1-.87.01-.12c0-.2-.03-.36-.1-.54l-.2-.46.27-.43c.16-.26.23-.54.23-.87 0-.35-.1-.65-.29-.9l-.33-.45.22-.52c.09-.2.13-.42.13-.63 0-.3 0-1.21-1.42-1.76a4.8 4.8 0 00-1.35-.23l-1.54-.1.73-1.33c.59-1.07.92-2.03.92-2.7 0-.62-.2-1.17-.66-1.35-1.6-.7-2.73.38-3.53 1.7a48.01 48.01 0 00-1.94 3.48c-1.05 2.22-2.6 3.81-2.6 6.02 0 2.01 1.35 3.6 3.82 4.43C8.4 17.73 12.92 18 14.89 18c1.41 0 2.19-.55 2.19-1.55 0-1.05-1-1.42-1.6-1.55z" fill="#FFD338" />
<path d="M14.85 14l-3.05-.65c.25-.18.5-.54.5-.98 0-.52-.27-.82-.48-.98.29-.21.67-.6.67-1.3 0-.77-.51-1.16-.79-1.34.22-.2.52-.6.52-1.17 0-.99-.76-1.43-1.38-1.68a7.87 7.87 0 00-2.28-.25c-1.37 0-2.6.1-3.2.1-.7 0-.61-.36-.35-.7.16-.18 2.15-2.81 2.53-3.28.26-.35.56-.68.79-.55.24.13.14.73-.12 1.4-.39 1.03-.93 1.69-1.06 1.92l.92.56c.36-.45 1.52-2.39 1.52-3.64C9.6.9 9.38.43 8.96.17a1.37 1.37 0 00-1.42.06c-.32.19-.64.46-.9.8L3.82 4.6c-.8 1.05-.43 2.34 1.28 2.34.6 0 2.57-.15 3.33-.15.88 0 1.3.05 1.61.1.58.08.9.34.9.68 0 .24-.1.42-.31.56-.2.14-.39.36-.39.66 0 .36.33.5.55.65.29.18.46.31.46.62 0 .27-.2.43-.43.6-.19.14-.43.3-.43.63 0 .3.21.45.35.56.15.12.3.25.3.49s-.1.36-.4.53c-.23.13-.56.37-.56.72 0 .39.28.56.6.65l3.96.87c.26.06.52.15.52.36 0 .22-.35.32-.84.32-1.7 0-6.4-.35-9.18-1.31-1.88-.63-2.91-1.8-2.91-3.19 0-1.2.8-2.28 1.68-2.9l-.8-.8A4.69 4.69 0 001 11.31c0 1.7 1 3.42 3.78 4.35 2.94 1 7.41 1.3 9.5 1.3 1.42 0 2.1-.6 2.1-1.48 0-.85-.7-1.31-1.53-1.48z" fill="#222" />
</svg></div></a>
                                    <div class="profile-card-subscribe"><a href="https://superpeer.com/jasminelawrence" class="button button-bordered blue button-small w-button">Subscribe</a></div>
                                </div>
                                <div class="profile-card-body">
                                    <div class="profile-card-info"><a href="https://superpeer.com/jasminelawrence" target="_blank" class="profile-card-title">Jasmine Lawrence</a>
                                        <div class="profile-card-location">
                                            <div class="profile-card-location-icon w-embed"><svg width="1em" height="1em" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10.5 5c0 3.5-4.5 6.5-4.5 6.5S1.5 8.5 1.5 5a4.5 4.5 0 019 0z" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" /><path d="M6 6.5a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" /></svg></div>
                                            <div
                                                class="profile-card-location-text">San Francisco</div>
                                    </div>
                                    <div class="profile-card-bio">Founder of EDEN BodyWorks &amp; Senior Product Manager</div>
                                </div>
                                <div class="profile-card-social-profiles">
                                    <div class="social-profile-list">
                                        <a href="#" class="social-profile-list-item w-inline-block w-condition-invisible">
                                            <div class="social-profile-list-icon twitter w-embed"><svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13.97 2.67c-.52.23-1.08.38-1.65.45a2.9 2.9 0 001.27-1.6c-.56.33-1.17.57-1.83.7a2.87 2.87 0 00-4.89 2.61A8.13 8.13 0 01.96 1.84a2.87 2.87 0 00.89 3.83c-.46 0-.9-.13-1.3-.35v.03a2.87 2.87 0 002.3 2.82c-.42.11-.87.13-1.3.05a2.88 2.88 0 002.7 2A5.76 5.76 0 010 11.4a8.16 8.16 0 004.4 1.29c5.29 0 8.17-4.37 8.17-8.16v-.37A5.8 5.8 0 0014 2.68l-.03-.01z" fill="#1DA1F2" /></svg></div>
                                            <div
                                                class="social-profile-list-title w-dyn-bind-empty"></div>
                                    </a>
                                    <div class="social-profile-list-inline-items">
                                        <a href="#" class="social-profile-list-item inline w-inline-block w-condition-invisible">
                                            <div class="social-profile-list-icon inline youtube w-embed"><svg width="1em" height="1em" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M11.91 2.84c.55.15.97.58 1.12 1.12.26.99.26 3.05.26 3.05s0 2.06-.26 3.05c-.15.54-.57.95-1.12 1.1-.98.26-4.91.26-4.91.26s-3.93 0-4.91-.26a1.56 1.56 0 01-1.12-1.1C.71 9.06.71 7 .71 7s0-2.06.26-3.05c.15-.54.57-.97 1.12-1.12C3.07 2.58 7 2.58 7 2.58s3.93 0 4.91.26zm-6.2 2.3v3.74L9.01 7 5.7 5.14z" fill="red" /></svg></div>
                                        </a>
                                        <a href="#" class="social-profile-list-item inline w-inline-block w-condition-invisible">
                                            <div class="social-profile-list-icon inline instagram w-embed"><svg width="1em" height="1em" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M11.58 3.26a.84.84 0 11-1.68 0 .84.84 0 011.68 0zM7 9.33a2.33 2.33 0 110-4.66 2.33 2.33 0 010 4.66zm0-5.92a3.6 3.6 0 100 7.18 3.6 3.6 0 000-7.18zm0-2.15c1.87 0 2.09 0 2.83.04.68.03 1.05.15 1.3.24.33.13.56.28.8.53.25.24.4.47.53.8.1.25.2.62.24 1.3.03.74.04.96.04 2.83s0 2.1-.04 2.83a3.87 3.87 0 01-.24 1.3c-.13.33-.28.56-.53.8-.24.25-.47.4-.8.53-.25.1-.62.2-1.3.24-.74.03-.96.04-2.83.04s-2.1 0-2.83-.04a3.87 3.87 0 01-1.3-.24 2.17 2.17 0 01-.8-.53c-.25-.24-.4-.47-.53-.8-.1-.25-.2-.62-.24-1.3-.03-.74-.04-.96-.04-2.83s0-2.09.04-2.83c.03-.68.15-1.05.24-1.3.13-.32.28-.56.53-.8.24-.25.47-.4.8-.53.25-.1.62-.2 1.3-.24.74-.03.96-.04 2.83-.04zM7 0C5.1 0 4.86 0 4.11.04c-.74.04-1.25.15-1.7.33-.46.18-.85.42-1.24.8-.38.4-.62.78-.8 1.24-.18.45-.3.96-.33 1.7C.01 4.86 0 5.1 0 7c0 1.9 0 2.14.04 2.89.04.74.15 1.25.33 1.7.18.46.42.85.8 1.24.4.38.78.62 1.24.8.45.18.96.3 1.7.33.75.03.99.04 2.89.04 1.9 0 2.14 0 2.89-.04a5.14 5.14 0 001.7-.33c.46-.18.85-.42 1.24-.8.38-.4.62-.78.8-1.24.18-.45.3-.96.33-1.7.03-.75.04-.99.04-2.89 0-1.9 0-2.14-.04-2.89a5.14 5.14 0 00-.33-1.7 3.43 3.43 0 00-.8-1.24 3.43 3.43 0 00-1.24-.8c-.45-.18-.96-.3-1.7-.33C9.14.01 8.9 0 7 0z" fill="#e95950" /></svg></div>
                                        </a>
                                        <a href="#" class="social-profile-list-item inline w-inline-block w-condition-invisible">
                                            <div class="social-profile-list-icon inline twitch w-embed"><svg width="1em" height="1em" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.7.46L.88 2.9v9h3.27v1.63h1.63l1.63-1.63h2.44l3.27-3.49V.46H1.7zm10.6 7.36l-2.28 2.45h-2.9l-1.75 1.28v-1.28H2.5v-9h9.8v6.55z" fill="#7743D4" /><path d="M7.4 3.73h-.8V7h.8V3.73zM9.85 3.73h-.81V7h.81V3.73z" fill="#7743D4" /></svg></div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="flex-column-centered">
        <a href="https://superpeer.com/jasminelawrence/collection/entrePM" class="post-entries-title-link silent-hover w-inline-block">
            <h3>You can’t Entrepreneur without PM</h3>
        </a><a href="https://superpeer.com/jasminelawrence" class="post-entries-host-name silent-hover">Jasmine Lawrence</a>
        <p>Get insight into the life and career lessons learned from being a CEO and product manager. Learn about entrepreneurship: doing the big pitch, falling in love with the problem, and when to side hustle. Strategize and execute your big idea.</p>
        <div
            class="flex centered move-up-on-scroll">
            <div class="meta vertical-on-mobile mr-5">
                <div class="meta-label mr-2">Starts</div>
                <div class="meta-value">August 25, 2021</div>
            </div><a href="https://superpeer.com/jasminelawrence/collection/entrePM" class="button button-large button-secondary uppercase">ENROLL</a></div>
    <div data-tooltip=".notify-form" data-delay="[0, 300]" class="flex centered move-up-on-scroll relative w-condition-invisible"
        data-trigger-target-selector=".button" data-arrow="false" data-theme="light large" data-trigger="click" data-max-width="464" data-interactive="true">
        <div class="meta vertical-on-mobile mr-5">
            <div class="meta-label mr-2">Starts</div>
            <div class="meta-value nowrap-text">August 25, 2021</div>
        </div><a href="#" class="button button-large button-secondary uppercase ml-3 nowrap-text">Notify Me</a>
        <div class="hidden">
            <div class="notify-form">
                <div class="notify-form-header">
                    <div class="notify-form-title">Get notified when the series registrations open</div>
                    <a data-dismiss="tooltip" href="#" class="notify-form-close w-inline-block">
                        <div class="notify-form-close-icon w-embed"><svg width="1em" height="1em" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M17.89 16l5.72-5.72a1.33 1.33 0 10-1.89-1.89L16 14.11 10.28 8.4a1.33 1.33 0 10-1.89 1.89L14.11 16 8.4 21.72a1.33 1.33 0 101.89 1.89L16 17.89l5.72 5.72a1.33 1.33 0 001.89 0c.52-.52.52-1.36 0-1.89L17.89 16z" fill="currentcolor" /></svg></div>
                    </a>
                </div>
                <div class="notify-form-body">
                    <div class="notify-form-form w-form">
                        <form id="wf-form-Notify-Me-Form" name="wf-form-Notify-Me-Form" data-name="Notify Me Form">
                            <div class="field-group"><label for="Email-3" class="field-label">Your email</label><input type="email" class="text-field w-input" maxlength="256" name="Email" data-name="Email" placeholder="" id="Email" required="" /></div>
                            <div class="button-block"><input type="submit" value="Notify Me" data-wait="Please wait..." class="button button-primary button-large uppercase button-block w-button" /></div>
                            <div class="hidden">
                                <div data-convert-to-hidden="SerieID">6</div>
                                <div data-convert-to-hidden="SerieName">You can’t Entrepreneur without PM</div>
                                <div data-convert-to-hidden="SerieLink">https://superpeer.com/jasminelawrence/collection/entrePM</div>
                                <div data-convert-to-hidden="HostName">Jasmine Lawrence</div>
                                <div data-convert-to-hidden="HostLink">https://superpeer.com/jasminelawrence</div>
                            </div>
                        </form>
                        <div class="success-message-v2 w-form-done">
                            <div class="success-message-v2-body">
                                <div class="success-message-v2-icon w-embed"><svg width="1em" height="1em" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M29.67 15.71c0-.76-.6-1.37-1.34-1.37-.74 0-1.33.62-1.33 1.38 0 2.94-1.1 5.7-3.1 7.79-2.01 2.08-4.69 3.23-7.54 3.24h-.03c-2.84 0-5.5-1.14-7.52-3.2a11.1 11.1 0 01-3.14-7.77c-.01-2.94 1.09-5.7 3.1-7.79a10.44 10.44 0 0110.07-2.93c.72.17 1.44-.28 1.61-1.02a1.38 1.38 0 00-.98-1.66 13.05 13.05 0 00-12.6 3.67A13.88 13.88 0 003 15.8c.01 3.67 1.4 7.12 3.93 9.71 2.52 2.58 5.86 4 9.4 4h.04c3.56-.01 6.9-1.45 9.42-4.05a13.88 13.88 0 003.88-9.74zm-16.4-.93a1.3 1.3 0 00-1.88 0 1.4 1.4 0 000 1.94l4 4.13c.25.26.59.4.94.4h.05c.37-.01.71-.18.96-.47l9.33-11a1.4 1.4 0 00-.12-1.94 1.3 1.3 0 00-1.89.13l-8.4 9.9-2.98-3.1z" fill="currentcolor" /></svg></div>
                                <div
                                    class="success-message-v2-text">Success</div>
                        </div>
                    </div>
                    <div class="error-message-v2 w-form-fail">
                        <div class="error-message-v2-body">
                            <div class="error-message-v2-icon w-embed"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M8 4.67A.67.67 0 108 6a.67.67 0 000-1.33zm0 2c-.37 0-.67.3-.67.66v3.34a.67.67 0 001.34 0V7.33c0-.36-.3-.66-.67-.66zM2.67 8a5.34 5.34 0 1010.68-.01A5.34 5.34 0 002.67 8zM1.33 8a6.67 6.67 0 1113.34 0A6.67 6.67 0 011.33 8z" fill="currentcolor" /></svg></div>
                            <div
                                class="error-message-v2-text">Something went wrong. Please try again.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div role="listitem" class="post-entries-item-wrapper w-dyn-item">
        <div class="post-entries-item flex-column-centered move-up-on-scroll">
            <div class="featured-frame mb-6">
                <div class="featured-frame-body small"><a href="#" class="featured-frame-link w-inline-block"><img alt="" loading="lazy" width="402" height="224" src="https://assets.website-files.com/60f070302df82b4bb19e42f6/60f15567da65b860e1554e0a_60f05dbf1d8b77571c7783b8_series-v3-02.jpeg" class="featured-frame-image" /></a>
                    <div
                        class="coming-soon uppercase">Coming Soon</div>
            </div>
            <div class="featured-frame-frame small"></div>
            <div class="featured-frame-badge">
                <div data-tooltip=".tooltip-content" data-theme="light" data-interactive="true" data-delay="[0,300]" class="avatar-v2 _72px"><img height="72" loading="lazy" width="72" src="https://assets.website-files.com/60f070302df82b4bb19e42f6/60f148b79f219cbf54f6ee61_60f05dbf1d8b772d5c778392_avatar-devrim-yasar.jpeg" alt="Devrim Yasar" sizes="70px" srcset="https://assets.website-files.com/60f070302df82b4bb19e42f6/60f148b79f219cbf54f6ee61_60f05dbf1d8b772d5c778392_avatar-devrim-yasar-p-800.jpeg 800w, https://assets.website-files.com/60f070302df82b4bb19e42f6/60f148b79f219cbf54f6ee61_60f05dbf1d8b772d5c778392_avatar-devrim-yasar.jpeg 800w"
                        class="avatar-v2-image" />
                    <div class="hidden">
                        <div class="tooltip-content">
                            <div class="profile-card">
                                <div class="profile-card-header"><a href="https://superpeer.com/devrim" target="_blank" class="avatar-v2 _56px w-inline-block"><img height="64" loading="lazy" width="64" src="https://assets.website-files.com/60f070302df82b4bb19e42f6/60f148b79f219cbf54f6ee61_60f05dbf1d8b772d5c778392_avatar-devrim-yasar.jpeg" alt="Devrim Yasar" sizes="100vw" srcset="https://assets.website-files.com/60f070302df82b4bb19e42f6/60f148b79f219cbf54f6ee61_60f05dbf1d8b772d5c778392_avatar-devrim-yasar-p-800.jpeg 800w, https://assets.website-files.com/60f070302df82b4bb19e42f6/60f148b79f219cbf54f6ee61_60f05dbf1d8b772d5c778392_avatar-devrim-yasar.jpeg 800w" class="avatar-v2-image" /><div class="avatar-badge small w-embed"><svg width="1em" height="1em" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M15.48 14.9c-.63-.13-1.23-.28-1.74-.38l-.84-.18.1-.87.01-.12c0-.2-.03-.36-.1-.54l-.2-.46.27-.43c.16-.26.23-.54.23-.87 0-.35-.1-.65-.29-.9l-.33-.45.22-.52c.09-.2.13-.42.13-.63 0-.3 0-1.21-1.42-1.76a4.8 4.8 0 00-1.35-.23l-1.54-.1.73-1.33c.59-1.07.92-2.03.92-2.7 0-.62-.2-1.17-.66-1.35-1.6-.7-2.73.38-3.53 1.7a48.01 48.01 0 00-1.94 3.48c-1.05 2.22-2.6 3.81-2.6 6.02 0 2.01 1.35 3.6 3.82 4.43C8.4 17.73 12.92 18 14.89 18c1.41 0 2.19-.55 2.19-1.55 0-1.05-1-1.42-1.6-1.55z" fill="#FFD338" />
<path d="M14.85 14l-3.05-.65c.25-.18.5-.54.5-.98 0-.52-.27-.82-.48-.98.29-.21.67-.6.67-1.3 0-.77-.51-1.16-.79-1.34.22-.2.52-.6.52-1.17 0-.99-.76-1.43-1.38-1.68a7.87 7.87 0 00-2.28-.25c-1.37 0-2.6.1-3.2.1-.7 0-.61-.36-.35-.7.16-.18 2.15-2.81 2.53-3.28.26-.35.56-.68.79-.55.24.13.14.73-.12 1.4-.39 1.03-.93 1.69-1.06 1.92l.92.56c.36-.45 1.52-2.39 1.52-3.64C9.6.9 9.38.43 8.96.17a1.37 1.37 0 00-1.42.06c-.32.19-.64.46-.9.8L3.82 4.6c-.8 1.05-.43 2.34 1.28 2.34.6 0 2.57-.15 3.33-.15.88 0 1.3.05 1.61.1.58.08.9.34.9.68 0 .24-.1.42-.31.56-.2.14-.39.36-.39.66 0 .36.33.5.55.65.29.18.46.31.46.62 0 .27-.2.43-.43.6-.19.14-.43.3-.43.63 0 .3.21.45.35.56.15.12.3.25.3.49s-.1.36-.4.53c-.23.13-.56.37-.56.72 0 .39.28.56.6.65l3.96.87c.26.06.52.15.52.36 0 .22-.35.32-.84.32-1.7 0-6.4-.35-9.18-1.31-1.88-.63-2.91-1.8-2.91-3.19 0-1.2.8-2.28 1.68-2.9l-.8-.8A4.69 4.69 0 001 11.31c0 1.7 1 3.42 3.78 4.35 2.94 1 7.41 1.3 9.5 1.3 1.42 0 2.1-.6 2.1-1.48 0-.85-.7-1.31-1.53-1.48z" fill="#222" />
</svg></div></a>
                                    <div class="profile-card-subscribe"><a href="https://superpeer.com/devrim" class="button button-bordered blue button-small w-button">Subscribe</a></div>
                                </div>
                                <div class="profile-card-body">
                                    <div class="profile-card-info"><a href="https://superpeer.com/devrim" target="_blank" class="profile-card-title">Devrim Yasar</a>
                                        <div class="profile-card-location">
                                            <div class="profile-card-location-icon w-embed"><svg width="1em" height="1em" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10.5 5c0 3.5-4.5 6.5-4.5 6.5S1.5 8.5 1.5 5a4.5 4.5 0 019 0z" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" /><path d="M6 6.5a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" /></svg></div>
                                            <div
                                                class="profile-card-location-text">United States</div>
                                    </div>
                                    <div class="profile-card-bio">CEO &amp; Co-founder @ Superpeer</div>
                                </div>
                                <div class="profile-card-social-profiles">
                                    <div class="social-profile-list">
                                        <a href="https://twitter.com/devrimyasar" target="_blank" class="social-profile-list-item w-inline-block">
                                            <div class="social-profile-list-icon twitter w-embed"><svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13.97 2.67c-.52.23-1.08.38-1.65.45a2.9 2.9 0 001.27-1.6c-.56.33-1.17.57-1.83.7a2.87 2.87 0 00-4.89 2.61A8.13 8.13 0 01.96 1.84a2.87 2.87 0 00.89 3.83c-.46 0-.9-.13-1.3-.35v.03a2.87 2.87 0 002.3 2.82c-.42.11-.87.13-1.3.05a2.88 2.88 0 002.7 2A5.76 5.76 0 010 11.4a8.16 8.16 0 004.4 1.29c5.29 0 8.17-4.37 8.17-8.16v-.37A5.8 5.8 0 0014 2.68l-.03-.01z" fill="#1DA1F2" /></svg></div>
                                            <div
                                                class="social-profile-list-title">devrimyasar</div>
                                    </a>
                                    <div class="social-profile-list-inline-items">
                                        <a href="#" class="social-profile-list-item inline w-inline-block w-condition-invisible">
                                            <div class="social-profile-list-icon inline youtube w-embed"><svg width="1em" height="1em" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M11.91 2.84c.55.15.97.58 1.12 1.12.26.99.26 3.05.26 3.05s0 2.06-.26 3.05c-.15.54-.57.95-1.12 1.1-.98.26-4.91.26-4.91.26s-3.93 0-4.91-.26a1.56 1.56 0 01-1.12-1.1C.71 9.06.71 7 .71 7s0-2.06.26-3.05c.15-.54.57-.97 1.12-1.12C3.07 2.58 7 2.58 7 2.58s3.93 0 4.91.26zm-6.2 2.3v3.74L9.01 7 5.7 5.14z" fill="red" /></svg></div>
                                        </a>
                                        <a href="#" class="social-profile-list-item inline w-inline-block w-condition-invisible">
                                            <div class="social-profile-list-icon inline instagram w-embed"><svg width="1em" height="1em" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M11.58 3.26a.84.84 0 11-1.68 0 .84.84 0 011.68 0zM7 9.33a2.33 2.33 0 110-4.66 2.33 2.33 0 010 4.66zm0-5.92a3.6 3.6 0 100 7.18 3.6 3.6 0 000-7.18zm0-2.15c1.87 0 2.09 0 2.83.04.68.03 1.05.15 1.3.24.33.13.56.28.8.53.25.24.4.47.53.8.1.25.2.62.24 1.3.03.74.04.96.04 2.83s0 2.1-.04 2.83a3.87 3.87 0 01-.24 1.3c-.13.33-.28.56-.53.8-.24.25-.47.4-.8.53-.25.1-.62.2-1.3.24-.74.03-.96.04-2.83.04s-2.1 0-2.83-.04a3.87 3.87 0 01-1.3-.24 2.17 2.17 0 01-.8-.53c-.25-.24-.4-.47-.53-.8-.1-.25-.2-.62-.24-1.3-.03-.74-.04-.96-.04-2.83s0-2.09.04-2.83c.03-.68.15-1.05.24-1.3.13-.32.28-.56.53-.8.24-.25.47-.4.8-.53.25-.1.62-.2 1.3-.24.74-.03.96-.04 2.83-.04zM7 0C5.1 0 4.86 0 4.11.04c-.74.04-1.25.15-1.7.33-.46.18-.85.42-1.24.8-.38.4-.62.78-.8 1.24-.18.45-.3.96-.33 1.7C.01 4.86 0 5.1 0 7c0 1.9 0 2.14.04 2.89.04.74.15 1.25.33 1.7.18.46.42.85.8 1.24.4.38.78.62 1.24.8.45.18.96.3 1.7.33.75.03.99.04 2.89.04 1.9 0 2.14 0 2.89-.04a5.14 5.14 0 001.7-.33c.46-.18.85-.42 1.24-.8.38-.4.62-.78.8-1.24.18-.45.3-.96.33-1.7.03-.75.04-.99.04-2.89 0-1.9 0-2.14-.04-2.89a5.14 5.14 0 00-.33-1.7 3.43 3.43 0 00-.8-1.24 3.43 3.43 0 00-1.24-.8c-.45-.18-.96-.3-1.7-.33C9.14.01 8.9 0 7 0z" fill="#e95950" /></svg></div>
                                        </a>
                                        <a href="#" class="social-profile-list-item inline w-inline-block w-condition-invisible">
                                            <div class="social-profile-list-icon inline twitch w-embed"><svg width="1em" height="1em" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.7.46L.88 2.9v9h3.27v1.63h1.63l1.63-1.63h2.44l3.27-3.49V.46H1.7zm10.6 7.36l-2.28 2.45h-2.9l-1.75 1.28v-1.28H2.5v-9h9.8v6.55z" fill="#7743D4" /><path d="M7.4 3.73h-.8V7h.8V3.73zM9.85 3.73h-.81V7h.81V3.73z" fill="#7743D4" /></svg></div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="flex-column-centered">
        <a href="#" class="post-entries-title-link silent-hover w-inline-block">
            <h3>Starting your Business</h3>
        </a><a href="https://superpeer.com/devrim" class="post-entries-host-name silent-hover">Devrim Yasar</a>
        <p>Got an idea for a start-up, want to raise money or start a business? These interactive lessons will let you take the stage and pitch your idea. Join me on Superpeer to learn about mentorship, investors, cofounders, fundraising and telling your
            story.</p>
        <div class="flex centered move-up-on-scroll w-condition-invisible">
            <div class="meta vertical-on-mobile mr-5">
                <div class="meta-label mr-2">Starts</div>
                <div class="meta-value">August 29, 2021</div>
            </div><a href="#" class="button button-large button-secondary uppercase">ENROLL</a></div>
        <div data-tooltip=".notify-form" data-delay="[0, 300]" class="flex centered move-up-on-scroll relative" data-trigger-target-selector=".button" data-arrow="false"
            data-theme="light large" data-trigger="click" data-max-width="464" data-interactive="true">
            <div class="meta vertical-on-mobile mr-5">
                <div class="meta-label mr-2">Starts</div>
                <div class="meta-value nowrap-text">August 29, 2021</div>
            </div><a href="#" class="button button-large button-secondary uppercase ml-3 nowrap-text">Notify Me</a>
            <div class="hidden">
                <div class="notify-form">
                    <div class="notify-form-header">
                        <div class="notify-form-title">Get notified when the series registrations open</div>
                        <a data-dismiss="tooltip" href="#" class="notify-form-close w-inline-block">
                            <div class="notify-form-close-icon w-embed"><svg width="1em" height="1em" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M17.89 16l5.72-5.72a1.33 1.33 0 10-1.89-1.89L16 14.11 10.28 8.4a1.33 1.33 0 10-1.89 1.89L14.11 16 8.4 21.72a1.33 1.33 0 101.89 1.89L16 17.89l5.72 5.72a1.33 1.33 0 001.89 0c.52-.52.52-1.36 0-1.89L17.89 16z" fill="currentcolor" /></svg></div>
                        </a>
                    </div>
                    <div class="notify-form-body">
                        <div class="notify-form-form w-form">
                            <form id="wf-form-Notify-Me-Form" name="wf-form-Notify-Me-Form" data-name="Notify Me Form">
                                <div class="field-group"><label for="Email-3" class="field-label">Your email</label><input type="email" class="text-field w-input" maxlength="256" name="Email" data-name="Email" placeholder="" id="Email" required="" /></div>
                                <div class="button-block"><input type="submit" value="Notify Me" data-wait="Please wait..." class="button button-primary button-large uppercase button-block w-button" /></div>
                                <div class="hidden">
                                    <div data-convert-to-hidden="SerieID">8</div>
                                    <div data-convert-to-hidden="SerieName">Starting your Business</div>
                                    <div data-convert-to-hidden="SerieLink" class="w-dyn-bind-empty"></div>
                                    <div data-convert-to-hidden="HostName">Devrim Yasar</div>
                                    <div data-convert-to-hidden="HostLink">https://superpeer.com/devrim</div>
                                </div>
                            </form>
                            <div class="success-message-v2 w-form-done">
                                <div class="success-message-v2-body">
                                    <div class="success-message-v2-icon w-embed"><svg width="1em" height="1em" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M29.67 15.71c0-.76-.6-1.37-1.34-1.37-.74 0-1.33.62-1.33 1.38 0 2.94-1.1 5.7-3.1 7.79-2.01 2.08-4.69 3.23-7.54 3.24h-.03c-2.84 0-5.5-1.14-7.52-3.2a11.1 11.1 0 01-3.14-7.77c-.01-2.94 1.09-5.7 3.1-7.79a10.44 10.44 0 0110.07-2.93c.72.17 1.44-.28 1.61-1.02a1.38 1.38 0 00-.98-1.66 13.05 13.05 0 00-12.6 3.67A13.88 13.88 0 003 15.8c.01 3.67 1.4 7.12 3.93 9.71 2.52 2.58 5.86 4 9.4 4h.04c3.56-.01 6.9-1.45 9.42-4.05a13.88 13.88 0 003.88-9.74zm-16.4-.93a1.3 1.3 0 00-1.88 0 1.4 1.4 0 000 1.94l4 4.13c.25.26.59.4.94.4h.05c.37-.01.71-.18.96-.47l9.33-11a1.4 1.4 0 00-.12-1.94 1.3 1.3 0 00-1.89.13l-8.4 9.9-2.98-3.1z" fill="currentcolor" /></svg></div>
                                    <div
                                        class="success-message-v2-text">Success</div>
                            </div>
                        </div>
                        <div class="error-message-v2 w-form-fail">
                            <div class="error-message-v2-body">
                                <div class="error-message-v2-icon w-embed"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M8 4.67A.67.67 0 108 6a.67.67 0 000-1.33zm0 2c-.37 0-.67.3-.67.66v3.34a.67.67 0 001.34 0V7.33c0-.36-.3-.66-.67-.66zM2.67 8a5.34 5.34 0 1010.68-.01A5.34 5.34 0 002.67 8zM1.33 8a6.67 6.67 0 1113.34 0A6.67 6.67 0 011.33 8z" fill="currentcolor" /></svg></div>
                                <div
                                    class="error-message-v2-text">Something went wrong. Please try again.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div role="listitem" class="post-entries-item-wrapper w-dyn-item">
        <div class="post-entries-item flex-column-centered move-up-on-scroll">
            <div class="featured-frame mb-6">
                <div class="featured-frame-body small"><a href="https://superpeer.com/armaganamcalar/collection/public-speaking-series-give-a-talk-this-year" class="featured-frame-link w-inline-block"><img alt="" loading="lazy" width="402" height="224" src="https://assets.website-files.com/60f070302df82b4bb19e42f6/60f15567da65b8d621554e0b_60f05dbf1d8b775dc37783c1_series-v3-10.jpeg" class="featured-frame-image" /></a>
                    <div
                        class="coming-soon uppercase w-condition-invisible">Coming Soon</div>
            </div>
            <div class="featured-frame-frame small"></div>
            <div class="featured-frame-badge">
                <div data-tooltip=".tooltip-content" data-theme="light" data-interactive="true" data-delay="[0,300]" class="avatar-v2 _72px"><img height="72" loading="lazy" width="72" src="https://assets.website-files.com/60f070302df82b4bb19e42f6/60f148b86af51c1f15ff5f0d_60f05dbf1d8b7755e5778395_avatar-armagan-amcalar.jpeg" alt="Armagan Amcalar" class="avatar-v2-image" />
                    <div
                        class="hidden">
                        <div class="tooltip-content">
                            <div class="profile-card">
                                <div class="profile-card-header"><a href="https://superpeer.com/armaganamcalar" target="_blank" class="avatar-v2 _56px w-inline-block"><img height="64" loading="lazy" width="64" src="https://assets.website-files.com/60f070302df82b4bb19e42f6/60f148b86af51c1f15ff5f0d_60f05dbf1d8b7755e5778395_avatar-armagan-amcalar.jpeg" alt="Armagan Amcalar" class="avatar-v2-image" /><div class="avatar-badge small w-embed"><svg width="1em" height="1em" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M15.48 14.9c-.63-.13-1.23-.28-1.74-.38l-.84-.18.1-.87.01-.12c0-.2-.03-.36-.1-.54l-.2-.46.27-.43c.16-.26.23-.54.23-.87 0-.35-.1-.65-.29-.9l-.33-.45.22-.52c.09-.2.13-.42.13-.63 0-.3 0-1.21-1.42-1.76a4.8 4.8 0 00-1.35-.23l-1.54-.1.73-1.33c.59-1.07.92-2.03.92-2.7 0-.62-.2-1.17-.66-1.35-1.6-.7-2.73.38-3.53 1.7a48.01 48.01 0 00-1.94 3.48c-1.05 2.22-2.6 3.81-2.6 6.02 0 2.01 1.35 3.6 3.82 4.43C8.4 17.73 12.92 18 14.89 18c1.41 0 2.19-.55 2.19-1.55 0-1.05-1-1.42-1.6-1.55z" fill="#FFD338" />
<path d="M14.85 14l-3.05-.65c.25-.18.5-.54.5-.98 0-.52-.27-.82-.48-.98.29-.21.67-.6.67-1.3 0-.77-.51-1.16-.79-1.34.22-.2.52-.6.52-1.17 0-.99-.76-1.43-1.38-1.68a7.87 7.87 0 00-2.28-.25c-1.37 0-2.6.1-3.2.1-.7 0-.61-.36-.35-.7.16-.18 2.15-2.81 2.53-3.28.26-.35.56-.68.79-.55.24.13.14.73-.12 1.4-.39 1.03-.93 1.69-1.06 1.92l.92.56c.36-.45 1.52-2.39 1.52-3.64C9.6.9 9.38.43 8.96.17a1.37 1.37 0 00-1.42.06c-.32.19-.64.46-.9.8L3.82 4.6c-.8 1.05-.43 2.34 1.28 2.34.6 0 2.57-.15 3.33-.15.88 0 1.3.05 1.61.1.58.08.9.34.9.68 0 .24-.1.42-.31.56-.2.14-.39.36-.39.66 0 .36.33.5.55.65.29.18.46.31.46.62 0 .27-.2.43-.43.6-.19.14-.43.3-.43.63 0 .3.21.45.35.56.15.12.3.25.3.49s-.1.36-.4.53c-.23.13-.56.37-.56.72 0 .39.28.56.6.65l3.96.87c.26.06.52.15.52.36 0 .22-.35.32-.84.32-1.7 0-6.4-.35-9.18-1.31-1.88-.63-2.91-1.8-2.91-3.19 0-1.2.8-2.28 1.68-2.9l-.8-.8A4.69 4.69 0 001 11.31c0 1.7 1 3.42 3.78 4.35 2.94 1 7.41 1.3 9.5 1.3 1.42 0 2.1-.6 2.1-1.48 0-.85-.7-1.31-1.53-1.48z" fill="#222" />
</svg></div></a>
                                    <div class="profile-card-subscribe"><a href="https://superpeer.com/armaganamcalar" class="button button-bordered blue button-small w-button">Subscribe</a></div>
                                </div>
                                <div class="profile-card-body">
                                    <div class="profile-card-info"><a href="https://superpeer.com/armaganamcalar" target="_blank" class="profile-card-title">Armagan Amcalar</a>
                                        <div class="profile-card-location">
                                            <div class="profile-card-location-icon w-embed"><svg width="1em" height="1em" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10.5 5c0 3.5-4.5 6.5-4.5 6.5S1.5 8.5 1.5 5a4.5 4.5 0 019 0z" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" /><path d="M6 6.5a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" /></svg></div>
                                            <div
                                                class="profile-card-location-text">Germany</div>
                                    </div>
                                    <div class="profile-card-bio">Entrepreneur, CTO &amp; Mentor</div>
                                </div>
                                <div class="profile-card-social-profiles">
                                    <div class="social-profile-list">
                                        <a href="https://twitter.com/dashersw" target="_blank" class="social-profile-list-item w-inline-block">
                                            <div class="social-profile-list-icon twitter w-embed"><svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13.97 2.67c-.52.23-1.08.38-1.65.45a2.9 2.9 0 001.27-1.6c-.56.33-1.17.57-1.83.7a2.87 2.87 0 00-4.89 2.61A8.13 8.13 0 01.96 1.84a2.87 2.87 0 00.89 3.83c-.46 0-.9-.13-1.3-.35v.03a2.87 2.87 0 002.3 2.82c-.42.11-.87.13-1.3.05a2.88 2.88 0 002.7 2A5.76 5.76 0 010 11.4a8.16 8.16 0 004.4 1.29c5.29 0 8.17-4.37 8.17-8.16v-.37A5.8 5.8 0 0014 2.68l-.03-.01z" fill="#1DA1F2" /></svg></div>
                                            <div
                                                class="social-profile-list-title">dashersw</div>
                                    </a>
                                    <div class="social-profile-list-inline-items">
                                        <a href="#" class="social-profile-list-item inline w-inline-block w-condition-invisible">
                                            <div class="social-profile-list-icon inline youtube w-embed"><svg width="1em" height="1em" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M11.91 2.84c.55.15.97.58 1.12 1.12.26.99.26 3.05.26 3.05s0 2.06-.26 3.05c-.15.54-.57.95-1.12 1.1-.98.26-4.91.26-4.91.26s-3.93 0-4.91-.26a1.56 1.56 0 01-1.12-1.1C.71 9.06.71 7 .71 7s0-2.06.26-3.05c.15-.54.57-.97 1.12-1.12C3.07 2.58 7 2.58 7 2.58s3.93 0 4.91.26zm-6.2 2.3v3.74L9.01 7 5.7 5.14z" fill="red" /></svg></div>
                                        </a>
                                        <a href="#" class="social-profile-list-item inline w-inline-block w-condition-invisible">
                                            <div class="social-profile-list-icon inline instagram w-embed"><svg width="1em" height="1em" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M11.58 3.26a.84.84 0 11-1.68 0 .84.84 0 011.68 0zM7 9.33a2.33 2.33 0 110-4.66 2.33 2.33 0 010 4.66zm0-5.92a3.6 3.6 0 100 7.18 3.6 3.6 0 000-7.18zm0-2.15c1.87 0 2.09 0 2.83.04.68.03 1.05.15 1.3.24.33.13.56.28.8.53.25.24.4.47.53.8.1.25.2.62.24 1.3.03.74.04.96.04 2.83s0 2.1-.04 2.83a3.87 3.87 0 01-.24 1.3c-.13.33-.28.56-.53.8-.24.25-.47.4-.8.53-.25.1-.62.2-1.3.24-.74.03-.96.04-2.83.04s-2.1 0-2.83-.04a3.87 3.87 0 01-1.3-.24 2.17 2.17 0 01-.8-.53c-.25-.24-.4-.47-.53-.8-.1-.25-.2-.62-.24-1.3-.03-.74-.04-.96-.04-2.83s0-2.09.04-2.83c.03-.68.15-1.05.24-1.3.13-.32.28-.56.53-.8.24-.25.47-.4.8-.53.25-.1.62-.2 1.3-.24.74-.03.96-.04 2.83-.04zM7 0C5.1 0 4.86 0 4.11.04c-.74.04-1.25.15-1.7.33-.46.18-.85.42-1.24.8-.38.4-.62.78-.8 1.24-.18.45-.3.96-.33 1.7C.01 4.86 0 5.1 0 7c0 1.9 0 2.14.04 2.89.04.74.15 1.25.33 1.7.18.46.42.85.8 1.24.4.38.78.62 1.24.8.45.18.96.3 1.7.33.75.03.99.04 2.89.04 1.9 0 2.14 0 2.89-.04a5.14 5.14 0 001.7-.33c.46-.18.85-.42 1.24-.8.38-.4.62-.78.8-1.24.18-.45.3-.96.33-1.7.03-.75.04-.99.04-2.89 0-1.9 0-2.14-.04-2.89a5.14 5.14 0 00-.33-1.7 3.43 3.43 0 00-.8-1.24 3.43 3.43 0 00-1.24-.8c-.45-.18-.96-.3-1.7-.33C9.14.01 8.9 0 7 0z" fill="#e95950" /></svg></div>
                                        </a>
                                        <a href="#" class="social-profile-list-item inline w-inline-block w-condition-invisible">
                                            <div class="social-profile-list-icon inline twitch w-embed"><svg width="1em" height="1em" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.7.46L.88 2.9v9h3.27v1.63h1.63l1.63-1.63h2.44l3.27-3.49V.46H1.7zm10.6 7.36l-2.28 2.45h-2.9l-1.75 1.28v-1.28H2.5v-9h9.8v6.55z" fill="#7743D4" /><path d="M7.4 3.73h-.8V7h.8V3.73zM9.85 3.73h-.81V7h.81V3.73z" fill="#7743D4" /></svg></div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <div class="flex-column-centered">
        <a href="https://superpeer.com/armaganamcalar/collection/public-speaking-series-give-a-talk-this-year" class="post-entries-title-link silent-hover w-inline-block">
            <h3>Public Speaking</h3>
        </a><a href="https://superpeer.com/armaganamcalar" class="post-entries-host-name silent-hover">Armagan Amcalar</a>
        <p>You should be giving a talk this year: Discover the super-hero speaker in you from someone who has been doing it for 20 years. An interactive workshop where you&#x27;ll create your own conference speech and master how to speak confidently to an
            audience.</p>
        <div class="flex centered move-up-on-scroll">
            <div class="meta vertical-on-mobile mr-5">
                <div class="meta-label mr-2">Starts</div>
                <div class="meta-value">August 23, 2021</div>
            </div><a href="https://superpeer.com/armaganamcalar/collection/public-speaking-series-give-a-talk-this-year" class="button button-large button-secondary uppercase">ENROLL</a></div>
        <div data-tooltip=".notify-form" data-delay="[0, 300]" class="flex centered move-up-on-scroll relative w-condition-invisible"
            data-trigger-target-selector=".button" data-arrow="false" data-theme="light large" data-trigger="click" data-max-width="464" data-interactive="true">
            <div class="meta vertical-on-mobile mr-5">
                <div class="meta-label mr-2">Starts</div>
                <div class="meta-value nowrap-text">August 23, 2021</div>
            </div><a href="#" class="button button-large button-secondary uppercase ml-3 nowrap-text">Notify Me</a>
            <div class="hidden">
                <div class="notify-form">
                    <div class="notify-form-header">
                        <div class="notify-form-title">Get notified when the series registrations open</div>
                        <a data-dismiss="tooltip" href="#" class="notify-form-close w-inline-block">
                            <div class="notify-form-close-icon w-embed"><svg width="1em" height="1em" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M17.89 16l5.72-5.72a1.33 1.33 0 10-1.89-1.89L16 14.11 10.28 8.4a1.33 1.33 0 10-1.89 1.89L14.11 16 8.4 21.72a1.33 1.33 0 101.89 1.89L16 17.89l5.72 5.72a1.33 1.33 0 001.89 0c.52-.52.52-1.36 0-1.89L17.89 16z" fill="currentcolor" /></svg></div>
                        </a>
                    </div>
                    <div class="notify-form-body">
                        <div class="notify-form-form w-form">
                            <form id="wf-form-Notify-Me-Form" name="wf-form-Notify-Me-Form" data-name="Notify Me Form">
                                <div class="field-group"><label for="Email-3" class="field-label">Your email</label><input type="email" class="text-field w-input" maxlength="256" name="Email" data-name="Email" placeholder="" id="Email" required="" /></div>
                                <div class="button-block"><input type="submit" value="Notify Me" data-wait="Please wait..." class="button button-primary button-large uppercase button-block w-button" /></div>
                                <div class="hidden">
                                    <div data-convert-to-hidden="SerieID">9</div>
                                    <div data-convert-to-hidden="SerieName">Public Speaking</div>
                                    <div data-convert-to-hidden="SerieLink">https://superpeer.com/armaganamcalar/collection/public-speaking-series-give-a-talk-this-year</div>
                                    <div data-convert-to-hidden="HostName">Armagan Amcalar</div>
                                    <div data-convert-to-hidden="HostLink">https://superpeer.com/armaganamcalar</div>
                                </div>
                            </form>
                            <div class="success-message-v2 w-form-done">
                                <div class="success-message-v2-body">
                                    <div class="success-message-v2-icon w-embed"><svg width="1em" height="1em" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M29.67 15.71c0-.76-.6-1.37-1.34-1.37-.74 0-1.33.62-1.33 1.38 0 2.94-1.1 5.7-3.1 7.79-2.01 2.08-4.69 3.23-7.54 3.24h-.03c-2.84 0-5.5-1.14-7.52-3.2a11.1 11.1 0 01-3.14-7.77c-.01-2.94 1.09-5.7 3.1-7.79a10.44 10.44 0 0110.07-2.93c.72.17 1.44-.28 1.61-1.02a1.38 1.38 0 00-.98-1.66 13.05 13.05 0 00-12.6 3.67A13.88 13.88 0 003 15.8c.01 3.67 1.4 7.12 3.93 9.71 2.52 2.58 5.86 4 9.4 4h.04c3.56-.01 6.9-1.45 9.42-4.05a13.88 13.88 0 003.88-9.74zm-16.4-.93a1.3 1.3 0 00-1.88 0 1.4 1.4 0 000 1.94l4 4.13c.25.26.59.4.94.4h.05c.37-.01.71-.18.96-.47l9.33-11a1.4 1.4 0 00-.12-1.94 1.3 1.3 0 00-1.89.13l-8.4 9.9-2.98-3.1z" fill="currentcolor" /></svg></div>
                                    <div
                                        class="success-message-v2-text">Success</div>
                            </div>
                        </div>
                        <div class="error-message-v2 w-form-fail">
                            <div class="error-message-v2-body">
                                <div class="error-message-v2-icon w-embed"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M8 4.67A.67.67 0 108 6a.67.67 0 000-1.33zm0 2c-.37 0-.67.3-.67.66v3.34a.67.67 0 001.34 0V7.33c0-.36-.3-.66-.67-.66zM2.67 8a5.34 5.34 0 1010.68-.01A5.34 5.34 0 002.67 8zM1.33 8a6.67 6.67 0 1113.34 0A6.67 6.67 0 011.33 8z" fill="currentcolor" /></svg></div>
                                <div
                                    class="error-message-v2-text">Something went wrong. Please try again.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div role="listitem" class="post-entries-item-wrapper w-dyn-item">
        <div class="post-entries-item flex-column-centered move-up-on-scroll">
            <div class="featured-frame mb-6">
                <div class="featured-frame-body small"><a href="https://superpeer.com/marytamul/collection/female-self-pleasure-and-exploration" class="featured-frame-link w-inline-block"><img alt="" loading="lazy" width="402" height="224" src="https://assets.website-files.com/60f070302df82b4bb19e42f6/60fae4ab5244f63f54bd0997_featured-image.jpg" sizes="(max-width: 479px) 85vw, (max-width: 767px) 402px, (max-width: 991px) 44vw, 402px" srcset="https://assets.website-files.com/60f070302df82b4bb19e42f6/60fae4ab5244f63f54bd0997_featured-image-p-500.jpeg 500w, https://assets.website-files.com/60f070302df82b4bb19e42f6/60fae4ab5244f63f54bd0997_featured-image-p-800.jpeg 800w, https://assets.website-files.com/60f070302df82b4bb19e42f6/60fae4ab5244f63f54bd0997_featured-image-p-1600.jpeg 1600w, https://assets.website-files.com/60f070302df82b4bb19e42f6/60fae4ab5244f63f54bd0997_featured-image.jpg 1668w" class="featured-frame-image" /></a>
                    <div
                        class="coming-soon uppercase w-condition-invisible">Coming Soon</div>
            </div>
            <div class="featured-frame-frame small"></div>
            <div class="featured-frame-badge">
                <div data-tooltip=".tooltip-content" data-theme="light" data-interactive="true" data-delay="[0,300]" class="avatar-v2 _72px"><img height="72" loading="lazy" width="72" src="https://assets.website-files.com/60f070302df82b4bb19e42f6/60fae4ed6f3ea50c59d44494_cover-image.png" alt="Mary Tamul" class="avatar-v2-image" />
                    <div class="hidden">
                        <div class="tooltip-content">
                            <div class="profile-card">
                                <div class="profile-card-header"><a href="https://superpeer.com/marytamul" target="_blank" class="avatar-v2 _56px w-inline-block"><img height="64" loading="lazy" width="64" src="https://assets.website-files.com/60f070302df82b4bb19e42f6/60fae4ed6f3ea50c59d44494_cover-image.png" alt="Mary Tamul" class="avatar-v2-image" /><div class="avatar-badge small w-embed"><svg width="1em" height="1em" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M15.48 14.9c-.63-.13-1.23-.28-1.74-.38l-.84-.18.1-.87.01-.12c0-.2-.03-.36-.1-.54l-.2-.46.27-.43c.16-.26.23-.54.23-.87 0-.35-.1-.65-.29-.9l-.33-.45.22-.52c.09-.2.13-.42.13-.63 0-.3 0-1.21-1.42-1.76a4.8 4.8 0 00-1.35-.23l-1.54-.1.73-1.33c.59-1.07.92-2.03.92-2.7 0-.62-.2-1.17-.66-1.35-1.6-.7-2.73.38-3.53 1.7a48.01 48.01 0 00-1.94 3.48c-1.05 2.22-2.6 3.81-2.6 6.02 0 2.01 1.35 3.6 3.82 4.43C8.4 17.73 12.92 18 14.89 18c1.41 0 2.19-.55 2.19-1.55 0-1.05-1-1.42-1.6-1.55z" fill="#FFD338" />
<path d="M14.85 14l-3.05-.65c.25-.18.5-.54.5-.98 0-.52-.27-.82-.48-.98.29-.21.67-.6.67-1.3 0-.77-.51-1.16-.79-1.34.22-.2.52-.6.52-1.17 0-.99-.76-1.43-1.38-1.68a7.87 7.87 0 00-2.28-.25c-1.37 0-2.6.1-3.2.1-.7 0-.61-.36-.35-.7.16-.18 2.15-2.81 2.53-3.28.26-.35.56-.68.79-.55.24.13.14.73-.12 1.4-.39 1.03-.93 1.69-1.06 1.92l.92.56c.36-.45 1.52-2.39 1.52-3.64C9.6.9 9.38.43 8.96.17a1.37 1.37 0 00-1.42.06c-.32.19-.64.46-.9.8L3.82 4.6c-.8 1.05-.43 2.34 1.28 2.34.6 0 2.57-.15 3.33-.15.88 0 1.3.05 1.61.1.58.08.9.34.9.68 0 .24-.1.42-.31.56-.2.14-.39.36-.39.66 0 .36.33.5.55.65.29.18.46.31.46.62 0 .27-.2.43-.43.6-.19.14-.43.3-.43.63 0 .3.21.45.35.56.15.12.3.25.3.49s-.1.36-.4.53c-.23.13-.56.37-.56.72 0 .39.28.56.6.65l3.96.87c.26.06.52.15.52.36 0 .22-.35.32-.84.32-1.7 0-6.4-.35-9.18-1.31-1.88-.63-2.91-1.8-2.91-3.19 0-1.2.8-2.28 1.68-2.9l-.8-.8A4.69 4.69 0 001 11.31c0 1.7 1 3.42 3.78 4.35 2.94 1 7.41 1.3 9.5 1.3 1.42 0 2.1-.6 2.1-1.48 0-.85-.7-1.31-1.53-1.48z" fill="#222" />
</svg></div></a>
                                    <div class="profile-card-subscribe"><a href="https://superpeer.com/marytamul" class="button button-bordered blue button-small w-button">Subscribe</a></div>
                                </div>
                                <div class="profile-card-body">
                                    <div class="profile-card-info"><a href="https://superpeer.com/marytamul" target="_blank" class="profile-card-title">Mary Tamul</a>
                                        <div class="profile-card-location">
                                            <div class="profile-card-location-icon w-embed"><svg width="1em" height="1em" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10.5 5c0 3.5-4.5 6.5-4.5 6.5S1.5 8.5 1.5 5a4.5 4.5 0 019 0z" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" /><path d="M6 6.5a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" /></svg></div>
                                            <div
                                                class="profile-card-location-text">Tulum, MX</div>
                                    </div>
                                    <div class="profile-card-bio">Mary is an intuitive coach and healer with years of experience supporting women to create better relationships and claim what&#x27;s theirs.</div>
                                </div>
                                <div class="profile-card-social-profiles">
                                    <div class="social-profile-list">
                                        <a href="#" class="social-profile-list-item w-inline-block w-condition-invisible">
                                            <div class="social-profile-list-icon twitter w-embed"><svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13.97 2.67c-.52.23-1.08.38-1.65.45a2.9 2.9 0 001.27-1.6c-.56.33-1.17.57-1.83.7a2.87 2.87 0 00-4.89 2.61A8.13 8.13 0 01.96 1.84a2.87 2.87 0 00.89 3.83c-.46 0-.9-.13-1.3-.35v.03a2.87 2.87 0 002.3 2.82c-.42.11-.87.13-1.3.05a2.88 2.88 0 002.7 2A5.76 5.76 0 010 11.4a8.16 8.16 0 004.4 1.29c5.29 0 8.17-4.37 8.17-8.16v-.37A5.8 5.8 0 0014 2.68l-.03-.01z" fill="#1DA1F2" /></svg></div>
                                            <div
                                                class="social-profile-list-title w-dyn-bind-empty"></div>
                                    </a>
                                    <div class="social-profile-list-inline-items">
                                        <a href="#" class="social-profile-list-item inline w-inline-block w-condition-invisible">
                                            <div class="social-profile-list-icon inline youtube w-embed"><svg width="1em" height="1em" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M11.91 2.84c.55.15.97.58 1.12 1.12.26.99.26 3.05.26 3.05s0 2.06-.26 3.05c-.15.54-.57.95-1.12 1.1-.98.26-4.91.26-4.91.26s-3.93 0-4.91-.26a1.56 1.56 0 01-1.12-1.1C.71 9.06.71 7 .71 7s0-2.06.26-3.05c.15-.54.57-.97 1.12-1.12C3.07 2.58 7 2.58 7 2.58s3.93 0 4.91.26zm-6.2 2.3v3.74L9.01 7 5.7 5.14z" fill="red" /></svg></div>
                                        </a>
                                        <a href="#" class="social-profile-list-item inline w-inline-block w-condition-invisible">
                                            <div class="social-profile-list-icon inline instagram w-embed"><svg width="1em" height="1em" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M11.58 3.26a.84.84 0 11-1.68 0 .84.84 0 011.68 0zM7 9.33a2.33 2.33 0 110-4.66 2.33 2.33 0 010 4.66zm0-5.92a3.6 3.6 0 100 7.18 3.6 3.6 0 000-7.18zm0-2.15c1.87 0 2.09 0 2.83.04.68.03 1.05.15 1.3.24.33.13.56.28.8.53.25.24.4.47.53.8.1.25.2.62.24 1.3.03.74.04.96.04 2.83s0 2.1-.04 2.83a3.87 3.87 0 01-.24 1.3c-.13.33-.28.56-.53.8-.24.25-.47.4-.8.53-.25.1-.62.2-1.3.24-.74.03-.96.04-2.83.04s-2.1 0-2.83-.04a3.87 3.87 0 01-1.3-.24 2.17 2.17 0 01-.8-.53c-.25-.24-.4-.47-.53-.8-.1-.25-.2-.62-.24-1.3-.03-.74-.04-.96-.04-2.83s0-2.09.04-2.83c.03-.68.15-1.05.24-1.3.13-.32.28-.56.53-.8.24-.25.47-.4.8-.53.25-.1.62-.2 1.3-.24.74-.03.96-.04 2.83-.04zM7 0C5.1 0 4.86 0 4.11.04c-.74.04-1.25.15-1.7.33-.46.18-.85.42-1.24.8-.38.4-.62.78-.8 1.24-.18.45-.3.96-.33 1.7C.01 4.86 0 5.1 0 7c0 1.9 0 2.14.04 2.89.04.74.15 1.25.33 1.7.18.46.42.85.8 1.24.4.38.78.62 1.24.8.45.18.96.3 1.7.33.75.03.99.04 2.89.04 1.9 0 2.14 0 2.89-.04a5.14 5.14 0 001.7-.33c.46-.18.85-.42 1.24-.8.38-.4.62-.78.8-1.24.18-.45.3-.96.33-1.7.03-.75.04-.99.04-2.89 0-1.9 0-2.14-.04-2.89a5.14 5.14 0 00-.33-1.7 3.43 3.43 0 00-.8-1.24 3.43 3.43 0 00-1.24-.8c-.45-.18-.96-.3-1.7-.33C9.14.01 8.9 0 7 0z" fill="#e95950" /></svg></div>
                                        </a>
                                        <a href="#" class="social-profile-list-item inline w-inline-block w-condition-invisible">
                                            <div class="social-profile-list-icon inline twitch w-embed"><svg width="1em" height="1em" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.7.46L.88 2.9v9h3.27v1.63h1.63l1.63-1.63h2.44l3.27-3.49V.46H1.7zm10.6 7.36l-2.28 2.45h-2.9l-1.75 1.28v-1.28H2.5v-9h9.8v6.55z" fill="#7743D4" /><path d="M7.4 3.73h-.8V7h.8V3.73zM9.85 3.73h-.81V7h.81V3.73z" fill="#7743D4" /></svg></div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="flex-column-centered">
        <a href="https://superpeer.com/marytamul/collection/female-self-pleasure-and-exploration" class="post-entries-title-link silent-hover w-inline-block">
            <h3>Female Self-Pleasure &amp; Exploration</h3>
        </a><a href="https://superpeer.com/marytamul" class="post-entries-host-name silent-hover">Mary Tamul</a>
        <p>Rediscover your true power and purpose when you are lifted up in sisterhood and held accountable to your pleasure, happiness, and highest self.</p>
        <div class="flex centered move-up-on-scroll">
            <div class="meta vertical-on-mobile mr-5">
                <div class="meta-label mr-2">Starts</div>
                <div class="meta-value">August 17, 2021</div>
            </div><a href="https://superpeer.com/marytamul/collection/female-self-pleasure-and-exploration" class="button button-large button-secondary uppercase">ENROLL</a></div>
        <div data-tooltip=".notify-form" data-delay="[0, 300]" class="flex centered move-up-on-scroll relative w-condition-invisible"
            data-trigger-target-selector=".button" data-arrow="false" data-theme="light large" data-trigger="click" data-max-width="464" data-interactive="true">
            <div class="meta vertical-on-mobile mr-5">
                <div class="meta-label mr-2">Starts</div>
                <div class="meta-value nowrap-text">August 17, 2021</div>
            </div><a href="#" class="button button-large button-secondary uppercase ml-3 nowrap-text">Notify Me</a>
            <div class="hidden">
                <div class="notify-form">
                    <div class="notify-form-header">
                        <div class="notify-form-title">Get notified when the series registrations open</div>
                        <a data-dismiss="tooltip" href="#" class="notify-form-close w-inline-block">
                            <div class="notify-form-close-icon w-embed"><svg width="1em" height="1em" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M17.89 16l5.72-5.72a1.33 1.33 0 10-1.89-1.89L16 14.11 10.28 8.4a1.33 1.33 0 10-1.89 1.89L14.11 16 8.4 21.72a1.33 1.33 0 101.89 1.89L16 17.89l5.72 5.72a1.33 1.33 0 001.89 0c.52-.52.52-1.36 0-1.89L17.89 16z" fill="currentcolor" /></svg></div>
                        </a>
                    </div>
                    <div class="notify-form-body">
                        <div class="notify-form-form w-form">
                            <form id="wf-form-Notify-Me-Form" name="wf-form-Notify-Me-Form" data-name="Notify Me Form">
                                <div class="field-group"><label for="Email-3" class="field-label">Your email</label><input type="email" class="text-field w-input" maxlength="256" name="Email" data-name="Email" placeholder="" id="Email" required="" /></div>
                                <div class="button-block"><input type="submit" value="Notify Me" data-wait="Please wait..." class="button button-primary button-large uppercase button-block w-button" /></div>
                                <div class="hidden">
                                    <div data-convert-to-hidden="SerieID">12</div>
                                    <div data-convert-to-hidden="SerieName">Female Self-Pleasure &amp; Exploration</div>
                                    <div data-convert-to-hidden="SerieLink">https://superpeer.com/marytamul/collection/female-self-pleasure-and-exploration</div>
                                    <div data-convert-to-hidden="HostName">Mary Tamul</div>
                                    <div data-convert-to-hidden="HostLink">https://superpeer.com/marytamul</div>
                                </div>
                            </form>
                            <div class="success-message-v2 w-form-done">
                                <div class="success-message-v2-body">
                                    <div class="success-message-v2-icon w-embed"><svg width="1em" height="1em" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M29.67 15.71c0-.76-.6-1.37-1.34-1.37-.74 0-1.33.62-1.33 1.38 0 2.94-1.1 5.7-3.1 7.79-2.01 2.08-4.69 3.23-7.54 3.24h-.03c-2.84 0-5.5-1.14-7.52-3.2a11.1 11.1 0 01-3.14-7.77c-.01-2.94 1.09-5.7 3.1-7.79a10.44 10.44 0 0110.07-2.93c.72.17 1.44-.28 1.61-1.02a1.38 1.38 0 00-.98-1.66 13.05 13.05 0 00-12.6 3.67A13.88 13.88 0 003 15.8c.01 3.67 1.4 7.12 3.93 9.71 2.52 2.58 5.86 4 9.4 4h.04c3.56-.01 6.9-1.45 9.42-4.05a13.88 13.88 0 003.88-9.74zm-16.4-.93a1.3 1.3 0 00-1.88 0 1.4 1.4 0 000 1.94l4 4.13c.25.26.59.4.94.4h.05c.37-.01.71-.18.96-.47l9.33-11a1.4 1.4 0 00-.12-1.94 1.3 1.3 0 00-1.89.13l-8.4 9.9-2.98-3.1z" fill="currentcolor" /></svg></div>
                                    <div
                                        class="success-message-v2-text">Success</div>
                            </div>
                        </div>
                        <div class="error-message-v2 w-form-fail">
                            <div class="error-message-v2-body">
                                <div class="error-message-v2-icon w-embed"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M8 4.67A.67.67 0 108 6a.67.67 0 000-1.33zm0 2c-.37 0-.67.3-.67.66v3.34a.67.67 0 001.34 0V7.33c0-.36-.3-.66-.67-.66zM2.67 8a5.34 5.34 0 1010.68-.01A5.34 5.34 0 002.67 8zM1.33 8a6.67 6.67 0 1113.34 0A6.67 6.67 0 011.33 8z" fill="currentcolor" /></svg></div>
                                <div
                                    class="error-message-v2-text">Something went wrong. Please try again.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div role="listitem" class="post-entries-item-wrapper w-dyn-item">
        <div class="post-entries-item flex-column-centered move-up-on-scroll">
            <div class="featured-frame mb-6">
                <div class="featured-frame-body small"><a href="https://superpeer.com/yourfriendandy/collection/how-to-grow-and-monetize-your-small-youtube-channel" class="featured-frame-link w-inline-block"><img alt="" loading="lazy" width="402" height="224" src="https://assets.website-files.com/60f070302df82b4bb19e42f6/60fae18c5b8ec30b4bb2922c_trailer-image.jpg" sizes="(max-width: 479px) 85vw, (max-width: 767px) 402px, (max-width: 991px) 44vw, 402px" srcset="https://assets.website-files.com/60f070302df82b4bb19e42f6/60fae18c5b8ec30b4bb2922c_trailer-image-p-500.jpeg 500w, https://assets.website-files.com/60f070302df82b4bb19e42f6/60fae18c5b8ec30b4bb2922c_trailer-image-p-800.jpeg 800w, https://assets.website-files.com/60f070302df82b4bb19e42f6/60fae18c5b8ec30b4bb2922c_trailer-image-p-1600.jpeg 1600w, https://assets.website-files.com/60f070302df82b4bb19e42f6/60fae18c5b8ec30b4bb2922c_trailer-image.jpg 2000w" class="featured-frame-image" /></a>
                    <div
                        class="coming-soon uppercase w-condition-invisible">Coming Soon</div>
            </div>
            <div class="featured-frame-frame small"></div>
            <div class="featured-frame-badge">
                <div data-tooltip=".tooltip-content" data-theme="light" data-interactive="true" data-delay="[0,300]" class="avatar-v2 _72px"><img height="72" loading="lazy" width="72" src="https://assets.website-files.com/60f070302df82b4bb19e42f6/60fae003a913a70b914a3ffe_YourFriendAndy-profile.jpg" alt="Your Friend Andy" class="avatar-v2-image" />
                    <div class="hidden">
                        <div class="tooltip-content">
                            <div class="profile-card">
                                <div class="profile-card-header"><a href="https://superpeer.com/yourfriendandy" target="_blank" class="avatar-v2 _56px w-inline-block"><img height="64" loading="lazy" width="64" src="https://assets.website-files.com/60f070302df82b4bb19e42f6/60fae003a913a70b914a3ffe_YourFriendAndy-profile.jpg" alt="Your Friend Andy" class="avatar-v2-image" /><div class="avatar-badge small w-embed"><svg width="1em" height="1em" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M15.48 14.9c-.63-.13-1.23-.28-1.74-.38l-.84-.18.1-.87.01-.12c0-.2-.03-.36-.1-.54l-.2-.46.27-.43c.16-.26.23-.54.23-.87 0-.35-.1-.65-.29-.9l-.33-.45.22-.52c.09-.2.13-.42.13-.63 0-.3 0-1.21-1.42-1.76a4.8 4.8 0 00-1.35-.23l-1.54-.1.73-1.33c.59-1.07.92-2.03.92-2.7 0-.62-.2-1.17-.66-1.35-1.6-.7-2.73.38-3.53 1.7a48.01 48.01 0 00-1.94 3.48c-1.05 2.22-2.6 3.81-2.6 6.02 0 2.01 1.35 3.6 3.82 4.43C8.4 17.73 12.92 18 14.89 18c1.41 0 2.19-.55 2.19-1.55 0-1.05-1-1.42-1.6-1.55z" fill="#FFD338" />
<path d="M14.85 14l-3.05-.65c.25-.18.5-.54.5-.98 0-.52-.27-.82-.48-.98.29-.21.67-.6.67-1.3 0-.77-.51-1.16-.79-1.34.22-.2.52-.6.52-1.17 0-.99-.76-1.43-1.38-1.68a7.87 7.87 0 00-2.28-.25c-1.37 0-2.6.1-3.2.1-.7 0-.61-.36-.35-.7.16-.18 2.15-2.81 2.53-3.28.26-.35.56-.68.79-.55.24.13.14.73-.12 1.4-.39 1.03-.93 1.69-1.06 1.92l.92.56c.36-.45 1.52-2.39 1.52-3.64C9.6.9 9.38.43 8.96.17a1.37 1.37 0 00-1.42.06c-.32.19-.64.46-.9.8L3.82 4.6c-.8 1.05-.43 2.34 1.28 2.34.6 0 2.57-.15 3.33-.15.88 0 1.3.05 1.61.1.58.08.9.34.9.68 0 .24-.1.42-.31.56-.2.14-.39.36-.39.66 0 .36.33.5.55.65.29.18.46.31.46.62 0 .27-.2.43-.43.6-.19.14-.43.3-.43.63 0 .3.21.45.35.56.15.12.3.25.3.49s-.1.36-.4.53c-.23.13-.56.37-.56.72 0 .39.28.56.6.65l3.96.87c.26.06.52.15.52.36 0 .22-.35.32-.84.32-1.7 0-6.4-.35-9.18-1.31-1.88-.63-2.91-1.8-2.91-3.19 0-1.2.8-2.28 1.68-2.9l-.8-.8A4.69 4.69 0 001 11.31c0 1.7 1 3.42 3.78 4.35 2.94 1 7.41 1.3 9.5 1.3 1.42 0 2.1-.6 2.1-1.48 0-.85-.7-1.31-1.53-1.48z" fill="#222" />
</svg></div></a>
                                    <div class="profile-card-subscribe"><a href="https://superpeer.com/yourfriendandy" class="button button-bordered blue button-small w-button">Subscribe</a></div>
                                </div>
                                <div class="profile-card-body">
                                    <div class="profile-card-info"><a href="https://superpeer.com/yourfriendandy" target="_blank" class="profile-card-title">Your Friend Andy</a>
                                        <div class="profile-card-location">
                                            <div class="profile-card-location-icon w-embed"><svg width="1em" height="1em" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10.5 5c0 3.5-4.5 6.5-4.5 6.5S1.5 8.5 1.5 5a4.5 4.5 0 019 0z" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" /><path d="M6 6.5a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" /></svg></div>
                                            <div
                                                class="profile-card-location-text">The Internet</div>
                                    </div>
                                    <div class="profile-card-bio">I love talking about money. I love talking about YouTube.
                                    </div>
                                </div>
                                <div class="profile-card-social-profiles">
                                    <div class="social-profile-list">
                                        <a href="#" class="social-profile-list-item w-inline-block w-condition-invisible">
                                            <div class="social-profile-list-icon twitter w-embed"><svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13.97 2.67c-.52.23-1.08.38-1.65.45a2.9 2.9 0 001.27-1.6c-.56.33-1.17.57-1.83.7a2.87 2.87 0 00-4.89 2.61A8.13 8.13 0 01.96 1.84a2.87 2.87 0 00.89 3.83c-.46 0-.9-.13-1.3-.35v.03a2.87 2.87 0 002.3 2.82c-.42.11-.87.13-1.3.05a2.88 2.88 0 002.7 2A5.76 5.76 0 010 11.4a8.16 8.16 0 004.4 1.29c5.29 0 8.17-4.37 8.17-8.16v-.37A5.8 5.8 0 0014 2.68l-.03-.01z" fill="#1DA1F2" /></svg></div>
                                            <div
                                                class="social-profile-list-title w-dyn-bind-empty"></div>
                                    </a>
                                    <div class="social-profile-list-inline-items">
                                        <a href="#" class="social-profile-list-item inline w-inline-block w-condition-invisible">
                                            <div class="social-profile-list-icon inline youtube w-embed"><svg width="1em" height="1em" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M11.91 2.84c.55.15.97.58 1.12 1.12.26.99.26 3.05.26 3.05s0 2.06-.26 3.05c-.15.54-.57.95-1.12 1.1-.98.26-4.91.26-4.91.26s-3.93 0-4.91-.26a1.56 1.56 0 01-1.12-1.1C.71 9.06.71 7 .71 7s0-2.06.26-3.05c.15-.54.57-.97 1.12-1.12C3.07 2.58 7 2.58 7 2.58s3.93 0 4.91.26zm-6.2 2.3v3.74L9.01 7 5.7 5.14z" fill="red" /></svg></div>
                                        </a>
                                        <a href="#" class="social-profile-list-item inline w-inline-block w-condition-invisible">
                                            <div class="social-profile-list-icon inline instagram w-embed"><svg width="1em" height="1em" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M11.58 3.26a.84.84 0 11-1.68 0 .84.84 0 011.68 0zM7 9.33a2.33 2.33 0 110-4.66 2.33 2.33 0 010 4.66zm0-5.92a3.6 3.6 0 100 7.18 3.6 3.6 0 000-7.18zm0-2.15c1.87 0 2.09 0 2.83.04.68.03 1.05.15 1.3.24.33.13.56.28.8.53.25.24.4.47.53.8.1.25.2.62.24 1.3.03.74.04.96.04 2.83s0 2.1-.04 2.83a3.87 3.87 0 01-.24 1.3c-.13.33-.28.56-.53.8-.24.25-.47.4-.8.53-.25.1-.62.2-1.3.24-.74.03-.96.04-2.83.04s-2.1 0-2.83-.04a3.87 3.87 0 01-1.3-.24 2.17 2.17 0 01-.8-.53c-.25-.24-.4-.47-.53-.8-.1-.25-.2-.62-.24-1.3-.03-.74-.04-.96-.04-2.83s0-2.09.04-2.83c.03-.68.15-1.05.24-1.3.13-.32.28-.56.53-.8.24-.25.47-.4.8-.53.25-.1.62-.2 1.3-.24.74-.03.96-.04 2.83-.04zM7 0C5.1 0 4.86 0 4.11.04c-.74.04-1.25.15-1.7.33-.46.18-.85.42-1.24.8-.38.4-.62.78-.8 1.24-.18.45-.3.96-.33 1.7C.01 4.86 0 5.1 0 7c0 1.9 0 2.14.04 2.89.04.74.15 1.25.33 1.7.18.46.42.85.8 1.24.4.38.78.62 1.24.8.45.18.96.3 1.7.33.75.03.99.04 2.89.04 1.9 0 2.14 0 2.89-.04a5.14 5.14 0 001.7-.33c.46-.18.85-.42 1.24-.8.38-.4.62-.78.8-1.24.18-.45.3-.96.33-1.7.03-.75.04-.99.04-2.89 0-1.9 0-2.14-.04-2.89a5.14 5.14 0 00-.33-1.7 3.43 3.43 0 00-.8-1.24 3.43 3.43 0 00-1.24-.8c-.45-.18-.96-.3-1.7-.33C9.14.01 8.9 0 7 0z" fill="#e95950" /></svg></div>
                                        </a>
                                        <a href="#" class="social-profile-list-item inline w-inline-block w-condition-invisible">
                                            <div class="social-profile-list-icon inline twitch w-embed"><svg width="1em" height="1em" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.7.46L.88 2.9v9h3.27v1.63h1.63l1.63-1.63h2.44l3.27-3.49V.46H1.7zm10.6 7.36l-2.28 2.45h-2.9l-1.75 1.28v-1.28H2.5v-9h9.8v6.55z" fill="#7743D4" /><path d="M7.4 3.73h-.8V7h.8V3.73zM9.85 3.73h-.81V7h.81V3.73z" fill="#7743D4" /></svg></div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="flex-column-centered">
        <a href="https://superpeer.com/yourfriendandy/collection/how-to-grow-and-monetize-your-small-youtube-channel" class="post-entries-title-link silent-hover w-inline-block">
            <h3>How to Grow &amp; Monetize Your YouTube Channel</h3>
        </a><a href="https://superpeer.com/yourfriendandy" class="post-entries-host-name silent-hover">Your Friend Andy</a>
        <p>I grew my Youtube channel from 0 to 6k subscribers and to $18k in revenue in 1 year. I will teach you exactly how I did this and how you can do it too.</p>
        <div class="flex centered move-up-on-scroll">
            <div class="meta vertical-on-mobile mr-5">
                <div class="meta-label mr-2">Starts</div>
                <div class="meta-value">August 18, 2021</div>
            </div><a href="https://superpeer.com/yourfriendandy/collection/how-to-grow-and-monetize-your-small-youtube-channel" class="button button-large button-secondary uppercase">ENROLL</a></div>
        <div data-tooltip=".notify-form" data-delay="[0, 300]" class="flex centered move-up-on-scroll relative w-condition-invisible"
            data-trigger-target-selector=".button" data-arrow="false" data-theme="light large" data-trigger="click" data-max-width="464" data-interactive="true">
            <div class="meta vertical-on-mobile mr-5">
                <div class="meta-label mr-2">Starts</div>
                <div class="meta-value nowrap-text">August 18, 2021</div>
            </div><a href="#" class="button button-large button-secondary uppercase ml-3 nowrap-text">Notify Me</a>
            <div class="hidden">
                <div class="notify-form">
                    <div class="notify-form-header">
                        <div class="notify-form-title">Get notified when the series registrations open</div>
                        <a data-dismiss="tooltip" href="#" class="notify-form-close w-inline-block">
                            <div class="notify-form-close-icon w-embed"><svg width="1em" height="1em" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M17.89 16l5.72-5.72a1.33 1.33 0 10-1.89-1.89L16 14.11 10.28 8.4a1.33 1.33 0 10-1.89 1.89L14.11 16 8.4 21.72a1.33 1.33 0 101.89 1.89L16 17.89l5.72 5.72a1.33 1.33 0 001.89 0c.52-.52.52-1.36 0-1.89L17.89 16z" fill="currentcolor" /></svg></div>
                        </a>
                    </div>
                    <div class="notify-form-body">
                        <div class="notify-form-form w-form">
                            <form id="wf-form-Notify-Me-Form" name="wf-form-Notify-Me-Form" data-name="Notify Me Form">
                                <div class="field-group"><label for="Email-3" class="field-label">Your email</label><input type="email" class="text-field w-input" maxlength="256" name="Email" data-name="Email" placeholder="" id="Email" required="" /></div>
                                <div class="button-block"><input type="submit" value="Notify Me" data-wait="Please wait..." class="button button-primary button-large uppercase button-block w-button" /></div>
                                <div class="hidden">
                                    <div data-convert-to-hidden="SerieID">19</div>
                                    <div data-convert-to-hidden="SerieName">How to Grow &amp; Monetize Your YouTube Channel</div>
                                    <div data-convert-to-hidden="SerieLink">https://superpeer.com/yourfriendandy/collection/how-to-grow-and-monetize-your-small-youtube-channel</div>
                                    <div data-convert-to-hidden="HostName">Your Friend Andy</div>
                                    <div data-convert-to-hidden="HostLink">https://superpeer.com/yourfriendandy</div>
                                </div>
                            </form>
                            <div class="success-message-v2 w-form-done">
                                <div class="success-message-v2-body">
                                    <div class="success-message-v2-icon w-embed"><svg width="1em" height="1em" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M29.67 15.71c0-.76-.6-1.37-1.34-1.37-.74 0-1.33.62-1.33 1.38 0 2.94-1.1 5.7-3.1 7.79-2.01 2.08-4.69 3.23-7.54 3.24h-.03c-2.84 0-5.5-1.14-7.52-3.2a11.1 11.1 0 01-3.14-7.77c-.01-2.94 1.09-5.7 3.1-7.79a10.44 10.44 0 0110.07-2.93c.72.17 1.44-.28 1.61-1.02a1.38 1.38 0 00-.98-1.66 13.05 13.05 0 00-12.6 3.67A13.88 13.88 0 003 15.8c.01 3.67 1.4 7.12 3.93 9.71 2.52 2.58 5.86 4 9.4 4h.04c3.56-.01 6.9-1.45 9.42-4.05a13.88 13.88 0 003.88-9.74zm-16.4-.93a1.3 1.3 0 00-1.88 0 1.4 1.4 0 000 1.94l4 4.13c.25.26.59.4.94.4h.05c.37-.01.71-.18.96-.47l9.33-11a1.4 1.4 0 00-.12-1.94 1.3 1.3 0 00-1.89.13l-8.4 9.9-2.98-3.1z" fill="currentcolor" /></svg></div>
                                    <div
                                        class="success-message-v2-text">Success</div>
                            </div>
                        </div>
                        <div class="error-message-v2 w-form-fail">
                            <div class="error-message-v2-body">
                                <div class="error-message-v2-icon w-embed"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M8 4.67A.67.67 0 108 6a.67.67 0 000-1.33zm0 2c-.37 0-.67.3-.67.66v3.34a.67.67 0 001.34 0V7.33c0-.36-.3-.66-.67-.66zM2.67 8a5.34 5.34 0 1010.68-.01A5.34 5.34 0 002.67 8zM1.33 8a6.67 6.67 0 1113.34 0A6.67 6.67 0 011.33 8z" fill="currentcolor" /></svg></div>
                                <div
                                    class="error-message-v2-text">Something went wrong. Please try again.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="wave-background-wave w-embed"><svg preserveAspectRatio="none" width="100%" height="53" viewBox="0 0 1440 53" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M0 36.2V0h1440v39.46c-20.05-2.19-43.76-5.94-71.65-11.8-145.43-30.56-374.66-6.72-557.2 17.96C682.92 62.96 559.62 46.63 424.2 28.7c-57.34-7.59-116.85-15.47-179.83-21.2C146.2-1.43 61.9 14.8 0 36.2z" fill="currentcolor" /></svg></div>
    </div>
    </div>
    <div class="features-superpeer-series-section wf-section">
        <div class="container">
            <div class="flex-column-centered">
                <h2 class="features-superpeer-series-section-title"><span class="special-text-decoration secondary">Featured <strong class="nowrap-text">Superpeer Series</strong></span></h2>
                <div class="w-dyn-list">
                    <div role="list" class="w-dyn-items">
                        <div role="listitem" class="flex-column-centered w-dyn-item">
                            <div class="featured-frame move-up-on-scroll">
                                <div class="featured-frame-body"><img height="467" loading="lazy" width="834" src="https://assets.website-files.com/60f070302df82b4bb19e42f6/60f15567c7799ef9a2fc29bf_60f05dbf1d8b777df07783bb_series-v3-09.jpeg" alt="Q&amp;A with a Professional Photographer"
                                        class="featured-frame-image" /></div>
                                <div class="featured-frame-frame"><img src="https://assets.website-files.com/60f05dbf1d8b772819778341/60f05dbf1d8b77670577836a_featured-frame-blink.svg" loading="lazy" alt="" class="featured-frame-blink" /></div>
                            </div>
                            <div class="features-superpeer-series-section-overlap">
                                <div class="flex-column-centered">
                                    <div data-tooltip=".tooltip-content" data-theme="light" data-interactive="true" data-delay="[0,300]" class="avatar-v2 _72px _64px-on-phone-landscape mb-5"><img height="72" loading="lazy" width="72" src="https://assets.website-files.com/60f070302df82b4bb19e42f6/60f148b765edf93d6811557b_60f05dbf1d8b77f6dd77838a_avatar-adam-katz-sinding.jpeg" alt="Adam Katz Sinding" class="avatar-v2-image"
                                        />
                                        <div class="hidden">
                                            <div class="tooltip-content">
                                                <div class="profile-card">
                                                    <div class="profile-card-header"><a href="https://superpeer.com/aks" target="_blank" class="avatar-v2 _56px w-inline-block"><img height="64" loading="lazy" width="64" src="https://assets.website-files.com/60f070302df82b4bb19e42f6/60f148b765edf93d6811557b_60f05dbf1d8b77f6dd77838a_avatar-adam-katz-sinding.jpeg" alt="Adam Katz Sinding" class="avatar-v2-image" /><div class="avatar-badge small w-embed"><svg width="1em" height="1em" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M15.48 14.9c-.63-.13-1.23-.28-1.74-.38l-.84-.18.1-.87.01-.12c0-.2-.03-.36-.1-.54l-.2-.46.27-.43c.16-.26.23-.54.23-.87 0-.35-.1-.65-.29-.9l-.33-.45.22-.52c.09-.2.13-.42.13-.63 0-.3 0-1.21-1.42-1.76a4.8 4.8 0 00-1.35-.23l-1.54-.1.73-1.33c.59-1.07.92-2.03.92-2.7 0-.62-.2-1.17-.66-1.35-1.6-.7-2.73.38-3.53 1.7a48.01 48.01 0 00-1.94 3.48c-1.05 2.22-2.6 3.81-2.6 6.02 0 2.01 1.35 3.6 3.82 4.43C8.4 17.73 12.92 18 14.89 18c1.41 0 2.19-.55 2.19-1.55 0-1.05-1-1.42-1.6-1.55z" fill="#FFD338" />
<path d="M14.85 14l-3.05-.65c.25-.18.5-.54.5-.98 0-.52-.27-.82-.48-.98.29-.21.67-.6.67-1.3 0-.77-.51-1.16-.79-1.34.22-.2.52-.6.52-1.17 0-.99-.76-1.43-1.38-1.68a7.87 7.87 0 00-2.28-.25c-1.37 0-2.6.1-3.2.1-.7 0-.61-.36-.35-.7.16-.18 2.15-2.81 2.53-3.28.26-.35.56-.68.79-.55.24.13.14.73-.12 1.4-.39 1.03-.93 1.69-1.06 1.92l.92.56c.36-.45 1.52-2.39 1.52-3.64C9.6.9 9.38.43 8.96.17a1.37 1.37 0 00-1.42.06c-.32.19-.64.46-.9.8L3.82 4.6c-.8 1.05-.43 2.34 1.28 2.34.6 0 2.57-.15 3.33-.15.88 0 1.3.05 1.61.1.58.08.9.34.9.68 0 .24-.1.42-.31.56-.2.14-.39.36-.39.66 0 .36.33.5.55.65.29.18.46.31.46.62 0 .27-.2.43-.43.6-.19.14-.43.3-.43.63 0 .3.21.45.35.56.15.12.3.25.3.49s-.1.36-.4.53c-.23.13-.56.37-.56.72 0 .39.28.56.6.65l3.96.87c.26.06.52.15.52.36 0 .22-.35.32-.84.32-1.7 0-6.4-.35-9.18-1.31-1.88-.63-2.91-1.8-2.91-3.19 0-1.2.8-2.28 1.68-2.9l-.8-.8A4.69 4.69 0 001 11.31c0 1.7 1 3.42 3.78 4.35 2.94 1 7.41 1.3 9.5 1.3 1.42 0 2.1-.6 2.1-1.48 0-.85-.7-1.31-1.53-1.48z" fill="#222" />
</svg></div></a>
                                                        <div class="profile-card-subscribe"><a href="https://superpeer.com/aks" class="button button-bordered blue button-small w-button">Subscribe</a></div>
                                                    </div>
                                                    <div class="profile-card-body">
                                                        <div class="profile-card-info"><a href="https://superpeer.com/aks" target="_blank" class="profile-card-title">Adam Katz Sinding</a>
                                                            <div class="profile-card-location">
                                                                <div class="profile-card-location-icon w-embed"><svg width="1em" height="1em" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10.5 5c0 3.5-4.5 6.5-4.5 6.5S1.5 8.5 1.5 5a4.5 4.5 0 019 0z" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" /><path d="M6 6.5a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" /></svg></div>
                                                                <div
                                                                    class="profile-card-location-text">Copenhagen, Denmark</div>
                                                        </div>
                                                        <div class="profile-card-bio">This is NOT a fucking &quot;Street Style Superpeer&quot;!</div>
                                                    </div>
                                                    <div class="profile-card-social-profiles">
                                                        <div class="social-profile-list">
                                                            <a href="https://twitter.com/le21eme" target="_blank" class="social-profile-list-item w-inline-block">
                                                                <div class="social-profile-list-icon twitter w-embed"><svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13.97 2.67c-.52.23-1.08.38-1.65.45a2.9 2.9 0 001.27-1.6c-.56.33-1.17.57-1.83.7a2.87 2.87 0 00-4.89 2.61A8.13 8.13 0 01.96 1.84a2.87 2.87 0 00.89 3.83c-.46 0-.9-.13-1.3-.35v.03a2.87 2.87 0 002.3 2.82c-.42.11-.87.13-1.3.05a2.88 2.88 0 002.7 2A5.76 5.76 0 010 11.4a8.16 8.16 0 004.4 1.29c5.29 0 8.17-4.37 8.17-8.16v-.37A5.8 5.8 0 0014 2.68l-.03-.01z" fill="#1DA1F2" /></svg></div>
                                                                <div
                                                                    class="social-profile-list-title">le21eme</div>
                                                        </a>
                                                        <div class="social-profile-list-inline-items">
                                                            <a href="#" class="social-profile-list-item inline w-inline-block w-condition-invisible">
                                                                <div class="social-profile-list-icon inline youtube w-embed"><svg width="1em" height="1em" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M11.91 2.84c.55.15.97.58 1.12 1.12.26.99.26 3.05.26 3.05s0 2.06-.26 3.05c-.15.54-.57.95-1.12 1.1-.98.26-4.91.26-4.91.26s-3.93 0-4.91-.26a1.56 1.56 0 01-1.12-1.1C.71 9.06.71 7 .71 7s0-2.06.26-3.05c.15-.54.57-.97 1.12-1.12C3.07 2.58 7 2.58 7 2.58s3.93 0 4.91.26zm-6.2 2.3v3.74L9.01 7 5.7 5.14z" fill="red" /></svg></div>
                                                            </a>
                                                            <a href="#" class="social-profile-list-item inline w-inline-block w-condition-invisible">
                                                                <div class="social-profile-list-icon inline instagram w-embed"><svg width="1em" height="1em" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M11.58 3.26a.84.84 0 11-1.68 0 .84.84 0 011.68 0zM7 9.33a2.33 2.33 0 110-4.66 2.33 2.33 0 010 4.66zm0-5.92a3.6 3.6 0 100 7.18 3.6 3.6 0 000-7.18zm0-2.15c1.87 0 2.09 0 2.83.04.68.03 1.05.15 1.3.24.33.13.56.28.8.53.25.24.4.47.53.8.1.25.2.62.24 1.3.03.74.04.96.04 2.83s0 2.1-.04 2.83a3.87 3.87 0 01-.24 1.3c-.13.33-.28.56-.53.8-.24.25-.47.4-.8.53-.25.1-.62.2-1.3.24-.74.03-.96.04-2.83.04s-2.1 0-2.83-.04a3.87 3.87 0 01-1.3-.24 2.17 2.17 0 01-.8-.53c-.25-.24-.4-.47-.53-.8-.1-.25-.2-.62-.24-1.3-.03-.74-.04-.96-.04-2.83s0-2.09.04-2.83c.03-.68.15-1.05.24-1.3.13-.32.28-.56.53-.8.24-.25.47-.4.8-.53.25-.1.62-.2 1.3-.24.74-.03.96-.04 2.83-.04zM7 0C5.1 0 4.86 0 4.11.04c-.74.04-1.25.15-1.7.33-.46.18-.85.42-1.24.8-.38.4-.62.78-.8 1.24-.18.45-.3.96-.33 1.7C.01 4.86 0 5.1 0 7c0 1.9 0 2.14.04 2.89.04.74.15 1.25.33 1.7.18.46.42.85.8 1.24.4.38.78.62 1.24.8.45.18.96.3 1.7.33.75.03.99.04 2.89.04 1.9 0 2.14 0 2.89-.04a5.14 5.14 0 001.7-.33c.46-.18.85-.42 1.24-.8.38-.4.62-.78.8-1.24.18-.45.3-.96.33-1.7.03-.75.04-.99.04-2.89 0-1.9 0-2.14-.04-2.89a5.14 5.14 0 00-.33-1.7 3.43 3.43 0 00-.8-1.24 3.43 3.43 0 00-1.24-.8c-.45-.18-.96-.3-1.7-.33C9.14.01 8.9 0 7 0z" fill="#e95950" /></svg></div>
                                                            </a>
                                                            <a href="#" class="social-profile-list-item inline w-inline-block w-condition-invisible">
                                                                <div class="social-profile-list-icon inline twitch w-embed"><svg width="1em" height="1em" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.7.46L.88 2.9v9h3.27v1.63h1.63l1.63-1.63h2.44l3.27-3.49V.46H1.7zm10.6 7.36l-2.28 2.45h-2.9l-1.75 1.28v-1.28H2.5v-9h9.8v6.55z" fill="#7743D4" /><path d="M7.4 3.73h-.8V7h.8V3.73zM9.85 3.73h-.81V7h.81V3.73z" fill="#7743D4" /></svg></div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-with-icon mb-4">
                                <div class="text-with-icon-icon mb-1 w-embed"><svg width="1em" height="1em" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
<path clip-rule="evenodd" d="M10.34 9.6a.97.97 0 00-.9.03.86.86 0 00-.44.74v4.25c0 .31.17.6.44.75.28.16.61.17.9.04l3.99-1.89a1.12 1.12 0 000-2.05L10.34 9.6z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
<rect x="4.5" y="3.5" width="15" height="18" rx=".78" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
<path d="M1.93 5.75a1.2 1.2 0 00-1.18 1.2v11.1a1.2 1.2 0 001.18 1.2M22.07 5.75a1.2 1.2 0 011.18 1.2v11.1a1.2 1.2 0 01-1.18 1.2" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
</svg></div>
                                <h3 class="text-with-icon-text">Q&amp;A with a Professional Photographer</h3>
                            </div>
                            <div class="separator mb-4"></div>
                            <p class="features-superpeer-series-section-description">Being a photographer isn&#x27;t just a job. Let&#x27;s delve into real examples of how photography has changed lives and shaped the world. Whether you&#x27;ve been creating photos for years or weeks, we all have some similar
                                feelings when we get behind a lens.</p>
                            <div class="features-superpeer-series-section-meta-grid">
                                <div class="meta vertical centered">
                                    <div class="meta-label small">taught by</div><a href="https://superpeer.com/aks" class="meta-value silent-hover">Adam Katz Sinding</a></div>
                                <div class="meta vertical centered">
                                    <div class="meta-label small">starts</div>
                                    <div class="meta-value">October 2021</div>
                                </div>
                            </div>
                            <div class="flex centered move-up-on-scroll relative w-condition-invisible">
                                <a href="#" class="button button-secondary button-large w-inline-block">
                                    <div class="uppercase mr-2">Explore</div>
                                    <div class="icon _24px w-embed"><svg width="1em" height="1em" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M23.25 12.5H.75M19.5 16.25l3.75-3.75-3.75-3.75" stroke="#222" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
</svg></div>
                                </a>
                            </div>
                            <div data-tooltip=".notify-form" data-delay="[0, 300]" class="flex centered move-up-on-scroll relative" data-trigger-target-selector=".button" data-arrow="false" data-theme="light large" data-trigger="click" data-max-width="464"
                                data-interactive="true"><a href="#" class="button button-large button-secondary uppercase nowrap-text">Notify Me</a>
                                <div class="hidden">
                                    <div class="notify-form">
                                        <div class="notify-form-header">
                                            <div class="notify-form-title">Get notified when the series registrations open</div>
                                            <a data-dismiss="tooltip" href="#" class="notify-form-close w-inline-block">
                                                <div class="notify-form-close-icon w-embed"><svg width="1em" height="1em" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M17.89 16l5.72-5.72a1.33 1.33 0 10-1.89-1.89L16 14.11 10.28 8.4a1.33 1.33 0 10-1.89 1.89L14.11 16 8.4 21.72a1.33 1.33 0 101.89 1.89L16 17.89l5.72 5.72a1.33 1.33 0 001.89 0c.52-.52.52-1.36 0-1.89L17.89 16z" fill="currentcolor" /></svg></div>
                                            </a>
                                        </div>
                                        <div class="notify-form-body">
                                            <div class="notify-form-form w-form">
                                                <form id="wf-form-Notify-Me-Form" name="wf-form-Notify-Me-Form" data-name="Notify Me Form">
                                                    <div class="field-group"><label for="Email-4" class="field-label">Your email</label><input type="email" class="text-field w-input" maxlength="256" name="Email" data-name="Email" placeholder="" id="Email" required="" /></div>
                                                    <div
                                                        class="button-block"><input type="submit" value="Notify Me" data-wait="Please wait..." class="button button-primary button-large uppercase button-block w-button" /></div>
                                            <div class="hidden">
                                                <div data-convert-to-hidden="SerieID">10</div>
                                                <div data-convert-to-hidden="SerieName">Q&amp;A with a Professional Photographer</div>
                                                <div data-convert-to-hidden="SerieLink" class="w-dyn-bind-empty"></div>
                                                <div data-convert-to-hidden="HostName">Adam Katz Sinding</div>
                                                <div data-convert-to-hidden="HostLink">https://superpeer.com/aks</div>
                                            </div>
                                            </form>
                                            <div class="success-message-v2 w-form-done">
                                                <div class="success-message-v2-body">
                                                    <div class="success-message-v2-icon w-embed"><svg width="1em" height="1em" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M29.67 15.71c0-.76-.6-1.37-1.34-1.37-.74 0-1.33.62-1.33 1.38 0 2.94-1.1 5.7-3.1 7.79-2.01 2.08-4.69 3.23-7.54 3.24h-.03c-2.84 0-5.5-1.14-7.52-3.2a11.1 11.1 0 01-3.14-7.77c-.01-2.94 1.09-5.7 3.1-7.79a10.44 10.44 0 0110.07-2.93c.72.17 1.44-.28 1.61-1.02a1.38 1.38 0 00-.98-1.66 13.05 13.05 0 00-12.6 3.67A13.88 13.88 0 003 15.8c.01 3.67 1.4 7.12 3.93 9.71 2.52 2.58 5.86 4 9.4 4h.04c3.56-.01 6.9-1.45 9.42-4.05a13.88 13.88 0 003.88-9.74zm-16.4-.93a1.3 1.3 0 00-1.88 0 1.4 1.4 0 000 1.94l4 4.13c.25.26.59.4.94.4h.05c.37-.01.71-.18.96-.47l9.33-11a1.4 1.4 0 00-.12-1.94 1.3 1.3 0 00-1.89.13l-8.4 9.9-2.98-3.1z" fill="currentcolor" /></svg></div>
                                                    <div
                                                        class="success-message-v2-text">Success</div>
                                            </div>
                                        </div>
                                        <div class="error-message-v2 w-form-fail">
                                            <div class="error-message-v2-body">
                                                <div class="error-message-v2-icon w-embed"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M8 4.67A.67.67 0 108 6a.67.67 0 000-1.33zm0 2c-.37 0-.67.3-.67.66v3.34a.67.67 0 001.34 0V7.33c0-.36-.3-.66-.67-.66zM2.67 8a5.34 5.34 0 1010.68-.01A5.34 5.34 0 002.67 8zM1.33 8a6.67 6.67 0 1113.34 0A6.67 6.67 0 011.33 8z" fill="currentcolor" /></svg></div>
                                                <div
                                                    class="error-message-v2-text">Something went wrong. Please try again.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="services-section wf-section">
        <div class="wave-background">
            <div class="wave-background-inner">
                <div class="wrapper">
                    <div class="container">
                        <div class="services-section-body">
                            <div class="services-section-part-1 move-up-on-scroll">
                                <div class="flex-column-centered container">
                                    <h2><span class="block-on-phone-landscape">What can</span> <span class="block-on-phone-landscape">Superpeer do</span> for you?</h2>
                                    <p class="lead-alternate fixed-614 mobile-fixed-400 mb-0">Turn your audience into loyal, paying followers with our seamless video experience and subscriber management tools.<br /></p>
                                </div>
                            </div>
                            <div class="services-section-part-2">
                                <div class="service-boxes">
                                    <div id="w-node-cf36a50e-bfb3-c4d2-699b-e27be06dbed3-17b7ac3b" class="service-boxes-item move-up-on-scroll">
                                        <div class="flex-column-centered"><img src="https://assets.website-files.com/60f05dbf1d8b772819778341/60f05dbf1d8b77898e77835f_service-figure-01.png" loading="lazy" width="244" height="206" alt="" class="mb-5" />
                                            <h3 class="mb-3">Engage with your audience</h3>
                                            <p class="fixed-282">Connect with your subscribers through interactive livestreams, 1:1s, and our newest feature, Series.</p>
                                        </div>
                                    </div>
                                    <div class="service-boxes-item move-up-on-scroll">
                                        <div class="flex-column-centered"><img src="https://assets.website-files.com/60f05dbf1d8b772819778341/60f05dbf1d8b7701fa778361_service-figure-02.png" loading="lazy" width="244" height="206" alt="" class="mb-5" />
                                            <h3 class="mb-3">Manage easier</h3>
                                            <p class="fixed-282">We take care of scheduling, payments, and protecting your privacy, so that you don’t have to.</p>
                                        </div>
                                    </div>
                                    <div class="service-boxes-item move-up-on-scroll">
                                        <div class="flex-column-centered"><img src="https://assets.website-files.com/60f05dbf1d8b772819778341/60f05dbf1d8b777540778360_service-figure-03.png" loading="lazy" width="244" height="206" alt="" class="mb-5" />
                                            <h3 class="mb-3"><strong>Earn, your way</strong></h3>
                                            <p class="fixed-282">Set your own rates and earn revenue through weekly livestreams, channel subscriptions, and even donations.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="services-section-part-3 move-up-on-scroll">
                                <div class="flex-column-centered">
                                    <a href="/features" class="button button-secondary button-large w-inline-block">
                                        <div class="uppercase mr-2">All Features</div>
                                        <div class="icon _24px w-embed"><svg width="1em" height="1em" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M23.25 12.5H.75M19.5 16.25l3.75-3.75-3.75-3.75" stroke="#222" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
</svg></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wave-background-wave w-embed"><svg preserveAspectRatio="none" width="100%" height="53" viewBox="0 0 1440 53" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M0 36.2V0h1440v39.46c-20.05-2.19-43.76-5.94-71.65-11.8-145.43-30.56-374.66-6.72-557.2 17.96C682.92 62.96 559.62 46.63 424.2 28.7c-57.34-7.59-116.85-15.47-179.83-21.2C146.2-1.43 61.9 14.8 0 36.2z" fill="currentcolor" /></svg></div>
        </div>
    </div>
    <div class="testimonials-section wf-section">
        <div class="wrapper">
            <div class="container wide">
                <div class="testimonials-section-inner move-up-on-scroll">
                    <div class="container">
                        <div class="flex-column-centered">
                            <div class="testimonials-section-title">
                                <div class="background-wrapper">
                                    <div class="background-inner">
                                        <h2 class="mb-0">Don’t just take our word for it</h2>
                                    </div>
                                    <div class="background overflow-visible"><img src="https://assets.website-files.com/60f05dbf1d8b772819778341/60f05dbf1d8b776d6577837a_testimonial-quote.svg" loading="lazy" alt="" class="background-quote" /></div>
                                </div>
                            </div>
                            <div class="flickity-testimonial-slider-wrapper">
                                <div class="w-dyn-list">
                                    <div id="testimonials-slider" data-flickity="{ &quot;fade&quot;: true, &quot;draggable&quot;: false, &quot;wrapAround&quot;: true, &quot;pageDots&quot;: false, &quot;arrowShape&quot;: &quot;M42.3 16.25L19.6 43.5h74.15a6.25 6.25 0 010 12.5H19.59L42.3 83.25a6.25 6.25 0 11-9.6 8L1.45 53.75c-.17-.2-.28-.43-.4-.65a6.99 6.99 0 00-.3-.57c-.11-.16-.22-.33-.3-.52a6.16 6.16 0 01-.44-2.24v-.01L0 49.75v-.02c0-.77.17-1.52.46-2.24.07-.2.18-.36.28-.52l.16-.26.16-.3c.11-.23.22-.46.39-.66L32.7 8.25a6.25 6.25 0 119.6 8z&quot; }"
                                        role="list" class="flickity-testimonial-slider w-dyn-items">
                                        <div role="listitem" class="flickity-testimonial-slider-item w-dyn-item">
                                            <div class="testimonial-slider-content">“I love it! Now, with the ability to create streams I will be able to grow my personal brand and online presence in a more meaningful way as I can reach more people than 1:1 calls.”</div>
                                        </div>
                                        <div role="listitem" class="flickity-testimonial-slider-item w-dyn-item">
                                            <div class="testimonial-slider-content">“If you&#x27;re thinking of earning extra money as a mentor, have a look at Superpeer!”</div>
                                        </div>
                                        <div role="listitem" class="flickity-testimonial-slider-item w-dyn-item">
                                            <div class="testimonial-slider-content">“I&#x27;ve been using Superpeer with about 10-12 calls per week, and so far the experience has been flawless.”</div>
                                        </div>
                                        <div role="listitem" class="flickity-testimonial-slider-item w-dyn-item">
                                            <div class="testimonial-slider-content">“It&#x27;s one of my favourite platforms! Not only is the team behind Superpeer super supportive and talented, but the product itself is great to use. I can&#x27;t imagine Superpeer ever going away, thank you
                                                for all you do!”</div>
                                        </div>
                                        <div role="listitem" class="flickity-testimonial-slider-item w-dyn-item">
                                            <div class="testimonial-slider-content">“Superpeer is so fresh and so clean. Loving the incredible design and UX as I set up my first stream on #startups.”</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-dyn-list">
                                    <div data-flickity="{ &quot;draggable&quot;: false, &quot;pageDots&quot;: false, &quot;prevNextButtons&quot;: false, &quot;wrapAround&quot;: true, &quot;asNavFor&quot;: &quot;#testimonials-slider&quot; }" role="list" class="flickity-testimonial-slider-thumbs w-dyn-items">
                                        <div role="listitem" class="flickity-testimonial-slider-thumbs-item w-dyn-item"><img height="64" loading="lazy" width="64" src="https://assets.website-files.com/60f070302df82b4bb19e42f6/60f6b888bb4c9d6006957c2b_avatar-janine-sickmeyer.jpg" alt="Janine Sickmeyer" sizes="40px" srcset="https://assets.website-files.com/60f070302df82b4bb19e42f6/60f6b888bb4c9d6006957c2b_avatar-janine-sickmeyer-p-500.jpeg 500w, https://assets.website-files.com/60f070302df82b4bb19e42f6/60f6b888bb4c9d6006957c2b_avatar-janine-sickmeyer.jpg 800w"
                                                class="flickity-testimonial-slider-thumbs-image" />
                                            <div class="flickity-testimonial-slider-thumbs-text">
                                                <h4 class="flickity-testimonial-slider-thumbs-name">Janine Sickmeyer</h4>
                                                <p class="flickity-testimonial-slider-thumbs-job-title">Tech entrepreneur &amp; Angel investor</p>
                                            </div>
                                        </div>
                                        <div role="listitem" class="flickity-testimonial-slider-thumbs-item w-dyn-item"><img height="64" loading="lazy" width="64" src="https://assets.website-files.com/60f070302df82b4bb19e42f6/60f6b8b370e683673ffd2b3d_avatar-sara-brunettini.jpg" alt="Sara Brunettini" sizes="40px" srcset="https://assets.website-files.com/60f070302df82b4bb19e42f6/60f6b8b370e683673ffd2b3d_avatar-sara-brunettini-p-500.jpeg 500w, https://assets.website-files.com/60f070302df82b4bb19e42f6/60f6b8b370e683673ffd2b3d_avatar-sara-brunettini.jpg 800w"
                                                class="flickity-testimonial-slider-thumbs-image" />
                                            <div class="flickity-testimonial-slider-thumbs-text">
                                                <h4 class="flickity-testimonial-slider-thumbs-name">Sara Brunettini</h4>
                                                <p class="flickity-testimonial-slider-thumbs-job-title">Product Designer at Crunch</p>
                                            </div>
                                        </div>
                                        <div role="listitem" class="flickity-testimonial-slider-thumbs-item w-dyn-item"><img height="64" loading="lazy" width="64" src="https://assets.website-files.com/60f070302df82b4bb19e42f6/60f6b8d3a165595afef78b23_avatar-jose-cayasso.jpg" alt="Jose Cayasso (Caya)" sizes="40px" srcset="https://assets.website-files.com/60f070302df82b4bb19e42f6/60f6b8d3a165595afef78b23_avatar-jose-cayasso-p-500.jpeg 500w, https://assets.website-files.com/60f070302df82b4bb19e42f6/60f6b8d3a165595afef78b23_avatar-jose-cayasso.jpg 800w"
                                                class="flickity-testimonial-slider-thumbs-image" />
                                            <div class="flickity-testimonial-slider-thumbs-text">
                                                <h4 class="flickity-testimonial-slider-thumbs-name">Jose Cayasso (Caya)</h4>
                                                <p class="flickity-testimonial-slider-thumbs-job-title">CEO at Slidebean</p>
                                            </div>
                                        </div>
                                        <div role="listitem" class="flickity-testimonial-slider-thumbs-item w-dyn-item"><img height="64" loading="lazy" width="64" src="https://assets.website-files.com/60f070302df82b4bb19e42f6/60f6b8ea40436d46b8f2d651_avatar-femke.jpg" alt="Femke van Schoonhoven" sizes="40px" srcset="https://assets.website-files.com/60f070302df82b4bb19e42f6/60f6b8ea40436d46b8f2d651_avatar-femke-p-500.jpeg 500w, https://assets.website-files.com/60f070302df82b4bb19e42f6/60f6b8ea40436d46b8f2d651_avatar-femke.jpg 800w"
                                                class="flickity-testimonial-slider-thumbs-image" />
                                            <div class="flickity-testimonial-slider-thumbs-text">
                                                <h4 class="flickity-testimonial-slider-thumbs-name">Femke van Schoonhoven</h4>
                                                <p class="flickity-testimonial-slider-thumbs-job-title">Product Designer at Uber</p>
                                            </div>
                                        </div>
                                        <div role="listitem" class="flickity-testimonial-slider-thumbs-item w-dyn-item"><img height="64" loading="lazy" width="64" src="https://assets.website-files.com/60f070302df82b4bb19e42f6/60f6b904e35277fb3b933e5e_avatar-tristan-pollock.jpg" alt="Tristan Pollock" sizes="40px" srcset="https://assets.website-files.com/60f070302df82b4bb19e42f6/60f6b904e35277fb3b933e5e_avatar-tristan-pollock-p-500.jpeg 500w, https://assets.website-files.com/60f070302df82b4bb19e42f6/60f6b904e35277fb3b933e5e_avatar-tristan-pollock.jpg 800w"
                                                class="flickity-testimonial-slider-thumbs-image" />
                                            <div class="flickity-testimonial-slider-thumbs-text">
                                                <h4 class="flickity-testimonial-slider-thumbs-name">Tristan Pollock</h4>
                                                <p class="flickity-testimonial-slider-thumbs-job-title">Head of Community &amp; Content at CTO</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="superpeer-series-section wf-section">
        <div class="wave-background">
            <div class="wave-background-inner purple">
                <div class="wrapper">
                    <div class="container">
                        <div class="superpeer-series-section-body">
                            <div class="superpeer-series-section-part-1 move-up-on-scroll">
                                <div class="flex-column-centered container">
                                    <h2>Introducing <span class="special-text-decoration nowrap-text">Superpeer Series</span></h2>
                                    <p class="lead-alternate fixed-635 mobile-fixed-400 mb-0">With series, you can create and sell any combination of on-demand video and live stream content. With cohort-based classes you can interact with your audience in a more engaging way.</p>
                                </div>
                            </div>
                            <div class="superpeer-series-section-part-2 move-up-on-scroll">
                                <div class="flex-column-centered"><img src="https://assets.website-files.com/60f05dbf1d8b772819778341/60f05dbf1d8b7718177783b5_superpeer-series-featured-v7.png" loading="lazy" width="878" height="578" alt="" srcset="https://assets.website-files.com/60f05dbf1d8b772819778341/60f05dbf1d8b7718177783b5_superpeer-series-featured-v7-p-800.png 800w, https://assets.website-files.com/60f05dbf1d8b772819778341/60f05dbf1d8b7718177783b5_superpeer-series-featured-v7-p-1080.png 1080w, https://assets.website-files.com/60f05dbf1d8b772819778341/60f05dbf1d8b7718177783b5_superpeer-series-featured-v7.png 1756w"
                                        sizes="(max-width: 479px) 100vw, (max-width: 767px) 92vw, (max-width: 991px) 69vw, 642px" class="superpeer-series-section-image" /></div>
                            </div>
                            <div class="superpeer-series-section-part-3">
                                <div class="service-boxes">
                                    <div id="w-node-_84b4c9c9-e0b8-5fc4-6ad6-a94b7d8d8616-17b7ac3b" class="service-boxes-item move-up-on-scroll">
                                        <div class="flex-column-centered"><img src="https://assets.website-files.com/60f05dbf1d8b772819778341/60f05dbf1d8b777ed2778362_service-figure-04.png" loading="lazy" width="198" height="168" alt="" class="mb-5" />
                                            <h3 class="mb-3">Customize the content</h3>
                                            <p class="fixed-282">Organize your live streams, pre-recorded videos, and hosted events into purchasable content packages for your audience.</p>
                                        </div>
                                    </div>
                                    <div class="service-boxes-item move-up-on-scroll">
                                        <div class="flex-column-centered"><img src="https://assets.website-files.com/60f05dbf1d8b772819778341/60f05dbf1d8b77baa6778364_service-figure-05.png" loading="lazy" width="198" height="168" alt="" class="mb-5" />
                                            <h3 class="mb-3">Set the pace</h3>
                                            <p class="fixed-282">Series can be cohort-based for engaging group discussions or even on-demand for the self-paced learner.</p>
                                        </div>
                                    </div>
                                    <div class="service-boxes-item move-up-on-scroll">
                                        <div class="flex-column-centered"><img src="https://assets.website-files.com/60f05dbf1d8b772819778341/60f05dbf1d8b77422c77837e_service-figure-06-v2.png" loading="lazy" width="225" height="168" alt="" class="mb-5" />
                                            <h3 class="mb-3">Immerse the audience</h3>
                                            <p class="fixed-282">Participants can chat with each other, send private messages, and raise a hand to be brought up on the stage during live events.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wave-background-wave w-embed"><svg preserveAspectRatio="none" width="100%" height="53" viewBox="0 0 1440 53" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M0 36.2V0h1440v39.46c-20.05-2.19-43.76-5.94-71.65-11.8-145.43-30.56-374.66-6.72-557.2 17.96C682.92 62.96 559.62 46.63 424.2 28.7c-57.34-7.59-116.85-15.47-179.83-21.2C146.2-1.43 61.9 14.8 0 36.2z" fill="currentcolor" /></svg></div>
        </div>
    </div>
    <div class="cta-section">
        <div class="background-wrapper">
            <div class="background-inner">
                <div class="cta">
                    <div class="container flex-column-centered"><img src="https://assets.website-files.com/60f05dbf1d8b772819778341/60f05dbf1d8b774015778377_cta-logo.svg" loading="lazy" width="157" height="157" alt="" class="footer-logo" />
                        <h2 class="cta-title move-up-on-scroll"><span class="block-on-mobile">Become</span> a <span class="special-text-decoration primary">Superpeer</span></h2><a href="/register" class="button button-primary button-large uppercase move-up-on-scroll">Create Account</a></div>
                </div>
            </div>
            <div class="background top-left-radius">
                <div class="cta-background"></div>
            </div>
        </div>
    </div>
    @endsection