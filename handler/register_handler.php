<?php
    session_start();
    if(!isset($_SESSION['id'])){
        header('Location: ../index.php');
    }
    
    $value[] = $_SESSION['id'];
    $value[] = $_POST['student_number'];
    $value[] = $_POST['first_name'];
    $value[] = $_POST['last_name'];
    $value[] = $_POST['middle_name'];
    $value[] = $_POST['birthdate'];
    $value[] = $_POST['course'];
    $value[] = $_POST['year_level'];
    $value[] = $_POST['scholarship_type'];
    $value[] = $_POST['sex'];
    $value[] = $_POST['type'];
    $value[] = $_POST['nationality'];
    $value[] = $_POST['mobile_number'];
    $value[] = $_POST['telephone_number'];
    $value[] = $_POST['email_address'];
    $value[] = $_POST['permanent_address'];
    $value[] = $_POST['city_address'];
    $value[] = $_POST['guardian_name'];
    $value[] = $_POST['guardian_relationship'];
    $value[] = $_POST['guardian_contact_number'];
    $value[] = $_POST['guardian_address'];

    for($index = 0; $index < count($value); ++$index){
        echo $value[$index] . '<br>';
    }
?>
