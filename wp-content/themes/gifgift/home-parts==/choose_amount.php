<div class="choose-card choose-card1">
<button type="button" class="close" data-dismiss="modal">×</button>
<h2> Choose The Amount </h2>
<form id="myForm">
    <label class="radio-inline">
      <input id="amount" class="amount" value="25" type="radio" name="choose_amount">$25
    </label>
     <label class="radio-inline">
      <input id="amount" class="amount" value="50" type="radio" name="choose_amount">$50
    </label>
    <label class="radio-inline">
      <input id="amount" class="amount" value="75" type="radio" name="choose_amount">$75
    </label>
    <label class="radio-inline">
     <input style ="margin-left: -31px;" id="amount" class="amount_text" value="" type="radio" name="choose_amount"><input style="float: right; margin-right: 31%;border-radius: 1px;" type="text" id="textField" class="amount_text" value="" name="choose_amount" placeholder="Enter amount">
     </label>
     <!--<p class="sent-button"><input value="Next" type="button" data-dismiss="modal" class="next btn"></p>-->
    <p class="sent-button">
	<!--<input value="Next" type="button" data-dismiss="modal" class="next btn">-->
	<a href="#myModal31" role="button" class="next btn" data-dismiss="modal" data-toggle="modal">Next</a>
	</p>	
  <div id="result"></div>
  </form>
</div>

<script>
jQuery(document).ready(function(){
  jQuery(".amount").click(function() {
    jQuery("#textField").attr("disabled", false);
    if ($("input[name=choose_amount]:checked").val()) {
        $("#textField").attr("disabled", true);
    }
    });


//   jQuery(".amount").change(function () {
                     
// if ($("#amount").attr("checked")) {
//             $('#textField:input').removeAttr('disabled');
//         }
//         else {
//             $('#textField:input').attr('disabled', 'disabled');
//         }
// });


});


</script>
<style type="text/css">
  .tab-pane.active.diff1 {
    height: 450px;
    overflow-y: scroll;
}
</style>