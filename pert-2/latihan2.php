<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Latihan 2 </title>
    <script>
        function calculate() {
            var num1 = parseFloat(document.getElementById('num1').value);
            var num2 = parseFloat(document.getElementById('num2').value);
            var Menu = document.getElementById('Menu').value;
            var result;

            switch (Menu) {
                case '+':
                    result = num1 + num2;
                    break;
                case '-':
                    result = num1 - num2;
                    break;
                case '*':
                    result = num1 * num2;
                    break;
                case '/':
                    if (num2 == 0) {
                        alert("Cannot divide by zero");
                        return;
                    }
                    result = num1 / num2;
                    break;
                default:
                    alert("Invalid Menu");
                    return;
            }

            alert("Result: " + result);
        }
    </script>
</head>
<body>
    <form>
        Nilai I: <input type="number" id="num1"><br><br>
        Nilai II: <input type="number" id="num2"><br><br>
        Menu:
        <select id="Menu">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <br><br>
        <input type="button" value="Submit" onclick="calculate()">
    </form>
</body>
</html>