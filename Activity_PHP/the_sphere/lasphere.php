<!-- lasphere.php -->

<html>
<head>
    <title> La sphere </title>
</head>
<body bgcolor="yellow" text="blue">
    <h1> <font color="black"> Calcul de l'aire de la surface ou du volume d'une sphere </font>   </h1>
    <BR>
    <img src="sphere.jpg"WIDTH=120 HEIGHT=86 TITLE="code Html" />    
    <!-- edition du formulaire -->
    <!-- Lors de sa validation par le clic sur le bouton "Envoyer" de type "submit",
    les données sont envoyées au serveur par la methode POST pour etre exploitees
    au sein de la page lasphere2.php -->

    <form method="post" action="lasphere2.php">
        <p>                
        <input type="radio" name="sphere" value="aire" /> Aire                                                
        <input type="radio" name="sphere" value="volume" checked="checked" /> Volume        
        <BR>
        Rayon en m: <input type="text" name="rayon"  />                                           
        <input type="submit" value="Envoyer" />

        </p>
    </form>
</body>
</html>