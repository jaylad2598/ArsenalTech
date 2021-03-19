<!-- <html>
<body>
    <h2>What Can JavaScript Do?</h2>    
    <button onclick="document.getElementById('myImage').src='pic_bulbon.jpeg'">Turn on the light</button>
    <img id="myImage" src="pic_bulboff.gif" style="width:100px">
    <button onclick="document.getElementById('myImage').src='pic_bulboff.gif'">Turn off the light</button>
</body>
</html> -->

<html>
    <head>
        <script>
            function myFunction() 
            {
                document.getElementById("demo").innerHTML = "Welcome to ArsenalTech...........";
            }
        </script>
    </head>
    <body>
        <p id="demo">Welcome To Javascript..........</p>
        <button type="button" onclick="myFunction()">Click On It</button>
    </body>
</html>