<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The sphere</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Calculating the area, surface or volume of a sphere</h1>
    <img src="sphere.jpg">

    <form method="post">
        <label for="sphere">Area :</label>
        <input type="radio" name="sphere" value="aire">

        <label for="sphere">Volume :</label>
        <input type="radio" name="sphere" value="aire" checked="checked">

        <label for="rayon">Radius in m :</label>
        <input type="number" name="rayon" required>

        <button type="submit" name="submit">Validate</button>
    </form>
    <div>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
            if (strcmp($_POST['sphere'], "aire") == 0) {
                $resultat = 4 * 3.14 * $_POST['rayon'] * $_POST['rayon'];
                print ("Aire = $resultat m²");
            }

            if (strcmp($_POST['sphere'], "volume") == 0) {
                $resultat = 4/3 * 3.14 * $_POST['rayon'] * $_POST['rayon'] * $_POST['rayon'];
                print ("Volume = $resultat m3");
            }
        }
        ?>
    </div>
</body>
</html>