<!DOCTYPE html>
<html>  
<head>
          
</head>
<body>

    <?php
        include_once('koneksi.php');
       
        $id = $_GET['id'];
        
        mysqli_query($koneksi, "DELETE FROM tb_formdata  WHERE id = '$id'");
        
       // header("location : index.php");
      ?>
      <a href="index.php">Ke database</a>

</body>
      
</html>