<!-- 1, 4, 9, 16, ..... upto 20 terms. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Squares</title>
</head>
<body>
    <form action="" method="post">
        
        <h1>Squares upto 20 terms</h1>

        <input type="submit" value="print">

    </form>

    <?php

        if($_SERVER["REQUEST_METHOD"]=="POST"){
            
            
            for ($i = 1; $i <= 20; $i++) {
                $result = $i * $i;
                echo "$result , &nbsp";
            }    
                
        
    }
            
    ?>

</body>
</html>