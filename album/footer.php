
    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <div class="container">
            <div class="row d-flex flex-wrap justify-content-center align-items-center">
                <div class="col-12 col-md-6">
                    <a href="#"><img src="img/core-img/" alt=""></a>
                    <p class="copywrite-text pt-5">
                            Copyright &copy;<script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | This template is made with 
                            <i class="fa-solid fa-heart"></i> by <a href="index.php">SoulKnight404</a>
                    </p>
                </div>

                <div class="col-12 col-md-6">
                    <div class="footer-nav">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Albums</a></li>
                            <li><a href="#">Events</a></li>
                            <li><a href="#">News</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- form validation  -->
    <script src="js/plugins/form_validation.js"></script>
    <script>
        $(document).ready(function () {
            $("#form").xvalidation({
                theme: "materialize"
            });
            $("#form").submit(function (evt) {
                evt.preventDefault();
                evt.stopPropagation();
                if ($("#form").data().xvalidation.methods.validate()) {
                    swal("Submitted!", "we will contact you shortly", "success");
                }
                return false;
            });
        });
    </script>
    <!-- Sweetalert js -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- font awesome js -->
    <script src="fonts/font-awesome.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</php>