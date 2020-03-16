<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script>
    var fontSize=1;
    function zoomIn(){
        fontSize +=0.1;
        document.body.style.fontSize=fontSize +"em";
     }
     function zoomOut(){
        fontSize -=0.1;
        document.body.style.fontSize=fontSize +"em";
     }
     </script>
     <center>
     <input type ="button" value="+ Text" onCLick="zoomIn()"/>
     <input type ="button" value="- Text" onCLick="zoomOut()"/>
     </center>
     
</head>
<body>
    
</body>
</html>