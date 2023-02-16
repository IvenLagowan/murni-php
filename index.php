<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    
    <?php
        include "db.php";
        $query = "SELECT * FROM products";
        $db = $connection->query($query);
        $products = $db->fetch_all();
    
        while ($data = mysqli_fetch_assoc($db)){
            echo $data["nama"];
        }
        echo "Text PHP";
    ?>

</body>
</html>