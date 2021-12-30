<?php include "index.php"; ?>
<style>
.heading {
    color: black;
    border: 0px solid black;
    margin: 20px 20px;
    height: 10vh;
    width: 65%;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: rgba(0, 0, 0, 0.17) 0px -23px 25px 0px inset, rgba(0, 0, 0, 0.15) 0px -36px 30px 0px inset, rgba(0, 0, 0, 0.1) 0px -79px 40px 0px inset, rgba(0, 0, 0, 0.06) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px;
    margin: auto;
    font-weight: 500;
    font-size: 1.5rem;
}

.cards {
    margin: 10px 10px;
    box-shadow: rgba(255, 255, 255, 0.1) 0px 1px 1px 0px inset, rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;
}

.content {
    margin: 20px 20px;
}

.contact-frame {
    /* border: 1px; */
    box-shadow: rgba(255, 255, 255, 0.1) 0px 1px 1px 0px inset, rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;

    width: 65wh !important;
    height: 50vh;
    margin: auto;
}

.frame-content {
    margin: 2%;
    margin-top: 50px !important;
    padding-top: 10px;
    width: 65wh !important;
    height: 50vh;
}

.content2 {
    width: 50%;
}

.inner-card {
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
            <div class="content1 col-lg-6">
                <p class="clg-details">
                    Government College Of Engineering And Research, Avasari Khurd, Taluka-Amegaon, Pune , Maharashtra,
                    India
                </p>

                <p>Phone :</p>

                <p> Email : nceesd2022@gcoeara.ac.in
                </p>
            </div>
            <div class="content2 col-lg-6">
                <p><iframe width="400px" style="border: 0;" tabindex="0"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3772.7165875222922!2d73.96130341416743!3d18.988119959664854!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdd311765784c79%3A0xc4f5ab54cf1febbb!2sGovernment%20College%20Of%20Engineering%20And%20Research%2C%20Avasari%20Khurd!5e0!3m2!1sen!2sin!4v1640411369594!5m2!1sen!2sin"
                        width="750" height="250" frameborder="0" allowfullscreen="allowfullscreen"
                        aria-hidden="false"></iframe></p>
            </div>
        </div>
    </div>

    <div class="main container my-4">

        <div class="content">

            <div class="row cards my-4">
                <div class="col-md-12 card-content">
                    <div
                        class="row g-0 border rounded overflow-hidden flex-md-row shadow-sm h-md-250 position-relative inner-card">
                        <div class="col p-4 d-flex flex-column position-static title1">
                            <div class="mb-1 my-2 title">Chief Patron: <p>Dr. Abhay Wagh</p>
                            </div>
                            <p class="card-text mb-auto committee-name">Director, Directorate of Technical
                                Education,
                                Mumbai.</p>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <img src="../images/download.jpg" alt="">
                            <title>Placeholder</title>
                            </svg>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row cards my-4">
                <div class="col-md-12 card-content my-4">
                    <div
                        class="row g-0 border rounded overflow-hidden flex-md-row shadow-sm h-md-250 position-relative inner-card">
                        <div class="col p-4 d-flex flex-column position-static title1">
                            <div class="mb-1 my-2 title">Patron: <p>Dr. D. V. Jadhao</p>
                            </div>
                            <p class="card-text mb-auto committee-name">Joint Director, Regional Office of
                                Technical Education, Pune.</p>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <img src="../images/download.jpg" alt="">

                            <title>Placeholder</title>
                            </svg>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row cards my-4">
                <div class="col-md-12 card-content my-4">
                    <div
                        class="row g-0 border rounded overflow-hidden flex-md-row shadow-sm h-md-250 position-relative inner-card">
                        <div class="col p-4 d-flex flex-column position-static title1">
                            <div class="mb-1 my-2 title">Conference Chair: <p>Dr. D. R. Pangavhane</p>
                            </div>
                            <p class="card-text mb-auto committee-name">Principal, Government College
                                of Engineering and Research Avasari (Kh)
                            </p>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <img src="../images/download.jpg" alt="">

                            <title>Placeholder</title>
                            </svg>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row cards my-4">
                <div class="col-md-12 card-content my-4">
                    <div
                        class="row g-0 border rounded overflow-hidden flex-md-row shadow-sm h-md-250 position-relative inner-card">
                        <div class="col p-4 d-flex flex-column position-static title1">
                            <div class="mb-1 my-2 title">Convener: <p>Dr. S. A. Sonawane</p>
                            </div>
                            <p class="card-text mb-auto committee-name">Dept. of Mechanical Engineering,
                                Government College of
                                Engineering and Research Avasari (Kh)
                            </p>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <img src="../images/download.jpg" alt="">

                            <title>Placeholder</title>
                            </svg>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row cards my-4">
                <div class="col-md-12 card-content my-4">
                    <div
                        class="row g-0 border rounded overflow-hidden flex-md-row shadow-sm h-md-250 position-relative inner-card">
                        <div class="col p-4 d-flex flex-column position-static title1">
                            <div class="mb-1 my-2 title">Organaizing Secretary: <p>Dr. Chandrashekhar M. Sewatkar</p>
                            </div>
                            <p class="card-text mb-auto committee-name">Dept. of Mechanical
                                Engineering, Government College of
                                Engineering and Research Avasari (Kh)

                            </p>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <img src="../images/download.jpg" alt="">

                            <title>Placeholder</title>
                            </svg>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row cards my-4">
                <div class="col-md-12 card-content my-4">
                    <div
                        class="row g-0 border rounded overflow-hidden flex-md-row shadow-sm h-md-250 position-relative inner-card">
                        <div class="col p-4 d-flex flex-column position-static title1">
                            <div class="mb-1 my-2 title">Joint Organizing Secretary: <p>Dr. S. B. Kharmale</p>
                            </div>
                            <p class="card-text mb-auto committee-name">Dept. of Civil Engineering,
                                Government College of Engineering and Research
                                Avasari (Kh)
                            </p>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <img src="../images/download.jpg" alt="">
                            <title>Placeholder</title>
                            </svg>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row cards my-4">
                <div class="col-md-12 card-content my-4">
                    <div
                        class="row g-0 border rounded overflow-hidden flex-md-row shadow-sm h-md-250 position-relative inner-card">
                        <div class="col p-4 d-flex flex-column position-static title1">
                            <div class="mb-1 my-2 title">Joint Organizing Secretary: <p>Dr. S. V. Karmare</p>
                            </div>
                            <p class="card-text mb-auto committee-name">
                                Dept. of Mechanical Engineering, Government College of Engineering and
                                Research
                                Avasari (Kh)

                            </p>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <img src="../images/download.jpg" alt="">
                            <title>Placeholder</title>
                            </svg>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row cards my-4">
                <div class="col-md-12 card-content my-4">
                    <div
                        class="row g-0 border rounded overflow-hidden flex-md-row shadow-sm h-md-250 position-relative inner-card">
                        <div class="col p-4 d-flex flex-column position-static title1">
                            <div class="mb-1 my-2 title">Treasurer: <p>Dr. S. V. Kshirsagar</p>
                            </div>
                            <p class="card-text mb-auto committee-name"> Dept. of Mechanical
                                Engineering, Government College of Engineering and
                                Research Avasari (Kh)
                            </p>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <img src="../images/download.jpg" alt="">

                            <title>Placeholder</title>
                            </svg>
                        </div>
                    </div>
                </div>

            </div>


        </div>
    </div>
</div>