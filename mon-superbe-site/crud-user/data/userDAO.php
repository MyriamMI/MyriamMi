<?php
require_once __DIR__ . "/config.php";

function getUsersDAO(){ 

    $connection = get_connection();
    $sql = "SELECT * FROM users"; 
    $result = $connection->query($sql);

    if(!$result){
        die("Erreur SQL : " . $connection->error);
    }
    
    $users = $result->fetch_all(MYSQLI_ASSOC); 
    $connection->close();
    return $users;
}

function saveUserDAO($user){

    
    // 1. Calcul de l'âge
    $birthDate = new DateTime($user['ddn']);
    $today = new DateTime();
    $age = $birthDate->diff($today)->y; // Âge en années

    $connection = get_connection();
    
    // Requête SQL avec 6 marqueurs de position (?). L'ordre est crucial.
    $query = "INSERT INTO users (firstname, lastname, email, gender, birthdate, age) VALUES (?, ?, ?, ?, ?, ?)";
    $statement = $connection->prepare($query);
        
    if ($statement === false) {
        error_log("Erreur de préparation SQL: " . $connection->error);
        return false;
    }
    
    // 2. Liaison des paramètres: "sssssi" (5 strings, 1 integer)
    $success = $statement->bind_param(
        "sssssi", 
        $user['prenom'],  // 1. firstname
        $user['nom'],     // 2. lastname
        $user['mail'],    // 3. email
        $user['gender'],  // 4. gender
        $user['ddn'],     // 5. birthdate
        $age              // 6. age (integer)
    );
    
    if ($success === false) {
         error_log("Erreur de liaison des paramètres: " . $statement->error);
         $statement->close();
         $connection->close();
         return false;
    }
    
    // 3. Exécution
    $success = $statement->execute();
    
    if (!$success) {
        error_log("Erreur d'exécution SQL: " . $statement->error);
    }
    
    $statement->close();
    $connection->close();
    

}
// autres fonctions DAO
function getUser($id){
    $connection = get_connection();
    $sql = "SELECT * FROM users WHERE id = ?";
    $stmt = $connection->prepare($sql);
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();   // ou return false si pas trouvé
    $stmt->close();
    $connection->close();
    return $user;
}
function deleteUserDAO($id) {   
    $connection = get_connection();
    $stmt = $connection->prepare("DELETE FROM users WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    // Vérifie si une ligne a été supprimée
    $deleted = $stmt->affected_rows > 0;
    $stmt->close();
    $connection->close();

    return $deleted; // true si suppression réussie sinon false 
}

function updateUserDAO($user) {  
    // 1) Calcul âge
    $birthDate = new DateTime($user['ddn']);
    $age = $birthDate->diff(new DateTime())->y;

    $conn = get_connection();

    // 2) Vérifier que l'email n'appartient pas à un autre utilisateur
    $check = $conn->prepare("SELECT id FROM users WHERE email = ? AND id <> ?");
    $check->bind_param("si", $user['mail'], $user['id']);
    $check->execute();
    $check->store_result();
    if ($check->num_rows > 0) {
        $check->close();
        $conn->close();
        
        die("Cet email est déjà utilisé par un autre compte.");
    }
    $check->close();

    // 3) UPDATE sécurisé
    $sql = "UPDATE users
            SET firstname = ?, lastname = ?, email = ?, gender = ?, birthdate = ?, age = ?
            WHERE id = ?";
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        die("Erreur de préparation SQL : " . $conn->error);
    }

    $stmt->bind_param(
        "ssssssi",
        $user['prenom'],
        $user['nom'],
        $user['mail'],
        $user['gender'],
        $user['ddn'],
        $age,
        $user['id']
    );

    if (!$stmt->execute()) {
        // 1062 = violation d'unicité MySQL
        if ($conn->errno == 1062) {
            die("Cet email est déjà utilisé par un autre compte.");
        }
        die("Erreur UPDATE : " . $conn->error);
    }

    $stmt->close();
    $conn->close();
}
?>