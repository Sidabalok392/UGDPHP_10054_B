<?php
    include '../component/sidebar.php';
    $query = mysqli_query($con, "SELECT * FROM prodi") or die(mysqli_error($con));
    $data=mysqli_fetch_assoc($query);
?>

<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #17337A; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
<h4 >TAMBAH MAHASISWA</h4>
<hr>
<form action="../process/createMahasiswaProcess.php" method="post">
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input class="form-control" id="name" name="name" aria-describedby="emailHelp">
</div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">NPM</label>
    <input class="form-control" id="npm" name="npm" aria-describedby="emailHelp">
</div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Prodi</label>
    <select class="form-select" aria-label="Default select example" name="prodi" id="prodi">
        <option value="Informatika">Informatika</option>
        <option value="Sistem Informasi">Sistem Informasi</option>
        <option value="Industri">Industri</option>
        <?php
            while($data=mysqli_fetch_assoc($query)){echo'<option value="'.$data['prodi'].'">'.$data['prodi'].'</option>';}
        ?>
    </select>
</div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Username</label>
    <input class="form-control" id="username" name="username" aria-describedby="emailHelp">
</div>
<div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password">
</div>
<div class="d-grid gap-2">
    <button type="submit" class="btn btn-primary" name="register">Tambah Mahasiswa</button>
</div>
</form>
</div>
</aside>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>