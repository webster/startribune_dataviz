!function e(t,a,n){function r(i,s){if(!a[i]){if(!t[i]){var l="function"==typeof require&&require;if(!s&&l)return l(i,!0);if(o)return o(i,!0);throw new Error("Cannot find module '"+i+"'")}var E=a[i]={exports:{}};t[i][0].call(E.exports,function(e){var a=t[i][1][e];return r(a?a:e)},E,E.exports,e,t,a,n)}return a[i].exports}for(var o="function"==typeof require&&require,i=0;i<n.length;i++)r(n[i]);return r}({1:[function(e,t,a){$.urlParam=function(e){var t=new RegExp("[?&]"+e+"=([^&#]*)").exec(window.location.href);return null!=t?t[1]||0:null};var n=$.urlParam("chart");if(null!=n&&($(".slide").hide(),$("#"+n).show()),"growth"==n)d3.json("./shapefiles/metro_cities.json",function(e,t){d3.json("./shapefiles/metro_tracts.json",function(e,a){d3.json("./shapefiles/metro_tracts_1970.json",function(e,n){d3.json("./data/metro_populations.json",function(e,r){d3.json("./data/metro_demographics.json",function(e,o){d3.json("./data/metro_land_use.json",function(e,i){d3.json("./data/counties_populations.json",function(e,s){d3.json("./data/counties_demographics.json",function(e,l){d3.json("./data/counties_land_use.json",function(e,E){d3.json("./data/all_populations.json",function(e,d){d3.json("./data/all_demographics.json",function(e,A){d3.json("./data/all_land_use.json",function(e,C){function c(e,t,a,n,r){d3.select(e).selectAll(".row").sort(function(e,t){if("name"==n){if("descend"==r)return d3.descending(e.CTU_NAME,t.CTU_NAME);if("ascend"==r)return d3.ascending(e.CTU_NAME,t.CTU_NAME)}if("index"==n){if("descend"==r)return d3.descending(e.COMMUNITY_DESIGNATION,t.COMMUNITY_DESIGNATION);if("ascend"==r)return d3.ascending(e.COMMUNITY_DESIGNATION,t.COMMUNITY_DESIGNATION)}}).transition().duration(500)}function u(e,t,a,n){if("city"==n){if("population"==a){var r=R.filter(function(t){return t.CTU_NAME==e&&"ACS 2008-2010"!=t.DATASOURCE&&(1970==t.YEAR||1980==t.YEAR||1990==t.YEAR||2e3==t.YEAR||2010==t.YEAR||2015==t.YEAR)}),o=["Population",0,0,0,0,0,0],i=[];i[0]="x";for(var s=0;s<r.length;s++)o[s+1]=r[s].POPULATION,i[s+1]=r[s].YEAR;var l=(o[1]-o[o.length-1])/o[o.length-1];if($("#populationChange").removeClass("pos"),$("#populationChange").removeClass("neg"),l<0?$("#populationChange").addClass("neg"):l>0&&$("#populationChange").addClass("pos"),isFinite(l)?$("#populationChange").html(d3.format("+%")(l)):$("#populationChange").html("--"),"population"==t)return o;if("years"==t)return i}if("income"==a){var E=m.filter(function(t){return t.CTU_NAME==e&&"MEDIANHHINC"==t.SUBJECT_LEVEL&&"ACS 2008-2010"!=t.DATASOURCE&&(1970==t.YEAR||1980==t.YEAR||1990==t.YEAR||2e3==t.YEAR||2010==t.YEAR||2015==t.YEAR)}),d=["Income",0,0,0,0],A=[];A[0]="x";for(var s=0;s<E.length;s++)d[s+1]=E[s].MEASURE,A[s+1]=E[s].YEAR;var l=(d[d.length-2]-d[1])/d[1];if($("#incomeChange").removeClass("pos"),$("#incomeChange").removeClass("neg"),l<0?$("#incomeChange").addClass("neg"):l>0&&$("#incomeChange").addClass("pos"),isFinite(l)?$("#incomeChange").html(d3.format("+%")(l)):$("#incomeChange").html("--"),"income"==t)return d;if("years"==t)return A}if("poverty"==a){var C=m.filter(function(t){return t.CTU_NAME==e&&"POV100RATE"==t.SUBJECT_LEVEL&&"ACS 2008-2010"!=t.DATASOURCE&&(1970==t.YEAR||1980==t.YEAR||1990==t.YEAR||2e3==t.YEAR||2010==t.YEAR||2015==t.YEAR)}),c=["Poverty",0,0,0,0],u=[];u[0]="x";for(var s=0;s<C.length;s++)c[s+1]=C[s].MEASURE,u[s+1]=C[s].YEAR;var l=c[C.length]-c[1];if($("#povertyChange").removeClass("pos"),$("#povertyChange").removeClass("neg"),l<0?$("#povertyChange").addClass("neg"):l>0&&$("#povertyChange").addClass("pos"),isFinite(l)?$("#povertyChange").html(d3.format("+%")(l)):$("#povertyChange").html("--"),"poverty"==t)return c;if("years"==t)return u}if("degrees"==a){var _=m.filter(function(t){return t.CTU_NAME==e&&"BACHELORS"==t.SUBJECT_LEVEL&&"ACS 2008-2010"!=t.DATASOURCE&&(1970==t.YEAR||1980==t.YEAR||1990==t.YEAR||2e3==t.YEAR||2010==t.YEAR||2015==t.YEAR)}),D=["Degrees",0,0,0,0],v=[];v[0]="x";for(var s=0;s<_.length;s++)D[s+1]=_[s].MEASURE/_[s].DENOMINATOR,v[s+1]=_[s].YEAR;var l=D[_.length]-D[1];if($("#degreesChange").removeClass("pos"),$("#degreesChange").removeClass("neg"),l<0?$("#degreesChange").addClass("neg"):l>0&&$("#degreesChange").addClass("pos"),isFinite(l)?$("#degreesChange").html(d3.format("+%")(l)):$("#degreesChange").html("--"),"degrees"==t)return D;if("years"==t)return v}if("race"==a){var U=m.filter(function(t){return!(t.CTU_NAME!=e||"WHITENH"!=t.SUBJECT_LEVEL||"ACS 2011-2015"!=t.DATASOURCE&&"Census 2010"!=t.DATASOURCE&&"Census 2000"!=t.DATASOURCE&&"Census 1990"!=t.DATASOURCE||1970!=t.YEAR&&1980!=t.YEAR&&1990!=t.YEAR&&2e3!=t.YEAR&&2010!=t.YEAR&&2015!=t.YEAR)}),T=["Minorities",0,0,0,0],O=[];O[0]="x";for(var s=0;s<U.length;s++)T[s+1]=1-U[s].MEASURE/U[s].DENOMINATOR,O[s+1]=U[s].YEAR;var l=T[U.length]-T[1];if($("#raceChange").removeClass("pos"),$("#raceChange").removeClass("neg"),l<0?$("#raceChange").addClass("neg"):l>0&&$("#raceChange").addClass("pos"),isFinite(l)?$("#raceChange").html(d3.format("+%")(l)):$("#raceChange").html("--"),"race"==t)return T;if("years"==t)return O}if("land"==a){for(var L=h.filter(function(t){return t.CTU_NAME==e&&"Non-Urbanized"!=t.LAND_USE_DESCRIPTION&&"Institutional and Recreation"!=t.LAND_USE_DESCRIPTION&&"Open Water Bodies"!=t.LAND_USE_DESCRIPTION&&"Parks & Recreation Areas"!=t.LAND_USE_DESCRIPTION&&"Vacant/Agricultural"!=t.LAND_USE_DESCRIPTION&&"Industrial Parks not Developed"!=t.LAND_USE_DESCRIPTION&&"Public & Semi-Public Vacant"!=t.LAND_USE_DESCRIPTION&&"Agriculture"!=t.LAND_USE_DESCRIPTION&&"Park, Recreational or Preserve"!=t.LAND_USE_DESCRIPTION&&"Golf Course"!=t.LAND_USE_DESCRIPTION&&"Undeveloped Land"!=t.LAND_USE_DESCRIPTION&&"Open Water"!=t.LAND_USE_DESCRIPTION}),P=["Developed Acres",0,0,0,0,0],Y=["x",1970,1980,1990,2e3,2010],y=1,s=1970;s<2020;s+=10){for(var x=0;x<L.length;x++)L[x].YEAR==s&&(P[y]+=Number(L[x].ACRES));y++}var l=(P[P.length-1]-P[1])/P[1];if($("#landChange").removeClass("pos"),$("#landChange").removeClass("neg"),l<0?$("#landChange").addClass("neg"):l>0&&$("#landChange").addClass("pos"),isFinite(l)?$("#landChange").html(d3.format("+%")(l)):$("#landChange").html("--"),"land"==t)return P;if("years"==t)return Y}}else if("county"==n){if("population"==a){var r=f.filter(function(t){return t.CO_NAME==e&&(1970==t.YEAR||1980==t.YEAR||1990==t.YEAR||2e3==t.YEAR||2010==t.YEAR||2015==t.YEAR)}),o=[],i=[];o[0]="Population",i[0]="x";for(var s=0;s<r.length;s++)o[s+1]=r[s].POPULATION,i[s+1]=r[s].YEAR;var l=(o[r.length]-o[1])/o[1];if($("#populationChange").removeClass("pos"),$("#populationChange").removeClass("neg"),l<0?$("#populationChange").addClass("neg"):l>0&&$("#populationChange").addClass("pos"),isFinite(l)?$("#populationChange").html(d3.format("+%")(l)):$("#populationChange").html("--"),"population"==t)return o;if("years"==t)return i}if("income"==a){var E=g.filter(function(t){return!(t.CTU_NAME!=e||"MEDIANHHINC"!=t.SUBJECT_LEVEL||"ACS 2011-2015"!=t.DATASOURCE&&"Census 2010"!=t.DATASOURCE&&"Census 2000"!=t.DATASOURCE&&"Census 1990"!=t.DATASOURCE||1970!=t.YEAR&&1980!=t.YEAR&&1990!=t.YEAR&&2e3!=t.YEAR&&2010!=t.YEAR&&2015!=t.YEAR)}),d=[],A=[];d[0]="Income",A[0]="x";for(var s=0;s<E.length;s++)d[s+1]=E[s].MEASURE,A[s+1]=E[s].YEAR;console.log(d);var l=(d[E.length]-d[1])/d[1];if($("#incomeChange").removeClass("pos"),$("#incomeChange").removeClass("neg"),l<0?$("#incomeChange").addClass("neg"):l>0&&$("#incomeChange").addClass("pos"),isFinite(l)?$("#incomeChange").html(d3.format("+%")(l)):$("#incomeChange").html("--"),"income"==t)return d;if("years"==t)return A}if("poverty"==a){var C=g.filter(function(t){return!(t.CTU_NAME!=e||"POV100RATE"!=t.SUBJECT_LEVEL||"ACS 2011-2015"!=t.DATASOURCE&&"Census 2010"!=t.DATASOURCE&&"Census 2000"!=t.DATASOURCE&&"Census 1990"!=t.DATASOURCE||1970!=t.YEAR&&1980!=t.YEAR&&1990!=t.YEAR&&2e3!=t.YEAR&&2010!=t.YEAR&&2015!=t.YEAR)}),c=[],u=[];c[0]="Poverty",u[0]="x";for(var s=0;s<C.length;s++)c[s+1]=C[s].MEASURE,u[s+1]=C[s].YEAR;var l=c[C.length]-c[1];if($("#povertyChange").removeClass("pos"),$("#povertyChange").removeClass("neg"),l<0?$("#povertyChange").addClass("neg"):l>0&&$("#povertyChange").addClass("pos"),isFinite(l)?$("#povertyChange").html(d3.format("+%")(l)):$("#povertyChange").html("--"),"poverty"==t)return c;if("years"==t)return u}if("degrees"==a){var _=g.filter(function(t){return!(t.CTU_NAME!=e||"BACHELORS"!=t.SUBJECT_LEVEL||"ACS 2011-2015"!=t.DATASOURCE&&"Census 2010"!=t.DATASOURCE&&"Census 2000"!=t.DATASOURCE&&"Census 1990"!=t.DATASOURCE||1970!=t.YEAR&&1980!=t.YEAR&&1990!=t.YEAR&&2e3!=t.YEAR&&2010!=t.YEAR&&2015!=t.YEAR)}),D=[],v=[];D[0]="Degrees",v[0]="x";for(var s=0;s<_.length;s++)D[s+1]=_[s].MEASURE/_[s].DENOMINATOR,v[s+1]=_[s].YEAR;var l=D[_.length]-D[1];if($("#degreesChange").removeClass("pos"),$("#degreesChange").removeClass("neg"),l<0?$("#degreesChange").addClass("neg"):l>0&&$("#degreesChange").addClass("pos"),isFinite(l)?$("#degreesChange").html(d3.format("+%")(l)):$("#degreesChange").html("--"),"degrees"==t)return D;if("years"==t)return v}if("race"==a){var U=g.filter(function(t){return!(t.CTU_NAME!=e||"WHITENH"!=t.SUBJECT_LEVEL||"ACS 2011-2015"!=t.DATASOURCE&&"Census 2010"!=t.DATASOURCE&&"Census 2000"!=t.DATASOURCE&&"Census 1990"!=t.DATASOURCE||1970!=t.YEAR&&1980!=t.YEAR&&1990!=t.YEAR&&2e3!=t.YEAR&&2010!=t.YEAR&&2015!=t.YEAR)}),T=[],O=[];T[0]="Minorities",O[0]="x";for(var s=0;s<U.length;s++)T[s+1]=1-U[s].MEASURE/U[s].DENOMINATOR,O[s+1]=U[s].YEAR;var l=T[U.length]-T[1];if($("#raceChange").removeClass("pos"),$("#raceChange").removeClass("neg"),l<0?$("#raceChange").addClass("neg"):l>0&&$("#raceChange").addClass("pos"),isFinite(l)?$("#raceChange").html(d3.format("+%")(l)):$("#raceChange").html("--"),"race"==t)return T;if("years"==t)return O}if("land"==a){for(var L=p.filter(function(t){return t.CO_NAME==e&&"Non-Urbanized"!=t.LAND_USE_DESCRIPTION&&"Institutional and Recreation"!=t.LAND_USE_DESCRIPTION&&"Open Water Bodies"!=t.LAND_USE_DESCRIPTION&&"Parks & Recreation Areas"!=t.LAND_USE_DESCRIPTION&&"Vacant/Agricultural"!=t.LAND_USE_DESCRIPTION&&"Industrial Parks not Developed"!=t.LAND_USE_DESCRIPTION&&"Public & Semi-Public Vacant"!=t.LAND_USE_DESCRIPTION&&"Agriculture"!=t.LAND_USE_DESCRIPTION&&"Park, Recreational or Preserve"!=t.LAND_USE_DESCRIPTION&&"Golf Course"!=t.LAND_USE_DESCRIPTION&&"Undeveloped Land"!=t.LAND_USE_DESCRIPTION&&"Open Water"!=t.LAND_USE_DESCRIPTION}),P=["Developed Acres",0,0,0,0,0],Y=["x",1970,1980,1990,2e3,2010],y=1,s=1970;s<2020;s+=10){for(var x=0;x<L.length;x++)L[x].YEAR==s&&(P[y]+=Number(L[x].ACRES));y++}var l=(P[P.length-1]-P[1])/P[1];if($("#landChange").removeClass("pos"),$("#landChange").removeClass("neg"),l<0?$("#landChange").addClass("neg"):l>0&&$("#landChange").addClass("pos"),isFinite(l)?$("#landChange").html(d3.format("+%")(l)):$("#landChange").html("--"),"land"==t)return P;if("years"==t)return Y}}else if("all"==n){if("population"==a){var r=S.filter(function(t){return t.REGION_NAME==e&&(1970==t.YEAR||1980==t.YEAR||1990==t.YEAR||2e3==t.YEAR||2010==t.YEAR||2015==t.YEAR)}),o=[],i=[];o[0]="Population",i[0]="x";for(var s=0;s<r.length;s++)o[s+1]=r[s].POPULATION,i[s+1]=r[s].YEAR;var l=(o[r.length]-o[1])/o[1];if($("#populationChange").removeClass("pos"),$("#populationChange").removeClass("neg"),l<0?$("#populationChange").addClass("neg"):l>0&&$("#populationChange").addClass("pos"),isFinite(l)?$("#populationChange").html(d3.format("+%")(l)):$("#populationChange").html("--"),"population"==t)return o;if("years"==t)return i}if("income"==a){var E=N.filter(function(t){return t.REGION_NAME==e&&"MEDIANHHINC"==t.SUBJECT_LEVEL&&"ACS 2008-2010"!=t.DATASOURCE&&(1970==t.YEAR||1980==t.YEAR||1990==t.YEAR||2e3==t.YEAR||2010==t.YEAR||2015==t.YEAR)}),d=[],A=[];d[0]="Income",A[0]="x";for(var s=0;s<E.length;s++)d[s+1]=E[s].MEASURE,A[s+1]=E[s].YEAR;var l=(d[E.length]-d[1])/d[1];if($("#incomeChange").removeClass("pos"),$("#incomeChange").removeClass("neg"),l<0?$("#incomeChange").addClass("neg"):l>0&&$("#incomeChange").addClass("pos"),isFinite(l)?$("#incomeChange").html(d3.format("+%")(l)):$("#incomeChange").html("--"),"income"==t)return d;if("years"==t)return A}if("poverty"==a){var C=N.filter(function(t){return t.REGION_NAME==e&&"POV100RATE"==t.SUBJECT_LEVEL&&"ACS 2008-2010"!=t.DATASOURCE&&(1970==t.YEAR||1980==t.YEAR||1990==t.YEAR||2e3==t.YEAR||2010==t.YEAR||2015==t.YEAR)}),c=[],u=[];c[0]="Poverty",u[0]="x";for(var s=0;s<C.length;s++)c[s+1]=C[s].MEASURE,u[s+1]=C[s].YEAR;var l=c[C.length]-c[1];if($("#povertyChange").removeClass("pos"),$("#povertyChange").removeClass("neg"),l<0?$("#povertyChange").addClass("neg"):l>0&&$("#povertyChange").addClass("pos"),isFinite(l)?$("#povertyChange").html(d3.format("+%")(l)):$("#povertyChange").html("--"),"poverty"==t)return c;if("years"==t)return u}if("degrees"==a){var _=N.filter(function(t){return t.REGION_NAME==e&&"BACHELORS"==t.SUBJECT_LEVEL&&"ACS 2008-2010"!=t.DATASOURCE&&(1970==t.YEAR||1980==t.YEAR||1990==t.YEAR||2e3==t.YEAR||2010==t.YEAR||2015==t.YEAR)}),D=[],v=[];D[0]="Degrees",v[0]="x";for(var s=0;s<_.length;s++)D[s+1]=_[s].MEASURE/_[s].DENOMINATOR,v[s+1]=_[s].YEAR;var l=D[_.length]-D[1];if($("#degreesChange").removeClass("pos"),$("#degreesChange").removeClass("neg"),l<0?$("#degreesChange").addClass("neg"):l>0&&$("#degreesChange").addClass("pos"),isFinite(l)?$("#degreesChange").html(d3.format("+%")(l)):$("#degreesChange").html("--"),"degrees"==t)return D;if("years"==t)return v}if("race"==a){var U=N.filter(function(t){return!(t.REGION_NAME!=e||"WHITENH"!=t.SUBJECT_LEVEL||"ACS 2011-2015"!=t.DATASOURCE&&"Census 2010"!=t.DATASOURCE&&"Census 2000"!=t.DATASOURCE&&"Census 1990"!=t.DATASOURCE||1970!=t.YEAR&&1980!=t.YEAR&&1990!=t.YEAR&&2e3!=t.YEAR&&2010!=t.YEAR&&2015!=t.YEAR)}),T=[],O=[];T[0]="Minorities",O[0]="x";for(var s=0;s<U.length;s++)T[s+1]=1-U[s].MEASURE/U[s].DENOMINATOR,O[s+1]=U[s].YEAR;var l=T[U.length]-T[1];if($("#raceChange").removeClass("pos"),$("#raceChange").removeClass("neg"),l<0?$("#raceChange").addClass("neg"):l>0&&$("#raceChange").addClass("pos"),isFinite(l)?$("#raceChange").html(d3.format("+%")(l)):$("#raceChange").html("--"),"race"==t)return T;if("years"==t)return O}if("land"==a){for(var L=I.filter(function(t){return t.REGION_NAME==e&&"Non-Urbanized"!=t.LAND_USE_DESCRIPTION&&"Institutional and Recreation"!=t.LAND_USE_DESCRIPTION&&"Open Water Bodies"!=t.LAND_USE_DESCRIPTION&&"Parks & Recreation Areas"!=t.LAND_USE_DESCRIPTION&&"Vacant/Agricultural"!=t.LAND_USE_DESCRIPTION&&"Industrial Parks not Developed"!=t.LAND_USE_DESCRIPTION&&"Public & Semi-Public Vacant"!=t.LAND_USE_DESCRIPTION&&"Agriculture"!=t.LAND_USE_DESCRIPTION&&"Park, Recreational or Preserve"!=t.LAND_USE_DESCRIPTION&&"Golf Course"!=t.LAND_USE_DESCRIPTION&&"Undeveloped Land"!=t.LAND_USE_DESCRIPTION&&"Open Water"!=t.LAND_USE_DESCRIPTION}),P=["Developed Acres",0,0,0,0,0],Y=["x",1970,1980,1990,2e3,2010],y=1,s=1970;s<2020;s+=10){for(var x=0;x<L.length;x++)L[x].YEAR==s&&(P[y]+=Number(L[x].ACRES));y++}var l=(P[P.length-1]-P[1])/P[1];if($("#landChange").removeClass("pos"),$("#landChange").removeClass("neg"),l<0?$("#landChange").addClass("neg"):l>0&&$("#landChange").addClass("pos"),isFinite(l)?$("#landChange").html(d3.format("+%")(l)):$("#landChange").html("--"),"land"==t)return P;if("years"==t)return Y}}}$("#districtSelect").click(function(){$("#listing").slideToggle()});var R=r.populations,m=o.demographics,h=i.land,f=s.populations,g=l.demographics,p=E.land,S=d.populations,N=A.demographics,I=C.land;d3.select("#all").selectAll(".row").data(S.filter(function(e){return 2015==e.YEAR})).enter().append("div").attr("class",function(e){return"Twin Cities Region (7-county)"==e.REGION_NAME?"row selected":"row "}).attr("id",function(e){return"Twin Cities Region (7-county)"==e.REGION_NAME?"first":null}).attr("type","all").attr("zoom",9).on("mousedown",function(e){for(var t,a,n,r,o=d3.format(",")(S[18].POPULATION),i=0,s=0;s<N.length;s++)2015==N[s].YEAR&&("MEDIANHHINC"==N[s].SUBJECT_LEVEL?t=d3.format("$,")(N[s].MEASURE):"WHITENH"==N[s].SUBJECT_LEVEL?a=d3.format("%")(1-N[s].MEASURE/N[s].DENOMINATOR):"BACHELORS"==N[s].SUBJECT_LEVEL?r=d3.format("%")(N[s].MEASURE/N[s].DENOMINATOR):"POV100RATE"==N[s].SUBJECT_LEVEL&&(n=d3.format("%")(N[s].MEASURE)));for(var s=0;s<I.length;s++)2010==I[s].YEAR&&"Non-Urbanized"!=I[s].LAND_USE_DESCRIPTION&&"Institutional and Recreation"!=I[s].LAND_USE_DESCRIPTION&&"Open Water Bodies"!=I[s].LAND_USE_DESCRIPTION&&"Parks & Recreation Areas"!=I[s].LAND_USE_DESCRIPTION&&"Vacant/Agricultural"!=I[s].LAND_USE_DESCRIPTION&&"Industrial Parks not Developed"!=I[s].LAND_USE_DESCRIPTION&&"Public & Semi-Public Vacant"!=I[s].LAND_USE_DESCRIPTION&&"Agriculture"!=I[s].LAND_USE_DESCRIPTION&&"Park, Recreational or Preserve"!=I[s].LAND_USE_DESCRIPTION&&"Golf Course"!=I[s].LAND_USE_DESCRIPTION&&"Undeveloped Land"!=I[s].LAND_USE_DESCRIPTION&&"Open Water"!=I[s].LAND_USE_DESCRIPTION&&(i+=I[s].ACRES);$("#population").html(o),$("#land").html(d3.format(",.0f")(i)),$("#income").html(t),$("#minorities").html(a),$("#poverty").html(n),$("#degrees").html(r)}).attr("latitude",function(e){return 45.01832962}).attr("longitude",function(e){return-93.28469849}).html(function(e,t){return"<div class='col name'>"+e.REGION_NAME+"</div>"}),d3.select("#counties").selectAll(".row").data(f.filter(function(e){return 2015==e.YEAR})).enter().append("div").attr("class",function(e){return"row "}).attr("type","county").attr("zoom",8).on("mousedown",function(e){for(var t,a,n,r,o,i=0,s=0;s<f.length;s++)e.CO_NAME==f[s].CO_NAME&&2015==f[s].YEAR&&(t=d3.format(",")(f[s].POPULATION));for(var s=0;s<g.length;s++)e.CO_NAME==g[s].CTU_NAME&&2015==g[s].YEAR&&("MEDIANHHINC"==g[s].SUBJECT_LEVEL?a=d3.format("$,")(g[s].MEASURE):"WHITENH"==g[s].SUBJECT_LEVEL?n=d3.format("%")(1-g[s].MEASURE/g[s].DENOMINATOR):"BACHELORS"==g[s].SUBJECT_LEVEL?o=d3.format("%")(g[s].MEASURE/g[s].DENOMINATOR):"POV100RATE"==g[s].SUBJECT_LEVEL&&(r=d3.format("%")(g[s].MEASURE)));for(var s=0;s<p.length;s++)e.CO_NAME==p[s].CO_NAME&&2010==p[s].YEAR&&("Non-Urbanized"!=p[s].LAND_USE_DESCRIPTION&&"Institutional and Recreation"!=p[s].LAND_USE_DESCRIPTION&&"Open Water Bodies"!=p[s].LAND_USE_DESCRIPTION&&"Parks & Recreation Areas"!=p[s].LAND_USE_DESCRIPTION&&"Vacant/Agricultural"!=p[s].LAND_USE_DESCRIPTION&&"Industrial Parks not Developed"!=p[s].LAND_USE_DESCRIPTION&&"Public & Semi-Public Vacant"!=p[s].LAND_USE_DESCRIPTION&&"Agriculture"!=p[s].LAND_USE_DESCRIPTION&&"Park, Recreational or Preserve"!=p[s].LAND_USE_DESCRIPTION&&"Golf Course"!=p[s].LAND_USE_DESCRIPTION&&"Undeveloped Land"!=p[s].LAND_USE_DESCRIPTION&&"Open Water"!=p[s].LAND_USE_DESCRIPTION||(i+=p[s].ACRES));$("#population").html(t),$("#land").html(d3.format(",.0f")(i)),$("#income").html(a),$("#minorities").html(n),$("#poverty").html(r),$("#degrees").html(o)}).attr("latitude",function(e){return e.latitude}).attr("longitude",function(e){return e.longitude}).html(function(e,t){return"<div class='col name'>"+e.CO_NAME+"</div>"}),d3.select("#towns").selectAll(".row").data(R.filter(function(e){return 2015==e.YEAR})).enter().append("div").attr("class",function(e){return"row "}).attr("type","city").attr("zoom",11.5).on("mousedown",function(e){for(var t,a,n,r,o=d3.format(",")(e.POPULATION),i=0,s=0;s<m.length;s++)Number(e.COCTU_ID)==Number(m[s].COCTU_ID)&&2015==m[s].YEAR&&("MEDIANHHINC"==m[s].SUBJECT_LEVEL?t=d3.format("$,")(m[s].MEASURE):"WHITENH"==m[s].SUBJECT_LEVEL?a=d3.format("%")(1-m[s].MEASURE/m[s].DENOMINATOR):"BACHELORS"==m[s].SUBJECT_LEVEL?r=d3.format("%")(m[s].MEASURE/m[s].DENOMINATOR):"POV100RATE"==m[s].SUBJECT_LEVEL&&(n=d3.format("%")(m[s].MEASURE)));for(var s=0;s<h.length;s++)Number(e.COCTU_ID)==Number(h[s].COCTU_ID)&&2010==h[s].YEAR&&("Non-Urbanized"!=h[s].LAND_USE_DESCRIPTION&&"Institutional and Recreation"!=h[s].LAND_USE_DESCRIPTION&&"Open Water Bodies"!=h[s].LAND_USE_DESCRIPTION&&"Parks & Recreation Areas"!=h[s].LAND_USE_DESCRIPTION&&"Vacant/Agricultural"!=h[s].LAND_USE_DESCRIPTION&&"Industrial Parks not Developed"!=h[s].LAND_USE_DESCRIPTION&&"Public & Semi-Public Vacant"!=h[s].LAND_USE_DESCRIPTION&&"Agriculture"!=h[s].LAND_USE_DESCRIPTION&&"Park, Recreational or Preserve"!=h[s].LAND_USE_DESCRIPTION&&"Golf Course"!=h[s].LAND_USE_DESCRIPTION&&"Undeveloped Land"!=h[s].LAND_USE_DESCRIPTION&&"Open Water"!=h[s].LAND_USE_DESCRIPTION||(i+=h[s].ACRES));$("#population").html(o),$("#land").html(d3.format(",.0f")(i)),$("#income").html(t),$("#minorities").html(a),$("#poverty").html(n),$("#degrees").html(r)}).attr("latitude",function(e){return e.latitude}).attr("longitude",function(e){return e.longitude}).html(function(e,t){return"<div class='col name'>"+e.CTU_NAME+"</div>"});var _;$(document).ready(function(){$(".row").hide();var e=$("#filter_box").val();$(".row").each(function(){$(this).text().toUpperCase().indexOf(e.toUpperCase())!=-1&&$(this).show()}),$(".row").each(function(){$(this).text().toUpperCase().indexOf("(MPLS)")==-1&&$(this).text().toUpperCase().indexOf("(STP)")==-1||$(this).hide()}),$("#filter_box").on("keyup search",function(e){$(".row").hide();var t=$("#filter_box").val();$(".row").each(function(){$(this).text().toUpperCase().indexOf(t.toUpperCase())!=-1&&$(this).show()})}),$(".th").click(function(){if($(".th").removeClass("selected3"),$(this).addClass("selected3"),$(this).hasClass("toggled")){$(this).removeClass("toggled");var e="ascend"}else if($(this).hasClass("selected3")){$(this).addClass("toggled");var e="descend"}c("#cities",null,R,$(this).attr("data"),e)}),$(".row").click(function(){$(".row").removeClass("selected"),$(this).addClass("selected"),$("#listing").slideToggle(),$("#thisDistrict").html($(this).find(".name").text());var e=Number($(this).attr("longitude")),t=Number($(this).attr("latitude")),a=Number($(this).attr("zoom"));_.load({columns:[u($(this).find(".name").text(),"years","population",$(this).attr("type")),u($(this).find(".name").text(),"population","population",$(this).attr("type"))]}),chartIncome.load({columns:[u($(this).find(".name").text(),"years","income",$(this).attr("type")),u($(this).find(".name").text(),"income","income",$(this).attr("type"))]}),chartPoverty.load({columns:[u($(this).find(".name").text(),"years","poverty",$(this).attr("type")),u($(this).find(".name").text(),"poverty","poverty",$(this).attr("type"))]}),chartDegrees.load({columns:[u($(this).find(".name").text(),"years","degrees",$(this).attr("type")),u($(this).find(".name").text(),"degrees","degrees",$(this).attr("type"))]}),chartRace.load({columns:[u($(this).find(".name").text(),"years","race",$(this).attr("type")),u($(this).find(".name").text(),"race","race",$(this).attr("type"))]}),chartLand.load({columns:[u($(this).find(".name").text(),"years","land",$(this).attr("type")),u($(this).find(".name").text(),"land","land",$(this).attr("type"))]}),v.flyTo({center:[e,t],zoom:a,pitch:0,bearing:0})});var t=S.filter(function(e){return 1970==e.YEAR||1980==e.YEAR||1990==e.YEAR||2e3==e.YEAR||2010==e.YEAR||2015==e.YEAR}),a=[],n=[];a[0]="Population",n[0]="x";for(var r=0;r<t.length;r++)a[r+1]=t[r].POPULATION,n[r+1]=t[r].YEAR;var o={top:40,right:40,bottom:30,left:60};_=c3.generate({bindto:"#chartPop",padding:o,data:{x:"x",columns:[n,a],colors:{Population:"#333333"}},legend:{show:!1},axis:{y:{min:0,padding:{bottom:0,top:10},tick:{count:4,format:d3.format(",.0f")}},x:{tick:{count:6,values:[1970,1980,1990,2e3,2015],format:d3.format(".0f")}}}});for(var i=I.filter(function(e){return"Non-Urbanized"!=e.LAND_USE_DESCRIPTION&&"Institutional and Recreation"!=e.LAND_USE_DESCRIPTION&&"Open Water Bodies"!=e.LAND_USE_DESCRIPTION&&"Parks & Recreation Areas"!=e.LAND_USE_DESCRIPTION&&"Vacant/Agricultural"!=e.LAND_USE_DESCRIPTION&&"Industrial Parks not Developed"!=e.LAND_USE_DESCRIPTION&&"Public & Semi-Public Vacant"!=e.LAND_USE_DESCRIPTION&&"Agriculture"!=e.LAND_USE_DESCRIPTION&&"Park, Recreational or Preserve"!=e.LAND_USE_DESCRIPTION&&"Golf Course"!=e.LAND_USE_DESCRIPTION&&"Undeveloped Land"!=e.LAND_USE_DESCRIPTION&&"Open Water"!=e.LAND_USE_DESCRIPTION}),s=["Developed Acres",0,0,0,0,0],l=["x",1970,1980,1990,2e3,2010],E=1,r=1970;r<2020;r+=10){for(var d=0;d<i.length;d++)i[d].YEAR==r&&(s[E]+=Number(i[d].ACRES));E++}chartLand=c3.generate({bindto:"#chartLand",padding:o,data:{x:"x",columns:[l,s],colors:{"Developed Acres":"#333333"}},legend:{show:!1},axis:{y:{min:0,padding:{bottom:0,top:10},tick:{count:4,format:d3.format(",.0f")}},x:{tick:{count:5,values:[1970,1980,1990,2e3,2010],format:d3.format(".0f")}}}});var A=N.filter(function(e){return"MEDIANHHINC"==e.SUBJECT_LEVEL&&"ACS 2008-2010"!=e.DATASOURCE&&(1970==e.YEAR||1980==e.YEAR||1990==e.YEAR||2e3==e.YEAR||2010==e.YEAR||2015==e.YEAR)}),C=[],m=[];C[0]="Income",m[0]="x";for(var r=0;r<A.length;r++)C[r+1]=A[r].MEASURE,m[r+1]=A[r].YEAR;chartIncome=c3.generate({bindto:"#chartIncome",padding:o,data:{x:"x",columns:[m,C],colors:{Income:"#333333"}},legend:{show:!1},axis:{y:{min:0,padding:{bottom:0,top:10},tick:{format:d3.format("$,.0f"),count:4}},x:{tick:{count:4,values:[1990,2e3,2010,2015],format:d3.format(".0f")}}}});var h=N.filter(function(e){return"POV100RATE"==e.SUBJECT_LEVEL&&"ACS 2008-2010"!=e.DATASOURCE&&(1970==e.YEAR||1980==e.YEAR||1990==e.YEAR||2e3==e.YEAR||2010==e.YEAR||2015==e.YEAR)}),f=[],g=[];f[0]="Poverty",g[0]="x";for(var r=0;r<h.length;r++)f[r+1]=h[r].MEASURE,g[r+1]=h[r].YEAR;chartPoverty=c3.generate({bindto:"#chartPoverty",padding:o,data:{x:"x",columns:[g,f],colors:{Poverty:"#333333"}},legend:{show:!1},axis:{y:{min:0,padding:{bottom:0,top:10},tick:{count:4,format:d3.format("%")}},x:{tick:{count:4,values:[1990,2e3,2010,2015],format:d3.format(".0f")}}}});var p=N.filter(function(e){return!("WHITENH"!=e.SUBJECT_LEVEL||"ACS 2011-2015"!=e.DATASOURCE&&"Census 2010"!=e.DATASOURCE&&"Census 2000"!=e.DATASOURCE&&"Census 1990"!=e.DATASOURCE||1970!=e.YEAR&&1980!=e.YEAR&&1990!=e.YEAR&&2e3!=e.YEAR&&2010!=e.YEAR&&2015!=e.YEAR)}),D=[],U=[];D[0]="Minorities",U[0]="x";for(var r=0;r<p.length;r++)D[r+1]=1-p[r].MEASURE/p[r].DENOMINATOR,U[r+1]=p[r].YEAR;chartRace=c3.generate({bindto:"#chartRace",padding:o,data:{x:"x",columns:[U,D],colors:{Minorities:"#333333"}},legend:{show:!1},axis:{y:{max:.6,min:0,padding:{bottom:0,top:0},tick:{count:4,format:d3.format("%")}},x:{tick:{count:4,values:[1990,2e3,2010,2015],format:d3.format(".0f")}}}});var T=N.filter(function(e){return"BACHELORS"==e.SUBJECT_LEVEL&&"ACS 2008-2010"!=e.DATASOURCE&&(1970==e.YEAR||1980==e.YEAR||1990==e.YEAR||2e3==e.YEAR||2010==e.YEAR||2015==e.YEAR)}),O=[],L=[];O[0]="Degrees",L[0]="x";for(var r=0;r<T.length;r++)O[r+1]=T[r].MEASURE/T[r].DENOMINATOR,L[r+1]=T[r].YEAR;chartDegrees=c3.generate({bindto:"#chartDegrees",padding:o,data:{x:"x",columns:[L,O],colors:{Degrees:"#333333"}},legend:{show:!1},axis:{y:{min:0,padding:{bottom:0,top:10},tick:{count:4,format:d3.format("%")}},x:{tick:{count:4,values:[1990,2e3,2010,2015],format:d3.format(".0f")}}}})}),mapboxgl.accessToken="pk.eyJ1Ijoic2hhZG93ZmxhcmUiLCJhIjoiS3pwY1JTMCJ9.pTSXx_LFgR3XBpCNNxWPKA";var D=new mapboxgl.Map({container:"before",style:"mapbox://styles/shadowflare/ciqzo0bu20004bknkbrhrm6wf",center:[-93.28469849,45.01832962],zoom:8,minZoom:3,hash:!1});D.addControl(new mapboxgl.NavigationControl),D.scrollZoom.disable(),D.on("load",function(){D.addSource("metro1970",{type:"geojson",data:n}),D.addLayer({id:"old-layer",interactive:!0,source:"metro1970",layout:{},type:"fill",paint:{"fill-antialias":!0,"fill-opacity":1,"fill-color":{property:"DENSITY",stops:[[0,"#f1eef6"],[20,"#bdc9e1"],[40,"#74a9cf"],[80,"#0570b0"]]},"fill-outline-color":"rgba(255, 255, 255, 0.1)"}},"place-neighbourhood")});var v=new mapboxgl.Map({container:"after",style:"mapbox://styles/shadowflare/ciqzo0bu20004bknkbrhrm6wf",center:[-93.28469849,45.01832962],zoom:8,minZoom:3});new mapboxgl.Compare(D,v,{});v.addControl(new mapboxgl.NavigationControl),v.scrollZoom.disable(),v.on("load",function(){v.addSource("metroToday",{type:"geojson",data:a}),v.addLayer({id:"new-layer",interactive:!0,source:"metroToday",layout:{},type:"fill",paint:{"fill-antialias":!0,"fill-opacity":1,"fill-color":{property:"DENSITY",stops:[[0,"#f1eef6"],[20,"#bdc9e1"],[40,"#74a9cf"],[80,"#0570b0"]]},"fill-outline-color":"rgba(255, 255, 255, 0.1)"}},"place-neighbourhood"),v.addSource("metro",{type:"geojson",data:t}),v.addLayer({id:"metro-layer",interactive:!0,source:"metro",layout:{},type:"fill",paint:{"fill-antialias":!0,"fill-opacity":0,"fill-color":"#dddddd","fill-outline-color":"rgba(255, 255, 255, 1)"}},"place-neighbourhood")}),$("#first").trigger("mousedown"),$("#population").html("3,005,419"),$("#land").html("575,447"),$("#income").html("$68,778"),$("#minorities").html("11%"),$("#poverty").html("25%"),$("#degrees").html("27%"),$("#populationChange").html("+60%"),$("#landChange").html("+111%"),$("#incomeChange").html("+88%"),$("#raceChange").html("+16%"),$("#povertyChange").html("+3%"),$("#degreesChange").html("+7%")})})})})})})})})})})})});else if("satellite"==n){mapboxgl.accessToken="pk.eyJ1Ijoic2hhZG93ZmxhcmUiLCJhIjoiS3pwY1JTMCJ9.pTSXx_LFgR3XBpCNNxWPKA";var r={version:8,name:"Dark",sources:{mapbox:{type:"vector",url:"mapbox://mapbox.mapbox-streets-v6"},overlay:{type:"image",url:"./data/metro1966.png",coordinates:[[-93.35296721774532,45.12774071853477],[-92.97801967540039,45.12762157010823],[-92.9766452767115,44.85745467286256],[-93.35728758338274,44.85778181806326]]}},sprite:"mapbox://sprites/mapbox/streets-v9",glyphs:"mapbox://fonts/mapbox/{fontstack}/{range}.pbf",layers:[{id:"background",type:"background",paint:{"background-color":"#aaaaaa"}},{id:"water",source:"mapbox","source-layer":"water",type:"fill",paint:{"fill-color":"#2c2c2c"}},{id:"boundaries",source:"mapbox","source-layer":"admin",type:"line",paint:{"line-color":"#797979","line-dasharray":[2,2,6,2]},filter:["all",["==","maritime",0]]},{id:"overlay",source:"overlay",type:"raster",paint:{"raster-opacity":1}},{id:"cities",source:"mapbox","source-layer":"place_label",type:"symbol",layout:{"text-field":"{name_en}","text-font":["DIN Offc Pro Bold","Arial Unicode MS Bold"],"text-size":{stops:[[4,9],[6,12]]}},paint:{"text-opacity":0,"text-color":"#969696","text-halo-width":2,"text-halo-color":"rgba(0, 0, 0, 0.85)"}},{id:"states",source:"mapbox","source-layer":"state_label",type:"symbol",layout:{"text-transform":"uppercase","text-field":"{name_en}","text-font":["DIN Offc Pro Bold","Arial Unicode MS Bold"],"text-letter-spacing":.15,"text-max-width":7,"text-size":{stops:[[4,10],[6,14]]}},filter:[">=","area",8e4],paint:{"text-color":"#969696","text-halo-width":2,"text-halo-color":"rgba(0, 0, 0, 0.85)"}}]},o=new mapboxgl.Map({container:"old",style:r,center:[-93.170242,45.012116],zoom:9,minZoom:9,hash:!1});o.addControl(new mapboxgl.NavigationControl),o.scrollZoom.disable();var i=new mapboxgl.Map({container:"current",style:"mapbox://styles/mapbox/satellite-streets-v9",center:[-93.170242,45.012116],zoom:9,minZoom:9,hash:!1});i.on("load",function(){i.addLayer({id:"wms-test-layer",type:"raster",source:{type:"raster",tiles:["https://tgis2.uspatial.umn.edu/arcgis/services/Libraries/MetroAerialMosaic_1966/MapServer/WMSServer?request=GetMap&service=WMS&bbox={bbox-epsg-4326}&format=image/png&version=1.3.0&srs=EPSG:4326&width=256&height=256&layers=0,1,2,3"],tileSize:256},paint:{}})});new mapboxgl.Compare(o,i,{});i.addControl(new mapboxgl.NavigationControl),i.scrollZoom.disable()}},{}]},{},[1]);