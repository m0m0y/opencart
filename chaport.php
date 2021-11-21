<html>
<head>
<!-- Begin of Chaport Live Chat code -->
<script type="text/javascript">
	(function(w,d,v3){
	w.chaportConfig = {
	appId : '5e60513d083eaf01b0f61184',
	operators: ['5e60513d083eaf01b0f61185'],
    openIn: '_blank',
};

	if(w.chaport)return;v3=w.chaport={};v3._q=[];v3._l={};v3.q=function(){v3._q.push(arguments)};v3.on=function(e,fn){if(!v3._l[e])v3._l[e]=[];v3._l[e].push(fn)};var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://app.chaport.com/javascripts/insert.js';var ss=d.getElementsByTagName('script')[0];ss.parentNode.insertBefore(s,ss)})(window, document);
</script>
<!-- End of Chaport Live Chat code -->
</head>  
<?php
$count = date("i");

switch (true) {
    case $count <= 15:
        $user = 'tms1';
        break;

    case $count <= 30:
        $user = 'tms2';
        break;

    case $count <= 45:
        $user = 'tms3';
        break;

    default:
        $user = 'tms_032221_user';
        break;
}
?>
<body onresize="myFunction()">

<script>
function myFunction() {
  var w = window.outerWidth;
  var h = window.outerHeight;
  var txt = "Window size: width=" + w + ", height=" + h;
  document.getElementById("demo").innerHTML = txt;
}
</script>
</body>

</html>