<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Tambah Data Siswa</h1>
    <hr>
    <br>
    <form method="post" action="<?= base_url('Home/ProsesTambahDataSiswa'); ?>">
        <div class="form-group row">
            <label for="inputNIS" class="col-sm-2 col-form-label">NIS</label>
            <div class="col-sm-5">
                <input type="number" class="form-control" name="nis" placeholder="NIS">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputNama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="nama_siswa" placeholder="Nama">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputKelas" class="col-sm-2 col-form-label">Kelas</label>
            <div class="col-sm-5">
                <select type="text" class="form-control" name="kelas">
                    <option value="">- Pilih -</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputJenisKelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
            <div class="input-group date col-sm-5" id="datetimepicker3">
                <select type="text" class="form-control" name="jenis_kelamin">
                    <option value="">- Pilih -</option>
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputTempatLahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat Lahir">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputTanggalLahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
            <div class="col-sm-5">
                <input type="date" class="form-control datepicker" name="tgl_lahir" placeholder="Tanggal Lahir">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputAlamat" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="alamat" placeholder="Alamat">
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