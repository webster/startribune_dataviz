!function t(e,i,n){function o(s,c){if(!i[s]){if(!e[s]){var f="function"==typeof require&&require;if(!c&&f)return f(s,!0);if(u)return u(s,!0);throw new Error("Cannot find module '"+s+"'")}var r=i[s]={exports:{}};e[s][0].call(r.exports,function(t){var i=e[s][1][t];return o(i||t)},r,r.exports,t,e,i,n)}return i[s].exports}for(var u="function"==typeof require&&require,s=0;s<n.length;s++)o(n[s]);return o}({1:[function(t,e,i){d3.json("./data/invasion.geojson",function(t,e){d3.json("./data/invasion.json",function(t,i){d3.json("./shapefiles/waters.json",function(t,n){d3.json("./shapefiles/extent.json",function(t,o){var u=i.waters;mapboxgl.accessToken="pk.eyJ1Ijoic2hhZG93ZmxhcmUiLCJhIjoiS3pwY1JTMCJ9.pTSXx_LFgR3XBpCNNxWPKA";var s=new mapboxgl.Map({container:"map",style:"mapbox://styles/shadowflare/ciqzo0bu20004bknkbrhrm6wf",center:[-53.964844,35.380093],zoom:2,minZoom:2});s.addControl(new mapboxgl.NavigationControl),s.scrollZoom.disable(),s.on("load",function(){function t(t){if($(".trackDot").removeClass("selected"),$("#d"+t).addClass("selected"),$(".year").html(l[t]),index=t,0==t&&(u("waters"),m(1986,2016),c("extent"),T(-53.964844,35.380093,2,0,0)),1==t&&(u("extent"),u("waters"),m(1991,2016),T(-82.441406,41.827619,7,0,0),a(1986),a(1987),T(-82.441406,41.827619,6,0,0),setTimeout(function(){a(1988)},1e3),T(-82.441406,41.827619,5,0,0),setTimeout(function(){a(1989)},1500),setTimeout(function(){a(1990)},2e3)),2==t&&(u("extent"),u("waters"),m(1992,2016),a(1991),T(-95.95459,46.489884,6,0,0)),3==t&&(u("extent"),m(1994,2016),T(-95.95459,46.489884,6,0,0),a(1992),setTimeout(function(){a(1992)},200),setTimeout(function(){a(1993)},400),setTimeout(function(){a(1994)},800),setTimeout(function(){a(1995)},1e3),setTimeout(function(){a(1996)},1e3),setTimeout(function(){a(1997)},1e3),setTimeout(function(){a(1998)},1200),setTimeout(function(){a(1999)},1400),setTimeout(function(){a(2e3)},1600),setTimeout(function(){a(2001)},1800),setTimeout(function(){a(2002)},2e3),setTimeout(function(){a(2003)},2200),setTimeout(function(){a(2004)},2400),setTimeout(function(){a(2005)},2600),setTimeout(function(){a(2006)},2800),setTimeout(function(){a(2007)},3e3),setTimeout(function(){a(2008)},3200),setTimeout(function(){a(2009)},3400),setTimeout(function(){a(2010)},3600),setTimeout(function(){a(2011)},3800),setTimeout(function(){a(2012)},4e3),setTimeout(function(){a(2013)},4200),setTimeout(function(){a(2014)},4400),setTimeout(function(){a(2015)},4600),setTimeout(function(){a(2016)},4800),setTimeout(function(){c("waters")},5e3)),4==t&&(u("extent"),c("waters"),a(1992),setTimeout(function(){a(1992)},200),setTimeout(function(){a(1993)},400),setTimeout(function(){a(1994)},800),setTimeout(function(){a(1995)},1e3),setTimeout(function(){a(1996)},1e3),setTimeout(function(){a(1997)},1e3),setTimeout(function(){a(1998)},1200),setTimeout(function(){a(1999)},1400),setTimeout(function(){a(2e3)},1600),setTimeout(function(){a(2001)},1800),setTimeout(function(){a(2002)},2e3),setTimeout(function(){a(2003)},2200),setTimeout(function(){a(2004)},2400),setTimeout(function(){a(2005)},2600),setTimeout(function(){a(2006)},2800),setTimeout(function(){a(2007)},3e3),setTimeout(function(){a(2008)},3200),setTimeout(function(){a(2009)},3400),setTimeout(function(){a(2010)},3600),setTimeout(function(){a(2011)},3800),setTimeout(function(){a(2012)},4e3),setTimeout(function(){a(2013)},4200),setTimeout(function(){a(2014)},4400),setTimeout(function(){a(2015)},4600),setTimeout(function(){a(2016)},4800),T(-93.660534,46.252983,9,0,0)),5==t&&(u("extent"),c("waters"),a(1992),setTimeout(function(){a(1992)},200),setTimeout(function(){a(1993)},400),setTimeout(function(){a(1994)},800),setTimeout(function(){a(1995)},1e3),setTimeout(function(){a(1996)},1e3),setTimeout(function(){a(1997)},1e3),setTimeout(function(){a(1998)},1200),setTimeout(function(){a(1999)},1400),setTimeout(function(){a(2e3)},1600),setTimeout(function(){a(2001)},1800),setTimeout(function(){a(2002)},2e3),setTimeout(function(){a(2003)},2200),setTimeout(function(){a(2004)},2400),setTimeout(function(){a(2005)},2600),setTimeout(function(){a(2006)},2800),setTimeout(function(){a(2007)},3e3),setTimeout(function(){a(2008)},3200),setTimeout(function(){a(2009)},3400),setTimeout(function(){a(2010)},3600),setTimeout(function(){a(2011)},3800),setTimeout(function(){a(2012)},4e3),setTimeout(function(){a(2013)},4200),setTimeout(function(){a(2014)},4400),setTimeout(function(){a(2015)},4600),setTimeout(function(){a(2016)},4800),T(-93.634447,44.907342,8,0,0)),6==t&&(u("extent"),c("waters"),a(1992),setTimeout(function(){a(1992)},200),setTimeout(function(){a(1993)},400),setTimeout(function(){a(1994)},800),setTimeout(function(){a(1995)},1e3),setTimeout(function(){a(1996)},1e3),setTimeout(function(){a(1997)},1e3),setTimeout(function(){a(1998)},1200),setTimeout(function(){a(1999)},1400),setTimeout(function(){a(2e3)},1600),setTimeout(function(){a(2001)},1800),setTimeout(function(){a(2002)},2e3),setTimeout(function(){a(2003)},2200),setTimeout(function(){a(2004)},2400),setTimeout(function(){a(2005)},2600),setTimeout(function(){a(2006)},2800),setTimeout(function(){a(2007)},3e3),setTimeout(function(){a(2008)},3200),setTimeout(function(){a(2009)},3400),setTimeout(function(){a(2010)},3600),setTimeout(function(){a(2011)},3800),setTimeout(function(){a(2012)},4e3),setTimeout(function(){a(2013)},4200),setTimeout(function(){a(2014)},4400),setTimeout(function(){a(2015)},4600),setTimeout(function(){a(2016)},4800),T(-94.21554,47.41095,8,0,0)),7==t&&(u("extent"),c("waters"),a(1992),setTimeout(function(){a(1992)},200),setTimeout(function(){a(1993)},400),setTimeout(function(){a(1994)},800),setTimeout(function(){a(1995)},1e3),setTimeout(function(){a(1996)},1e3),setTimeout(function(){a(1997)},1e3),setTimeout(function(){a(1998)},1200),setTimeout(function(){a(1999)},1400),setTimeout(function(){a(2e3)},1600),setTimeout(function(){a(2001)},1800),setTimeout(function(){a(2002)},2e3),setTimeout(function(){a(2003)},2200),setTimeout(function(){a(2004)},2400),setTimeout(function(){a(2005)},2600),setTimeout(function(){a(2006)},2800),setTimeout(function(){a(2007)},3e3),setTimeout(function(){a(2008)},3200),setTimeout(function(){a(2009)},3400),setTimeout(function(){a(2010)},3600),setTimeout(function(){a(2011)},3800),setTimeout(function(){a(2012)},4e3),setTimeout(function(){a(2013)},4200),setTimeout(function(){a(2014)},4400),setTimeout(function(){a(2015)},4600),setTimeout(function(){a(2016)},4800),T(-94.203347,46.628522,6,0,0)),8==t){m(1986,2016),u("extent"),u("waters");for(var e=800,i=1986;i<=2016;i++)2017!=i&&setTimeout(function(){a(i)},e),e+=200;T(-104.941406,40.371659,4,0,0)}if(9==t){u("extent"),c("waters"),T(-94.203347,46.628522,6,0,0);for(var e=800,i=1986;i<=2016;i++)2017!=i&&setTimeout(function(){a(i)},e),e+=200}}function i(t,e){s.addLayer({id:t+"-layer",interactive:!0,source:t,layout:{},type:"fill",paint:{"fill-antialias":!0,"fill-opacity":1,"fill-color":"#b24e49","fill-outline-color":"#333333"}},"place-neighbourhood")}function u(t){s.setLayoutProperty(t+"-layer","visibility","none")}function c(t){s.setLayoutProperty(t+"-layer","visibility","visible")}function r(t,e,i){function n(e){setTimeout(function(){requestAnimationFrame(n),r+=(a-r)/o,c-=.9/o,c>=0&&(s.setPaintProperty("invasion-layer-"+t,"circle-radius",r),s.setPaintProperty("invasion-layer-"+t,"circle-opacity",c)),c<=0&&(r=f,c=u)},2e3/o)}cap=t;var o=15,u=1,c=u,f=5,r=f,a=18;s.addLayer({id:"invasion-layer-"+t,type:"circle",source:"invasion",paint:{"circle-radius":f,"circle-radius-transition":{duration:0},"circle-opacity-transition":{duration:0},"circle-color":"rgba("+e+", 0.45)"},filter:["==","collectionYear",t]}),s.addLayer({id:"invasion-layer1-"+t,type:"circle",source:"invasion",paint:{"circle-radius":f,"circle-color":"rgba("+e+", 0.8)"},filter:["==","collectionYear",t]}),n(0),s.setLayoutProperty("invasion-layer1-"+t,"visibility","none"),s.setLayoutProperty("invasion-layer-"+t,"visibility","none")}function a(t){s.setLayoutProperty("invasion-layer1-"+t,"visibility","visible"),s.setLayoutProperty("invasion-layer-"+t,"visibility","visible")}function m(t,e){for(var i=t;i<=e;i++)s.setLayoutProperty("invasion-layer1-"+i,"visibility","none"),s.setLayoutProperty("invasion-layer-"+i,"visibility","none")}function T(t,e,i,n,o){s.flyTo({center:[t,e],zoom:i,pitch:n,bearing:o})}s.addSource("waters",{type:"geojson",data:n}),s.addSource("extent",{type:"geojson",data:o}),s.addSource("invasion",{type:"geojson",data:e}),index=0;var l=["A long time ago","1986-1992","1993-1998","1999-2016","1999-2016","1999-2016","1999-2016","1999-2016","1986-2016","1986-2016"];!function(){for(var t=1986;t<=2016;t++)r(t,"178,78,73",t)}(),i("extent","#333333"),i("waters","#333333"),r(f,"178,78,73",2016),$(document).ready(function(){$("#fullpage").fullpage({anchors:["zero","one","two","three","four","five","six","seven","eight","nine","ten","eleven","twelve","thirteen","fourteen","fifteen","sixteen","seventeen","eightteen","nineteen"],sectionsColor:["#999999","#999999","#999999","#999999","#999999","#999999","#999999","#999999","#999999","#999999","#999999","#999999","#999999","#999999","#999999","#999999","#999999","#999999","#999999","#999999"],navigation:!0,navigationPosition:"right",afterLoad:function(e,i){$(this);$(".chatter, .chartTitle").hide(),$(this).find(".chatter, .chartTitle").show(),t(i-1)}})}),$("#fullpage").show()});for(var c=["contours","museums"],f=0;f<c.length;f++){var r=c[f],a=document.createElement("a");a.href="#",a.className="active",a.textContent=r,a.onclick=function(t){var e=this.textContent;t.preventDefault(),t.stopPropagation(),"visible"===s.getLayoutProperty(e,"visibility")?(s.setLayoutProperty(e,"visibility","none"),this.className=""):(this.className="active",s.setLayoutProperty(e,"visibility","visible"))}}d3.select("#listing").selectAll(".row").data(u.filter(function(t){return"MN"==t.State})).enter().append("div").attr("class",function(t){return"row"}).attr("latitude",function(t){return t.Lat}).attr("longitude",function(t){return t.Lon}).on("mousedown",function(t){s.flyTo({center:[t.Lon,t.Lat],zoom:9})}).html(function(t,e){return"<div class='col name'>"+t.Locality+"</div><div class='col county'>"+t.County+"</div>"})})})})})},{}]},{},[1]);