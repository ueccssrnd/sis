<?php

include_once('../include/pdocon.php');

if (isset($_POST['student_number'])) {
    //connecting to the database
    try {
        $pdo = new PDO($dsn, $user, $password);
    } catch (PDOException $e) {
        die('Oops');
    }
    session_start();
    $sql = "SELECT * FROM student WHERE student_number = ? AND access_code = ?";
    $pds = $pdo->prepare($sql);
    $pds->execute(array($_POST['student_number'], $_POST['access_code']));
    if ($row = $pds->fetch()) {
        $_SESSION['id'] = $row['id'];
        $_SESSION['student_number'] = $row['student_number'];
        $_SESSION['first_name'] = $row['first_name'];
        $_SESSION['last_name'] = $row['last_name'];
        $_SESSION['middle_name'] = $row['middle_name'];
        $_SESSION['mobile_number'] = $row['mobile_number'];
        $_SESSION['email_address'] = $row['email_address'];
        $_SESSION['permanent_address'] = $row['permanent_address'];
        $_SESSION['city_address'] = $row['city_address'];
        $_SESSION['guardian_name'] = $row['guardian_name'];
        $_SESSION['guardian_relationship'] = $row['guardian_relationship'];
        $_SESSION['guardian_contact_number'] = $row['guardian_contact_number'];
        $_SESSION['guardian_address'] = $row['guardian_address'];
        $_SESSION['telephone_number'] = $row['telephone_number'];
        header('Location: ../register.php');
    } else {
        $sql = "SELECT * FROM user WHERE username = ? AND access_code = ? AND role = 1";
        $pds = $pdo->prepare($sql);
        $pds->execute(array($_POST['student_number'], $_POST['access_code']));
        if ($row = $pds->fetch()) {
            if ($_POST['student_number'] == $row['id'] && $_POST['access_code'] == $row['access_code']) {
                $_SESSION['id'] = $row['id'];
                $_SESSION['role'] = $row['role'];
                $_SESSION['username'] = $row['username'];
                $sql = "UPDATE user SET last_login = NOW() WHERE id = ?";
                $pds = $pdo->prepare($sql);
                $pds->execute(array($_SESSION['id']));
                header('Location: ../managestudent.php');
            }else{
                header('Location: ../index.php');
            }
        } else {
            header('Location: ../index.php');
        }
    }
} else {
    header('Location: ../index.php');
}
?>
