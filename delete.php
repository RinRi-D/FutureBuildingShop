<?php
session_start();
if (isset($_GET["action"])) {
    if ($_GET["action"] == "delete") {
        foreach ($_SESSION["cart"] as $keys => $values) {
            if ($values["item_id"] == $_GET["del"]) {
                unset($_SESSION["cart"][$keys]);
            }
        }
    }
}
