

    <?php
        include_once('koneksi.php');
       
        $id = $_GET['id'];
        
        mysqli_query($koneksi, "DELETE FROM tb_formdata  WHERE id = '$id'");
        
        header("location:index.php");
    

//alter table tb_formdata auto_incerement=0;