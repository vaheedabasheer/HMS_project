<?php
include 'connection.php';

if (isset($_POST['sel'])) {
    $category_id = $_POST['sel'];

    $query = "SELECT * FROM `patient` INNER join register on patient.id=register.id WHERE p_id='$category_id'";

    $data = mysqli_query($con, $query);

    if ($data && mysqli_num_rows($data) > 0) {
        $row = mysqli_fetch_assoc($data);

        $dob = $row['dob'];
        $dobObject = new DateTime($dob);
        $today = new DateTime();
        $age = $today->diff($dobObject)->y;

        echo $age;
    } else {
        echo "N/A";
    }
}
?>