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
            cell1.innerHTML=" "; // pada td pertama
            cell2.innerHTML="<input type='text' /> "; //pada td kedua
            }       
        </script>
    </head>
    
    
    <body>
        <center>
        <h2>ADD NEW MATA PELAJARAN</h2>
        <br/><br/><br/>
        <table border="0" id="myTable">
            <?php echo validation_errors(); ?>
            <?php if($this->session->flashdata('message')) {
                echo $this->session->flashdata('message');
            } ?>
            <tr>
            <?php /* $this->load->view('presensi/menu'); */
                echo form_open('index.php/mapel/add_new_mapel');
            ?>
                <th>MATA PELAJARAN</th>
                <td><input type="text" name="mapel"/></td>
                <td id="text"></td>                
                <td><select>
                    <option>Kelas 1</option>
                    <option>Kelas 2</option>
                    <option>Kelas 3</option>                    
                </select></td>
                <td><input type="button" value="Add Mata Pelajaran" onclick="displayResult()" name="mapel"></td>           
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="submit"/></td>                
            </tr>
            <?php echo form_close(); ?>
        </table>
        </center>
    </body>
</html>

<!--
//}
            //while (fields <= 5) {
            //for (fields = 0; fields <= 3; fields+=1) 
            //while (fields <= 5) {
            //for (fields = 0; fields <= 3; fields+=1) 
            /* else {
            document.getElementById('text').innerHTML += "<tr><td></td></tr>";    
            fields += 1;}
            } */



//==========================================
UNTUK MEMBUAT INPUT TEXT ATAUPUN SUBMIT

    fields = 0;
            function addInput() {
                if (fields != 2) {
                document.getElementById('text').innerHTML+= "<input type='text' /> ";              
                fields ++;
                } else {                
                //document.getElementById('text').tBodies ="<input type='text' />";
                /* document.getElementById('text').innerHTML += "<tr>";
                document.getElementById('text').innerHTML += "<td></td>";
                document.getElementById('text').innerHTML += "<td>";
                document.getElementById('text').innerHTML += "<input type='text' />";
                document.getElementById('text').innerHTML += "</td>"; */
                document.form.add.disabled=true; 
                document.getElementById('text').innerHTML= '        '
                
                }
            }
-->