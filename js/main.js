(function() {
    'use strict';
    /*Checks if element exist in DOM and then Apply function once*/
    $.fn.doOnce = function(func) {
        var self = this;
        self.length && func.apply(self);
        return self;
    };

    $(document).ready(function() {

        /////////--- SIDEBAR NAV (TOP LEFT)
        $('.side-nav').hover(function(e) {
            $(this).find('.dropdown .dropdown-menu').slideDown(200);
            e.stopPropagation();
            e.preventDefault();
        }, function(e) {
            $(this).find('.dropdown .dropdown-menu').slideUp(400);
            e.stopPropagation();
            e.preventDefault();
        });

        /////////--- DATASTACK

        // Animate datastack
        $('.layers').hover(function() {

            $(this).find('div:nth-child(1)').animate({
                'top': '-=20px'
            }, 200);
            $(this).find('div:nth-child(2)').animate({
                'top': '-=12px'
            }, 200);
            $(this).find('div:nth-child(3)').animate({
                'top': '-=4px'
            }, 200);
            $(this).find('div:nth-child(4)').animate({
                'top': '+=4px'
            }, 200);
            $(this).find('div:nth-child(5)').animate({
                'top': '+=12px'
            }, 200);
        }, function() {
            $(this).find('div:nth-child(1)').animate({
                'top': '+=20px'
            }, 200);
            $(this).find('div:nth-child(2)').animate({
                'top': '+=12px'
            }, 200);
            $(this).find('div:nth-child(3)').animate({
                'top': '+=4px'
            }, 200);
            $(this).find('div:nth-child(4)').animate({
                'top': '-=4px'
            }, 200);
            $(this).find('div:nth-child(5)').animate({
                'top': '-=12px'
            }, 200);
        });

        // Event when data layer is hover
        var hover = function() {
            var layer = $(this);
            layer.find('img:nth-child(1)').css('display', 'none');
            layer.find('img:nth-child(2)').css('display', 'block');

        };
        // Event when data layer is mouse unfocus
        var release = function() {
            var layer = $(this);
            layer.find('img:nth-child(1)').css('display', 'block');
            layer.find('img:nth-child(2)').css('display', 'none');
        };
        // Apply the hover event to all layer divs
        $('#datastack .layers > div').hover(hover, release);


        /////////--- SERVICES > Step summary
        $('.step-summary').click(function() {
            var details = $(this).parent().find('.step-details');

            details.slideToggle(300, function() {
                var less = $(this).parent().find('.less');
                var more = $(this).parent().find('.more');

                if (!less.is(':visible')) {
                    less.attr('style', 'display:inline');
                    more.attr('style', 'display:none');
                } else {
                    less.attr('style', 'display:none');
                    more.attr('style', 'display:inline');
                }
            });
        });

        ////////--- MODULES > module description
        $('.module').click(function() {
            var description = $(this).find('.content');

            description.slideToggle(300);

        });

    });
})();
