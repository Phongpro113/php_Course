 <?php
   require_once 'database.php';
   
    if(isset($_POST['submit'])){
        
        $username = $_POST["username"];
        $password = $_POST["password"];
        $sql="SELECT * FROM `users` WHERE username ='$username' AND PASSWORD = '$password'";
               
               $result = mysqli_query($conn,$sql);
          // Kiểm tra tk, pwd => đúng thì qua ds.php, sai=> tk or mk sai

        if (mysqli_num_rows($result) > 0){

            header("location: ds.php");


        } else{

          
          // echo "<script> alert('message successfully sent'); </script>";

          header("location: ../login.php");
        }
             

}



    //       $sql = "SELECT * FROM  `users`";


    //     if (  $result = mysqli_query($conn, $sql)){
          

    //   	if (mysqli_num_rows($result) > 0){

          
    //       while($row = mysqli_fetch_assoc($result)) {
    //         echo "id: " . $row["id"]. " - Name: " . $row["username"]. " " . $row["PASSWORD"]. "<br>";
    //       }
    //   		//	header("location: ds.php");

    //       mysqli_free_result($result);
    //   	}
    //   	else{
    //   			echo '0';
      		         
    //   	}
    //   }
    //     else{
    //       echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    //     }
     
    // }  
    //  $conn->close();
    