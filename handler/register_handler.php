<?php
    session_start();
    if(!isset($_SESSION['id'])){
        header('Location: ../index.php');
    }
    include_once('../include/pdocon.php');
     try {
        $pdo = new PDO($dsn, $user, $password);
    } catch (PDOException $e) {
        die('Oops');
    }
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
    $value[] = "2013-2014";
    $value[] = "2"; 
    $year = date('o');
    $month = date('m');
    $date = date('d');
    $currentDate = $year .'/' . $month . '/'.$date;
    $value[] = $currentDate;
    $value[] = $_SESSION['id'];
    $value[] = $_POST['student_number'];
    $pds = $pdo->prepare("UPDATE student SET first_name = ?, last_name = ?,
        middle_name = ?, birthdate = ?, course = ?, year_level = ?,
        scholarship_type = ?, sex = ?, type = ?, nationality = ?,
        mobile_number = ?, telephone_number = ?, email_address = ?,
        permanent_address = ?, city_address = ?, guardian_name = ?,
        guardian_relationship = ?, guardian_contact_number = ?,
        guardian_address = ?, school_year = ?, semester = ?, last_updated = ?
        WHERE id = ? AND student_number = ?");
    $pds->execute($value);
    session_destroy();
    echo 'Successful! ' . 'Click <a href="../index.php"> here </a> to go back to the login screen' ;
?>
