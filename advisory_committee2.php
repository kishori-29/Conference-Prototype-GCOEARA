<?php include "index.php"; ?>
<style>
.heading {
    color: black;
    border: 0px solid black;
    margin: 20px 20px;
    height: 10vh;
    width: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: rgba(0, 0, 0, 0.17) 0px -23px 25px 0px inset, rgba(0, 0, 0, 0.15) 0px -36px 30px 0px inset, rgba(0, 0, 0, 0.1) 0px -79px 40px 0px inset, rgba(0, 0, 0, 0.06) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px;
    margin: auto;
    font-weight: 500;
}

.cards {
    margin: 10px 10px;
    box-shadow: rgba(255, 255, 255, 0.1) 0px 1px 1px 0px inset, rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;
}

.content {
    margin: 20px 20px;
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
<div class="main container my-4">
    <div class="heading text-center my-4">
        <p class="head1">Advisory Committee</p>
    </div>
    <div class="content">

        <div class="row cards my-4">
            <div class="col-md-12 card-content">
                <div
                    class="row g-0 border rounded overflow-hidden flex-md-row shadow-sm h-md-250 position-relative inner-card">
                    <div class="col p-4 d-flex flex-column position-static title1">
                        <div class="mb-1 my-2 title">Dr. B. B. Ahuja</div>
                        <p class="card-text mb-auto committee-name">Director, College of Engineering Pune.</p>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img src="images/Dr.S. U. Ghumare.jpg" alt="">
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
                        <div class="mb-1 my-2 title">P Dr. M. R. Nandgaonkar
                        </div>
                        <p class="card-text mb-auto committee-name">Head, Mechanical Engineering, College of Engineering
                            Pune.</p>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img src="images/Dr.S. U. Ghumare.jpg" alt="">

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
                        <div class="mb-1 my-2 title"> Dr. M. S. Randive
                            </p>
                        </div>
                        <p class="card-text mb-auto committee-name">Head, Mechanical Engineering, College of Engineering
                            Pune
                        </p>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img src="images/Dr.S. U. Ghumare.jpg" alt="">

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
                        <div class="mb-1 my-2 title"> Dr. Dadasaheb Shendage
                            </p>
                        </div>
                        <p class="card-text mb-auto committee-name">
                            Senior general Manager, H2e Power Systems Pvt. Ltd Pune
                        </p>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img src="images/Dr.S. U. Ghumare.jpg" alt="">

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
                        <div class="mb-1 my-2 title"> Dr. Atul Sharma
                            </p>
                        </div>
                        <p class="card-text mb-auto committee-name">Professor, Mechanical Engineering, IIT Bombay

                        </p>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img src="images/Dr.S. U. Ghumare.jpg" alt="">

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
                        <div class="mb-1 my-2 title"> Mr. B A N Murthy
                            </p>
                        </div>
                        <p class="card-text mb-auto committee-name">Program Manager, Eaton Fluid Power Ltd, Pune
                        </p>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img src="images/Dr.S. U. Ghumare.jpg" alt="">
                        <title>Placeholder</title>
                        </svg>
                    </div>
                </div>
            </div>

        </div>


    </div>
</div>