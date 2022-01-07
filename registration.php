<?php include "index.php"; ?>

<style>
.registration-cls>h3 {
    color: rgb(199, 49, 49);
    margin-top: 15px;
}

.registration-cls>p {
    font-size: 1.4rem;
    margin-top: 1%;
}

.registration-cls>.blk {
    color: black;
}

.table-registration,
.table-registration th,
.table-registration td {
    border: 1px solid black;
    border-collapse: collapse;
    /* width: 26%; */
    text-align: center;
}
</style>

<div class="container registration-cls my-4">

    <h3>FEE RECEIPT</h3>
    <p>Combine-Money-receipt-1-294</p>
    <br>
    <h3>Registration Link:</h3>
    <p>Add link here</p>
    <br>
    <!-- <h3>Bank Details:</h3>
    
    <br> -->
    <h3 class="blk">REGISTRATION FEE DETAILS:<br><br>
    </h3>
    <div class="registration-table">
        <div class="table-responsive">
            <table class="table-registration table">
                <tr>
                    <th scope="col">Registration Fee</th>
                    <th scope="col">Academic Institute<br>(Rs.)</th>
                    <th scope="col">Industry/R&D
                        Organization
                        (Rs.) </th>
                    <th scope="col">Students/
                        Research
                        Scholar<br>
                        (Rs.)</th>
                    <th scope="col">Attendee
                        (Rs.)</th>
                </tr>
                <tr>
                    <td>Early bird registration</td>
                    <td>2,000/-</td>
                    <td>3,000/-</td>
                    <td>1,000/-</td>
                    <td>2,000/-</td>
                </tr>
                <tr>
                    <td>Late Registration (after 5th June,2022)</td>
                    <td>2,500/-</td>
                    <td>4,000/-</td>
                    <td>1,500/-</td>
                    <td>2,500/-</td>
                </tr>
            </table>
        </div>

    </div>
</div>
<?php include "includes/footer.php"; ?>