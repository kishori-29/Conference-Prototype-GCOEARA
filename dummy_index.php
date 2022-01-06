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
    /* position: fixed; */
    margin: 1%;
    margin-top: 2px;
    margin-bottom: 2px;
    /* font-size: 1.2rem; */
    text-shadow:
        0.06em 0.07em 0 rgb(55, 56, 4),
        0.09em 0.08em 0 rgb(173, 200, 30),
        0.08em 0.09em 0 rgb(100, 70, 225);
    /* left: 50%;
    top: 50%;
    transform: translate(-50%, -50%); */

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

.img2 {
    font-size: 1.6rem;
    font-weight: 700;
}

.sponsor-img {
    width: 150px !important;
    height: 40px !important;

}

@media(max-width:1130px) {
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
        font-size: 1.7rem;

    }

    .img2 {
        font-size: 1.2rem;
    }

    .gcoeara-img {
        height: 70vh;
    }

    .sponsor-img {
        width: 110px !important;
        height: 35px !important;

    }

    .logo-img {
        width: 90% !important;
        height: 40% !important;
    }

}

@media(max-width:810px) {
    .head-title {
        font-weight: 450;
    }

    .logo-main {

        font-size: 0.8rem;

    }


    .img2 {
        font-size: 1.1rem;
        font-weight: 700;

    }

    .conference-cls {
        font-size: 1.3rem;

    }

    .gcoeara-img {
        height: 65vh;
    }

    .sponsor-img {
        width: 80px !important;
        height: 30px !important;

    }

    .logo-img {
        width: 92% !important;
        height: 30% !important;
    }
}

@media(max-width:590px) {
    .sponsor-img {
        width: 80px !important;
        height: 39px !important;

    }

    /* .img1,
    .img3 {
        width: 95px !important;
        height: 95px !important;
    } */

    .img2 {
        font-size: 1rem;
    }

    .logo-img {
        width: 100% !important;
        height: 40% !important;
    }
}

@media(max-width:540px) {


    .img2 {
        font-size: 1rem;
    }

    .sponsor-img {
        width: 80px !important;
        height: 20px !important;

    }

    .logo-img {
        width: 100% !important;
        height: 23% !important;
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

                    <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1"></div>

                    <div class="img1 col-2 col-xl-1 col-lg-2 col-md-2 col-sm-2 img-responsive"> <img class="logo-img"
                            style="width:min(50vh, 150px)" src="images/govt-college-logo1.png" alt="" />
                    </div>

                    <div class="img2 col-xl-8 col-6 col-lg-6 col-md-6 col-sm-6 max-width:50%">
                        <p>NCEESD 2022 <br> (Offline Conference)</p>
                        <p>4<sup>th</sup> & 5<sup>th</sup> July, 2022</p>
                        <p>Government College of Engineering
                            and Research Avasari (kh), Taluka-Ambegaon, District: Pune-412405,
                            India
                        </p>
                        <p class="sponsor-heading">Sponsored by</p>
                    </div>

                    <div class="col-2 col-xl-1 col-lg-2 col-md-2 col-sm-2 img3"> <img class="logo-img img-responsive"
                            style="width:min(30vh, 150px)" src="images/govt-logo2.png" alt="" /></div>
                    <div class="col-1 col-lg-1 col-xl-1 col-md-1 col-sm-1"></div>

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


    <!-- <?php include "includes/navigation.php";?> -->

</body>

</html>