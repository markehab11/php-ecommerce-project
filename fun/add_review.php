<?php

    include 'database_coza.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $id_products = $_POST['idname'];
        $review = filter_var($_POST['review'], FILTER_SANITIZE_STRING);
        $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
        $email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);

        if(!empty($review) && !empty($name) && !empty($email)){

            $stmt = $coon->prepare("INSERT INTO proudcts_reviews(review, name, email, id_products)
                                        VALUES(:review, :name, :email, :id_products)");
            $stmt->execute([

                'review' => $review,
                'name' => $name,
                'email' => $email,
                'id_products' => $id_products
            ]);

            echo '<br>' . $name . '<br>' ;
            echo $review . '<br>' ;
            
        }else{

            echo 'no empty'; 
        };

    }else{

    echo 'no method';
};