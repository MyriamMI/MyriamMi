<?php
session_start();
$update=false;
//get the  DB connection   
$connection = get_connection();
if(isset($_POST['save'])){
    $name=$_POST['name'];
    $location=$_POST['location'];
    $query= "insert into data (Name, Location) values (?,?)";
    $statement=$connection->prepare($query);
    $statement->bind_param("ss",$name,$location);
    $statement->execute();
    $statement->close();
    $connection->close();
    $_SESSION['msg_type']='info';
    $_SESSION['message']="Enregistrement réussi...";
    $_SESSION['username']='ADAM';


    header("location: index.php");
}
elseif(isset($_GET['edit'])){
    $update=TRUE;
    $id=$_GET['edit'];
    $query ="SELECT * FROM data WHERE Id=$id ";
    $connection = get_connection();
    $result = $connection->query($query) or die($connection->error);
    if($result != null ){
        $row = $result-> fetch_array();
        $name=$row['Name'];
        $location=$row['Location'];
    }
        $connection->close();
}

elseif(isset($_POST['update'])){
    $id=$_POST['id'];
    $name=$_POST['name'];
    $location=$_POST['location'];
    $query ="UPDATE data SET Name='$name', Location='$location'
    WHERE Id=$id";
    $connection = get_connection();
    $result = $connection->query($query) or die($connection->error);
    $connection->close();
    $_SESSION['message']= "Enregistrement réussi";
    $_SESSION['msg_type'] ="info";
    header("location: index.php");
}

function get_connection(){
    $server_name='localhost';
    $user_name='root';
    $password='';
    $database='crud';
    $connection =  mysqli_connect($server_name, $user_name, $password,$database);
    if(!$connection){
        die("connection échouée").mysqli_connect_error();
    }
    else return $connection;
}
function get_data(){
    $connection=get_connection();
    $query= "SELECT * FROM data";
    $result=$connection->query($query) or die($connection->error);
    $connection->close();
    return $result;
}
?>