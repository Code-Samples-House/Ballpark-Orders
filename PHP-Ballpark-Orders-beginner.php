<?php
$order_string = readline();
$orders = explode(" ", $order_string);
$total = 0;
for ($i=0; $i < count($orders); $i = $i + 1) {
    if ($orders[$i] == "Nachos" || $orders[$i] == "Pizza")
        $total = $total + 6;
    else if ($orders[$i] == "Cheeseburger")
        $total = $total + 10;
    else if ($orders[$i] == "Water")
        $total = $total + 4;
    else
        $total = $total + 5;
}
$tax = $total * 0.07;
$cost = $total + $tax;
echo $cost
?>