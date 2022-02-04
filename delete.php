<?php
include ('conecter.php');
    $id = $_GET['id'];
    $sql = "DELETE FROM students WHERE id='$id' ";
    $query = mysqli_query($conne,$sql);
    $result = $conne->query($sql);
    if($result){
        header("location: list student.php");
    }else{
        echo "not delete";
    }
?>