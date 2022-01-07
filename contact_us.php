<?php include "index.php"; ?>
<!-- <link rel="stylesheet" href="css/committee.css"> -->
<style>
.heading {
    border: 0px solid black;
    color: white;
    text-shadow:
        0.06em 0.07em 0 rgb(55, 56, 4),
        0.09em 0.08em 0 rgb(173, 200, 30),
        0.08em 0.09em 0 rgb(100, 70, 200);
    background-color: #000000;
    background-image: linear-gradient(147deg, #000000 0%, #04619f 74%);
    border-radius: 10px;
    margin: auto;
    box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;
    font-weight: 750;
    width: 49%;
    font-size: 35px;
}

.content1 {
    width: 65%;
}

.card-left>div {
    color: black;
    font-weight: 500 !important;
    font-size: 17px;
}

.card-left>.title {
    color: #5c5cf2;
    font-weight: 500;
}

.card-class,
.frame-content {
    margin: 3%;
    box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;

}

.img-tag {
    width: 100%;
    height: 100%;
}

.content1 {
    width: 77%;
}

.card-left {
    /* width: 90%; */
    height: 37vh;
    padding: 10px;
}

.card-right {
    height: 37vh;
}

/* for map  */
.contact-frame {
    width: 75%;
    height: 33vh;
}

.frame-content {
    height: 30vh;
}

.content1-venue {
    /* height: 30vh; */
    color: black;
    margin-bottom: 0px;
}

.content2-venue {
    /* height: 30vh; */
}

.frame-map {
    width: 90%;
    height: 100%;

}

@media(max-width:1145px) {
    .content1 {
        width: 80%;
    }

    .card-left>div {
        font-weight: 490 !important;
        font-size: 14px;
    }

    .card-left>.title {
        font-weight: 500 !important;
    }

    .card-left {
        /* width: 90%; */
        height: 29vh;
        padding: 7px;
    }

    .card-right {
        height: 29vh;
    }

    /* map  */
    .contact-frame {
        width: 83%;
        height: 33vh;
    }

    .content1-venue {
        margin-bottom: 0px;
        font-size: 15px ! important;
        font-weight: 470 !important;
    }
}

@media(max-width:775px) {
    .content1 {
        width: 90%;
    }

    .card-left>div {
        font-weight: 450 !important;
        font-size: 12px;
    }

    .card-left>.title {
        font-weight: 470 !important;
    }

    .card-left {
        height: 25vh;
        padding: 7px;
    }

    .card-right {
        height: 25vh;
    }

    /* map  */
    .contact-frame {
        width: 89%;
        height: 32vh;
    }

    .content1-venue {
        font-size: 13px ! important;
        font-weight: 480 !important;
    }
}

@media(max-width:549px) {
    .heading {
        width: 80%;
        font-size: 28px;
    }

    .content1 {
        width: 95%;
    }

    .card-left>div {
        font-weight: 400 !important;
        font-size: 8px;
    }

    .card-left {
        height: 21vh;
        padding: 7px;
    }

    .card-right {
        height: 21vh;
    }

    /* map  */
    .contact-frame {
        width: 95%;
        height: 27vh;
        margin-bottom: 30px;

    }

    .frame-content {
        height: 28vh;
    }

    .content1-venue {
        font-size: 11px ! important;
        font-weight: 460 !important;
    }
}

@media(max-width:345px) {
    .content1 {
        width: 99%;
    }

    .card-left>div {
        font-size: 7px;
        font-weight: 580 !important;

    }

    .card-left {
        height: 17vh;
        padding: 9px;
    }

    .card-right {
        height: 17vh;
    }

    /* map  */
    .contact-frame {
        height: 26vh;
    }

    .frame-content {
        height: 27vh;
    }

    .content1-venue {
        font-size: 8px ! important;
        font-weight: 460 !important;
    }
}

@media(max-width:289px) {
    .content1 {
        width: 100%;
    }

    .card-left>div {
        font-size: 6px;
        font-weight: 585 !important;

    }

}
</style>
<div class="main my-1">
    <div class="heading text-center my-4">
        <p class="head1">Contact Details</p>
    </div>

    <div class="contact-frame">
        <div class="row frame-content p-2">
            <div class="content1-venue col-lg-6 col-md-6 col-sm-6 col-6">
                <p class="clg-details">
                    Government College Of Engineering And Research, Avasari Khurd, Taluka-Amegaon, Pune , Maharashtra,
                    India
                </p>

                <p>Phone :</p>

                <p> Email : nceesd2022@gcoeara.ac.in
                </p>
            </div>
            <div class="content2-venue col-lg-6 col-md-6 col-sm-6 col-6">
                <p><iframe class="responsive-iframe1 frame-map p-0 m-0"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3772.7165875222922!2d73.96130341416743!3d18.988119959664854!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdd311765784c79%3A0xc4f5ab54cf1febbb!2sGovernment%20College%20Of%20Engineering%20And%20Research%2C%20Avasari%20Khurd!5e0!3m2!1sen!2sin!4v1640411369594!5m2!1sen!2sin"
                        width="80%" height="100%" frameborder="0"></iframe></p>
            </div>
        </div>
    </div>
    <!-- 1 -->
    <div class="content1 m-1">
        <div class="row card-class">
            <div class=" col-xl-9 col-lg-9 col-md-9 col-sm-9 col-9 card-left">
                <div class="title">FOR GENERAL QUERIES
                    <p>ORGANIZING SECRETARY</p>
                </div>
                <div class="committee-name">
                    <p>Dr. Chandrashekhar M. Sewatkar<br>Associate Professor, Department of Mechanical
                        Engineering,<br>Government College of Engineering
                        and Research Avasari (kh), Taluka Ambegaon,
                        District: Pune-412405, India.<br>
                        Email: cmsewatkar.mech@gcoeara.ac.in</p>
                </div>

            </div>
            <div class=" col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3 card-right">
                <img class="img-responsive img-tag" src="images/Dr.S. U. Ghumare.jpg">
            </div>
        </div>
    </div>
    <!-- 2 -->
    <div class="content1 m-1">
        <div class="row card-class">
            <div class=" col-xl-9 col-lg-9 col-md-9 col-sm-9 col-9 card-left">
                <div class="title">FOR PAPER SUBMISSION
                    <p>JOINT ORGANIZING SECRETARY</p>
                </div>
                <div class="committee-name">
                    <p>Dr. Swapnil Kharmale<br>
                        Assistant Professor, Department of Civil Engineering,<br>Government College of Engineering and
                        Research Avasari (kh), Taluka Ambegaon,
                        District: Pune-412405, India.<br>
                        Email: sbkharmale.civil@gcoeara.ac.in</p>
                </div>

            </div>
            <div class=" col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3 card-right">
                <img class="img-responsive img-tag" src="images/Dr.S. U. Ghumare.jpg">
            </div>
        </div>
    </div>
    <!-- 3 -->
    <div class="content1 m-1">
        <div class="row card-class">
            <div class=" col-xl-9 col-lg-9 col-md-9 col-sm-9 col-9 card-left">
                <div class="title">FOR PAPER SUBMISSION
                    <p></p>
                </div>
                <div class="committee-name">
                    <p>Dr. S. V. Karmale<br>
                        Assistant Professor Department of Mechanical Engineering,<br>
                        Government College of Engineering and Research Avasari (kh), Taluka Ambegaon,
                        District: Pune-412405, India.<br>
                        Email: svkarmale.mech@gcoeara.ac.in</p>
                </div>

            </div>
            <div class=" col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3 card-right">
                <img class="img-responsive img-tag" src="images/Dr.S. U. Ghumare.jpg">
            </div>
        </div>
    </div>
    <!-- 4 -->
    <div class="content1 m-1">
        <div class="row card-class">
            <div class=" col-xl-9 col-lg-9 col-md-9 col-sm-9 col-9 card-left">
                <div class="title">FOR REGISTRATION
                    <p>TREASURER</p>
                </div>
                <div class="committee-name">
                    <p class="card-text mb-auto ">Dr. S. V. Kshirsagar<br>
                        Associate Professor Department of Mechanical Engineering,<br>
                        Government College of Engineering and Research Avasari (kh), Taluka Ambegaon,
                        District: Pune-412405, India.<br>
                        Email: svkarmale.mech@gcoeara.ac.in </p>
                </div>

            </div>
            <div class=" col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3 card-right">
                <img class="img-responsive img-tag" src="images/Dr.S. U. Ghumare.jpg">
            </div>
        </div>
    </div>
    <!-- 5 -->
</div>
</div>
<?php include "includes/footer.php"; ?>