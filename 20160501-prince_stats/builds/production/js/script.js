!function i(t,e,r){function s(d,n){if(!e[d]){if(!t[d]){var l="function"==typeof require&&require;if(!n&&l)return l(d,!0);if(a)return a(d,!0);throw new Error("Cannot find module '"+d+"'")}var c=e[d]={exports:{}};t[d][0].call(c.exports,function(i){var e=t[d][1][i];return s(e||i)},c,c.exports,i,t,e,r)}return e[d].exports}for(var a="function"==typeof require&&require,d=0;d<r.length;d++)s(r[d]);return s}({1:[function(i,t,e){function r(i){this.dd=i,this.placeholder=this.dd.children("span"),this.opts=this.dd.find("ul.dropdown > li"),this.val="",this.index=-1,this.initEvents()}d3.json("./data/prince.json",function(i,t){function e(i){$("#y"+i).append(function(){return"<div class='yearLabel'>"+i+"</div>"}),d3.select("#y"+i).selectAll(".item").data(r.filter(function(t){return t.year==i})).enter().append("div").attr("class",function(i){return"item "+i.type}).html(function(i){if("other"==i.type)return"<div class='yearHide'>"+i.year+"</div><div class='title'>"+i.title+"</div><div class='description'>"+i.notes+"</div>";if("album"==i.type)return"<div class='yearHide'>"+i.year+"</div><div class='art'><img src='img/"+i.art+"' /></div><div class='title'>"+i.title+"</div><div class='rank'>Certified : "+i.rank+"</div><div class='label'>Label: "+i.label+"<div class='description'>"+i.strib_copy+"</div><div class='author'> ~ "+i.author+"</div><div class='score'>Score: "+i.strib_score+"</div>";if("alt"==i.type)return"<div class='yearHide'>"+i.year+"</div><div class='art'><img src='img/"+i.art+"' /></div><div class='title'>"+i.title+"</div><div class='description'>"+i.notes+"</div>";if("billboard"==i.type)return"<div class='yearHide'>"+i.year+"</div><div class='icon'><img src='img/"+i.art+"' /></div><div class='title'>"+i.title+"</div><div class='rank'>Billboard Rank: #"+i.rank+"</div>";if("grammy"==i.type)return"<div class='yearHide'>"+i.year+"</div><div class='icon'><img src='img/"+i.art+"' /></div><div class='title'>"+i.title+"</div><div class='rank'>Grammy Award</div>";if("tour"==i.type){var t="";return"#"!=i.notes&&(t="<div class='description'>"+i.notes+"</div>"),"<div class='yearHide'>"+i.year+"</div><div class='icon'><img src='img/"+i.art+"' /></div><div class='title'>"+i.title+"</div>"+t}return"tickets"==i.type?"<div class='yearHide'>"+i.year+"</div><div class='icon'><img src='img/"+i.art+"' /></div><div class='title'>"+i.title+"</div><div class='rank'>Total Tickets Sold: "+d3.format(",")(i.TicketsSold)+"</div><div class='rank'>Average Tickets Sold: "+d3.format(",")(i.AvgTicketsSold)+"</div><div class='rank'>Gross: $"+i.gross_millions+" million</div>":void 0})}var r=t.stats;$(".scrollToTop").click(function(){return $(".rightSide").animate({scrollTop:0},800),!1}),$(".button").click(function(){$(".switch, .button").removeClass("selected"),$(this).addClass("selected"),$(".item, .year").hide(),"all"==$(this).attr("data")?$(".item, .year").show():($("."+$(this).attr("data")).parent().show(),$("."+$(this).attr("data")).show())}),$(document).ready(function(){for(var i=1978;i<=2016;i++)e(i);e(1958),e(1975),$("#filter_box").keyup(function(i){$(".year").hide(),$(".switch, .button").removeClass("selected");var t=String($("#filter_box").val());$(".tickets, .other, .album, .tour, .billboard, .grammy").each(function(){-1!=$(this).text().toUpperCase().indexOf(t.toUpperCase())&&($(this).parent().show(),$(this).show())});$(".item:visible").length})})}),r.prototype={initEvents:function(){var i=this;i.dd.on("click",function(i){return $(this).toggleClass("active"),!1}),i.opts.on("click",function(){var t=$(this);i.val=t.text(),i.index=t.index(),i.placeholder.text(i.val)})},getValue:function(){return this.val},getIndex:function(){return this.index}},$(function(){new r($("#dd")),new r($("#ddY"));$(document).click(function(){$(".wrapper-dropdown-1").removeClass("active")})})},{}]},{},[1]);