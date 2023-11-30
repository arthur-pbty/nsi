<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculatrice</title>
    <link rel="stylesheet" href="ne_e_quel_jour.css">
</head>
<body>
    <h1>Quel jour de la semaine êtes-vous né(e) ?</h1>
    
    <form method="post" action="ne_e_quel_jour2.php">
        <div>
            <h2>Votre prénom : </h2>
            <input type="text" name="prenom" require>
        </div>
        
        <h3>Votre date de naissance SVP ?:</h3>

        <div class="ne">
            <h2>Jour du mois : </h2>
            <input type="text" name="jours" require>
            <h2>mois : </h2>
            <input type="text" name="mois" require>
            <h2>année : </h2>
            <input type="text" name="annees" require>
        </div>

        <input type="submit">
    </form>
</body>
</html>