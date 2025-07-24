<?php
//Calculate a fixed discount of 10% on a purchase

$item = "Ballpen";
$quantity = 10;
$priceperitem = 20;
$customerpaid = 300;
$fixeddiscount = 0.10; // 10% discount

$totalAmount = $quantity * $priceperitem;
$discountAmount = $totalAmount * $fixeddiscount;
$finalAmount = $totalAmount - $discountAmount;
$change = $customerpaid - $finalAmount;

echo "Purchase Summary<br>";
echo "----------------------------------<br>";
echo "Item: $item<br>"; 
echo "Quantity: $quantity<br>";
echo "Price per item: ₱$priceperitem<br>";
echo "Total before discount: ₱$totalAmount<br>";
echo "Discount (10%): ₱$discountAmount<br>";
echo "Total after discount: ₱$finalAmount<br>";
echo "Amount Paid: ₱$customerpaid<br>";
echo "Change: ₱$change<br>";
    
?>
