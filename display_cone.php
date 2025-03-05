<?php
require_once 'cone.php';

$cones = [
    new Cone(10, 20),
    new Cone(30, 40),
    new Cone(50, 60)
];

// Function to format numbers properly
function formatNumber($number, $decimals = 11) {
    return round($number, $decimals); 
}

// Display the volume and surface area for each cone
foreach ($cones as $index => $cone) {
    $diameter = [10, 30, 50][$index];
    $height = [20, 40, 60][$index];

    echo "<p style='font-size: 28px; margin: 2px 0;'> Cone with $diameter diameter and $height height:<br></p>";
    echo "<p style='font-size: 28px; margin: 2px 0;'> Volume = " . formatNumber($cone->get_volume(), 1) . "<br></p>";
    echo "<p style='font-size: 28px; margin: 2px 0;'> Surface Area = " . formatNumber($cone->get_surfaceArea(), 11) . "<br><br></p>";
}
?>
