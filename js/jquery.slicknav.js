/*!
 * SlickNav Responsive Mobile Menu v1.0.4
 * Updated for improved functionality and smooth animations.
 * (c) 2015 Josh Cope
 * licensed under MIT
 */

;(function ($, document, window) {
    var defaults = {
        label: 'MENU',
        duplicate: true,
        duration: 300, // Adjusted for smoother animation
        easingOpen: 'easeOutExpo', // Smoother easing
        easingClose: 'easeInExpo',
        closedSymbol: '&#9658;',
        openedSymbol: '&#9660;',
        prependTo: 'body',
        parentTag: 'a',
        closeOnClick: false,
        allowParentLinks: false,
        nestedParentLinks: true,
        showChildren: false,
        removeIds: false,
        removeClasses: false,
        brand: '',
        init: function () {},
        beforeOpen: function () {},
        beforeClose: function () {},
        afterOpen: function () {},
        afterClose: function () {}
    };

    var mobileMenu = 'slicknav',
        prefix = 'slicknav';

    function Plugin(element, options) {
        this.element = element;
        this.settings = $.extend({}, defaults, options);
        this._defaults = defaults;
        this._name = mobileMenu;
        this.init();
    }

    Plugin.prototype.init = function () {
        var $this = this,
            menu = $(this.element),
            settings = this.settings;

        // Clone the menu if needed
        $this.mobileNav = settings.duplicate ? menu.clone().removeAttr('id') : menu;
        if (settings.removeClasses) {
            $this.mobileNav.removeAttr('class');
            $this.mobileNav.find('*').removeAttr('class');
        }

        $this.mobileNav.attr('class', prefix + '_nav');

        // Create the menu bar
        var menuBar = $('<div class="' + prefix + '_menu"></div>');
        if (settings.brand) {
            menuBar.append('<div class="' + prefix + '_brand">' + settings.brand + '</div>');
        }

        $this.btn = $(
            '<' + settings.parentTag + ' aria-haspopup="true" tabindex="0" class="' + prefix + '_btn ' + prefix + '_collapsed">' +
                '<span class="' + prefix + '_menutxt">' + settings.label + '</span>' +
                '<span class="' + prefix + '_icon">' +
                    '<span class="' + prefix + '_icon-bar"></span>' +
                    '<span class="' + prefix + '_icon-bar"></span>' +
                    '<span class="' + prefix + '_icon-bar"></span>' +
                '</span>' +
            '</' + settings.parentTag + '>'
        );

        menuBar.append($this.btn);
        $(settings.prependTo).prepend(menuBar);
        menuBar.append($this.mobileNav);

        // Handle toggle button
        $this.btn.click(function (e) {
            e.preventDefault();
            $this._menuToggle();
        });

        // Accessibility enhancements
        $this.mobileNav.attr('role', 'menu');
        $this.mobileNav.find('li').each(function () {
            var item = $(this),
                data = {};
            data.children = item.children('ul').attr('role', 'menu');
            item.data('menu', data);

            // Accessibility for links
            item.children('a').attr('role', 'menuitem').click(function (event) {
                if (settings.closeOnClick && !$(event.target).closest('li').hasClass(prefix + '_parent')) {
                    $this._menuToggle();
                }
            });
        });

        $this._visibilityToggle($this.mobileNav, null, false, 'init', true);
    };

    Plugin.prototype._menuToggle = function () {
        var $this = this,
            btn = $this.btn,
            menu = $this.mobileNav;

        if (btn.hasClass(prefix + '_collapsed')) {
            btn.removeClass(prefix + '_collapsed').addClass(prefix + '_open');
            $this._visibilityToggle(menu, null, true, btn);
        } else {
            btn.removeClass(prefix + '_open').addClass(prefix + '_collapsed');
            $this._visibilityToggle(menu, null, true, btn);
        }
    };

    Plugin.prototype._visibilityToggle = function (el, parent, animate, trigger) {
        var $this = this,
            settings = $this.settings,
            duration = animate ? settings.duration : 0;

        if (el.hasClass(prefix + '_hidden')) {
            el.removeClass(prefix + '_hidden').slideDown(duration, settings.easingOpen, function () {
                el.attr('aria-hidden', 'false');
                if (trigger) {
                    settings.afterOpen(trigger);
                }
            });
        } else {
            el.addClass(prefix + '_hidden').slideUp(duration, settings.easingClose, function () {
                el.attr('aria-hidden', 'true');
                if (trigger) {
                    settings.afterClose(trigger);
                }
            });
        }
    };

    $.fn[mobileMenu] = function (options) {
        return this.each(function () {
            if (!$.data(this, 'plugin_' + mobileMenu)) {
                $.data(this, 'plugin_' + mobileMenu, new Plugin(this, options));
            }
        });
    };
}(jQuery, document, window));
