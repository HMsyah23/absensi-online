/** Notice * This file contains works from many authors under various (but compatible) licenses. Please see core.txt for more information. **/
(function(){(window.wpCoreControlsBundle=window.wpCoreControlsBundle||[]).push([[17],{334:function(Ca,va,aa){aa.r(va);var pa=aa(2),ja=aa(187);Ca=aa(324);var la=aa(70);aa=aa(283);var fa={},ca=function(z){function w(r,b){var a=z.call(this,r,b)||this;a.url=r;a.range=b;a.status=ja.a.NOT_STARTED;return a}Object(pa.c)(w,z);w.prototype.start=function(r){var b=this;"undefined"===typeof fa[this.range.start]&&(fa[this.range.start]={kF:function(a){var e=atob(a),f,x=e.length;a=new Uint8Array(x);for(f=0;f<x;++f)a[f]=e.charCodeAt(f);
e=a.length;f="";for(var n=0;n<e;)x=a.subarray(n,n+1024),n+=1024,f+=String.fromCharCode.apply(null,x);b.kF(f,r)},Maa:function(){b.status=ja.a.ERROR;r({code:b.status})}},window.external.notify(this.url),this.status=ja.a.STARTED);b.Xw()};return w}(Ca.ByteRangeRequest);Ca=function(z){function w(r,b,a,e){r=z.call(this,r,a,e)||this;r.Vs=ca;return r}Object(pa.c)(w,z);w.prototype.dr=function(r,b){return r+"?"+b.start+"&"+(b.stop?b.stop:"")};return w}(la.a);Object(aa.a)(Ca);Object(aa.b)(Ca);va["default"]=
Ca}}]);}).call(this || window)