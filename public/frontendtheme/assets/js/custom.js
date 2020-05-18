M.AutoInit();
//learn-carousal Slider
// $(document).ready(function(){
// 	 //Step 1
//     $("#con-tab-one").click(function() {
//     	$(".con-btn").removeClass('active');
//       	$("#tab-one").fadeIn();
//       	$("#tab-two").hide();
//       	$("#tab-three").hide();
//       	$("#tab-four").hide();
//       	$("#tab-five").hide();
//       	$(this).addClass('active');
//     });
//     //Step 2
//     $("#con-tab-two").click(function() {
//     	$(".con-btn").removeClass('active');
//       	$("#tab-two").fadeIn();
//       	$("#tab-one").hide();
//       	$("#tab-three").hide();
//       	$("#tab-four").hide();
//       	$("#tab-five").hide();
//       	$(this).addClass('active');
//     });
//     //Step 3
//     $("#con-tab-three").click(function() {
//     	$(".con-btn").removeClass('active');
//       	$("#tab-three").fadeIn();
//       	$("#tab-one").hide();
//       	$("#tab-two").hide();
//       	$("#tab-four").hide();
//       	$("#tab-five").hide();
//       	$(this).addClass('active');
//     });
//     //Step 4
//     $("#con-tab-four").click(function() {
//     	$(".con-btn").removeClass('active');
//       	$("#tab-four").fadeIn();
//       	$("#tab-one").hide();
//       	$("#tab-two").hide();
//       	$("#tab-three").hide();
//       	$("#tab-five").hide();
//       	$(this).addClass('active');
//     });
//     //Step 5
//     $("#con-tab-five").click(function() {
//     	$(".con-btn").removeClass('active');
//       	$("#tab-five").fadeIn();
//       	$("#tab-one").hide();
//       	$("#tab-two").hide();
//       	$("#tab-three").hide();
//       	$("#tab-four").hide();
//       	$(this).addClass('active');
//     });
	
// });
$(document).ready(function(){
	$(".slick-dots a").click(function(){
		$('.slick-dots a').removeClass('active');
		$(this).fadeIn('slow').addClass('active');
		var tagid= $(this).data('tag');
		$(".item").fadeOut('fast').removeClass('active').addClass('hide');
		$("#" + tagid).fadeIn('slow').addClass('active').removeClass('hide');
	});



  


});