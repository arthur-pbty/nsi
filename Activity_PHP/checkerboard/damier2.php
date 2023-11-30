<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Damier</title>
    <link rel="stylesheet" href="damier.css">
</head>
<body>
    <table>
    <?php 

    $ligne = $_POST['ligne'];
    $colone = $_POST['colum'];
    $color = 'b';

    for ($i=0; $i<$ligne ; $i++) { 
        echo("<tr>");
        for ($j=0; $j<$colone ; $j++) { 
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

    ?>
    </table>
    
</body>
</html>