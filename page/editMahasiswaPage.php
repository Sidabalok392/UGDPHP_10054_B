<?php
    include '../component/sidebar.php';
    $id=$_GET['id'];
    $query=mysqli_query($con,"SELECT * FROM users WHERE id = '$id'") or die(mysqli_error($con));
    $query2=mysqli_query($con,"SELECT * FROM prodi");
    $data=mysqli_fetch_assoc($query);
    $data2=mysqli_fetch_assoc($query2);
?>

<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #17337A; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
<h4 >EDIT MAHASISWA</h4>
<hr>
<form action="../process/editMahasiswaProcess.php?id= <?php echo $id?>" method="post">
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input class="form-control" id="name" name="name" aria-describedby="emailHelp" value="<?php echo $data['name']?>">
</div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">NPM</label>
    <input class="form-control" id="npm" name="npm" aria-describedby="emailHelp" value="<?php echo $data['npm']?>">
</div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Prodi</label>
    <select class="form-select" aria-label="Default select example" name="prodi" id="prodi">
        <?php
            for($i=0;$i<3;$i++){
                if($i==0){
                    $simpan[$i]="Informatika";
                }else if($i==1){
                    $simpan[$i]="Sistem Informasi";
                }else{
                    $simpan[$i]="Industri";
                }
            }
            $i=3;
            while($data2=mysqli_fetch_assoc($query2)){
                $simpan[$i]=$data2['prodi'];
                $i++;
            }
            $i=0;
            do{
                if($data['prodi']==$simpan[$i]){
                    echo'<option value="'.$simpan[$i].'" selected>'.$simpan[$i].'</option>';
                }else{
                    echo'<option value="'.$simpan[$i].'">'.$simpan[$i].'</option>';
                }
                $i++;
            }while($i<count($simpan));
        ?>
    </select>
</div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Username</label>
    <input class="form-control" id="username" name="username" aria-describedby="emailHelp" value="<?php echo $data['username']?>">
</div>
<div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password">
</div>
<div class="d-grid gap-2">
    <button type="submit" class="btn btn-primary" name="register">Edit Mahasiswa</button>
</div>
</form>
</div>
</aside>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>