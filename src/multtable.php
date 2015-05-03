<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Mutliplication Table</title>
</head>
<body>
<?php
    //$foo = 5;
    //echo $foo + 15 . ' is the initial value of foo summed with 15.';
    
    $showTable = true;

    $minMultiplicand = $_GET["minPlicand"] + 0;
    $maxMultiplicand = $_GET["maxPlicand"] + 0;
    $minMultiplier = $_GET["minPlier"] + 0;
    $maxMultiplier = $_GET["maxPlier"] + 0;
    
    if ($minMultiplicand > $maxMultiplicand)
    {
        echo 'Minimum multiplicand larger than maximum.';
        $showTable = false;
    }
    if ($minMultiplier > $maxMultiplier)
    {
        echo 'Minimum multiplier larger than maximum.';
        $showTable = false;
    }
    
    if (is_int($minMultiplicand) == false)
    {
        echo 'Minimum multiplcand is not an integer.' . '<br>';
        $showTable = false;
    }
    if (is_int($maxMultiplicand) == false)
    {
        echo 'Maximum multiplcand is not an integer.' . '<br>';
        $showTable = false;
    }
    if (is_int($minMultiplier) == false)
    {
        echo 'Minimum multiplier is not an integer.' . '<br>';
        $showTable = false;
    }
    if (is_int($maxMultiplier) == false)
    {
        echo 'Maximum multiplier is not an integer.' . '<br>';
        $showTable = false;
    }
    
    if ($showTable)
    {
        //Found code for table implementation at the following site
        //http://stackoverflow.com/questions/22745645/how-to-make-a-multiplication-table-in-php-and-html
        $table='<table border="1">';
        for($r = 0; $r < 2; $r++)
        {
            $table .= '<tr>';
            for($c = 0; $c < 2; $c++)
            {
                if ($r==0 && $c==0)
                {
                    $table .= "<td>" . $minMultiplicand*$minMultiplier . "</td>";
                }
                elseif ($r==0 && $c==1)
                {
                    $table .= "<td>" . $minMultiplicand*$maxMultiplier . "</td>";
                }
                elseif ($r==1 && $c==0)
                {
                    $table .= "<td>" . $maxMultiplicand*$minMultiplier . "</td>";
                }
                else
                {
                    $table .= "<td>" . $maxMultiplicand*$maxMultiplier . "</td>";
                }
            }
            $table .= '</tr>';
        }
        echo $table;
    }
    
    echo "<p> Min Multiplicand = " . $minMultiplicand . "</p>";
    echo "<p> Max Multiplicand = " . $maxMultiplicand . "</p>";
    echo "<p> Min Multiplier = " . $minMultiplier . "</p>";
    echo "<p> Max Multiplier = " . $maxMultiplier . "</p>";
?>
<body>
</html>

