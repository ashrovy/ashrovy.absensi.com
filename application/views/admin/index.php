<html>
<head>
</head>

<body>
<center>

	<table border="1" width="400">
    	<tr>
        	<td width="" align="center"><a href="">Add/Edit User</a></td>
            <td width="" align="center"><a href="<?php // echo base_url();?>index.php/presensi/add_new_entry" target="iframe1">Add/Edit Siswa</a></td>
            <td width="" align="center"><a href="<?php  //echo base_url();?>/index.php/mapel/add_new_mapel" target="iframe1">Add/Edit Mapel</a></td>            
        </tr>
    </table>
    <br/>
    <iframe width="400" height="300" name="iframe1" src="<?php echo site_url('presensi/add_new_entry');?>"></iframe>

</center>
</body>
</html>