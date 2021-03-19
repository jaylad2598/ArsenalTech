<html>
    <head>

    </head>
<body>
        <lable>Enter String :</lable>
        <input type="text" id="txtdata" name="txtdata">
        <button onclick="displaydata()">Submit</button>

        <p id="data">Hello</p>

        <script>
            function displaydata()
            {
                var x = document.getElementById("txtdata").value;
                document.getElementById("data").innerHTML = "Hello , " + x.toUpperCase()
                document.getElementById("txtdata").value = ""
            }
        </script>


</body>
</html>
