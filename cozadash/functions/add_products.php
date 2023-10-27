<?php

    include 'database_coza.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $product_name = filter_var($_POST['product_name'], FILTER_SANITIZE_STRING);
        $product_price = filter_var($_POST['product_price'], FILTER_SANITIZE_STRING);
        $product_title = filter_var($_POST['product_title'], FILTER_SANITIZE_STRING);
        $product_describtion = filter_var($_POST['product_describtion'], FILTER_SANITIZE_STRING);
        $procat = filter_var($_POST['procat'], FILTER_SANITIZE_STRING);

        $img = $_FILES['product_img'];
        $img_name = $img['name'];
        $img_error = $img['error'];
        $img_temp = $img['tmp_name'];
        $img_size = $img['size'];
        $img_type = $img['type'];

        $allwed_ex = ['png', 'PNG', 'jpg', 'JPG'];

        if($img_error == 4){

            echo 'check your file1';

        }else{

            $img_explode = explode('.', $img_name);
            $img_extention = end($img_explode);
            $new_name = rand(0,10000000). time() . '.' . $img_extention;

            if(!in_array($img_extention , $allwed_ex)){

                echo 'cheack your file2';
            
            }else{

                if($img_size > 555230){

                    echo 'check your file3';

                }
            }
        }
    }

    move_uploaded_file($img_temp,'../upload/' . $new_name);

    if(!empty($product_name) && !empty($product_price ) && !empty($product_title) && !empty($product_describtion)){
        $stmt = $coon-> prepare("INSERT INTO products(product_name, product_img, product_price, product_title, product_describtion, cat_id)
                                    VALUES(:product_name, :product_img, :product_price, :product_title, :product_describtion, :cat_id)");
        $stmt->execute([
            'product_name' => $product_name,
            'product_img' => $new_name,
            'product_price' => $product_price,
            'product_title' => $product_title,
            'product_describtion' => $product_describtion,
            'cat_id' => $procat
        ]);
    }
    
    header('Location: ../products.php');
    exit();




