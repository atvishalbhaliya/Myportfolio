<?php
session_start();
include("connect.php");

if (isset($_POST['country_id'])) {

    $country_id = intval($_POST['country_id']);
    $cmpmid = $_SESSION['linkarisecmpmid'];

    $query = mysqli_query(
        $conn,
        "SELECT collagename
         FROM res_college_master
         WHERE countrymid='$country_id'
         AND cmpmid='$cmpmid'"
    );

    echo '<option value="">Select College</option>';

    if (mysqli_num_rows($query) > 0) {
        while ($row = mysqli_fetch_assoc($query)) {
            echo '<option value="'.$row['collagename'].'">'
                    .$row['collagename'].
                 '</option>';
        }
    } else {
        echo '<option value="">No colleges found</option>';
    }
}
?>
