<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkerboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="post">
        <label for="row">Rows:</label>
        <input type="number" name="row" required>

        <label for="column">Columns:</label>
        <input type="number" name="column" required>

        <button type="submit" name="submit">Validate</button>
    </form>
    <table>
        <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
            $row = $_POST['row'];
            $column = $_POST['column'];
            $color = 'b';

            for ($i=0; $i<$row ; $i++) { 
                echo("<tr>");
                for ($j=0; $j<$column ; $j++) { 
                    if ($color == 'b') {
                        $color = 'n';
                    } else {
                        $color = 'b';
                    }
                    echo("<td class='$color'></td>");
                }
                echo("</tr>");
                if ($i % 2 == 0) {
                    $color = 'n';
                } else {
                    $color = 'b';
                }
            }
        }
        ?>
    </table>
</body>
</html>
