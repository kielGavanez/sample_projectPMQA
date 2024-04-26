<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Calendar</title>
    <link rel="stylesheet" href="calendar.css">
    
</head>
<body>
    <h2>PHP Calendar</h2>

    <table>
        <tr>
            <th>Sun</th>
            <th>Mon</th>
            <th>Tue</th>
            <th>Web</th>
            <th>Thu</th>
            <th>Fri</th>
            <th>Sat</th>
        </tr>
        <?php
            $firstDayOfMonth = mktime(0, 0, 0, date("m"), 1, date("y"));
            $daysOfMonth = date("t", $firstDayOfMonth);
            $firstDayOfWeek = date("w", $firstDayOfMonth);

            $currentDay = 1;
            echo "<tr>";

            for ($i=0; $i < 7; $i++) { 
                if ($i < $firstDayOfWeek) {
                    echo "<td></td>";
                }else{
                    echo "<td>$currentDay</td>";
                    $currentDay++;
                }
            }
            echo "</tr>";

            while ($currentDay <= $daysOfMonth) {
                echo "<tr>";
                for ($i=0; $i < 7 && $currentDay <= $daysOfMonth; $i++) { 
                    echo "<tr>$currentDay</tr>";
                    $currentDay++;
                }
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>