<?php

include "config.php";

if($_POST['idx']) {

    $id = $_POST['idx'];  
   // $result = mysqli_query($conn, "SELECT * FROM tb_materi ORDER BY id_materi ASC");    

    $sql = mysqli_query($conn, "SELECT * FROM tb_kamus WHERE id_kamus = '$id' ");
    //while($data = mysqli_fetch_array($result))

    while ($result = mysqli_fetch_array($sql)){

        ?>

        <form>

            <div class="form-group">

                <label><?php echo $result['kata']; ?></label>

            </div>

            <div class="form-group">

                <label><?php echo $result['deskrip']; ?></label>

            </div>

        </form>     

    <?php }
 }

    ?>