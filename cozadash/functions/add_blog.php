<?php

    include 'database_coza.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $blog_date = filter_var($_POST['blog_date']);
        $blog_desc = filter_var($_POST['blog_desc'], FILTER_SANITIZE_STRING);
        $blog_cat = filter_var($_POST['blog_cat'], FILTER_SANITIZE_STRING);
        $blog_name = filter_var($_POST['blog_name'], FILTER_SANITIZE_STRING);

        $img = $_FILES['blog_img'];
        $img_name = $img['name'];
        $img_error = $img['error'];
        $img_temp = $img['tmp_name'];
        $img_size = $img['size'];
        $img_type = $img['type'];

        $allwed_ex = ['png', 'PNG', 'jpg', 'JPG'];

        if($img_error == 4){

            echo 'check your file';

        }else{

            $img_explode = explode('.', $img_name);
            $img_extention = end($img_explode);
            $new_name = rand(0,10000000).time().'.' .$img_extention;

            if(!in_array($img_extention, $allwed_ex)){

                echo 'check your file';

            }else{

                if($img_size > 555230){

                    echo 'check your file';

                }else{

                    move_uploaded_file($img_temp, '../upload/' . $new_name);
                }
            }
        }
    }

    if(!empty($blog_date) && !empty($blog_desc) && !empty($blog_cat) && !empty($blog_name)){

        $stmt = $coon -> prepare("INSERT INTO blog(blog_img, blog_date, blog_desc, blog_cat, blog_name)
                                    VALUES(:blog_img, :blog_date, :blog_desc, :blog_cat, :blog_name)");
        $stmt->execute([

            'blog_img' => $new_name,
            'blog_date' => $blog_date,
            'blog_desc' => $blog_desc,
            'blog_cat' => $blog_cat,
            'blog_name' => $blog_cat
        ]);
    }

    header('Location: ../blog.php');
    exit();