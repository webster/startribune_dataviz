<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Payday Lending in Minnesota</title>
  	<meta name="description" content="Payday Lending in Minnesota">
 	<meta name="author" content="Jeff Hargarten - StarTribune">
	<meta name="generator" content="BBEdit 10.5" />

	<link rel="stylesheet" href="js/d3.slider-master/d3.slider.css" />
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css" /> 
  <link rel="stylesheet" href="//cdn.datatables.net/responsive/1.0.6/css/dataTables.responsive.css" />
  <link href="js/nvd3-master/build/nv.d3.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="../_common_resources/styles/startribune_dataviz_styles.css" />
  
<style type="text/css">

	body { overflow-x:hidden; font-family:"Arial"; }
  a, a:hover, a:active, a:visited { color:#000; }
	.breaker { clear:both; margin:30px; }
	#wrapper { width:90%; margin-left:auto; margin-right:auto; }

	#chart svg { height:150px; }
	#chart2 svg { height:150px; }
	#chart3 svg { height:150px; }

  #yearChatter { height:90px; margin-bottom:8px; }

  #barChart { width:100%; text-align:center; }

  .header { display:inline-block; width:30%; text-align:center; }
  .column { display:inline-block; width:30%; text-align:center; height:350px; }
  .footer { display:inline-block; width:30%; text-align:center; }
  #gopBar { background-color:#7F1313; height:350px; }
  #dflBar { background-color:#3A7D7D; height:350px; }
  .bigNum { font-size:1.8em; font-family: "Popular"; font-weight:900; }

  .sliderDiv { height:20px; padding:15px; margin-top:15px; }

  .title { font-weight:bold; margin-top:15px; margin-bottom:5px; font-family: "Popular"; font-size:1.2em; }

  td{ padding: 8.88px !important; font-family:Arial; }
  tr.odd td.sorting_1 { background-color: #efefef; }
  tr.even td.sorting_1 { background-color: #efefef; }
  tr.even { background-color: #fff !important; }
  tr.odd { background-color: #fff !important; }
  .dataTables_length{ display:none; }
  .dataTable{ margin-bottom:18px; }
  .dataTables_filter{ margin:10px; visibility:hidden;}
  .dataTables_length, .dataTables_info { display:none; }
  .dataTables_info { display:none;}
  th { background: #ccc !important; }
  table.dataTable.no-footer{ margin-bottom:0 !important; }
  table { font-size:12px; }
  .dataTables_scrollBody thead{ visibility:hidden;height:0 !important; }
  th.sorting_asc, th.sorting_desc { background:#333 !important; font-weight:bold; color:#fff;}
  th { display: table-cell;vertical-align: initial; }
  th { padding:5px !important; }

  tr.odd td.sorting_1 { background-color: #efefef; }
  tr.even td.sorting_1 { background-color: #efefef; }
  tr.even { background-color: #fff !important; }
  tr.odd { background-color: #fff !important; }
  .dataTables_length{ display:none; }
  .dataTable{ margin-bottom:18px; }
  .dataTables_wrapper .dataTables_paginate { text-align:center; }
  .dataTables_length, .dataTables_info { display:none; }
  .dataTables_info { display:none; }
  .dataTables_wrapper .dataTables_filter { float: left; }
  #events_filter input { margin:0; width:100%; height:30px; line-height:120%; font-size: 1em; -webkit-appearance: none;
    -webkit-border-radius:0; border-radius:0; box-shadow: inset 0 1px 2px rgba(0,0,0,0.1); color: rgba(0,0,0,0.75);   -webkit-transition: all 0.30s ease-in-out; -moz-transition: all 0.30s ease-in-out; -ms-transition: all 0.30s ease-in-out; -o-transition: all 0.30s ease-in-out; background-color: #fff !important; font-family: inherit; border: 1px solid #ddd !important; }
  #events_filter { width:100%; height:50px; }
  input:focus {outline:0 !important;}
  #events_filter input:focus { box-shadow: 0 0 5px #61bd1a; padding: 3px 0px 3px 3px; border: 1px solid #61bd1a; }
    td { padding: 8.88px !important; font-family:Arial; font-size:14px !important; }
  th { background: #ccc !important; font-size:1em; font-family:Popular; }
  table.dataTable.no-footer{ margin-bottom:0 !important; }
  table { font-size:14px; }
  .dataTables_scrollBody thead{ visibility:hidden;height:0 !important; }
  th.sorting_asc, th.sorting_desc { background:#333 !important; font-weight:bold; color:#fff;}
  th { display: table-cell;vertical-align: initial; }
  th { padding:5px !important; }
  table.dataTable.dtr-inline.collapsed > tbody > tr > td:first-child:before, table.dataTable.dtr-inline.collapsed > tbody > tr > th:first-child:before { height: 20px; width: 20px; display: block; color: white; border: 2px solid white; position:static !important; border-radius: 16px; text-align: center; line-height: 20px; box-shadow: 0 0 0 #444; box-sizing: content-box; content: ''; float: left; font-weight: bold; margin-right: 6px; background-color: #61bd1a; font-size: 16px; }    div.container { max-width: 1200px }
  .sorting_1:hover { cursor:pointer; }
  th { font-family:"Popular";}

  .gopSwatch { color:#7F1313; font-weight:600; }
  .dflSwatch { color:#0B4C4C; font-weight:600; }
  .pdaSwatch { color:#4DA64D; font-weight:600; }
  .paydaySwatch { color:#D09361; font-weight:600; }

   @media only screen and (max-width:370px) {
   #yearChatter { height:200px !important; }
   }
   
   @media only screen and (max-width:650px) {
   #wrapper { width:98%; }
   #yearChatter { height:200px; }
   }
</style>
</head>

<body> 

<div id="wrapper">

<div class="sliderDiv"><div id="slider"></div></div>

<div class="breaker"></div>

<div class="title">This year in payday lending regulation</div>
<div id="yearChatter">In 2014, <span class="dflSwatch">Rep. Joe Atkins, DFL-South St. Paul</span>, and <span class="dflSwatch">Sen. Jeff Hayden, DFL-Minneapolis</span>, <a href="https://www.revisor.mn.gov/bills/bill.php?b=House&f=HF2293&ssn=0&y=2014" target="new_">sponsored a payday lending reform bill</a>, which was defeated. That year, <span class="pdaSwatch">Brad and Melanie Rixmann</span> were the third largest non-lobbyist contributors to the <span class="dflSwatch">DFL Senate Caucus</span>. <span class="pdaSwatch">Brad Rixmann</span> also contributed to the <span class="gopSwatch">Minnesota House Republican Campaign Committee</span> and the <span class="gopSwatch">Senate Victory Fund</span>.</div>

<div class="title">Evolving political contributions</div>
<div class="description">While the <span class="pdaSwatch">Rixmann family</span> has given <span class="gopSwatch"><span id="gopTotalPct">88</span> percent</span> of its <span class="pdaSwatch">$541,471</span> in Minnesota political contributions to <span class="gopSwatch">Republican politicians and causes</span> since 2002, in recent years their total donations to <span class="dflSwatch">Democrats</span> have risen to <span class="dflSwatch"><span id="dflTotalPct">12</span> percent</span> overall.</div>

<div class="breaker"></div>

<div id="barChart">
<div id="gopHead" class="header gopSwatch">GOP - <span id="gopPct">0</span></div>
<div id="totalHead" class="header"><div id="total" class="pdaSwatch bigNum">$0</div>total party contributions in <span class="thisYear">2014</span></div>
<div id="dflHead" class="header dflSwatch">DFL - <span id="dflPct">0</span></div>

<div id="gopColumn" class="column"><div id="gopBar"></div></div>
<div id="totalColumn" class="column">

</div>
<div id="dflColumn" class="column"><div id="dflBar"></div></div>

<div id="gopFooter" class="footer">
	<div id="gopTotal" class="bigNum gopSwatch">$0</div>
	<div id="gopLeg">to <span class="gopSwatch">Republicans</span> <div id="gopContributions" class="gopSwatch">0</div> contributions</div>
</div>
<div id="totalFooter" class="footer">
</div>
<div id="dflFooter" class="footer">
	<div id="dflTotal" class="bigNum dflSwatch">$0</div>
	<div id="dflLeg">to <span class="dflSwatch">Democrats</span> <div id="dflContributions" class="dflSwatch">0</div> contributions</div>
</div>
</div>

<div class="breaker"></div>

<div class="title">Increasing payday loan volume</div>
<div class="description">In <span class="thisYear">2014</span>, <span id="loanTotal" class="paydaySwatch">385,681</span> payday loans were distributed in Minnesota, <span class="pdaSwatch"><span id="pdaPct">50</span> percent</span> of which were from <span class="pdaSwatch">Payday America</span>. Since 1999, a cumulative total of <span class="paydaySwatch">3,515,786</span> payday loans have been reported throughout the state, with <span class="pdaSwatch">54 percent</span> coming from <span class="pdaSwatch">Payday America</span>.</div>
<div class="breaker"></div>
<div id="chart"><svg></svg></div>

<div class="title">Increasing average payday loan amounts</div>
<div class="description">In <span class="thisYear">2014</span>, the average payday loan in Minnesota was <span id="loanAvg" class="paydaySwatch">$389</span> and the average <span  class="pdaSwatch">Payday America</span> loan was <span id="pdaAvg" class="pdaSwatch">$433</span>. Cumulatively, the average payday loan amount since 1999 in Minnesota is <span class="paydaySwatch">$341</span>.</div>
<div class="breaker"></div>
<div id="chart2"><svg></svg></div>

<div class="title">Payday loans to Minnesotans by location</div>
<div class="description">Since 1999, <span class="paydaySwatch">nearly half</span> of all payday loans distributed in Minnesota were in the suburbs.</div>
<div class="breaker"></div>
<div id="chart3"><svg></svg></div>

<div class="title">Contribution recipients</div>
<table width="95%" id="donations"><thead><tr><th>Date</th><th>Recipient</th><th>Party</th><th>Amount</th></thead></table>

<div class="breaker"></div>

<div class="sliderDiv"><div id="slider2"></div></div>

<a href='https://github.com/jhargarten/dataviz-projects/blob/master/strib/20150809-payday/data/payday_data.zip?raw=true' target='new_'><button class='downloadButton'>&#9660; Download Data</button></a>

</div>

</body>

<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="http://d3js.org/d3.v3.min.js" charset="utf-8"></script>
<script src="js/d3.slider-master/d3.slider.js"></script>
<script src="js/nvd3-master/build/nv.d3.js"></script>
<script src="js/nvd3-master/src/utils.js"></script>
<script src="js/nvd3-master/src/tooltip.js"></script>
<script src="js/nvd3-master/src/models/legend.js"></script>
<script src="js/nvd3-master/src/models/axis.js"></script>
<script src="js/nvd3-master/test/stream_layers.js"></script>
<script src='//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js'></script>
<script src="//cdn.datatables.net/responsive/1.0.6/js/dataTables.responsive.js"></script>

<script type="text/javascript" charset="utf-8">
        $(document).ready(function() {
            donationTable = $('#donations').DataTable( {
              responsive: {
        details: {
            type: 'row'
        }
    },
                "bServerSide":false,
                "bProcessing":true,
                "scrollY":        "300px",
                "scrollCollapse": false,
                "paging":         false,
                "sAjaxDataProp": "feed.entry",
                "oLanguage": {"sSearch": ""},
                "sAjaxSource": "https://spreadsheets.google.com/feeds/list/18hUwmsYrcVGJkFM7dGYNyfUzvCX6QBk0HkWIZnLF_d4/od6/public/values?&alt=json",
                "aoColumns": [
            null,
            { "fnRender": function ( oObj ) {
                return oObj.aData[0] +' '+ "hPa";
            } }
        ],
                "aoColumns": [                 
                    { "mDataProp": "gsx$date.$t" },
                    { "mDataProp": "gsx$recipientcommittee.$t" },
                    { "mDataProp": "gsx$party.$t" },
                    { "mDataProp": "gsx$amount.$t" },
                            ],
               "fnDrawCallback": function( oSettings ) {
        $( "td" ).each(function( ) {
  if ($( this ).text() == 'R'){ $( this ).addClass('gopSwatch'); }
  if ($( this ).text() == 'DFL'){ $( this ).addClass('dflSwatch'); }
});
  $( "span" ).each(function( ) {
  if ($( this ).text() == 'R'){ $( this ).addClass('gopSwatch'); }
  if ($( this ).text() == 'DFL'){ $( this ).addClass('dflSwatch'); }
});
    }

            } );

  //INITIALIZE TO 2014

slider.value(2014);
dataCrunch("2014");
$("#yearChatter").html(yearChatter[2014]);
        } );
</script>

<script>
//TIMELINE SLIDERS
var slider = d3.slider().axis(true);

if ($(window).width() < 450){
var tickLength = 7;
}
else { 
var tickLength = 13; 
}

d3.select('#slider').call(slider.min(2002).max(2014).value(2014).axis(d3.svg.axis().tickFormat(d3.format("")).orient("top").ticks(tickLength)).step(1).on("slide", function(evt, value) {
  $("#yearChatter").html(yearChatter[value]);
  dataCrunch(value);
  slider2.value(value);
  donationTable.search(value).draw();
  $( "td" ).each(function( ) {
  if ($( this ).text() == 'R'){ $( this ).addClass('gopSwatch'); }
  if ($( this ).text() == 'DFL'){ $( this ).addClass('dflSwatch'); }
});
  $( "span" ).each(function( ) {
  if ($( this ).text() == 'R'){ $( this ).addClass('gopSwatch'); }
  if ($( this ).text() == 'DFL'){ $( this ).addClass('dflSwatch'); }
});
  }));


var slider2 = d3.slider().axis(true);

  d3.select('#slider2').call(slider2.min(2002).max(2014).value(2014).axis(d3.svg.axis().tickFormat(d3.format("")).orient("top").ticks(tickLength)).step(1).on("slide", function(evt, value) {
    dataCrunch(value);
    slider.value(value);
    donationTable.search(value).draw();
      $( "td" ).each(function( ) {
   if ($( this ).text() == 'R'){ $( this ).addClass('gopSwatch'); }
   if ($( this ).text() == 'DFL'){ $( this ).addClass('dflSwatch'); }
 });
   $( "span" ).each(function( ) {
   if ($( this ).text() == 'R'){ $( this ).addClass('gopSwatch'); }
   if ($( this ).text() == 'DFL'){ $( this ).addClass('dflSwatch'); }
 });
    }));

</script>

<script>
//LIVE JSON MAGIC

//https://script.google.com/macros/s/AKfycbwG7mX6qPZaIhkwY2AJ2lU7kNarbm6OWIkWVfnmYZGYruIl40cu/exec?id=18hUwmsYrcVGJkFM7dGYNyfUzvCX6QBk0HkWIZnLF_d4&sheet=rixmannLobby
//https://script.google.com/macros/s/AKfycbwG7mX6qPZaIhkwY2AJ2lU7kNarbm6OWIkWVfnmYZGYruIl40cu/exec?id=18hUwmsYrcVGJkFM7dGYNyfUzvCX6QBk0HkWIZnLF_d4&sheet=paydayLoans
//https://script.google.com/macros/s/AKfycbwG7mX6qPZaIhkwY2AJ2lU7kNarbm6OWIkWVfnmYZGYruIl40cu/exec?id=18hUwmsYrcVGJkFM7dGYNyfUzvCX6QBk0HkWIZnLF_d4&sheet=paydayAvg
//https://script.google.com/macros/s/AKfycbwG7mX6qPZaIhkwY2AJ2lU7kNarbm6OWIkWVfnmYZGYruIl40cu/exec?id=18hUwmsYrcVGJkFM7dGYNyfUzvCX6QBk0HkWIZnLF_d4&sheet=paydayRegion

<?php

$jsonData = file_get_contents("https://script.googleusercontent.com/macros/echo?user_content_key=wjJENlbMu9FoKhNWwjMxSJsPr9Sb4Q8P051KRgyOujvwQzbWTp580dX3-rMBDYPZGU7dXetAt1Y1UNreOMpEIGCODbsW-eXwOJmA1Yb3SEsKFZqtv3DaNYcMrmhZHmUMWojr9NvTBuBLhyHCd5hHaxCoMjMSmZWLp6XAShvjQj50JtCfh4yP7n1RnEoDeOH7XqmOXgX8RYIyMAhIAtjnF9UDzNXGLr6Tnn87HQrfADBbhUq8CSx6Q4Y-drJvUreg9bCE7x4xP_CRgbcJqOwcXV6H-3QHYFWuxcG-w52aeuRwE8JqBw131QbEaztF8hJx&lib=MVcLnEUipyThKZcpmQKyqT_CoSfd4egCX");
$jsonData2 = file_get_contents("https://script.googleusercontent.com/macros/echo?user_content_key=TRZGI7Hy5roNaTVihJFAQiFRxlakl3T8NIyuYkeXnXX7c0i76zEhZeGNaDv5OKa-0XSpCUz9KdJ0BG7HPOKRlUG8MXWXdleqOJmA1Yb3SEsKFZqtv3DaNYcMrmhZHmUMWojr9NvTBuBLhyHCd5hHaxCoMjMSmZWLp6XAShvjQj50JtCfh4yP7n1RnEoDeOH7XqmOXgX8RYIyMAhIAtjnF9UDzNXGLr6Tnn87HQrfADBbhUq8CSx6Q4Y-drJvUreg9bCE7x4xP_CRgbcJqOwcXV6H-3QHYFWuvl7IGsXAM8k-ioDTrUGqnIdHSGJJvqmb&lib=MVcLnEUipyThKZcpmQKyqT_CoSfd4egCX");
$jsonData3 = file_get_contents("https://script.googleusercontent.com/macros/echo?user_content_key=8JLyE0ZalPuzKmaTpyTrjPLNaIAPBc1LAzfhq1ETtwaC0L1Ko7wBmfBYl5nasUSZpp5ioEPdvD10BG7HPOKRlWKjsuWkWOJBOJmA1Yb3SEsKFZqtv3DaNYcMrmhZHmUMWojr9NvTBuBLhyHCd5hHaxCoMjMSmZWLp6XAShvjQj50JtCfh4yP7n1RnEoDeOH7XqmOXgX8RYIyMAhIAtjnF9UDzNXGLr6Tnn87HQrfADBbhUq8CSx6Q4Y-drJvUreg9bCE7x4xP_CRgbcJqOwcXV6H-3QHYFWuvl7IGsXAM8mofs_zjXHYDQ&lib=MVcLnEUipyThKZcpmQKyqT_CoSfd4egCX");
$jsonData4 = file_get_contents("https://script.googleusercontent.com/macros/echo?user_content_key=cUFarJYg4_zdbsW7kB_-cfCBZjE3bI4vrH0KjYZ0o62TzT84-QhcUU8uUkgTlwggRe2AMx4HeYDSBMt56pzhd3k4CE8lvNClOJmA1Yb3SEsKFZqtv3DaNYcMrmhZHmUMWojr9NvTBuBLhyHCd5hHaxCoMjMSmZWLp6XAShvjQj50JtCfh4yP7n1RnEoDeOH7XqmOXgX8RYIyMAhIAtjnF9UDzNXGLr6Tnn87HQrfADBbhUq8CSx6Q4Y-drJvUreg9bCE7x4xP_CRgbcJqOwcXV6H-3QHYFWuvl7IGsXAM8kpDO0OyrPPWa3pD3igMEfz&lib=MVcLnEUipyThKZcpmQKyqT_CoSfd4egCX");

?>

var dataLobby = <?php echo $jsonData; ?>;
var dataLoans = <?php echo $jsonData2; ?>;
var dataAvg = <?php echo $jsonData3; ?>;
var dataRegion = <?php echo $jsonData4; ?>;

// var dataLoanChart = dataLoans.paydayLoans;
// var dataAvgChart = dataAvg.paydayAvg;

//YEARLY CHATTER
yearChatter = [];
yearChatter[2002] = 'No data';
yearChatter[2003] = 'No data';
yearChatter[2004] = 'No data';
yearChatter[2005] = 'No data';
yearChatter[2006] = '<span class="pdaSwatch">Brad Rixmann</span> was a registered lobbyist for the Minnesota Pawnbrokers Association from Dec. 2005 to Sept. 2008.';
yearChatter[2007] = '<span class="pdaSwatch">Brad Rixmann</span> was a registered lobbyist for the Minnesota Pawnbrokers Association from Dec. 2005 to Sept. 2008.';
yearChatter[2008] = '<span class="pdaSwatch">Brad Rixmann</span> was a registered lobbyist for the Minnesota Pawnbrokers Association from Dec. 2005 to Sept. 2008.';
yearChatter[2009] = 'In 2009, <span class="dflSwatch">Sen. Chuck Wiger, DFL-Maplewood</span>, <a href="https://www.revisor.mn.gov/bills/bill.php?b=Senate&f=SF0628&ssn=0&y=2009" target="new_">sponsored a payday lending reform bill</a>. There was no House companion to this bill.';
yearChatter[2010] = 'In 2010, <span class="dflSwatch">Rep. Jim Davnie, DFL-Minneapolis</span>, <a href="https://www.revisor.mn.gov/bills/bill.php?b=House&f=HF3170&ssn=0&y=2010" target="new_">sponsored a payday lending reform bill</a>. There was no Senate companion to this bill.';
yearChatter[2011] = 'In 2011, the Minnesota attorney general <a href="http://www.startribune.com/minnesota-sues-payday-lenders/129304698/" target="_new">sued <span class="paydaySwatch">five online payday lenders</span></a>.';
yearChatter[2012] = 'In 2012, an online payday lender agreed to stop lending in Minnesota and <a href="http://www.startribune.com/payday-lender-settles-with-state/184141051/" target="new_">pay about <span class="paydaySwatch">$760,000</span> in damages to more than 900 Minnesotans who were charged interest rates as high as <span class="paydaySwatch">1,564 percent</span></a>.';
yearChatter[2013] = 'In 2013, <a href="http://www.startribune.com/minnesota-judge-orders-online-payday-lender-to-pay-nearly-8-million/209750911/" target="new_">a Minnesota judge ordered an online payday lender to pay nearly <span class="paydaySwatch">$8 million</span></a> for operating without a license.';
yearChatter[2014] = 'In 2014, <span class="dflSwatch">Rep. Joe Atkins, DFL-South St. Paul</span>, and <span class="dflSwatch">Sen. Jeff Hayden, DFL-Minneapolis</span>, <a href="https://www.revisor.mn.gov/bills/bill.php?b=House&f=HF2293&ssn=0&y=2014" target="new_">sponsored a payday lending reform bill</a>, which was defeated. That year, <span class="pdaSwatch">Brad and Melanie Rixmann</span> were the third largest non-lobbyist contributors to the <span class="dflSwatch">DFL Senate Caucus</span>. <span class="pdaSwatch">Brad Rixmann</span> also contributed to the <span class="gopSwatch">Minnesota House Republican Campaign Committee</span> and the <span class="gopSwatch">Senate Victory Fund</span>.';


//CRUNCH NUMBERS
function dataCrunch(year) {

  $("#gopBar").height("0");
  $("#dflBar").height("0");

  $(".thisYear").html(year);
  d3.selectAll("text").style("font-weight","normal");
  var selectionYear = d3.selectAll("text").each(function(d) { 
    if (d3.select(this).html() == year) { 
    d3.select(this).style("font-weight","900");
  } 
  });

//POLITICAL CONTRIBUTIONS
	var gopTotal = 0;
	var dflTotal = 0;
  var gopDonations = 0;
  var dflDonations = 0;
  var gopPct = 0;
  var dflPct = 0;
  var gopListing = [];
  var dflListing = [];
  var gopTotalPct = 0;
  var dflTotalPct = 0;

	for (var i=0; i < dataLobby.rixmannLobby.length; i++){
		if (dataLobby.rixmannLobby[i].year == year && dataLobby.rixmannLobby[i].party == "R") { gopDonations++; gopTotal = gopTotal + dataLobby.rixmannLobby[i].amount; }
		else if (dataLobby.rixmannLobby[i].year == year && dataLobby.rixmannLobby[i].party == "DFL") { dflDonations++; dflTotal = dflTotal + dataLobby.rixmannLobby[i].amount; }
	}

  var gopLoad = document.getElementById('gopTotal');
  var dflLoad = document.getElementById('dflTotal');
  var totalLoad = document.getElementById('total');
  gopLoad.innerHTML = d3.format('$,')(d3.round(gopTotal));
  dflLoad.innerHTML = d3.format('$,')(d3.round(dflTotal));
  totalLoad.innerHTML = d3.format('$,')(d3.round(dflTotal) + d3.round(gopTotal));
  gopPct = (gopTotal / (dflTotal + gopTotal));
  dflPct = (dflTotal / (dflTotal + gopTotal));
  if (!isNaN(gopPct) || !isNaN(dflPct)){
  $("#gopPct").html(d3.format('%')(gopPct));
  $("#dflPct").html(d3.format('%')(dflPct));
  }
  else {
  $("#gopPct").html("0%");
  $("#dflPct").html("0%");
  }
  $("#gopContributions").html(gopDonations);
  $("#dflContributions").html(dflDonations);
  // $("#gopTotalPct").html(d3.round((100 * gopDonations / (gopDonations + dflDonations)),1));
  // $("#dflTotalPct").html(d3.round((100 * dflDonations / (gopDonations + dflDonations)),1));
  $("#gopBar").height((350 * gopPct) + "px");
  $("#dflBar").height((350 * dflPct) + "px");

//LOAN AVERAGES
  var avg = 0;
  var pda_avg = 0;

	for (var i=0; i < dataAvg.paydayAvg.length; i++){
     if (dataAvg.paydayAvg[i].year == year) { 
      avg = dataAvg.paydayAvg[i].all_lenders_avg; 
      pda_avg = dataAvg.paydayAvg[i].payday_avg_loan; 
    }
  }

  $("#loanAvg").html("$" + avg);
  $("#pdaAvg").html("$" + pda_avg);

//LOAN TOTALS
  var loanTotal = 0;
  var pdaTotal = 0;

  for (var i=0; i < dataLoans.paydayLoans.length; i++){
    if (dataLoans.paydayLoans[i].year == year) { 
    loanTotal = dataLoans.paydayLoans[i].all_lenders_loans; 
    pdaTotal = dataLoans.paydayLoans[i].payday_loans; 
    }
  }

  $("#loanTotal").html(d3.format(',')(loanTotal));
  $("#pdaPct").html(d3.round(100 * (pdaTotal / loanTotal),0));
}
</script>

<script>
//LOAN TOTAL GRAPH
var chart;
nv.addGraph(function() {
    chart = nv.models.multiBarChart()
      .x(function(d) { return d.label })
      .y(function(d) { return d.value })
      // .transitionDuration(350)
      .reduceXTicks(false)   //If 'false', every single x-axis tick label will be rendered.
      .rotateLabels(0)      //Angle to rotate x-axis labels.
      .stacked(false)
      .color(['#D09361','#4DA64D'])
      .showControls(false)   //Allow user to switch between 'Grouped' and 'Stacked' mode.
      .groupSpacing(0.1)    //Distance between each group of bars.
    ;

    chart.xAxis
        .tickFormat(d3.format(''));

    chart.yAxis
        .tickFormat(d3.format(','));

    d3.select('#chart svg')
        .datum(paydayLoanData())
        .call(chart);

  var xTicks = d3.select('.nv-x.nv-axis > g').selectAll('g');
  xTicks
  .selectAll('text')
  .attr('transform', function(d,i,j) { return 'translate (-10, 22) rotate(-50 0,0)' }) ;

  d3.selectAll("text").each(function(d) { 
    if (d3.select(this).html() == "2014") { 
    d3.select(this).style("font-weight","900");
  } 
  });

    nv.utils.windowResize(chart.update);

    return chart;
});

//Generate some nice data.
function paydayLoanData() {
    return [
  {
    "key": "Total Payday Loans",
    "values": [
       { 
        "label" : "2000" ,
        "value" : Number(dataLoans.paydayLoans[0].all_lenders_loans)
      },
      {
        "label" : "2001" ,
        "value" : Number(dataLoans.paydayLoans[1].all_lenders_loans)
      },
      { 
        "label" : "2002" ,
        "value" : Number(dataLoans.paydayLoans[2].all_lenders_loans)
      },
      { 
        "label" : "2003" ,
        "value" : Number(dataLoans.paydayLoans[3].all_lenders_loans)
      }
      ,
      { 
        "label" : "2004" ,
        "value" : Number(dataLoans.paydayLoans[4].all_lenders_loans)
      }
      ,
      { 
        "label" : "2005" ,
        "value" : Number(dataLoans.paydayLoans[5].all_lenders_loans)
      }
      ,
      { 
        "label" : "2006" ,
        "value" : Number(dataLoans.paydayLoans[6].all_lenders_loans)
      }
      ,
      { 
        "label" : "2007" ,
        "value" : Number(dataLoans.paydayLoans[7].all_lenders_loans)
      }
      ,
      { 
        "label" : "2008" ,
        "value" : Number(dataLoans.paydayLoans[8].all_lenders_loans)
      }
      ,
      { 
        "label" : "2009" ,
        "value" : Number(dataLoans.paydayLoans[9].all_lenders_loans)
      }
      ,
      { 
        "label" : "2010" ,
        "value" : Number(dataLoans.paydayLoans[10].all_lenders_loans)
      }
      ,
      { 
        "label" : "2011" ,
        "value" : Number(dataLoans.paydayLoans[11].all_lenders_loans)
      }
      ,
      { 
        "label" : "2012" ,
        "value" : Number(dataLoans.paydayLoans[12].all_lenders_loans)
      }
      ,
      { 
        "label" : "2013" ,
        "value" : Number(dataLoans.paydayLoans[13].all_lenders_loans)
      }
      ,
      { 
        "label" : "2014" ,
        "value" : Number(dataLoans.paydayLoans[14].all_lenders_loans)
      }
    ]
  },
  {
    "key": "Payday America Loans",
    "values": [
       { 
        "label" : "2000" ,
        "value" : Number(dataLoans.paydayLoans[0].payday_loans)
      },
      {
        "label" : "2001" ,
        "value" : Number(dataLoans.paydayLoans[1].payday_loans)
      },
      { 
        "label" : "2002" ,
        "value" : Number(dataLoans.paydayLoans[2].payday_loans)
      },
      { 
        "label" : "2003" ,
        "value" : Number(dataLoans.paydayLoans[3].payday_loans)
      }
      ,
      { 
        "label" : "2004" ,
        "value" : Number(dataLoans.paydayLoans[4].payday_loans)
      }
      ,
      { 
        "label" : "2005" ,
        "value" : Number(dataLoans.paydayLoans[5].payday_loans)
      }
      ,
      { 
        "label" : "2006" ,
        "value" : Number(dataLoans.paydayLoans[6].payday_loans)
      }
      ,
      { 
        "label" : "2007" ,
        "value" : Number(dataLoans.paydayLoans[7].payday_loans)
      }
      ,
      { 
        "label" : "2008" ,
        "value" : Number(dataLoans.paydayLoans[8].payday_loans)
      }
      ,
      { 
        "label" : "2009" ,
        "value" : Number(dataLoans.paydayLoans[9].payday_loans)
      }
      ,
      { 
        "label" : "2010" ,
        "value" : Number(dataLoans.paydayLoans[10].payday_loans)
      }
      ,
      { 
        "label" : "2011" ,
        "value" : Number(dataLoans.paydayLoans[11].payday_loans)
      }
      ,
      { 
        "label" : "2012" ,
        "value" : Number(dataLoans.paydayLoans[12].payday_loans)
      }
      ,
      { 
        "label" : "2013" ,
        "value" : Number(dataLoans.paydayLoans[13].payday_loans)
      }
      ,
      { 
        "label" : "2014" ,
        "value" : Number(dataLoans.paydayLoans[14].payday_loans)
      }
    ]
  }
]
    };

//TIMELINE GRAPH
var chart2;
nv.addGraph(function() {
    chart2 = nv.models.multiBarChart()
      .x(function(d) { return d.label })
      .y(function(d) { return d.value })
      // .transitionDuration(350)
      .reduceXTicks(false)   //If 'false', every single x-axis tick label will be rendered.
      .rotateLabels(0)      //Angle to rotate x-axis labels.
      .stacked(false)
      .color(['#D09361','#4DA64D'])
      .showControls(false)   //Allow user to switch between 'Grouped' and 'Stacked' mode.
      .groupSpacing(0.1)    //Distance between each group of bars.
    ;

    chart2.xAxis
        .tickFormat(d3.format(''));

    chart2.yAxis
        .tickFormat(d3.format('$'));

    d3.select('#chart2 svg')
        .datum(paydayAvgData())
        .call(chart2);

  var xTicks = d3.selectAll('.nv-x.nv-axis > g').selectAll('g');
  xTicks
  .selectAll('text')
  .attr('transform', function(d,i,j) { return 'translate (-10, 22) rotate(-50 0,0)' }) ;

  d3.selectAll("text").each(function(d) { 
    if (d3.select(this).html() == "2014") { 
    d3.select(this).style("font-weight","900");
  } 
  });

    nv.utils.windowResize(chart2.update);

    return chart2;
});

function paydayAvgData() {
	return [
	{
    "key": "Average Payday Loan",
    "values": [
       { 
        "label" : "2000" ,
        "value" : Number(dataAvg.paydayAvg[0].all_lenders_avg)
      },
      {
        "label" : "2001" ,
        "value" : Number(dataAvg.paydayAvg[1].all_lenders_avg)
      },
      { 
        "label" : "2002" ,
        "value" : Number(dataAvg.paydayAvg[2].all_lenders_avg)
      },
      { 
        "label" : "2003" ,
        "value" : Number(dataAvg.paydayAvg[3].all_lenders_avg)
      }
      ,
      { 
        "label" : "2004" ,
        "value" : Number(dataAvg.paydayAvg[4].all_lenders_avg)
      }
      ,
      { 
        "label" : "2005" ,
        "value" : Number(dataAvg.paydayAvg[5].all_lenders_avg)
      }
      ,
      { 
        "label" : "2006" ,
        "value" : Number(dataAvg.paydayAvg[6].all_lenders_avg)
      }
      ,
      { 
        "label" : "2007" ,
        "value" : Number(dataAvg.paydayAvg[7].all_lenders_avg)
      }
      ,
      { 
        "label" : "2008" ,
        "value" : Number(dataAvg.paydayAvg[8].all_lenders_avg)
      }
      ,
      { 
        "label" : "2009" ,
        "value" : Number(dataAvg.paydayAvg[9].all_lenders_avg)
      }
      ,
      { 
        "label" : "2010" ,
        "value" : Number(dataAvg.paydayAvg[10].all_lenders_avg)
      }
      ,
      { 
        "label" : "2011" ,
        "value" : Number(dataAvg.paydayAvg[11].all_lenders_avg)
      }
      ,
      { 
        "label" : "2012" ,
        "value" : Number(dataAvg.paydayAvg[12].all_lenders_avg)
      }
      ,
      { 
        "label" : "2013" ,
        "value" : Number(dataAvg.paydayAvg[13].all_lenders_avg)
      }
      ,
      { 
        "label" : "2014" ,
        "value" : Number(dataAvg.paydayAvg[14].all_lenders_avg)
      }
    ]
  },
  {
    "key": "Payday America Average Loan",
    "values": [
       { 
        "label" : "2000" ,
        "value" : Number(dataAvg.paydayAvg[0].payday_avg_loan)
      },
      {
        "label" : "2001" ,
        "value" : Number(dataAvg.paydayAvg[1].payday_avg_loan)
      },
      { 
        "label" : "2002" ,
        "value" : Number(dataAvg.paydayAvg[2].payday_avg_loan)
      },
      { 
        "label" : "2003" ,
        "value" : Number(dataAvg.paydayAvg[3].payday_avg_loan)
      }
      ,
      { 
        "label" : "2004" ,
        "value" : Number(dataAvg.paydayAvg[4].payday_avg_loan)
      }
      ,
      { 
        "label" : "2005" ,
        "value" : Number(dataAvg.paydayAvg[5].payday_avg_loan)
      }
      ,
      { 
        "label" : "2006" ,
        "value" : Number(dataAvg.paydayAvg[6].payday_avg_loan)
      }
      ,
      { 
        "label" : "2007" ,
        "value" : Number(dataAvg.paydayAvg[7].payday_avg_loan)
      }
      ,
      { 
        "label" : "2008" ,
        "value" : Number(dataAvg.paydayAvg[8].payday_avg_loan)
      }
      ,
      { 
        "label" : "2009" ,
        "value" : Number(dataAvg.paydayAvg[9].payday_avg_loan)
      }
      ,
      { 
        "label" : "2010" ,
        "value" : Number(dataAvg.paydayAvg[10].payday_avg_loan)
      }
      ,
      { 
        "label" : "2011" ,
        "value" : Number(dataAvg.paydayAvg[11].payday_avg_loan)
      }
      ,
      { 
        "label" : "2012" ,
        "value" : Number(dataAvg.paydayAvg[12].payday_avg_loan)
      }
      ,
      { 
        "label" : "2013" ,
        "value" : Number(dataAvg.paydayAvg[13].payday_avg_loan)
      }
      ,
      { 
        "label" : "2014" ,
        "value" : Number(dataAvg.paydayAvg[14].payday_avg_loan)
      }
    ]
  }
]
}

nv.addGraph(function() {
    chart3 = nv.models.multiBarHorizontalChart()
        .x(function(d) { return d.label })
        .y(function(d) { return d.value })
        .showValues(true)           //Show bar value next to each bar.
        .stacked(true)
        .color(['#FBC9A0','#D09361','#7F4413','#A86935'])
        .showControls(false);        //Allow user to switch between "Grouped" and "Stacked" mode.

    chart3.yAxis
        .tickFormat(d3.format('%,.1f'));

    d3.select('#chart3 svg')
        .datum(paydayRegionData())
        .call(chart3);

    nv.utils.windowResize(chart3.update);

    return chart3;
  });

function paydayRegionData() {
	return [
	{
    "key": "Internet",
    "values": [
       { 
        "label" : "2014" ,
        "value" : Number(dataRegion.paydayRegion[0].pct)
      }
    ]
  },
  {
    "key": "Twin Cities",
    "values": [
       { 
        "label" : "2014" ,
        "value" : Number(dataRegion.paydayRegion[1].pct)
      }
    ]
  },
  {
    "key": "Suburbs",
    "values": [
       { 
        "label" : "2014" ,
        "value" : Number(dataRegion.paydayRegion[2].pct)
      }
    ]
  },
  {
    "key": "Rural",
    "values": [
       { 
        "label" : "2014" ,
        "value" : Number(dataRegion.paydayRegion[3].pct)
      }
    ]
  }
]
}

$(window).load(function(){
  donationTable.search("2014").draw();
});
</script>
</html>