<?php
require_once __DIR__ . "/../controller/userController.php";

$users=getUsers();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/index.css">
    <title>Users management</title>
</head>
<body>
<?php 
    if(isset($_SESSION['message']) && isset($_SESSION['msg_type'])):?>
            <div class="alert alert-<?php echo $_SESSION["msg_type"] ;?>">
            <?php 
                echo $_SESSION["message"] ;
                unset($_SESSION['message']);
                unset($_SESSION['msg_type']);
            ?>
            </div>
<?php endif; ?>

    <div class="container">
        <p> Users list:</p>
        <div class="formSection">
            <table>
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Sexe</th>
                        <th>Date of birth</th>
                        <th>Age</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                        <?php  foreach ($users as $user): ?>
                            <tr>
                                <td><?= $user["firstname"]?></td>
                                <td><?= $user["lastname"]?></td>
                                <td><?= $user["email"]?></td>
                                <td><?= $user["gender"]?></td>
                                <td><?= $user["birthdate"]?></td>
                                <td><?= $user["age"]?></td>
                                <td style="display: flex;">
                              <a href="userForm.php?id=<?= $user['id'] ?>" class="btn-edit"> Edit</a>
                                <a href="../controller/userController.php?delete=<?= $user['id'] ?>" class="btn-delete" onclick="return confirm('Supprimer cet utilisateur ?')"> Delete</a>
                            </td>
                            </tr>
                       <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        
        <div class="btn-container">
            <a class= "btn" href="userForm.php">New user</a>
        </div>


    </div>
    
</body>
</html>