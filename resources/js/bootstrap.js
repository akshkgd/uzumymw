window._ = require('lodash');

/**
 * We'll load jQuery and the Bootstrap jQuery plugin which provides support
 * for JavaScript based Bootstrap features such as modals and tabs. This
 * code may be modified to fit the specific needs of your application.
 */

try {
    window.Popper = require('popper.js').default;
    window.$ = window.jQuery = require('jquery');

    require('bootstrap');
} catch (e) {}

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo';

// window.Pusher = require('pusher-js');

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: process.env.MIX_PUSHER_APP_KEY,
//     cluster: process.env.MIX_PUSHER_APP_CLUSTER,
//     forceTLS: true
// });

/*!
 * Bootstrap v4.5.0
 * Copyright 2011-2020 The Bootstrap Authors (https://github.com/twbs/bootstrap/graphs/contributors)
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 */
! function(t, e) {
    "object" == typeof exports && "undefined" != typeof module ? e(exports, require("jquery"), require("popper.js")) : "function" == typeof define && define.amd ? define(["exports", "jquery", "popper.js"], e) : e((t = t || self).bootstrap = {}, t.jQuery, t.Popper)
}(this, function(t, g, u) {
    "use strict";

    function i(t, e) {
        for (var n = 0; n < e.length; n++) {
            var i = e[n];
            i.enumerable = i.enumerable || !1, i.configurable = !0, "value" in i && (i.writable = !0), Object.defineProperty(t, i.key, i)
        }
    }

    function s(t, e, n) {
        return e && i(t.prototype, e), n && i(t, n), t
    }

    function e(e, t) {
        var n = Object.keys(e);
        if (Object.getOwnPropertySymbols) {
            var i = Object.getOwnPropertySymbols(e);
            t && (i = i.filter(function(t) {
                return Object.getOwnPropertyDescriptor(e, t).enumerable
            })), n.push.apply(n, i)
        }
        return n
    }

    function l(o) {
        for (var t = 1; t < arguments.length; t++) {
            var r = null != arguments[t] ? arguments[t] : {};
            t % 2 ? e(Object(r), !0).forEach(function(t) {
                var e, n, i;
                e = o, i = r[n = t], n in e ? Object.defineProperty(e, n, {
                    value: i,
                    enumerable: !0,
                    configurable: !0,
                    writable: !0
                }) : e[n] = i
            }) : Object.getOwnPropertyDescriptors ? Object.defineProperties(o, Object.getOwnPropertyDescriptors(r)) : e(Object(r)).forEach(function(t) {
                Object.defineProperty(o, t, Object.getOwnPropertyDescriptor(r, t))
            })
        }
        return o
    }
    g = g && Object.prototype.hasOwnProperty.call(g, "default") ? g.default : g, u = u && Object.prototype.hasOwnProperty.call(u, "default") ? u.default : u;
    var n = "transitionend";

    function o(t) {
        var e = this,
            n = !1;
        return g(this).one(m.TRANSITION_END, function() {
            n = !0
        }), setTimeout(function() {
            n || m.triggerTransitionEnd(e)
        }, t), this
    }
    var m = {
        TRANSITION_END: "bsTransitionEnd",
        getUID: function(t) {
            for (; t += ~~(1e6 * Math.random()), document.getElementById(t););
            return t
        },
        getSelectorFromElement: function(t) {
            var e = t.getAttribute("data-target");
            if (!e || "#" === e) {
                var n = t.getAttribute("href");
                e = n && "#" !== n ? n.trim() : ""
            }
            try {
                return document.querySelector(e) ? e : null
            } catch (t) {
                return null
            }
        },
        getTransitionDurationFromElement: function(t) {
            if (!t) return 0;
            var e = g(t).css("transition-duration"),
                n = g(t).css("transition-delay"),
                i = parseFloat(e),
                o = parseFloat(n);
            return i || o ? (e = e.split(",")[0], n = n.split(",")[0], 1e3 * (parseFloat(e) + parseFloat(n))) : 0
        },
        reflow: function(t) {
            return t.offsetHeight
        },
        triggerTransitionEnd: function(t) {
            g(t).trigger(n)
        },
        supportsTransitionEnd: function() {
            return Boolean(n)
        },
        isElement: function(t) {
            return (t[0] || t).nodeType
        },
        typeCheckConfig: function(t, e, n) {
            for (var i in n)
                if (Object.prototype.hasOwnProperty.call(n, i)) {
                    var o = n[i],
                        r = e[i],
                        s = r && m.isElement(r) ? "element" : null == (a = r) ? "" + a : {}.toString.call(a).match(/\s([a-z]+)/i)[1].toLowerCase();
                    if (!new RegExp(o).test(s)) throw new Error(t.toUpperCase() + ': Option "' + i + '" provided type "' + s + '" but expected type "' + o + '".')
                }
            var a
        },
        findShadowRoot: function(t) {
            if (!document.documentElement.attachShadow) return null;
            if ("function" != typeof t.getRootNode) return t instanceof ShadowRoot ? t : t.parentNode ? m.findShadowRoot(t.parentNode) : null;
            var e = t.getRootNode();
            return e instanceof ShadowRoot ? e : null
        },
        jQueryDetection: function() {
            if (void 0 === g) throw new TypeError("Bootstrap's JavaScript requires jQuery. jQuery must be included before Bootstrap's JavaScript.");
            var t = g.fn.jquery.split(" ")[0].split(".");
            if (t[0] < 2 && t[1] < 9 || 1 === t[0] && 9 === t[1] && t[2] < 1 || 4 <= t[0]) throw new Error("Bootstrap's JavaScript requires at least jQuery v1.9.1 but less than v4.0.0")
        }
    };
    m.jQueryDetection(), g.fn.emulateTransitionEnd = o, g.event.special[m.TRANSITION_END] = {
        bindType: n,
        delegateType: n,
        handle: function(t) {
            if (g(t.target).is(this)) return t.handleObj.handler.apply(this, arguments)
        }
    };
    var r = "alert",
        a = "bs.alert",
        c = g.fn[r],
        h = function() {
            function i(t) {
                this._element = t
            }
            var t = i.prototype;
            return t.close = function(t) {
                var e = this._element;
                t && (e = this._getRootElement(t)), this._triggerCloseEvent(e).isDefaultPrevented() || this._removeElement(e)
            }, t.dispose = function() {
                g.removeData(this._element, a), this._element = null
            }, t._getRootElement = function(t) {
                var e = m.getSelectorFromElement(t),
                    n = !1;
                return e && (n = document.querySelector(e)), n || (n = g(t).closest(".alert")[0]), n
            }, t._triggerCloseEvent = function(t) {
                var e = g.Event("close.bs.alert");
                return g(t).trigger(e), e
            }, t._removeElement = function(e) {
                var n = this;
                if (g(e).removeClass("show"), g(e).hasClass("fade")) {
                    var t = m.getTransitionDurationFromElement(e);
                    g(e).one(m.TRANSITION_END, function(t) {
                        return n._destroyElement(e, t)
                    }).emulateTransitionEnd(t)
                } else this._destroyElement(e)
            }, t._destroyElement = function(t) {
                g(t).detach().trigger("closed.bs.alert").remove()
            }, i._jQueryInterface = function(n) {
                return this.each(function() {
                    var t = g(this),
                        e = t.data(a);
                    e || (e = new i(this), t.data(a, e)), "close" === n && e[n](this)
                })
            }, i._handleDismiss = function(e) {
                return function(t) {
                    t && t.preventDefault(), e.close(this)
                }
            }, s(i, null, [{
                key: "VERSION",
                get: function() {
                    return "4.5.0"
                }
            }]), i
        }();
    g(document).on("click.bs.alert.data-api", '[data-dismiss="alert"]', h._handleDismiss(new h)), g.fn[r] = h._jQueryInterface, g.fn[r].Constructor = h, g.fn[r].noConflict = function() {
        return g.fn[r] = c, h._jQueryInterface
    };
    var f = "button",
        d = "bs.button",
        _ = g.fn[f],
        p = "active",
        v = '[data-toggle^="button"]',
        y = 'input:not([type="hidden"])',
        b = ".btn",
        E = function() {
            function n(t) {
                this._element = t
            }
            var t = n.prototype;
            return t.toggle = function() {
                var t = !0,
                    e = !0,
                    n = g(this._element).closest('[data-toggle="buttons"]')[0];
                if (n) {
                    var i = this._element.querySelector(y);
                    if (i) {
                        if ("radio" === i.type)
                            if (i.checked && this._element.classList.contains(p)) t = !1;
                            else {
                                var o = n.querySelector(".active");
                                o && g(o).removeClass(p)
                            }
                        t && ("checkbox" !== i.type && "radio" !== i.type || (i.checked = !this._element.classList.contains(p)), g(i).trigger("change")), i.focus(), e = !1
                    }
                }
                this._element.hasAttribute("disabled") || this._element.classList.contains("disabled") || (e && this._element.setAttribute("aria-pressed", !this._element.classList.contains(p)), t && g(this._element).toggleClass(p))
            }, t.dispose = function() {
                g.removeData(this._element, d), this._element = null
            }, n._jQueryInterface = function(e) {
                return this.each(function() {
                    var t = g(this).data(d);
                    t || (t = new n(this), g(this).data(d, t)), "toggle" === e && t[e]()
                })
            }, s(n, null, [{
                key: "VERSION",
                get: function() {
                    return "4.5.0"
                }
            }]), n
        }();
    g(document).on("click.bs.button.data-api", v, function(t) {
        var e = t.target,
            n = e;
        if (g(e).hasClass("btn") || (e = g(e).closest(b)[0]), !e || e.hasAttribute("disabled") || e.classList.contains("disabled")) t.preventDefault();
        else {
            var i = e.querySelector(y);
            if (i && (i.hasAttribute("disabled") || i.classList.contains("disabled"))) return void t.preventDefault();
            "LABEL" === n.tagName && i && "checkbox" === i.type && t.preventDefault(), E._jQueryInterface.call(g(e), "toggle")
        }
    }).on("focus.bs.button.data-api blur.bs.button.data-api", v, function(t) {
        var e = g(t.target).closest(b)[0];
        g(e).toggleClass("focus", /^focus(in)?$/.test(t.type))
    }), g(window).on("load.bs.button.data-api", function() {
        for (var t = [].slice.call(document.querySelectorAll('[data-toggle="buttons"] .btn')), e = 0, n = t.length; e < n; e++) {
            var i = t[e],
                o = i.querySelector(y);
            o.checked || o.hasAttribute("checked") ? i.classList.add(p) : i.classList.remove(p)
        }
        for (var r = 0, s = (t = [].slice.call(document.querySelectorAll('[data-toggle="button"]'))).length; r < s; r++) {
            var a = t[r];
            "true" === a.getAttribute("aria-pressed") ? a.classList.add(p) : a.classList.remove(p)
        }
    }), g.fn[f] = E._jQueryInterface, g.fn[f].Constructor = E, g.fn[f].noConflict = function() {
        return g.fn[f] = _, E._jQueryInterface
    };
    var w = "carousel",
        T = "bs.carousel",
        C = "." + T,
        S = g.fn[w],
        D = {
            interval: 5e3,
            keyboard: !0,
            slide: !1,
            pause: "hover",
            wrap: !0,
            touch: !0
        },
        N = {
            interval: "(number|boolean)",
            keyboard: "boolean",
            slide: "(boolean|string)",
            pause: "(string|boolean)",
            wrap: "boolean",
            touch: "boolean"
        },
        k = "next",
        A = "prev",
        I = "slid" + C,
        O = "active",
        j = ".active.carousel-item",
        P = {
            TOUCH: "touch",
            PEN: "pen"
        },
        x = function() {
            function r(t, e) {
                this._items = null, this._interval = null, this._activeElement = null, this._isPaused = !1, this._isSliding = !1, this.touchTimeout = null, this.touchStartX = 0, this.touchDeltaX = 0, this._config = this._getConfig(e), this._element = t, this._indicatorsElement = this._element.querySelector(".carousel-indicators"), this._touchSupported = "ontouchstart" in document.documentElement || 0 < navigator.maxTouchPoints, this._pointerEvent = Boolean(window.PointerEvent || window.MSPointerEvent), this._addEventListeners()
            }
            var t = r.prototype;
            return t.next = function() {
                this._isSliding || this._slide(k)
            }, t.nextWhenVisible = function() {
                !document.hidden && g(this._element).is(":visible") && "hidden" !== g(this._element).css("visibility") && this.next()
            }, t.prev = function() {
                this._isSliding || this._slide(A)
            }, t.pause = function(t) {
                t || (this._isPaused = !0), this._element.querySelector(".carousel-item-next, .carousel-item-prev") && (m.triggerTransitionEnd(this._element), this.cycle(!0)), clearInterval(this._interval), this._interval = null
            }, t.cycle = function(t) {
                t || (this._isPaused = !1), this._interval && (clearInterval(this._interval), this._interval = null), this._config.interval && !this._isPaused && (this._interval = setInterval((document.visibilityState ? this.nextWhenVisible : this.next).bind(this), this._config.interval))
            }, t.to = function(t) {
                var e = this;
                this._activeElement = this._element.querySelector(j);
                var n = this._getItemIndex(this._activeElement);
                if (!(t > this._items.length - 1 || t < 0))
                    if (this._isSliding) g(this._element).one(I, function() {
                        return e.to(t)
                    });
                    else {
                        if (n === t) return this.pause(), void this.cycle();
                        var i = n < t ? k : A;
                        this._slide(i, this._items[t])
                    }
            }, t.dispose = function() {
                g(this._element).off(C), g.removeData(this._element, T), this._items = null, this._config = null, this._element = null, this._interval = null, this._isPaused = null, this._isSliding = null, this._activeElement = null, this._indicatorsElement = null
            }, t._getConfig = function(t) {
                return t = l(l({}, D), t), m.typeCheckConfig(w, t, N), t
            }, t._handleSwipe = function() {
                var t = Math.abs(this.touchDeltaX);
                if (!(t <= 40)) {
                    var e = t / this.touchDeltaX;
                    (this.touchDeltaX = 0) < e && this.prev(), e < 0 && this.next()
                }
            }, t._addEventListeners = function() {
                var e = this;
                this._config.keyboard && g(this._element).on("keydown.bs.carousel", function(t) {
                    return e._keydown(t)
                }), "hover" === this._config.pause && g(this._element).on("mouseenter.bs.carousel", function(t) {
                    return e.pause(t)
                }).on("mouseleave.bs.carousel", function(t) {
                    return e.cycle(t)
                }), this._config.touch && this._addTouchEventListeners()
            }, t._addTouchEventListeners = function() {
                var e = this;
                if (this._touchSupported) {
                    var n = function(t) {
                            e._pointerEvent && P[t.originalEvent.pointerType.toUpperCase()] ? e.touchStartX = t.originalEvent.clientX : e._pointerEvent || (e.touchStartX = t.originalEvent.touches[0].clientX)
                        },
                        i = function(t) {
                            e._pointerEvent && P[t.originalEvent.pointerType.toUpperCase()] && (e.touchDeltaX = t.originalEvent.clientX - e.touchStartX), e._handleSwipe(), "hover" === e._config.pause && (e.pause(), e.touchTimeout && clearTimeout(e.touchTimeout), e.touchTimeout = setTimeout(function(t) {
                                return e.cycle(t)
                            }, 500 + e._config.interval))
                        };
                    g(this._element.querySelectorAll(".carousel-item img")).on("dragstart.bs.carousel", function(t) {
                        return t.preventDefault()
                    }), this._pointerEvent ? (g(this._element).on("pointerdown.bs.carousel", function(t) {
                        return n(t)
                    }), g(this._element).on("pointerup.bs.carousel", function(t) {
                        return i(t)
                    }), this._element.classList.add("pointer-event")) : (g(this._element).on("touchstart.bs.carousel", function(t) {
                        return n(t)
                    }), g(this._element).on("touchmove.bs.carousel", function(t) {
                        return function(t) {
                            t.originalEvent.touches && 1 < t.originalEvent.touches.length ? e.touchDeltaX = 0 : e.touchDeltaX = t.originalEvent.touches[0].clientX - e.touchStartX
                        }(t)
                    }), g(this._element).on("touchend.bs.carousel", function(t) {
                        return i(t)
                    }))
                }
            }, t._keydown = function(t) {
                if (!/input|textarea/i.test(t.target.tagName)) switch (t.which) {
                    case 37:
                        t.preventDefault(), this.prev();
                        break;
                    case 39:
                        t.preventDefault(), this.next()
                }
            }, t._getItemIndex = function(t) {
                return this._items = t && t.parentNode ? [].slice.call(t.parentNode.querySelectorAll(".carousel-item")) : [], this._items.indexOf(t)
            }, t._getItemByDirection = function(t, e) {
                var n = t === k,
                    i = t === A,
                    o = this._getItemIndex(e),
                    r = this._items.length - 1;
                if ((i && 0 === o || n && o === r) && !this._config.wrap) return e;
                var s = (o + (t === A ? -1 : 1)) % this._items.length;
                return -1 == s ? this._items[this._items.length - 1] : this._items[s]
            }, t._triggerSlideEvent = function(t, e) {
                var n = this._getItemIndex(t),
                    i = this._getItemIndex(this._element.querySelector(j)),
                    o = g.Event("slide.bs.carousel", {
                        relatedTarget: t,
                        direction: e,
                        from: i,
                        to: n
                    });
                return g(this._element).trigger(o), o
            }, t._setActiveIndicatorElement = function(t) {
                if (this._indicatorsElement) {
                    var e = [].slice.call(this._indicatorsElement.querySelectorAll(".active"));
                    g(e).removeClass(O);
                    var n = this._indicatorsElement.children[this._getItemIndex(t)];
                    n && g(n).addClass(O)
                }
            }, t._slide = function(t, e) {
                var n, i, o, r = this,
                    s = this._element.querySelector(j),
                    a = this._getItemIndex(s),
                    l = e || s && this._getItemByDirection(t, s),
                    c = this._getItemIndex(l),
                    h = Boolean(this._interval);
                if (o = t === k ? (n = "carousel-item-left", i = "carousel-item-next", "left") : (n = "carousel-item-right", i = "carousel-item-prev", "right"), l && g(l).hasClass(O)) this._isSliding = !1;
                else if (!this._triggerSlideEvent(l, o).isDefaultPrevented() && s && l) {
                    this._isSliding = !0, h && this.pause(), this._setActiveIndicatorElement(l);
                    var u = g.Event(I, {
                        relatedTarget: l,
                        direction: o,
                        from: a,
                        to: c
                    });
                    if (g(this._element).hasClass("slide")) {
                        g(l).addClass(i), m.reflow(l), g(s).addClass(n), g(l).addClass(n);
                        var f = parseInt(l.getAttribute("data-interval"), 10);
                        f ? (this._config.defaultInterval = this._config.defaultInterval || this._config.interval, this._config.interval = f) : this._config.interval = this._config.defaultInterval || this._config.interval;
                        var d = m.getTransitionDurationFromElement(s);
                        g(s).one(m.TRANSITION_END, function() {
                            g(l).removeClass(n + " " + i).addClass(O), g(s).removeClass(O + " " + i + " " + n), r._isSliding = !1, setTimeout(function() {
                                return g(r._element).trigger(u)
                            }, 0)
                        }).emulateTransitionEnd(d)
                    } else g(s).removeClass(O), g(l).addClass(O), this._isSliding = !1, g(this._element).trigger(u);
                    h && this.cycle()
                }
            }, r._jQueryInterface = function(i) {
                return this.each(function() {
                    var t = g(this).data(T),
                        e = l(l({}, D), g(this).data());
                    "object" == typeof i && (e = l(l({}, e), i));
                    var n = "string" == typeof i ? i : e.slide;
                    if (t || (t = new r(this, e), g(this).data(T, t)), "number" == typeof i) t.to(i);
                    else if ("string" == typeof n) {
                        if (void 0 === t[n]) throw new TypeError('No method named "' + n + '"');
                        t[n]()
                    } else e.interval && e.ride && (t.pause(), t.cycle())
                })
            }, r._dataApiClickHandler = function(t) {
                var e = m.getSelectorFromElement(this);
                if (e) {
                    var n = g(e)[0];
                    if (n && g(n).hasClass("carousel")) {
                        var i = l(l({}, g(n).data()), g(this).data()),
                            o = this.getAttribute("data-slide-to");
                        o && (i.interval = !1), r._jQueryInterface.call(g(n), i), o && g(n).data(T).to(o), t.preventDefault()
                    }
                }
            }, s(r, null, [{
                key: "VERSION",
                get: function() {
                    return "4.5.0"
                }
            }, {
                key: "Default",
                get: function() {
                    return D
                }
            }]), r
        }();
    g(document).on("click.bs.carousel.data-api", "[data-slide], [data-slide-to]", x._dataApiClickHandler), g(window).on("load.bs.carousel.data-api", function() {
        for (var t = [].slice.call(document.querySelectorAll('[data-ride="carousel"]')), e = 0, n = t.length; e < n; e++) {
            var i = g(t[e]);
            x._jQueryInterface.call(i, i.data())
        }
    }), g.fn[w] = x._jQueryInterface, g.fn[w].Constructor = x, g.fn[w].noConflict = function() {
        return g.fn[w] = S, x._jQueryInterface
    };
    var L = "collapse",
        R = "bs.collapse",
        q = g.fn[L],
        F = {
            toggle: !0,
            parent: ""
        },
        Q = {
            toggle: "boolean",
            parent: "(string|element)"
        },
        B = "show",
        H = "collapse",
        U = "collapsing",
        M = "collapsed",
        W = '[data-toggle="collapse"]',
        V = function() {
            function a(e, t) {
                this._isTransitioning = !1, this._element = e, this._config = this._getConfig(t), this._triggerArray = [].slice.call(document.querySelectorAll('[data-toggle="collapse"][href="#' + e.id + '"],[data-toggle="collapse"][data-target="#' + e.id + '"]'));
                for (var n = [].slice.call(document.querySelectorAll(W)), i = 0, o = n.length; i < o; i++) {
                    var r = n[i],
                        s = m.getSelectorFromElement(r),
                        a = [].slice.call(document.querySelectorAll(s)).filter(function(t) {
                            return t === e
                        });
                    null !== s && 0 < a.length && (this._selector = s, this._triggerArray.push(r))
                }
                this._parent = this._config.parent ? this._getParent() : null, this._config.parent || this._addAriaAndCollapsedClass(this._element, this._triggerArray), this._config.toggle && this.toggle()
            }
            var t = a.prototype;
            return t.toggle = function() {
                g(this._element).hasClass(B) ? this.hide() : this.show()
            }, t.show = function() {
                var t, e, n = this;
                if (!this._isTransitioning && !g(this._element).hasClass(B) && (this._parent && 0 === (t = [].slice.call(this._parent.querySelectorAll(".show, .collapsing")).filter(function(t) {
                        return "string" == typeof n._config.parent ? t.getAttribute("data-parent") === n._config.parent : t.classList.contains(H)
                    })).length && (t = null), !(t && (e = g(t).not(this._selector).data(R)) && e._isTransitioning))) {
                    var i = g.Event("show.bs.collapse");
                    if (g(this._element).trigger(i), !i.isDefaultPrevented()) {
                        t && (a._jQueryInterface.call(g(t).not(this._selector), "hide"), e || g(t).data(R, null));
                        var o = this._getDimension();
                        g(this._element).removeClass(H).addClass(U), this._element.style[o] = 0, this._triggerArray.length && g(this._triggerArray).removeClass(M).attr("aria-expanded", !0), this.setTransitioning(!0);
                        var r = "scroll" + (o[0].toUpperCase() + o.slice(1)),
                            s = m.getTransitionDurationFromElement(this._element);
                        g(this._element).one(m.TRANSITION_END, function() {
                            g(n._element).removeClass(U).addClass(H + " " + B), n._element.style[o] = "", n.setTransitioning(!1), g(n._element).trigger("shown.bs.collapse")
                        }).emulateTransitionEnd(s), this._element.style[o] = this._element[r] + "px"
                    }
                }
            }, t.hide = function() {
                var t = this;
                if (!this._isTransitioning && g(this._element).hasClass(B)) {
                    var e = g.Event("hide.bs.collapse");
                    if (g(this._element).trigger(e), !e.isDefaultPrevented()) {
                        var n = this._getDimension();
                        this._element.style[n] = this._element.getBoundingClientRect()[n] + "px", m.reflow(this._element), g(this._element).addClass(U).removeClass(H + " " + B);
                        var i = this._triggerArray.length;
                        if (0 < i)
                            for (var o = 0; o < i; o++) {
                                var r = this._triggerArray[o],
                                    s = m.getSelectorFromElement(r);
                                if (null !== s) g([].slice.call(document.querySelectorAll(s))).hasClass(B) || g(r).addClass(M).attr("aria-expanded", !1)
                            }
                        this.setTransitioning(!0);
                        this._element.style[n] = "";
                        var a = m.getTransitionDurationFromElement(this._element);
                        g(this._element).one(m.TRANSITION_END, function() {
                            t.setTransitioning(!1), g(t._element).removeClass(U).addClass(H).trigger("hidden.bs.collapse")
                        }).emulateTransitionEnd(a)
                    }
                }
            }, t.setTransitioning = function(t) {
                this._isTransitioning = t
            }, t.dispose = function() {
                g.removeData(this._element, R), this._config = null, this._parent = null, this._element = null, this._triggerArray = null, this._isTransitioning = null
            }, t._getConfig = function(t) {
                return (t = l(l({}, F), t)).toggle = Boolean(t.toggle), m.typeCheckConfig(L, t, Q), t
            }, t._getDimension = function() {
                return g(this._element).hasClass("width") ? "width" : "height"
            }, t._getParent = function() {
                var t, n = this;
                m.isElement(this._config.parent) ? (t = this._config.parent, void 0 !== this._config.parent.jquery && (t = this._config.parent[0])) : t = document.querySelector(this._config.parent);
                var e = '[data-toggle="collapse"][data-parent="' + this._config.parent + '"]',
                    i = [].slice.call(t.querySelectorAll(e));
                return g(i).each(function(t, e) {
                    n._addAriaAndCollapsedClass(a._getTargetFromElement(e), [e])
                }), t
            }, t._addAriaAndCollapsedClass = function(t, e) {
                var n = g(t).hasClass(B);
                e.length && g(e).toggleClass(M, !n).attr("aria-expanded", n)
            }, a._getTargetFromElement = function(t) {
                var e = m.getSelectorFromElement(t);
                return e ? document.querySelector(e) : null
            }, a._jQueryInterface = function(i) {
                return this.each(function() {
                    var t = g(this),
                        e = t.data(R),
                        n = l(l(l({}, F), t.data()), "object" == typeof i && i ? i : {});
                    if (!e && n.toggle && "string" == typeof i && /show|hide/.test(i) && (n.toggle = !1), e || (e = new a(this, n), t.data(R, e)), "string" == typeof i) {
                        if (void 0 === e[i]) throw new TypeError('No method named "' + i + '"');
                        e[i]()
                    }
                })
            }, s(a, null, [{
                key: "VERSION",
                get: function() {
                    return "4.5.0"
                }
            }, {
                key: "Default",
                get: function() {
                    return F
                }
            }]), a
        }();
    g(document).on("click.bs.collapse.data-api", W, function(t) {
        "A" === t.currentTarget.tagName && t.preventDefault();
        var n = g(this),
            e = m.getSelectorFromElement(this),
            i = [].slice.call(document.querySelectorAll(e));
        g(i).each(function() {
            var t = g(this),
                e = t.data(R) ? "toggle" : n.data();
            V._jQueryInterface.call(t, e)
        })
    }), g.fn[L] = V._jQueryInterface, g.fn[L].Constructor = V, g.fn[L].noConflict = function() {
        return g.fn[L] = q, V._jQueryInterface
    };
    var z = "dropdown",
        K = "bs.dropdown",
        X = "." + K,
        Y = ".data-api",
        $ = g.fn[z],
        J = new RegExp("38|40|27"),
        G = "hide" + X,
        Z = "hidden" + X,
        tt = "click" + X + Y,
        et = "keydown" + X + Y,
        nt = "disabled",
        it = "show",
        ot = "dropdown-menu-right",
        rt = '[data-toggle="dropdown"]',
        st = ".dropdown-menu",
        at = {
            offset: 0,
            flip: !0,
            boundary: "scrollParent",
            reference: "toggle",
            display: "dynamic",
            popperConfig: null
        },
        lt = {
            offset: "(number|string|function)",
            flip: "boolean",
            boundary: "(string|element)",
            reference: "(string|element)",
            display: "string",
            popperConfig: "(null|object)"
        },
        ct = function() {
            function c(t, e) {
                this._element = t, this._popper = null, this._config = this._getConfig(e), this._menu = this._getMenuElement(), this._inNavbar = this._detectNavbar(), this._addEventListeners()
            }
            var t = c.prototype;
            return t.toggle = function() {
                if (!this._element.disabled && !g(this._element).hasClass(nt)) {
                    var t = g(this._menu).hasClass(it);
                    c._clearMenus(), t || this.show(!0)
                }
            }, t.show = function(t) {
                if (void 0 === t && (t = !1), !(this._element.disabled || g(this._element).hasClass(nt) || g(this._menu).hasClass(it))) {
                    var e = {
                            relatedTarget: this._element
                        },
                        n = g.Event("show.bs.dropdown", e),
                        i = c._getParentFromElement(this._element);
                    if (g(i).trigger(n), !n.isDefaultPrevented()) {
                        if (!this._inNavbar && t) {
                            if (void 0 === u) throw new TypeError("Bootstrap's dropdowns require Popper.js (https://popper.js.org/)");
                            var o = this._element;
                            "parent" === this._config.reference ? o = i : m.isElement(this._config.reference) && (o = this._config.reference, void 0 !== this._config.reference.jquery && (o = this._config.reference[0])), "scrollParent" !== this._config.boundary && g(i).addClass("position-static"), this._popper = new u(o, this._menu, this._getPopperConfig())
                        }
                        "ontouchstart" in document.documentElement && 0 === g(i).closest(".navbar-nav").length && g(document.body).children().on("mouseover", null, g.noop), this._element.focus(), this._element.setAttribute("aria-expanded", !0), g(this._menu).toggleClass(it), g(i).toggleClass(it).trigger(g.Event("shown.bs.dropdown", e))
                    }
                }
            }, t.hide = function() {
                if (!this._element.disabled && !g(this._element).hasClass(nt) && g(this._menu).hasClass(it)) {
                    var t = {
                            relatedTarget: this._element
                        },
                        e = g.Event(G, t),
                        n = c._getParentFromElement(this._element);
                    g(n).trigger(e), e.isDefaultPrevented() || (this._popper && this._popper.destroy(), g(this._menu).toggleClass(it), g(n).toggleClass(it).trigger(g.Event(Z, t)))
                }
            }, t.dispose = function() {
                g.removeData(this._element, K), g(this._element).off(X), this._element = null, (this._menu = null) !== this._popper && (this._popper.destroy(), this._popper = null)
            }, t.update = function() {
                this._inNavbar = this._detectNavbar(), null !== this._popper && this._popper.scheduleUpdate()
            }, t._addEventListeners = function() {
                var e = this;
                g(this._element).on("click.bs.dropdown", function(t) {
                    t.preventDefault(), t.stopPropagation(), e.toggle()
                })
            }, t._getConfig = function(t) {
                return t = l(l(l({}, this.constructor.Default), g(this._element).data()), t), m.typeCheckConfig(z, t, this.constructor.DefaultType), t
            }, t._getMenuElement = function() {
                if (!this._menu) {
                    var t = c._getParentFromElement(this._element);
                    t && (this._menu = t.querySelector(st))
                }
                return this._menu
            }, t._getPlacement = function() {
                var t = g(this._element.parentNode),
                    e = "bottom-start";
                return t.hasClass("dropup") ? e = g(this._menu).hasClass(ot) ? "top-end" : "top-start" : t.hasClass("dropright") ? e = "right-start" : t.hasClass("dropleft") ? e = "left-start" : g(this._menu).hasClass(ot) && (e = "bottom-end"), e
            }, t._detectNavbar = function() {
                return 0 < g(this._element).closest(".navbar").length
            }, t._getOffset = function() {
                var e = this,
                    t = {};
                return "function" == typeof this._config.offset ? t.fn = function(t) {
                    return t.offsets = l(l({}, t.offsets), e._config.offset(t.offsets, e._element) || {}), t
                } : t.offset = this._config.offset, t
            }, t._getPopperConfig = function() {
                var t = {
                    placement: this._getPlacement(),
                    modifiers: {
                        offset: this._getOffset(),
                        flip: {
                            enabled: this._config.flip
                        },
                        preventOverflow: {
                            boundariesElement: this._config.boundary
                        }
                    }
                };
                return "static" === this._config.display && (t.modifiers.applyStyle = {
                    enabled: !1
                }), l(l({}, t), this._config.popperConfig)
            }, c._jQueryInterface = function(e) {
                return this.each(function() {
                    var t = g(this).data(K);
                    if (t || (t = new c(this, "object" == typeof e ? e : null), g(this).data(K, t)), "string" == typeof e) {
                        if (void 0 === t[e]) throw new TypeError('No method named "' + e + '"');
                        t[e]()
                    }
                })
            }, c._clearMenus = function(t) {
                if (!t || 3 !== t.which && ("keyup" !== t.type || 9 === t.which))
                    for (var e = [].slice.call(document.querySelectorAll(rt)), n = 0, i = e.length; n < i; n++) {
                        var o = c._getParentFromElement(e[n]),
                            r = g(e[n]).data(K),
                            s = {
                                relatedTarget: e[n]
                            };
                        if (t && "click" === t.type && (s.clickEvent = t), r) {
                            var a = r._menu;
                            if (g(o).hasClass(it) && !(t && ("click" === t.type && /input|textarea/i.test(t.target.tagName) || "keyup" === t.type && 9 === t.which) && g.contains(o, t.target))) {
                                var l = g.Event(G, s);
                                g(o).trigger(l), l.isDefaultPrevented() || ("ontouchstart" in document.documentElement && g(document.body).children().off("mouseover", null, g.noop), e[n].setAttribute("aria-expanded", "false"), r._popper && r._popper.destroy(), g(a).removeClass(it), g(o).removeClass(it).trigger(g.Event(Z, s)))
                            }
                        }
                    }
            }, c._getParentFromElement = function(t) {
                var e, n = m.getSelectorFromElement(t);
                return n && (e = document.querySelector(n)), e || t.parentNode
            }, c._dataApiKeydownHandler = function(t) {
                if ((/input|textarea/i.test(t.target.tagName) ? !(32 === t.which || 27 !== t.which && (40 !== t.which && 38 !== t.which || g(t.target).closest(st).length)) : J.test(t.which)) && !this.disabled && !g(this).hasClass(nt)) {
                    var e = c._getParentFromElement(this),
                        n = g(e).hasClass(it);
                    if (n || 27 !== t.which) {
                        if (t.preventDefault(), t.stopPropagation(), !n || n && (27 === t.which || 32 === t.which)) return 27 === t.which && g(e.querySelector(rt)).trigger("focus"), void g(this).trigger("click");
                        var i = [].slice.call(e.querySelectorAll(".dropdown-menu .dropdown-item:not(.disabled):not(:disabled)")).filter(function(t) {
                            return g(t).is(":visible")
                        });
                        if (0 !== i.length) {
                            var o = i.indexOf(t.target);
                            38 === t.which && 0 < o && o--, 40 === t.which && o < i.length - 1 && o++, o < 0 && (o = 0), i[o].focus()
                        }
                    }
                }
            }, s(c, null, [{
                key: "VERSION",
                get: function() {
                    return "4.5.0"
                }
            }, {
                key: "Default",
                get: function() {
                    return at
                }
            }, {
                key: "DefaultType",
                get: function() {
                    return lt
                }
            }]), c
        }();
    g(document).on(et, rt, ct._dataApiKeydownHandler).on(et, st, ct._dataApiKeydownHandler).on(tt + " keyup.bs.dropdown.data-api", ct._clearMenus).on(tt, rt, function(t) {
        t.preventDefault(), t.stopPropagation(), ct._jQueryInterface.call(g(this), "toggle")
    }).on(tt, ".dropdown form", function(t) {
        t.stopPropagation()
    }), g.fn[z] = ct._jQueryInterface, g.fn[z].Constructor = ct, g.fn[z].noConflict = function() {
        return g.fn[z] = $, ct._jQueryInterface
    };
    var ht = "modal",
        ut = "bs.modal",
        ft = "." + ut,
        dt = g.fn[ht],
        gt = {
            backdrop: !0,
            keyboard: !0,
            focus: !0,
            show: !0
        },
        mt = {
            backdrop: "(boolean|string)",
            keyboard: "boolean",
            focus: "boolean",
            show: "boolean"
        },
        _t = "hidden" + ft,
        pt = "show" + ft,
        vt = "focusin" + ft,
        yt = "resize" + ft,
        bt = "click.dismiss" + ft,
        Et = "keydown.dismiss" + ft,
        wt = "mousedown.dismiss" + ft,
        Tt = "modal-open",
        Ct = "fade",
        St = "show",
        Dt = "modal-static",
        Nt = ".fixed-top, .fixed-bottom, .is-fixed, .sticky-top",
        kt = ".sticky-top",
        At = function() {
            function o(t, e) {
                this._config = this._getConfig(e), this._element = t, this._dialog = t.querySelector(".modal-dialog"), this._backdrop = null, this._isShown = !1, this._isBodyOverflowing = !1, this._ignoreBackdropClick = !1, this._isTransitioning = !1, this._scrollbarWidth = 0
            }
            var t = o.prototype;
            return t.toggle = function(t) {
                return this._isShown ? this.hide() : this.show(t)
            }, t.show = function(t) {
                var e = this;
                if (!this._isShown && !this._isTransitioning) {
                    g(this._element).hasClass(Ct) && (this._isTransitioning = !0);
                    var n = g.Event(pt, {
                        relatedTarget: t
                    });
                    g(this._element).trigger(n), this._isShown || n.isDefaultPrevented() || (this._isShown = !0, this._checkScrollbar(), this._setScrollbar(), this._adjustDialog(), this._setEscapeEvent(), this._setResizeEvent(), g(this._element).on(bt, '[data-dismiss="modal"]', function(t) {
                        return e.hide(t)
                    }), g(this._dialog).on(wt, function() {
                        g(e._element).one("mouseup.dismiss.bs.modal", function(t) {
                            g(t.target).is(e._element) && (e._ignoreBackdropClick = !0)
                        })
                    }), this._showBackdrop(function() {
                        return e._showElement(t)
                    }))
                }
            }, t.hide = function(t) {
                var e = this;
                if (t && t.preventDefault(), this._isShown && !this._isTransitioning) {
                    var n = g.Event("hide.bs.modal");
                    if (g(this._element).trigger(n), this._isShown && !n.isDefaultPrevented()) {
                        this._isShown = !1;
                        var i = g(this._element).hasClass(Ct);
                        if (i && (this._isTransitioning = !0), this._setEscapeEvent(), this._setResizeEvent(), g(document).off(vt), g(this._element).removeClass(St), g(this._element).off(bt), g(this._dialog).off(wt), i) {
                            var o = m.getTransitionDurationFromElement(this._element);
                            g(this._element).one(m.TRANSITION_END, function(t) {
                                return e._hideModal(t)
                            }).emulateTransitionEnd(o)
                        } else this._hideModal()
                    }
                }
            }, t.dispose = function() {
                [window, this._element, this._dialog].forEach(function(t) {
                    return g(t).off(ft)
                }), g(document).off(vt), g.removeData(this._element, ut), this._config = null, this._element = null, this._dialog = null, this._backdrop = null, this._isShown = null, this._isBodyOverflowing = null, this._ignoreBackdropClick = null, this._isTransitioning = null, this._scrollbarWidth = null
            }, t.handleUpdate = function() {
                this._adjustDialog()
            }, t._getConfig = function(t) {
                return t = l(l({}, gt), t), m.typeCheckConfig(ht, t, mt), t
            }, t._triggerBackdropTransition = function() {
                var t = this;
                if ("static" === this._config.backdrop) {
                    var e = g.Event("hidePrevented.bs.modal");
                    if (g(this._element).trigger(e), e.defaultPrevented) return;
                    this._element.classList.add(Dt);
                    var n = m.getTransitionDurationFromElement(this._element);
                    g(this._element).one(m.TRANSITION_END, function() {
                        t._element.classList.remove(Dt)
                    }).emulateTransitionEnd(n), this._element.focus()
                } else this.hide()
            }, t._showElement = function(t) {
                var e = this,
                    n = g(this._element).hasClass(Ct),
                    i = this._dialog ? this._dialog.querySelector(".modal-body") : null;
                this._element.parentNode && this._element.parentNode.nodeType === Node.ELEMENT_NODE || document.body.appendChild(this._element), this._element.style.display = "block", this._element.removeAttribute("aria-hidden"), this._element.setAttribute("aria-modal", !0), g(this._dialog).hasClass("modal-dialog-scrollable") && i ? i.scrollTop = 0 : this._element.scrollTop = 0, n && m.reflow(this._element), g(this._element).addClass(St), this._config.focus && this._enforceFocus();
                var o = g.Event("shown.bs.modal", {
                        relatedTarget: t
                    }),
                    r = function() {
                        e._config.focus && e._element.focus(), e._isTransitioning = !1, g(e._element).trigger(o)
                    };
                if (n) {
                    var s = m.getTransitionDurationFromElement(this._dialog);
                    g(this._dialog).one(m.TRANSITION_END, r).emulateTransitionEnd(s)
                } else r()
            }, t._enforceFocus = function() {
                var e = this;
                g(document).off(vt).on(vt, function(t) {
                    document !== t.target && e._element !== t.target && 0 === g(e._element).has(t.target).length && e._element.focus()
                })
            }, t._setEscapeEvent = function() {
                var e = this;
                this._isShown ? g(this._element).on(Et, function(t) {
                    e._config.keyboard && 27 === t.which ? (t.preventDefault(), e.hide()) : e._config.keyboard || 27 !== t.which || e._triggerBackdropTransition()
                }) : this._isShown || g(this._element).off(Et)
            }, t._setResizeEvent = function() {
                var e = this;
                this._isShown ? g(window).on(yt, function(t) {
                    return e.handleUpdate(t)
                }) : g(window).off(yt)
            }, t._hideModal = function() {
                var t = this;
                this._element.style.display = "none", this._element.setAttribute("aria-hidden", !0), this._element.removeAttribute("aria-modal"), this._isTransitioning = !1, this._showBackdrop(function() {
                    g(document.body).removeClass(Tt), t._resetAdjustments(), t._resetScrollbar(), g(t._element).trigger(_t)
                })
            }, t._removeBackdrop = function() {
                this._backdrop && (g(this._backdrop).remove(), this._backdrop = null)
            }, t._showBackdrop = function(t) {
                var e = this,
                    n = g(this._element).hasClass(Ct) ? Ct : "";
                if (this._isShown && this._config.backdrop) {
                    if (this._backdrop = document.createElement("div"), this._backdrop.className = "modal-backdrop", n && this._backdrop.classList.add(n), g(this._backdrop).appendTo(document.body), g(this._element).on(bt, function(t) {
                            e._ignoreBackdropClick ? e._ignoreBackdropClick = !1 : t.target === t.currentTarget && e._triggerBackdropTransition()
                        }), n && m.reflow(this._backdrop), g(this._backdrop).addClass(St), !t) return;
                    if (!n) return void t();
                    var i = m.getTransitionDurationFromElement(this._backdrop);
                    g(this._backdrop).one(m.TRANSITION_END, t).emulateTransitionEnd(i)
                } else if (!this._isShown && this._backdrop) {
                    g(this._backdrop).removeClass(St);
                    var o = function() {
                        e._removeBackdrop(), t && t()
                    };
                    if (g(this._element).hasClass(Ct)) {
                        var r = m.getTransitionDurationFromElement(this._backdrop);
                        g(this._backdrop).one(m.TRANSITION_END, o).emulateTransitionEnd(r)
                    } else o()
                } else t && t()
            }, t._adjustDialog = function() {
                var t = this._element.scrollHeight > document.documentElement.clientHeight;
                !this._isBodyOverflowing && t && (this._element.style.paddingLeft = this._scrollbarWidth + "px"), this._isBodyOverflowing && !t && (this._element.style.paddingRight = this._scrollbarWidth + "px")
            }, t._resetAdjustments = function() {
                this._element.style.paddingLeft = "", this._element.style.paddingRight = ""
            }, t._checkScrollbar = function() {
                var t = document.body.getBoundingClientRect();
                this._isBodyOverflowing = Math.round(t.left + t.right) < window.innerWidth, this._scrollbarWidth = this._getScrollbarWidth()
            }, t._setScrollbar = function() {
                var o = this;
                if (this._isBodyOverflowing) {
                    var t = [].slice.call(document.querySelectorAll(Nt)),
                        e = [].slice.call(document.querySelectorAll(kt));
                    g(t).each(function(t, e) {
                        var n = e.style.paddingRight,
                            i = g(e).css("padding-right");
                        g(e).data("padding-right", n).css("padding-right", parseFloat(i) + o._scrollbarWidth + "px")
                    }), g(e).each(function(t, e) {
                        var n = e.style.marginRight,
                            i = g(e).css("margin-right");
                        g(e).data("margin-right", n).css("margin-right", parseFloat(i) - o._scrollbarWidth + "px")
                    });
                    var n = document.body.style.paddingRight,
                        i = g(document.body).css("padding-right");
                    g(document.body).data("padding-right", n).css("padding-right", parseFloat(i) + this._scrollbarWidth + "px")
                }
                g(document.body).addClass(Tt)
            }, t._resetScrollbar = function() {
                var t = [].slice.call(document.querySelectorAll(Nt));
                g(t).each(function(t, e) {
                    var n = g(e).data("padding-right");
                    g(e).removeData("padding-right"), e.style.paddingRight = n || ""
                });
                var e = [].slice.call(document.querySelectorAll(kt));
                g(e).each(function(t, e) {
                    var n = g(e).data("margin-right");
                    void 0 !== n && g(e).css("margin-right", n).removeData("margin-right")
                });
                var n = g(document.body).data("padding-right");
                g(document.body).removeData("padding-right"), document.body.style.paddingRight = n || ""
            }, t._getScrollbarWidth = function() {
                var t = document.createElement("div");
                t.className = "modal-scrollbar-measure", document.body.appendChild(t);
                var e = t.getBoundingClientRect().width - t.clientWidth;
                return document.body.removeChild(t), e
            }, o._jQueryInterface = function(n, i) {
                return this.each(function() {
                    var t = g(this).data(ut),
                        e = l(l(l({}, gt), g(this).data()), "object" == typeof n && n ? n : {});
                    if (t || (t = new o(this, e), g(this).data(ut, t)), "string" == typeof n) {
                        if (void 0 === t[n]) throw new TypeError('No method named "' + n + '"');
                        t[n](i)
                    } else e.show && t.show(i)
                })
            }, s(o, null, [{
                key: "VERSION",
                get: function() {
                    return "4.5.0"
                }
            }, {
                key: "Default",
                get: function() {
                    return gt
                }
            }]), o
        }();
    g(document).on("click.bs.modal.data-api", '[data-toggle="modal"]', function(t) {
        var e, n = this,
            i = m.getSelectorFromElement(this);
        i && (e = document.querySelector(i));
        var o = g(e).data(ut) ? "toggle" : l(l({}, g(e).data()), g(this).data());
        "A" !== this.tagName && "AREA" !== this.tagName || t.preventDefault();
        var r = g(e).one(pt, function(t) {
            t.isDefaultPrevented() || r.one(_t, function() {
                g(n).is(":visible") && n.focus()
            })
        });
        At._jQueryInterface.call(g(e), o, this)
    }), g.fn[ht] = At._jQueryInterface, g.fn[ht].Constructor = At, g.fn[ht].noConflict = function() {
        return g.fn[ht] = dt, At._jQueryInterface
    };
    var It = ["background", "cite", "href", "itemtype", "longdesc", "poster", "src", "xlink:href"],
        Ot = {
            "*": ["class", "dir", "id", "lang", "role", /^aria-[\w-]*$/i],
            a: ["target", "href", "title", "rel"],
            area: [],
            b: [],
            br: [],
            col: [],
            code: [],
            div: [],
            em: [],
            hr: [],
            h1: [],
            h2: [],
            h3: [],
            h4: [],
            h5: [],
            h6: [],
            i: [],
            img: ["src", "srcset", "alt", "title", "width", "height"],
            li: [],
            ol: [],
            p: [],
            pre: [],
            s: [],
            small: [],
            span: [],
            sub: [],
            sup: [],
            strong: [],
            u: [],
            ul: []
        },
        jt = /^(?:(?:https?|mailto|ftp|tel|file):|[^#&/:?]*(?:[#/?]|$))/gi,
        Pt = /^data:(?:image\/(?:bmp|gif|jpeg|jpg|png|tiff|webp)|video\/(?:mpeg|mp4|ogg|webm)|audio\/(?:mp3|oga|ogg|opus));base64,[\d+/a-z]+=*$/i;

    function xt(t, s, e) {
        if (0 === t.length) return t;
        if (e && "function" == typeof e) return e(t);
        for (var n = (new window.DOMParser).parseFromString(t, "text/html"), a = Object.keys(s), l = [].slice.call(n.body.querySelectorAll("*")), i = function(t, e) {
                var n = l[t],
                    i = n.nodeName.toLowerCase();
                if (-1 === a.indexOf(n.nodeName.toLowerCase())) return n.parentNode.removeChild(n), "continue";
                var o = [].slice.call(n.attributes),
                    r = [].concat(s["*"] || [], s[i] || []);
                o.forEach(function(t) {
                    (function(t, e) {
                        var n = t.nodeName.toLowerCase();
                        if (-1 !== e.indexOf(n)) return -1 === It.indexOf(n) || Boolean(t.nodeValue.match(jt) || t.nodeValue.match(Pt));
                        for (var i = e.filter(function(t) {
                                return t instanceof RegExp
                            }), o = 0, r = i.length; o < r; o++)
                            if (n.match(i[o])) return !0;
                        return !1
                    })(t, r) || n.removeAttribute(t.nodeName)
                })
            }, o = 0, r = l.length; o < r; o++) i(o);
        return n.body.innerHTML
    }
    var Lt = "tooltip",
        Rt = "bs.tooltip",
        qt = "." + Rt,
        Ft = g.fn[Lt],
        Qt = "bs-tooltip",
        Bt = new RegExp("(^|\\s)" + Qt + "\\S+", "g"),
        Ht = ["sanitize", "whiteList", "sanitizeFn"],
        Ut = {
            animation: "boolean",
            template: "string",
            title: "(string|element|function)",
            trigger: "string",
            delay: "(number|object)",
            html: "boolean",
            selector: "(string|boolean)",
            placement: "(string|function)",
            offset: "(number|string|function)",
            container: "(string|element|boolean)",
            fallbackPlacement: "(string|array)",
            boundary: "(string|element)",
            sanitize: "boolean",
            sanitizeFn: "(null|function)",
            whiteList: "object",
            popperConfig: "(null|object)"
        },
        Mt = {
            AUTO: "auto",
            TOP: "top",
            RIGHT: "right",
            BOTTOM: "bottom",
            LEFT: "left"
        },
        Wt = {
            animation: !0,
            template: '<div class="tooltip" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>',
            trigger: "hover focus",
            title: "",
            delay: 0,
            html: !1,
            selector: !1,
            placement: "top",
            offset: 0,
            container: !1,
            fallbackPlacement: "flip",
            boundary: "scrollParent",
            sanitize: !0,
            sanitizeFn: null,
            whiteList: Ot,
            popperConfig: null
        },
        Vt = "show",
        zt = {
            HIDE: "hide" + qt,
            HIDDEN: "hidden" + qt,
            SHOW: "show" + qt,
            SHOWN: "shown" + qt,
            INSERTED: "inserted" + qt,
            CLICK: "click" + qt,
            FOCUSIN: "focusin" + qt,
            FOCUSOUT: "focusout" + qt,
            MOUSEENTER: "mouseenter" + qt,
            MOUSELEAVE: "mouseleave" + qt
        },
        Kt = "fade",
        Xt = "show",
        Yt = "hover",
        $t = "focus",
        Jt = function() {
            function i(t, e) {
                if (void 0 === u) throw new TypeError("Bootstrap's tooltips require Popper.js (https://popper.js.org/)");
                this._isEnabled = !0, this._timeout = 0, this._hoverState = "", this._activeTrigger = {}, this._popper = null, this.element = t, this.config = this._getConfig(e), this.tip = null, this._setListeners()
            }
            var t = i.prototype;
            return t.enable = function() {
                this._isEnabled = !0
            }, t.disable = function() {
                this._isEnabled = !1
            }, t.toggleEnabled = function() {
                this._isEnabled = !this._isEnabled
            }, t.toggle = function(t) {
                if (this._isEnabled)
                    if (t) {
                        var e = this.constructor.DATA_KEY,
                            n = g(t.currentTarget).data(e);
                        n || (n = new this.constructor(t.currentTarget, this._getDelegateConfig()), g(t.currentTarget).data(e, n)), n._activeTrigger.click = !n._activeTrigger.click, n._isWithActiveTrigger() ? n._enter(null, n) : n._leave(null, n)
                    } else {
                        if (g(this.getTipElement()).hasClass(Xt)) return void this._leave(null, this);
                        this._enter(null, this)
                    }
            }, t.dispose = function() {
                clearTimeout(this._timeout), g.removeData(this.element, this.constructor.DATA_KEY), g(this.element).off(this.constructor.EVENT_KEY), g(this.element).closest(".modal").off("hide.bs.modal", this._hideModalHandler), this.tip && g(this.tip).remove(), this._isEnabled = null, this._timeout = null, this._hoverState = null, this._activeTrigger = null, this._popper && this._popper.destroy(), this._popper = null, this.element = null, this.config = null, this.tip = null
            }, t.show = function() {
                var e = this;
                if ("none" === g(this.element).css("display")) throw new Error("Please use show on visible elements");
                var t = g.Event(this.constructor.Event.SHOW);
                if (this.isWithContent() && this._isEnabled) {
                    g(this.element).trigger(t);
                    var n = m.findShadowRoot(this.element),
                        i = g.contains(null !== n ? n : this.element.ownerDocument.documentElement, this.element);
                    if (t.isDefaultPrevented() || !i) return;
                    var o = this.getTipElement(),
                        r = m.getUID(this.constructor.NAME);
                    o.setAttribute("id", r), this.element.setAttribute("aria-describedby", r), this.setContent(), this.config.animation && g(o).addClass(Kt);
                    var s = "function" == typeof this.config.placement ? this.config.placement.call(this, o, this.element) : this.config.placement,
                        a = this._getAttachment(s);
                    this.addAttachmentClass(a);
                    var l = this._getContainer();
                    g(o).data(this.constructor.DATA_KEY, this), g.contains(this.element.ownerDocument.documentElement, this.tip) || g(o).appendTo(l), g(this.element).trigger(this.constructor.Event.INSERTED), this._popper = new u(this.element, o, this._getPopperConfig(a)), g(o).addClass(Xt), "ontouchstart" in document.documentElement && g(document.body).children().on("mouseover", null, g.noop);
                    var c = function() {
                        e.config.animation && e._fixTransition();
                        var t = e._hoverState;
                        e._hoverState = null, g(e.element).trigger(e.constructor.Event.SHOWN), "out" === t && e._leave(null, e)
                    };
                    if (g(this.tip).hasClass(Kt)) {
                        var h = m.getTransitionDurationFromElement(this.tip);
                        g(this.tip).one(m.TRANSITION_END, c).emulateTransitionEnd(h)
                    } else c()
                }
            }, t.hide = function(t) {
                var e = this,
                    n = this.getTipElement(),
                    i = g.Event(this.constructor.Event.HIDE),
                    o = function() {
                        e._hoverState !== Vt && n.parentNode && n.parentNode.removeChild(n), e._cleanTipClass(), e.element.removeAttribute("aria-describedby"), g(e.element).trigger(e.constructor.Event.HIDDEN), null !== e._popper && e._popper.destroy(), t && t()
                    };
                if (g(this.element).trigger(i), !i.isDefaultPrevented()) {
                    if (g(n).removeClass(Xt), "ontouchstart" in document.documentElement && g(document.body).children().off("mouseover", null, g.noop), this._activeTrigger.click = !1, this._activeTrigger[$t] = !1, this._activeTrigger[Yt] = !1, g(this.tip).hasClass(Kt)) {
                        var r = m.getTransitionDurationFromElement(n);
                        g(n).one(m.TRANSITION_END, o).emulateTransitionEnd(r)
                    } else o();
                    this._hoverState = ""
                }
            }, t.update = function() {
                null !== this._popper && this._popper.scheduleUpdate()
            }, t.isWithContent = function() {
                return Boolean(this.getTitle())
            }, t.addAttachmentClass = function(t) {
                g(this.getTipElement()).addClass(Qt + "-" + t)
            }, t.getTipElement = function() {
                return this.tip = this.tip || g(this.config.template)[0], this.tip
            }, t.setContent = function() {
                var t = this.getTipElement();
                this.setElementContent(g(t.querySelectorAll(".tooltip-inner")), this.getTitle()), g(t).removeClass(Kt + " " + Xt)
            }, t.setElementContent = function(t, e) {
                "object" != typeof e || !e.nodeType && !e.jquery ? this.config.html ? (this.config.sanitize && (e = xt(e, this.config.whiteList, this.config.sanitizeFn)), t.html(e)) : t.text(e) : this.config.html ? g(e).parent().is(t) || t.empty().append(e) : t.text(g(e).text())
            }, t.getTitle = function() {
                var t = this.element.getAttribute("data-original-title");
                return t || (t = "function" == typeof this.config.title ? this.config.title.call(this.element) : this.config.title), t
            }, t._getPopperConfig = function(t) {
                var e = this;
                return l(l({}, {
                    placement: t,
                    modifiers: {
                        offset: this._getOffset(),
                        flip: {
                            behavior: this.config.fallbackPlacement
                        },
                        arrow: {
                            element: ".arrow"
                        },
                        preventOverflow: {
                            boundariesElement: this.config.boundary
                        }
                    },
                    onCreate: function(t) {
                        t.originalPlacement !== t.placement && e._handlePopperPlacementChange(t)
                    },
                    onUpdate: function(t) {
                        return e._handlePopperPlacementChange(t)
                    }
                }), this.config.popperConfig)
            }, t._getOffset = function() {
                var e = this,
                    t = {};
                return "function" == typeof this.config.offset ? t.fn = function(t) {
                    return t.offsets = l(l({}, t.offsets), e.config.offset(t.offsets, e.element) || {}), t
                } : t.offset = this.config.offset, t
            }, t._getContainer = function() {
                return !1 === this.config.container ? document.body : m.isElement(this.config.container) ? g(this.config.container) : g(document).find(this.config.container)
            }, t._getAttachment = function(t) {
                return Mt[t.toUpperCase()]
            }, t._setListeners = function() {
                var i = this;
                this.config.trigger.split(" ").forEach(function(t) {
                    if ("click" === t) g(i.element).on(i.constructor.Event.CLICK, i.config.selector, function(t) {
                        return i.toggle(t)
                    });
                    else if ("manual" !== t) {
                        var e = t === Yt ? i.constructor.Event.MOUSEENTER : i.constructor.Event.FOCUSIN,
                            n = t === Yt ? i.constructor.Event.MOUSELEAVE : i.constructor.Event.FOCUSOUT;
                        g(i.element).on(e, i.config.selector, function(t) {
                            return i._enter(t)
                        }).on(n, i.config.selector, function(t) {
                            return i._leave(t)
                        })
                    }
                }), this._hideModalHandler = function() {
                    i.element && i.hide()
                }, g(this.element).closest(".modal").on("hide.bs.modal", this._hideModalHandler), this.config.selector ? this.config = l(l({}, this.config), {}, {
                    trigger: "manual",
                    selector: ""
                }) : this._fixTitle()
            }, t._fixTitle = function() {
                var t = typeof this.element.getAttribute("data-original-title");
                (this.element.getAttribute("title") || "string" != t) && (this.element.setAttribute("data-original-title", this.element.getAttribute("title") || ""), this.element.setAttribute("title", ""))
            }, t._enter = function(t, e) {
                var n = this.constructor.DATA_KEY;
                (e = e || g(t.currentTarget).data(n)) || (e = new this.constructor(t.currentTarget, this._getDelegateConfig()), g(t.currentTarget).data(n, e)), t && (e._activeTrigger["focusin" === t.type ? $t : Yt] = !0), g(e.getTipElement()).hasClass(Xt) || e._hoverState === Vt ? e._hoverState = Vt : (clearTimeout(e._timeout), e._hoverState = Vt, e.config.delay && e.config.delay.show ? e._timeout = setTimeout(function() {
                    e._hoverState === Vt && e.show()
                }, e.config.delay.show) : e.show())
            }, t._leave = function(t, e) {
                var n = this.constructor.DATA_KEY;
                (e = e || g(t.currentTarget).data(n)) || (e = new this.constructor(t.currentTarget, this._getDelegateConfig()), g(t.currentTarget).data(n, e)), t && (e._activeTrigger["focusout" === t.type ? $t : Yt] = !1), e._isWithActiveTrigger() || (clearTimeout(e._timeout), e._hoverState = "out", e.config.delay && e.config.delay.hide ? e._timeout = setTimeout(function() {
                    "out" === e._hoverState && e.hide()
                }, e.config.delay.hide) : e.hide())
            }, t._isWithActiveTrigger = function() {
                for (var t in this._activeTrigger)
                    if (this._activeTrigger[t]) return !0;
                return !1
            }, t._getConfig = function(t) {
                var e = g(this.element).data();
                return Object.keys(e).forEach(function(t) {
                    -1 !== Ht.indexOf(t) && delete e[t]
                }), "number" == typeof(t = l(l(l({}, this.constructor.Default), e), "object" == typeof t && t ? t : {})).delay && (t.delay = {
                    show: t.delay,
                    hide: t.delay
                }), "number" == typeof t.title && (t.title = t.title.toString()), "number" == typeof t.content && (t.content = t.content.toString()), m.typeCheckConfig(Lt, t, this.constructor.DefaultType), t.sanitize && (t.template = xt(t.template, t.whiteList, t.sanitizeFn)), t
            }, t._getDelegateConfig = function() {
                var t = {};
                if (this.config)
                    for (var e in this.config) this.constructor.Default[e] !== this.config[e] && (t[e] = this.config[e]);
                return t
            }, t._cleanTipClass = function() {
                var t = g(this.getTipElement()),
                    e = t.attr("class").match(Bt);
                null !== e && e.length && t.removeClass(e.join(""))
            }, t._handlePopperPlacementChange = function(t) {
                this.tip = t.instance.popper, this._cleanTipClass(), this.addAttachmentClass(this._getAttachment(t.placement))
            }, t._fixTransition = function() {
                var t = this.getTipElement(),
                    e = this.config.animation;
                null === t.getAttribute("x-placement") && (g(t).removeClass(Kt), this.config.animation = !1, this.hide(), this.show(), this.config.animation = e)
            }, i._jQueryInterface = function(n) {
                return this.each(function() {
                    var t = g(this).data(Rt),
                        e = "object" == typeof n && n;
                    if ((t || !/dispose|hide/.test(n)) && (t || (t = new i(this, e), g(this).data(Rt, t)), "string" == typeof n)) {
                        if (void 0 === t[n]) throw new TypeError('No method named "' + n + '"');
                        t[n]()
                    }
                })
            }, s(i, null, [{
                key: "VERSION",
                get: function() {
                    return "4.5.0"
                }
            }, {
                key: "Default",
                get: function() {
                    return Wt
                }
            }, {
                key: "NAME",
                get: function() {
                    return Lt
                }
            }, {
                key: "DATA_KEY",
                get: function() {
                    return Rt
                }
            }, {
                key: "Event",
                get: function() {
                    return zt
                }
            }, {
                key: "EVENT_KEY",
                get: function() {
                    return qt
                }
            }, {
                key: "DefaultType",
                get: function() {
                    return Ut
                }
            }]), i
        }();
    g.fn[Lt] = Jt._jQueryInterface, g.fn[Lt].Constructor = Jt, g.fn[Lt].noConflict = function() {
        return g.fn[Lt] = Ft, Jt._jQueryInterface
    };
    var Gt = "popover",
        Zt = "bs.popover",
        te = "." + Zt,
        ee = g.fn[Gt],
        ne = "bs-popover",
        ie = new RegExp("(^|\\s)" + ne + "\\S+", "g"),
        oe = l(l({}, Jt.Default), {}, {
            placement: "right",
            trigger: "click",
            content: "",
            template: '<div class="popover" role="tooltip"><div class="arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>'
        }),
        re = l(l({}, Jt.DefaultType), {}, {
            content: "(string|element|function)"
        }),
        se = {
            HIDE: "hide" + te,
            HIDDEN: "hidden" + te,
            SHOW: "show" + te,
            SHOWN: "shown" + te,
            INSERTED: "inserted" + te,
            CLICK: "click" + te,
            FOCUSIN: "focusin" + te,
            FOCUSOUT: "focusout" + te,
            MOUSEENTER: "mouseenter" + te,
            MOUSELEAVE: "mouseleave" + te
        },
        ae = function(t) {
            function i() {
                return t.apply(this, arguments) || this
            }! function(t, e) {
                t.prototype = Object.create(e.prototype), (t.prototype.constructor = t).__proto__ = e
            }(i, t);
            var e = i.prototype;
            return e.isWithContent = function() {
                return this.getTitle() || this._getContent()
            }, e.addAttachmentClass = function(t) {
                g(this.getTipElement()).addClass(ne + "-" + t)
            }, e.getTipElement = function() {
                return this.tip = this.tip || g(this.config.template)[0], this.tip
            }, e.setContent = function() {
                var t = g(this.getTipElement());
                this.setElementContent(t.find(".popover-header"), this.getTitle());
                var e = this._getContent();
                "function" == typeof e && (e = e.call(this.element)), this.setElementContent(t.find(".popover-body"), e), t.removeClass("fade show")
            }, e._getContent = function() {
                return this.element.getAttribute("data-content") || this.config.content
            }, e._cleanTipClass = function() {
                var t = g(this.getTipElement()),
                    e = t.attr("class").match(ie);
                null !== e && 0 < e.length && t.removeClass(e.join(""))
            }, i._jQueryInterface = function(n) {
                return this.each(function() {
                    var t = g(this).data(Zt),
                        e = "object" == typeof n ? n : null;
                    if ((t || !/dispose|hide/.test(n)) && (t || (t = new i(this, e), g(this).data(Zt, t)), "string" == typeof n)) {
                        if (void 0 === t[n]) throw new TypeError('No method named "' + n + '"');
                        t[n]()
                    }
                })
            }, s(i, null, [{
                key: "VERSION",
                get: function() {
                    return "4.5.0"
                }
            }, {
                key: "Default",
                get: function() {
                    return oe
                }
            }, {
                key: "NAME",
                get: function() {
                    return Gt
                }
            }, {
                key: "DATA_KEY",
                get: function() {
                    return Zt
                }
            }, {
                key: "Event",
                get: function() {
                    return se
                }
            }, {
                key: "EVENT_KEY",
                get: function() {
                    return te
                }
            }, {
                key: "DefaultType",
                get: function() {
                    return re
                }
            }]), i
        }(Jt);
    g.fn[Gt] = ae._jQueryInterface, g.fn[Gt].Constructor = ae, g.fn[Gt].noConflict = function() {
        return g.fn[Gt] = ee, ae._jQueryInterface
    };
    var le = "scrollspy",
        ce = "bs.scrollspy",
        he = "." + ce,
        ue = g.fn[le],
        fe = {
            offset: 10,
            method: "auto",
            target: ""
        },
        de = {
            offset: "number",
            method: "string",
            target: "(string|element)"
        },
        ge = "active",
        me = ".nav, .list-group",
        _e = ".nav-link",
        pe = ".list-group-item",
        ve = "position",
        ye = function() {
            function n(t, e) {
                var n = this;
                this._element = t, this._scrollElement = "BODY" === t.tagName ? window : t, this._config = this._getConfig(e), this._selector = this._config.target + " " + _e + "," + this._config.target + " " + pe + "," + this._config.target + " .dropdown-item", this._offsets = [], this._targets = [], this._activeTarget = null, this._scrollHeight = 0, g(this._scrollElement).on("scroll.bs.scrollspy", function(t) {
                    return n._process(t)
                }), this.refresh(), this._process()
            }
            var t = n.prototype;
            return t.refresh = function() {
                var e = this,
                    t = this._scrollElement === this._scrollElement.window ? "offset" : ve,
                    o = "auto" === this._config.method ? t : this._config.method,
                    r = o === ve ? this._getScrollTop() : 0;
                this._offsets = [], this._targets = [], this._scrollHeight = this._getScrollHeight(), [].slice.call(document.querySelectorAll(this._selector)).map(function(t) {
                    var e, n = m.getSelectorFromElement(t);
                    if (n && (e = document.querySelector(n)), e) {
                        var i = e.getBoundingClientRect();
                        if (i.width || i.height) return [g(e)[o]().top + r, n]
                    }
                    return null
                }).filter(function(t) {
                    return t
                }).sort(function(t, e) {
                    return t[0] - e[0]
                }).forEach(function(t) {
                    e._offsets.push(t[0]), e._targets.push(t[1])
                })
            }, t.dispose = function() {
                g.removeData(this._element, ce), g(this._scrollElement).off(he), this._element = null, this._scrollElement = null, this._config = null, this._selector = null, this._offsets = null, this._targets = null, this._activeTarget = null, this._scrollHeight = null
            }, t._getConfig = function(t) {
                if ("string" != typeof(t = l(l({}, fe), "object" == typeof t && t ? t : {})).target && m.isElement(t.target)) {
                    var e = g(t.target).attr("id");
                    e || (e = m.getUID(le), g(t.target).attr("id", e)), t.target = "#" + e
                }
                return m.typeCheckConfig(le, t, de), t
            }, t._getScrollTop = function() {
                return this._scrollElement === window ? this._scrollElement.pageYOffset : this._scrollElement.scrollTop
            }, t._getScrollHeight = function() {
                return this._scrollElement.scrollHeight || Math.max(document.body.scrollHeight, document.documentElement.scrollHeight)
            }, t._getOffsetHeight = function() {
                return this._scrollElement === window ? window.innerHeight : this._scrollElement.getBoundingClientRect().height
            }, t._process = function() {
                var t = this._getScrollTop() + this._config.offset,
                    e = this._getScrollHeight(),
                    n = this._config.offset + e - this._getOffsetHeight();
                if (this._scrollHeight !== e && this.refresh(), n <= t) {
                    var i = this._targets[this._targets.length - 1];
                    this._activeTarget !== i && this._activate(i)
                } else {
                    if (this._activeTarget && t < this._offsets[0] && 0 < this._offsets[0]) return this._activeTarget = null, void this._clear();
                    for (var o = this._offsets.length; o--;) {
                        this._activeTarget !== this._targets[o] && t >= this._offsets[o] && (void 0 === this._offsets[o + 1] || t < this._offsets[o + 1]) && this._activate(this._targets[o])
                    }
                }
            }, t._activate = function(e) {
                this._activeTarget = e, this._clear();
                var t = this._selector.split(",").map(function(t) {
                        return t + '[data-target="' + e + '"],' + t + '[href="' + e + '"]'
                    }),
                    n = g([].slice.call(document.querySelectorAll(t.join(","))));
                n.hasClass("dropdown-item") ? (n.closest(".dropdown").find(".dropdown-toggle").addClass(ge), n.addClass(ge)) : (n.addClass(ge), n.parents(me).prev(_e + ", " + pe).addClass(ge), n.parents(me).prev(".nav-item").children(_e).addClass(ge)), g(this._scrollElement).trigger("activate.bs.scrollspy", {
                    relatedTarget: e
                })
            }, t._clear = function() {
                [].slice.call(document.querySelectorAll(this._selector)).filter(function(t) {
                    return t.classList.contains(ge)
                }).forEach(function(t) {
                    return t.classList.remove(ge)
                })
            }, n._jQueryInterface = function(e) {
                return this.each(function() {
                    var t = g(this).data(ce);
                    if (t || (t = new n(this, "object" == typeof e && e), g(this).data(ce, t)), "string" == typeof e) {
                        if (void 0 === t[e]) throw new TypeError('No method named "' + e + '"');
                        t[e]()
                    }
                })
            }, s(n, null, [{
                key: "VERSION",
                get: function() {
                    return "4.5.0"
                }
            }, {
                key: "Default",
                get: function() {
                    return fe
                }
            }]), n
        }();
    g(window).on("load.bs.scrollspy.data-api", function() {
        for (var t = [].slice.call(document.querySelectorAll('[data-spy="scroll"]')), e = t.length; e--;) {
            var n = g(t[e]);
            ye._jQueryInterface.call(n, n.data())
        }
    }), g.fn[le] = ye._jQueryInterface, g.fn[le].Constructor = ye, g.fn[le].noConflict = function() {
        return g.fn[le] = ue, ye._jQueryInterface
    };
    var be = "bs.tab",
        Ee = g.fn.tab,
        we = "active",
        Te = ".active",
        Ce = "> li > .active",
        Se = function() {
            function i(t) {
                this._element = t
            }
            var t = i.prototype;
            return t.show = function() {
                var n = this;
                if (!(this._element.parentNode && this._element.parentNode.nodeType === Node.ELEMENT_NODE && g(this._element).hasClass(we) || g(this._element).hasClass("disabled"))) {
                    var t, i, e = g(this._element).closest(".nav, .list-group")[0],
                        o = m.getSelectorFromElement(this._element);
                    if (e) {
                        var r = "UL" === e.nodeName || "OL" === e.nodeName ? Ce : Te;
                        i = (i = g.makeArray(g(e).find(r)))[i.length - 1]
                    }
                    var s = g.Event("hide.bs.tab", {
                            relatedTarget: this._element
                        }),
                        a = g.Event("show.bs.tab", {
                            relatedTarget: i
                        });
                    if (i && g(i).trigger(s), g(this._element).trigger(a), !a.isDefaultPrevented() && !s.isDefaultPrevented()) {
                        o && (t = document.querySelector(o)), this._activate(this._element, e);
                        var l = function() {
                            var t = g.Event("hidden.bs.tab", {
                                    relatedTarget: n._element
                                }),
                                e = g.Event("shown.bs.tab", {
                                    relatedTarget: i
                                });
                            g(i).trigger(t), g(n._element).trigger(e)
                        };
                        t ? this._activate(t, t.parentNode, l) : l()
                    }
                }
            }, t.dispose = function() {
                g.removeData(this._element, be), this._element = null
            }, t._activate = function(t, e, n) {
                var i = this,
                    o = (!e || "UL" !== e.nodeName && "OL" !== e.nodeName ? g(e).children(Te) : g(e).find(Ce))[0],
                    r = n && o && g(o).hasClass("fade"),
                    s = function() {
                        return i._transitionComplete(t, o, n)
                    };
                if (o && r) {
                    var a = m.getTransitionDurationFromElement(o);
                    g(o).removeClass("show").one(m.TRANSITION_END, s).emulateTransitionEnd(a)
                } else s()
            }, t._transitionComplete = function(t, e, n) {
                if (e) {
                    g(e).removeClass(we);
                    var i = g(e.parentNode).find("> .dropdown-menu .active")[0];
                    i && g(i).removeClass(we), "tab" === e.getAttribute("role") && e.setAttribute("aria-selected", !1)
                }
                if (g(t).addClass(we), "tab" === t.getAttribute("role") && t.setAttribute("aria-selected", !0), m.reflow(t), t.classList.contains("fade") && t.classList.add("show"), t.parentNode && g(t.parentNode).hasClass("dropdown-menu")) {
                    var o = g(t).closest(".dropdown")[0];
                    if (o) {
                        var r = [].slice.call(o.querySelectorAll(".dropdown-toggle"));
                        g(r).addClass(we)
                    }
                    t.setAttribute("aria-expanded", !0)
                }
                n && n()
            }, i._jQueryInterface = function(n) {
                return this.each(function() {
                    var t = g(this),
                        e = t.data(be);
                    if (e || (e = new i(this), t.data(be, e)), "string" == typeof n) {
                        if (void 0 === e[n]) throw new TypeError('No method named "' + n + '"');
                        e[n]()
                    }
                })
            }, s(i, null, [{
                key: "VERSION",
                get: function() {
                    return "4.5.0"
                }
            }]), i
        }();
    g(document).on("click.bs.tab.data-api", '[data-toggle="tab"], [data-toggle="pill"], [data-toggle="list"]', function(t) {
        t.preventDefault(), Se._jQueryInterface.call(g(this), "show")
    }), g.fn.tab = Se._jQueryInterface, g.fn.tab.Constructor = Se, g.fn.tab.noConflict = function() {
        return g.fn.tab = Ee, Se._jQueryInterface
    };
    var De = "toast",
        Ne = "bs.toast",
        ke = "." + Ne,
        Ae = g.fn[De],
        Ie = "click.dismiss" + ke,
        Oe = "show",
        je = "showing",
        Pe = {
            animation: "boolean",
            autohide: "boolean",
            delay: "number"
        },
        xe = {
            animation: !0,
            autohide: !0,
            delay: 500
        },
        Le = function() {
            function i(t, e) {
                this._element = t, this._config = this._getConfig(e), this._timeout = null, this._setListeners()
            }
            var t = i.prototype;
            return t.show = function() {
                var t = this,
                    e = g.Event("show.bs.toast");
                if (g(this._element).trigger(e), !e.isDefaultPrevented()) {
                    this._config.animation && this._element.classList.add("fade");
                    var n = function() {
                        t._element.classList.remove(je), t._element.classList.add(Oe), g(t._element).trigger("shown.bs.toast"), t._config.autohide && (t._timeout = setTimeout(function() {
                            t.hide()
                        }, t._config.delay))
                    };
                    if (this._element.classList.remove("hide"), m.reflow(this._element), this._element.classList.add(je), this._config.animation) {
                        var i = m.getTransitionDurationFromElement(this._element);
                        g(this._element).one(m.TRANSITION_END, n).emulateTransitionEnd(i)
                    } else n()
                }
            }, t.hide = function() {
                if (this._element.classList.contains(Oe)) {
                    var t = g.Event("hide.bs.toast");
                    g(this._element).trigger(t), t.isDefaultPrevented() || this._close()
                }
            }, t.dispose = function() {
                clearTimeout(this._timeout), this._timeout = null, this._element.classList.contains(Oe) && this._element.classList.remove(Oe), g(this._element).off(Ie), g.removeData(this._element, Ne), this._element = null, this._config = null
            }, t._getConfig = function(t) {
                return t = l(l(l({}, xe), g(this._element).data()), "object" == typeof t && t ? t : {}), m.typeCheckConfig(De, t, this.constructor.DefaultType), t
            }, t._setListeners = function() {
                var t = this;
                g(this._element).on(Ie, '[data-dismiss="toast"]', function() {
                    return t.hide()
                })
            }, t._close = function() {
                var t = this,
                    e = function() {
                        t._element.classList.add("hide"), g(t._element).trigger("hidden.bs.toast")
                    };
                if (this._element.classList.remove(Oe), this._config.animation) {
                    var n = m.getTransitionDurationFromElement(this._element);
                    g(this._element).one(m.TRANSITION_END, e).emulateTransitionEnd(n)
                } else e()
            }, i._jQueryInterface = function(n) {
                return this.each(function() {
                    var t = g(this),
                        e = t.data(Ne);
                    if (e || (e = new i(this, "object" == typeof n && n), t.data(Ne, e)), "string" == typeof n) {
                        if (void 0 === e[n]) throw new TypeError('No method named "' + n + '"');
                        e[n](this)
                    }
                })
            }, s(i, null, [{
                key: "VERSION",
                get: function() {
                    return "4.5.0"
                }
            }, {
                key: "DefaultType",
                get: function() {
                    return Pe
                }
            }, {
                key: "Default",
                get: function() {
                    return xe
                }
            }]), i
        }();
    g.fn[De] = Le._jQueryInterface, g.fn[De].Constructor = Le, g.fn[De].noConflict = function() {
        return g.fn[De] = Ae, Le._jQueryInterface
    }, t.Alert = h, t.Button = E, t.Carousel = x, t.Collapse = V, t.Dropdown = ct, t.Modal = At, t.Popover = ae, t.Scrollspy = ye, t.Tab = Se, t.Toast = Le, t.Tooltip = Jt, t.Util = m, Object.defineProperty(t, "__esModule", {
        value: !0
    })
});
//# sourceMappingURL=bootstrap.js.map