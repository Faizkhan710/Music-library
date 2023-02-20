
<?php
include('header.php');
?>

    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img bg-overlay" style="background-image: url(https://th.bing.com/th/id/R.0dc1eb6fbdaa3179754675f5629defce?rik=9vqWXVrsLaOdOw&riu=http%3a%2f%2fwww.ottawaspecialevents.com%2fimages%2fimg%2fportfolio%2fshow-design.png&ehk=PWeUTSoFLMG1wYJtMifd5JCg1ZtuyoZgPQfI6HDJiFY%3d&risl=&pid=ImgRaw&r=0);">
        <div class="bradcumbContent">
            <p>See what’s new</p>
            <h2>SIgnup</h2>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Login Area Start ##### -->
    <section class="login-area section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <div class="login-content">
                        <h3>Welcome!</h3>
                        <!-- Login Form -->
                        <div class="login-form">
                            <form method="POST">
                            <div class="form-group">
                                    <label for="exampleInputEmail1">Enter Name</label>
                                    <input type="text" class="form-control" name="txtName" placeholder="Enter Name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="text" class="form-control" name="txtEmail" aria-describedby="emailHelp" placeholder="Enter E-mail">

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="text" class="form-control" name="txtPassword" placeholder="Password">
                                </div>
                                <button type="submit" class="btn oneMusic-btn mt-30" value="submit" name="btnAdd">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php
    include('connect.php');

    if(isset($_POST['btnAdd']))
    {
        $name=$_POST['txtName'];
        $email=$_POST['txtEmail'];
        $pass=$_POST['txtPassword'];

        $sql = "INSERT INTO `signup`(`Enter_Name`, `Email_Address`, `Password`)
        VALUES ('$name', '$email', '$pass')";

        if ($conn->query($sql) == TRUE)
        {
          /*   echo "<h2><b>Message send!</b></h2>"; */
        }
        else
        {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }


    ?>

    <!-- ##### Login Area End ##### -->

    <?php
include('footer.php');
?>