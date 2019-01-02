$.fn.extend({
  animateCss: function(options, callback) {
    var animationEnd = (function(el) {
      var animations = {
        animation: 'animationend',
        OAnimation: 'oAnimationEnd',
        MozAnimation: 'mozAnimationEnd',
        WebkitAnimation: 'webkitAnimationEnd',
      };

      for (var t in animations) {
        if (el.style[t] !== undefined) {
          return animations[t];
        }
      }
    })(document.createElement('div'));
    
    return $(this).each(function(){
        var item = $(this);
        var opts = $.extend({}, {
          animation: item.attr('data-animation'),
          delay: item.attr('data-delay') || 0,
          speed: item.attr('data-speed'),
        }, options);

        
        setTimeout(function(){
          if(opts.speed){
            item.css({
              '-webkit-animation-duration': opts.speed + 'ms',
              'animation-duration': opts.speed+'ms',
            });
          }
          item.addClass('animated ' + opts.animation).one(animationEnd, function() {
            item.removeClass('animated ' + opts.animation).addClass('in');

            if (typeof callback === 'function') callback();
          });
        }, opts.delay);
        
    });
  },
});

$(function(){

  $('.testimonials .owl-carousel').owlCarousel({
      loop:true,
      nav:false,
      items: 1,
      dots: true,
  });

  $('.banner-carousel').owlCarousel({
    loop: true,
    nav: false,
    arrows: false,
    items: 1,
    dots: false,
    nav: false,
    autoplay: true,
    autoplayTimeout: 5000,
    animateOut: 'fadeOut',
    animateIn: false,
    mouseDrag: false,
    touchDrag: false,
    freeDrag: false,
    pullDrag: false,
    autoplayHoverPause: true,
    slideTransition: 'linear',
    onInitialized: function(event){
      var owl = this,
          active = owl.$element.find('.owl-item.active').not('.cloned').first();
      
      active.find('.animate').animateCss();
    },
    onTranslate: function(event){
      var owl = this,
          items = owl.$element.find('.owl-item').not('.cloned'),
          active = items.filter('.active').first(),
          next = active.next(':not(.cloned)').length ? active.next(':not(.cloned)') : items.first();

        
    },
    onTranslated: function(event){
      var owl = this,
          items = owl.$element.find('.owl-item').not('.cloned'),
          active = items.filter('.active').first(),
          prev = active.prev(':not(.cloned)').length ? active.prev(':not(.cloned)') : items.last();

        active.find('.animate').animateCss();
        prev.find('.animate').removeClass('in');
    },
      
  });

  $('input').iCheck({
    checkboxClass: 'icheckbox_flat-red',
    radioClass: 'iradio_flat-red'
  });
    
});
