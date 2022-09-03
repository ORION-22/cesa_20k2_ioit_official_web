<?php 
    include 'includes/header.php';
?>

<style>

    .navbar{
        background: #4e54c8 !important;
    }



    .about .img img{
        left:0;
        max-width:100%;
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
                        <h5>Sports Event</h5>
                        <h2>Valorant</h2>
                        <ul class="info-list">
                            <li><i class="fas fa-check"></i>
                                <p>DATE: 3rd Sept. to 4th Sept. 2022</p>
                            </li>
                            <li><i class="fas fa-check"></i>
                                <p>Entry Fee : <b>FREE</b></p>
                            </li>
                            <li><i class="fas fa-check"></i>
                                <p>Venue : Online</p>
                            </li>
                            <li><i class="fas fa-check"></i>
                                <p>1st Winner: <i class="fa fa-inr"></i>1000 </p>
                            </li>
                            <li><i class="fas fa-check"></i>
                                <p>2nd Winner: <i class="fa fa-inr"></i>500</p>
                            </li>
                            <li><i class="fas fa-check"></i>
                                <p>Contact: (Nileet Savale) 9479700944</p>
                            </li>
                        </ul>

                        <a href="rulebooks/2022/Valorant_rulebook.pdf" target=_blank class="butn">
                                <span>Rule Book</span>
                            </a>
                            <br>
                            <a href="https://docs.google.com/forms/d/e/1FAIpQLSdQSoCX4IxrTGNIyOt0ju4mFhJD_5F_RvxxNgR9qaIL5pgF8w/viewform" target=_blank class="butn">
                                <span>Register Now! </span>
                            </a> 
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="img">
                        <img src="img/events/sports/valorant.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php 
    include 'includes/footer.php';
?>
