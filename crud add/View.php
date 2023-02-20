<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
<?php 
		 include "connect.php";
		 $sql = "SELECT * FROM audio ORDER BY id DESC";
		 $res = mysqli_query($conn, $sql);

		 if (mysqli_num_rows($res) > 0) {
		 	
		 ?>
            <?php 
	     }
	
		 ?>

  <br> <br>
    <a href="Add Audio.php" class="btn btn-success">Music Add</a>
    <table class="table table-bordered">
        <br><br>
        <tr>
            <th>ID</th>
            <th>AUDIOS</th>
        </tr>
        <?php
        while ($audio = mysqli_fetch_assoc($res)) { 
            ?>

            <tr>
                <td><?php echo $audio['id']; ?></td>
                <td><?php echo $audio['audio_url']; ?></td>

                <td>
                <a href="Deleted.php"class="btn btn-danger">Music Deleted</a>
            </tr>
            <?php } ?>
    </table>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>