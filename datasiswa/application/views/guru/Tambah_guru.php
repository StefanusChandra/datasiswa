<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Tambah Data Guru</h1>
    <hr>
    <br>
    <form method="post" action="<?= base_url('Home/ProsesTambahDataGuru'); ?>">
        <div class="form-group row">
            <label for="inputNIS" class="col-sm-2 col-form-label">NIP</label>
            <div class="col-sm-5">
                <input type="number" class="form-control" name="nip" placeholder="NIP">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputNama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="nama_guru" placeholder="Nama">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputKelas" class="col-sm-2 col-form-label">Kelas</label>
            <div class="col-sm-5">
                <select type="text" class="form-control" name="wali_kelas">
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
            <label for="inputJenisKelamin" class="col-sm-2 col-form-label">Kode Mata Pelajaran</label>
            <div class="input-group date col-sm-5" id="datetimepicker3">
                <input type="text" class="form-control" name="kd_mapel" placeholder="Kode Mata Pelajaran">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputNamaMapel" class="col-sm-2 col-form-label">Mata Pelajaran</label>
            <div class="input-group date col-sm-5" id="datetimepicker3">
                <select type="text" class="form-control" name="nama_mapel">
                    <option value="">- Pilih -</option>
                    <option value="Pendidikan Agama">Pendidikan Agama</option>
                    <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                    <option value="Bahasa Inggris">Bahasa Inggris</option>
                    <option value="IPA">IPA</option>
                    <option value="IPS">IPS</option>
                    <option value="Matematika">Matematika</option>
                    <option value="PKN">PKN</option>
                    <option value="Seni Budaya">Seni Budaya</option>
                    <option value="Penjasorkes">Penjasorkes</option>
                </select>
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