<div class="container border border-dark border-2 rounded p-5">

    <form action="<?= BASEURL; ?>/mahasiswa/store"  method="POST">

        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" autofocus required>
        </div>

        <div class="mb-3">
            <label for="nim" class="form-label">NIM</label>
            <input type="number" class="form-control" id="nim" name="nim" required>
        </div>

        <div class="mb-3">
            <label for="jurusan" class="form-label">Jurusan</label>
            <select class="form-select" name="jurusan">
                <option value="Informatika">Informatika</option>
                <option value="Ilmu Komputer">Ilmu Komputer</option>
                <option value="Sistem Informasi">Sistem Informasi</option>
                <option value="Jaringan Komputer">Jaringan Komputer</option>
            </select>
        </div>

        <a href="<?= BASEURL; ?>/mahasiswa" class="btn btn-outline-secondary">Batal</a>
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>

</div>