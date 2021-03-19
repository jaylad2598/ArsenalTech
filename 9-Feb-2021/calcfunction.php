<html>
<head>
    <script>
        function toCelsius(f) 
        {
            var r = document.getElementById("demo"); 
            r.innerHTML =  (5/9) * (f-32);
        }

        document.getElementById("demo").innerHTML = toCelsius(77);
    </script>

    <p id="demo1"></p>

    <script>
        var person = {
        firstName: "Jay",
        lastName: "Lad",
        age: 23 };

        document.getElementById("demo1").innerHTML =
        person.firstName + " " + person.lastName + " is " + person.age + " years old.";
    </script>

</head>
    <body>
        <P id="demo"></P>
        <button type="button" onclick="toCelsius(90)">Click</button>
    </body>
</html>