<?php
require('database.php');
?>
<html>
<head>
  <style>

table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}
.NTK
{
  background-color: red;
  color:white;
}
.MNM{
  background-color: black;
  color:white;
}
.DMK{
  background-color: yellow;
  color:black;
}
.ADMK{
  background-color: green;
  color:white;
}

  </style>
</head>
<body>
  <table>
<thead>
<th>
  Party Name
</th>
<th>
  Number of votes
</th>
</thead>
<tbody>
  <?php $ntkCount = mysqli_query($con,"SELECT COUNT(id) as ntkCount FROM admin WHERE voted_for = 'NTK'");
        $row=mysqli_fetch_array($ntkCount);
        $dmkCount = mysqli_query($con,"SELECT COUNT(id) as dmkCount FROM admin WHERE voted_for = 'DMK'");
              $dmkCountrow=mysqli_fetch_array($dmkCount);
              $mnmCount = mysqli_query($con,"SELECT COUNT(id) as mnmCount FROM admin WHERE voted_for = 'MNM'");
                    $mnmCountrow=mysqli_fetch_array($mnmCount);
                    $admkCount = mysqli_query($con,"SELECT COUNT(id) as admkCount FROM admin WHERE voted_for = 'ADMK'");
                          $admkCountrow=mysqli_fetch_array($admkCount);
  ?>
<tr>
<td>NTK</td>
<td><?php echo $row['ntkCount'] ?></td>
</tr>
<tr>
<td>MNM</td>
<td><?php echo $mnmCountrow['mnmCount'] ?></td>
</tr>
<tr>
<td>DMK</td>
<td><?php echo $dmkCountrow['dmkCount'] ?></td>
</tr>
<tr>
<td>ADMK</td>
<td><?php echo $admkCountrow['admkCount'] ?></td>
</tr>
</tbody>
  </table>
<table>
<thead>
<tr><th colspan="3" class="ntk"> <center>Naam Tamilar Katchi</center> </th></tr>
<tr>
<th>voter_name</th>
<th>voter_mail_id</th>
<th>voted_for</th>
</tr>
</thead>
<tbody>
                                  <?php
                                       $EnquiryQuery = "SELECT * FROM admin WHERE voted_for='NTK'";
                                       $EnquiryResult = mysqli_query($con,$EnquiryQuery) or die(mysqli_error($con));
                                       while ($result = mysqli_fetch_array($EnquiryResult))
                                        {
                                       ?>
<tr>
<td><?php echo $result['voter_name']; ?></td>
<td><?php echo $result['mail_id']; ?></td>
<td><?php echo $result['voted_for']; ?></td>
</tr>
                                    <?php } ?>
</tbody>
</table>
<br>
<br>
<table>
<thead>
<tr><th colspan="3" class="mnm"><center> Makkal Needhi Maiam </center></th></tr>
<tr>
<th>voter_name</th>
<th>voter_mail_id</th>
<th>voted_for</th>
</tr>
</thead>
<tbody>
                                  <?php
                                       $EnquiryQuery = "SELECT * FROM admin WHERE voted_for='MNM'";
                                       $EnquiryResult = mysqli_query($con,$EnquiryQuery) or die(mysqli_error($con));
                                       while ($result = mysqli_fetch_array($EnquiryResult))
                                        {
                                       ?>
<tr>
<td><?php echo $result['voter_name']; ?></td>
<td><?php echo $result['mail_id']; ?></td>
<td><?php echo $result['voted_for']; ?></td>
</tr>
                                    <?php } ?>
</tbody>
</table>
<br>
<br>
<table>
<thead>
<tr><th colspan="3" class="dmk"> <center> Dravida Munnetra Kazhagam </center></th></tr>
<tr>
<th>voter_name</th>
<th>voter_mail_id</th>
<th>voted_for</th>
</tr>
</thead>
<tbody>
                                  <?php
                                       $EnquiryQuery = "SELECT * FROM admin WHERE voted_for='DMK'";
                                       $EnquiryResult = mysqli_query($con,$EnquiryQuery) or die(mysqli_error($con));
                                       while ($result = mysqli_fetch_array($EnquiryResult))
                                        {
                                       ?>
<tr>
<td><?php echo $result['voter_name']; ?></td>
<td><?php echo $result['mail_id']; ?></td>
<td><?php echo $result['voted_for']; ?></td>
</tr>
                                    <?php } ?>
</tbody>
</table>
<br>
<br>
<table>
<thead>
<tr><th colspan="3" class="admk"> <center>Anna Dravida Munnetra Kazhagam </center></th></tr>
<tr>
<th>voter_name</th>
<th>voter_mail_id</th>
<th>voted_for</th>
</tr>
</thead>
<tbody>
                                  <?php
                                       $EnquiryQuery = "SELECT * FROM admin WHERE voted_for='ADMK'";
                                       $EnquiryResult = mysqli_query($con,$EnquiryQuery) or die(mysqli_error($con));
                                       while ($result = mysqli_fetch_array($EnquiryResult))
                                        {
                                       ?>
<tr>
<td><?php echo $result['voter_name']; ?></td>
<td><?php echo $result['mail_id']; ?></td>
<td><?php echo $result['voted_for']; ?></td>
</tr>
                                    <?php } ?>
</tbody>
</table>

</body>
</html>
