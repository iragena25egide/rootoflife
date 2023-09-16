<?php
Session_start();
include('connect.php');

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $organisation=$_POST['organisation'];
    $area=$_POST['area'];
    $comment=$_POST['comment'];



    $insert=$conn->query("INSERT INTO comments VALUES(NULL,'$name','$phone','$organisation','$area','$comment')");

    if($insert){
        echo '<script>
        alert("comment sended")
        window.location.href="contact.html";
        </script>';
    }
}




?>