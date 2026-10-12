


let zoomtriger = $('#zoomIn') 

let zoomPopUp = $('.zoom-popup')

let popUpClose = $('.zoom-popup-close')

// show pop up zoom in img 

zoomtriger.on('click', function() {
   
  zoomPopUp.fadeIn(300)  
});


// hide pop up zoom in img 

popUpClose.on('click', function() {   
    zoomPopUp.fadeOut(300); 
});



