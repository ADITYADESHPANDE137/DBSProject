<?php 
$con=new mysqli("localhost","root","","BANKING_INFO");
$result=$con->query("select * from BANKING_INFO");
foreach ($result as $value)
{
 echo $value['BANK_ID'];
 echo $value['BANKING_NAME'];
 echo $value['ACCOUNT_BALANCE'];
 echo $value['WORK_MANAGER'];
}
?>
...............................................................................................................


<table align="center" style="width:600px; line-height:40px;">
<tr>
<th> colspan="4" <h2> heading</h2></th>
</tr>
<t>
<th> ID </th>
<th> NAME </th>
<th> BALANCE </th>
<th> WORK MANAGER</th>
</t>
<?php>
while($rows=mysql_fetch_assoc($result))
{
?>
  <tr>
<td><?php echo$row.['BANK_ID']$?></td>
<td><?php echo$row.['BANKING_NAME']$?></td>
<td><?php echo$row.['ACCOUNT_BALANCE']$?></td>
<td><?php echo$row.['WORK_MANAGER']$?></td>
</tr>
</table>
