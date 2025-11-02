<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Condition en Html</title>
</head>
<body>

    <?php
     $colore=TRUE;
     if ($colore):?>
     <div style="Background-color: Red; height:150px">
         <p> Paragraphe rouge</p>
     </div>
    
    <?php else:?>
        <div style="Background-color: Green; height:150px">
         <p> Paragraphe vert</p>
        </div>
     <?php
    endif;
    ?>

</body>
</html>