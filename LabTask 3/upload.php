<?php
    if(isset($_POST['submit'])){
        $file = $_FILES['file'];
        $fileName = $_FILES['file']['name'];
        $filetype = $_FILES['file']['type'];
        $fileSize = $_FILES['file']['size'];
        $fileTemp = $_FILES['file']['tmp_name'];
        $fileerror= $_FILES['file']['error'];
       
        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));

        $allowed = array('jpg','jpeg','png');

        if (in_array($fileActualExt, $allowed)){
            if($fileerror===0){
                if($fileSize<4194304){
                    
                    $filenameNew = uniqid('', true).".".$fileActualExt;
                    $fileDestination = 'upload/'.$filenameNew;
                    move_uploaded_file($fileTemp, $fileDestination);
                    header("location: file_upload.php?uploadsuccess"); 

                }else{
                    echo "File is too big.upload a file less then 4 MB";
                }
            }else{
                echo "There was an error";
            }
        }else{
            echo "you cannot upload files of this type ";
        }
    }
?>