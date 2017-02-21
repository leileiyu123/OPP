
$(function($) {
	$("#choose>div").on("click", function() {
		console.log($(this).index());
		$(".imgs").animate({
			//涉及运算的时候不加"",不加px
			left: -$(this).index() * $(".imgs>div").width()
		});
		//obj.siblings()，选取该节点的兄弟节点（不包括obj自己）
		$(this).siblings().removeClass("intro");
		$(this).addClass("intro");
		$("#ipt").val($(this).index());
	});
	$("#ipt").val("");
});

$(".btn").on("click",function(){
	var index = $("#ipt").val();
	index = Number(index);
//	alert(index);
	$(".showPeople").attr("src","img/people/"+(index+6)+".png");
})

