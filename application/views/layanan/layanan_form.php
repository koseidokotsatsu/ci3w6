<div class="container-fluid">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Form tambah layanan
                    <a href="<?= base_url('layanan') ?>" class="btn btn-primary btn-sm float-end">
                        <i class="ti ti-arrow-back-up"></i>
                        &nbsp; Kembali ke layanan
                    </a>
                </h5>
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="<?= base_url(); ?>layanan/insert">
                            <div class="mb-3">
                                <label for="" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Deskripsi</label>
                                <input type="text" class="form-control" id="deskripsi" name="deskripsi">
                            </div>
                            <button type="reset" class="btn btn-warning float-center">Batal</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>