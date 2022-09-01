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
                        <h5>Technical Event</h5>
                        <h2>Symphony of Discussion</h2>
                        <p>Symphony of Discussion - Group discussion is an important activity in academic, business, 
                            and administrative spheres. It is a systematic and purposeful interactive oral 
                            process. Here the exchange of ideas, thoughts and feelings take place through 
                            oral communication. The exchange of ideas takes place in a systematic and structured 
                            way.</p>
                        <ul class="info-list">
                            <li><i class="fas fa-check"></i>
                                <p>DATE: 5nd Sept. 2022</p>
                            </li>
                            <li><i class="fas fa-check"></i>
                                <p>Venue: Comp Dept. 1.30 Pm onwards</p>
                            </li>
                            <li><i class="fas fa-check"></i>
                                <p>Winner: <i class="fa fa-inr"></i>300 </p>
                            </li>
                            <li><i class="fas fa-check"></i>
                                <p>Contact: (Shrinivas Khond) 8956431023</p>
                            </li>
                        </ul>

                        <a href="rulebooks/2022/Rule Book Symphony of Discussion.pdf" target=_blank class="butn">
                                <span>Rule Book</span>
                            </a>
                            <a href="https://forms.gle/AyXp88LuqvvpUvFZA" target=_blank class="butn">
                                <span>Register Now!</span>
                            </a>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="img">
                        <img src="img/events/technical/groupdiscussion.jpeg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php 
    include 'includes/footer.php';
?>
