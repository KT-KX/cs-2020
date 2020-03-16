<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<center>
<button id="color">Change Colour</button>
</center>
<script>
document.getElementById('color').onclick=changeColor;
var currentColor="red";
function changeColor(){
    if(currentColor=="red"){
        document.body.style.color="blue";
        currentColor="blue";
    }else{
        document.body.style.color="red";
        currentColor="red";
    }
}
</script>
    
</body>
</html>