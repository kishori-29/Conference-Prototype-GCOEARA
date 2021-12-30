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
}

.logo-main {
    position: absolute;
    margin: 1%;
    margin-top: 10px;
    margin-bottom: 5px;
    font-size: 1.8rem;
    text-shadow:
        0.06em 0.07em 0 rgb(55, 56, 4),
        0.09em 0.08em 0 rgb(173, 200, 30),
        0.08em 0.09em 0 rgb(100, 70, 225);
}

.gcoeara-img {
    height: 75vh;
}

.sponsor-heading {
    color: white;
}

.submission-text {
    font-size: larger;
}

.head-title {
    color: #990033;
    margin-top: 2%;
    font-size: larger;
    font-weight: 600px;
}

.img2 {
    font-size: 2.2rem;
}

@media(max-width:1021px) {
    .head-title {
        margin-top: 1%;
        font-size: larger;
        font-weight: 500px;
    }

    .logo-main {
        margin-top: 7px;
        margin-bottom: 5px;
    }

    .img2 {
        font-size: 1.5rem;
    }

    .gcoeara-img {
        height: 60vh;
    }
}

@media(max-width:680px) {
    .head-title {
        margin-top: 1%;
        font-size: larger;
        font-weight: 500px;
    }

    .logo-main {
        margin-top: 7px;
        margin-bottom: 5px;
    }

    .img2 {
        font-size: 1.3rem;
    }

    .conference-cls {
        font-size: 1.1rem;

    }

    .gcoeara-img {
        height: 60vh;
    }

    .sponsor-img {
        width: 100px !important;
        height: 50px !important;

    }
}

@media(max-width:475px) {
    .sponsor-img {
        width: 80px !important;
        height: 39px !important;

    }

    .img1,
    .img3 {
        width: 95px;
        height: 95px;
    }

    .img2 {
        font-size: 1rem;
    }
}
</style>

<body>
    <div class="header-bg wow fadeInLeft" data-wow-duration="2s" data-wow-delay="1s"></div>
    <div class="container1">
        <div class="main">
            <img src="images/Gcoeara.jpg" alt="" class="gcoeara-img img-fluid" style="width:100%">

            <div class="row logo-main text-center">
                <h1 style="color:white" class="text-center mx-2 conference-cls">
                    <p>48 <sup> TH</sup> NATIONAL CONFERENCE ON FLUID MECHANICS AND FLUID POWER</p>
                </h1>

                <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1"></div>

                <div class="img1 col-2 col-xl-1 col-lg-2 col-md-2 col-sm-2 img-responsive"> <img class=""
                        style="height:auto;max-width:110%" src="images/govt-college-logo1.png" alt="" />
                </div>

                <div class="img2 col-xl-8 col-6 col-lg-6 col-md-6 col-sm-6 max-width:50%">
                    <div class="" data-wow-delay=".6s">

                    </div>

                    <p>FMFP 2021 <br> Online Virtual Conference <br> 27 <sup> TH </sup>& 29 <sup> TH</sup> December
                        2021<br>Birla Institute Of
                        Technology & Science, Pilani, Pilani Campus, Rajasthan India</p>
                    <p class="sponsor-heading">Sponsored by</p>
                </div>
                <div class="img3 col-2 col-xl-1 col-lg-2 col-md-2 col-sm-2"> <img class=" img-responsive"
                        style="height:auto;max-width:110%" src="images/govt-logo2.png" alt="" /></div>
                <div class="col-1 col-lg-1 col-xl-1 col-md-1 col-sm-1"></div>


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



    <?php include "includes/navigation.php";?>

</body>

</html>