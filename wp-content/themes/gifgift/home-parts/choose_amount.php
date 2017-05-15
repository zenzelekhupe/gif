<div class="choose-card choose-card1">
<button type="button" class="close" data-dismiss="modal">×</button>
<h2> Choose The Amount </h2>
<form id="myForm">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript">
function sentbutton() {
  var prices = $("input[type=radio]:checked").attr('prices');
  var choose_amount = prices.split(',');
  var min_amount = $("input[type=radio]:checked").attr('min_amount');
  console.log(min_amount);
  $(".amount_text").attr("min",min_amount);
  if(!choose_amount) {
    $( "#dvFastingOptions" ).empty();
  }else{
	$( ".others" ).empty();
    $( "#dvFastingOptions" ).empty();

  $.each(choose_amount, function(i, val) {
    $("#dvFastingOptions").append(
        $('<label />', {
            'text': '$' + val
        }).addClass("radio-inline").append(
            $('<input />', { 
                type: 'radio', 
                name: 'choose_amount', 
                id: 'amount',
                class: 'amount',
                value: val
            })
        )
    );    
});
  }
if(min_amount){
 $("#dvFastingOptions").append(
        $('<label />', {
            //'text': '$' + min_amount
        }).addClass("radio-inline gift_amount").append(
		$('<input />', { 
                type: 'radio', 
                name: 'choose_amount', 
                id: 'amount1',
                class: 'amount_text',
                value: min_amount,
				required: true
            }),
            $('<input />', { 
                type: 'text', 
                name: 'choose_amount', 
                id: 'textField',
                class: 'amount_text',
                min: min_amount,
				placeholder : 'Enter amount'
            }).on('click', function(){
              
              jQuery("#textField:input").attr('name', 'choose_amount');
					this.value = this.value.replace(/[^0-9]/g, '');
						jQuery(this).prev('#amount1.amount_text').prop('checked', true);
									 
				})
        )
    ); 
 //$("#dvFastingOptions").append('<p>Minimum amount should be ' + min_amount + '($5 minimum)' + '</p>');
 $("#dvFastingOptions").append('<p> $' + min_amount + ' minimum' + '</p>');
}

/* if(min_amount < 5){
	alert("Minimum Amount $5");
       return false;
}else{
	return true;
} */
  

}
</script>
<div id="dvFastingOptions"></div>
<div class="others">
    <label class="radio-inline">$25
      <input id="amount" class="amount" value="25" type="radio" name="choose_amount">
    </label>
     <label class="radio-inline">$50
      <input id="amount" class="amount" value="50" type="radio" name="choose_amount">
    </label>
    <label class="radio-inline">$75
      <input id="amount" class="amount" value="75" type="radio" name="choose_amount">
    </label>
    <label class="radio-inline gift_amount">
     <input  id="amount1" class="amount_text" value="" type="radio" name="choose_amount">
	 <input type="text" id="textField" class="amount_text" value="" name="choose_amount" placeholder="Enter amount">
     </label>
</div>
     <!--<p class="sent-button"><input value="Next" type="button" data-dismiss="modal" class="next btn"></p>-->
    <p class="sent-button">
	<!--<input value="Next" type="button" data-dismiss="modal" class="next btn">-->
	<a href="#myModal31" role="button" id="txt" class="next btn" data-dismiss="modal" data-toggle="modal">Next</a>
	</p>	
  <div id="result"></div>
  </form>
</div>

<script>
jQuery(document).ready(function(){

	jQuery("#txt").click(function(event){
            var value = jQuery('#textField.amount_text').val();
			var compareValue = jQuery("#amount1").val();
			//var compareValue1 = $("#amount").val();
		if (jQuery("input[name=choose_amount]:checked").val()){
	//alert(jQuery("input[name=choose_amount]").val());
		
	 }else{
		sweetAlert("Please make a selection");
			event.preventDefault();
				return false;
	}

  if (jQuery('#amount1.amount_text').is(':checked')) {
        if(value){
        if (parseInt(value) < parseInt(compareValue)){
        sweetAlert("Minimum $" + compareValue + " required");
        event.preventDefault();
        return false;
            }
    }else{
      sweetAlert("Please Enter the amount");
      event.preventDefault();
        return false;
    } }
	});
			
  //jQuery(".amount").click(function() {
	  jQuery(document).on('click','.amount', function(e){
     jQuery("#textField:input").attr('name', 'choose_amounttt');
     jQuery("#amount").on("click", function () {
            $("#amount").prop('disabled', false);
            $("#textField").attr('name', 'choose_amounttt');
        });
     jQuery("#amount1").on("click", function () {
            $("#textField").attr('name', 'choose_amount');
        });
  });

});

</script>
<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script> 
