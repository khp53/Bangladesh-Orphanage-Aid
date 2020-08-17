$(document).ready(function(){
    showSponsors();
});     
// function to show list of sponsors
function showSponsors(){
 // get list of sponsors from the API
$.getJSON("http://localhost/orphanage/api/GETData/read.php", function(data){
 // html for listing sponsors
var read_sponsors_html=`
<!-- start table -->
<table class='table table-bordered table-striped table-hover'>
 
    <!-- creating our table heading -->
    <tr>
        <th class='w-10-pct'>Name</th>
        <th class='w-10-pct'>Email</th>
        <th class='w-10-pct'>Phone</th>
        <th class='w-10-pct'>Address</th>
        <th class='w-10-pct'>City</th>
        <th class='w-10-pct'>Zip</th>
        <th class='w-10-pct'>Inquary</th>
        <th class='w-10-pct'>Amount</th>
        <th class='w-10-pct'>Event</th>
        <th class='w-10-pct'>Payment Method</th>
    </tr>`;
     
    // rows will be here
    // loop through returned list of data
$.each(data.records, function(key, val) {
 
    // creating new table row per record
    read_sponsors_html+=`
        <tr>
            <td>` + val.name + `</td>
            <td>` + val.email + `</td>
            <td>` + val.phone + `</td>
            <td>` + val.address + `</td>
            <td>` + val.city + `</td>
            <td>` + val.zip + `</td>
            <td>` + val.inquary + `</td>
            <td>` + val.money + `</td>
            <td>` + val.event + `</td>
            <td>` + val.payment + `</td>
        </tr>`;
});
 
// end table
read_sponsors_html+=`</table>`;
$("#page-content").html(read_sponsors_html);
changePageTitle("Sponsor Details");
});
}