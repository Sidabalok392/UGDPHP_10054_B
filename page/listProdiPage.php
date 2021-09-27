<?php
    include '../component/sidebar.php'
?>
<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #17337A; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
<h4>DAFTAR PRODI</h4>
<hr>
<table class="table">
<thead>
<tr>
    <th scope="col">No</th>
    <th scope="col">Nama Fakultas</th>
    <th scope="col">Nama Prodi</th>
    <th scope="col">Aksi</th>
</tr>
</thead>
<tbody>
<?php
    $query = mysqli_query($con, "SELECT * FROM prodi") or die(mysqli_error($con));
    if (mysqli_num_rows($query) == 0) {
        echo '<tr> <td colspan="7"> Tidak ada data </td> </tr>';
    }else{
        $no = 1;
        while($data = mysqli_fetch_assoc($query)){
            echo'
            <tr>
            <th scope="row">'.$no.'</th>
            <td>'.$data['fakultas'].'</td>
            <td>'.$data['prodi'].'</td>
            <td>
            <a href="./editProdiPage.php?id='.$data['id'].'"><i style="color: green" class="fa fa-edit"></i></a>
            <a href="../process/deleteProdiProcess.php?id='.$data['id'].'" onClick="return confirm ( \'Yakin?\')">
            <i style="color: red" class="fa fa-trash"></i>
            </a>
            </td>
            </tr>';
            $no++;
        }
    }
?>
</tbody>
</table>
</div>
</aside>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>