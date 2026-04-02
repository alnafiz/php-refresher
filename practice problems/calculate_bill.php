/**
 * Problem: Calculate Total Bill with VAT
 * * Task: Create a function that takes the base price of a meal, 
 * calculates a 15% VAT (Value Added Tax), and returns the 
 * total amount a customer needs to pay.
 * * Formula: Total = Original Price + (Original Price * 0.15)
 */
<!DOCTYPE html>
<html>
<head>
    <title>Time 2 Dine - Billing</title>
</head>
<body>

    <h2>Restaurant Bill Calculator</h2>

    <form method="POST" action="">
        <label>Enter Base Amount (TK): </label>
        <input type="number" name="amount" required>
        <button type="submit" name="calculate">Calculate Total</button>
    </form>

    <?php
    // vat calc func
    function calculateTotalBill($amount) {
        $vat = $amount * 0.15; 
        return $amount + $vat;
    }

    // submit button
    if (isset($_POST['calculate'])) {
        $userInput = $_POST['amount']; // user input
        
        if ($userInput > 0) {
            $finalBill = calculateTotalBill($userInput);
            echo "<h3>Results:</h3>";
            echo "Base Amount: " . $userInput . " TK <br>";
            echo "Total Bill (with 15% VAT): <strong>" . $finalBill . " TK</strong>";
        } else {
            echo "<p style='color:red;'>Please enter a valid amount.</p>";
        }
    }
    ?>

</body>
</html>