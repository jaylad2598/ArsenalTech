<html>
    <head>
        <title>JavaScript Array...</title>    
    </head>
    <body>
        <p id="arr"></p>

        <!-- <p id="arr1"></p> -->
        <script> 
            
            /* var names = [
                "Jay",
                "Parth",
                "Aman",
                "Raj",
                "Hitang"
            ];

            names.push("jayneel")
            names[3] = "Lemon"; */


            /* var nmlen = names.length
            var text = "<ul>"
            for(var i = 0; i < nmlen; i++)
            {
                text += "<li>" + names[i] + "</li>"
            }
            text += "</ul>"
            document.getElementById("arr").innerHTML = text */

            
            /* text = "<ul>";
            names.forEach(funforeach);
            text += "</ul>";
            document.getElementById("arr").innerHTML = text;

            function funforeach(value) 
            {
                text += "<li>" + value + "</li>";
            } */


            /* var cars = new Array("Saab", "Volvo", "BMW");
            cars[0] = "Audi";

            document.getElementById("arr").innerHTML = names.toString(); */
            
            //document.getElementById("arr").innerHTML = names[1];
        </script>

        <script>
            
            var num = [45, 4, 9, 16, 25];
            var txt = "";
            for (var x in num) 
            {
                txt += num[x] + "<br>";
            }
            document.getElementById("demo").innerHTML = txt;

        </script>
    </body>
</html>

