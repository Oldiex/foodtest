$(document).ready(function(){
	cat();
	brand();
	product();
	//cat() is a funtion fetching category record from database whenever page is load
	function cat(){
		$.ajax({
			url	:	"action.php",
			method:	"POST",
			data	:	{category:1},
			success	:	function(data){
				$("#get_category").html(data);
				
			}
		})
	}
	//brand() is a funtion fetching brand record from database whenever page is load
	function brand(){
		$.ajax({
			url	:	"action.php",
			method:	"POST",
			data	:	{brand:1},
			success	:	function(data){
				$("#get_brand").html(data);
			}
		})
	}
	//product() is a funtion fetching product record from database whenever page is load
		function product(){
		$.ajax({
			url	:	"action.php",
			method:	"POST",
			data	:	{getProduct:1},
			success	:	function(data){
				$("#get_product").html(data);
			}
		})
	}

$("body").delegate(".imgn","click",function(event){
	$("#get_product").html("<h3>Loading...</h3>");
	event.preventDefault();
	var cid = $(this).attr('cid');
	
		$.ajax({
		url		:	"action.php",
		method	:	"POST",
		data	:	{get_seleted_Category:1,id:cid},
		success	:	function(data){
			$("#get_product").html(data);
			// if($("body").width() < 480){
			// 	$("body").scrollTop(683);
			// }
		}
	})

})






})
