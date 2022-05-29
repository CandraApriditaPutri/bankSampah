<html lang="en">
<head>
  <title>Dashboard</title>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Favicon -->
    <link rel="icon" href="<?php echo base_url().'assets/image/logo_bojonegoro.png';?>">
    
    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url().'assets/User/style.css';?>">
</head>   
<body>
      <?php $this->load->view('User/Template/navbar')?>
      
      <!-- ##### Hero Area Start ##### -->
      <section class="hero-area">
                <div class="hero-post-slides owl-carousel">

                    <!-- Single Hero Post -->
                    <div class="single-hero-post bg-overlay">
                        <!-- Post Image -->
                        <div class="slide-img bg-img" style="background-image: url(<?php echo base_url().'assets/User/img/bg-img/1.jpg';?>);"></div>
                        <div class="container h-100">
                            <div class="row h-100 align-items-center">
                                <div class="col-12">
                                    <!-- Post Content -->
                                    <div class="hero-slides-content text-center">
                                        <h2>Menjaga Lingkungan Agar tetap Sejuk</h2>
                                        <p>Jangan Lupa yaa :)</p>
                                        <!-- <div class="welcome-btn-group">
                                            <a href="#" class="btn alazea-btn mr-30">GET STARTED</a>
                                            <a href="#" class="btn alazea-btn active">CONTACT US</a>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Hero Post -->
                    <div class="single-hero-post bg-overlay">
                        <!-- Post Image -->
                        <div class="slide-img bg-img" style="background-image: url(<?php echo base_url().'assets/User/img/bg-img/2.jpg';?>);"></div>
                        <div class="container h-100">
                            <div class="row h-100 align-items-center">
                                <div class="col-12">
                                    <!-- Post Content -->
                                    <div class="hero-slides-content text-center">
                                        <h2>Hijaukan bumi kita! </h2>
                                        <p>Kurangi pembuangan sampah</p>
                                        <!-- <div class="welcome-btn-group">
                                            <a href="#" class="btn alazea-btn mr-30">GET STARTED</a>
                                            <a href="#" class="btn alazea-btn active">CONTACT US</a>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Service Area Start ##### -->
    <section class="our-services-area bg-gray section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading text-center">
                        <h2>Metode Yang Kita Gunakan</h2>
                        <p>Reduce, Reuse , Recycle</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-between">
                <div class="col-12 col-lg-5">
                    <div class="alazea-service-area mb-100">

                        <!-- Single Service Area -->
                        <div class="single-service-area d-flex align-items-center wow fadeInUp" data-wow-delay="100ms">
                            <!-- Icon -->
                            <div class="service-icon mr-30">
                                <img src="<?php echo base_url().'assets/User/img/bg-img/reduce_b.png';?>" alt="">
                            </div>
                            <!-- Content -->
                            <div class="service-content">
                                <h5>Reduce</h5>
                                <p><b>Reduce</b> berarti kita mengurangi penggunaan bahan-bahan yang bisa merusak lingkungan.</p>
                            </div>
                        </div>

                        <!-- Single Service Area -->
                        <div class="single-service-area d-flex align-items-center wow fadeInUp" data-wow-delay="300ms">
                            <!-- Icon -->
                            <div class="service-icon mr-30">
                                <img src="<?php echo base_url().'assets/User/img/bg-img/reuse_b.png';?>" alt="">
                            </div>
                            <!-- Content -->
                            <div class="service-content">
                                <h5>Reuse</h5>
                                <p><b>Reuse</b> sendiri berarti pemakaian kembali seperti contohnya memberikan baju-baju bekas anda ke yatim piatu.</p>
                            </div>
                        </div>

                        <!-- Single Service Area -->
                        <div class="single-service-area d-flex align-items-center wow fadeInUp" data-wow-delay="500ms">
                            <!-- Icon -->
                            <div class="service-icon mr-30">
                                <img src="<?php echo base_url().'assets/User/img/bg-img/recycle_b.png';?>" alt="">
                            </div>
                            <!-- Content -->
                            <div class="service-content">
                                <h5>Recycle</h5>
                                <p><b>Recycle</b> adalah mendaur ulang barang. Paling mudah adalah mendaur ulang sampah organik di rumah anda</p>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="alazea-video-area mb-100">
                        <img src="<?php echo base_url().'assets/User/img/bg-img/b_3r.jpg';?>" alt="3R">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Service Area End ##### -->

    <!-- ##### Team Area Start ##### -->
    <section class="team-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading text-center">
                        <h2>Pendiri Bank Sampah Bojonegoro</h2>
                        <p>Manajemen Informatika class 2E</p>
                    </div>
                </div>
            </div>

            <div class="row">

                <!-- Single Team Member Area -->
                <div class="col-10 col-sm-16 col-lg-4">
                    <div class="single-team-member text-center mb-100">
                        <!-- Team Member Thumb -->
                        <div class="team-member-thumb">
                            <img src="<?php echo base_url().'assets/image/p_alvira.JPG';?>" style="width:600px; height:400px;" alt="">
                            <!-- Social Info -->
                            <div class="team-member-social-info">
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <!-- Team Member Info -->
                        <div class="team-member-info mt-30">
                            <h5>Alvira Dewi Septyan</h5>
                            <p>2031710035</p>
                        </div>
                    </div>
                </div>

                <!-- Single Team Member Area -->
                <div class="col-10 col-sm-16 col-lg-4">
                    <div class="single-team-member text-center mb-100">
                        <!-- Team Member Thumb -->
                        <div class="team-member-thumb">
                            <img src="<?php echo base_url().'assets/image/p_candra.jpg';?>" style="width:600px; height:400px;" alt="">
                            <!-- Social Info -->
                            <div class="team-member-social-info">
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <!-- Team Member Info -->
                        <div class="team-member-info mt-30">
                            <h5>Candra Apridita Putri</h5>
                            <p>2031710048</p>
                        </div>
                    </div>
                </div>

                <!-- Single Team Member Area -->
                <div class="col-10 col-sm-16 col-lg-4">
                    <div class="single-team-member text-center mb-100">
                        <!-- Team Member Thumb -->
                        <div class="team-member-thumb">
                            <img src="<?php echo base_url().'assets/image/p_nissa.png';?>" style="width:600px; height:400px;" alt="">
                            <!-- Social Info -->
                            <div class="team-member-social-info">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <!-- Team Member Info -->
                        <div class="team-member-info mt-30">
                            <h5>Nissa Nursabrina</h5>
                            <p>2031710029</p>
                        </div>
                    </div>
                </div>
        </section>
        <!-- ##### Team Area End ##### -->
        <center><h4>Lokasi</h4></center>
    <br>
     <!-- ##### Contact Area Info Start ##### -->
     <div class="contact-area-info section-padding-0-100">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <!-- Contact Thumbnail -->
                <div class="col-12 col-md-20">
                    <div class="contact--thumbnail-center">
                        <div class="map-area mb-100">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.4650079791813!2d111.91947479999999!3d-7.187661200000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e77811d35282035%3A0xc52f173d50ea3739!2sJl.%20Mastoer%2C%20Banaran%20Kidul%2C%20Mojodeso%2C%20Kec.%20Kapas%2C%20Kabupaten%20Bojonegoro%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1653835390531!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Contact Area Info End ##### -->

        <?php $this->load->view('User/Template/footer')?>
</body>
    <!-- ##### All Javascript Files ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="<?php echo base_url().'assets/User/js/jquery/jquery-2.2.4.min.js ';?>"></script>
    <!-- Popper js -->
    <script src="<?php echo base_url().'assets/User/js/bootstrap/popper.min.js';?>"></script>
    <!-- Bootstrap js -->
    <script src="<?php echo base_url().'assets/User/js/bootstrap/bootstrap.min.js';?>"></script>
    <!-- All Plugins js -->
    <script src="<?php echo base_url().'assets/User/js/plugins/plugins.js';?>"></script>
    <!-- Active js -->
    <script src="<?php echo base_url().'assets/User/js/active.js';?>"></script>
</html>