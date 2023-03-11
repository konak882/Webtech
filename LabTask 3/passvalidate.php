<?php
     $currentpass="konak123@";
     
    if($_SERVER['REQUEST_METHOD']=== 'POST'){
        $currentpass = $_POST['oldpass'];
        if(empty($currentpass) || $currentpass!="konak123@"){
            echo "current password is not currect";
        }
    }
?>
<?php
if($_SERVER['REQUEST_METHOD']=== 'POST'){
    $newPassword = $_POST['newpass'];

    if(empty($newPassword) || strlen($newPassword)<8){
        echo "password must not empty and less then 8 char";
    }
    else if(!preg_match('/[@#$%]/',$newPassword)){
        echo "password must contain one spacial charecter";
    }
    else if($_POST['oldpass']=== $_POST['newpass']){
        echo "current password and new password cannot be same";
    }
   
}
if($_SERVER['REQUEST_METHOD']=== 'POST'){
    $reTypePass= $_POST['newpassagain'];
    if (empty($reTypePass) || strlen ($reTypePass)<8){
        echo "password must have 8 charecter atleast";
    }
    else if(!($_POST['newpass']=== $_POST['newpassagain'])){
        echo "new pass and retype pass must be same";
    }
    else{
        echo "passsword changed";
    }
}
?>