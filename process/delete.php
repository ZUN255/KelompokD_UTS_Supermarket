<?php

include '../page/config.php';
if(isset($_GET['deleteid'])){
    $id_user=$_GET['deleteid'];

    $sql="delete from `user` where id_user=$id_user";
    $result=mysqli_query($conn,$sql);
    if($result){
        //echo "Deleted successfull";
        header('location:display.php');
    }else{
        die(mysqli_error($conn));
    }
}
?>