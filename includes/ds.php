<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<!-- <?php
    require_once "header.php";
?> -->
<body>
    <div>
        <table class="table table-border table-hover">
            <thead>
                <tr>
                    <th>id</th>
                    <th>username</th>
                    <th>password</th>
                </tr>
            </thead>
            <tbody>

<?php
    require_once "database.php";

    $sql= "SELECT * FROM users";
    $result= mysqli_query($conn,$sql);
    
    // var_dump($result);

    if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo 
        "<tr>".
                    "<th>".  $row["id"]  ."</th>
                    <th>" .  $row["username"]  ."</th>
                    <th>" .  $row["PASSWORD"]  ."</th>
                </tr>";
    }
} else {
    echo "0 results";
}

?>

            </tbody>
        </table>
    </div>
</body>
</html>