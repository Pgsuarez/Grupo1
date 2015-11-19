$(document).ready(function(){
	TweenLite.to($("#btn1"),2,{css:{left:00},delay:0.25,ease:Power2.easeOut});
	TweenLite.to($("#btn2"),2,{css:{left:20},delay:0.5,ease:Power2.easeOut});
	TweenLite.to($("#btn3"),2,{css:{left:40},delay:0.75,ease:Power2.easeOut});
	TweenLite.to($("#btn4"),2,{css:{left:00},delay:0.25,ease:Power2.easeOut});
});

$("#btn1").click(function(){
	TweenLite.to($("#content"),0.5,{css:{top:0},ease:Power2.easeOut});
});

$("#btn2").click(function(){
	TweenLite.to($("#content"),0.5,{css:{top:0},ease:Power2.easeOut});
});

$("#btn3").click(function(){
	TweenLite.to($("#content"),0.5,{css:{top:0},ease:Power2.easeOut});
});

$("#btn4").click(function(){
	TweenLite.to($("#content"),0.5,{css:{top:0},ease:Power2.easeOut});
});