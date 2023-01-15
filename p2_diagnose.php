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
                <a href="page1.php" class="nav_logo">
                    <i class="bx bx-layer nav_logo-icon"></i>
                    <span class="nav_logo-name">BBBootstrap</span>
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

                <div class=" ">

                    <h2>DIAGNOSA PENYAKIT</h2>

                    <form id="form1" name="form1" method="post" action="p2_diagnose.php">
                        <label for="sel1">Jenis Tanaman</label>
                        <select class="form-control" name="tanaman" onChange='this.form.submit();'>
                            <option>Tanaman</option>

                            <option>Apel</option>
                        </select>
                    </form>
                    <br>
                    <div class="" style="font-size:18px; font-weight:normal;">
                        <form id="form2" name="form2" method="post" action="p2_diagnose.php">
                            <?php
                            if (isset($_POST['tanaman']))
                                if ($_POST['tanaman'] != "jenistanaman") {
                                    echo  "<br><label style='font-weight: bold;'>AKAR</label><br>";
                                    $tampil = "select * from gejala where daerah='akar' and jenistanaman= \"" . $_POST['tanaman'] . "\"";
                                    $query = mysqli_query($konek_db, $tampil);
                                    while ($hasil = mysqli_fetch_array($query)) {
                                        echo "<input class='form-check-input' type='checkbox' value='" . $hasil['gejala'] . "' name='gejala[]' /> " . $hasil['gejala'] . "<br>";
                                    }
                                }
                            ?>
                            <?php
                            if (isset($_POST['tanaman']))
                                if ($_POST['tanaman'] != "jenistanaman") {
                                    echo  "<br><label style='font-weight: bold;'>BATANG</label><br>";
                                    $tampil = "select * from gejala where daerah='batang' and jenistanaman= \"" . $_POST['tanaman'] . "\"";
                                    $query = mysqli_query($konek_db, $tampil);
                                    while ($hasil = mysqli_fetch_array($query)) {
                                        echo "<input class='form-check-input' type='checkbox' value='" . $hasil['gejala'] . "' name='gejala[]' /> " . $hasil['gejala'] . "<br>";
                                    }
                                }
                            ?>

                            <?php
                            if (isset($_POST['tanaman']))
                                if ($_POST['tanaman'] != "jenistanaman") {
                                    echo  "<br><label style='font-weight: bold;'>DAUN</label><br>";
                                    $tampil = "select * from gejala where daerah='daun' and jenistanaman= \"" . $_POST['tanaman'] . "\"";
                                    $query = mysqli_query($konek_db, $tampil);
                                    while ($hasil = mysqli_fetch_array($query)) {
                                        echo "<input class='form-check-input' type='checkbox' value='" . $hasil['gejala'] . "' name='gejala[]' /> " . $hasil['gejala'] . "<br>";
                                    }
                                }
                            ?>
                            <?php
                            if (isset($_POST['tanaman']))
                                if ($_POST['tanaman'] != "jenistanaman") {
                                    echo  "<br><label style='font-weight: bold;'>BUAH/UMBI</label><br>";
                                    $tampil = "select * from gejala where daerah='Buah/Umbi' and jenistanaman= \"" . $_POST['tanaman'] . "\"";
                                    $query = mysqli_query($konek_db, $tampil);
                                    while ($hasil = mysqli_fetch_array($query)) {
                                        echo "<input class='form-check-input' type='checkbox' value='" . $hasil['gejala'] . "' name='gejala[]' /> " . $hasil['gejala'] . "<br>";
                                    }
                                }
                            ?>
                            <?php
                            if (isset($_POST['tanaman']))
                                if ($_POST['tanaman'] != "jenistanaman") {
                                    echo  "<br><label style='font-weight: bold;'>BUNGA</label><br>";
                                    $tampil = "select * from gejala where daerah='bunga' and jenistanaman= \"" . $_POST['tanaman'] . "\"";
                                    $query = mysqli_query($konek_db, $tampil);
                                    while ($hasil = mysqli_fetch_array($query)) {
                                        echo "<input class='form-check-input' type='checkbox' value='" . $hasil['gejala'] . "' name='gejala[]' /> " . $hasil['gejala'] . "<br>";
                                    }
                                }
                            ?>
                            <?php
                            if (isset($_POST['tanaman']))
                                if ($_POST['tanaman'] != "jenistanaman") {
                                    echo  "<br><label style='font-weight: bold;'>BIJI</label><br>";
                                    $tampil = "select * from gejala where daerah='biji' and jenistanaman= \"" . $_POST['tanaman'] . "\"";
                                    $query = mysqli_query($konek_db, $tampil);
                                    while ($hasil = mysqli_fetch_array($query)) {
                                        echo "<input class='form-check-input' type='checkbox' value='" . $hasil['gejala'] . "' name='gejala[]' /> " . $hasil['gejala'] . "<br>";
                                    }
                                }
                            ?>

                            <br>
                            <button type="submit" name="submit" onclick="return checkDiagnosa()" class="btn btn-primary">CEK PENYAKIT</button><br><br>
                            <div class="panel panel-info">
                                <div class="panel-heading">HASIL DIAGNOSA</div>
                                <div class="panel-body">
                                    <div class="box-body table-responsive">
                                        <table id="example1" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>NO</th>
                                                    <th>ID PENYAKIT</th>
                                                    <th>Nama Penyakit</th>
                                                    <th>Jenis Tanaman</th>
                                                    <th>Detail</th>
                                                </tr>
                                            </thead>
                                            <?php
                                            if (isset($_POST['submit'])) {
                                                $gejala = $_POST['gejala'];
                                                $jumlah_dipilih = count($gejala);
                                                for ($x = 0; $x < $jumlah_dipilih; $x++) {
                                                    $tampil = "select DISTINCT p.idpenyakit, p.namapenyakit, p.jenistanaman from basispengetahuan b, penyakit p where b.gejala='$gejala[$x]' and p.namapenyakit=b.namapenyakit group by namapenyakit";
                                                    $result = mysqli_query($konek_db, $tampil);
                                                    $hasil  = mysqli_fetch_array($result);
                                                }
                                                echo "
                           <tr>  
        			             <td>" . $x . "</td>
                                 <td>" . $hasil['idpenyakit'] . "</td>
					             <td>" . $hasil['namapenyakit'] . "</td>  
                                 <td>" . $hasil['jenistanaman'] . "</td> 
                                 <td><a href=\"p2_diagnose_result.php?id=" . $hasil['idpenyakit'] . "\"><i class='fa-solid fa-magnifying-glass'></i></a></td>
        		          </tr>   
                               
                               ";
                                            }

                                            ?>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

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