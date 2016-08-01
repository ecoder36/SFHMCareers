<!DOCTYPE html>
<html>
<body>

<canvas id="myCanvas">Your browser does not support the HTML5 canvas tag.</canvas>

<script>

var c = document.getElementById("myCanvas");
var ctx = c.getContext("2d");
ctx.fillStyle = "#FF0000";
ctx.fillRect(0, 0, 80, 100);

</script>

<p><strong>Note:</strong> The canvas tag is not supported in Internet
Explorer 8 and earlier versions.</p>

</body>
</html>
