@extends('sites.layout.master')
@section('body_content')
@include('sites.layout.slider')
<div class="main">
    <div class="container">
        <div class="row quote-v1 margin-bottom-30">
            <div class="col-md-9">
                <span style="text-align:center">WELCOME TO BLUE CRYSTAL INFRA AND DEVELOPER LIMITED  </span>
            </div>
        </div>
        <!-- BEGIN SERVICE BOX -->   
        <div class="row service-box margin-bottom-40">
            <div class="col-md-3 col-sm-3">
                <div class="service-box-heading">
                    <em><i class="fa fa-location-arrow blue"></i></em>
                    <span>Our Incentives</span>
                </div>
                <p>One reasson for <span class="lead" style="color:blue">BLUE CRYSTAL</span> success is that we share the success with our employees. We have created an innovative incentive program that allow us to distribute bonus income to employees based on their contribution to an engagement.</p>
            </div>
            <div class="col-md-3 col-sm-3">
                <div class="service-box-heading">
                    <em><i class="fa fa-check red"></i></em>
                    <span>Our Business Plan</span>
                </div>
                <p><span class="lead">Authenticity, Disciple &amp; Coherence</span></p>
                <p>The way to do is to be. We act in accordance with our values and purpose. We apply 
                our values and purpose throughout the business</p>
                <p><span class="lead">Reliability through delivering high quality products &amp; services. </span></p>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="service-box-heading">
                    <em><i class="fa fa-check red"></i></em>
                    <span>Our Divisions</span>
                </div>
                <p><span class="lead">Be a part of our division</span></p>
                <p>Those who are Action oriented and think that MLM system / technology is a friend.</p>
                @include('sites.layout.portfolio')
            </div>
        </div>
        <!-- END SERVICE BOX -->
        <!-- BEGIN STEPS -->
        <!-- <div class="row margin&#45;bottom&#45;40 front&#45;steps&#45;wrapper front&#45;steps&#45;count&#45;3"> -->
        <!--     <div class="col&#45;md&#45;4 col&#45;sm&#45;4 front&#45;step&#45;col"> -->
        <!--         <div class="front&#45;step front&#45;step1"> -->
        <!--             <h2>Goal definition</h2> -->
        <!--             <p>Lorem ipsum dolor sit amet sit consectetur adipisicing eiusmod tempor.</p> -->
        <!--         </div> -->
        <!--     </div> -->
        <!--     <div class="col&#45;md&#45;4 col&#45;sm&#45;4 front&#45;step&#45;col"> -->
        <!--         <div class="front&#45;step front&#45;step2"> -->
        <!--             <h2>Analyse</h2> -->
        <!--             <p>Lorem ipsum dolor sit amet sit consectetur adipisicing eiusmod tempor.</p> -->
        <!--         </div> -->
        <!--     </div> -->
        <!--     <div class="col&#45;md&#45;4 col&#45;sm&#45;4 front&#45;step&#45;col"> -->
        <!--         <div class="front&#45;step front&#45;step3"> -->
        <!--             <h2>Implementation</h2> -->
        <!--             <p>Lorem ipsum dolor sit amet sit consectetur adipisicing eiusmod tempor.</p> -->
        <!--         </div> -->
        <!--     </div> -->
        <!-- </div> -->
        <!-- END STEPS -->

    </div>
</div>
@stop
