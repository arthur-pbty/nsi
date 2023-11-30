<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculatrice</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Calculatrice 4 operation</h1>
    <img src="calculatrice.jpg" alt="">
    <h2>Saisir un nombre, choisir un signe, saisir un second nombre puis cliquer sur =</h2>
    
    <form method="post" action="calculatrice2.php">
        <input type="text" name="nbr1">
        <select name="jour_du_mois">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
        <input type="text" name="nbr2">
        <button type="submit">=</button>
    </form>
</body>
</html>