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
                        <h6 class="m-0 font-weight-bold text-primary">Data Guru
                            <a href="<?= base_url('Home/TambahGuru') ?>" class="btn btn-primary btn-sm float-right"><i class="fa fa-plus"></i> Tambah Data</a>
                        </h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                                <thead class="bg-primary text-white">
                                    <tr>
                                        <th>No</th>
                                        <th>NIP</th>
                                        <th>Nama</th>
                                        <th>Kelas</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Kode Mata Pelajaran</th>
                                        <th>Mata Pelajaran</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    $query = $this->db->query("SELECT * FROM mapel INNER JOIN guru ON mapel.nip = guru.nip");
                                    foreach ($query->result_array() as $mapel) : ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $mapel['nip']; ?></td>
                                            <td><?= $mapel['nama_guru']; ?></td>
                                            <td><?= $mapel['wali_kelas']; ?></td>
                                            <td><?= $mapel['jenis_kelamin']; ?></td>
                                            <td><?= $mapel['kd_mapel']; ?></td>
                                            <td><?= $mapel['nama_mapel']; ?></td>
                                            <td>
                                                <a href="<?= base_url() ?>Home/Hapus/nip/<?= $mapel['nip']; ?>/mapel" onclick=" return confirm('Apakah Anda Yakin Ingin Menghapus Data?')" class="btn btn-danger btn-sm">Hapus</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>



                <!-- End Content Row -->
            </div>
            <!-- End Content Row -->
        </div>

    </div>
    <!-- /.container-fluid -->
</div>
<!-- End of Main Content -->