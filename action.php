<?php
    require_once("includes/DB.php"); 
    require_once("includes/sessions.php"); 
    require_once("includes/functions.php"); 
    global $conn;

    $page = isset($_GET['p'])?$_GET['p']:'';
    if($page == 'add'){
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $email = $_POST['email'];
        $mesazhi = $_POST['mesazhi'];

        $stmt = $conn->prepare("INSERT INTO contactme(name, surname, email, mesazhi)  
        VALUES(:Name, :Surname, :Email, :Mesazhi);");
        $stmt->bindValue(':Name', $name);
        $stmt->bindValue('Surname', $surname);
        $stmt->bindValue(':Email', $email);
        $stmt->bindValue(':Mesazhi', $mesazhi);
        if($stmt->execute()){
            $_SESSION["successMessage"] = "Message has been sent!";
            Redirect_to("index.php");
        }else{
            $_SESSION["errorMessage"] = "Message has not been sent!";
            Redirect_to("index.php");
        }
    }
?>