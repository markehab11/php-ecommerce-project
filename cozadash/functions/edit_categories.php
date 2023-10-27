<?php

    include 'database_coza.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $id = $_POST['idname'];
        $title_cat = filter_var($_POST['title_cat'], FILTER_SANITIZE_STRING);
        $name_cat = filter_var($_POST['name_cat'], FILTER_SANITIZE_STRING);

        
        $img = $_FILES['img_cat'];
        if(!empty($img['name'])){

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

                    }else{

                        move_uploaded_file($img_temp,'../upload/' . $new_name);
                    }
                }
            }
        }else{

            $new_name = $_POST['old_img'];
        }

        if(!empty($name_cat) && !empty($title_cat)){

            $stmt = $coon->prepare("UPDATE categories SET name_cat = ?, img_cat = ?, title_cat = ? WHERE id = ?");
            $stmt->execute([$name_cat, $new_name, $title_cat, $id]);  
        }
        
        header('Location: ../categories.php');
        exit();
    
    }     