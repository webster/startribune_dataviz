!function(t){function e(i){if(n[i])return n[i].exports;var o=n[i]={i:i,l:!1,exports:{}};return t[i].call(o.exports,o,o.exports,e),o.l=!0,o.exports}var n={};e.m=t,e.c=n,e.d=function(t,n,i){e.o(t,n)||Object.defineProperty(t,n,{configurable:!1,enumerable:!0,get:i})},e.n=function(t){var n=t&&t.__esModule?function(){return t.default}:function(){return t};return e.d(n,"a",n),n},e.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},e.p="",e(e.s=0)}([function(t,e,n){"use strict";var i=n(1);(0,function(t){return t&&t.__esModule?t:{default:t}}(i).default)({}),d3.json("http://googlescript.startribune.com/?macro=AKfycbw_cqdXZADky_zHS3pi9aBL2S3-514vlxJkcnv5TJ1z9sxCqPY&id=1PzsxrXT6YjRJlHH64m26HcfJMlfrOOLVIyKT_SMnIuw&sheet=bars",function(t,e){var n=e.bars;jQuery.ui.autocomplete.prototype._resizeMenu=function(){this.menu.element.outerWidth(this.element.outerWidth())},mapboxgl.accessToken="pk.eyJ1Ijoic2hhZG93ZmxhcmUiLCJhIjoiS3pwY1JTMCJ9.pTSXx_LFgR3XBpCNNxWPKA";var i=new mapboxgl.Map({container:"map",style:"mapbox://styles/shadowflare/ciqzo0bu20004bknkbrhrm6wf",center:[-109.160156,42.916206],zoom:2,minZoom:2});i.scrollZoom.disable(),i.on("load",function(){!function(){function t(t){this.dd=t,this.placeholder=this.dd.children("span"),this.opts=this.dd.find("ul.dropdown > li"),this.val="",this.index=-1,this.initEvents()}var e="Alaska";$("#switches").append("<li class='thisSwitch'>"+e+"</li>"),d3.select("#listing").selectAll(".card").data(n.sort(function(t,e){return d3.ascending(t.STATE,e.STATE)})).enter().append("div").attr("class",function(t){return"card "}).attr("longitude",function(t){return t.LONG}).attr("latitude",function(t){return t.LAT}).attr("placeName",function(t){return t.NAME}).attr("pitch",function(t){return t.pitch}).attr("bearing",function(t){return t.bearing}).on("mousedown",function(t,e){$("#name, .pname").html(t.NAME),$("#address, .paddress").html("<div>"+t.NAME+"</div><div>"+t.DISPLAY_ADDRESS+"</div><div>"+t.CITY+", "+t.AB+"</div>"),$("#phone, .pphone").html(t.PHONE),$("#website, .pwebsite").html("<a href='"+t.WEBSITE+"' target='new_'>Website</a> | <a href='https://maps.google.com?daddr="+t.ADDRESS+"' target='new_'>Directions</a>")}).html(function(t){var n="";return e!=t.STATE&&(e=t.STATE,n="<li class='thisSwitch'>"+e+"</li>"),$("#switches").append(n),i.addLayer({id:"dots-"+t.INDEX,type:"circle",paint:{"circle-color":"rgba(79, 38, 131, 0.5)","circle-radius":5},source:{type:"geojson",data:{type:"FeatureCollection",features:[{type:"Feature",geometry:{type:"Point",coordinates:[t.LONG,t.LAT]},properties:{title:t.NAME,icon:"monument"}}]}}}),$(".zoom").click(function(){popup.remove()}),"<div class='col'>"+t.NAME+"</div><div class='col places'>"+t.CITY+"</div><div class='col places hideme'>"+t.STATE+"</div><div class='col places'>"+t.AB+"</div><div class='col'>"+t.PHONE+"</div>"}),$(".thisSwitch").click(function(t){$("#map").hide(),$("#listing").show(),$(".card").hide();var e=$(this).text();$(".card").each(function(){-1!=$(this).text().toUpperCase().indexOf(e.toUpperCase())&&$(this).show()})}),$(".card").click(function(){$("#map").show(),$("#listing").hide();var t=Math.floor(4*Math.random())+1,e=$(this).attr("pitch")/t,n=$(this).attr("bearing")/t;$("#infobox").show(),i.jumpTo({center:[$(this).attr("longitude"),$(this).attr("latitude")],zoom:14,pitch:e,bearing:n}),$(".card").removeClass("selected"),$(this).addClass("selected")}),t.prototype={initEvents:function(){var t=this;t.dd.on("click",function(t){return $(this).toggleClass("active"),!1}),t.opts.on("click",function(){var e=$(this);t.val=e.text(),t.index=e.index(),t.placeholder.text(t.val)})},getValue:function(){return this.val},getIndex:function(){return this.index}},$(function(){new t($("#dd")),new t($("#ddY")),$(document).click(function(){$(".wrapper-dropdown-1").removeClass("active")})})}()}),$(document).ready(function(){$("#wrapper").width()<520?i.jumpTo({center:[-95.712891,37.09024],zoom:2,pitch:0,bearing:0}):i.jumpTo({center:[-109.160156,42.916206],zoom:2,pitch:0,bearing:0}),$(window).resize(function(){$("#wrapper").width()<520?i.jumpTo({center:[-95.712891,37.09024],zoom:2,pitch:0,bearing:0}):i.jumpTo({center:[-109.160156,42.916206],zoom:2,pitch:0,bearing:0})})}),$(".zoom, .mapify").click(function(){i.jumpTo({center:[-109.160156,42.916206],zoom:2,pitch:0,bearing:0}),$(".stat").html(""),$(".card").removeClass("selected"),$("#filter_box").val(""),$(".card").show(),$("#infobox").hide(),$("#map").show(),$("#listing").hide(),$("#selectText").html("Select a state")}),$(".return").click(function(){$("#map").hide(),$("#listing").show(),$(".card").show()})})},function(t,e,n){"use strict";function i(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}Object.defineProperty(e,"__esModule",{value:!0});var o=function(){function t(t,e){for(var n=0;n<e.length;n++){var i=e[n];i.enumerable=i.enumerable||!1,i.configurable=!0,"value"in i&&(i.writable=!0),Object.defineProperty(t,i.key,i)}}return function(e,n,i){return n&&t(e.prototype,n),i&&t(e,i),e}}(),r=n(2),a=function(t){return t&&t.__esModule?t:{default:t}}(r),c=function(){function t(e){i(this,t),this.options=e||{},this.options.pym=void 0===this.options.pym||this.options.pym,this.options.useView=void 0===this.options.useView||this.options.useView,this.options.views=this.options.views||{develop:/localhost.*|127\.0\.0\.1.*/i,staging:/staging/i},this.parseQuery(),this.setView(),this.options.pym&&(this.pym=_.isUndefined(window.pym)?void 0:new pym.Child({polling:500}))}return o(t,[{key:"setView",value:function(){if(this.options.useView){var t=void 0;if(_.find(this.options.views,function(e,n){return t=n,window.location.href.match(e)?n:void 0}),t){var e=document.createElement("div"),n=document.getElementsByTagName("body")[0];e.className="site-view site-view-"+t,n.insertBefore(e,n.childNodes[0])}}}},{key:"parseQuery",value:function(){this.query=a.default.parse(document.location.search),this.query.pym&&"true"===this.query.pym&&(this.options.pym=!0)}},{key:"deepClone",value:function(t){return JSON.parse(JSON.stringify(t))}},{key:"isEmbedded",value:function(){if(!_.isUndefined(this.embedded))return this.embedded;try{this.embedded=window.self!==window.top}catch(t){this.embedded=!0}return this.embedded}},{key:"hasLocalStorage",value:function(){if(!_.isUndefined(this.localStorage))return this.localStorage;try{window.localStorage.setItem("test","test"),window.localStorage.removeItem("test"),this.localStorage=!0}catch(t){this.localStorage=!1}return this.localStorage}},{key:"hasGeolocate",value:function(){return window.navigator&&"geolocation"in window.navigator}},{key:"geolocate",value:function(t){this.hasGeolocate()?window.navigator.geolocation.getCurrentPosition(function(e){t(null,{lat:e.coords.latitude,lng:e.coords.longitude})},function(){t("Unable to find your position.")}):t("Geolocation not available")}},{key:"goTo",value:function(t){var e=_.isElement(t)?t:t[0]&&_.isElement(t[0])?t[0]:document.getElementById(t);e&&(this.isEmbedded()&&this.pym?this.pym.scrollParentToChildEl(e):e.scrollIntoView({behavior:"smooth"}))}},{key:"gaPageUpdate",value:function(t){t=t||document.location.pathname+document.location.search+document.location.hash,window.ga&&(window.ga("set","page",t),window.ga("send","pageview"))}}]),t}();e.default=function(t){return new c(t)}},function(t,e,n){"use strict";function i(t){switch(t.arrayFormat){case"index":return function(e,n,i){return null===n?[r(e,t),"[",i,"]"].join(""):[r(e,t),"[",r(i,t),"]=",r(n,t)].join("")};case"bracket":return function(e,n){return null===n?r(e,t):[r(e,t),"[]=",r(n,t)].join("")};default:return function(e,n){return null===n?r(e,t):[r(e,t),"=",r(n,t)].join("")}}}function o(t){var e;switch(t.arrayFormat){case"index":return function(t,n,i){if(e=/\[(\d*)\]$/.exec(t),t=t.replace(/\[\d*\]$/,""),!e)return void(i[t]=n);void 0===i[t]&&(i[t]={}),i[t][e[1]]=n};case"bracket":return function(t,n,i){return e=/(\[\])$/.exec(t),t=t.replace(/\[\]$/,""),e?void 0===i[t]?void(i[t]=[n]):void(i[t]=[].concat(i[t],n)):void(i[t]=n)};default:return function(t,e,n){if(void 0===n[t])return void(n[t]=e);n[t]=[].concat(n[t],e)}}}function r(t,e){return e.encode?e.strict?c(t):encodeURIComponent(t):t}function a(t){return Array.isArray(t)?t.sort():"object"==typeof t?a(Object.keys(t)).sort(function(t,e){return Number(t)-Number(e)}).map(function(e){return t[e]}):t}var c=n(3),s=n(4);e.extract=function(t){return t.split("?")[1]||""},e.parse=function(t,e){e=s({arrayFormat:"none"},e);var n=o(e),i=Object.create(null);return"string"!=typeof t?i:(t=t.trim().replace(/^(\?|#|&)/,""))?(t.split("&").forEach(function(t){var e=t.replace(/\+/g," ").split("="),o=e.shift(),r=e.length>0?e.join("="):void 0;r=void 0===r?null:decodeURIComponent(r),n(decodeURIComponent(o),r,i)}),Object.keys(i).sort().reduce(function(t,e){var n=i[e];return Boolean(n)&&"object"==typeof n&&!Array.isArray(n)?t[e]=a(n):t[e]=n,t},Object.create(null))):i},e.stringify=function(t,e){e=s({encode:!0,strict:!0,arrayFormat:"none"},e);var n=i(e);return t?Object.keys(t).sort().map(function(i){var o=t[i];if(void 0===o)return"";if(null===o)return r(i,e);if(Array.isArray(o)){var a=[];return o.slice().forEach(function(t){void 0!==t&&a.push(n(i,t,a.length))}),a.join("&")}return r(i,e)+"="+r(o,e)}).filter(function(t){return t.length>0}).join("&"):""}},function(t,e,n){"use strict";t.exports=function(t){return encodeURIComponent(t).replace(/[!'()*]/g,function(t){return"%"+t.charCodeAt(0).toString(16).toUpperCase()})}},function(t,e,n){"use strict";function i(t){if(null===t||void 0===t)throw new TypeError("Object.assign cannot be called with null or undefined");return Object(t)}/*
object-assign
(c) Sindre Sorhus
@license MIT
*/
var o=Object.getOwnPropertySymbols,r=Object.prototype.hasOwnProperty,a=Object.prototype.propertyIsEnumerable;t.exports=function(){try{if(!Object.assign)return!1;var t=new String("abc");if(t[5]="de","5"===Object.getOwnPropertyNames(t)[0])return!1;for(var e={},n=0;n<10;n++)e["_"+String.fromCharCode(n)]=n;if("0123456789"!==Object.getOwnPropertyNames(e).map(function(t){return e[t]}).join(""))return!1;var i={};return"abcdefghijklmnopqrst".split("").forEach(function(t){i[t]=t}),"abcdefghijklmnopqrst"===Object.keys(Object.assign({},i)).join("")}catch(t){return!1}}()?Object.assign:function(t,e){for(var n,c,s=i(t),u=1;u<arguments.length;u++){n=Object(arguments[u]);for(var l in n)r.call(n,l)&&(s[l]=n[l]);if(o){c=o(n);for(var d=0;d<c.length;d++)a.call(n,c[d])&&(s[c[d]]=n[c[d]])}}return s}}]);
//# sourceMappingURL=app.bundle.js.map