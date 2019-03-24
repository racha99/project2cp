let sliderImages = document.querySelectorAll('.slide'),
arrowleft = document.querySelector('#arrow-left'),
arrowleft = document.querySelector('#arrow-right'),
current = 0;
//supprimer tout les images
function reset(){
  for(let i = 0; i < sliderImages.length; i++){
    sliderImages[i].style.display = 'none';
  }
}
function startSlide(){
  reset();
  sliderImages[0].style.display = 'block';
}

startSlide();
