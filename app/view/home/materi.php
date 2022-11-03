<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Program ID - Materi</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <!-- Custom fonts for this template-->
    <link href="../public/asset/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

        <link href="../../../public/asset/css/style.css" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="../../../public/asset/css/sb-admin-2.css" rel="stylesheet">

</head>

<body id="page-top">
    <nav class="materi-navbar navbar navbar-expand-lg navbar-dark bg-">
        <div class="container">
            <a class="navbar-brand" href="#">ProgramID</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="materi.php">Tutorial</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="category.php">Category</a>
                </li>
                <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                    Category
                    </a>
                    <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li> -->
                <!-- <li class="nav-item">
                    <a class="nav-link disabled">Disabled</a>
                </li> -->
                </ul>
                <form class="form-inline my-2 my-lg-0" action="../auth/login.php">
                <!-- <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"> -->
                <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Sign In</button>
                </form>
            </div>
        </div>
    </nav>

    <nav class="navbar-category navbar navbar-expand navbar-light topbar static-top shadow position-sticky sticky-top">

        <!-- Sidebar Toggle (Topbar) -->
        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
        </button>
        
        <div class="navbar-brand nav-cat-mat">
            <a href="" class="mr-4"><i class="bi bi-house-door-fill"></i></a>
            <a class="" href="#">HTML</a>
            <a href="">CSS</a>
            <a href="">JavaScript</a>
        </div>

        
        <!-- Topbar Navbar -->
        <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
                <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-search fa-fw"></i>
                </a>
                <!-- Dropdown - Messages -->
                <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                    aria-labelledby="searchDropdown">
                    <form class="form-inline mr-auto w-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small"
                                placeholder="Search for..." aria-label="Search"
                                aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-moon"></i>
                    <!-- <img class="img-profile rounded-circle" src="../../public/asset/img/undraw_profile.svg"> -->
                </a>
            </li>

        </ul>

    </nav>

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="sidebar-materi navbar-nav navbar-light bg-white sidebar sidebar-light sticky-top"  id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">HTML Tutorial</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>HTML Heading</span></a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>HTML Attribute</span></a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>HTML Image</span></a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>HTML Table</span></a>
            </li>

    
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content" class=" bg-light">

                <!-- Topbar -->
                
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-materi container-fluid col-11 mt-5 bg-white p-4 mb-5 rounded">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">HTML Heading</h1>
                        <a href="#" class="button-next d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Next > </a>
                    </div>

                    <!-- Content Row -->
                    <div class="">
                        <p>Bayangkan jika artikel yang sedang kamu baca ini tidak memiliki judul. Pasti tidak akan menarik! Tidak ada judul dan juga sub judul. Kamu bisa saja akan bingung membacanya.</p>
                        <p>Karena itu..</p>
                        <p>Kita membutuhkan judul, atau dalam HTML dikenal dengan Heading.
                        Apa itu heading? dan bagaimana cara membuatnya? Ayo kita bahas!</p>
    
                        <h3>Apa itu Heading?</h3>
                        <p>Heading adalah sebuah judul yang biasanya diberikan pada halaman atau beberapa bagian dari artikel. Jika kamu sering menulis artikel, pasti ini tidak asing buatmu.</p>
                        <p>Lantas, bagaimana cara membuat Heading?</p>
                        <p>Berikut ini cara membuat heading..</p>
                        

                        <h3>Cara Membuat Heading pada HTML</h3>
                        <p>Judul pada HTML dapat kita buat dengan tag <code>&lt;h1&gt;</code> sampai <code>&lt;h6&gt;</code>. Tag <code>&lt;h1&gt;</code> digunakan pada judul level pertama. Lalu tag lainnya digunakan pada sub heading atau level berikutnya. Masing-masing judul akan ditampilkan dengan ukuran teks yang bebeda. Tag <code>&lt;h1&gt;</code> adalah yang paling besar, dan tag <code>&lt;h6&gt;</code> paling kecil.</p>
                        <p>Tag <code>&lt;h1&gt;</code> biasanya dipakai pada judul artikel. Lalu tag <code>&lt;h2&gt;</code>, <code>&lt;h3&gt;</code>, <code>&lt;h4&gt;</code>, <code>&lt;h5&gt;</code>, dan <code>&lt;h6&gt;</code> dipakai pada sub judul atau sub heading.</p>

                        <h3>Urutan Penulisan Heading</h3>
                        <p>Apakah boleh menulis judul yang tidak urut? Maksudnya.. seperti menggunakan <code>&lt;h6&gt;</code> untuk judul awal, lalu berikutnya <code>&lt;h3&gt;</code> untuk sub judul. Ini boleh-boleh saja, tapi kurang bagus untuk SEO. 1 Penulisan judul yang bagus adalah judul yang mengikuti levelnya.</p>

                        <h3>Atribut untuk Heading</h3>
                        <p>Heading tidak memiliki atribut khusus. Ia biasanya menggunakan atribut globel.</p>
                        <p>Contohnya : </p>
                        <ul>
                            <li>"id" untuk memberikan nama id unik. Biasanya ini akan digunakan oleh link, CSS, dan Javascript;</li>
                            <li>class untuk memberikan nama class yang akan dipakai oleh CSS;</li>
                            <li>style untuk memberikan kode css secara langsung;</li>
                            <li>title untuk menambahkan informasi tambahan;</li>
                        </ul>

                        <h3>Perbedaan Heading dengan Title dan Header</h3>
                        <p>Meskipun sama-sama digunakan untuk urusan judul, tapi tiga elemen ini berbeda.</p>
                        <ul>
                            <li>Heading adalah judul untuk artikel dan bagian artikel yang dibuat dengan tag <code>&lt;h1&gt;</code> sampai <code>&lt;h6&gt;</code></li>
                            <li>Title adalah judul dari web yang dibuat dengan tag <code>&lt;title&gt;</code></li>
                            <li>Header adalah bagian kepala (kop) pada web yang dibuat dengan tag <code>&lt;header&gt;</code></li>
                        </ul>
                        <p>Tag <code>&lt;title&gt;</code> untuk judul yang ditampilkan di web beowser. Tag <code>&lt;header&gt;</code> sama seperti kop surat. Lalu heading <code>&lt;h1&gt;</code> sampai <code>&lt;h6&gt;</code> menjadi judul untuk artikel.</p>

                        <h3>Heading Style</h3>
                        <p>Heading Style adalah style CSS yang diberikan pada heading agar terlihat menarik. Berikut ini beberapa style yang sering digunakan pada heading:</p>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="footer-materi sticky-footer">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../../public/asset/vendor/jquery/jquery.min.js"></script>
    <script src="../../public/asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../../public/asset/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../../public/asset/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../../public/asset/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../../public/asset/js/demo/chart-area-demo.js"></script>
    <script src="../../public/asset/js/demo/chart-pie-demo.js"></script>
    <script src="../../public/asset/js/script.js"></script>


</body>

</html>