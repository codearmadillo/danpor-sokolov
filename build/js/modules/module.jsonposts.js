var moduleJsonPosts = {
    load: new $.Deferred(),
    init:function(){
        moduleJsonPosts.getJson();

        moduleJsonPosts.load.done(function(res){
            return viewJsonPosts.init(res);
        });
    },
    getJson:function(){
        return $.get({
            url: 'url',
            dataType: "json",
            error: function(response){
                console.log(response);
                moduleJsonPosts.reject();
            },
            success: function(response){
                console.log('Posts loaded');
                moduleJsonPosts.load.promise(response);
            }
        })
    }
}