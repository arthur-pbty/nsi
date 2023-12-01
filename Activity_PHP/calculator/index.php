<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Calculator</h1>
    <img src="calculator.jpg" alt="Calculator Image">
    <form method="post">
        <input type="number" name="num1" placeholder="Number 1" required>
        <select name="operator">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="number" name="num2" placeholder="Number 2" required>
        <button type="submit" name="calculate">Calculate</button>
    </form>
    <?php
    if (isset($_POST['calculate'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operator = $_POST['operator'];

        switch ($operator) {
            case '+':
                $result = $num1 + $num2;
                break;
            case '-':
                $result = $num1 - $num2;
                break;
            case '*':
                $result = $num1 * $num2;
                break;
            case '/':
                if ($num2 == 0) {
                    echo "Cannot divide by zero.";
                } else {
                    $result = $num1 / $num2;
                }
                break;
            default:
                echo "Invalid operator.";
        }

        if (isset($result)) {
            echo "Result: " . $num1 . ' ' . $operator . ' ' . $num2 . " = " . $result;
        }
    }
    ?>
</body>
</html>
