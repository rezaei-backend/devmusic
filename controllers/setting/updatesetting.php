<?php
require_once "../../functions/pdo.php";
require_once "../../functions/helpers.php";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $description = $_POST['description'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phonenumber'];
    $location = __DIR__ . "/../../public/setting/";
    if (isset($_FILES['logo']['name'])) {
        $logo = $_FILES['logo']['name'];
        move_uploaded_file($_FILES['logo']['tmp_name'], "$location" . $_FILES['logo']['name']);
        $query = "UPDATE `setting` SET  `description`=?,`logo`=?,`email`=?,`phonenumber`=?  WHERE `id`=1 ";
        $stm = $conn->prepare($query);
        $stm->execute([$description, $logo, $email, $phonenumber]);
        redirect("view/admin/setting/index.php");
    } else {
        $query = "UPDATE `setting` SET  `description`=?,`email`=? ,`phonenumber`=? WHERE `id`=1 ";
        $stm = $conn->prepare($query);
        $stm->execute([$description , $email, $phonenumber , $logo]);
        redirect("view/admin/setting/index.php");
    }
} else {
    header("HTTP/1.1 403 Not Found");
}
