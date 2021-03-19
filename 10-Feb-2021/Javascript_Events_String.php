<html>
    <head>
    <script>
        /* function funonChange() 
        {
            var x = document.getElementById("ddcar").value;
            document.getElementById("car").innerHTML = "You Have Selected.....: " + x;
        } */
        function imgMouseOver(x)
        {
            x.style.height = "100px";
            x.style.width = "100px";
        }
        function imgMouseOut(x)
        {
            x.style.height = "50px";
            x.style.width = "50px";
        }
        function funPageLoad() 
        {
            alert("Page is loaded");
        }

        
    </script>
    </head>
    <body>
        <!-- <select id="ddcar" onchange="funonChange()">
            <option value="Audi">Audi</option>
            <option value="BMW">BMW</option>
            <option value="Mercedes">Mercedes</option>
            <option value="Volvo">Volvo</option>
        </select>
        <p id="car"></p> -->

        <!-- <img src="1234on.jpg" width="50" height="50" onmouseover="imgMouseOver(this)" onmouseout="imgMouseOut(this)" > -->


        <p id="strlength"></p>											
        <script>
            var str = "Hello Welcome to ArsenalTech........";
            /* var strlength = str.length;
            document.getElementById("strlength").innerHTML = strlength; */

            /* var strposition = str.indexOf("Welcome")
            document.getElementById("strlength").innerHTML = strposition */

            /* var strposition = str.lastIndexOf("too")
            document.getElementById("strlength").innerHTML = strposition */

            /* var pos = str.lastIndexOf("Tech", 15);
            document.getElementById("strlength").innerHTML = pos */

            /* var pos = str.search("Tech");
            document.getElementById("strlength").innerHTML = pos */

            /* var pos = str.slice(9,20);
            document.getElementById("strlength").innerHTML = pos */

            /* var pos = str.slice(9);
            document.getElementById("strlength").innerHTML = pos */

            /* var pos = str.substr(9,6);
            document.getElementById("strlength").innerHTML = pos */

            /* var pos = str.substr(9);
            document.getElementById("strlength").innerHTML = pos */

            /* var pos = str.replace("to","toooo");
            document.getElementById("strlength").innerHTML = pos

            var pos = str.toUpperCase(str);
            document.getElementById("strlength").innerHTML = pos */

            /* var pos = str.toLowerCase(str);
            document.getElementById("strlength").innerHTML = pos */

            /* var str1 ="Hello"
            var str2 = "Welcome To World"
            var cnt = str1.concat(" ",str2) 
            document.getElementById("strlength").innerHTML = cnt */

            /* var str1 = "Jay             Lad    "
            var ans = str.trim(str)
            document.getElementById("strlength").innerHTML = str1 */

            /* var str = "10";
            str1 = str.padStart(4,0);
            document.getElementById("strlength").innerHTML = str1 */

            /* var str = "10";
            str1 = str.padEnd(4,0);
            document.getElementById("strlength").innerHTML = str1 */

            /* var chr = str.charAt(12)
            document.getElementById("strlength").innerHTML = chr */

            var chr = str.charCodeAt(12)
            document.getElementById("strlength").innerHTML = chr







        </script>



    </body>
</html>

