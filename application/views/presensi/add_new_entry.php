<html>
<head>
    <title></title>
    <script language="javascript">
            function displayResult() //menambah td dan tr
            {
            var table=document.getElementById("myTable");
            var row=table.insertRow(1); // posisi row yang ingin di insert
            var cell1=row.insertCell(0); //td pertama
            var cell2=row.insertCell(1); //td kedua
            cell1.innerHTML="<input type='text' name='nis' />"; // pada td pertama
            cell2.innerHTML="<input type='text' name='name' />"; //pada td kedua
            }       
        </script>
</head>
<body>
<center>
	<h2>ADD NEW ENTRY</h2>
        <br/><br/><br/>
<table border="0" id="myTable">
	<?php echo validation_errors(); ?>
	<?php  if($this->session->flashdata('message')) {echo $this->session->flashdata('message');} ?>
	<?php /* $this->load->view('presensi/menu'); */ echo form_open('index.php/presensi/add_new_entry'); ?>    
    <tr><th align="left">NIS</th>
    <th align="left">NAMA</th></tr>
    
    <tr>        
	<td><input type="text"name="nis" /></td><td><input type="text"name="name" /></td>
    </tr>
    
    <tr>
    	<td align="right"><input type="button" value="Tambah" onclick="displayResult()" /></td>
        <td colspan="0"><input type="submit" value="Submit" /></td>
	<?php echo form_close(); ?>
    </tr>

    
</center>
</table>
        
</body>
</html>