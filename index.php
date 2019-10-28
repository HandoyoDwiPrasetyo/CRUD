<?php 
    session_start();
    if (!isset($_SESSION["login"])) {
        header("Location: login.php");
        exit;
    }

    require 'access.php';

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Vegetables Data</title>
    
        <meta name="description" content="">
        <link rel="stylesheet" type="text/css" href="style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/fontAwesome.css">
        <link rel="stylesheet" href="css/light-box.css">
        <link rel="stylesheet" href="css/owl-carousel.css">
        <link rel="stylesheet" href="css/templatemo-style.css">
        <link rel="stylesheet" href="css2/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>

<body>



        <header class="nav-down responsive-nav hidden-lg hidden-md">
            <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!--/.navbar-header-->
            <div id="main-nav" class="collapse navbar-collapse">
                <nav>
                    <ul class="nav navbar-nav">
                        <li><a href="#top">Home</a></li>
                        <li><a href="#featured">Many of Vegetables</a></li>
                        <li><a href="#projects">Form Vegetables</a></li>
                        <li><a href="#video">Table Vegetables</a></li>
                        <li><a href="#blog">Edit Vegetables</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <div class="sidebar-navigation hidde-sm hidden-xs">
            <div class="logo">
                <a href="#">Vege<em>tables</em></a>
            </div>
            <nav>
                <ul>
                    <li>
                        <a href="#top">
                            <span class="rect"></span>
                            <span class="circle"></span>
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="#featured">
                            <span class="rect"></span>
                            <span class="circle"></span>
                            Many of Vegetables
                        </a>
                    </li>
                    <li>
                        <a href="#projects">
                            <span class="rect"></span>
                            <span class="circle"></span>
                            Form Vegetables
                        </a>
                    </li>
                    <li>
                        <a href="#video">
                            <span class="rect"></span>
                            <span class="circle"></span>
                            Table Vegetables
                        </a>
                    </li>
                    <li>
                      <a href="#blog">
                        <span class="rect"></span>
                        <span class="circle"></span>
                        Edit Vegetables
                      </a>
                    </li>
                </ul>
            </nav>
            <ul class="social-icons">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-rss"></i></a></li>
                <li><a href="#"><i class="fa fa-behance"></i></a></li>
            </ul>
        </div>

        <div class="slider">
            <div class="Modern-Slider content-section" id="top">
                <!-- Item -->
                <img src="img/sayuran.jpg">
                <!-- // Item -->
            </div>
        </div>

        <div class="page-content">
            <section id="featured" class="content-section">
                <div class="section-heading">
                    <h1>Macam<br><em>Sayuran</em></h1>
                </div>
                <div class="section-content">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="image">
                                <img src="img/bayam.jpg" alt="">
                            </div>
                            <div class="text-content">
                                <h4>Bayam</h4>
                                <p>#1 Bayam memiliki serat yang tinggi, selain itu bayam marupakan sumber zat besi yang baik untuk darah. Bayam juga mengandung lutein yang berfungsi menjaga kesehatan mata kita. Vitamin dalam bayam juga bermacam, ada vitamin A, C, K, dan juga folat.</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="image">
                                <img src="img/brokoli.jpg" alt="">
                            </div>
                            <div class="text-content">
                                <h4>Brokoli</h4>
                                <p>#2 Brokoli ternyata berasal dari Italia, kandungan vitamin C di dalamnya sangat baik untuk tubuh kita. Nggak cuma kaya serat, vitamin, dan mineral saja, tapi brokoli juga mengandung antioksidan yaitu sulforaphane dan lutein yang baik untuk menurunkan risiko kanker. Brokoli juga dipercaya bermanfaat untuk kesehatan jantung..</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="image">
                                <img src="img/buncis.jpg" alt="">
                            </div>
                            <div class="text-content">
                                <h4>Buncis</h4>
                                <p>#3 Kalau brokoli dari Itali, buncis berasal dari Peru. Buncis merupakan sayuran banyak mengandung vitamin A, C, dan K, serta mengandung folat, zat besi, kalium, mangan, dan serat.</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="image">
                                <img src="img/daun-singkong.jpg" alt="">
                            </div>
                            <div class="text-content">
                                <h4>Daun Singkong</h4>
                                <p>#4 Daun Singkong terdapat vitamin A dan C. Jika dibandingkan dengan bayam, daun singkong memiliki kandungan zat besi yang setara. Bahkan, kandungan protein daun singkong empat kali lipat dan vitamin A dua kali lipat dari bayam.</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="image">
                                <img src="img/kankung.png" alt="">
                            </div>
                            <div class="text-content">
                                <h4>Kankung</h4>
                                <p>#5 Vitamin B kompleks yang ada pada kangkung dapat meningkatkan hormon yang dapat menciptakan suasana nyaman, mungkin ini yang bikin kita jadi ngantuk. Mineral juga ditemukan dalam kangkung, meliputi kalium, fosfor dan kalsium.</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="image">
                                <img src="img/pak-choy.jpg" alt="">
                            </div>
                            <div class="text-content">
                                <h4>Pak Choy</h4>
                                <p>#6 Pak choy atau bok choy sering disebut sendok sup, mungkin karena bentuk daunnya yang mirip seperti sendok sup. Sayuran ini termasuk jenis kubis-kubisan yang kaya vitamin A, C, D dan folat.</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="image">
                                <img src="img/pare.jpg" alt="">
                            </div>
                            <div class="text-content">
                                <h4>Pare</h4>
                                <p>#7 Pare ini merupakan sayuran yang rasanya pahit, tapi penggemarnya juga lumayan banyak. Pare mengandung serat yang tinggi, selain itu juga ada kalsium, kalium, zat besi, vitamin C dan vitamin A.</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="image">
                                <img src="img/sawi.jpg" alt="">
                            </div>
                            <div class="text-content">
                                <h4>Sawi</h4>
                                <p>#8 Kalau makan mie ayam biasanya ada sayur yang satu ini, namanya sawi. Kandungan mineral dan vitamin dalam sawi cukup tinggi. Kandungan vitamin C dan E, serta karoten dan glukosinolat dalam sawi berfungsi sebagai antioksidan yang baik untuk tubuh kita.</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="image">
                                <img src="img/seledri.jpg" alt="">
                            </div>
                            <div class="text-content">
                                <h4>Seledri</h4>
                                <p>#9 Seledri adalah sumber mineral, yaitu kalsium, zat besi, kalium. Selain mineral, seledri juga mengandung vitamin A dan C. Komponen aktif bernama phthalides dalam seledri berguna untuk menurunkan tekanan darah. Seledri juga memiliki komponen aktif lain yaitu coumarin dan acetylenics yang bisa mencegah perkembangan sel kanker.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="projects" class="content-section">
                <div class="section-heading">
                    <h1>Input<br><em>Vegetables</em></h1>
                    <p>Manfaat sayur sayuran secara garis besar adalah sumber serat, vitamin, dan mineral yang cukup baik bagi tubuh dan kesehatan manusia. 
                    <br></p>
                </div>
                    <form action="access.php" method="POST">
                      <table>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text">Nama Sayuran</span>
                          </div>
                          <input class="form-control" aria-label="With textarea" type="text" name="nama" placeholder="Masukkan Nama Sayuran">
                        </div>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text">Berat</span>
                          </div>
                          <input class="form-control" aria-label="With textarea" type="text" name="berat" placeholder="Masukkan Berat Sayuran">
                        </div>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text">Jumlah</span>
                          </div>
                          <input class="form-control" aria-label="With textarea" type="text" name="jumlah" placeholder="Masukkan Jumlah Sayuran">
                        </div>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text">Harga</span>
                          </div>
                          <input class="form-control" aria-label="With textarea" type="text" name="harga" placeholder="Masukkan Harga Sayuran">
                        </div>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text">Tanggal Pembelian</span>
                          </div>
                          <input class="form-control" aria-label="With textarea" type="date" name="tanggal" placeholder="Masukkan Tanggal Pembelian">
                        </div>
                         <label><input type="submit" name="kirim"></label>
                      </table>
                    </form>
            </section>

            <section id="video" class="content-section">
                <div class="section-heading">
                    <h1>Table<br><em>Vegetables</em></h1>
                    <p>Ada banyak jenis sayuran yang ada di Indonesia yang berkhasiat untuk meningkatkan kesehatan dan metabolisme tubuh. 
                    <br></p>
                </div>
                <div class="section-content">
                    <?php
                        $connect = mysqli_connect('localhost', 'root', '', 'pasar');
                        $halaman = 5;
                        $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
                        $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
                        $result = mysqli_query($connect, "SELECT * FROM sayuran");
                        $total = mysqli_num_rows($result);
                        $pages = ceil($total/$halaman);            
                        $query = mysqli_query($connect, "SELECT * FROM sayuran ORDER BY nama LIMIT $mulai, $halaman")or die(mysql_error);
                        $no =$mulai+1; 
                    ?>
                    <?php for ($i=1; $i<=$pages ; $i++){ ?>
                    <li class="colku"><a class="colka" href="?halaman=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                    <?php 
                        }
                    ?>
                </div>  
                <table class="table table-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Sayuran</th>
                    <th scope="col">Berat</th>
                    <th scope="col">Jumlah </th>
                    <th scope="col">Harga</th>
                    <th scope="col">Tanggal</th>
                </tr>
                <tbody>
                <?php while ($row = mysqli_fetch_array($query)) { ?>
                    <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $row['nama']?></td>
                    <td><?= $row['berat']?></td>
                    <td><?= $row['jumlah']?></td>
                    <td><?= $row['harga']?></td>
                    <td><?= $row['tanggal']?></td>
                    <td>
                        <button type="button" class="button1"><a href="index.php?nama=<?= $row['nama'] ?>" class="">Edit</a></button>
                        <button type="button" class="button1"><a href="delete.php?nama=<?= $row['nama'] ?>" class="">Delete</a></button>
                        </td>
                        </tr>
                            
                     <?php } ?>
                </tbody>
                </table>
            </section>
            <section id="blog" class="content-section">
                <div class="section-heading">
                    <h1>Edit<br><em>Vegetables</em></h1>
                    <p>Manfaat sayur sayuran secara garis besar adalah sumber serat, vitamin, dan mineral yang cukup baik bagi tubuh dan kesehatan manusia. 
                    <br></p>
                </div>
                <?php 
                  $connect = mysqli_connect('localhost', 'root', '', 'pasar');
                  if (isset($_GET['nama'])) {
                  $nama = $_GET['nama'];
                  $query = mysqli_query($connect, "SELECT * FROM sayuran WHERE nama ='$nama'");
                  $row = mysqli_fetch_array($query);
                  }
            ?>
            <form action="edit_access.php" method="POST">
              <input type="hidden" name="id" value="<?= $row['id'] ?>">
              <label>Nama Sayuran</label><br><br>
              <input type="text" name="nama" value="<?= $row['nama'] ?>"><br><br>
              <label>Berat</label><br><br>
              <input type="text" name="berat" value="<?= $row['berat'] ?>"><br><br>
              <label>Jumlah</label><br><br>
              <input type="text" name="jumlah" value="<?= $row['jumlah'] ?>"><br><br>
              <label>Harga</label><br><br>
              <input type="text" name="harga" value="<?= $row['harga'] ?>"><br><br>
              <label>Tanggal Pembelian</label><br><br>
              <input type="date" name="tanggal" value="<?= $row['tanggal'] ?>"><br><br>
              <input type="submit" value="Save">
            </form>
            </section>
            <section id="contact" class="content-section">
            <section class="footer">
                <p>Copyright &copy; 2019. Design:Handoyo | Distribution: Hands</p>
              </section>
            </section>
        </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

    <script src="js/vendor/bootstrap.min.js"></script>
    
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

    <script>
        var didScroll;
        var lastScrollTop = 0;
        var delta = 5;
        var navbarHeight = $('header').outerHeight();

        $(window).scroll(function(event){
            didScroll = true;
        });

        setInterval(function() {
            if (didScroll) {
                hasScrolled();
                didScroll = false;
            }
        }, 250);

        function hasScrolled() {
            var st = $(this).scrollTop();
            
            // Make sure they scroll more than delta
            if(Math.abs(lastScrollTop - st) <= delta)
                return;
            
            // If they scrolled down and are past the navbar, add class .nav-up.
            // This is necessary so you never see what is "behind" the navbar.
            if (st > lastScrollTop && st > navbarHeight){
                // Scroll Down
                $('header').removeClass('nav-down').addClass('nav-up');
            } else {
                // Scroll Up
                if(st + $(window).height() < $(document).height()) {
                    $('header').removeClass('nav-up').addClass('nav-down');
                }
            }
            
            lastScrollTop = st;
        }
    </script>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>

</body>
</html>