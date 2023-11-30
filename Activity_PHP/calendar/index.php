<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Calendar</h1>
        <form method="post" action="calendar.php">
            <label for="">Month :</label>
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

            <label for="">Year :</label>
            <select name="year">
            <?php
            for ($i = date("Y")-100; $i <= date("Y")+100; $i++) {
                $selected = ($i == date("Y")) ? 'selected' : '';
                echo "<option value='$i' $selected>$i</option>";
            }
            ?>
            </select>
            <button type="submit">Valider</button>
        </form>
    </header>
    <main>
        <section>
            <h2>Bienvenue sur le générateur de calendrier</h2>
            <p>Ce site vous permet de générer les calendriers pour différents mois en fonction de l'année que vous spécifiez. Entrez le mois et l'année dans le formulaire ci-dessus et cliquez sur "Valider" pour voir le calendrier correspondant.</p>
        </section>

        <section>
            <h2>Comment utiliser :</h2>
            <p>Entrez le mois et l'année dans les menus déroulants ci-dessus.</p>
            <p>Choisissez le mois en utilisant le premier menu déroulant. Vous pouvez sélectionner n'importe quel mois de l'année en choisissant parmi les options disponibles.</p>
            <p>Ensuite, sélectionnez l'année à partir du deuxième menu déroulant. Les années disponibles commencent par il y a 100 ans et vont jusque dans 100 ans</p>
            <p>Une fois que vous avez choisi un mois et une année, cliquez sur le bouton "Valider" pour générer le calendrier correspondant.</p>
            <p>Le calendrier généré affichera les jours de la semaine ainsi que les dates pour le mois et l'année sélectionnés.</p>
        </section>
    </main>
</body>
</html>
