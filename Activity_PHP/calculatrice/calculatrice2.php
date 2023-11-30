<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculatrice</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Calculatrice 4 operation, resultat :</h1>
    <h2>
    <?php 
    if (strcmp($_POST['jour_du_mois'], "+") == 0)
        {$resultat = $_POST['nbr1'] + $_POST['nbr2'];
        print ("résultat = $resultat");
    }

    if (strcmp($_POST['jour_du_mois'], "-") == 0)
        {$resultat = $_POST['nbr1'] - $_POST['nbr2'];
        print ("résultat = $resultat");
    }

    if (strcmp($_POST['jour_du_mois'], "/") == 0)
        {$resultat = $_POST['nbr1'] / $_POST['nbr2'];
        print ("résultat = $resultat");
    }

    if (strcmp($_POST['jour_du_mois'], "*") == 0)
        {$resultat = $_POST['nbr1'] * $_POST['nbr2'];
        print ("résultat = $resultat");
    }

    ?>
    </h2>
</body>
</html>