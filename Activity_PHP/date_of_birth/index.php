<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Which Day of the Week Were You Born On?</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Which day of the week were you born on?</h1>
    
    <form method="post">
        <div>
            <label for="firstName">Your first name:</label>
            <input type="text" name="firstName" required>
        </div>
        
        <h2>Your date of birth:</h2>

        <div class="dob">
            <label for="day">Day of the month:</label>
            <input type="number" name="day" required>

            <label for="month">Month:</label>
            <input type="number" name="month" required>

            <label for="year">Year:</label>
            <input type="number" name="year" required>
        </div>

        <button type="submit" name="submit">Validate</button>
    </form>

    <div>
        <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
            $day = $_POST['day'];
            $month = $_POST['month'];
            $year = $_POST['year'];
            $firstName = $_POST['firstName'];

            if ($month < 3) {
                $dayOfWeek = ( (int)((23 * $month) / 9) + $day + 4 + $year + ((int)($year - 1) / 4) - (int)(($year - 1) / 100) + (int)(($year - 1) / 400) ) % 7;
            } else {
                $dayOfWeek = ( (int)((23 * $month) / 9) + $day + 2 + $year + (int)($year / 4) - (int)($year / 100) + (int)($year / 400) ) % 7;
            }

            switch ($dayOfWeek) {
                case 0:
                    $dayOfWeek = "Sunday";
                    break;
                case 1:
                    $dayOfWeek = "Monday";
                    break;
                case 2:
                    $dayOfWeek = "Tuesday";
                    break;
                case 3:
                    $dayOfWeek = "Wednesday";
                    break;
                case 4:
                    $dayOfWeek = "Thursday";
                    break;
                case 5:
                    $dayOfWeek = "Friday";
                    break;
                case 6:
                    $dayOfWeek = "Saturday";
                    break;
                default:
                    $dayOfWeek = "Invalid day";
            }
            
            echo "$firstName, you were born on a $dayOfWeek.";
        }
        ?>
    </div>
</body>
</html>
