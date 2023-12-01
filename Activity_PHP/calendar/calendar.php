<?php
$month = $_POST['month'];
$year = $_POST['year']; 

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

$monthName = $months[$month];

$data = json_decode(file_get_contents('data.json'), true);

?>
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
   <main class="main-calendar">
      <h1>Calendar</h1>
        <table>
            <tr>
                <th><?php echo($monthName) ?></th>
                <th><?php echo($year) ?></th>
            </tr>
            <tr>
                <th>Monday</th>
                <th>Tuesday</th>
                <th>Wednesday</th>
                <th>Thursday</th>
                <th>Friday</th>
                <th>Saturday</th>
                <th>Sunday</th>
            </tr>
            <script>
            function agrandir(cellule) {
               cellule.classList.toggle("clicked");
            }
            </script>
            <tr>
               <?php 
               $nbr = 1;
               $nbrmax = 32;

               if ($month == 1 or $month == 3 or $month == 5 or $month == 7 or $month == 8 or $month == 10 or $month == 12) {
                  $nbrmax = 32;
               } elseif ($month == 2) {
                  if ($year%4 == 0) {
                     $nbrmax = 30;
                  } else {
                     $nbrmax = 29;
                  }
               } else {
                  $nbrmax = 31;
               }

               if ($month<3) {
                  $day = ( (int)((23*$month)/9)+5+$year+((int)($year-1)/4)-(int)(($year-1)/100)+(int)(($year-1)/400) )%7;
               } else {
                  $day = ( (int)((23*$month)/9)+3+$year+(int)($year/4)-(int)($year/100)+(int)($year/400) )%7;
               }

               for ($k=0; $k <6-$day ; $k++) { 
                  echo("<td></td>");
               }
               for ($i=6-$day; $i <7 ; $i++) { 
                  $today = (date("j") == $nbr and date("n") == $month and date("Y") == $year) ? "class='today'" : "";
                  echo("<td onclick='agrandir(this)' $today>$nbr");

                  $date_table = $nbr."-".$month ;
                  foreach ($data['dates'] as $date) {
                     if ($date['date'] === $date_table) {
                        echo "<br>" . $date['name']; 
                     }
                  }

                  foreach ($_COOKIE as $nom_cookie => $valeur_cookie) {
                     $cut = explode("-", $nom_cookie);

                     if (count($cut) >= 3) {
                        $rappelday = $cut[0];
                        $rappelmonth = $cut[1];
                        $rappelyear = $cut[2];

                        $rappel = ($rappelday == $nbr and $rappelmonth == $month and $rappelyear == $year) ? "<br>$valeur_cookie" : "";
                     } else {
                        $rappel = "error rappel";
                     }
                     echo($rappel);
                  }

                  echo("</td>");
                  $nbr++;
               }
               
               for ($i=0; $i<5 ; $i++) { 
                  echo("<tr>");
                  for ($j=0; $j<7 ; $j++) { 
                     if ($nbr == $nbrmax) {
                        break;
                     }

                     $today = (date("j") == $nbr and date("n") == $month and date("Y") == $year) ? "class='today'" : "";
                     echo("<td onclick='agrandir(this)' $today>$nbr");

                     $date_table = $nbr."-".$month ;
                     foreach ($data['dates'] as $date) {
                        if ($date['date'] === $date_table) {
                           echo "<br>" . $date['name']; 
                        }
                     }

                     foreach ($_COOKIE as $nom_cookie => $valeur_cookie) {
                        $cut = explode("-", $nom_cookie);
   
                        if (count($cut) >= 3) {
                           $rappelday = $cut[0];
                           $rappelmonth = $cut[1];
                           $rappelyear = $cut[2];
   
                           $rappel = ($rappelday == $nbr and $rappelmonth == $month and $rappelyear == $year) ? "<br>$valeur_cookie" : "";
                        } else {
                           $rappel = "error rappel";
                        }
                        echo($rappel);
                     }

                     echo("</td>");
                     $nbr++;
                  }
                  echo("</tr>");
               }
               ?>
            </tr>
         </table>
   </main>
      <main>
      <a href="index.php" class="a-back">back -></a>

      <form id="formMois" method="post">
         <input type="hidden" id="year" name="year" value="<?php echo $year; ?>">
         <input type="hidden" id="month" name="month" value="<?php echo $month; ?>">

         <input type="submit" onclick="updateMonth(-1)" value="<-" class="btn">
         <input type="submit" onclick="updateMonth(1)" value="->" class="btn">
      </form>
   </main>

   <script>
   function updateMonth(offset) {
      var month = parseInt(document.getElementById("month").value) + offset;
      var year = parseInt(document.getElementById("year").value);
      if (month === 0) {
         month = 12;
         year -= 1;
      }
      if (month === 13) {
         month = 1;
         year += 1;
      }

      document.getElementById("month").value = month;
      document.getElementById("year").value = year;
   }
</script>
</body>
</html>