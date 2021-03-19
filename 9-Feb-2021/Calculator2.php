<!DOCTYPE html>
<html>
    <head>
        <title>Calculator</title>
        
        <script>
            function addition()
            {
                var no1 = parseInt(document.getElementById('number1').value);
                var no2 = parseInt(document.getElementById('number2').value);
                document.getElementById('answers').innerHTML = "Addition Is : " + (no1 + no2);
            }
            
            function substraction()
            {
                var no1 = parseInt(document.getElementById('number1').value);
                var no2 = parseInt(document.getElementById('number2').value);
                document.getElementById('answers').innerHTML = "Substraction Is : "+ (no1 - no2);
            }
            function multiplication()
            {
                var no1 = parseInt(document.getElementById('number1').value);
                var no2 = parseInt(document.getElementById('number2').value);
                document.getElementById('answers').innerHTML ="Multiplication Is : " +  (no1 * no2);
            }
            
            function divison()
            {
                var no1 = parseInt(document.getElementById('number1').value);
                var no2 = parseInt(document.getElementById('number2').value);
                document.getElementById('answers').innerHTML ="Divison Is : " + (no1 / no2);
            }

            function clearall()
            {
                document.getElementById('number1').value = "";
                document.getElementById('number2').value = "";
                document.getElementById('answers').innerHTML = "";
            }
            
        </script>

    </head>
    <body>
        <table>
            <tr>
                <th>Enter Number 1:</th>
                <td><input type="number" id="number1"></td>
            </tr>
            <tr>
                <th>Enter Number 2:</th>
                <td><input type="number" id="number2"></td>
            </tr>
            <tr>
                <td colspan=2>
                    <button name ="add" onclick="addition()">+</button>
                    <button name ="sub" onclick="substraction()">-</button>
                    <button name ="mul" onclick="multiplication()">*</button>
                    <button name ="div" onclick="divison()">/</button>
                    <button name ="clear" onclick="clearall()">Clear</button>
                </td>
            </tr>
            <tr>
                <td colspan=2><p id="answers"></p></td>
            </tr>
        </table>

    </body>
</html>