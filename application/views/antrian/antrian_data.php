<div class="col-lg-12 d-flex align-items-stretch">
    <div class="card w-100">
        <div class="card-body p-4">
            <h5 class="card-title fw-semibold mb-4">Data Dokter <a href="<?= base_url('dokter/tambah') ?>" class="btn btn-primary btn-sm float-end"><i class="ti ti-plus"></i>Tambah Data
                    Dokter</a></h5>
            <div class="table-responsive">
                <table class="table text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4">
                        <tr>
                            <th>
                                <h6 class="fw-semibold mb-0">No</h6>
                            </th>
                            <th>
                                <h6 class="fw-semibold mb-0">Layanan</h6>
                            </th>
                            <th>
                                <h6 class="fw-semibold mb-0">Dokter</h6>
                            </th>
                            <th>
                                <h6 class="fw-semibold mb-0">Jadwal</h6>
                            </th>
                            <th>
                                <h6 class="fw-semibold mb-0">Waktu</h6>
                            </th>
                            <th>
                                <h6 class="fw-semibold mb-0">Status</h6>
                            </th>
                            <h6 class="fw-semibold mb-0 float-end">Aksi</h6>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($antrian as $antri) : ?>
                            <tr>
                                <th scope="row"><?= $no++ ?></th>
                                <td><?= $antri->id_layanan; ?></td>
                                <td><?= $antri->id_dokter; ?></td>
                                <td><?= $antri->tanggal_antrian; ?></td>
                                <td><?= $antri->jam_antrian; ?></td>
                                <td><?= $antri->status; ?></td>
                                <td class="border-bottom-0 float-end">
                                    <div class="d-flex align-items-center gap-2">
                                        <a href="#" class="btn btn-primary btn-sm rounded-5 fw-semibold">Edit</a>
                                        <a href="#" class="btn btn-danger btn-sm rounded-5 fw-semibold">Delete</a>
                                    </div>
                                </td>
                            <?php endforeach; ?>
                            </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>