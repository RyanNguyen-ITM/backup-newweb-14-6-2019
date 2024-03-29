/*! light-blue - v3.1.0 - 2014-12-06 */
function keyColor(a) { return window.colors || (window.colors = function() { return d3.scale.ordinal().range(COLOR_VALUES) }()), window.colors(a.key) }

function closeNavigation() {
    var a = $("#side-nav").find(".panel-collapse.in");
    a.collapse("hide"), a.siblings(".accordion-toggle").addClass("collapsed"), resetContentMargin();
    var b = $("#sidebar");
    $(window).width() < 768 && b.is(".in") && b.collapse("hide")
}

function resetContentMargin() { $(window).width() > 767 && $(".content").css("margin-top", "") }

function initPjax() {
    var a = function() { this.pjaxEnabled = window.PJAX_ENABLED, this.debug = window.DEBUG, this.$sidebar = $("#sidebar"), this.$content = $(".content"), this.$loaderWrap = $(".loader-wrap"), this.pageLoadCallbacks = {}, this.loading = !1, this._resetResizeCallbacks(), this._initOnResizeCallbacks(), this.pjaxEnabled && (this.$sidebar.find("a:not(.accordion-toggle):not([data-no-pjax])").on("click", $.proxy(this._checkLoading, this)), $(document).pjax("#sidebar a:not(.accordion-toggle):not([data-no-pjax])", ".content", { fragment: ".content", type: "GET", timeout: 1e4 }), $(document).on("pjax:start", $.proxy(this._changeActiveNavigationItem, this)), $(document).on("pjax:start", $.proxy(this._resetResizeCallbacks, this)), $(document).on("pjax:send", $.proxy(this.showLoader, this)), $(document).on("pjax:success", $.proxy(this._loadScripts, this)), $(document).on("pjax-app:loaded", $.proxy(this._loadingFinished, this)), $(document).on("pjax-app:loaded", $.proxy(this.hideLoader, this)), $(document).on("pjax:end", $.proxy(this.pageLoaded, this)), window.onerror = $.proxy(this._logErrors, this)) };
    a.prototype._initOnResizeCallbacks = function() {
        var a, b = this;
        $(window).resize(function() { clearTimeout(a), a = setTimeout(function() { b._runPageCallbacks(b.resizeCallbacks) }, 100) })
    }, a.prototype._resetResizeCallbacks = function() { this.resizeCallbacks = {} }, a.prototype._changeActiveNavigationItem = function(a, b, c) { this.$sidebar.find("li.active").removeClass("active"), this.$sidebar.find('a[href*="' + this.extractPageName(c.url) + '"]').each(function() { this.href === c.url && $(this).closest("li").addClass("active").closest(".panel").addClass("active") }) }, a.prototype.showLoader = function() {
        var a = this;
        this.showLoaderTimeout = setTimeout(function() { a.$content.addClass("hiding"), a.$loaderWrap.removeClass("hide"), setTimeout(function() { a.$loaderWrap.removeClass("hiding") }, 0) }, 200)
    }, a.prototype.hideLoader = function() {
        clearTimeout(this.showLoaderTimeout), this.$loaderWrap.addClass("hiding"), this.$content.removeClass("hiding");
        var a = this;
        this.$loaderWrap.one($.support.transition.end, function() { a.$loaderWrap.addClass("hide"), a.$content.removeClass("hiding") }).emulateTransitionEnd(200)
    }, a.prototype.onResize = function(a) { this._addPageCallback(this.resizeCallbacks, a) }, a.prototype.onPageLoad = function(a) { this._addPageCallback(this.pageLoadCallbacks, a) }, a.prototype.pageLoaded = function() { this._runPageCallbacks(this.pageLoadCallbacks) }, a.prototype._addPageCallback = function(a, b) {
        var c = this.extractPageName(location.href);
        a[c] || (a[c] = []), a[c].push(b)
    }, a.prototype._runPageCallbacks = function(a) {
        var b = this.extractPageName(location.href);
        a[b] && _(a[b]).each(function(a) { a() })
    }, a.prototype._loadScripts = function(a, b) {
        var c = $($.parseHTML(b.match(/<body[^>]*>([\s\S.]*)<\/body>/i)[0], document, !0)),
            d = c.filter("script[src]").add(c.find("script[src]")),
            e = c.filter('script[type="text/template"]').add(c.find('script[type="text/template"]')),
            f = $("script[src]"),
            g = $('script[type="text/template"]');
        e.each(function() {
            var a = this.id,
                b = g.filter(function() { return this.id === a });
            if (!b.length) {
                var c = document.createElement("script");
                c.id = $(this).attr("id"), c.type = $(this).attr("type"), c.innerHTML = this.innerHTML, document.body.appendChild(c)
            }
        });
        var h = { load: function(a) { a() } };
        d.each(function() {
            var a = this.src,
                b = f.filter(function() { return this.src === a });
            if (!b.length) {
                var c = document.createElement("script");
                c.src = $(this).attr("src"), h.load(function() { document.body.appendChild(c) }), h = $(c)
            }
        });
        var i = this;
        h.load(function() { $(document).trigger("pjax-app:loaded"), i.log("scripts loaded.") })
    }, a.prototype.extractPageName = function(a) { var b = a.split("#")[0].substring(a.lastIndexOf("/") + 1).split("?")[0]; return "" === b ? "index.html" : b }, a.prototype._checkLoading = function(a) { var b = this.loading; return this.loading = !0, b ? (this.log("attempt to load page while already loading; preventing."), a.preventDefault()) : this.log(a.currentTarget.href + " loading started."), !b }, a.prototype._loadingFinished = function() { this.loading = !1 }, a.prototype._logErrors = function() {
        var a = JSON.parse(localStorage.getItem("lb-errors")) || {};
        a[(new Date).getTime()] = arguments, localStorage.setItem("lb-errors", JSON.stringify(a))
    }, a.prototype.log = function(a) { this.debug && console.log(a + " - " + arguments.callee.caller.toString().slice(0, 30).split("\n")[0] + " - " + this.extractPageName(location.href)) }, window.PjaxApp = new a
}

function initDemoFunctions() { $(document).one("pjax:end", function() {}) }

function initAppPlugins() {
    ! function(a) { a(document).on("click", "table th [data-check-all]", function() { a(this).closest("table").find("input[type=checkbox]").not(this).prop("checked", a(this).prop("checked")) }) }(jQuery), ! function(a) {
        a.fn.animateProgressBar = function() {
            return this.each(function() {
                var b = a(this).find(".progress-bar");
                setTimeout(function() { b.css("width", b.data("width")) }, 0)
            })
        }, a(".js-progress-animate").animateProgressBar()
    }(jQuery)
}

function testData(a, b) {
    var c = (new Date).getTime(),
        d = 864e5,
        e = 60,
        f = e * d,
        g = c - f,
        b = b || 45,
        h = e / b;
    return stream_layers(a.length, b, .1).map(function(b, c) { return { key: a[c], values: b.map(function(a) { return { x: g + a.x * d * h, y: Math.floor(100 * a.y) } }) } })
}

function stream_layers(a, b, c) {
    function d(a) {
        for (var c = 1 / (.1 + Math.random()), d = 2 * Math.random() - .5, e = 10 / (.1 + Math.random()), f = 0; b > f; f++) {
            var g = (f / b - d) * e;
            a[f] += c * Math.exp(-g * g)
        }
    }
    return arguments.length < 3 && (c = 0), d3.range(a).map(function() { var a, e = []; for (a = 0; b > a; a++) e[a] = c + c * Math.random(); for (a = 0; 5 > a; a++) d(e); return e.map(stream_index) })
}

function stream_index(a, b) { return { x: b, y: Math.max(0, a) } }
window.PJAX_ENABLED = !0, window.DEBUG = !0;
var $lime = "#8CBF26",
    $red = "#e5603b",
    $redDark = "#d04f4f",
    $blue = "#6a8da7",
    $green = "#56bc76",
    $orange = "#eac85e",
    $pink = "#E671B8",
    $purple = "#A700AE",
    $brown = "#A05000",
    $teal = "#4ab0ce",
    $gray = "#666",
    $white = "#fff",
    $textColor = $gray,
    chartsOff = !1;
chartsOff && (nv.addGraph = function() {}), COLOR_VALUES = [$red, $orange, $green, $blue, $teal, $redDark], window.colors = function() { return window.d3 ? d3.scale.ordinal().range(COLOR_VALUES) : !1 }(), $(function() {
    var a = $("#sidebar");
    a.on("mouseleave", function() {
        ($(this).is(".sidebar-icons") || $(window).width() < 1049) && $(window).width() > 767 && setTimeout(function() { closeNavigation() }, 300)
    }), a.on("show.bs.collapse", function(b) { b.target == this && a.addClass("open") }), a.on("hide.bs.collapse", function(b) { b.target == this && (a.removeClass("open"), $(".content").css("margin-top", "")) }), $(window).resize(function() { closeNavigation() }), $(document).on("pjax-app:loaded", function() { $(window).width() < 768 && closeNavigation() }), $(".btn-group > .btn[data-toggle-class]").click(function() {
        var a = $(this),
            b = a.find("input").is("[type=radio]"),
            c = a.parent();
        b ? (c.children(".btn[data-toggle-class]").removeClass(function() { return $(this).data("toggle-class") }).addClass(function() { return $(this).data("toggle-passive-class") }), a.removeClass($(this).data("toggle-passive-class")).addClass(a.data("toggle-class"))) : a.toggleClass($(this).data("toggle-passive-class")).toggleClass(a.data("toggle-class"))
    }), $("#search-toggle").click(function() {
        a.data("bs.collapse") && a.collapse("hide");
        var b = $(".notifications"),
            c = !b.is(":empty");
        $("#search-form").css("height", function() {
            var a = $(this);
            0 == a.height() ? (a.css("height", 40), c && b.css("top", 86)) : (a.css("height", 0), c && b.css("top", ""))
        })
    }), a.on("show.bs.collapse", function() {
        var a = $(".notifications"),
            b = !a.is(":empty");
        $("#search-form").css("height", 0), b && a.css("top", "")
    }), $("#side-nav").find("a.accordion-toggle").on("click", function() {
        if ($(window).width() < 768) {
            var a = $(this),
                b = $("#side-nav"),
                c = b.height() + parseInt(b.css("margin-top")) + parseInt(b.css("margin-bottom")),
                d = c + 20,
                e = a.find("+ ul"),
                f = e.find("> li"),
                g = $.map(f, function(a) { return $(a).height() }).reduce(function(a, b) { return a + b }),
                h = $(".content");
            e.is(".in") ? h.css("margin-top", d - g + "px") : h.css("margin-top", d + g - a.closest("ul").find("> .panel > .panel-collapse.open").height() + "px")
        }
    }), a.on("show.bs.collapse", function(a) {
        if (a.target == this && $(window).width() < 768) {
            var b = $("#side-nav"),
                c = b.height() + parseInt(b.css("margin-top")) + parseInt(b.css("margin-bottom")),
                d = c + 20;
            $(".content").css("margin-top", d + "px")
        }
    });
    var b = a.find(".panel-collapse");
    b.on("show.bs.collapse", function(a) { a.target == this && $(this).addClass("open") }), b.on("hide.bs.collapse", function(a) { a.target == this && $(this).removeClass("open") }), initPjax(), initDemoFunctions(), initAppPlugins()
});