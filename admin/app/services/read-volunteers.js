$(document).ready(function(){
    showVolunteers();
});

function showVolunteers(){
 // get list of volunteers from the API
$.getJSON("http://localhost/orphanage/api/GETData/read1.php", function(data){
 // html for listing volunteers
var read_volunteers_html=`
<!-- start table -->
<table class='table table-bordered table-striped table-hover'>
 
    <!-- creating our table heading -->
    <tr>
        <th class='w-10-pct'>Name</th>
        <th class='w-10-pct'>Email</th>
        <th class='w-10-pct'>Phone</th>
        <th class='w-10-pct'>Address</th>
        <th class='w-10-pct'>Event</th>
    </tr>`;
     
    // rows will be here
    // loop through returned list of data
$.each(data.records1, function(key, val) {
 
    // creating new table row per record
    read_volunteers_html+=`
        <tr>
 
            <td>` + val.name + `</td>
            <td>` + val.email + `</td>
            <td>` + val.phone + `</td>
            <td>` + val.address + `</td>
            <td>` + val.event + `</td>
        </tr>`;
});
 
// end table
read_volunteers_html+=`</table>`;
$("#page-content").html(read_volunteers_html);
changePageTitle("Volunteer Details");
});
}