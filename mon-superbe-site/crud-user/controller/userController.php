<?php
session_start();
require_once __DIR__ . "/../data/userDAO.php";

//  AJOUT OU MODIFICATION
if (isset($_POST['saveUser'])) {
    $id   = isset($_POST['id'])   ? (int)$_POST['id']   : null;
    $nom  = trim($_POST['nom']  ?? '');
    $prenom= trim($_POST['prenom'] ?? '');
    $mail = trim($_POST['mail'] ?? '');
    $ddn  = trim($_POST['ddn']  ?? '');
    $gender=$_POST['gender'] ?? '';

    // validations mini
    if (empty($nom) || empty($mail)) {
        $_SESSION['msg_type'] = 'warning';
        $_SESSION['message']  = "Nom et email obligatoires.";
        header("Location: ../view/userForm.php".($id?"?id=$id":''));
        exit();
    }

    $user = [
        'id'    => $id,
        'nom'   => $nom,
        'prenom'=> $prenom,
        'mail'  => $mail,
        'ddn'   => $ddn,
        'gender'=> $gender,
    ];

    if ($id) {   
              // >>> MODIFICATION
        updateUser($user);
        $_SESSION['message'] = "Utilisateur modifié.";
    } else {                         // >>> AJOUT
        saveUser($user);
        $_SESSION['message'] = "Utilisateur ajouté.";
    }

    $_SESSION['msg_type'] = 'success';
    header("Location: ../view/index.php");
    exit();
}

//  SUPPRESSION
if (isset($_GET['delete'])) {
    $id = (int) $_GET['delete'];
    deleteUser($id);
    $_SESSION['msg_type'] = 'danger';
    $_SESSION['message'] = "Utilisateur supprimé.";
    header("Location: ../view/index.php");
    exit();
}


//  FONCTIONS
function getUsers() {
    return getUsersDAO();
}

function saveUser($user) {
    saveUserDAO($user);
}

function updateUser($user) {
    updateUserDAO($user);
}

function deleteUser($idUser) {
    $success = deleteUserDAO($idUser); 
    return $success;
}
?>