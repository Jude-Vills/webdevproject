<?php
    //fetching data
    $query = "SELECT * FROM tblsubject LEFT JOIN tblsyllabus ON tblsyllabus.subject_id = tblsubjects.subjectid";
    $result = mysqliquery($dbc, $query); //using mysqli_query
?>

<!-- $result = mysqli_query($dbc, $query); -->