function downloadApp() {

    togglePopup(); 
};

function closePopup(){
    var el = document.getElementById("modal");
    if ( el.style.display == 'none' ) { el.style.display = 'block';}
    else {el.style.display = 'none';}
}

function openPopup(level){
    togglePopup();
    $('#modal').scrollTop(0);
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
    var el = document.getElementById("modal");
    if ( el.style.display == 'none' ) { el.style.display = 'block';}
    else {el.style.display = 'none';}
}