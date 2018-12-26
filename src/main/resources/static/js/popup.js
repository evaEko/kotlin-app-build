function downloadApp() {
    togglePopup(); 
};

function closePopup(){
    $('#la_modal').fadeOut("slow");
}

function openPopup(level){
    //togglePopup();
    $('#la_modal').fadeIn("slow");
    $('#la_modal').scrollTop(0);
    var begButton = document.getElementById("downloadBeg");
    var intButton = document.getElementById("downloadInt");
    if ( level == "beg") {
         intButton.style.display = 'none';
         begButton.style.display = 'initial';
    
    }
    else { 
        begButton.style.display = 'none';
        intButton.style.display = 'initial';
        
        } 

}

function togglePopup() {
    $("#la_modal").toggleClasseToggle( 300, "linear" );
}