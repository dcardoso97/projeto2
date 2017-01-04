$(document).ready(function() {
	"use strict";
	var clicked=false;
		$("#modal").mouseleave(function(){
		if (!clicked){
				$("#modal").text("sobre");
				$("#modal").css("color","blue");
			}else{
				$("#modal").text("voltar");
				$("#modal").css("color","red");
			}
		});

	$("#modal").mouseover(function(){
		if (!clicked){
				$("#modal").text("voltar");
				$("#modal").css("color","red");
			}else{
				$("#modal").text("sobre");
				$("#modal").css("color","blue");
			}
		});

	$("#modal").click(function(){	
				if (!clicked){
					$("#info").fadeIn("fast",function(){});
					$("#container").fadeOut("slow",function(){
					$("#modal").text("voltar");
					$("#modal").css("color","red");
					$("#info").css("visibility","visible");
					clicked=true;
					});
				}
				if (clicked){
					$("#info").fadeOut("fast",function(){});
					$("#container").fadeIn("slow",function(){
					$("#modal").text("sobre");
					$("#modal").css("color","blue");
					$("#info").css("visibility","hidden");
					clicked=false;
					});
				}
	});
	$("input").focusin(function(){
			$(this).css("background-color","#EDEDED");
	});
	$("input").focusout(function(){
			$(this).css("background-color","#ffffff");
	});
	

	
});