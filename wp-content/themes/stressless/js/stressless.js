jQuery(function($) {  
    var pull        = $('#nav-main__toggle');  
        menu        = $('.nav-main ul');  
        menuHeight  = menu.height();  
  
    $(pull).on('click', function(e) {  
        e.preventDefault();  
        menu.slideToggle();  
    });  
});  


jQuery(window).resize(function($){  
    var w = $(window).width();  
    if(w > 320 && menu.is(':hidden')) {  
        menu.removeAttr('style');  
    }  
});   

jQuery('.read-more').click(function(e) {
  e.preventDefault();
  var el = jQuery(this);
  console.log(el.text());
  if (el.text() == el.data("text-expanded")) {
    el.text(el.data("text-original"));

  }
  else {
    el.data("text-original", el.text());
    el.text(el.data("text-expanded"));
  }
  el.closest('.class-info').toggleClass('is-expanded').find('.additional').slideToggle();
});
