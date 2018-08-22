(function($){
  $(function(){

    $('.sidenav').sidenav();
    $('.parallax').parallax();


       setTimeout(function(){
       $('body').addClass('loaded');
       $('h1').css('color','#222222');
    }, 3000);


       
  }); // end of document ready
})(jQuery); // end of jQuery name space
