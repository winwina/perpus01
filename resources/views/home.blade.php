@extends('master')

@section('content')
<!-- Start Main Body Section -->
        <div class="mainbody-section text-center">
            <div class="container">
                <div class="row">
                    
                    <div class="col-md-3">
                        
                        <div class="menu-item blue">
                            <a href="#feature-modal" data-toggle="modal">
                                <i class="fa fa-magic"></i>
                                <p>New Books</p>
                            </a>
                        </div>
                        
                        <div class="menu-item green">
                            <a href="#portfolio-modal" data-toggle="modal">
                                <i class="fa fa-file-photo-o"></i>
                                <p>Request Book</p>
                            </a>
                        </div>
                        
                        
                    </div>
                    
                    <div class="col-md-9">
                        
                        <!-- Start Carousel Section -->
                        <div class="home-slider">
                            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="padding-bottom: 30px;">
                                <!-- Indicators -->
<!--                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                </ol>-->

                                <!-- Wrapper for slides -->
                                <div class="row">
                                     @include('search')
<!--                                    <div class="item active">
                                        <img src="images/about-03.jpg" class="img-responsive" alt="">
                                    </div>
                                    <div class="item">
                                        <img src="images/about-02.jpg" class="img-responsive" alt="">
                                    </div>
                                    <div class="item">
                                        <img src="images/about-01.jpg" class="img-responsive" alt="">
                                    </div>-->

                                </div>

                            </div>
                        </div>
                        <!-- Start Carousel Section -->
                        &nbsp;
                        <div class="row">
<!--                            <div class="col-md-6">
                                <div class="menu-item color responsive">
                                    <a href="#service-modal" data-toggle="modal">
                                        <i class="fa fa-area-chart"></i>
                                        <p>Services</p>
                                    </a>
                                </div>
                            </div>
                            -->
                            <div class="col-md-6">
                                <div class="menu-item light-orange red" >
                                    <h3><li class="fa fa-newspaper-o"></li> &nbsp;
                                    Lorem ipsun</h3>
                                        <p >Lorem ipsum dolor sit amet, consectetur adipiscing elitLorem ipsum </p>
                                    </a>
                                </div>
                            </div><!--
                            
</div>-->
                        <div class="row ">
                            <div class="col-md-6 custom2">
                                <div class="menu-item red responsive-2">
                                   
                                    <h5>Servicess</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse efficitur,Suspendisse efficitur,Suspendisse efficitur,Suspendisse efficitur,</p>
                                    </a>
                                </div>
                            </div>
                        
                    </div>
                    </div>
                    
                    <div class="col-md-3">
                        
                        
<!--                        <div class="menu-item color">
                            <a href="#testimonial-modal" data-toggle="modal">
                                <i class="fa fa-comment-o"></i>
                                <p>Testimonial</p>
                            </a>
                        </div>
                        
                        <div class="menu-item blue">
                            <a href="#news-modal" data-toggle="modal">
                                <i class="fa fa-mortar-board"></i>
                                <p>Latest News</p>
                            </a>
                        </div>-->
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- End Main Body Section -->
        @stop