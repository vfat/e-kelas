<?php $username = $this->session->userdata('username');?>
<?php
echo initialize_tinymce();
?>
<div id="wraper">
<div id="header">
<h3>e-kelas</h3>
</div>
<div id="content">
<div align="right">	
	<?php

if($username)
{


echo anchor ('teslogout','|  keluar ('.$username.')','class="link"'); 

}
else{
echo anchor ('','login','class="link"'); 
}

	?>

 </div>
 
 <div id="ngok" align="left">
 <h1><?php echo anchor ('','home','class="link"')." > ".anchor ('/site/dashboard','dashboard','class="link"')." > buat kelas";  ?></h1>
 </div>
   </div>
<br>


<div id="container" >
<div id="ngok">


<table cellpadding="5" cellspacing="1" border="0" id="example" width="100%"> 

<tr> 
<td bgcolor="#0195a5"><h2> buat kelas baru </h2></td> 


</tr>
<tr> 

<td >

<?php 

echo form_open_multipart('kelas/tambahkelas');
echo "<h1>kelas</h1>".form_input('kelas', set_value('kelas'));
echo "<h1>deskripsi</h1>".form_textarea('deskripsi', set_value('deskripsi'));

?>

<br>


<?php 

echo form_submit('upload', 'Submit');
echo form_close();
?>
<div>
<h4><?php echo validation_errors();?></h4></div>

</div>
</td> 

</tr>


</table>

 </div>

<br><br>
<div id="footer">
			created by <a target='_blank' href="https://twitter.com/vickyfatrian" >Vicky Fatrian</a>
		</div>
</div>

