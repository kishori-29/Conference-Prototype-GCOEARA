<?php include "includes/header.php"; ?>
<style>
.header-1 {
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;

}

.main {
    background-repeat: no-repeat;
    display: flex;
    flex-direction: column;
    color: #f5b207;
    align-items: center;
    position: relative;
    overflow: hidden;
}

.cls-for-img {
    background-image: linear-gradient(rgba(4, 6, 30, 0.8), rgba(4, 9, 20, 0.9)), url(images/Gcoeara.jpg);
    background-position: center;
    background-size: cover;
    position: relative;
    height: 60vh;
    margin: auto;
    overflow: hidden;

}

.conference-cls {
    /* font-size: 1.8rem; */
    font-weight: 700;
    font-size: 2.4rem;
    text-shadow:
        0.06em 0.07em 0 rgb(55, 56, 4),
        0.09em 0.08em 0 rgb(173, 200, 30),
        0.08em 0.09em 0 rgb(100, 70, 225);

}

.logo-main {
    position: absolute;
    overflow: hidden;
}

.img2 {
    margin-top: 3%;
    font-size: 1.9rem;
    font-weight: 600;

}

.sponsor-heading {
    color: white;
}

.logo-img1 {
    float: right;
    width: 65%;
    height: 92%;

}

.logo-img2 {
    float: left;
    width: 65%;
    height: 92%;
}

.img3,
.img1 {
    display: flex;
    align-items: center;
    justify-content: center;
}



@media(max-width:1190px) {
    .conference-cls {
        font-size: 2rem;
        font-weight: 600;
    }

    .logo-img1,
    .logo-img2 {
        width: 70%;
        height: 90%;

    }

    .img2 {
        font-size: 1.6rem;
    }

}

@media(max-width:1005px) {
    .conference-cls {
        margin-top: 2%;
        font-size: 1.7rem;
    }

    .logo-img1,
    .logo-img2 {
        width: 73%;
        height: 80%;

    }

    .img2 {
        font-size: 1.5rem;
    }
}

@media(max-width:839px) {
    .conference-cls {
        margin-top: 4.5%;
        margin-left: 0;
        margin-right: 0;
        font-size: 1.4rem;
    }

    .logo-img1,
    .logo-img2 {
        width: 83%;
        height: 77%;

    }

}

@media(max-width:683px) {
    .conference-cls {
        margin-top: 2%;
        font-size: 1.3rem;
    }

    .logo-img1,
    .logo-img2 {
        width: 100%;
        height: 80%;

    }

    .cls-for-img {
        height: 46vh;
    }

    .img2 {
        font-size: 1.1rem;
    }
}

@media(max-width:637px) {
    .conference-cls {
        font-size: 1.1rem;
    }
}

@media(max-width:545px) {
    .conference-cls {
        font-size: 1.1rem;
    }

    .logo-img1,
    .logo-img2 {
        width: 105%;
        height: 56%;

    }

    .cls-for-img {
        height: 43vh;
    }

    .img2 {
        font-size: 1rem;
    }

}

@media(max-width:440px) {
    .conference-cls {
        padding: 0px;
        margin-top: 5%;
        margin-bottom: 2%;
        font-size: 0.8rem;
    }

    .logo-img1,
    .logo-img2 {
        width: 106%;
        height: 60%;

    }

    .cls-for-img {
        height: 40vh;
    }

    .img2 {
        font-size: 0.9rem;
    }
}

@media(max-width:405px) {
    .conference-cls {
        margin-top: 8%;
        margin-bottom: 3%;
        font-size: 0.7rem;
    }

    .logo-img1,
    .logo-img2 {
        width: 106%;
        height: 60%;

    }

    .cls-for-img {
        height: 38vh;
    }

    .img2 {
        font-size: 0.8rem;
    }

}

@media(max-width:360px) {
    .conference-cls {
        margin-top: 7%;
        font-size: 0.6rem;
    }

    .logo-img1,
    .logo-img2 {
        width: 105%;
        height: 45%;

    }

    .img2 {
        font-size: 0.7rem;
    }
}
</style>

<body>
    <div class="container1 wrapper" style="overflow:hidden">
        <!-- 1 -->
        <div class="header-1" style="background-color: #000000;
                background-image: linear-gradient(147deg, #000000 0%, #04619f 74%);">

            <div class="row">
                <div class="img1 col-2 col-xl-2 col-lg-2 col-md-2 col-sm-2 img-responsive"> <img
                        class="logo-img logo-img1" style="" src="images/govt-college-logo1.png" alt="" />
                </div>

                <div class="col-xl-8 col-8 col-lg-8 col-md-8 col-sm-8 ">
                    <div style="color:white" class="text-center mx-2 conference-cls">
                        <p>National Conference on Energy and Environment for Sustainable Development
                        </p>
                    </div>
                </div>

                <div class="col-2 col-xl-2 col-lg-2 col-md-2 col-sm-2 img3"> <img
                        class="logo-img img-responsive logo-img2" style="" src="images/govt-logo2.png" alt="" /></div>

            </div>
        </div>
        <?php 
    include "includes/navigation.php";
    ?>
        <!-- 2 -->
        <div class="main cls-for-img">

            <div class="logo-main text-center wrapper">
                <div class="row mx-2">
                    <div class="img2 col-xl-12 col-12 col-lg-12 col-md-12 col-sm-12">
                        <p>NCEESD 2022 <br> (Offline Conference)<br>
                            4<sup>th</sup> & 5<sup>th</sup> July, 2022<br>
                            Government College of Engineering
                            and Research Avasari (kh),
                            <br>Taluka-Ambegaon, District: Pune-412405,
                            India
                        </p>
                        <p class="sponsor-heading">Sponsored by</p>
                    </div>
                </div>

            </div>
        </div>
        <!-- 3 -->
        <div class="333" style="background-color: #5b6467;
background-image: linear-gradient(315deg, #5b6467 0%, #8b939a 74%); height:4vh"></div>

    </div>