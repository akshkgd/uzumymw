<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You | Codekaro</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="icon" href="{{ asset('assets/img/chrome-icon.png') }}">
    <meta name="facebook-domain-verification" content="sqxnqkagio33ipi426hafktfp1x76s" />

    <!-- Meta Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,document,'script','https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '606378664796034');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=606378664796034&ev=PageView&noscript=1"/></noscript>
    <!-- End Meta Pixel Code -->

    <!-- Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-HC9ETJV29G"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-HC9ETJV29G');
    </script>

    <!-- Google Sans Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Google+Sans:ital,opsz,wght@0,17..18,400..700;1,17..18,400..700&display=swap" rel="stylesheet">

    <style>
        /* ── Base font ── */
        *, *::before, *::after { box-sizing: border-box; }
        body {
            font-family: "Google Sans", sans-serif;
            font-optical-sizing: auto;
            font-variation-settings: "GRAD" 0;
            margin: 0;
        }

        /* ── Dot-grid background ── */
        .dot-grid {
            background-image: radial-gradient(circle, #e2e8f0 1px, transparent 1px);
            background-size: 28px 28px;
        }

        /* ── Checkmark glow ring ── */
        .check-ring {
            box-shadow: 0 0 0 8px rgba(22,163,74,0.08), 0 0 0 20px rgba(22,163,74,0.04);
        }

        /* ── CTA shimmer ── */
        .btn-cta {
            position: relative;
            overflow: hidden;
        }
        .btn-cta::after {
            content: '';
            position: absolute;
            top: 0; left: -100%;
            width: 60%; height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.28), transparent);
            transform: skewX(-20deg);
            transition: left 0.5s ease;
        }
        .btn-cta:hover::after { left: 160%; }

        /* ── Animations ── */
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(28px); }
            to   { opacity: 1; transform: translateY(0); }
        }
        @keyframes pulseSoft {
            0%, 100% { transform: scale(1); }
            50%       { transform: scale(1.04); }
        }
        @keyframes modalSlideIn {
            from { opacity: 0; transform: translateY(40px); }
            to   { opacity: 1; transform: translateY(0); }
        }

        .anim-1 { animation: fadeInUp 0.65s ease both; }
        .anim-2 { animation: fadeInUp 0.65s 0.14s ease both; }
        .anim-3 { animation: fadeInUp 0.65s 0.28s ease both; }
        .anim-4 { animation: fadeInUp 0.65s 0.42s ease both; }
        .pulse  { animation: pulseSoft 2.6s ease-in-out infinite; }

        /* ── Full-page modal ── */
        #booking-modal {
            position: fixed;
            inset: 0;
            z-index: 9999;
            display: none;
            flex-direction: column;
            background: rgba(0, 0, 0, 0.55);
            backdrop-filter: blur(6px);
            -webkit-backdrop-filter: blur(6px);
        }
        #booking-modal.open {
            display: flex;
        }

        /* Modal panel – full page on mobile, centered card on desktop */
        #modal-panel {
            background: #fff;
            display: flex;
            flex-direction: column;
            width: 100%;
            height: 100%;                       /* full page on mobile */
            overflow: hidden;
            animation: modalSlideIn 0.35s cubic-bezier(0.22, 1, 0.36, 1) both;
        }

        @media (min-width: 768px) {
            #booking-modal {
                align-items: center;
                justify-content: center;
                padding: 24px;
            }
            #modal-panel {
                border-radius: 24px;
                max-width: 960px;
                max-height: 90vh;
                height: auto;
                box-shadow: 0 32px 80px rgba(0,0,0,0.22);
            }
        }

        /* Modal header */
        .modal-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 18px 20px;
            /* border-bottom: 1px solid #f1f5f9; */
            flex-shrink: 0;
        }
        @media (min-width: 768px) {
            .modal-header { padding: 20px 28px; }
        }

        /* Cal.com embed wrapper */
        .cal-wrapper {
            flex: 1;
            overflow: auto;
            -webkit-overflow-scrolling: touch;
        }
        .cal-wrapper::-webkit-scrollbar { width: 5px; }
        .cal-wrapper::-webkit-scrollbar-track { background: #f8fafc; }
        .cal-wrapper::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 999px; }

        #my-cal-inline-apply {
            width: 100%;
            height: 100%;
            min-height: 520px;
        }

        /* Close button */
        .close-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 36px; height: 36px;
            border-radius: 50%;
            background: #f1f5f9;
            border: none;
            cursor: pointer;
            color: #64748b;
            transition: background 0.2s, color 0.2s;
            flex-shrink: 0;
        }
        .close-btn:hover { background: #e2e8f0; color: #1e293b; }
        .close-btn:focus { outline: 2px solid #fb923c; outline-offset: 2px; }
    </style>
</head>

<body class="dot-grid min-h-screen flex flex-col items-center justify-center px-4 py-16 bg-white">

    <!-- ─── Thank-You Section ─── -->
    <div class="relative z-10 flex flex-col items-center text-center max-w-xl w-full">

        <!-- Check icon -->
        <div class="anim-1 mb-7">
            <div class="check-ring inline-flex items-center justify-center w-14 h-14 rounded-full bg-green-500">
                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                </svg>
            </div>
        </div>

        <!-- Headline -->
        <h1 class="anim-2 text-2xl sm:text-2xl font-bold text-neutral-900 leading-tight mb-3">
            You're Almost Done!@auth {{ auth()->user()->name }}@endauth 🎉
        </h1>

        <!-- Sub-copy -->
        <p class="anim-3 text-neutral-500 text-lg leading-relaxed mb-2">
            Claim Your Personalized Roadmap Now!
        </p>
        <p class="anim-3 text-neutral-600 text-base mb-10 max-w-md">
            On this 30-minute strategy call, we’ll understand your goals, challenges, and map out your personalized roadmap to transition into a high-paying full stack role.
        </p>

        <!-- CTA Button -->
        <button
            id="open-booking-btn"
            onclick="openBookingModal()"
            class="btn-cta pulse bg-black hover:bg-neutral-950 text-white font- text-lg px-10 py-4 rounde-2xl shadow-lg hover:shadow-xl transition-all duration-300 focus:outline-none focus:ring-4 focus:ring-orange-300 anim-4"
        >
           Book Your Strategy Call Now
        </button>

        <!-- Micro-copy -->
        <p class="mt-5 text-sm text-gray-400 anim-4 hidden">
            ✅ Free &nbsp;·&nbsp; 30 minutes &nbsp;·&nbsp; No pressure
        </p>
    </div>


    <!-- ─── Full-Page Booking Modal ─── -->
    <div
        id="booking-modal"
        role="dialog"
        aria-modal="true"
        aria-labelledby="modal-title"
    >
        <div id="modal-panel">

            <!-- Header -->
            <div class="modal-header">
                <div>
                    <h2 id="modal-title" class="text-lg font-semibold text-gray-900 leading-tight">
                        Book a Strategy Call
                    </h2>
                    <p class="text-sm text-gray-400 mt-0.5">Pick a slot that works for you</p>
                </div>
                <button
                    id="close-modal-btn"
                    class="close-btn"
                    onclick="closeBookingModal()"
                    aria-label="Close booking modal"
                >
                    <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>

            <!-- Cal.com embed -->
            <div class="cal-wrapper">
                <div id="my-cal-inline-apply"></div>
            </div>

        </div>
    </div>


    <!-- ─── JS ─── -->
    <script>
        const modal      = document.getElementById('booking-modal');
        const modalPanel = document.getElementById('modal-panel');
        let calInitialized = false;

        function openBookingModal() {
            modal.classList.add('open');
            document.body.style.overflow = 'hidden';

            if (!calInitialized) {
                initCalEmbed();
                calInitialized = true;
            }
        }

        function closeBookingModal() {
            // Slide out
            modalPanel.style.transition = 'opacity 0.22s ease, transform 0.22s ease';
            modalPanel.style.opacity    = '0';
            modalPanel.style.transform  = 'translateY(30px)';

            setTimeout(() => {
                modal.classList.remove('open');
                document.body.style.overflow = '';
                // Reset for next open
                modalPanel.style.transition = '';
                modalPanel.style.opacity    = '';
                modalPanel.style.transform  = '';
            }, 230);
        }

        // Close on backdrop (only desktop, where backdrop is visible behind the card)
        modal.addEventListener('click', function (e) {
            if (e.target === modal) closeBookingModal();
        });

        // Close on Escape
        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape' && modal.classList.contains('open')) {
                closeBookingModal();
            }
        });

        function initCalEmbed() {
            (function (C, A, L) {
                let p = function (a, ar) { a.q.push(ar); };
                let d = C.document;
                C.Cal = C.Cal || function () {
                    let cal = C.Cal, ar = arguments;
                    if (!cal.loaded) {
                        cal.ns = {}; cal.q = cal.q || [];
                        d.head.appendChild(d.createElement("script")).src = A;
                        cal.loaded = true;
                    }
                    if (ar[0] === L) {
                        const api = function () { p(api, arguments); };
                        const namespace = ar[1];
                        api.q = api.q || [];
                        if (typeof namespace === "string") {
                            cal.ns[namespace] = cal.ns[namespace] || api;
                            p(cal.ns[namespace], ar);
                            p(cal, ["initNamespace", namespace]);
                        } else p(cal, ar);
                        return;
                    }
                    p(cal, ar);
                };
            })(window, "https://app.cal.com/embed/embed.js", "init");

            Cal("init", "apply", { origin: "https://app.cal.com" });

            Cal.ns.apply("inline", {
                elementOrSelector: "#my-cal-inline-apply",
                config: { "layout": "month_view", "useSlotsViewOnSmallScreen": "true" },
                calLink: "ashish-shukla-ye5ege/apply",
            });

            Cal.ns.apply("ui", {
                "cssVarsPerTheme": { "light": { "cal-brand": "#ea580c" } },
                "hideEventTypeDetails": false,
                "layout": "month_view"
            });
        }
    </script>

</body>
</html>
