$('.carousel').carousel({
  //interval: 2000
});

/*$('.carousel').on('slide.bs.carousel', function () {
  $('body').css('background-color','#'+(Math.random()*0xFFFFFF<<0).toString(16));
})*/

/*!function($) {
var number = 0;
    var tmp = $.fn.carousel.Constructor.prototype.cycle;
    $.fn.carousel.Constructor.prototype.cycle = function (relatedTarget) {  
        // custom JavaScript code here
        number = (number % 4) + 1;
        $('body').css('transform','rotate('+ number * 90 +'deg)');
        tmp.call(this); // call the original function
    };

}(jQuery);*/
