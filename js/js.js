// Start Wrapper
jQuery(document).ready( function($) {
  'use strict';

  // Mobile Nav Toggle
  $('#at-navtoggle').on( 'click', function(e) {
    $('#at-navtoggle').toggleClass("active");
    e.preventDefault();
  } );

// End Wrapper
} );



/* 
WooCommerce QTY Buttons */
(function($) {
    function createQTYButtons(target) {
        // Quantity buttons
        $(target).find('div.quantity:not(.buttons_added), td.quantity:not(.buttons_added)').addClass('buttons_added').append('<input type="button" value="+" class="plus" />').prepend('<input type="button" value="-" class="minus" />');
        // Target quantity inputs on product pages
        $(target).find('input.qty:not(.product-quantity input.qty)').each(function() {
            var min = parseFloat($(this).attr('min'));
            if (min && min > 0 && parseFloat($(this).val()) < min) {
                $(this).val(min);
            }
        });
        $(target).on('click', '.plus, .minus', function() {
            // Get values
            var $qty = $(this).closest('.quantity').find('.qty'),
                currentVal = parseFloat($qty.val()),
                max = parseFloat($qty.attr('max')),
                min = parseFloat($qty.attr('min')),
                step = $qty.attr('step');
            // Format values
            if (!currentVal || currentVal === '' || currentVal === 'NaN') currentVal = 0;
            if (max === '' || max === 'NaN') max = '';
            if (min === '' || min === 'NaN') min = 1;
            if (step === 'any' || step === '' || step === undefined || parseFloat(step) === 'NaN') step = 1;
            // Change the value
            if ($(this).is('.plus')) {
                if (max && (max == currentVal || currentVal > max)) {
                    $qty.val(max);
                } else {
                    $qty.val(currentVal + parseFloat(step));
                }
            } else {
                if (min && (min == currentVal || currentVal < min)) {
                    $qty.val(min);
                } else if (currentVal > 0) {
                    $qty.val(currentVal - parseFloat(step));
                }
            }
            // Trigger change event
            $qty.trigger('change');
        });
    }
    // jQuery plugin.
    $.fn.addQty = function() {
        return this.each(function(i, el) {
            createQTYButtons(el);
        });
    }
})(jQuery);

;(function ($) {
"use strict";

// Create QTY Buttons to product pages
$('.at-woo_prod-style2').addQty();
})(jQuery);