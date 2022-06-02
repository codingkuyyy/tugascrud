
<?php
 include "config.php";
?>
<h1>Data Mahasiswa</h1>
<form action="insertbarang.php" method="post">
   <table>
   
    Nama:<input type="text" name="nama"/></br>
    Harga :<input type="text" name="email"/></br>
    Gambar :<input type="text" name="telp"/></br>
    Jumlah Stock :<input type="text" name="peran"/></br>
    <button type="submit">Simpan</button>
    </table>
</form>

<hr/>

<table border="1">
    <thead>
        <tr>
            <th>Kode ID</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Gambar</th>
            <th>Jumlah Stok</th>
        </tr>
    </thead>
    <tbody>
    <?php 
           $query = "SELECT * FROM user";
           $data = $db->prepare($query); //baru menyiapkan query sql
            $data -> execute(); //menjalankan perintah query sql
            $i=1;
            while($user = $data -> fetch(PDO::FETCH_OBJ)){
                //karena dari awal pdo menggunakan object maka menggunakan fets_obj
                //bisa memakai fetch_lazy
        ?>
            <tr>
            <td><?php echo $i?></td>
            <td><?php echo $user->nama?></td>
            <td><?php echo $user->email?></td>
            <td><?php echo $user->telp?></td>
            <td><?php echo $user->password?></td>
            <td><?php echo $user->peran?></td>
            <td>
            <a  href="edituser.php?id=<?php echo $person->id ?>">edit</a> |
            <a href="deleteuser.php?id=<?php echo $person->id ?>">delete</a> 
            </td>
            </tr>

        <?php $i++; }  ?>
    </tbody>
</table>

