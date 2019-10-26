var packageLazyload = {
    init:function(){
        $(".js-lazyload").each(function(){
            $(this).attr('src', $(this).attr('data-reference'));
            console.log($(this).attr('data-reference'));
        });
    }
}

$(document).ready(function(){
    packageLazyload.init();
});