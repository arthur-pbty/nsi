<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculatrice</title>
    <link rel="stylesheet" href="ne_e_quel_jour.css">
</head>
<body>
    <h1>Quel jour de la semaine êtes-vous né(e) ?</h1>
    
    <h3>
    <?php 
    $nbr = $_POST['jours'];
    $mois = $_POST['mois'];
    $annees = $_POST['annees'];
    if ($mois<3) {
        $jour = ( (int)((23*$mois)/9)+$nbr+4+$annees+((int)($annees-1)/4)-(int)(($annees-1)/100)+(int)(($annees-1)/400) )%7;
    } else {
        $jour = ( (int)((23*$mois)/9)+$nbr+2+$annees+(int)($annees/4)-(int)($annees/100)+(int)($annees/400) )%7;
    }
    $nom = $_POST['prenom'];

    if ($jour == 0) {
        $jour = "dimanche";
    } elseif($jour == 1) {
        $jour = "lundi";
    } elseif($jour == 2) {
        $jour = "mardi";
    } elseif($jour == 3) {
        $jour = "mercredi";
    } elseif($jour == 4) {
        $jour = "jeudi";
    } elseif($jour == 5) {
        $jour = "vendredi";
    } elseif($jour == 6) {
        $jour = "samedi";
    }
    
    

    print("$nom, vous êtes né(e) un $jour.");

    ?>
    </h3>
</body>
</html>