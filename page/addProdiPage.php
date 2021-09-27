<?php
    include '../component/sidebar.php'
?>

<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #17337A; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
<h4 >TAMBAH PRODI</h4>
<hr>
<form action="../process/createProdiProcess.php" method="post">
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama Fakultas</label>
    <input class="form-control" id="fakultas" name="fakultas" aria-describedby="emailHelp">
</div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama Prodi</label>
    <input class="form-control" id="prodi" name="prodi" aria-describedby="emailHelp">
</div>
<div class="d-grid gap-2">
    <button type="submit" class="btn btn-primary" name="register">Tambah Prodi</button>
</div>
</form>
</div>
</aside>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>