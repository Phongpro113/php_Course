 <?php
   require_once 'database.php';
   
    if(isset($_POST['submit'])){

            $username = $_POST['username'];
            $password = $_POST['password'];
            $confirm = $_POST['confirmPassword'];
            
            if($confirm==$password){
                $sql = "INSERT INTO users (id, username, PASSWORD) VALUES (null, '$username', '$password')";
            
           if (mysqli_query($conn, $sql)) {
              echo "New record created successfully";
            } else {
              echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
            }
            else{ echo "sai";}
            $conn->close();
    }
    ?>
