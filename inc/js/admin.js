/*
 * Plugin JavaScript and jQuery code for the admin pages of website
 *
 * @package     RSS Feed Icon for SpecificFeeds.com
 * @uthor       Arthur Gareginyan
 * @link        https://www.arthurgareginyan.com
 * @copyright   Copyright (c) 2016-2017 Arthur Gareginyan. All Rights Reserved.
 * @since       4.7
 */


jQuery(document).ready(function($) {

    "use strict";

    // Remove the 'successful' message after 3 seconds
    if ('.updated') {
        setTimeout(function() {
            $('.updated').fadeOut();
        }, 3000);
    }

    // Enable Bootstrap Checkboxes
    $(':checkbox').checkboxpicker();

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

    // Get values for variables
    var plugin_url = specificfeedsicon_scriptParams["plugin_url"];

    // Live preview
    $('.sf_link').change(function() {
        var val = $(this).val() || 'http://';
        $('#preview .preview-icon a').attr('href',val);
    });

    $('.tooltip_text').change(function() {
        var val = $(this).val() || 'RSS Feed';
        $('#preview .preview-icon a').attr('data-original-title',val);
    });

    $('.icon_size').change(function() {
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
