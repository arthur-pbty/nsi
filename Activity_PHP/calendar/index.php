<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendar</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
    <header>
        <h1>Calendar</h1>
        <form method="post" action="calendar.php">
            <label for="month">Month :</label>
            <select name="month">
                <?php
                $months = [
                    1 => "January",
                    2 => "February",
                    3 => "March",
                    4 => "April",
                    5 => "May",
                    6 => "June",
                    7 => "July",
                    8 => "August",
                    9 => "September",
                    10 => "October",
                    11 => "November",
                    12 => "December"
                ];

                foreach ($months as $value => $label) {
                    $selected = ($value == date("n")) ? 'selected' : '';
                    echo "<option value='$value' $selected>$label</option>";
                }
                ?>
            </select>

            <label for="year">Year :</label>
            <select name="year">
            <?php
            for ($i = date("Y")-100; $i <= date("Y")+100; $i++) {
                $selected = ($i == date("Y")) ? 'selected' : '';
                echo "<option value='$i' $selected>$i</option>";
            }
            ?>
            </select>
            <button type="submit">Validate</button>
        </form>
    </header>
    <main class="first-main">
        <section>
            <h2>Welcome to the calendar generator</h2>
            <p>This site allows you to generate calendars for different months according to the year you specify. Enter the month and year in the form above and click on "Validate" to see the corresponding calendar.</p>
        </section>

        <section>
            <h2>How to use :</h2>
            <p>Enter the month and year in the drop-down menus above.</p>
            <p>Select the month using the first drop-down menu. You can select any month of the year by choosing from the available options.</p>
            <p>Then select the year from the second drop-down menu. Available years start with 100 years ago and go up to 100 years from now.</p>
            <p>Once you've chosen a month and year, click on the "Validate" button to generate the corresponding calendar.</p>
            <p>The calendar generated will display the days of the week as well as the dates for the selected month and year.</p>
        </section>
    </main>
    <main>
        <h2>Add a callback :</h2>
        <form method="post" action="create_rappel.php">
            <label for="day">Day :</label>
            <select name="day">
                <?php
                for ($j = 1; $j <= 31; $j++) {
                    $selected = ($j == date("d")) ? 'selected' : '';
                    echo "<option value='$j' $selected>$j</option>";
                }
                ?>
            </select>

            <label for="month">Month :</label>
            <select name="month">
                <?php
                foreach ($months as $value => $label) {
                    $selected = ($value == date("n")) ? 'selected' : '';
                    echo "<option value='$value' $selected>$label</option>";
                }
                ?>
            </select>

            <label for="year">Year :</label>
            <select name="year">
                <?php
                for ($i = date("Y")-100; $i <= date("Y")+100; $i++) {
                    $selected = ($i == date("Y")) ? 'selected' : '';
                    echo "<option value='$i' $selected>$i</option>";
                }
                ?>
            </select>

            <label for="rappel">Callback :</label>
            <input type="text" name="rappel" required>
            <button type="submit">add</button>
        </form>
    </main>
    <main>
        <h2>Delete a callback :</h2>
        <form method="post" action="del_rappel.php">
            <label for="callback">Callback :</label>
            <select name="callback" class="sup-callback">
                <?php
                foreach ($_COOKIE as $nom_cookie => $valeur_cookie) {
                    
                    $cut = explode("-", $nom_cookie);
   
                    if (count($cut) >= 3) {
                       $rappelday = $cut[0];
                       $rappelmonth = $cut[1];
                       $rappelyear = $cut[2];
                    } else {}

                    echo "<option value='$nom_cookie'>$rappelday/$rappelmonth/$rappelyear : $valeur_cookie</option>";
                }
                ?>
            </select>
            <button type="submit">Delete</button>
        </form>
    </main>
</body>
</html>
