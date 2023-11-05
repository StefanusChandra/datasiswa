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
                        <h6 class="m-0 font-weight-bold text-primary">Data Siswa
                            <a href="<?= base_url('Home/TambahSiswa') ?>" class="btn btn-primary btn-sm float-right"><i class="fa fa-plus"></i> Tambah Data</a>
                        </h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                                <thead class="bg-primary text-white">
                                    <tr>
                                        <th>No</th>
                                        <th>NIS</th>
                                        <th>Nama</th>
                                        <th>Kelas</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Tempat Lahir</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Alamat</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($siswa as $s) : ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $s['nis']; ?></td>
                                            <td><?= $s['nama_siswa']; ?></td>
                                            <td><?= $s['kelas']; ?></td>
                                            <td><?= $s['jenis_kelamin']; ?></td>
                                            <td><?= $s['tempat_lahir']; ?></td>
                                            <td><?= $s['tgl_lahir']; ?></td>
                                            <td><?= $s['alamat']; ?></td>
                                            <td>
                                                <a href="<?= base_url() ?>Home/Hapus/nis/<?= $s['nis']; ?>/siswa" onclick=" return confirm('Apakah Anda Yakin Ingin Menghapus Data?')" class="btn btn-danger btn-sm">Hapus</a>
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
<!-- End of Main Content -->