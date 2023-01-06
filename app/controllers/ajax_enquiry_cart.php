<?php

class Ajax_enquiry_cart extends Controller {
    public function index () {

    }

    public function edit_quantity($data = "") {
        $obj = json_decode($data);

        $id = addslashes($obj->id);
        $quantity = addslashes($obj->quantity);
        if(isset($_SESSION['CART'])) {
            foreach ($_SESSION['CART'] as $key => $item) {
                # code...
                if($item['id'] == $id) {
                    $_SESSION['CART'][$key]['quantity'] = (int)$quantity;
                    break;
                }
            }
        }

        $obj->data_type = "edit_quantity";
        echo (json_encode($obj));
    }

    public function delete_item($data = "") {
        $obj = json_decode($data);

        $id = addslashes($obj->id);
        $obj->data_type = "delete_item";
        if(isset($_SESSION['CART'])) {
            foreach ($_SESSION['CART'] as $key => $item) {
                # code...
                if($item['id'] == $id) {
                    unset($_SESSION['CART'][$key]);
                    $_SESSION['CART'] = array_values($_SESSION['CART']);
                    break;
                }
            }
        }
    }
}