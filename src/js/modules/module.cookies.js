var moduleCookies = {
  set:function(cname,cvalue,ctime){
    var now = new Date();
    var exp = new Date(now.getTime() + (ctime * 24 * 60 * 60 * 1000));
    var str = cname + "=" + cvalue + "; expires=" + exp + "; path=/";

    return document.cookie = str;
  },
  drop:function(cname){
    return document.cookie = cname + "=; expires=Thu, 01 Jan 1970 00:00:01 GMT; path=/";
  },
  get:function(cname){
    return cname;
  }
}
