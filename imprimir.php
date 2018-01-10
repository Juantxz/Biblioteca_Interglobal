<?php
function myprint_r($my_array)
{
    if (is_array($my_array)) {
        echo "<table border=1 cellspacing=5 cellpadding=0 width=30%>";

        echo '<tr><td colspan=0 style="background-color:#800000;><strong><font color=white>Tarjeta</font></strong></td></tr>';
        foreach ($my_array as $k => $v) {
            echo '<tr><td valign="absolute" style="width:100%;background-color:#800000;">';
            echo '<strong>' . $k . "</strong></td><td>";
            myprint_r($v);
            echo "</td></tr>";
        }
        echo "</table>";
        return;
    }
    echo $my_array;
}
 ?>
