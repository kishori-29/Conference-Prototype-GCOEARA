<?php include 'index.php'?>
<!-- CSS -->
<style>
.conference {
    border-radius: 5px;
    color: crimson;
}

.conference_desc {
    font-size: 1.2rem;
    font-weight: 500;
}

.track_desc {
    font-size: 1.1rem;
    font-weight: 500;
}

.track_title {
    color: crimson;
    box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;
    padding: 0px;
    margin: auto;
    background-color: #e6e6ff;
    width: 45%;
}

.track_title h4 {
    padding: 10px;
}

.track_content {
    width: 80%;
}

.track_content p {
    margin-left: 5px;
    margin-top: 0 !important;
    color: black;
}

.track_content p:nth-child(odd) {
    background: #CCC
}

@media(max-width:1020px) {
    .track_title {
        width: 70%;
    }
}
</style>
<!-- conference track -->
<div class="container my-4">
    <div class="conference my-4">
        <h3>Call for Papers</h3>
    </div>
    <div class="conference_desc">
        <p>Original research articles broadly within the scope of the conference topics, written in English
            language are, solicited. The topics/tracks of the conference are as follows:</p>
    </div>
    <hr>
</div>

<div class="container" style="border-bottom: 2px solid black;">
    <div class="track_title text-center">
        <h4 class="px-4">Track - 01: Energy</h4>
    </div>
    <div class="track_desc my-4 text-center">
        <p>This track deals with various fundamental issues and perspectives in fluid mechanics. <br>The topics
            of interest would include, but are not limited to:</p>
    </div>
    <div class="track_content container">
        <p>• Advanced control and monitoring systems</p>
        <p>• Advanced energy technologies</p>
        <p>• Energy efficiency</p>
        <p>• Energy markets</p>
        <p>• Energy policy, economics, planning & regulation</p>
        <p>• Integrated energy systems</p>
        <p>• Modeling, simulation and forecasting of energy and carbon markets</p>
        <p>• Nanotechnology applications to renewable energy</p>
        <p>• Renewable energy</p>
        <p>• Smart grids</p>
        <p>• Sustainable cities</p>
        <p>• Sustainable buildings</p>
    </div>
</div>

<div class="container my-4" style="border-bottom: 2px solid black;">
    <div class="track_title text-center">
        <h4>Track - 02: Environment</h4>
    </div>
    <div class="track_desc my-4 text-center">
        <p>This track deals with the state-of-the-art measurement techniques applied to various<br>kinds of
            fluid flows. The topics may include one or more of the following:
        </p>
    </div>
    <div class="track_content container">
        <p>• Biomass and bio-based products </p>
        <p>• Carbon pricing</p>
        <p>• Eco-design & eco-efficiency</p>
        <p>• Ecology & biodiversity conservation</p>
        <p>• Impact assessment of Environmental</p>
        <p>• Energy planning, economics, policy & regulation</p>
        <p>• Risk assessment</p>
        <p>• Sustainable communities</p>

    </div>
</div>
<div class="container my-4" style="border-bottom: 2px solid black;">
    <div class="track_title text-center">
        <h4>Track - 03: Sustainable Development</h4>
    </div>
    <div class="track_desc my-4 text-center">
        <p>This track would address various recent advances in the development and application of various
            computational fluid and gas dynamics techniques. The track includes, among others, the following
            areas:

        </p>
    </div>
    <div class="track_content container">
        <p>• Behavioral aspects for sustainability</p>
        <p>• Challenges, barriers and opportunities</p>
        <p>• Environment friendly institute</p>
        <p>• College community partnership</p>
        <p>• Sustainability in curriculum</p>
        <p>• Sustainability education by private industry</p>
        <p>• Education and Sustainable Development </p>
    </div>
</div>
<?php include "includes/footer.php"; ?>