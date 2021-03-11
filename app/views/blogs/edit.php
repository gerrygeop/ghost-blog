<div class="container border border-dark border-2 rounded p-5">

    <form action="<?= BASEURL; ?>/mahasiswa/update"  method="POST">

        <input type="hidden" value="<?= $data['mhs']['id'] ?>" name="id">

        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama" value="<?= $data['mhs']['nama'] ?>" autofocus required>
        </div>

        <div class="mb-3">
            <label for="nim" class="form-label">NIM</label>
            <input type="number" class="form-control" name="nim" value="<?= $data['mhs']['nim'] ?>" required>
        </div>

        <div class="mb-3">
            <label for="jurusan" class="form-label">Jurusan</label>
            <select class="form-select" name="jurusan">
                <option value="Informatika"
                        <?= $data['mhs']['jurusan'] =='Informatika'? 'selected':''?>
                >
                    Informatika
                </option>
                <option value="Ilmu Komputer"
                        <?= $data['mhs']['jurusan'] =='Ilmu Komputer'? 'selected':''?> 
                >
                    Ilmu Komputer
                </option>
                <option value="Sistem Informasi"
                        <?= $data['mhs']['jurusan'] =='Sistem Informasi'? 'selected':''?>
                >
                    Sistem Informasi
                </option>
                <option value="Jaringan Komputer"
                        <?= $data['mhs']['jurusan'] =='Jaringan Komputer'? 'selected':''?>
                >
                    Jaringan Komputer
                </option>
            </select>
        </div>

        <a href="<?= BASEURL; ?>/mahasiswa" class="btn btn-outline-secondary">Batal</a>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>

</div>