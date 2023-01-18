<?php
include('koneksi.php');

if (isset($_SESSION['login_user'])) {
    header("location: about.php");
}
?>

<!doctype html>
<html>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Snippet - BBBootstrap</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css' rel='stylesheet'>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/styles.css">
    </link>
</head>



<body className='snippet-body' id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <div class="header_img"> <img src="https://i.imgur.com/hczKIze.jpg" alt=""> </div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div>
            <a href="#" class="nav_logo">
          <img src="images/logo_applegenic2.png" width=25 style="margin-top: -10px;" alt="">
          <span class="nav_logo-name">Applegenic</span>
        </a>
                <div class="nav_list">
                    <a href="index3.php" class="nav_link ">
                        <i class="bx bx-grid-alt nav_icon"></i>
                        <span class="nav_name">Dashboard</span>
                    </a>
                    <a href="p2_diagnose.php" class="nav_link active">
                        <i class="bx bx-user nav_icon"></i> <span class="nav_name">Diagnose</span>
                    </a>
                    <a href="p3_disease.php" class="nav_link">
                        <i class="bx bx-message-square-detail nav_icon"></i>
                        <span class="nav_name">Diseases</span>
                    </a>
                    <a href="p4_credits.php" class="nav_link">
                        <i class="bx bx-bookmark nav_icon"></i>
                        <span class="nav_name">Credits</span>
                    </a>
                    <!-- <a href="#" class="nav_link">
            <i class="bx bx-folder nav_icon"></i>
            <span class="nav_name">Files</span>
        </a>
        <a href="#" class="nav_link">
            <i class="bx bx-bar-chart-alt-2 nav_icon"></i>
            <span class="nav_name">Stats</span>
        </a> -->
                </div>
            </div>
            <a href="#" class="nav_link">
                <i class="bx bx-log-out nav_icon"></i> <span class="nav_name">SignOut</span>
            </a>
        </nav>

    </div>
    <!--Container Main start-->
    <div id="p1_dash" class=" bg-light p-5">
        <div class="">
            <div class="">

                <div class="">
                    <h2 class="text-center">DETAIL DIAGNOSA</h2>
                    <div class="form-group" method="POST">
                        <br><label class="control-label col-sm-2">ID :</label>
                        <div class="col-sm-10">
                            <?php
                            $tampil = "SELECT * FROM penyakit where idpenyakit='" . $_GET['id'] . "'";
                            $sql = mysqli_query($konek_db, $tampil);
                            while ($data = mysqli_fetch_array($sql)) {
                                echo "<input type='text'  class='form-control' id='idpenyakit' readonly value='" . $data['idpenyakit'] . "'><br>";
                            }
                            ?>
                        </div>
                    </div>
                    <div class="form-group" method="POST">
                        <br><label class="control-label col-sm-2">NAMA :</label>
                        <div class="col-sm-10">
                            <?php
                            $tampil = "SELECT * FROM penyakit where idpenyakit='" . $_GET['id'] . "'";
                            $sql = mysqli_query($konek_db, $tampil);
                            while ($data = mysqli_fetch_array($sql)) {
                                echo "<input type='text'  class='form-control' id='namapenyakit' readonly value='" . $data['namapenyakit'] . "'><br>";
                            }
                            ?>
                        </div>
                    </div>
                    <div class="form-group" method="POST">
                        <br><label class="control-label col-sm-2">JENIS :</label>
                        <div class="col-sm-10">
                            <?php
                            $tampil = "SELECT * FROM penyakit where idpenyakit='" . $_GET['id'] . "'";
                            $sql = mysqli_query($konek_db, $tampil);
                            while ($data = mysqli_fetch_array($sql)) {
                                echo "<input type='text'  class='form-control' id='jenistanaman' readonly value='" . $data['jenistanaman'] . "'><br>";
                            }
                            ?>
                        </div>
                    </div>
                    <div class="form-group" method="POST">
                        <br><label class="control-label col-sm-2">GEJALA :</label>
                        <div class="col-sm-10">
                            <?php
                            $tampil = "SELECT * FROM penyakit p, basispengetahuan b where p.idpenyakit='" . $_GET['id'] . "' and p.namapenyakit=b.namapenyakit";
                            $sql = mysqli_query($konek_db, $tampil);
                            while ($data = mysqli_fetch_array($sql)) {
                                echo "<input type='text'  class='form-control' id='jenistanaman' readonly value='" . $data['gejala'] . "'><br>";
                            }
                            ?>
                        </div>
                    </div>
                    <div class="form-group" method="POST">
                        <br><label class="control-label col-sm-2">KULTUR TEKNIS :</label><br>
                        <div class="col-sm-10">
                            <?php
                            $tampil = "SELECT * FROM penyakit where idpenyakit='" . $_GET['id'] . "'";
                            $sql = mysqli_query($konek_db, $tampil);
                            while ($data = mysqli_fetch_array($sql)) {
                                echo "<textarea  rows='8' class='form-control' id='penanganan'  readonly>" . $data['kulturteknis'] . "</textarea><br>";
                            }
                            ?>
                        </div>
                    </div>
                    <div class="form-group" method="POST">
                        <br><label class="control-label col-sm-2">FISIK MEKANIS :</label><br>
                        <div class="col-sm-10">
                            <?php
                            $tampil = "SELECT * FROM penyakit where idpenyakit='" . $_GET['id'] . "'";
                            $sql = mysqli_query($konek_db, $tampil);
                            while ($data = mysqli_fetch_array($sql)) {
                                echo "<textarea rows='8' class='form-control' id='penanganan' readonly>" . $data['fisikmekanis'] . "</textarea><br>";
                            }
                            ?>
                        </div>
                    </div>
                    <div class="form-group" method="POST">
                        <br><label class="control-label col-sm-2">KIMIAWI :</label><br>
                        <div class="col-sm-10">
                            <?php
                            $tampil = "SELECT * FROM penyakit where idpenyakit='" . $_GET['id'] . "'";
                            $sql = mysqli_query($konek_db, $tampil);
                            while ($data = mysqli_fetch_array($sql)) {
                                echo "<textarea  rows='8' class='form-control' id='penanganan' readonly>" . $data['kimiawi'] . "</textarea><br>";
                            }
                            ?>
                        </div>
                    </div>
                    <div class="form-group" method="POST">
                        <br><label class="control-label col-sm-2">HAYATI :</label><br>
                        <div class="col-sm-10">
                            <?php
                            $tampil = "SELECT * FROM penyakit where idpenyakit='" . $_GET['id'] . "'";
                            $sql = mysqli_query($konek_db, $tampil);
                            while ($data = mysqli_fetch_array($sql)) {
                                echo "<textarea rows='8' class='form-control' id='penanganan' readonly>" . $data['hayati'] . "</textarea><br>";
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Footer -->
<?php  include("_fw/footer-main.php") ?>
  <!-- Footer -->
    <!--Container Main end-->
    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js'></script>
    <script type='text/javascript'>
        document.addEventListener("DOMContentLoaded", function(event) {

            const showNavbar = (toggleId, navId, bodyId, headerId) => {
                const toggle = document.getElementById(toggleId),
                    nav = document.getElementById(navId),
                    bodypd = document.getElementById(bodyId),
                    headerpd = document.getElementById(headerId)

                // Validate that all variables exist
                if (toggle && nav && bodypd && headerpd) {
                    toggle.addEventListener('click', () => {
                        // show navbar
                        nav.classList.toggle('show')
                        // change icon
                        toggle.classList.toggle('bx-x')
                        // add padding to body
                        bodypd.classList.toggle('body-pd')
                        // add padding to header
                        headerpd.classList.toggle('body-pd')
                    })
                }
            }

            showNavbar('header-toggle', 'nav-bar', 'body-pd', 'header')

            /*===== LINK ACTIVE =====*/
            const linkColor = document.querySelectorAll('.nav_link')

            function colorLink() {
                if (linkColor) {
                    linkColor.forEach(l => l.classList.remove('active'))
                    this.classList.add('active')
                }
            }
            linkColor.forEach(l => l.addEventListener('click', colorLink))

            // Your code to run since DOM is loaded and ready
        });
    </script>
    <script type='text/javascript'>
        var myLink = document.querySelector('a[href="#"]');
        myLink.addEventListener('click', function(e) {
            e.preventDefault();
        });
    </script>
    <script>
        function dashNav() {
            var x = document.getElementById("p1_dash");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }
    </script>

</body>

</html>