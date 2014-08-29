<?php 
$username = $this->session->userdata('username');
if($username){
foreach($user as $baris):
$ustat= $baris->user_status; 
endforeach; }
?>


<div id="wraper">
<div id="header">
<h3>e-kelas</h3>
</div>
<div id="content">
  <div id="paneltombol">
           
      <div id="login">

	
	<div align="right">	
	<?php

if($username)
{
echo anchor ('teslogout','keluar ('.$username.')','class="link"'); 
}
else{
	echo form_open('teslogin/validasi');
	echo "Username:".form_input('username')."Password:".form_password('password');
	echo form_submit('submit','Login');
	echo anchor ('reg/daftar','Bukan Member? Daftar','class="link"');
	echo form_close();
	}
	?><?php echo validation_errors();
	if (isset($error)){
    echo "<div class='error'>$error</div>";
}
	
	?>
	
	<br><br><br><br><br>
 </div>
               
   </div>
<div id="ngok">
<table border='0'> 
<tr> 
<td bgcolor="#ff6666" class="m"><a id='hover' href='<?php echo current_url();  ?>/user'><img src="<?php echo base_url();  ?>pic/tempuser.png"/></a> </td>  
<td bgcolor="#9999ff" class="b"> <a id='overlay_cache2' href='<?php echo current_url();  ?>/kelas'><img src="<?php echo base_url();  ?>pic/tempkel.png"/></a> </td> 

 <td bgcolor="#ff99ff" class="u"> <a id='overlay_cache5' href='<?php echo current_url();  ?>/presentasi/view2/1/vqfat'><img src="<?php echo base_url();  ?>pic/tempabout.png"/></a> </td> 
</tr>
<tr> 

<td bgcolor="#66ff99" class="h"> <a id='overlay_cache4' href='<?php echo current_url();  ?>/presentasi/view2/17/vqfat'><img src="<?php echo base_url();  ?>pic/temphelp.png"/></a> </td> 
<?php
if($username)
{
echo "<td bgcolor='#ffff66' class='k'> <a id='overlay_cache2' href='".current_url()."/site/dashboard'><img src='".base_url()."pic/tempbashboard.png'/></a> </td>"; 
}
?>
<?php
if($ustat==0)
{
echo "<td bgcolor='#ff9966' class='o'> <a id='overlay_cache3' href='".current_url()."/site/admin'><img src='".base_url()."pic/tempkat.png'/></a> </td>"; 
}
?>

</tr>
</table>
</div></div>
<br>
<div id="footer">
			created by <a target='_blank' href="https://twitter.com/vickyfatrian" >Vicky Fatrian</a>
		</div>
</div>
