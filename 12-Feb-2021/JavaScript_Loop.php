<html>
    <body>
        <p id="loops"></p>

        <!-- <script>
            var txt = "";
            var nums = [45, 4, 9, 16, 25];
            var x;
            for (x in nums) 
            {
                txt += nums[x] + "<br>"; 
            }
            document.getElementById("loops").innerHTML = txt;
        </script> -->

        <!-- <script>
            var txt = "";
            var numbers = [45, 4, 9, 16, 25];
            numbers.forEach(funloops);
            document.getElementById("loops").innerHTML = txt;
            function funloops(value) 
            {
                txt = txt + value + "<br>"; 
            }
        </script> -->

        <script>
            var names = ["Jay", "Parth", "Aman","Raj","Hitang"];
            var text = "";
            for (let x of names) 
            {
                text += x + "<br>";
            }
            document.getElementById("loops").innerHTML = text;
        </script>

            


</body>
</html>
