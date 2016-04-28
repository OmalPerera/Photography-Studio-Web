<?php
session_start();
include './header.php';
?>
     <section class="slider" id="home">
            <div class="container-fluid">
                <div class="row">

                    <div id="carouselHacked" class="carousel slide carousel-fade" data-ride="carousel">
                        <div class="header-backup"></div>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img src="img/slide-one.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="img/slide-three.jpg" alt=""> 
                            </div>
                            <div class="item">
                                <img src="img/slide-four.jpg" alt=""> 
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carouselHacked" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#carouselHacked" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>

                </div>
            </div>
        </section>
        <!-- end of slider section -->

        <!-- about section -->
        <section class="about text-center" id="about">
            <div class="container">
                <div class="row">
                    
                    <h2>Up Coming</h2>
                    <h4>Keep track on our up coming events</h4>

                    <div class="col-md-4 col-sm-6">
                        <div class="single-about-detail clearfix">
                            <div class="about-img">
                                <img class="img-responsive" src="img/item1.jpg" alt="">
                            </div>

                            <div class="about-details">
                                <div class="pentagon-text">
                                    <h1>W</h1>
                                </div>

                                <h3>Up Coming Weddings</h3>
                                <p>keep your weeding day alive... forever</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="single-about-detail">
                            <div class="about-img">
                                <img class="img-responsive" src="img/item2.png" alt="">
                            </div>

                            <div class="about-details">
                                <div class="pentagon-text">
                                    <h1>A</h1>
                                </div>

                                <h3>Up Coming Anniversary</h3>
                                <p>Make your Aniversary memorable with us</p>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-4 col-sm-6">
                        <div class="single-about-detail">
                            <div class="about-img">
                                <img class="img-responsive" src="img/item3.jpg" alt="">
                            </div>

                            <div class="about-details">
                                <div class="pentagon-text">
                                    <h1>B</h1>
                                </div>

                                <h3 style="margin-left:5px; margin:5px"> Up Coming Birthdays </h3>
                                <p>Celebrate your Birthday with us</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>  <!-- end of about section -->


<?php
include './footer.php';
?>