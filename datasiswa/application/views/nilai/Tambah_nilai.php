<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Tambah Data Nilai</h1>
    <hr>
    <br>
    <form method="post" action="<?= base_url('Home/ProsesTambahDataNilai'); ?>">
        <div class="form-group row">
            <label for="inputNIS" class="col-sm-2 col-form-label">NIS</label>
            <div class="col-sm-5">
                <select class="form-control" name="nis" id="">
                    <option value="">- Pilih -</option>
                    <?php foreach ($showAllSiswa as $siswa) : ?>
                        <option value="<?= $siswa['nis'] ?>"><?= $siswa['nis'] . ' ' . $siswa['nama_siswa']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputNama" class="col-sm-2 col-form-label">Mata Pelajaran</label>
            <div class="col-sm-5">
                <select class="form-control" name="kd_mapel" id="">
                    <option value="">- Pilih -</option>
                    <?php foreach ($showAllMapel as $mapel) : ?>
                        <option value="<?= $mapel['kd_mapel'] ?>"><?= $mapel['nama_mapel']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputKelas" class="col-sm-2 col-form-label">Nilai Pengetahuan</label>
            <div class="col-sm-5">
                <input type="number" class="form-control" name="nilai_p" placeholder="Nilai Pengetahuan">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputKelas" class="col-sm-2 col-form-label">Nilai Kompetensi</label>
            <div class="col-sm-5">
                <input type="number" class="form-control" name="nilai_k" placeholder="Nilai Kompetensi">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputKelas" class="col-sm-2 col-form-label">UTS</label>
            <div class="col-sm-5">
                <input type="number" class="form-control" name="uts" placeholder="UTS">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputKelas" class="col-sm-2 col-form-label">UAS</label>
            <div class="col-sm-5">
                <input type="number" class="form-control" name="uas" placeholder="UAS">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputKelas" class="col-sm-2 col-form-label">Semester</label>
            <div class="col-sm-5">
                <select type="text" class="form-control" name="semester" placeholder="Semester">
                    <option value="">- Pilih -</option>
                    <option value="Ganjil">Ganjil</option>
                    <option value="Genap">Genap</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputKelas" class="col-sm-2 col-form-label">Tahun Pelajaran</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="tapel" placeholder="Tahun Pelajaran">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputAlamat" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-5">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <button type="reset" class="btn btn-danger">Reset</button>
            </div>
        </div>
    </form>
</div>