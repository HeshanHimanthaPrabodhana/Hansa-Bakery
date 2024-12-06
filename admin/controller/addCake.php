<?php

require '../classes/DbConnector.php';
require '../classes/bakery_cake.php';


use classes\BakeryCake;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['cake_name'], $_POST['price'], $_POST['image'])) {

        if (!empty($_POST['cake_name'] && $_POST['price'] && $_POST['image'])) {

            $cake_name = $_POST['cake_name'];
            $price = $_POST['price'];
            $image = $_POST['image'];
            

            try {

                $BakeryCake = new BakeryCake($cake_name, $price, $image);

                if ($BakeryCake->addBakeryCake()) {
                    header("Location:../admin_index.php?status=2");
                } else {
                    header("Location:../admin_index.php?status=3");
                }
            } catch (PDOException $exc) {
                echo $exc->getMessage();
            }
        } else {
             header("Location:../admin_index.php?status=1");
        }
    } else {

        header("Location:../admin_index.php?status=0");
    }
}


