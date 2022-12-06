
<nav class="materi-navbar navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand ml-5" href="#">ProgramID</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?= BASE_URL ?>/home/index">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= BASE_URL ?>/home/materi">Tutorial</a>
                </li>
                <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                    Dropdown
                    </a>
                    <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link" href="<?= BASE_URL ?>/home/category">Category</a>
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

    
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        
        <!-- End of Sidebar -->
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                
                <!-- End of Topbar -->
                <!-- Begin Page Content -->
        
                <div class="container-fluid d-flex flex-column" style="background-color: #142938;">
                    <!-- Page Heading -->
                    <div class="d-flex-column mt-2 mb-1 m-5">
                        <p class="text-success text-uppercase">Update</p>
                        <h1 class="text-white font-weight-bold">Mau belajar apa hari ini?</h1>
                        <h4 class="text-white mt-2">Belajar berdasarkan minat anda dengan web developer
                        <br> asli Indonesia.</h4>      
                    </div>
                </div>
                <div class="container-fluid d-flex flex-column" style="background-color: #142938;">
                 <!-- Content Row -->
                 <div class="row justify-content-between m-4"> 
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-6 col-md-6 mb-4">
                            <div class="card shadow h-100 py-2">
                                <div class="card-body">
                                <div class="col-auto">
                                            <img src="../../public/asset/img/programming-language 1.png" alt="" width="80">
                                        </div>
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="font-weight-bold text-primary mb-1">
                                                Web Programming</div>
                                            <p class="mb-0 font-weight-bold text-dark">Baca tutorial dasar web programming, mulai dari HTML, CSS, JS, PHP, MySQL, Codeigniter, React, dan masih banyak lagi</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-6 col-md-6 mb-4">
                            <div class="card shadow h-100 py-2">
                                <div class="card-body">
                                <div class="col-auto">
                                            <img src="../../public/asset/img/android.png" alt="" width="80">
                                        </div>
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="font-weight-bold text-primary mb-1">
                                                Android Programming</div>
                                            <p class="mb-0 font-weight-bold text-dark">Baca tutorial android programming mulai dari JAVA, XML, Android SDK, Android Studio, API, SQLite</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>   
                    </div>
                </div>
                   
            
                <div class="up d-flex-column mt-2 m-5" id="updatenewsletter">
                    <p class="text-success text-uppercase">Update</p>
                    <h4 class="text-dark mt-2"><strong>Apa saja yang baru disini?</strong></h4>

                 </div>
                    <div class="row justify-content-between mt-0 m-4">    
                        <div class="d-flex mb-1">
                            <!-- Illustrations -->
                            <div class="card shadow mb-2 mx-3">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Tutorial HTML dasar</h6>
                                </div>
                                <div class="card-body">
                                    <div class="text-center">
                                        <img class="img-fluid mt-3 mb-4" style="width: 25rem;"
                                            src="../../public/asset/img/html-sm.png" alt="...">
                                    </div>
                                    <p>Add some quality, svg illustrations to your project courtesy of unDraw, a
                                        constantly updated collection of beautiful!</p>
                                    <a target="_blank" rel="nofollow" href="https://undraw.co/">Baca selengkapnya! &rarr;</a>
                                </div>
                            </div>
                            <!-- Illustrations -->
                            <div class="card shadow mb-2 mx-3">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Tutorial PHP dasar</h6>
                                </div>
                                <div class="card-body">
                                    <div class="text-center">
                                        <img class="img-fluid mt-3 mb-4" style="width: 25rem;"
                                            src="../../public/asset/img/php-sm.png" alt="...">
                                    </div>
                                    <p>Add some quality, svg illustrations to your project courtesy of unDraw, a
                                        constantly updated collection of beautiful!</p>
                                    <a target="_blank" rel="nofollow" href="https://undraw.co/">Baca selengkapnya! &rarr;</a>
                                </div>
                            </div>
                            <!-- Illustrations -->
                            <div class=" card shadow mb-2 mx-3">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Tutorial JS dasar</h6>
                                </div>
                                <div class="card-body">
                                    <div class="text-center">
                                        <img class="img-fluid mt-3 mb-4" style="width: 25rem;"
                                            src="../../public/asset/img/javascript-sm.png" alt="...">
                                    </div>
                                    <p>Add some quality, svg illustrations to your project courtesy of unDraw, a
                                        constantly updated collection of beautiful!</p>
                                    <a target="_blank" rel="nofollow" href="https://undraw.co/">Baca selengkapnya! &rarr;</a>
                                </div>
                            </div>
        
                        </div>
                    </div> 
                    <div class="row justify-content-between m-3">    
                        <div class="d-flex mb-2">
                            <!-- Illustrations -->
                            <div class="card shadow mb-2 mx-3">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Tutorial Python dasar</h6>
                                </div>
                                <div class="card-body">
                                    <div class="text-center">
                                        <img class="img-fluid mt-3 mb-4" style="width: 25rem;"
                                            src="../../public/asset/img/python-sm.png" alt="...">
                                    </div>
                                    <p>Add some quality, svg illustrations to your project courtesy of unDraw, a
                                        constantly updated collection of beautiful!</p>
                                    <a target="_blank" rel="nofollow" href="https://undraw.co/">Baca selengkapnya! &rarr;</a>
                                </div>
                            </div>
                            <!-- Illustrations -->
                            <div class=" card shadow mb-2 mx-3">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Tutorial Reactjs dasar</h6>
                                </div>
                                <div class="card-body">
                                    <div class="text-center">
                                        <img class="img-fluid mt-3 mb-4" style="width: 25rem;"
                                            src="../../public/asset/img/reactjs-sm.png" alt="...">
                                    </div>
                                    <p>Add some quality, svg illustrations to your project courtesy of unDraw, a
                                        constantly updated collection of beautiful!</p>
                                    <a target="_blank" rel="nofollow" href="https://undraw.co/">Baca selengkapnya! &rarr;</a>
                                </div>
                            </div>
                            <!-- Illustrations -->
                            <div class=" card shadow mb-2 mx-3">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Tutorial Kotlin dengan Android Studio</h6>
                                </div>
                                <div class="card-body">
                                    <div class="text-center">
                                        <img class="img-fluid mt-3 mb-4" style="width: 25rem;"
                                            src="../../public/asset/img/kotlin-sm.png" alt="...">
                                    </div>
                                    <p>Add some quality, svg illustrations to your project courtesy of unDraw, a
                                        constantly updated collection of beautiful!</p>
                                    <a target="_blank" rel="nofollow" href="https://undraw.co/">Baca selengkapnya! &rarr;</a>
                                </div>
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