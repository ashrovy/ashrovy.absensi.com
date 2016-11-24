<html>
<head>
<title></title>
</head>

<body>
<center>
	<h2>TAMPILAN INDEX</h2><br/>
	<?php $this->load->view('acc/menu'); ?>
        <table border="2">
	<tr>
		<th>NIS</th>
		<th>NAMA</th>
	<?php /*  */ if($query):foreach($query as $post):?>
	<tr>
		<td width="100"><?php echo $post->nis;?></td>
		<td width="200"><?php echo $post->name;?></td>
	<?php endforeach;?>
	</table>
	<?php else: ?>
	<h4>NO entry yet!!!</h4>
	<?php endif; ?>

</center>
</body>
</html>

<!-- (<?php // echo $post->entry_date; ?>) -->
<?php /*foreach($query as $post): ?>
    <?php echo $post['nis']; ?><br/>
    <?php echo $post['name']; ?><br/>
<?php endforeach;  */?>
