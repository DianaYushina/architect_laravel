$(function() {
	var fx = {
		"initModal" : function(){
		 if($(".modal-window").length == 0){
		  $("<div>").addClass("averLay").appendTo("body");
			return $('<div>').addClass("modal-window").appendTo("body"); 
		 }else{ 
		  return $(".modal-window") 
		 } 
		} 
	   }

	$("#button-form").click(function(){
		var modal = fx.initModal();
		modal.load("/aburo/media/pages/form.html");	
	});

	// $("#submit-form-basket").click(function(e){
	// 	var modal = fx.initModal();
	// 	modal.load("../html/order_complete.html");	
	// 	e.preventDefault();
	// });

	$("#button-form-1").click(function(){
		var modal = fx.initModal();
		modal.load("/aburo/media/pages/form.html");	
	});

	$("#button-form-about").click(function(){
		var modal = fx.initModal();
		modal.load("/aburo/media/pages/form.html");
		});
	// $("#button-form-about").click(function(){
	// var modal = fx.initModal();
	// modal.load("/media/pages/form_about.html");
	// });

	$("#content_1_new_p1").click(function(){
		var modal = fx.initModal();
		modal.load("/aburo/media/pages/modal_window_new.html");
	});

	$("#content_1_new_p1_2").click(function(){
		var modal = fx.initModal();
		modal.load("/aburo/media/pages/m_w_new_2.html");
	});

	$("#content_1_new_p1_3").click(function(){
		var modal = fx.initModal();
		modal.load("/aburo/media/pages/m_w_new_3.html");
	});

	$("#content_1_new_p1_4").click(function(){
		var modal = fx.initModal();
		modal.load("/aburo/media/pages/m_w_new_4.html");
	});

	// $("#img_basket_window").click(function(){
	// 	var modal = fx.initModal();
	// 	modal.load("/aburo/media/pages/");
	// });

	$("#content_1_new_p1_5").click(function(){
		var modal = fx.initModal();
		modal.load("/aburo/media/pages/m_w_new_5.html");
	});

	$("#content_1_new_p1_6").click(function(){
		var modal = fx.initModal();
		modal.load("/aburo/media/pages/m_w_new_6.html");
	});
});
