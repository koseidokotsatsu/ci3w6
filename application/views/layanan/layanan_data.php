<div class="col-lg-12 d-flex align-items-stretch">
    <div class="card w-100">
        <div class="card-body p-4">
            <?php if (validation_errors()) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php endif ?>

            <?= $this->session->flashdata('pesan_layanan'); ?>

            <h5 class="card-title fw-semibold mb-4">Data Layanan <a href="<?= base_url('layanan/tambah') ?>" class="btn btn-primary btn-sm float-end"><i class="ti ti-plus"></i>Tambah Data
                    Layanan</a></h5>
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
                                <h6 class="fw-semibold mb-0">Deskripsi</h6>
                            </th>
                            <h6 class="fw-semibold mb-0 float-end">Aksi</h6>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($layanan as $l) : ?>
                            <tr>
                                <th scope="row"><?= $no++ ?></th>
                                <td><?= $l->nama ?></td>
                                <td><?= $l->deskripsi ?></td>
                                <td class="border-bottom-0 float-end">
                                    <div class="d-flex align-items-center gap-2">
                                        <a href="<?= base_url('layanan/edit/') . $l->id_layanan; ?>" class="btn btn-primary btn-sm rounded-5 fw-semibold">Edit</a>
                                        <a href="#" class="btn btn-danger btn-sm rounded-5 fw-semibold">Delete</a>
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