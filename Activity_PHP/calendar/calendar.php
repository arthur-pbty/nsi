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
   <main>
      <h1>Calendar</h1>
        <table>
            <tr>
                <th><?php echo($monthName) ?></th>
                <th><?php echo($year) ?></th>
            </tr>
            <tr>
                <td>Monday</td>
                <td>Tuesday</td>
                <td>Wednesday</td>
                <td>Thursday</td>
                <td>Friday</td>
                <td>Saturday</td>
                <td>Sunday</td>
            </tr>
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
                  echo("<td>$nbr</td>");
                  $nbr++;
               }
               
               for ($i=0; $i<5 ; $i++) { 
                  echo("<tr>");
                  for ($j=0; $j<7 ; $j++) { 
                     if ($nbr == $nbrmax) {
                        break;
                     }

                     $today = (date("j") == $nbr and date("n") == $month and date("Y") == $year) ? "class='today'" : "";
                     
                     echo("<td $today>$nbr</td>");
                     $nbr++;
                  }
                  echo("</tr>");
               }
               ?>
            </tr>
        </table>
    </main>
</body>
</html>