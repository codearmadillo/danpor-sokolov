    var packageLazyload = {

  init:function(){
    
    var images = document.querySelectorAll('img.js-lazyload');

    for(let i = 0; i < images.length; i++) {

      var image = images[i];
      image.setAttribute('src', image.getAttribute('data-reference'));

    }
    
  }
  
}