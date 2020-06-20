$(document).ready(function() {
	$(".alert").slideUp(5000);
	});
	
// caculate totalprice, totalamount
$("quantity").blur(function(){
	var quantity = parseInt($(this).val());
	var unitprice = parseInt($("#unitprice").val());
	$("totalprice").val($quantity * $unitprice);
});

	$("#discount").blur(function () {
		var discount = $(this).val();
		var totalprice = $("#totalprice").val();
		var totalamount = totalprice (totalprice * discount /100);
			$("totalamount").val(totalamount);
	});

// find unitprice of a product
$("#product_id").change(function() {
	var product_id =  $(this).val();
	if(product_id != 0){

		$.post
		("find price.php", 
			"x" + product_id,
			 function(data) {
			 	$("unitprice").val(data);});

	}
} );
	// calculating totl = un * qu
	$("#unitprice").blur(function() {
			var unitprice = parseFloat($("#unitprice").val());
			var quantity  = parseFloat($("#quantity").val());
			var totalprice = quantity * unitprice;
			$("totalprice").val(totalprice);
	});

	$("#quantity").blur(function() {
			var unitprice = parseFloat($("#unitprice").val());
			var quantity  = parseFloat($("#quantity").val());
			var totalprice = quantity * unitprice;
			$("totalprice").val(totalprice);
	});


//event handler click
		$("a.delete").click(function() {
			var sure = window.confirm("آیا نسبت به عملیه حذف اطمینان دارید!"):
			if(!sure){
				event.preventDefault();
			}

		});

		// conpare new password - confirm
		$("form#password").submit (function() {
			if($("#new").val() != $("#confirm").val()){

			}
			else{
				alert("رمز جدید و تکرار آن مشابه نمی باشد ");
				event.preventDefault();
			}
		});


