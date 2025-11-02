
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
    <title>Opérations CRUD</title>
</head>

<body>
    
    <?php require_once 'process.php'?>
    <?php  var_dump($_SESSION);?>
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

    <div class="container-sm">
     <table class="table">
       <thead class="bg-secondary text-white">
          <tr>
              <th>
               Id
              </th>
              <th>
               Nom
              </th>
              <th>
              Location
              </th>
              <th >Action </th>
          </tr>
       </thead>
       <tbody>
        <?php 
        // get the data from the database
        $data=get_data();
        while($row=$data->fetch_assoc()):
        ?>
        <tr>
            <td><?php echo $row['Id'] ;?></td>
            <td><?php echo $row['Name'] ;?> </td>
            <td><?php echo $row['Location']; ?></td>
            <td>
                <a class="btn btn-primary" href="insert_edit.php?edit=<?php echo $row['Id']; ?>"> 
                Edit
        </a>

                <a href="delete.php?delete=<?php echo $row['Id']; ?>" class="btn btn-danger"> 
                Delete 
               </a>
            </td>
        </tr>
        <?php endwhile ;?>
       </tbody>
     </table>
     <a class="btn btn-secondary"  href="insert_edit.php"> New Data</a>
    </div>
</body>

</html>