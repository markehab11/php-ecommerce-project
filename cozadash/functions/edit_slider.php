<?php

    include 'database_coza.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $id = $_POST['idname'];
        $slider_name = filter_var($_POST['slider_name'], FILTER_SANITIZE_STRING);
        $slider_title = filter_var($_POST['slider_title'], FILTER_SANITIZE_STRING);

        $img = $_FILES['image'];
        if(!empty($img['name'])){

            $file_name = $img['name'];
            $file_temp = $img['tmp_name'];
            $file_error = $img['error'];
            $file_size = $img['size'];
            $file_type = $img['type'];

            $allwed_ex = ['png', 'PNG', 'jpg', 'JPG'];

            if($file_error == 4){

                echo 'check your file';

            }else{

                $img_explode = explode('.', $file_name);
                $img_extention = end($img_explode);
                $new_name = rand(0,10000000) . time() . '.' . $img_extention;

                if(!in_array($img_extention, $allwed_ex)){

                    echo 'check your file';

                }else{

                    if($file_size > 555230){

                        echo 'your file is big';

                    }
                }
            }

            move_uploaded_file($file_temp, '../upload/' . $new_name);

        }else{

            $new_name = $_POST['old_img'];
        }
    }
        $stmt = $coon->prepare("UPDATE slider SET img = ?, name = ?, title = ? WHERE id = ?");
        $stmt->execute([$new_name, $slider_name, $slider_title, $id]);

        header('Location: ../slider.php');
        exit();

