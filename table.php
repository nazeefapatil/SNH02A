<?php
include('developers.php');
// $query = "SELECT pfname, plname, pemail, pphone, pdob, pgender, paadhaar, pcontact state FROM regpt";
$Pat_ID=$_GET['Pat_ID'];
$query = "SELECT * from regpt where pfname='$Pat_ID'" ;
$result = $con->query($query);
?>
<table border="1" cellspacing="0" cellpadding="10">
  <tr>
    <th>S.N</th>
    <th>Full Name</th>
    <th>Gender</th>
    <th>Email</th>
    <th>Mobile No</th>
    <th>Address</th>
    <th>City</th>
    <th>State </th>
  </tr>
<?php
if ($result->num_rows > 0) {
  $sn=1;
  while($data = $result->fetch_assoc()) {
 ?>
 <tr>
   <td><?php echo $sn; ?> </td>
   <td><?php echo $data['pfname']; ?> </td>
   <td><?php echo $data['plname']; ?> </td>
   <td><?php echo $data['pemail']; ?> </td>
   <td><?php echo $data['pphone']; ?> </td>
   <td><?php echo $data['pdob']; ?> </td>
   <td><?php echo $data['pgender']; ?> </td>
   <td><?php echo $data['paadhaar']; ?> </td>
   <td><?php echo $data['pcontact']; ?> </td>
 <tr>
 <?php
  $sn++;}} else { ?>
    <tr>
     <td colspan="8">No data found</td>
    </tr>

 <?php } ?>
</table>