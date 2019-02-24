/*jQuery().ready(function() {

    jQuery('.drop-down').append('<div class="button"></div>');
    jQuery('.drop-down').append('<ul class="select-list"></ul>');
    jQuery('.drop-down select option').each(function() {
        var bg = jQuery(this).css('background-image');
        jQuery('.select-list').append('<li class="clsAnchor"><span value="' + jQuery(this).val() + '" class="' + jQuery(this).attr('class') + '" style=background-image:' + bg + '>' + jQuery(this).text() + '</span></li>');
    });
    jQuery('.drop-down .button').html('<span>' + jQuery('.drop-down select').find(':selected').text() + '</span>' + '<a href="javascript:void(0);" class="select-list-link">Arrow</a>');
    jQuery('.drop-down ul li').each(function() {
        if (jQuery(this).find('span').text() == jQuery('.drop-down select').find(':selected').text()) {
            jQuery(this).addClass('active');
        }
    });
    jQuery('.drop-down .select-list span').on('click', function()
    {
        var dd_text = jQuery(this).text();

        var dd_val = jQuery(this).attr('value');
        jQuery('.drop-down .button').html('<span>' + dd_text + '</span>' + '<a href="javascript:void(0);" class="select-list-link">Arrow</a>');
        jQuery('.drop-down .select-list span').parent().removeClass('active');
        jQuery(this).parent().addClass('active');
        $('.drop-down select[name=options]').val( dd_val );
        $('.drop-down .select-list li').slideUp();
    });
    jQuery('.drop-down .button').on('click','a.select-list-link', function()
    {
        jQuery('.drop-down ul li').slideToggle();
    });

});*/
/*var trigger = $('.language-select');
var list = $('.languages');

trigger.click(function() {
    trigger.toggleClass('active');
    list.slideToggle(200);
});

// this is optional to close the list while the new page is loading
list.click(function() {
    trigger.click();
});*/