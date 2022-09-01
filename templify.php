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
                        <h2>Templify</h2>
                        <p>
                        Templify - Whether you’re building a virtual portfolio, starting a blog, or launching 
                        an online store, using a website template can help you turn your dream 
                        site into a reality. Website templates are pre-designed layouts that allow 
                        you to arrange content onto a webpage to create a simple yet well designed website. 
                        You can drag and drop elements like image blocks, photo galleries, logos, and more into the template to make it your own. 
                        The best part about it? With a website template, absolutely no coding experience is required to create a stunning website customized to your 
                        brand’s needs.

                        </p>
                        <ul class="info-list">
                        <li><i class="fas fa-check"></i>
                                <p>DATE: Starting from 3rd Sept. to 5th Sept. till 12am 2022</p>
                            </li>
                            <li><i class="fas fa-check"></i>
                                <p>Entry Fee : <b>FREE</b></p>
                            </li>
                            <li><i class="fas fa-check"></i>
                                <p>1st Winner: <i class="fa fa-inr"></i>500 </p>
                            </li>
                            <li><i class="fas fa-check"></i>
                                <p>Contact: (Atharva Tirkhunde) 8625015833</p>
                            </li>
                        </ul>

                        <a href="rulebooks/2022/Templify_rulebook.pdf" target=_blank class="butn">
                                <span>Rule Book</span>
                            </a>
                            <a href="https://docs.google.com/forms/d/e/1FAIpQLSc25wVqzBaD49g1Cl8Pr2ujw-w1tvzMFX4TDAN-O_6XisVf2w/viewform" target=_blank class="butn">
                                <span>Register Now!</span>
                            </a>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="img">
                        <img src="img/events/technical/templify_e.jpeg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php 
    include 'includes/footer.php';
?>
