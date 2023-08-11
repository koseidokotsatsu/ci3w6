<div class="container-fluid">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Form tambah Pengguna
                    <a href="<?= base_url('pengguna') ?>" class="btn btn-primary btn-sm float-end">
                        <i class="ti ti-arrow-back-up"></i>
                        &nbsp; Kembali ke Pengguna
                    </a>
                </h5>
                <div class="card">
                    <div class="card-body">
                        <form method="post" action="<?= base_url('pengguna/insert') ?>">
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama Pengguna</label>
                                <input type="text" class="form-control" name="nama" id="nama">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" id="email">
                            </div>
                            <div class="mb-3">
                                <label for="telpon" class="form-label">No Telpon</label>
                                <input type="text" class="form-control" name="telpon" id="telpon">
                            </div>
                            <div class="mb-3">
                                <label for="info" class="form-label">Informasi</label>
                                <input type="text" class="form-control" name="informasi" id="info">
                            </div>
                            <button type="button" class="btn btn-warning float-center">Batal</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>