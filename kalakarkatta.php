<?php 
    include 'includes/header.php';
?>

<style>

    .navbar{
        background: #4e54c8 !important;
    }

    .about .img img{
        left:0;
        width:100%;
    }

</style>

<body>

    <!-- =====================================
        ==== Start Loading -->

    <div class="loading">
        <div class="load-circle">
        </div>
    </div>

    <!-- End Loading ====
        ======================================= -->


    <!-- =====================================
        ==== Start Navbar -->

    <?php 
        include 'includes/nav.php';
    ?>

    <!-- End Navbar ====
        ======================================= -->


    <!-- =====================================
        ==== Start Header -->


    <!-- End Header ====
        ======================================= -->


    <!-- =====================================
        ==== Start About -->
    <section id="about" class="about" data-scroll-index="1" style="margin-top:130px;">
        <div class="container">
            <div class="row">
               

                <div class="col-lg-6">
                    <div class="info section-padding">
                        <h5>Cultural Event</h5>
                        <h2>Kalakar Katta</h2>
                        <ul class="info-list">
                        <li><i class="fas fa-check"></i>
                                <p>Event : Comp Dept.</p>
                            </li>
                            <li><i class="fas fa-check"></i>
                                <p>Date : Mon. 5th Sept, 2022</p>
                            </li>
                            <li><i class="fas fa-check"></i>
                                <p>Time: 9 AM onwards </p>
                            </li>
                            <li><i class="fas fa-check"></i>
                            <p>Contact:(Pratham Jamkhande) 9579501099</p>
                            </li>
                        </ul>

                            <a href="#" target=_blank class="butn">
                                <span>Register Now!</span>
                            </a>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="img">
                        <img src="img/events/cultural/kalakarikatta.png" alt="" style="max-width:100%;">
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php 
    include 'includes/footer.php';
?>
