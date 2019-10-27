var moduleOffcanvas = {

  toggle: function() {

    var element = document.querySelector('.page__offcanvas');

    if(!element) return;

    if(element.hasClass('active')) {
      element.removeClass('active');
    } else {
      element.addClass('active');
    }

  }

}