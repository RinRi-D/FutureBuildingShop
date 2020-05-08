<?php
session_start();
header('Content-Type: text/html; charset=UTF-8');
$db = include("config.php");
if (isset($_GET["itemid"])) {
    if (isset($_SESSION["cart"])) {
        $ok = -1;
        foreach ($_SESSION["cart"] as $keys => $values) {
            if ($values["item_id"] == $_GET["itemid"]) {
                $ok = $keys;
            }
        }
        if ($ok == -1) {
            $count = count($_SESSION["cart"]);
            $itemlol = mysqli_query($db, "SELECT * FROM menu WHERE id=" . $_GET["itemid"] . "");
            $myrow = mysqli_fetch_array($itemlol);
            $item_array = array(
                'item_id' => $_GET["itemid"],
                'item_name' => $myrow["name"],
                'item_quantity' => $_GET["quan"],
                'item_price' => $myrow["cost"]
            );
            $_SESSION["cart"][$count] = $item_array;
        } else {
            $_SESSION["cart"][$ok]["item_quantity"] = $_SESSION["cart"][$ok]["item_quantity"] + $_GET["quan"];
        }
    } else {
        $itemlol = mysqli_query($db, "SELECT * FROM menu WHERE id=" . $_GET["itemid"] . "");
        $myrow = mysqli_fetch_array($itemlol);
        $item_array = array(
            'item_id' => $_GET["itemid"],
            'item_name' => $myrow["name"],
            'item_quantity' => $_GET["quan"],
            'item_price' => $myrow["cost"]
        );
        $_SESSION["cart"][0] = $item_array;
    }
}
