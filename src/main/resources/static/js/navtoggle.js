$(document).ready(function(e) {
    var $burgerClosed = true;
    var $speed = 200;
    // var $input = $('#refresh');

    // $input.val() == 'yes' ? reload() : $input.val('yes');
    
    // if ($("#menu-control").prop('checked', true)){
    //      $(".content").hide();
    //      $(".footer").hide();
    // };
    $('#burger').click(function (e) {
         if ($burgerClosed) {

             $(".navigation ul").css( "opacity", "1" );
             $(".navigation ul").css( "visibility", "visible" );
             //$(".navigation-list").fadeIn("slow" );
             $(".navigation ul").fadeIn($speed);
             //$(".navigation ul").fadeToggle( 300, "linear" );
             $(".content").fadeOut($speed);
             $("footer").fadeOut($speed);
             $burgerClosed = false;
         } else {
             $(".navigation ul").css( "opacity", "0" );
             $(".navigation ul").css( "visibility", "hidden" );
             //$(".navigation-list").fadeIn("slow" );
             $(".navigation ul").fadeOut($speed );
             //$(".navigation ul").fadeToggle( 300, "linear" );
             $(".content").fadeIn($speed);
             $("footer").fadeIn($speed);
             $burgerClosed = true;

         }
      });
    }
);
function reload() {
    $("#menu-control").prop('checked', false);
    window.location.assign(document.URL)
}

    