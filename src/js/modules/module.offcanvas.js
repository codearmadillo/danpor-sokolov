var moduleOffcanvas = {

  toggle: function() {

    var element = document.querySelector('.page__offcanvas');

    if(!element) return;

    if(element.classList.contains('active')) {
      element.classList.remove('active');
    } else {
      element.classList.add('active');
    }

  }

}