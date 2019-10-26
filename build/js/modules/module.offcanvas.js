var moduleOffcanvas = {
    toggle:function(){
        var offset = $(".page__offcanvas").width();
        moduleOffcanvas.animateCanvas(offset);
    },
    animateCanvas:function(offset){
        var canvas = $(".page__oncanvas");
        var offcanvas = $(".page__offcanvas");

        var pos = canvas.position();

        if(pos.left === 0){
            canvas.animate({
                left: offset
            }, 450);
        } else {
            canvas.animate({
                left: 0
            }, 450);
        }

        offcanvas.toggle('slide', 450);
    }
}