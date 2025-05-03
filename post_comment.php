<?php 

include_once 'controllers/comment.php';


$com = new Comment();

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $comment = $_POST['comment'];

    if (empty($name) || empty($comment)) {
       echo "<span stye='color: red; font-size: 20px;'>Fie must not be empty</span>";

    }else{
        $com->setData($name, $comment);
        if ($com->create()) {
            header('location: tourist.php?msg='.urldecode('comment posting successfully'));
        }
    }
}


?>