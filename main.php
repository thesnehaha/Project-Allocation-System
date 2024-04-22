<?php
$dbc = mysqli_connect("localhost","root","","projectallocation") or die("Not Connected");
$Name = $_POST['Name'];
$roll_number = $_POST['roll_number'];
$CGPA = $_POST['CGPA'];

if ($CGPA <= 7){
    $topic = "Web Technology";
    echo "Your topic is ".$topic;
}
elseif ($CGPA > 7 and $CGPA <= 7.5) {
    $topic = "App Development";
    echo "Your topic is ".$topic;
}

elseif ($CGPA > 7.5 and $CGPA <= 8) {
    $topic = "Database Management System";
    echo "Your topic is ".$topic;
}

elseif ($CGPA > 8 and $CGPA <= 8.5) {
    $topic = "Core Programme";
    echo "Your topic is ".$topic;
}

else {
    $topic = "Networking";
    echo "Your topic is ".$topic;
}

$insert = "Insert Into student(Name, roll_number, CGPA, topic) VALUES ('$Name', '$roll_number', '$CGPA', '$topic');";
$result = mysqli_query($dbc, $insert) or die("Value not submitted");





?>