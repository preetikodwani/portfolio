<script>
alert("ENTER INFORMATION PROPERLY");
function validateForm() {
  var pw = document.forms["myForm"]["password"].value;
  var x = document.forms["myForm"]["name"];
  var eid = document.forms["myForm"]["email"].value;
  var y = document.forms["myForm"]["phone"].value;
  var atpos = eid.indexOf("@");
  var atpos = eid.indexOf(".");

  if(atpos<1 || dotpos<atpos+2 || dotpos+2 >= eid.length){
 alert("please enter valid email address");
 return false;
}
else if (isNaN(y){
    {
document.getElementById("numsp").innerHTML="ONLY NUMERIC VALUES";
return false;
}
}
else if(y.length < 11) {
window.alert("enter valid length");
return false;
}
}
</script>
<script>hiii</script>