<?php
include 'connection.php';

if (isset($_POST['department'])) {
    $category_id = $_POST['department'];

    $data = mysqli_query($con,"SELECT * FROM `register` INNER JOIN `doctor` ON register.id=doctor.id WHERE department='$category_id'");  
    echo "<option value=''>Select Doctor</option>";
    while ($row = mysqli_fetch_assoc($data)) {
        echo "<option value='{$row['d_id']}'>{$row['name']}</option>";
       
    }
}
?>