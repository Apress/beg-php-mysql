<?php

function amortizationTable($pNum, $periodicPayment, $balance, $monthlyInterest)
{
    // Calculate payment interest
    $paymentInterest = round($balance * $monthlyInterest, 2);

    // Calculate payment principal
    $paymentPrincipal = round($periodicPayment - $paymentInterest, 2);

    // Deduct principal from remaining balance
    $newBalance = round($balance - $paymentPrincipal, 2);

    // If new balance < monthly payment, set to zero
    if ($newBalance < $paymentPrincipal) {
        $newBalance = 0;
    }

    printf("<tr><td>%d</td>", $pNum);
    printf("<td>$%s</td>", number_format($newBalance, 2));
    printf("<td>$%s</td>", number_format($periodicPayment, 2));
    printf("<td>$%s</td>", number_format($paymentPrincipal, 2));
    printf("<td>$%s</td></tr>", number_format($paymentInterest, 2));

    # If balance not yet zero, recursively call amortizationTable()
    if ($newBalance > 0) {
         $pNum++;
         amortizationTable($pNum, $periodicPayment,
                            $newBalance, $monthlyInterest);
    } else {
        return 0;
    }

}

   // Loan balance
   $balance = 10000.00;

   // Loan interest rate
   $interestRate = .0575;

   // Monthly interest rate
   $monthlyInterest = $interestRate / 12;

   // Term length of the loan, in years.
   $termLength = 5;

   // Number of payments per year.
   $paymentsPerYear = 12;

   // Payment iteration
   $paymentNumber = 1;

   // Determine total number payments
   $totalPayments = $termLength * $paymentsPerYear;

   // Determine interest component of periodic payment
   $intCalc = 1 + $interestRate / $paymentsPerYear;

   // Determine periodic payment
   $periodicPayment = $balance * pow($intCalc,$totalPayments) * ($intCalc - 1) /
                                    (pow($intCalc,$totalPayments) - 1);

   // Round periodic payment to two decimals
   $periodicPayment = round($periodicPayment,2);

   // Create table
   echo "<table width='50%' align='center' border='1'>";
   echo "<tr>
         <th>Payment Number</th><th>Balance</th>
         <th>Payment</th><th>Principal</th><th>Interest</th>
         </tr>";

   // Call recursive function
   amortizationTable($paymentNumber, $periodicPayment, $balance,
                     $monthlyInterest);

   // Close table
   echo "</table>";

?>
