<div class="col-lg-12 d-flex align-items-stretch">
    <div class="card w-100">
        <div class="card-body p-4">
            <h5 class="card-title fw-semibold mb-4">Data Pengguna <a href="<?= base_url('pengguna/tambah') ?>"
                    class="btn btn-primary btn-sm float-end"><i class="ti ti-plus"></i>Tambah Data
                    Pengguna</a></h5>
            <div class="table-responsive">
                <table class="table text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4">
                        <tr>
                            <th>
                                <h6 class="fw-semibold mb-0">No</h6>
                            </th>
                            <th>
                                <h6 class="fw-semibold mb-0">Nama Pengguana</h6>
                            </th>
                            <th>
                                <h6 class="fw-semibold mb-0">Email</h6>
                            </th>
                            <th>
                                <h6 class="fw-semibold mb-0">No Telp</h6>
                            </th>
                            <th>
                                <h6 class="fw-semibold mb-0">Informasi Tambahan</h6>
                            </th>
                            <th>
                                <h6 class="fw-semibold mb-0 float-end">Aksi</h6>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($pengguna as $p): ?>
                            <tr>
                                <th scope="row">
                                    <?= $no++ ?>
                                </th>
                                <td>
                                    <?= $p->nama_pengguna ?>
                                </td>
                                <td>
                                    <?= $p->email ?>
                                </td>
                                <td>
                                    <?= $p->no_hp ?>
                                </td>
                                <td>
                                    <?= $p->informasi ?>
                                </td>
                                <td class="border-bottom-0 float-end">
                                    <div class="d-flex align-items-center gap-2">
                                        <a href="<?= base_url('pengguna/edit/') . $p->id_pengguna ?>"
                                            class="btn btn-primary btn-sm rounded-5 fw-semibold">Edit</a>
                                        <a href="<?= base_url('pengguna/hapus/') . $p->id_pengguna ?>"
                                            class="btn btn-danger btn-sm rounded-5 fw-semibold">Delete</a>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>