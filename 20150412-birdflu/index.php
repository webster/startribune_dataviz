<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Turkey Flu Tracker</title>
  <meta name="description" content="Turkey Flu Tracker">
  <meta name="author" content="Frey Hargarten - StarTribune">
  <link rel="stylesheet" href="../_common_resources/styles/startribune_dataviz_styles.css" />

<style>
    body{ font-family:Arial;}
  	.background { fill: none; pointer-events: all; }
  	#states { fill: #aaa; }
  	#state-borders { fill: none; stroke: #fff; stroke-width: 2px; stroke-linejoin: round; stroke-linecap: round; pointer-events: none; }
  	.tooltip{ background-color:rgba(255,255,255,1); height: auto; width: auto; padding:10px; -webkit-border-radius:10px; -moz-border-radius:10px; border-radius:0; border: 1px solid black; font-size:13px; font-family:Arial; }
  	#states .active { fill: #333 !important; fill-opacity: 1 !important; }
  	.faded { fill-opacity: 0.5 !important; }
  	#infobox h4 {  margin-top: 1.83em; margin-bottom: 1em; margin-left: 0; margin-right: 0; font-weight: 900; }
  	#infobox{ width:100%; border-style: solid; border-color: #ddd; border-width: 2px; height:250px; padding:10px; }
    #wrapper{ width:96.5%;}
    .county_name{font-size:20px; font-family: "Popular"; font-weight:900;}
    .legend label, .legend span { display:block; float:left; height:15px; width:35px; text-align:center; font-size:11px; color:#808080; }
    #quantize{ float:left; padding:5px; text-align:center; }
    .prevalence{ float:left; font-weight: bold; }
    .prevalence a{ text-decoration:none;f ont-weight:bold; color:steelblue; }
    .zoom{ text-decoration:none;font-weight:bold;color:steelblue; float:right !important;}
    .num{ float:right; font-size: 1.5em; font-weight: 900; color: #2ca25f; }
    .bigNum{ font-size: 3.5em; font-weight: 900; color: #2ca25f; }
    hr{ border:0; border-bottom:1px solid #ccc; background:#999; clear:both; margin-top:5px;}
    .turkey{width:100%; text-align:center; }
    .turkey img { width:80px; }

    /*@media only screen and (min-width:650px) {*/
    path:hover{ fill:#378f00 !important; cursor:pointer; }
    #states .active:hover { fill:#333 !important; }
    /*}*/
</style>
</head>

<body>

<div id="wrapper">

<div id="map"><svg width="320" height="350" viewBox="0 0 500 550" preserveAspectRatio="xMidYMid"></svg></div>

<div class='breaker'></div>

<a href='javascript:void(0);' class='zoom'>Reset View</a>

<div id="quantize">
<span class='legend' id="aidQ">
  <nav class='legend clearfix'>
    <span style='background:#fff;'>Less</span>
    <span style='background:#74C476;'></span>
    <span style='background:#49ab4b;'></span>
    <span style='background:#347c36;'></span>
    <span style='background:#204c21'></span>
    <span style='background:#163417'></span>
    <span style='background:#fff;'>More</span>
</span>
</div>

<div class='breaker'></div>

<div id="infobox">
<div class='turkey'><div class='bigNum'>8,871,432*</div><div>poultry birds have been affected by HPAI in Minnesota</div><p></p><div>Total number of farms affected: 108</div><p></p><div>Total number of counties: 23</div></div> 

</div>

<a href='https://www.bah.state.mn.us/avian-influenza#affected-counties' target='new_'><button class='downloadButton'>&#9660; Download Data</button></a>

</div>

</body>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://d3js.org/d3.v3.min.js" charset="utf-8"></script>
<script src="http://d3js.org/topojson.v1.min.js"></script>

<script>
//LIVE JSON MAGIC

//https://script.google.com/macros/s/AKfycbwG7mX6qPZaIhkwY2AJ2lU7kNarbm6OWIkWVfnmYZGYruIl40cu/exec?id=1JpW0sgMM4grkFjkj1UI6JF8ajmMCAwUsNzshTAp_EQk&sheet=mn_counties

<?php

$jsonData = file_get_contents("https://script.googleusercontent.com/macros/echo?user_content_key=LwkUnm2uRZIfW9-Iyk4PLhcitlA-ND-4ht-jWNE4UiCXy9i_YMscBu9y7ejS93RBbtukEuBoxew_GZMFvT8Gy8dM1-iQOVKoOJmA1Yb3SEsKFZqtv3DaNYcMrmhZHmUMWojr9NvTBuBLhyHCd5hHaxCoMjMSmZWLp6XAShvjQj50JtCfh4yP7n1RnEoDeOH7XqmOXgX8RYIyMAhIAtjnF9UDzNXGLr6TRtGdCUc6RQNYKOVtpKXgWPBRW_ejoJDPpFjsbzQjAoNJs-Yo01bT_lCV933Kef1535iDyrfKhrrDKXcJbJIfQNWQ3YoVX3Fp&lib=MVcLnEUipyThKZcpmQKyqT_CoSfd4egCX");

?>

var data = <?php echo $jsonData; ?>

var popData = data.mn_counties;
</script>

<script>
// var aspect = 525 / 600, chart = $("#map svg");
// $(window).on("resize", function() {   
//   var targetWidth = chart.parent().width();   
//   chart.attr("width", targetWidth);   
//   chart.attr("height", targetWidth / aspect);
// });
</script>

<script>
// d3.csv("flu.csv", function(error, popData) {
//     popData.forEach(function(d) {
// 	d.county = d.county;
// 	d.barns = +d.barns;
// 	d.sick_barns = +d.sick_barns;
// 	d.birds = +d.birds;
//   d.chickens = +d.chickens;
//   d.sites = +d.sites;
// 	d.depopulated = d.depopulated;
// 	d.control_quarantine = d.control_quarantine;
// 	d.affected_quarantine = d.affected_quarantine;
// 	d.url = d.url;
//     });


var width = 350,
    height = 350,
    centered;

var projection = d3.geo.albersUsa()
    .scale(5037)
    .translate([50, 970]);

var path = d3.geo.path()
    .projection(projection);

var svg = d3.select("#map svg")
    .attr("width", width)
    .attr("height", height);

svg.append("rect")
    .attr("class", "background")
    .attr("width", width)
    .attr("height", height);

var g = svg.append("g");

var districtInfo = document.getElementById('infobox');
var none = "#ddd";
var q1 = "#74C476";
var q2 = "#49ab4b";
var q3 = "#347c36";
var q4 = "#204c21";
var q5 = "#163417";

d3.json("shapefiles/counties.json", function(error, us) {

  g.append("g")
      .attr("id", "states")
    .selectAll("path")
      .data(us.features)
    .enter().append("path")
      .attr("d", path)
      .on("click", clicked)
      .style("fill", function(d){
      	 for (var i = 0; i < 87; i++){
            if (d.properties.COUNTYNAME == popData[i].county) { 
              if ((popData[i].birds + popData[i].chickens) > 500000) { return q5; }
              if ((popData[i].birds + popData[i].chickens) > 300000) { return q4; }
              if ((popData[i].birds + popData[i].chickens) > 100000) { return q3; }
              if ((popData[i].birds + popData[i].chickens) > 50000) { return q2; }
              if ((popData[i].birds + popData[i].chickens) > 0) { return q1; }
              else { return none; }
            }
   		  }
        })
       .on("mousedown", function(d, i){
       for (var i = 0; i < 87; i++){
        if (d.properties.COUNTYNAME == popData[i].county) {
          if ((popData[i].birds +  popData[i].chickens) > 0) {
       		districtInfo.innerHTML = "<div class='county_name'>" + d.properties.COUNTYNAME + " County</div><hr><div class='prevalence'>Total affected turkeys</div><div class='num'>" + d3.format(",")(popData[i].birds) + " </div>" + "</div><hr><div class='prevalence'>Total affected chickens</div><div class='num'>" + d3.format(",")(popData[i].chickens) + " </div>" + "</div><hr><div class='prevalence'>Affected sites</div><div class='num'>" + d3.format(",")(popData[i].sites) + " </div>" + "</div>";
         }
         else { districtInfo.innerHTML = "<div class='county_name'>" + d.properties.COUNTYNAME + " County</div><hr><div class='prevalence'>No reported infections</div>" }
       	}
      }
})
      .style("stroke-width", "1.5px")
      .style("stroke", "#fff")
      .call(d3.helper.tooltip(function(d, i){return "<b>" + d.properties.COUNTYNAME + " County</b>";}));

  g.append("path")
      //.datum(topojson.mesh(us, us.features, function(a, b) { return a !== b; }))
      .attr("id", "state-borders")
      .attr("d", path);
});

var zoom = d3.behavior.zoom()
    .on("zoom",function() {
        g.attr("transform","translate("+ 
            d3.event.translate.join(",")+")scale("+d3.event.scale+")");
        g.selectAll("circle")
            .attr("d", path.projection(projection));
        g.selectAll("path")  
            .attr("d", path.projection(projection)); 

  });


$(".zoom").click(function() {
  clicked2();
  var districtInfo = document.getElementById('infobox');
  districtInfo.innerHTML = "<div class='turkey'><div class='bigNum'>8,871,432*</div><div>poultry birds have been affected by HPAI in Minnesota</div><p></p><div>Total number of farms affected: 108</div><p></p><div>Total number of counties: 23</div></div> "
});


function clicked(d) {
  var x, y, k;

  if (d && centered !== d) {
    var centroid = path.centroid(d);
    x = centroid[0];
    y = centroid[1];
    k = 4;
    centered = d;
  } else {
    x = width / 2;
    y = height / 2;
    k = 1;
    centered = null;
  }

  g.selectAll("path")
      .classed("faded", true)
      .classed("active", centered && function(d) { return d === centered; });

  // g.transition()
  //     .duration(750)
  //     .attr("transform", "translate(" + width / 2 + "," + height / 2 + ")scale(" + k + ")translate(" + -x + "," + -y + ")")
  //     .style("stroke-width", 1.5 / k + "px");
}

function clicked2(d) {
  var x, y, k;



  if (d && centered !== d) {
    var centroid = path.centroid(d);
    x = centroid[0];
    y = centroid[1];
    k = 1;
    centered = d;
  } else {
    x = width / 2;
    y = height / 2;
    k = 1;
    centered = null;
  }

  g.selectAll("path")
      .classed("faded", false)
      .classed("active", centered && function(d) { return d === centered; });

//   g.transition()
//       .duration(750)
// .attr("transform", "translate(" + width / 2 + "," + height / 2 + ")scale(" + k + ")translate(" + -x + "," + -y + ")")
//       .style("stroke-width", 1.5 / k + "px");
}

// });

</script>
<script>
d3.helper = {};

d3.helper.tooltip = function(accessor){
    return function(selection){
        var tooltipDiv;
        var bodyNode = d3.select('body').node();
        selection.on("mouseover", function(d, i){
            // Clean up lost tooltips
            d3.select('body').selectAll('div.tooltip').remove();
            // Append tooltip
            tooltipDiv = d3.select('body').append('div').attr('class', 'tooltip');
            var absoluteMousePos = d3.mouse(bodyNode);
            tooltipDiv.style('left', (absoluteMousePos[0] + 10)+'px')
                .style('top', (absoluteMousePos[1] - 15)+'px')
                .style('position', 'absolute') 
                .style('z-index', 1001);
            // Add text using the accessor function
            var tooltipText = accessor(d, i) || '';
            // Crop text arbitrarily
            //tooltipDiv.style('width', function(d, i){return (tooltipText.length > 80) ? '300px' : null;})
            //    .html(tooltipText);
        })
        .on('mousemove', function(d, i) {
            // Move tooltip
            var absoluteMousePos = d3.mouse(bodyNode);
            tooltipDiv.style('left', (absoluteMousePos[0] + 10)+'px')
                .style('top', (absoluteMousePos[1] - 15)+'px');
            var tooltipText = accessor(d, i) || '';
            tooltipDiv.html(tooltipText);
        })
        .on("mouseout", function(d, i){
            // Remove tooltip
            tooltipDiv.remove();
        });

    };
};
</script>

</html>