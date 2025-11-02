<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Insert form</title>
</head>
<body>
    <?php require_once "process.php" ?>
    <div class="container-sm">
        <form class="bg-primary p-5" action="process.php" method="post">  
        <input type="hidden" name="id" value="<?php echo $id?>" class="form-control" >
        <div class="form-group mb-3">
                <label class="form-label" for="name">Name:</label>
                <input type="text" name="name"  placeholder="Enter your name"  <?php   if($update==TRUE):?>value="<?php echo $name ?>" <?php endif;?>      class="form-control">
            </div>
            <div class="form-group mb-3">
                <label  class="form-label" for="location"> Location:</label>
                <input type="text" name="location"  placeholder="Enter your location" <?php   if($update):?>value="<?php echo $location ?>" <?php endif;?>  class="form-control">
            </div>
            <?php 
            if(!$update):
            ?>
            <div class="form-group  d-flex justify-content-center"> 
            <button  type="submit"  name="save" class="btn btn-dark px-3 py-2"> Submit
            </button> 
            <?php
            else:
            ?>
            <button  type="submit"  name="update" class="btn btn-info px-3 py-2"> Update
                </button> 
            </div>
            <?php endif;?>
            </div>
        </form>
    </div> 
</body>
</html>