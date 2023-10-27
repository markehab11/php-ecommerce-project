<?php

    include 'database_coza.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $id = $_POST['idname'];
        $desc_story = filter_var($_POST['desc_story'], FILTER_SANITIZE_STRING);
        $desc_mission = filter_var($_POST['desc_mission'], FILTER_SANITIZE_STRING);

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

        $image = $_FILES['img_mission'];
        if(!empty($image['name'])){
    
            $name_file = $image['name'];
            $temp_file = $image['tmp_name'];
            $error_file = $image['error'];
            $size_file = $image['size'];
            $type_file = $image['type'];
    
            $allwed_ex = ['png', 'PNG', 'jpg', 'JPG'];

            if($error_file == 4){
    
                echo 'check your file';
    
            }else{
    
                $explode_img = explode('.', $name_file);
                $extention_img = end($explode_img);
                $name_new = rand(0,10000000) . time() . '.' . $extention_img;
    
                if(!in_array($img_extention, $allwed_ex)){
    
                    echo 'check your file';
    
                }else{
    
                    if($size_file > 555230){
    
                        echo 'your file is big';
    
                    }
                }
            }
    
            move_uploaded_file($temp_file, '../upload/' . $name_new);
    
        }else{
    
            $name_new = $_POST['img_old'];
        }
    }

        $stmt = $coon->prepare("UPDATE about SET desc_story = ?, img_story = ?, desc_mission = ?, img_mission = ? WHERE id = ?");
        $stmt->execute([$desc_story, $new_name, $desc_mission, $name_new, $id]);

        header('Location: ../about.php');
        exit();

