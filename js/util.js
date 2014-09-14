/*
 *
 *  @author     Deliang Yang
 *  @version    0.1.0.1
 *  @date       2014-9-11 21:18
 *  @class      util
 *
 */

namespace=function(){
    var args=arguments;
    for(var i=0; i<args.length; i++){
        var objs=args[i].split(".");
        var obj=window;
        for(var j=0; j<objs.length; j++){
            obj[objs[j]]=obj[objs[j]] || {};
            obj=obj[objs[j]];
        }
    }
    return obj;
};

namespace("util.ajax");

