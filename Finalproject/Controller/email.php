<script>
function checkemailAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "Controller/check_availability.php",
data:'email='+$("#email").val(),
type: "POST",
success:function(data){
$("#email-availability-status").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}