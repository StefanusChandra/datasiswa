<!-- Main Content -->
<div id="content">
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">List Data</h1>

        <!-- Content Row -->
        <div class="row">

            <div class="col">

                <!-- DataTales Example -->

                <div class="card shadow mb-4">
                    <div class="card-header py-3 xl-5">
                        <h6 class="m-0 font-weight-bold text-primary">Data Nilai Siswa
                            <a href="<?= base_url('Home/TambahNilai') ?>" class="btn btn-primary btn-sm float-right"><i class="fa fa-plus"></i> Tambah Data</a>
                        </h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                                <thead class="bg-primary text-white">
                                    <tr>
                                        <th rowspan="2">No</th>
                                        <th rowspan="2">NIS</th>
                                        <th rowspan="2">Kode Mapel</th>
                                        <th rowspan="2">Mata Pelajaran</th>
                                        <th colspan="4">Nilai</th>
                                        <th rowspan="2">Semester</th>
                                        <th rowspan="2">Tahun Pelajaran</th>
                                        <th rowspan="2">Aksi</th>
                                    </tr>
                                    <tr>
                                        <th>Pengetahuan</th>
                                        <th>Kompetensi</th>
                                        <th>UTS</th>
                                        <th>UAS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    $query = $this->db->query("SELECT * FROM nilai INNER JOIN mapel ON nilai.kd_mapel = mapel.kd_mapel INNER JOIN siswa ON nilai.nis = siswa.nis");
                                    foreach ($query->result_array() as $nilai) : ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $nilai['nis']; ?></td>
                                            <td><?= $nilai['kd_mapel']; ?></td>
                                            <td><?= $nilai['nama_mapel']; ?></td>
                                            <td><?= $nilai['nilai_p']; ?></td>
                                            <td><?= $nilai['nilai_k']; ?></td>
                                            <td><?= $nilai['uts']; ?></td>
                                            <td><?= $nilai['uts']; ?></td>
                                            <td><?= $nilai['semester']; ?></td>
                                            <td><?= $nilai['tapel']; ?></td>
                                            <td>
                                                <!-- WHERE, VALUE, TABEL -->
                                                <a href="<?= base_url() ?>Home/Hapus/id_nilai/<?= $nilai['id_nilai']; ?>/nilai" onclick=" return confirm('Apakah Anda Yakin Ingin Menghapus Data?')" class="btn btn-danger btn-sm">Hapus</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- End Content Row -->
        </div>

    </div>
    <!-- /.container-fluid -->
</div>
<!-- End of Main Content --