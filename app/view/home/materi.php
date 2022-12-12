
    <nav class="navbar-category navbar navbar-expand navbar-light topbar static-top shadow">
    <div class="container-fluid">
        <!-- Sidebar Toggle (Topbar) -->
        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
        </button>
        
        <div class="navbar-brand nav-cat-mat">
            <a href="<?= BASE_URL ?>/home" class="mr-4"><i class="bi bi-house-door-fill"></i></a>
            <a class="" href="#">HTML</a>
            <a href="">CSS</a>
            <a href="">JavaScript</a>
        </div>

        
        <!-- Topbar Navbar -->
        <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS)
            <li class="nav-item dropdown no-arrow d-sm-none">
                <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-search fa-fw"></i>
                </a>
                <!-- Dropdown - Messages
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
            </li> -->

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="size-large-icon bi bi-person-circle"></i>
                    <!-- <img class="img-profile rounded-circle" src="../../public/asset/img/undraw_profile.svg"> -->
                </a>
            </li>

        </ul>
    </div>
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
                    <!-- <i class="fas fa-fw fa-tachometer-alt"></i> -->
                    <span>HTML Heading</span></a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="index.html">
                    <!-- <i class="fas fa-fw fa-tachometer-alt"></i> -->
                    <span>HTML Attribute</span></a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="index.html">
                    <!-- <i class="fas fa-fw fa-tachometer-alt"></i> -->
                    <span>HTML Image</span></a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="index.html">
                    <!-- <i class="fas fa-fw fa-tachometer-alt"></i> -->
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
            <div id="content" class=" bg-light ms-auto">

                <!-- Topbar -->
                
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-materi container-fluid col-md-11 mt-5 bg-white p-4 mb-5 rounded content-materi">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">HTML Heading</h1>
                        <a href="#" class="button-next d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Next > </a>
                        <!-- <a href="#" class="button-next d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Next > </a> -->
                    </div>

                    <!-- Content Row -->
                    <div class="">
                        <img src="https://www.malasngoding.com/wp-content/uploads/2015/12/Mengenal-Heading-Pada-HTML.png" alt="" class="mb-4 d-block w-100 mx-auto">
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
                        <h5>Heading dengan Garis Bawah</h5>
                        <p>Heading dengan garis bawa bisa kita buat dengan memanfaatkan tag &lt;hr&gt; dan juga CSS. Contoh :</p>
                        
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="footer-materi sticky-footer">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy;ProgramID 2022</span>
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
