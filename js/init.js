
(function($){
  $(function(){

    $('.sidenav').sidenav();
    $('.parallax').parallax();


    setTimeout(function(){
       $('body').addClass('loaded');
       $('h1').css('color','#222222');
    }, 3000);


    $(document).ready(function(){
      $('.tooltipped').tooltip();
    });
    
    $(document).ready(function(){
      $('.carousel').carousel();
    });


    $(document).ready(function(){
      $('.materialboxed').materialbox();
    });


    $(document).ready(function(){
      $('.scrollSpy').scrollSpy();
    });

  
       	
  }); // end of document ready
})(jQuery); // end of jQuery name space
