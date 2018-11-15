
(function($){
  $(function(){

    $('.sidenav').sidenav();
    $('.parallax').parallax();

    // $(document).ready(function(){
    //   // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    //   $('.modal-trigger').leanModal();
    // });

    setTimeout(function(){
       $('body').addClass('loaded');
       $('h1').css('color','#222222');
    }, 3000);


    $(document).ready(function(){
      $('.tooltipped').tooltip();
    });

    $(document).ready(function(){
      $('.scrollSpy').scrollSpy();
    });

    $(document).ready(function(){
      $('.slider').slider();
    });

    $('.carousel.carousel-slider').carousel({
     fullWidth: true
    });
    

    //initialize all modals           
    $('.modal').modal();

    //or by click on trigger
    $('.modal-trigger').modal();
    

    // $(document).ready( function () {
    //  $('#myTable').DataTable();
    // });

    // $(document).ready(function(){
    //   $('#clickId' ).click(function() {
    //     var bid = this.id; // button ID 
    //     var trid = $(this).closest('tr').attr('id'); // table row ID 

    //     console.log(trid);
    //     console.log('HI IDIOT');
    //   });
    // });
   
  }); // end of document ready
})(jQuery); // end of jQuery name space
