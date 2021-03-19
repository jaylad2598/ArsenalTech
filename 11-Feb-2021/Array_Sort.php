<html>
    <body>
        <p id="arrsort"></p>
        <p id="arrsort1"></p>
        
        <script>
            var names = ["Jay", "Aman", "Parth", "Hitang", "Harsh" , "Jayneel"];
            /* var arraysort = names.sort();
            document.getElementById("arrsort").innerHTML = names;
            document.getElementById("arrsort1").innerHTML = arraysort; */
        </script>

        <!-- <script>
            var arraysort = names.sort();
            document.getElementById("arrsort").innerHTML = arraysort;      
            var revsort = names.reverse();
            document.getElementById("arrsort1").innerHTML = revsort;      
        </script> -->

        <!-- <script>
            var num = [40, 100, 1, 5, 25, 10];
            num.sort(function(a, b){return a - b});
            document.getElementById("arrsort1").innerHTML = num;      
        </script> -->

        <!-- <script>
            var num = [40, 100, 1, 5, 25, 10];
            var num1 = [40, 100, 1, 5, 25, 10];
            num.sort()
            num1.sort(function(a, b){return a - b});
            document.getElementById("arrsort").innerHTML = num;      
            document.getElementById("arrsort1").innerHTML = num1;      
        </script> -->

        <!-- <script>
            var txt = "";
            var numbers = [45, 4, 9, 16, 25];
            numbers.forEach(myFunction);
            document.getElementById("arrsort").innerHTML = txt;

            function myFunction(value) 
            {
                txt = txt + value + "<br>"; 
            }
        </script> -->

        <!-- <script>
            var num = [45, 4, 9, 16, 25];
            var over18 = num.filter(myFunction);
            document.getElementById("arrsort").innerHTML = over18;

            function myFunction(value) 
            {
                return value > 15;
            }
        </script> -->

        <script>
            var num = [45, 4, 9, 16, 25];
            var arrsum = num.reduce(arrreduce)
            document.getElementById("arrsort").innerHTML = "The Sum is " + arrsum;
            function arrreduce(total, value) 
            {
                return total + value;
            }
        </script>
</body>
</html>
