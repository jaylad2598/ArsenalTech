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
    <h2>What Can JavaScript Do?</h2>    

    <button onclick="document.getElementById('myImage').src='pic_bulbon.jpeg'">Turn on the light</button>
    <img id="myImage" src="pic_bulboff.gif" style="width:100px">
    <button onclick="document.getElementById('myImage').src='pic_bulboff.gif'">Turn off the light</button>

    <p id="demo">Welcome To Javascript..........</p>
    <button type="button" onclick="myFunction()">Click On It</button>

    <p id="demo1">JavaScript can hide HTML Elements........</p>
    <button type="button" onclick="document.getElementById('demo1').style.display='none'">Hide</button>
    <button type="button" onclick="document.getElementById('demo1').style.display='block'">Show</button>
</body>
</html>