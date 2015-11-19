var estado = 0;

$(document).ready(function(){
	TweenLite.to($("#caption"),2,{css:{top:0},delay:0.5, ease:Power2.easeOut});
	TweenLite.to($("#btn1"),2,{css:{left:0},delay:0.25, ease:Power2.easeOut});
	TweenLite.to($("#btn2"),2,{css:{left:20},delay:0.5, ease:Power2.easeOut});
	TweenLite.to($("#btn3"),2,{css:{left:40},delay:0.75, ease:Power2.easeOut});
	TweenLite.to($("#btn4"),2,{css:{left:0},delay:0.25, ease:Power2.easeOut});
	TweenLite.to($("#btn5"),2,{css:{left:20},delay:0.5, ease:Power2.easeOut});
	TweenLite.to($("#btn6"),2,{css:{left:40},delay:0.75, ease:Power2.easeOut});
	TweenLite.to($("#logout"),3,{css:{left:615}, ease:Power2.easeOut});
});


$("#btn1").click(function(){
	TweenLite.to($("#content"),0.5,{css:{top:0}, ease:Power2.easeOut});
	TweenLite.to($("#logout"),0.5,{css:{left:760, rotation:0}, ease:Power2.easeOut});
	TweenLite.to($("#backbutton"),1,{css:{left:650, rotation:-180}, ease:Power2.easeOut});
	TweenLite.to($("#pagecaption"),1,{css:{top:0}, ease:Power2.easeOut});
	TweenLite.to($("#caption"),1,{css:{top:90}, ease:Power2.easeOut});
	$("#pagecaption").text(btn1_text);
	estado = 1;
});

$("#btn2").click(function(){
	TweenLite.to($("#content"),0.5,{css:{top:0}, ease:Power2.easeOut});
	TweenLite.to($("#logout"),0.5,{css:{left:760, rotation:0}, ease:Power2.easeOut});
	TweenLite.to($("#backbutton"),1,{css:{left:650, rotation:-180}, ease:Power2.easeOut});
	TweenLite.to($("#pagecaption"),1,{css:{top:0}, ease:Power2.easeOut});
	TweenLite.to($("#caption"),1,{css:{top:90}, ease:Power2.easeOut});
	$("#pagecaption").text(btn2_text);
	estado = 1;
});

$("#btn3").click(function(){
	TweenLite.to($("#content"),0.5,{css:{top:0}, ease:Power2.easeOut});
	TweenLite.to($("#logout"),0.5,{css:{left:760, rotation:0}, ease:Power2.easeOut});
	TweenLite.to($("#backbutton"),1,{css:{left:650, rotation:-180}, ease:Power2.easeOut});
	TweenLite.to($("#pagecaption"),1,{css:{top:0}, ease:Power2.easeOut});
	TweenLite.to($("#caption"),1,{css:{top:90}, ease:Power2.easeOut});
	$("#pagecaption").text(btn3_text);
	estado = 1;
});

$("#btn4").click(function(){
	TweenLite.to($("#content"),0.5,{css:{top:0}, ease:Power2.easeOut});
	TweenLite.to($("#logout"),0.5,{css:{left:760, rotation:0}, ease:Power2.easeOut});
	TweenLite.to($("#backbutton"),1,{css:{left:650, rotation:-180}, ease:Power2.easeOut});
	TweenLite.to($("#pagecaption"),1,{css:{top:0}, ease:Power2.easeOut});
	TweenLite.to($("#caption"),1,{css:{top:90}, ease:Power2.easeOut});
	$("#pagecaption").text(btn4_text);
	estado = 1;
});

$("#btn5").click(function(){
	TweenLite.to($("#content"),0.5,{css:{top:0}, ease:Power2.easeOut});
	TweenLite.to($("#logout"),0.5,{css:{left:760, rotation:0}, ease:Power2.easeOut});
	TweenLite.to($("#backbutton"),1,{css:{left:650, rotation:-180}, ease:Power2.easeOut});
	TweenLite.to($("#pagecaption"),1,{css:{top:0}, ease:Power2.easeOut});
	TweenLite.to($("#caption"),1,{css:{top:90}, ease:Power2.easeOut});
	$("#pagecaption").text(btn5_text);
});

$("#btn6").click(function(){
	TweenLite.to($("#content"),0.5,{css:{top:0}, ease:Power2.easeOut});
	TweenLite.to($("#logout"),0.5,{css:{left:760, rotation:0}, ease:Power2.easeOut});
	TweenLite.to($("#backbutton"),1,{css:{left:650, rotation:-180}, ease:Power2.easeOut});
	TweenLite.to($("#pagecaption"),1,{css:{top:0}, ease:Power2.easeOut});
	TweenLite.to($("#caption"),1,{css:{top:90}, ease:Power2.easeOut});
	$("#pagecaption").text(btn6_text);
});

$("#backbutton").click(function(){
	TweenLite.to($("#content"),1,{css:{top:700}, ease:Power2.easeIn});
	TweenLite.to($("#backbutton"),1,{css:{left:760, rotation:0}, ease:Power2.easeIn});
	TweenLite.to($("#logout"),3,{css:{left:615}, ease:Power2.easeOut});
	TweenLite.to($("#pagecaption"),1,{css:{top:-60}, ease:Power2.easeOut});
	TweenLite.to($("#caption"),1,{css:{top:0}, ease:Power2.easeOut});
});

$("#logout").click(function(){
	window.location="../index.php";
});