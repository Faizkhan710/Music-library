<?php
include('header.php');
include('../uploadAudio/db_conn.php');
?>
<!-- ##### Breadcumb Area Start ##### -->
<section class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/breadcumb3.jpg);">
    <div class="bradcumbContent">
        <p>The Cure</p>
        <h2>Singer</h2>
    </div>
</section>
<br><br>
<div class="one-music-songs-area mb-70">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php

    $sql = "SELECT * FROM `audio` WHERE id=51";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
       while ($row =mysqli_fetch_assoc($result)){
         ?>


                <div class="single-song-area mb-30 d-flex flex-wrap align-items-end">
                    <div class="song-thumbnail">
                        <img src="img/bg-img/russiaq.jpg" alt="" style="border-radius: 50%;">
                    </div>
                    <div class="song-play-area">
                        <div class="song-name">
                            <p>01. Main Hit Song</p>
                        </div>
                        <audio controls>
                            <source src="../uploadAudio/uploads/<?php echo $row['audio_url'];?>">
                        </audio>
                    </div>
                </div>

                <?php
         
       }
    }
    else{
        echo "No Found";
    }
    
    ?>
            </div>
            <!-- hgujhkjk -->

            <div class="col-12">
                <?php

    $sql = "SELECT * FROM `audio` WHERE id=52";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
       while ($row =mysqli_fetch_assoc($result)){
         ?>


                <div class="single-song-area mb-30 d-flex flex-wrap align-items-end">
                    <div class="song-thumbnail">
                        <img src="img/bg-img/russiaq.jpg" alt="" style="border-radius: 50%;">
                    </div>
                    <div class="song-play-area">
                        <div class="song-name">
                            <p>02. Main Hit Song</p>
                        </div>
                        <audio controls>
                            <source src="../uploadAudio/uploads/<?php echo $row['audio_url'];?>">
                        </audio>
                    </div>
                </div>

                <?php
         
       }
    }
    else{
        echo "No Found";
    }
    
    ?>
            </div>



            <!-- hgujhkjk -->

            <div class="col-12">
                <?php

    $sql = "SELECT * FROM `audio` WHERE id=53";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
       while ($row =mysqli_fetch_assoc($result)){
         ?>


                <div class="single-song-area mb-30 d-flex flex-wrap align-items-end">
                    <div class="song-thumbnail">
                        <img src="img/bg-img/russiaq.jpg" alt="" style="border-radius: 50%;">
                    </div>
                    <div class="song-play-area">
                        <div class="song-name">
                            <p>03. Main Hit Song</p>
                        </div>
                        <audio controls>
                            <source src="../uploadAudio/uploads/<?php echo $row['audio_url'];?>">
                        </audio>
                    </div>
                </div>

                <?php
         
       }
    }
    else{
        echo "No Found";
    }
    ?>
            </div>

            <!-- hgujhkjk -->

            <div class="col-12">
                <?php

    $sql = "SELECT * FROM `audio` WHERE id=54";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
       while ($row =mysqli_fetch_assoc($result)){
         ?>


                <div class="single-song-area mb-30 d-flex flex-wrap align-items-end">
                    <div class="song-thumbnail">
                        <img src="img/bg-img/russiaq.jpg" alt="" style="border-radius: 50%;">
                    </div>
                    <div class="song-play-area">
                        <div class="song-name">
                            <p>04. Main Hit Song</p>
                        </div>
                        <audio controls>
                            <source src="../uploadAudio/uploads/<?php echo $row['audio_url'];?>">
                        </audio>
                    </div>
                </div>

                <?php
         
       }
    }
    else{
        echo "No Found";
    }
    
    ?>
            </div>
            <!-- hgujhkjk -->

            <div class="col-12">
                <?php

    $sql = "SELECT * FROM `audio` WHERE id=55";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
       while ($row =mysqli_fetch_assoc($result)){
         ?>


                <div class="single-song-area mb-30 d-flex flex-wrap align-items-end">
                    <div class="song-thumbnail">
                        <img src="img/bg-img/russiaq.jpg" alt="" style="border-radius: 50%;">
                    </div>
                    <div class="song-play-area">
                        <div class="song-name">
                            <p>05. Main Hit Song</p>
                        </div>
                        <audio controls>
                            <source src="../uploadAudio/uploads/<?php echo $row['audio_url'];?>">
                        </audio>
                    </div>
                </div>

                <?php
         
       }
    }
    else{
        echo "No Found";
    }
    
    ?>
            </div>
            <!-- hgujhkjk -->

            <div class="col-12">
                <?php

    $sql = "SELECT * FROM `audio` WHERE id=56";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
       while ($row =mysqli_fetch_assoc($result)){
         ?>


                <div class="single-song-area mb-30 d-flex flex-wrap align-items-end">
                    <div class="song-thumbnail">
                        <img src="img/bg-img/russiaq.jpg" alt="" style="border-radius: 50%;">
                    </div>
                    <div class="song-play-area">
                        <div class="song-name">
                            <p>06. Main Hit Song</p>
                        </div>
                        <audio controls>
                            <source src="../uploadAudio/uploads/<?php echo $row['audio_url'];?>">
                        </audio>
                    </div>
                </div>

                <?php
         
       }
    }
    else{
        echo "No Found";
    }
    
    ?>
            </div>
            <!-- hgujhkjk -->

            <div class="col-12">
                <?php

    $sql = "SELECT * FROM `audio` WHERE id=57";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
       while ($row =mysqli_fetch_assoc($result)){
         ?>


                <div class="single-song-area mb-30 d-flex flex-wrap align-items-end">
                    <div class="song-thumbnail">
                        <img src="img/bg-img/russiaq.jpg" alt="" style="border-radius: 50%;">
                    </div>
                    <div class="song-play-area">
                        <div class="song-name">
                            <p>07. Main Hit Song</p>
                        </div>
                        <audio controls>
                            <source src="../uploadAudio/uploads/<?php echo $row['audio_url'];?>">
                        </audio>
                    </div>
                </div>

                <?php
         
       }
    }
    else{
        echo "No Found";
    }
    
    ?>
            </div>
            <!-- hgujhkjk -->

            <div class="col-12">
                <?php

    $sql = "SELECT * FROM `audio` WHERE id=58";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
       while ($row =mysqli_fetch_assoc($result)){
         ?>


                <div class="single-song-area mb-30 d-flex flex-wrap align-items-end">
                    <div class="song-thumbnail">
                        <img src="img/bg-img/russiaq.jpg" alt="" style="border-radius: 50%;">
                    </div>
                    <div class="song-play-area">
                        <div class="song-name">
                            <p>08. Main Hit Song</p>
                        </div>
                        <audio controls>
                            <source src="../uploadAudio/uploads/<?php echo $row['audio_url'];?>">
                        </audio>
                    </div>
                </div>

                <?php
         
       }
    }
    else{
        echo "No Found";
    }
    
    ?>
            </div>
            <!-- hgujhkjk -->

            <div class="col-12">
                <?php

    $sql = "SELECT * FROM `audio` WHERE id=59";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
       while ($row =mysqli_fetch_assoc($result)){
         ?>


                <div class="single-song-area mb-30 d-flex flex-wrap align-items-end">
                    <div class="song-thumbnail">
                        <img src="img/bg-img/russiaq.jpg" alt="" style="border-radius: 50%;">
                    </div>
                    <div class="song-play-area">
                        <div class="song-name">
                            <p>09. Main Hit Song</p>
                        </div>
                        <audio controls>
                            <source src="../uploadAudio/uploads/<?php echo $row['audio_url'];?>">
                        </audio>
                    </div>
                </div>

                <?php
         
       }
    }
    else{
        echo "No Found";
    }
    
    ?>
            </div>
            <!-- hgujhkjk -->

            <div class="col-12">
                <?php

    $sql = "SELECT * FROM `audio` WHERE id=60";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
       while ($row =mysqli_fetch_assoc($result)){
         ?>


                <div class="single-song-area mb-30 d-flex flex-wrap align-items-end">
                    <div class="song-thumbnail">
                        <img src="img/bg-img/russiaq.jpg" alt="" style="border-radius: 50%;">
                    </div>
                    <div class="song-play-area">
                        <div class="song-name">
                            <p>10. Main Hit Song</p>
                        </div>
                        <audio controls>
                            <source src="../uploadAudio/uploads/<?php echo $row['audio_url'];?>">
                        </audio>
                    </div>
                </div>

                <?php
       }
    }
    else{
        echo "No Found";
    }
    ?>
            </div>


        </div>
    </div>
</div>
<!-- ##### Song Area End ##### -->




<?php
include('footer.php');
?>