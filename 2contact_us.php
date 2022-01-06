<?php include "index.php"; ?>
<style>
.heading {
    color: black;
    border: 0px solid black;
    margin: 20px 20px;
    height: 10vh;
    width: 67%;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: rgba(0, 0, 0, 0.17) 0px -23px 25px 0px inset, rgba(0, 0, 0, 0.15) 0px -36px 30px 0px inset, rgba(0, 0, 0, 0.1) 0px -79px 40px 0px inset, rgba(0, 0, 0, 0.06) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px;
    margin: auto;
    font-weight: 500;
    font-size: 2.2rem;
}

.cards {
    margin: 10px 10px;
    box-shadow: rgba(255, 255, 255, 0.1) 0px 1px 1px 0px inset, rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;
}

.content {
    margin: 20px 20px;
}

.contact-info>.contact-frame {
    /* border: 1px; */
    box-shadow: rgba(255, 255, 255, 0.1) 0px 1px 1px 0px inset, rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 80%;
    /* min-width: 300px; */
    height: 50vh;
    margin: auto;
}

.frame-content {
    margin: 1%;
    margin-top: 5px !important;
    padding-top: 5px;
    /* width: 400px; */
    /* height: 70vh; */
}

.content2 {
    width: 50%;
    /* height: 60%; */
}

.name-details {
    color: black;
}

.name-details>.head1 {
    font-size: 1.3rem;
    font-weight: 500;
    color: blue;
}

.name-details>.head2 {
    font-size: 1.1rem;
    font-weight: 500;

}

.name-img {
    margin-top: 5px;
    margin-bottom: 5px;

}

.contact-box {
    /* margin: 10px 10px; */
}

.contact-box {
    margin: 15px 15px;
    border: none;
}

.title {
    color: black;
}

.committee-name {
    color: black;

}

.main .cards .inner-card .title1 .title {
    color: #8080ff;
    /* font-weight: 500; */
    font-weight: bold;
    font-size: 1.1rem;
}

.main .cards .inner-card .title1 .title p {
    color: #000000;
    /* font-weight: 500; */
    font-weight: bold;
    font-size: 1.3rem;
}

.main .cards .inner-card .title1 .committee-name {
    color: #000000;
    font-weight: 500;
    font-size: 1rem;
}

@media(max-width: 585px) {
    .heading {
        font-size: 0.9rem;
    }

    .main .cards .inner-card .title1 .committee-name {
        color: #000000;
        font-weight: 500;
        font-size: 0.7rem;
    }
}

@media(max-width: 470px) {
    .heading {
        font-size: 0.7rem;
    }

    .main .cards .inner-card .title1 .committee-name {
        color: #000000;
        font-weight: 500;
        font-size: 0.6rem;
    }

    .main .cards .inner-card .title1 .title p {
        color: #000000;
        /* font-weight: 500; */
        font-weight: bold;
        font-size: 1.1rem;
    }

    .main .cards .inner-card .title1 .title {
        color: #8080ff;
        /* font-weight: 500; */
        font-weight: bold;
        font-size: 0.9rem;
    }
}

@media(max-width: 420px) {
    .heading {
        font-size: 0.7rem;
    }

    .main .cards .inner-card .title1 .committee-name {
        color: #000000;
        font-weight: 500;
        font-size: 0.6rem;
    }

    .main .cards .inner-card .title1 .title p {
        color: #000000;
        /* font-weight: 500; */
        font-weight: bold;
        font-size: 0.9rem;
    }

    .main .cards .inner-card .title1 .title {
        color: #8080ff;
        /* font-weight: 500; */
        font-weight: bold;
        font-size: 0.7rem;
    }
}

@media(max-width: 388px) {
    .heading {
        font-size: 0.6rem;
    }

    .main .cards .inner-card .title1 .committee-name {
        color: #000000;
        font-weight: 500;
        font-size: 0.5rem;
    }

    .main .cards .inner-card .title1 .title p {
        color: #000000;
        /* font-weight: 500; */
        font-weight: bold;
        font-size: 0.7rem;
    }

    .main .cards .inner-card .title1 .title {
        color: #8080ff;
        /* font-weight: 500; */
        font-weight: bold;
        font-size: 0.6rem;
    }
}
</style>
<div class="container contact-info">
    <div class="heading text-center my-4">
        <p class="head1">Contact Details</p>
    </div>
    <div class="contact-frame">
        <div class="row frame-content">
            <div class="content1 col-lg-6 col-md-6 col-sm-6 col-6">
                <p class="clg-details">
                    Government College Of Engineering And Research, Avasari Khurd, Taluka-Amegaon, Pune , Maharashtra,
                    India
                </p>

                <p>Phone :</p>

                <p> Email : nceesd2022@gcoeara.ac.in
                </p>
            </div>
            <div class="content2 col-lg-6 col-md-6 col-sm-6 col-6">
                <p><iframe width="95%" style="border: 0;" tabindex="0"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3772.7165875222922!2d73.96130341416743!3d18.988119959664854!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdd311765784c79%3A0xc4f5ab54cf1febbb!2sGovernment%20College%20Of%20Engineering%20And%20Research%2C%20Avasari%20Khurd!5e0!3m2!1sen!2sin!4v1640411369594!5m2!1sen!2sin"
                        width="700" height="220" frameborder="0" allowfullscreen="allowfullscreen"
                        aria-hidden="false"></iframe></p>
            </div>
        </div>
    </div>

    <div class="main container my-4">

        <div class="content">

            <div class="row cards my-4">
                <div class="col-md-12 card-content">
                    <div
                        class="row g-0 border rounded overflow-hidden flex-md-row shadow-sm h-md-250 position-relative inner-card contact-box">
                        <div class="col col-lg-8 col-xl-8 p-4 d-flex flex-column position-static ">
                            <div class="name-details">
                                <p class="head1">FOR GENERAL QUERIES</p>
                                <p class="head2">ORGANIZING SECRETARY</p>
                                <p>Dr. Chandrashekhar M. Sewatkar</p>
                                <p>Associate Professor, Department of Mechanical Engineering,</p>
                                <p>Government College of Engineering and Research Avasari (kh), Taluka Ambegaon,
                                    District: Pune-412405, India.</p>
                                <p>Email: cmsewatkar.mech@gcoeara.ac.in</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-xl-4 d-none d-lg-block name-img">
                            <img src="images/Dr.S. U. Ghumare.jpg" style="width:90%" alt="">
                            <title>Placeholder</title>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row cards my-4">
                <div class="col-md-12 card-content">
                    <div
                        class="row g-0 border rounded overflow-hidden flex-md-row shadow-sm h-md-250 position-relative inner-card contact-box">
                        <div class="col col-lg-8 col-xl-8 p-4 d-flex flex-column position-static ">
                            <div class="name-details">
                                <p class="head1">FOR PAPER SUBMISSION</p>
                                <p class="head2">JOINT ORGANIZING SECRETARY</p>
                                <p>Dr. Swapnil Kharmale</p>
                                <p>Assistant Professor, Department of Civil Engineering,</p>
                                <p>Government College of Engineering and Research Avasari (kh), Taluka Ambegaon,
                                    District: Pune-412405, India.</p>
                                <p>Email: sbkharmale.civil@gcoeara.ac.in</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-xl-4 d-none d-lg-block name-img">
                            <img src="images/Dr.S. U. Ghumare.jpg" style="width:90%" alt="">
                            <title>Placeholder</title>
                        </div>
                    </div>
                </div>
            </div>
            <!--  -->
            <div class="row cards my-4">
                <div class="col-md-12 card-content">
                    <div
                        class="row g-0 border rounded overflow-hidden flex-md-row shadow-sm h-md-250 position-relative inner-card contact-box">
                        <div class="col col-lg-8 col-xl-8 p-4 d-flex flex-column position-static ">
                            <div class="name-details">
                                <p class="head1">FOR PAPER SUBMISSION</p>
                                <!-- <p>JOINT ORGANIZING SECRETARY</p> -->
                                <p>Dr. S. V. Karmale</p>
                                <p>Assistant Professor Department of Mechanical Engineering,</p>
                                <p>Government College of Engineering and Research Avasari (kh), Taluka Ambegaon,
                                    District: Pune-412405, India.</p>
                                <p>Email: svkarmale.mech@gcoeara.ac.in</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-xl-4 d-none d-lg-block name-img">
                            <img src="images/Dr.S. U. Ghumare.jpg" style="width:90%" alt="">
                            <title>Placeholder</title>
                        </div>
                    </div>
                </div>
            </div>
            <!--  -->
            <div class="row cards my-4">
                <div class="col-md-12 card-content">
                    <div
                        class="row g-0 border rounded overflow-hidden flex-md-row shadow-sm h-md-250 position-relative inner-card contact-box">
                        <div class="col col-lg-8 col-xl-8 p-4 d-flex flex-column position-static ">
                            <div class="name-details">
                                <p class="head1">FOR REGISTRATION</p>
                                <p class="head2">TREASURER</p>
                                <p>Dr. S. V. Kshirsagar</p>
                                <p>Associate Professor Department of Mechanical Engineering,</p>
                                <p>Government College of Engineering and Research Avasari (kh), Taluka Ambegaon,
                                    District: Pune-412405, India.</p>
                                <p>Email: svkarmale.mech@gcoeara.ac.in </p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-xl-4 d-none d-lg-block name-img">
                            <img src="images/Dr.S. U. Ghumare.jpg" style="width:90%" alt="">
                            <title>Placeholder</title>
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </div>
</div>
</div>