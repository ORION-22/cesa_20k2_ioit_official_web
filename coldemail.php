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
                        <h2>Cold Emailing</h2>
                        <p>Cold Emailing - Cold Emailing 💻
                            An Experience you will never forget
                            ✨A cold email is an event where you need to give in your best version of an email ✨</p>
                        <ul class="info-list">
                            <li><i class="fas fa-check"></i>
                                <p>DATE: 4nd Sept. 2022</p>
                            </li>
                            <li><i class="fas fa-check"></i>
                                <p>Venue: Online</p>
                            </li>
                            <li><i class="fas fa-check"></i>
                                <p>1st Winner: <i class="fa fa-inr"></i>300 </p>
                            </li>
                            <li><i class="fas fa-check"></i>
                                <p>2nd Winner: <i class="fa fa-inr"></i>200</p>
                            </li>
                            <li><i class="fas fa-check"></i>
                                <p>Contact: (Atharva Tirkhunde) 8625015833</p>
                            </li>
                        </ul>

                        <a href="rulebooks/2022/ColdEmailing_rulebook.pdf" target=_blank class="butn">
                                <span>Rule Book</span>
                            </a>
                            <a href="https://docs.google.com/forms/d/e/1FAIpQLScCnfqQBVftvqCc0EKZU02E7MhXb9gEz9w7v7Vgnz0ByyP2jw/viewform" target=_blank class="butn">
                                <span>Register Now!</span>
                            </a>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="img">
                        <img src="img/events/technical/coldemailing.jpeg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php 
    include 'includes/footer.php';
?>
