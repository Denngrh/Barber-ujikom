<?php 
         include'inc/koneksi.php';
        session_start();
        error_reporting(0);
            if(isset($_POST['submit']))
              {
                $fname=$_POST['name'];
                $query=mysqli_query($conn, "UPDATE `users` SET `nama`='$fname' WHERE 1");
                if ($query) {
                    echo "<script>alert('Update berhasil');</script>";
                    echo "<script>window.location.href='index.php'</script>";
                              }
              }
              else
                {
                  echo '<script>alert("Something Went Wrong. Please try again.")</script>';
                }   
    ?>