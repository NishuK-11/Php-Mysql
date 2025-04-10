<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="calculator-container">
        <div class="calculator-box">
            <div class="title">
                <h2>PHP<br>CALCULATOR</h2>
            </div>
            <form action="" class="calculator-form" method="POST">
                <input type="number" name="num1" placeholder="Enter number" required>
                <input type="number" name="num2" placeholder="Enter number" required>
                <select name="operation" required>
                    <option value="add">ADD</option>
                    <option value="subtract">SUB</option>
                    <option value="multiply">MULT</option>
                    <option value="divide">DIV</option>
                </select>
                <input type="submit" name="submit" value="SUBMIT" class="app-form-button">
            </form>
            <div class="app-form-group showdata">
                <p>
                    <?php
                        if (isset($_POST['submit'])) {
                            $num1 = $_POST['num1'];
                            $num2 = $_POST['num2'];
                            $operation = $_POST['operation'];

                            switch ($operation) {
                                case "add":
                                    $result = $num1 + $num2;
                                    echo "The result is: {$result}";
                                    break;
                                case "subtract":
                                    $result = $num1 - $num2;
                                    echo "The result is: {$result}";
                                    break;
                                case "multiply":
                                    $result = $num1 * $num2;
                                    echo "The result is: {$result}";
                                    break;
                                case "divide":
                                    if ($num2 != 0) {
                                        $result = $num1 / $num2;
                                        echo "The result is: {$result}";
                                    } else {
                                        echo "Cannot divide by zero!";
                                    }
                                    break;
                                default:
                                    echo "Invalid operation!";
                            }
                        }
                    ?>
                </p>
            </div>
        </div>
    </div>
</body>
</html>
