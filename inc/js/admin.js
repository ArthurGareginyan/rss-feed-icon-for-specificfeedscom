/*
 * Plugin JavaScript and jQuery code for the admin pages of website
 *
 * @package     RSS Feed Icon for SpecificFeeds.com
 * @author      Arthur Gareginyan
 * @link        https://www.arthurgareginyan.com
 * @copyright   Copyright (c) 2016-2017 Arthur Gareginyan. All Rights Reserved.
 */


jQuery(document).ready(function($) {

    "use strict";

    // Remove the 'successful' message after 3 seconds
    if ('.updated') {
        setTimeout(function() {
            $('.updated').fadeOut();
        }, 3000);
    }

    // Add dynamic content to page tabs. Needed for having an up to date content.
    $('.include-tab-author').load('https://www.spacexchimp.com/assets/dynamic-content/plugins.html #include-tab-author');
    $('.include-tab-store').load('https://www.spacexchimp.com/assets/dynamic-content/plugins.html #include-tab-store');

    // Add questions and answers into spoilers and color them in different colors
    $('.panel-group .panel').each(function(i) {
         $('.question-' + (i+1) ).appendTo( $('h4', this) );
         $('.answer-' + (i+1) ).appendTo( $('.panel-body', this) );

         if ( $(this).find('h4 div').hasClass('question-red') ) {
             $(this).addClass('panel-danger');
         } else {
             $(this).addClass('panel-info');
         }
    });

    // Enable switches
    $('.control-switch').checkboxpicker();

    // Enable number fields
    $('.control-number .btn-danger').on('click', function(){
        var input = $(this).parent().siblings('input');
        var value = parseInt(input.val());
        input.val(value - 1);
        input.change();
    });
    $('.control-number .btn-success').on('click', function(){
        var input = $(this).parent().siblings('input');
        var value = parseInt(input.val());
        input.val(value + 1);
        input.change();
    });

    // Live preview
    var plugin_url = spacexchimp_p002_scriptParams["plugin_url"];
    $('.sf_link').change(function() {
        var val = $(this).val() || 'http://';
        $('#preview .preview-icon a').attr('href',val);
    });
    $('.tooltip_text').change(function() {
        var val = $(this).val() || 'RSS Feed';
        $('#preview .preview-icon a').attr('data-original-title',val);
    });
    $('.icon_size input').change(function() {
        var val = $(this).val() || '60';
        $('#preview .preview-icon img').attr('style', 'width:' + val + 'px !important; height:' + val + 'px !important');

    });
    $('.tooltip').on('change', function() {
        var val = $(this).val();
        var position = $(this).next().children().hasClass('btn-success');
        var text = $('.tooltip_text').val() || 'RSS Feed';
        if (position === true) {
            $('#preview .preview-icon a').attr('data-toggle','tooltip');
            $('#preview .preview-icon a').attr('data-original-title',text);
        } else {
            $('#preview .preview-icon a').removeAttr('data-toggle');
            $('#preview .preview-icon a').removeAttr('data-original-title');
        }
    });
    $('.integrated-icons').on('change', function() {
        var val = $('input[type=radio]:checked', '.integrated-icons').val() || '8';
        val = plugin_url + 'inc/img/icons/' + val + '.png';
        $('#preview .preview-icon img').attr('src', val);
    });

});
