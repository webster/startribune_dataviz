<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Minnesota Farm Deaths</title>
  <meta name="description" content="Minnesota Farm Deaths">
  <meta name="author" content="Jeff Hargarten - StarTribune">

  <link rel="stylesheet" href="js/d3.slider-master/d3.slider.css" /> 
  <link rel="stylesheet" href="http://apps.startribune.com/news/dataviz-css-master/startribune_dataviz_styles.css" /> 

<style>
  @import url("https://api.tiles.mapbox.com/mapbox.js/v2.1.6/mapbox.css");

  body { font-family:"Poynter Serif RE"; }
  h4, h5, h6 { font-family:"Whitman OSF"; }
  h1, h2, h3 { font-family:"Popular"; }

	#wrapper { width:100%; }
	.module { height:auto; width:100%; margin:7px; }

  button:focus {outline:0 !important;}

  .mn{ fill:#44c767; pointer-events:all; } 
  .state-groups:hover{ opacity:.5 !important; cursor:pointer; }
  .state-groups text{ font-size: 9px !important; fill:#fff !important; }
  .state-groups text:hover{ cursor:pointer; pointer-events: all; }
  text { font-family: sans-serif; font-size: 9px; font-color:#fff !important; fill:#000 !important; cursor:default; }
  .cartoButton:hover { background-color:#ad645e !important; }
  .cartoButton { background-color:#8B2219; -moz-border-radius:0; -webkit-border-radius:0; border-radius:0; border:0; display:inline-block; cursor:pointer; color:#ffffff; font-family: "Benton Sans",Helvetica,Arial,sans-serif; font-size:16px; padding:10px 13px; text-decoration:none; font-weight:900; margin:2px; width:100%; }
  .cartoButton:active { background-color:#ad645e; }

  .states text{ color:white !important; font-size: 10px !important; pointer-events: all; }
  .dq8{ fill:#040506; color:white !important; pointer-events: all; }
  .dq7{ fill:#22282c; color:white !important; pointer-events: all; }
  .dq6{ fill:#404b52; color:white !important; pointer-events: all; }
  .dq5{ fill:#6c7f8c; color:white !important; pointer-events: all; }
  .mid{ fill:#ccc; }
  .dq4{ fill:#fcae91; color:white !important; pointer-events: all; }
  .dq3{ fill:#fb6a4a; color:white !important; pointer-events: all; }
  .dq2{ fill:#de2d26; color:white !important; pointer-events: all; }
  .dq1{ fill:#a50f15; color:white !important; pointer-events: all; }
  .none{ fill:#fff; pointer-events: all; }
  .selected { stroke-width:2px; stroke:#333 !important; }
  .faded { opacity:.2 !important; }
  text.none { fill:#000 !important; color:#000 !important; pointer-events: all; }

  .tdq8{ color:#040506; font-weight:900; }
  .tdq7{ color:#22282c; font-weight:900; }
  .tdq6{ color:#404b52; font-weight:900; }
  .tdq5{ color:#6c7f8c; font-weight:900; }
  .tmid{ color:#ccc; font-weight:900; }
  .tdq4{ color:#fcae91; font-weight:900; }
  .tdq3{ color:#fb6a4a; font-weight:900; }
  .tdq2{ color:#de2d26; font-weight:900; }
  .tdq1{ color:#a50f15; font-weight:900; }
  .tnone{ color:#000; font-weight:900; }

  #sliderDiv { background:#fff; z-index:9999 !important; }
  #mapbox { width:100%; display:inline-block; }
  #rankbox { width:100%; display:inline-block; }

  #bigChart { width:45%; height:auto; float:left; }
  #deathsMap { width:90%; }

  #buttonBox { float:right; width:100%; }
  .legend { height:50px; }
  .legend label, .legend span { display:block; float:left; height:15px; width:9%; text-align:center; font-size:11px; color:#808080; }

  #victims_nerdbox { width:100%; height:300px; padding:10px; display:none !important; }
  #victims_nerdbox div { margin:10px; }
  .victims_nerdbox { width:94%; min-height:300px; background:#ddd; display:inline-block; margin:5px; padding:10px; }
  .victims_nerdbox:hover { cursor:pointer; }
  .victimCard { width:30%; height:auto; background:#ddd; display:inline-block; margin:5px; padding:10px; }
  .victimCard:hover { cursor:pointer; opacity:.5; }
  #victimsHeader { font-size: 1.8em; float: left; clear: left; }
  #recordsReturned { float:right; font-size: 1.6em; font-weight: 600; }
  .victimName { font-size:1.3em; font-family:"Whitman-Bold-OSF"; font-weight:900; }
  .victimAge { font-size:1.3em; font-family:"Whitman-Bold-OSF"; font-weight:normal; }
  .details { margin-top:10px; }

  .zoom{ text-decoration:none; font-weight:bold; color:steelblue; display:block !important; float:none !important; clear:both; }
  #headerDiv { background:white; }
  
  #carto2 { float:left; }
  #cartoMapChatter { font-family:"Benton Sans"; float:right; min-height:125px; width:300px; }
  #topChatter { font-family:"Whitman-Bold-OSF"; }
  #topChatter { margin-top:50px; padding:20px; }
  .deathIcon img { width:150px; height:100px; }

  #filter input:focus { box-shadow: 0 0 5px #61bd1a; padding: 3px 0px 3px 3px; border: 1px solid #61bd1a; }
  #filter input { margin:0; width:100%; height:30px; line-height:120%; font-size: 1em; -webkit-appearance: none;
    -webkit-border-radius:0; border-radius:0; box-shadow: inset 0 1px 2px rgba(0,0,0,0.1); color: rgba(0,0,0,0.75);   -webkit-transition: all 0.30s ease-in-out; -moz-transition: all 0.30s ease-in-out; -ms-transition: all 0.30s ease-in-out; -o-transition: all 0.30s ease-in-out; background-color: #fff !important; font-family: inherit; border: 1px solid #ddd !important; }
  input:focus {outline:0 !important;}
  #legendary { width:350px; }

  #carto1, #carto2 { width:550px; }

   @media (max-width: 970px) {
      .victimCard { width:45%; }
      #map { width:100%; }
      #bigChart { width:100%; }
      body { overflow-x:hidden; }
    }
   @media (max-width: 710px) {
      #buttonBox { width:100%; }
      #cartoMapChatter { width:100%; }
      #carto1, #carto2 { width:100%;}
    }
   @media (max-width: 650px) {
      .victimCard { width:94%; }
    }
</style>

</head>

<body>

<div id="wrapper">

<div class="module" id="deathsMap">
<div class="module" id="statesComparison">
<div id="mapbox">
<h3>Percent change in fatal farm accidents by state</h3>
<div class='legend' id="legendary">
  <nav class='legend clearfix'>
    <span style='background:#fff;'>-67%</span>
        <span style='background:#040506;'></span>
        <span style='background:#22282c;'></span>
        <span style='background:#404b52;'></span>
        <span style='background:#6c7f8c;'></span>
        <span style='background:#fff;'>0</span>
        <span style='background:#fcae91;'></span>
        <span style='background:#fb6a4a;'></span>
        <span style='background:#de2d26;'></span>
        <span style='background:#a50f15;'></span>
        <span style='background:#fff;'>+58%</span>
    </nav>
</div>

<div class="breaker"></div>
<div class="topChatter">Minnesota suffered most farm-related deaths in the Midwest and ranks highly in fatal farm accidents nationally. While deadly farm accidents decreased in most states between the last two decades, in Minnesota they increased 37 percent.</div>
<div class="breaker"></div>

<div id="carto2"><svg width="550" height="400" viewBox="0 0 440 300" preserveAspectRatio="xMidYMid"></svg></div>
<div id="carto1"><svg width="550" height="400" viewBox="0 0 440 300" preserveAspectRatio="xMidYMid"></svg></div>

<div id="cartoMapChatter"></div>
<div class="breaker"></div>
<a href='javascript:void(0);' class='zoom'>Reset View</a>

<!--  <div id="buttonBox">
<button class="cartoButton" id="cartoMap">Map</button>
<button class="cartoButton" id="cartoRank">Rank</button>
</div> -->

</div>
</div>

</div>

</div>
  
</body>

<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="http://d3js.org/d3.v3.min.js"></script>
<script src="http://d3js.org/topojson.v1.min.js" type="text/javascript"></script>
<script src="http://d3js.org/queue.v1.min.js"></script>
<script src='https://api.tiles.mapbox.com/mapbox.js/v2.1.6/mapbox.js'></script>
<script src="js/d3.slider-master/d3.slider.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="js/jquery.sticky.js"></script>

<script>
//LIVE JSON MAGIC
//https://script.google.com/macros/s/AKfycbwG7mX6qPZaIhkwY2AJ2lU7kNarbm6OWIkWVfnmYZGYruIl40cu/exec?id=1eGWgtyT4ouwi6DKZF8rE8eTlOjTeBrk3KozImcCFNyA&sheet=rates
<?php

$jsonData = file_get_contents("https://script.googleusercontent.com/macros/echo?user_content_key=wi1U33nrsG4Qe0xqeEigPFZQldp-ak3QeroA31DRqKrw77jJqsJSMDOuy2S0b1IfGYwoAtAaexVlV54adT_nDBMxng6-QQfvOJmA1Yb3SEsKFZqtv3DaNYcMrmhZHmUMWojr9NvTBuBLhyHCd5hHaxCoMjMSmZWLp6XAShvjQj50JtCfh4yP7n1RnEoDeOH7XqmOXgX8RYIyMAhIAtjnF9UDzNXGLr6TLmt2PNm_0LkIyvgo3_FyFlMqvjY5AMuWPb-SbbO92YRo-6y4IMKOTzS4f-N1wum-xcG-w52aeuShZPjsV88guw&lib=MVcLnEUipyThKZcpmQKyqT_CoSfd4egCX");

?>

var dataLoad = <?php echo $jsonData; ?>

var data = dataLoad.rates;
</script>

<script>
//RESPONSIVE SVG
var aspect = 550 / 400, chart = $("#carto1 svg");
$(window).on("resize", function() {   
  var targetWidth = chart.parent().width();   
  chart.attr("width", targetWidth);   
  chart.attr("height", targetWidth / aspect);
});

var aspect2 = 550 / 400, chart2 = $("#carto2 svg");
$(window).on("resize", function() {   
  var targetWidth = chart2.parent().width();   
  chart2.attr("width", targetWidth);   
  chart2.attr("height", targetWidth / aspect);
});

$(window).on("load", function() {   
  var targetWidth = chart.parent().width();   
  chart.attr("width", targetWidth);   
  chart.attr("height", targetWidth / aspect);
});

$(window).on("load", function() {   
  var targetWidth = chart2.parent().width();   
  chart2.attr("width", targetWidth);   
  chart2.attr("height", targetWidth / aspect);
});
</script>

<script>
//STATE RANKING CARTOGRAMS
$("#carto1").hide();

$(document).ready(function() {
  $("#cartoMap").css("background-color","#333");
   $(".cartoButton").hide();

  $( ".zoom" ).click(function() {
  $(".cartoButton").css("background-color","#8B2219");
  // $(this).css("background-color","#333");

      d3.selectAll("rect").attr('class', function(d) {
            for (var i=0; i < data.length; i++){
                if (data[i].state == d.state_full){
                  if (data[i].pct_change <= -.8) { d.color = "dq8"; return "dq8"; }
                  else if (data[i].pct_change <= -.5) { d.color = "dq7"; return "dq7"; }
                  else if (data[i].pct_change <= -.3) { d.color = "dq6"; return "dq6"; }
                  else if (data[i].pct_change < 0) { d.color = "dq5"; return "dq5"; }
                  else if (data[i].pct_change == 0) { d.color = "none"; return "none"; }
                  else if (data[i].pct_change >= 1) { d.color = "dq1"; return "dq1"; }
                  else if (data[i].pct_change >= .5) { d.color = "dq2"; return "dq2"; }
                  else if (data[i].pct_change >= .3) { d.color = "dq3"; return "dq3"; }
                  else if (data[i].pct_change > 0) { d.color = "dq4"; return "dq4"; }
              }
            }
      }); 

  var chatter = document.getElementById('cartoMapChatter');
  chatter.innerHTML = "";
  });   
$( "#cartoMap" ).click(function() {
  $("#carto1").hide();
  $("#carto2").show();
  });
$( "#cartoRank" ).click(function() {
  $("#carto2").hide();
  $("#carto1").show();
   // d3.selectAll("rect").data(state_pos_co);

      d3.selectAll("rect").attr('class', function(d) {
             for (var i=0; i < data.length; i++){
                if (data[i].state == d.state_full){
                  if (data[i].pct_change <= -.8) { d.color = "dq8"; return "dq8"; }
                  else if (data[i].pct_change <= -.5) { d.color = "dq7"; return "dq7"; }
                  else if (data[i].pct_change <= -.3) { d.color = "dq6"; return "dq6"; }
                  else if (data[i].pct_change < 0) { d.color = "dq5"; return "dq5"; }
                  else if (data[i].pct_change == 0) { d.color = "none"; return "none"; }
                  else if (data[i].pct_change >= 1) { d.color = "dq1"; return "dq1"; }
                  else if (data[i].pct_change >= .5) { d.color = "dq2"; return "dq2"; }
                  else if (data[i].pct_change >= .3) { d.color = "dq3"; return "dq3"; }
                  else if (data[i].pct_change > 0) { d.color = "dq4"; return "dq4"; }
              }
            }
      });
  });

    // cartogram1.init();
    cartogram2.init();
});

 var grey1 = "#040506";
 var grey2 = "#22282c";
 var grey3 = "404b52";
 var grey4 = "6c7f8c";
 var mid = "#ccc";
 var red1 = "fcae91";
 var red2 = "fb6a4a";
 var red3 = "#de2d26";
 var red4 = "#a50f15";
 var none = "#fff";

// var cartogram1 = {
//     margin: {
//         top: 40,
//         right: 160,
//         bottom: 0,
//         left: 10
//     },

//     selector: '#carto1 svg',

//     init: function() {
//         var self = this;

//         self.$el = $(self.selector);

//         self.width = 550 - self.margin.left - self.margin.right;
//         self.height = 400 - self.margin.top - self.margin.bottom;

//         self.svg = d3.select(self.selector)
//             .attr('height', self.height + self.margin.top + self.margin.bottom)
//             .attr('width', self.width + self.margin.left + self.margin.right)

//         self.state_size = self.width / 12;
//         self.state_padding = 2;

//         self.map = self.svg.append('g')
//             .attr('transform', 'translate(' + self.margin.left + ','
//                   + self.margin.top + ')')

//         self.drawMap();
//     },

//     drawMap: function() {
//         var self = this;

//         var states = self.map.selectAll('.states')
//             .data(self.state_pos_co)
//             .enter().append('g')
//             .attr('class', 'state-groups');

//         var state = states.append('rect')
//             .attr('id', function(d) {
//                 return d.state_postal + "d";
//             })
//             .attr('class', 'state')
//             .attr('class', function(d) {
//               for (var i=0; i < data.length; i++){
//                 if (data[i].state == d.state_full){
//                   if (data[i].pct_change <= -.8) { d.color = "dq8"; return "dq8"; }
//                   else if (data[i].pct_change <= -.5) { d.color = "dq7"; return "dq7"; }
//                   else if (data[i].pct_change <= -.3) { d.color = "dq6"; return "dq6"; }
//                   else if (data[i].pct_change < 0) { d.color = "dq5"; return "dq5"; }
//                   else if (data[i].pct_change == 0) { d.color = "none"; return "none"; }
//                   else if (data[i].pct_change >= 1) { d.color = "dq1"; return "dq1"; }
//                   else if (data[i].pct_change >= .5) { d.color = "dq2"; return "dq2"; }
//                   else if (data[i].pct_change >= .3) { d.color = "dq3"; return "dq3"; }
//                   else if (data[i].pct_change > 0) { d.color = "dq4"; return "dq4"; }
//               }
//             }
//             })
//             .attr('rx', 0)
//             .attr('ry', 0)
//             .attr('x', function(d) {
//                 return d.column * (self.state_size + self.state_padding);
//             })
//             .attr('y', function(d) {
//                 return d.row * (self.state_size + self.state_padding);
//             })
//             .attr('width', self.state_size)
//             .attr('height', self.state_size)
//             .on('click', function(d) { 
//               d3.selectAll("rect").attr('class', function(d) {
//                 for (var i=0; i < data.length; i++){
//                 if (data[i].state == d.state_full){
//                   if (data[i].pct_change <= -.8) { d.color = "dq8"; return "faded dq8"; }
//                   else if (data[i].pct_change <= -.5) { d.color = "dq7"; return "faded dq7"; }
//                   else if (data[i].pct_change <= -.3) { d.color = "dq6"; return "faded dq6"; }
//                   else if (data[i].pct_change < 0) { d.color = "dq5"; return "faded dq5"; }
//                   else if (data[i].pct_change == 0) { d.color = "none"; return "faded none"; }
//                   else if (data[i].pct_change >= 1) { d.color = "dq1"; return "faded dq1"; }
//                   else if (data[i].pct_change >= .5) { d.color = "dq2"; return "faded dq2"; }
//                   else if (data[i].pct_change >= .3) { d.color = "dq3"; return "faded dq3"; }
//                   else if (data[i].pct_change > 0) { d.color = "dq4"; return "faded dq4"; }
//               }
//             }
//             }); 
//               d3.select(this).attr('class', function(d) {
//                               for (var i=0; i < data.length; i++){
//                 if (data[i].state == d.state_full){
//                   if (data[i].pct_change <= -.8) { d.color = "dq8"; return "selected dq8"; }
//                   else if (data[i].pct_change <= -.5) { d.color = "dq7"; return "selected dq7"; }
//                   else if (data[i].pct_change <= -.3) { d.color = "dq6"; return "selected dq6"; }
//                   else if (data[i].pct_change < 0) { d.color = "dq5"; return "selected dq5"; }
//                   else if (data[i].pct_change == 0) { d.color = "none"; return "selected none"; }
//                   else if (data[i].pct_change >= 1) { d.color = "dq1"; return "selected dq1"; }
//                   else if (data[i].pct_change >= .5) { d.color = "dq2"; return "selected dq2"; }
//                   else if (data[i].pct_change >= .3) { d.color = "dq3"; return "selected dq3"; }
//                   else if (data[i].pct_change > 0) { d.color = "dq4"; return "selected dq4"; }
//               }
//             }
//             }); 
//               var chatter = document.getElementById('cartoMapChatter');
//               for (var i=0; i < data.length; i++){
//                 if (data[i].state == d.state_full){
//                   if (data[i].pct_change <= -.8) { d.color = "dq8"; }
//                   else if (data[i].pct_change <= -.5) { var colorMe = "dq7";  }
//                   else if (data[i].pct_change <= -.3) { var colorMe = "dq6"; }
//                   else if (data[i].pct_change < 0) { var colorMe = "dq5";  }
//                   else if (data[i].pct_change == 0) { var colorMe = "none";  }
//                   else if (data[i].pct_change >= 1) { var colorMe = "dq1";  }
//                   else if (data[i].pct_change >= .5) { var colorMe = "dq2";  }
//                   else if (data[i].pct_change >= .3) { var colorMe = "dq3";  }
//                   else if (data[i].pct_change > 0) { var colorMe = "dq4";  }

//                   d.color = colorMe;
//                   chatter.innerHTML = "<h2>" + d.state_full + "</h2><div><span class='stateData'>Total farms</span> : <span class='stateStat'>" + d3.format(",")(data[i].total_farms) + "</span></div><div><span class='stateData'>Total farm workers in 2012</span> : <span class='stateStat'>" + d3.format(",")(data[i].farm_workers_2012) + "</span></div><div><span class='stateData'>Death rate per 100,000</span> : <span class='stateStat'>" + d3.format(".0f")(data[i].rate_2012) + "</span></div><div><span class='stateData'>1992-2002 total farm deaths</span> : <span class='stateStat'>" + data[i].deaths1992 + "</span></div><div><span class='stateData'>2003-2013 total farm deaths</span> : <span class='stateStat'>" + data[i].deaths2003 + "</span></div><div><span class='stateData'>Percent change</span> : <span class='stateStat t" + d.color + "'>" + d3.format("%")(Number(data[i].pct_change)) + "</span></div>";
//                 }           
//               }             });

//         var text = states.append('text')
//             .attr('class', 'state-label')
//             .attr('class', function(d) {
//                 return d.color;
//             })
//             .attr('dominant-baseline', 'central')
//             .attr('x', function(d) {
//                 return (d.column * (self.state_size + self.state_padding))
//                         + self.state_size / 2; })
//             .attr('y', function(d) {
//                 return (d.row * (self.state_size + self.state_padding))
//                     + self.state_size / 2; })
//             .style('text-anchor', 'middle')
//             .on('click', function(d) { 
//             d3.selectAll("rect").attr('class', function(d) {
//                for (var i=0; i < data.length; i++){
//                 if (data[i].state == d.state_full){
//                   if (data[i].pct_change <= -.8) { d.color = "dq8"; return "faded dq8"; }
//                   else if (data[i].pct_change <= -.5) { d.color = "dq7"; return "faded dq7"; }
//                   else if (data[i].pct_change <= -.3) { d.color = "dq6"; return "faded dq6"; }
//                   else if (data[i].pct_change < 0) { d.color = "dq5"; return "faded dq5"; }
//                   else if (data[i].pct_change == 0) { d.color = "none"; return "faded none"; }
//                   else if (data[i].pct_change >= 1) { d.color = "dq1"; return "faded dq1"; }
//                   else if (data[i].pct_change >= .5) { d.color = "dq2"; return "faded dq2"; }
//                   else if (data[i].pct_change >= .3) { d.color = "dq3"; return "faded dq3"; }
//                   else if (data[i].pct_change > 0) { d.color = "dq4"; return "faded dq4"; }
//               }
//             } 
//             }); 
//               d3.select(this.parentNode).select("rect").attr('class', function(d) {
//               for (var i=0; i < data.length; i++){
//                 if (data[i].state == d.state_full){
//                   if (data[i].pct_change <= -.8) { d.color = "dq8"; return "selected dq8"; }
//                   else if (data[i].pct_change <= -.5) { d.color = "dq7"; return "selected dq7"; }
//                   else if (data[i].pct_change <= -.3) { d.color = "dq6"; return "selected dq6"; }
//                   else if (data[i].pct_change < 0) { d.color = "dq5"; return "selected dq5"; }
//                   else if (data[i].pct_change == 0) { d.color = "none"; return "selected none"; }
//                   else if (data[i].pct_change >= 1) { d.color = "dq1"; return "selected dq1"; }
//                   else if (data[i].pct_change >= .5) { d.color = "dq2"; return "selected dq2"; }
//                   else if (data[i].pct_change >= .3) { d.color = "dq3"; return "selected dq3"; }
//                   else if (data[i].pct_change > 0) { d.color = "dq4"; return "selected dq4"; }
//               }
//             }
//             });
//               var chatter = document.getElementById('cartoMapChatter');
//               for (var i=0; i < data.length; i++){
//                 if (data[i].state == d.state_full){
//                    if (data[i].pct_change <= -.8) { d.color = "dq8"; }
//                   else if (data[i].pct_change <= -.5) { var colorMe = "dq7";  }
//                   else if (data[i].pct_change <= -.3) { var colorMe = "dq6"; }
//                   else if (data[i].pct_change < 0) { var colorMe = "dq5";  }
//                   else if (data[i].pct_change == 0) { var colorMe = "none";  }
//                   else if (data[i].pct_change >= 1) { var colorMe = "dq1";  }
//                   else if (data[i].pct_change >= .5) { var colorMe = "dq2";  }
//                   else if (data[i].pct_change >= .3) { var colorMe = "dq3";  }
//                   else if (data[i].pct_change > 0) { var colorMe = "dq4";  }

//                   d.color = colorMe;
//                   chatter.innerHTML = "<h2>" + d.state_full + "</h2><div><span class='stateData'>Total farms</span> : <span class='stateStat'>" + d3.format(",")(data[i].total_farms) + "</span></div><div><span class='stateData'>Total farm workers in 2012</span> : <span class='stateStat'>" + d3.format(",")(data[i].farm_workers_2012) + "</span></div><div><span class='stateData'>Death rate per 100,000</span> : <span class='stateStat'>" + d3.format(".0f")(data[i].rate_2012) + "</span></div><div><span class='stateData'>1992-2002 total farm deaths</span> : <span class='stateStat'>" + data[i].deaths1992 + "</span></div><div><span class='stateData'>2003-2013 total farm deaths</span> : <span class='stateStat'>" + data[i].deaths2003 + "</span></div><div><span class='stateData'>Percent change</span> : <span class='stateStat t" + d.color + "'>" + d3.format("%")(Number(data[i].pct_change)) + "</span></div>";
//                 }           
//               }             })
//             .text(function(d) {
//                 return d.state_postal;
//             });
//     },

//       state_pos_co: [{'state_full':'Michigan','state_postal':'MI','row':0,'column':0,'state_total_old':'102','state_total_new':'177','state_change':'+74%','color':'dq8'},
//       {'state_full':'New Jersey','state_postal':'NJ','row':0,'column':1,'state_total_old':'8','state_total_new':'12','state_change':'+50%','color':'dq8'},
//       {'state_full':'South Carolina','state_postal':'SC','row':0,'column':2,'state_total_old':'16','state_total_new':'22','state_change':'+38%','color':'dq7'},
//       {'state_full':'Minnesota','state_postal':'MN','row':0,'column':3,'state_total_old':'153','state_total_new':'210','state_change':'+37%','color':'dq7'},
//       {'state_full':'Arizona','state_postal':'AZ','row':0,'column':4,'state_total_old':'14','state_total_new':'19','state_change':'+36%','color':'dq7'},
//       {'state_full':'North Dakota','state_postal':'ND','row':0,'column':5,'state_total_old':'84','state_total_new':'114','state_change':'+36%','color':'dq7'},
//       {'state_full':'Iowa','state_postal':'IA','row':0,'column':6,'state_total_old':'228','state_total_new':'293','state_change':'+29%','color':'dq6'},
//       {'state_full':'Oregon','state_postal':'OR','row':0,'column':7,'state_total_old':'40','state_total_new':'48','state_change':'+20%','color':'dq6'},
//       {'state_full':'South Dakota','state_postal':'SD','row':0,'column':8,'state_total_old':'88','state_total_new':'103','state_change':'+17%','color':'dq5'},
//       {'state_full':'Missouri','state_postal':'MO','row':0,'column':9,'state_total_old':'264','state_total_new':'276','state_change':'+5%','color':'dq5'},
//       {'state_full':'West Virginia','state_postal':'WV','row':0,'column':10,'state_total_old':'9','state_total_new':'9','state_change':'0%','color':'mid'},
//       {'state_full':'Indiana','state_postal':'IN','row':1,'column':0,'state_total_old':'216','state_total_new':'215','state_change':'0%','color':'mid'},
//       {'state_full':'Kansas','state_postal':'KS','row':1,'column':1,'state_total_old':'215','state_total_new':'203','state_change':'-6%','color':'dq4'},
//       {'state_full':'Montana','state_postal':'MT','row':1,'column':2,'state_total_old':'145','state_total_new':'131','state_change':'-10%','color':'dq4'},
//       {'state_full':'Virginia','state_postal':'VA','row':1,'column':3,'state_total_old':'130','state_total_new':'117','state_change':'-10%','color':'dq4'},
//       {'state_full':'Nebraska','state_postal':'NE','row':1,'column':4,'state_total_old':'199','state_total_new':'177','state_change':'-11%','color':'dq4'},
//       {'state_full':'Illinois','state_postal':'IL','row':1,'column':5,'state_total_old':'251','state_total_new':'217','state_change':'-11%','color':'dq4'},
//       {'state_full':'Florida','state_postal':'FL','row':1,'column':6,'state_total_old':'150','state_total_new':'129','state_change':'-14%','color':'dq4'},
//       {'state_full':'Wisconsin','state_postal':'WI','row':1,'column':7,'state_total_old':'279','state_total_new':'238','state_change':'-15%','color':'dq4'},
//       {'state_full':'Ohio','state_postal':'OH','row':1,'column':8,'state_total_old':'258','state_total_new':'211','state_change':'-18%','color':'dq4'},
//       {'state_full':'Idaho','state_postal':'ID','row':1,'column':9,'state_total_old':'71','state_total_new':'56','state_change':'-21%','color':'dq3'},
//       {'state_full':'Wyoming','state_postal':'WY','row':1,'column':10,'state_total_old':'33','state_total_new':'26','state_change':'-21%','color':'dq3'},
//       {'state_full':'California','state_postal':'CA','row':2,'column':0,'state_total_old':'358','state_total_new':'267','state_change':'-28%','color':'dq3'},
//       {'state_full':'Texas','state_postal':'TX','row':2,'column':1,'state_total_old':'223','state_total_new':'158','state_change':'-29%','color':'dq3'},
//       {'state_full':'Oklahoma','state_postal':'OK','row':2,'column':2,'state_total_old':'46','state_total_new':'32','state_change':'-30%','color':'dq3'},
//       {'state_full':'Colorado','state_postal':'CO','row':2,'column':3,'state_total_old':'124','state_total_new':'83','state_change':'-33%','color':'dq3'},
//       {'state_full':'Arkansas','state_postal':'AR','row':2,'column':4,'state_total_old':'36','state_total_new':'24','state_change':'-33%','color':'dq3'},
//       {'state_full':'Pennsylvania','state_postal':'PA','row':2,'column':5,'state_total_old':'276','state_total_new':'182','state_change':'-34%','color':'dq3'},
//       {'state_full':'North Carolina','state_postal':'NC','row':2,'column':6,'state_total_old':'156','state_total_new':'101','state_change':'-35%','color':'dq3'},
//       {'state_full':'Georgia','state_postal':'GA','row':2,'column':7,'state_total_old':'77','state_total_new':'48','state_change':'-38%','color':'dq3'},
//       {'state_full':'New York','state_postal':'NY','row':2,'column':8,'state_total_old':'203','state_total_new':'125','state_change':'-38%','color':'dq3'},
//       {'state_full':'Washington','state_postal':'WA','row':2,'column':9,'state_total_old':'88','state_total_new':'54','state_change':'-39%','color':'dq3'},
//       {'state_full':'Tennessee','state_postal':'TN','row':2,'column':10,'state_total_old':'244','state_total_new':'142','state_change':'-42%','color':'dq2'},
//       {'state_full':'Maryland','state_postal':'MD','row':3,'column':0,'state_total_old':'26','state_total_new':'14','state_change':'-46%','color':'dq2'},
//       {'state_full':'Kentucky','state_postal':'KY','row':3,'column':1,'state_total_old':'308','state_total_new':'158','state_change':'-49%','color':'dq2'},
//       {'state_full':'Louisiana','state_postal':'LA','row':3,'column':2,'state_total_old':'30','state_total_new':'14','state_change':'-53%','color':'dq1'},
//       {'state_full':'Mississippi','state_postal':'MS','row':3,'column':3,'state_total_old':'65','state_total_new':'28','state_change':'-57%','color':'dq1'},
//       {'state_full':'Vermont','state_postal':'VT','row':3,'column':4,'state_total_old':'7','state_total_new':'3','state_change':'-57%','color':'dq1'},
//       {'state_full':'Alabama','state_postal':'AL','row':3,'column':5,'state_total_old':'32','state_total_new':'12','state_change':'-63%','color':'dq1'},
//       {'state_full':'Utah','state_postal':'UT','row':3,'column':6,'state_total_old':'24','state_total_new':'8','state_change':'-67%','color':'dq1'},
//       {'state_full':'Delaware','state_postal':'AL','row':3,'column':7,'state_total_old':'3','state_total_new':'0','state_change':'-100%','color':'dq1'},
//       {'state_full':'New Mexico','state_postal':'NM','row':3,'column':8,'state_total_old':'24','state_total_new':'0','state_change':'-100%','color':'dq1'},
//       {'state_full':'Connecticut','state_postal':'CT','row':3,'column':9,'state_total_old':'0','state_total_new':'2','state_change':'Insufficient data','color':'none'},
//       {'state_full':'Hawaii','state_postal':'HI','row':3,'column':10,'state_total_old':'0','state_total_new':'1','state_change':'Insufficient data','color':'none'},
//       {'state_full':'Maine','state_postal':'ME','row':4,'column':0,'state_total_old':'0','state_total_new':'7','state_change':'Insufficient data','color':'none'},
//       {'state_full':'Massachusetts','state_postal':'MA','row':4,'column':1,'state_total_old':'0','state_total_new':'5','state_change':'Insufficient data','color':'none'},
//       {'state_full':'Nevada','state_postal':'NV','row':4,'column':2,'state_total_old':'0','state_total_new':'3','state_change':'Insufficient data','color':'none'},
//       {'state_full':'New Hampshire','state_postal':'NH','row':4,'column':3,'state_total_old':'0','state_total_new':'1','state_change':'Insufficient data','color':'none'},
//       {'state_full':'Alaska','state_postal':'AK','row':4,'column':4,'state_total_old':'0','state_total_new':'0','state_change':'Insufficient data','color':'none'},
//       {'state_full':'Rhode Island','state_postal':'RI','row':4,'column':5,'state_total_old':'0','state_total_new':'0','state_change':'Insufficient data','color':'none'},
//       {'state_full':'D.C.','state_postal':'DC','row':4,'column':6,'state_total_old':'0','state_total_new':'0','state_change':'Insufficient data','color':'none'}]

//       };

var cartogram2 = {
    margin: {
        top: 40,
        right: 140,
        bottom: 0,
        left: 60
    },

    selector: '#carto2 svg',

    init: function() {
        var self = this;

        self.$el = $(self.selector);

        self.width = 550 - self.margin.left - self.margin.right;
        self.height = 400 - self.margin.top - self.margin.bottom;

        self.svg = d3.select(self.selector)
            .attr('height', self.height + self.margin.top + self.margin.bottom)
            .attr('width', self.width + self.margin.left + self.margin.right)

        self.state_size = self.width / 12;
        self.state_padding = 2;

        self.map = self.svg.append('g')
            .attr('transform', 'translate(' + self.margin.left + ','
                  + self.margin.top + ')')

        self.drawMap();
    },

    drawMap: function() {
        var self = this;

        var states = self.map.selectAll('.states')
            .data(self.state_pos_co2)
            .enter().append('g')
            .attr('class', 'state-groups');

        var state = states.append('rect')
            .attr('id', function(d) {
                return d.state_postal + "d";
            })
            .attr('class', 'state')
            .attr('class', function(d) {
              for (var i=0; i < data.length; i++){
                if (data[i].state == d.state_full){
                  if (data[i].pct_change <= -.8) { d.color = "dq8"; return "dq8"; }
                  else if (data[i].pct_change <= -.5) { d.color = "dq7"; return "dq7"; }
                  else if (data[i].pct_change <= -.3) { d.color = "dq6"; return "dq6"; }
                  else if (data[i].pct_change < 0) { d.color = "dq5"; return "dq5"; }
                  else if (data[i].pct_change == 0) { d.color = "none"; return "none"; }
                  else if (data[i].pct_change >= 1) { d.color = "dq1"; return "dq1"; }
                  else if (data[i].pct_change >= .5) { d.color = "dq2"; return "dq2"; }
                  else if (data[i].pct_change >= .3) { d.color = "dq3"; return "dq3"; }
                  else if (data[i].pct_change > 0) { d.color = "dq4"; return "dq4"; }
              }
            }
            })
            .attr('rx', 0)
            .attr('ry', 0)
            .attr('x', function(d) {
                return d.column * (self.state_size + self.state_padding);
            })
            .attr('y', function(d) {
                return d.row * (self.state_size + self.state_padding);
            })
            .attr('width', self.state_size)
            .attr('height', self.state_size)
            .on('click', function(d) {
              d3.selectAll("rect").attr('class', function(d) {
               for (var i=0; i < data.length; i++){
                if (data[i].state == d.state_full){
                  if (data[i].pct_change <= -.8) { d.color = "dq8"; return "faded dq8"; }
                  else if (data[i].pct_change <= -.5) { d.color = "dq7"; return "faded dq7"; }
                  else if (data[i].pct_change <= -.3) { d.color = "dq6"; return "faded dq6"; }
                  else if (data[i].pct_change < 0) { d.color = "dq5"; return "faded dq5"; }
                  else if (data[i].pct_change == 0) { d.color = "none"; return "faded none"; }
                  else if (data[i].pct_change >= 1) { d.color = "dq1"; return "faded dq1"; }
                  else if (data[i].pct_change >= .5) { d.color = "dq2"; return "faded dq2"; }
                  else if (data[i].pct_change >= .3) { d.color = "dq3"; return "faded dq3"; }
                  else if (data[i].pct_change > 0) { d.color = "dq4"; return "faded dq4"; }
              }
            }
                
            }); 
              d3.select(this).attr('class', function(d) {
                for (var i=0; i < data.length; i++){
                if (data[i].state == d.state_full){
                  if (data[i].pct_change <= -.8) { d.color = "dq8"; return "selected dq8"; }
                  else if (data[i].pct_change <= -.5) { d.color = "dq7"; return "selected dq7"; }
                  else if (data[i].pct_change <= -.3) { d.color = "dq6"; return "selected dq6"; }
                  else if (data[i].pct_change < 0) { d.color = "dq5"; return "selected dq5"; }
                  else if (data[i].pct_change == 0) { d.color = "none"; return "selected none"; }
                  else if (data[i].pct_change >= 1) { d.color = "dq1"; return "selected dq1"; }
                  else if (data[i].pct_change >= .5) { d.color = "dq2"; return "selected dq2"; }
                  else if (data[i].pct_change >= .3) { d.color = "dq3"; return "selected dq3"; }
                  else if (data[i].pct_change > 0) { d.color = "dq4"; return "selected dq4"; }
              }
            }
            });
              var chatter = document.getElementById('cartoMapChatter');
              for (var i=0; i < data.length; i++){
                if (data[i].state == d.state_full){
                  if (data[i].pct_change <= -.8) { d.color = "dq8"; }
                  else if (data[i].pct_change <= -.5) { var colorMe = "dq7";  }
                  else if (data[i].pct_change <= -.3) { var colorMe = "dq6"; }
                  else if (data[i].pct_change < 0) { var colorMe = "dq5";  }
                  else if (data[i].pct_change == 0) { var colorMe = "none";  }
                  else if (data[i].pct_change >= 1) { var colorMe = "dq1";  }
                  else if (data[i].pct_change >= .5) { var colorMe = "dq2";  }
                  else if (data[i].pct_change >= .3) { var colorMe = "dq3";  }
                  else if (data[i].pct_change > 0) { var colorMe = "dq4";  }

                  d.color = colorMe;
                  chatter.innerHTML = "<h2>" + d.state_full + "</h2><div><span class='stateData'>Total farms</span> : <span class='stateStat'>" + d3.format(",")(data[i].total_farms) + "</span></div><div><span class='stateData'>Total farm workers in 2012</span> : <span class='stateStat'>" + d3.format(",")(data[i].farm_workers_2012) + "</span></div><div><span class='stateData'>Death rate per 100,000</span> : <span class='stateStat'>" + d3.format(".0f")(data[i].rate_2012) + "</span></div><div><span class='stateData'>1992-2002 total farm deaths</span> : <span class='stateStat'>" + data[i].deaths1992 + "</span></div><div><span class='stateData'>2003-2013 total farm deaths</span> : <span class='stateStat'>" + data[i].deaths2003 + "</span></div><div><span class='stateData'>Percent change</span> : <span class='stateStat t" + d.color + "'>" + d3.format("%")(Number(data[i].pct_change)) + "</span></div>";
                }           
              }             });

        var text = states.append('text')
            .attr('class', 'state-label')
            .attr('class', function(d) {
                return d.color;
            })
            .attr('dominant-baseline', 'central')
            .attr('x', function(d) {
                return (d.column * (self.state_size + self.state_padding))
                        + self.state_size / 2; })
            .attr('y', function(d) {
                return (d.row * (self.state_size + self.state_padding))
                    + self.state_size / 2; })
            .style('text-anchor', 'middle')
            .on('click', function(d) { 
             d3.selectAll("rect").attr('class', function(d) {
              for (var i=0; i < data.length; i++){
                if (data[i].state == d.state_full){
                  if (data[i].pct_change <= -.8) { d.color = "dq8"; return "faded dq8"; }
                  else if (data[i].pct_change <= -.5) { d.color = "dq7"; return "faded dq7"; }
                  else if (data[i].pct_change <= -.3) { d.color = "dq6"; return "faded dq6"; }
                  else if (data[i].pct_change < 0) { d.color = "dq5"; return "faded dq5"; }
                  else if (data[i].pct_change == 0) { d.color = "none"; return "faded none"; }
                  else if (data[i].pct_change >= 1) { d.color = "dq1"; return "faded dq1"; }
                  else if (data[i].pct_change >= .5) { d.color = "dq2"; return "faded dq2"; }
                  else if (data[i].pct_change >= .3) { d.color = "dq3"; return "faded dq3"; }
                  else if (data[i].pct_change > 0) { d.color = "dq4"; return "faded dq4"; }
              }
            }
            }); 
              d3.select(this.parentNode).select("rect").attr('class', function(d) {
              for (var i=0; i < data.length; i++){
                if (data[i].state == d.state_full){
                  if (data[i].pct_change <= -.8) { d.color = "dq8"; return "selected dq8"; }
                  else if (data[i].pct_change <= -.5) { d.color = "dq7"; return "selected dq7"; }
                  else if (data[i].pct_change <= -.3) { d.color = "dq6"; return "selected dq6"; }
                  else if (data[i].pct_change < 0) { d.color = "dq5"; return "selected dq5"; }
                  else if (data[i].pct_change == 0) { d.color = "none"; return "selected none"; }
                  else if (data[i].pct_change >= 1) { d.color = "dq1"; return "selected dq1"; }
                  else if (data[i].pct_change >= .5) { d.color = "dq2"; return "selected dq2"; }
                  else if (data[i].pct_change >= .3) { d.color = "dq3"; return "selected dq3"; }
                  else if (data[i].pct_change > 0) { d.color = "dq4"; return "selected dq4"; }
              }
            }
            });
              var chatter = document.getElementById('cartoMapChatter');
              for (var i=0; i < data.length; i++){
                if (data[i].state == d.state_full){
                  if (data[i].pct_change <= -.8) { d.color = "dq8"; }
                  else if (data[i].pct_change <= -.5) { var colorMe = "dq7";  }
                  else if (data[i].pct_change <= -.3) { var colorMe = "dq6"; }
                  else if (data[i].pct_change < 0) { var colorMe = "dq5";  }
                  else if (data[i].pct_change == 0) { var colorMe = "none";  }
                  else if (data[i].pct_change >= 1) { var colorMe = "dq1";  }
                  else if (data[i].pct_change >= .5) { var colorMe = "dq2";  }
                  else if (data[i].pct_change >= .3) { var colorMe = "dq3";  }
                  else if (data[i].pct_change > 0) { var colorMe = "dq4";  }

                  d.color = colorMe;
                  chatter.innerHTML = "<h2>" + d.state_full + "</h2><div><span class='stateData'>Total farms</span> : <span class='stateStat'>" + d3.format(",")(data[i].total_farms) + "</span></div><div><span class='stateData'>Total farm workers in 2012</span> : <span class='stateStat'>" + d3.format(",")(data[i].farm_workers_2012) + "</span></div><div><span class='stateData'>Death rate per 100,000</span> : <span class='stateStat'>" + d3.format(".0f")(data[i].rate_2012) + "</span></div><div><span class='stateData'>1992-2002 total farm deaths</span> : <span class='stateStat'>" + data[i].deaths1992 + "</span></div><div><span class='stateData'>2003-2013 total farm deaths</span> : <span class='stateStat'>" + data[i].deaths2003 + "</span></div><div><span class='stateData'>Percent change</span> : <span class='stateStat t" + d.color + "'>" + d3.format("%")(Number(data[i].pct_change)) + "</span></div>";
                }           
              }             })
            .text(function(d) {
                return d.state_postal;
            });
    },

    state_pos_co2: [{'state_full':'Alabama','state_postal':'AL','row':5,'column':6,'state_total_old':'32','state_total_new':'25','state_change':'-63%','color':'dq1'},
        {'state_full':'Alaska','state_postal':'AK','row':6,'column':0,'state_total_old':'0','state_total_new':'0','state_change':'Insufficient data','color':'none'},
        {'state_full':'Arizona','state_postal':'AZ','row':4,'column':1,'state_total_old':'14','state_total_new':'36','state_change':'+36%','color':'dq7'},
        {'state_full':'Arkansas','state_postal':'AR','row':4,'column':4,'state_total_old':'36','state_total_new':'43','state_change':'-33%','color':'dq3'},
        {'state_full':'California','state_postal':'CA','row':3,'column':0,'state_total_old':'358','state_total_new':'267','state_change':'-25%','color':'dq3'},
        {'state_full':'Colorado','state_postal':'CO','row':3,'column':2,'state_total_old':'124','state_total_new':'93','state_change':'-33%','color':'dq3'},
        {'state_full':'Connecticut','state_postal':'CT','row':2,'column':9,'state_total_old':'0','state_total_new':'6','state_change':'Insufficient data','color':'none'},
        {'state_full':'D.C.','state_postal':'DC','row':4,'column':8,'state_total_old':'0','state_total_new':'0','state_change':'Insufficient data','color':'none'},
        {'state_full':'Delaware','state_postal':'DE','row':3,'column':9,'state_total_old':'3','state_total_new':'3','state_change':'-100%','color':'dq1'},
        {'state_full':'Florida','state_postal':'FL','row':6,'column':8,'state_total_old':'150','state_total_new':'136','state_change':'-14%','color':'dq4'},
        {'state_full':'Georgia','state_postal':'GA','row':5,'column':7,'state_total_old':'77','state_total_new':'59','state_change':'-38%','color':'dq3'},
        {'state_full':'Hawaii','state_postal':'HI','row':6,'column':-1,'state_total_old':'0','state_total_new':'11','state_change':'Insufficient data','color':'none'},
        {'state_full':'Idaho','state_postal':'ID','row':1,'column':1,'state_total_old':'71','state_total_new':'68','state_change':'-21%','color':'dq3'},
        {'state_full':'Illinois','state_postal':'IL','row':1,'column':6,'state_total_old':'251','state_total_new':'221','state_change':'-14%','color':'dq4'},
        {'state_full':'Indiana','state_postal':'IN','row':2,'column':5,'state_total_old':'216','state_total_new':'220','state_change':'0%','color':'mid'},
        {'state_full':'Iowa','state_postal':'IA','row':2,'column':4,'state_total_old':'228','state_total_new':'295','state_change':'+29%','color':'dq6'},
        {'state_full':'Kansas','state_postal':'KS','row':4,'column':3,'state_total_old':'215','state_total_new':'205','state_change':'-6%','color':'dq4'},
        {'state_full':'Kentucky','state_postal':'KY','row':3,'column':5,'state_total_old':'308','state_total_new':'162','state_change':'-49%','color':'dq2'},
        {'state_full':'Louisiana','state_postal':'LA','row':5,'column':4,'state_total_old':'30','state_total_new':'26','state_change':'-53%','color':'dq1'},
        {'state_full':'Maine','state_postal':'ME','row':-1,'column':10,'state_total_old':'0','state_total_new':'14','state_change':'Insufficient data','color':'none'},
        {'state_full':'Maryland','state_postal':'MD','row':3,'column':8,'state_total_old':'26','state_total_new':'27','state_change':'-46%','color':'dq2'},
        {'state_full':'Massachusetts','state_postal':'MA','row':1,'column':9,'state_total_old':'0','state_total_new':'11','state_change':'Insufficient data','color':'none'},
        {'state_full':'Michigan','state_postal':'MI','row':1,'column':7,'state_total_old':'102','state_total_new':'179','state_change':'+74%','color':'dq8'},
        {'state_full':'Minnesota','state_postal':'MN','row':1,'column':4,'state_total_old':'153','state_total_new':'210','state_change':'+37%','color':'dq7'},
        {'state_full':'Mississippi','state_postal':'MS','row':5,'column':5,'state_total_old':'65','state_total_new':'46','state_change':'-57%','color':'dq1'},
        {'state_full':'Missouri','state_postal':'MO','row':3,'column':4,'state_total_old':'264','state_total_new':'288','state_change':'+5%','color':'dq5'},
        {'state_full':'Montana','state_postal':'MT','row':1,'column':2,'state_total_old':'145','state_total_new':'139','state_change':'-10%','color':'dq4'},
        {'state_full':'Nebraska','state_postal':'NE','row':3,'column':3,'state_total_old':'199','state_total_new':'179','state_change':'-11%','color':'dq4'},
        {'state_full':'Nevada','state_postal':'NV','row':2,'column':1,'state_total_old':'0','state_total_new':'11','state_change':'Insufficient data','color':'none'},
        {'state_full':'New Hampshire','state_postal':'NH','row':0,'column':10,'state_total_old':'0','state_total_new':'4','state_change':'Insufficient data','color':'none'},
        {'state_full':'New Jersey','state_postal':'NJ','row':2,'column':8,'state_total_old':'8','state_total_new':'19','state_change':'+50%','color':'dq8'},
        {'state_full':'New Mexico','state_postal':'NM','row':4,'column':2,'state_total_old':'24','state_total_new':'14','state_change':'-100%','color':'dq1'},
        {'state_full':'New York','state_postal':'NY','row':1,'column':8,'state_total_old':'203','state_total_new':'135','state_change':'-38%','color':'dq3'},
        {'state_full':'North Carolina','state_postal':'NC','row':4,'column':6,'state_total_old':'156','state_total_new':'111','state_change':'-35%','color':'dq3'},
        {'state_full':'North Dakota','state_postal':'ND','row':1,'column':3,'state_total_old':'84','state_total_new':'117','state_change':'+36%','color':'dq7'},
        {'state_full':'Ohio','state_postal':'OH','row':2,'column':6,'state_total_old':'258','state_total_new':'217','state_change':'-18%','color':'dq4'},
        {'state_full':'Oklahoma','state_postal':'OK','row':5,'column':3,'state_total_old':'46','state_total_new':'53','state_change':'-30%','color':'dq3'},
        {'state_full':'Oregon','state_postal':'OR','row':2,'column':0,'state_total_old':'40','state_total_new':'61','state_change':'+20%','color':'dq6'},
        {'state_full':'Pennsylvania','state_postal':'PA','row':2,'column':7,'state_total_old':'276','state_total_new':'182','state_change':'-34%','color':'dq3'},
        {'state_full':'Rhode Island','state_postal':'RI','row':2,'column':10,'state_total_old':'0','state_total_new':'0','state_change':'Insufficient data','color':'none'},
        {'state_full':'South Carolina','state_postal':'SC','row':4,'column':7,'state_total_old':'16','state_total_new':'30','state_change':'+38%','color':'dq7'},
        {'state_full':'South Dakota','state_postal':'SD','row':2,'column':3,'state_total_old':'88','state_total_new':'108','state_change':'+17%','color':'dq6'},
        {'state_full':'Tennessee','state_postal':'TN','row':4,'column':5,'state_total_old':'244','state_total_new':'147','state_change':'-42%','color':'dq2'},
        {'state_full':'Texas','state_postal':'TX','row':6,'column':3,'state_total_old':'223','state_total_new':'159','state_change':'+29%','color':'dq3'},
        {'state_full':'Utah','state_postal':'UT','row':3,'column':1,'state_total_old':'24','state_total_new':'24','state_change':'-67%','color':'dq1'},
        {'state_full':'Vermont','state_postal':'VT','row':0,'column':9,'state_total_old':'7','state_total_new':'15','state_change':'-57%','color':'dq1'},
        {'state_full':'Virginia','state_postal':'VA','row':3,'column':7,'state_total_old':'130','state_total_new':'123','state_change':'-10%','color':'dq4'},
        {'state_full':'Washington','state_postal':'WA','row':1,'column':0,'state_total_old':'88','state_total_new':'63','state_change':'-39%','color':'dq3'},
        {'state_full':'West Virginia','state_postal':'WV','row':3,'column':6,'state_total_old':'9','state_total_new':'22','state_change':'0%','color':'mid'},
        {'state_full':'Wisconsin','state_postal':'WI','row':1,'column':5,'state_total_old':'279','state_total_new':'242','state_change':'-15%','color':'dq4'},
        {'state_full':'Wyoming','state_postal':'WY','row':2,'column':2,'state_total_old':'33','state_total_new':'37','state_change':'-21%','color':'dq3'}]

};
</script>

</html>