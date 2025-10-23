<?php
$data = "Name: " . $_POST['firstname'] . "\n";
$data .= "Phone: " . $_POST['telnumber'] . "\n";
$data .= "Birthday: " . $_POST['birthday'] . "\n";
$data .= "Music: " . implode(", ", $_POST['music']) . "\n";
$data .= "-------------------\n";

file_put_contents('submissions.txt', $data, FILE_APPEND);
?>