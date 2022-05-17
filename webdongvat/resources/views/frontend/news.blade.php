@extends('frontend.layouts.frontend')

@section('title','Tin tức Boss')

@section('main')

<div class="" id="z1">
        <img style="width: 100%;height: 550px;min-width: 768px;padding: none;margin-top: -100px;" src="images/17.png" alt="">

    </div> 
<nav id="z2" class="navbar-default" style="background-color: #000;height: 55px;margin-top: 0px">
    <div class="breadcrumbs" 

    style="float: right;
    color: #fff;
    font-size: 16px;
    padding:15px 40px;
    font-family: "museo-sans";
    ">
    <a href="https://www.animalhavenshelter.org/" style="margin-right: 5px;    color: #fff;

    " rel="v:url" property="v:title">Home</a>
    <span class="delimiter">

    </span>
    <span style="margin-right: 5px;
    " >>
</span>

<span typeof="v:Breadcrumb">
    <a style="margin-right: 5px;    color: #fff;

    " href="https://www.animalhavenshelter.org/adopt/">Adopt</a>
    <span style="margin-right: 5px;
    " >>
</span>
</span>
<span class="delimiter">

</span>
<span class="current" style="  margin-right: 5px;  text-decoration: underline;">Dogs</span>

</div>
</nav>

<!-- /.navbar-collapse -->
 
<!-- phan 2 anh thanh cong cu -->
<div class="container-fluid" id="z3" style="            margin-top: -100px;
">
<div class="row">

    <div class="col-lg-3">

        <div id="catdog">
            <ul>
                <div id="catdog1">
                    <li>
                        <h4>
                            <a href="cat.html">Cats</a>
                        </h4>
                    </li>
                </div>
                <li>
                    <h4>
                        <a href="dog.html">Dogs</a>
                    </h4>
                </li>
            </ul>
        </div>
    </div>
    <!-- -->

    <div id="divImg">
        <div class="container-fluid">


            <div class="col-lg-9" >
                <h1 style="text-align: left;font-size: 30px;
                font-weight: 100;
                color: #000;
                margin-top:100px;
                margin-bottom: 15px;" align="center">Tin tức về nhứng loài .....</h1>
                <p style="text-align: left;    
                text-align: left;    
                line-height: 30px;   
                margin: 0 0 25px 0;">
                <i class="fa fa-heart">
                </i> = Được thu thập từ nhiều nguồn</p>
                <div class="row">
                   
                    <div class="col-lg-3">

                        <div id="dog">
                            <img src="images/1.jpg" alt="">
                            <h4>Minerva</h4>
                            <span>2 years,Female</span>
                            <img src="" alt="">
                            
                        </div>

                    </div

                    <!--under img-->

                    <div class="bb-page-share" style="
                    color: #6a207f;
                    font-size: 24px;
                    font-weight: 900;
                    float: left;
                    margin: 50px 10px 50px 0;
                    font-size: 17px;

                    ">
                    <style type="text/css">
                        .stButton{
margin-left: 5px
                        }
                    </style>
                    <span class="bb-share-title">Share this page</span>
                    <span class="st_sharethis_large" >
                        <span class="stButton">
                            <span class="stLarge">
                                <img src="https://ws.sharethis.com/images/2017/sharethis_32.png">
                            </span>
                        </span>
                    </span>
                    <span class="st_facebook_large" >
                        <span class="stButton">
                            <span class="stLarge">
                                <img src="https://ws.sharethis.com/images/2017/facebook_32.png">
                            </span>
                        </span>
                    </span>
                    <span class="st_twitter_large" >
                        <span class="stButton">
                            <span class="stLarge">
                                <img src="https://ws.sharethis.com/images/2017/twitter_32.png">
                            </span>
                        </span>
                    </span>
                    <span class="st_linkedin_large" >
                        <span class="stButton">
                            <span class="stLarge">
                                <img src="https://ws.sharethis.com/images/2017/linkedin_32.png">
                            </span>
                        </span>
                    </span>
                    <span class="st_pinterest_large" >
                        <span class="stButton">
                            <span class="stLarge">
                                <img src="https://ws.sharethis.com/images/2017/pinterest_32.png">
                            </span>
                        </span>
                    </span>
                    <span class="st_email_large" >
                        <span class="stButton">
                            <span class="stLarge">
                                <img src="https://ws.sharethis.com/images/2017/email_32.png">
                            </span>
                        </span>
                    </span> 
                </div>






                <!--phan 2 anh -->
            </div>
        </div>
    </div>
    <!--end img col-lg-9-->

    <!--under img-->
</div>
</div>
</div>
</div>
</div>
<!--Footer -->
</div>
</div> 
@stop