

<!doctype html>
<html lang='en'>
    <head>
        <meta charset='utf-8' />
        <title>can</title>
        
   
        
    </head>


<body>


<canvas  id="myCan" width="240" height="280"></canvas>
<img id='image'>
<?php $test='12315aaa'; ?>
<script>
//http://codepen.io/discoveryvip/pen/WwbabY
//var canvas = document.getElementById('myCan');
//var ctx = canvas.getContext('2d');
//var imageElem = document.getElementById('image');
var ctx = document.getElementById('myCan').getContext('2d'),
    imageElem = document.getElementById('image');
    

ctx.font="italic bold 48px Arial";
ctx.fillStyle ="green";
ctx.fillText('<?php echo $test ; ?>',50,250);
ctx.fillStyle ="red";
ctx.fillText('first text',50,150);
ctx.strokeStyle = "blue";
ctx.strokeText('first text',50,50);
ctx.beginPath();
for(var x=0;x<10;x++){
ctx.moveTo(50 + (x*20),250);
ctx.lineTo(70 + (x*20)-10,250);
}
ctx.stroke();
ctx.beginPath();
ctx.setLineDash([6,15]);
ctx.moveTo(50,300);
ctx.lineTo(300,300);
ctx.stroke();

imageElem.src = ctx.canvas.toDataURL();
    console.log(imageElem.src);
</script>

</body>
</html>

