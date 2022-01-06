<?php include "includes/header.php"; ?>
<style>
.main {
    background-repeat: no-repeat;
    background-size: cover;
    display: flex;
    flex-direction: column;
    color: yellow;
    align-items: center;
    /* justify-content: center; */
    position: relative;
    overflow: hidden;
}

.conference-cls {
    font-size: 2.5rem;
    text-shadow:
        0.06em 0.07em 0 rgb(55, 56, 4),
        0.09em 0.08em 0 rgb(173, 200, 30),
        0.08em 0.09em 0 rgb(100, 70, 225);

}

.logo-main {
    position: absolute;
    margin: 1%;
    margin-top: 6px;
    margin-bottom: 2px;
    text-shadow:
        0.06em 0.07em 0 rgb(55, 56, 4),
        0.09em 0.08em 0 rgb(173, 200, 30),
        0.08em 0.09em 0 rgb(100, 70, 225);
}

.gcoeara-img {
    width: 100%;
    height: 80vh;
    /* opacity: 0.9; */
    background: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2));
}

.sponsor-heading {
    color: white;
}

.submission-text {
    font-size: larger;
}

.head-title {
    color: #990033;
    margin-top: 1%;
    font-size: larger;
    font-weight: 500px;
}

.logo-img1 {
    float: right;
}

.logo-img2 {
    float: left
}

.img2 {
    font-size: 1.8rem;
    font-weight: 700;
}

.sponsor-img {
    width: 150px !important;
    height: 40px !important;

}

@media(max-width:1200px) {
    .head-title {
        margin-top: 1%;
        font-weight: 500px;
    }

    .logo-main {
        margin-top: 5px;
        margin-bottom: 2px;
        /* font-size: 1.1rem; */

    }

    .conference-cls {
        font-size: 1.8rem;

    }

    .img2 {
        font-size: 1.5rem;
    }

    .gcoeara-img {
        height: 70vh;
    }

    .sponsor-img {
        width: 100px !important;
        height: 30px !important;

    }

    .logo-img {
        width: 90% !important;
        height: 40% !important;
    }

}

@media(max-width:840px) {
    .head-title {
        font-weight: 450;
    }

    .logo-main {

        font-size: 0.8rem;

    }

    .img2 {
        font-size: 1.2rem;
        font-weight: 650;

    }

    .conference-cls {
        font-size: 1.4rem;

    }

    .gcoeara-img {
        height: 61vh;
    }

    .sponsor-img {
        width: 80px !important;
        height: 30px !important;

    }

    .logo-img {
        width: 100% !important;
        height: 29% !important;
    }
}

@media(max-width:545px) {
    .sponsor-img {
        width: 70px !important;
        height: 35px !important;

    }

    .conference-cls {
        font-size: 1.3rem;

    }

    .gcoeara-img {
        height: 53vh;
    }

    .img2 {
        font-size: 1rem;
        font-weight: 645;
    }

    .logo-img {
        width: 100% !important;
        height: 27% !important;
    }
}

@media(max-width:438px) {
    .img2 {
        font-size: 0.7rem;
        font-weight: 620;

    }

    .gcoeara-img {
        height: 46vh;
    }

    .conference-cls {
        font-size: 1rem;

    }

    .sponsor-img {
        width: 70px !important;
        height: 25px !important;

    }

    .logo-img {
        width: 100% !important;
        height: 23% !important;
    }
}

@media(max-width:310px) {
    .img2 {
        font-size: 0.4rem;
        font-weight: 620;

    }

    .gcoeara-img {
        height: 42vh;
    }

    .conference-cls {
        font-size: 1rem;

    }

    .logo-img {
        width: 110% !important;
        height: 25% !important;
    }
}
</style>

<body>
    <div class="container1 wrapper">
        <div class="main">
            <img src="images/Gcoeara.jpg" alt="" class="gcoeara-img img-fluid" style="width:100% !important">

            <div class="logo-main text-center wrapper">
                <div style="color:white" class="text-center mx-2 conference-cls">
                    <p>National Conference on Energy and Environment for Sustainable Development
                    </p>
                </div>
                <div class="row">

                    <!-- <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1"></div> -->

                    <div class="img1 col-2 col-xl-2 col-lg-2 col-md-2 col-sm-2 img-responsive"> <img
                            class="logo-img logo-img1" style="width:min(50vh, 150px)"
                            src="images/govt-college-logo1.png" alt="" />
                    </div>

                    <div class="img2 col-xl-8 col-8 col-lg-8 col-md-8 col-sm-8 max-width:50%">
                        <p>NCEESD 2022 <br> (Offline Conference)<br>
                            4<sup>th</sup> & 5<sup>th</sup> July, 2022<br>
                            Government College of Engineering
                            and Research Avasari (kh), Taluka-Ambegaon, District: Pune-412405,
                            India
                        </p>
                        <p class="sponsor-heading">Sponsored by</p>
                    </div>

                    <div class="col-2 col-xl-2 col-lg-2 col-md-2 col-sm-2 img3"> <img
                            class="logo-img img-responsive logo-img2" style="width:min(30vh, 150px)"
                            src="images/govt-logo2.png" alt="" /></div>
                    <!-- <div class="col-1 col-lg-1 col-xl-1 col-md-1 col-sm-1"></div> -->

                </div>
                <!-- sponsor images -->
                <div class="row sponsor-cls align-center justify-content-center m-1">
                    <div class="col-lg-3 col-md-3 col-sm-1"></div>

                    <div class="col-lg-2 col-md-2 col-sm-3 col-4 sponsor">
                        <img class=" sponsor-img" src="images/sponsor1.png" style="height:auto;max-width:90%" alt="" />
                    </div>

                    <div class="col-lg-2 col-md-2 col-sm-3 col-4 sponsor">
                        <img class="img-responsive sponsor-img" src="images/sponsor2.png"
                            style="height:auto;max-width:90%" alt="" />
                    </div>

                    <div class="col-lg-2 col-md-2 col-sm-3 col-4 sponsor">
                        <img class="img-responsive sponsor-img" src="images/sponsor3.png"
                            style="height:auto;max-width:90%" alt="" />
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-1"></div>
                </div>
            </div>
        </div>
    </div>


    <?php 
    include "includes/navigation.php";
    ?>