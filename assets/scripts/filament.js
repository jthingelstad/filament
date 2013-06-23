jQuery(document).ready(function() {
  jQuery('form').addClass('pure-form');
  jQuery('input[type="submit"]').addClass('pure-button');
  jQuery('input[type="submit"]').addClass('notice');

  jQuery('a#page_action_trigger').click(function(){
    if (jQuery('ul#page_action_menu').css('visibility')=='hidden'){
      jQuery('ul#page_action_menu').css('visibility', 'visible');
    } else {
      jQuery('ul#page_action_menu').css('visibility', 'hidden');
    }
  });

  jQuery('a#menuLink').click(function(){
    if (jQuery('div#menu').css('left')=='0px'){
      jQuery('div#layout').addClass('active');
      jQuery('div#menu').addClass('active');
    } else {
      jQuery('div#layout').removeClass('active');
      jQuery('div#menu').removeClass('active');
    }
  });

});