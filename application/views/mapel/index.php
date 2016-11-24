<html>
    <head>
        <title>
            
        </title>
    </head>
    
    <body>
    
    <?php $this->load->view('acc/menu'); ?>
        <center>
    <table border="1">
        <tr>
            <th>KELAS</th>
            <th>MATA PELAJARAN</th>            
        </tr>
        <?php   /* */ if($query1): foreach($query1 as $post1):?>
        <tr>
            <td><?php //echo $post1->kelas;?></td>
            <td><?php echo $post1->mapel;?></td>
        </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <h4>NO entry yet!!!</h4>
	<?php endif; ?>
    </table>
        </center>
    </body>
</html>
    