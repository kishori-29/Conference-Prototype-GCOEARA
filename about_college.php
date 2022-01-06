<?php 
 include "index.php";
?>

<style>
.about-clg {
    background-color: rgb(246, 251, 252);
    padding: 20px;
}

.campus-info {
    box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
    padding: 30px;
    margin: 3%;
}

.clg-para {
    color: rgb(7, 7, 7);
    font-size: 19px;
}

.text-red {
    /* width: 30%; */
    color: crimson;
    box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;
    padding: 7px;
    margin: 3% 0px;
    background-color: #e6e6ff;
}

li {
    font-size: 20px;
}
</style>

<div class="about-clg">
    <div class="container">
        <div class="campus-info">
            <p class="clg-para">
                <b> Government College of Engineering and Research Avasari (Kh)</b> is located in pollution free
                environment about 65 km North of Pune, on Pune-Nashik highway (NH-50) in the land of
                Maratha warrior Chhatrapati Shivaji Maharaj. The campus is spread over 50 acre area with huge
                academic buildings along with a separate administrative and workshop buildings, a separate
                residential zone with quarters for faculty and staff and hostels. The college is approved by All
                India Council for Technical Education, New Delhi and is affiliated to Savitribai Phule Pune
                University. Directorate of Technical Education, Maharashtra State, Mumbai controls the institute
                through its Regional office at Pune
            </p>
            <br>
        </div>

        <div class="clg-img1">
            <center><img class="img-fluid border border-secondary" src="images/clg-img2.jpg" alt="Chania" width="500"
                    height="300"></center>
        </div>
        <div class="institute-name">
            <h3 class="text-red text-center">
                Organizing Institute:</h3>
            <p>
            <h2 class="text-center">Government College of Engineering and Research
                Avasari (Kh), Taluka: Ambegaon, District: Pune-412405</h2>
            </p>
        </div>
        <div class="institute-vision">
            <h3 class="text-red text-center">
                Institute Vision:
            </h3>
            <p class="clg-para text-center">
                Educational institution for Empowerment through technological excellence towards sustainable developmen
            </p>
        </div>
        <div class="institute-mission">
            <h3 class="text-red text-center">Institute Mission: </h3>
            <li>Value based and demand driven education using best practices</li>
            <li>
                Promotion of research, innovation and entrepreneurship
            </li>
            <li>
                Commitment to sustainable solutions in service of society
            </li>
            <li>
                Capability to face local and global challenges
            </li>
        </div>
    </div>
</div>
<?php include "includes/footer.php"; ?>