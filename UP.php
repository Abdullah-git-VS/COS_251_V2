<?php
include('config.php');

if (isset($_POST['update'])) {
    $ID_o = $_POST['o'];
    $ID_n = $_POST['id'];
    $NAME = $_POST['name'];
    $PRICE = $_POST['price'];
    $IMAGE = $_FILES['image'];
    $image_location = $_FILES['image']['tmp_name'];
    $image_name = $_FILES['image']['name'];
    $image_up = "images/".$image_name;
    $update = "UPDATE prod SET name='$NAME' , price='$PRICE', image='$image_up', id='$ID_n' WHERE id=$ID_o";
    mysqli_query($con, $update);

    if (move_uploaded_file($image_location, 'images/'.$image_name)) {
        echo "<script>alert('تم تحديث المنتج بنجاح');</script>";
    } else {
        echo "<script>alert('حدث خطأ ما يرجى المحاولة لاحقا');</script>";
    }
    header('location: test.php');
}
