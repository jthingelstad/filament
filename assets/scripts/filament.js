jQuery(document).ready(function() {
  jQuery('form').addClass('pure-form');
  jQuery('input[type="submit"]').addClass('pure-button');
  jQuery('input[type="submit"]').addClass('notice');

  jQuery('i.icon.cog').click(function(){
    jQuery('ul#page_menu').css('visibility', 'visible').css('margin-top', '2.5em');
  });
});