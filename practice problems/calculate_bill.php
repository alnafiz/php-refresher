/**
 * Problem: Calculate Total Bill with VAT
 * * Task: Create a function that takes the base price of a meal, 
 * calculates a 15% VAT (Value Added Tax), and returns the 
 * total amount a customer needs to pay.
 * * Formula: Total = Original Price + (Original Price * 0.15)
 */
<?php
function calculateTotalBill($amount) {
    $vat = $amount * 0.15; 
    $total = $amount + $vat;
    return $total;
}


$originalBill = 1200;
$finalBill = calculateTotalBill($originalBill);

echo "Original Bill: " . $originalBill . " TK<br>";
echo "Total Bill with 15% VAT: " . $finalBill . " TK";
?>