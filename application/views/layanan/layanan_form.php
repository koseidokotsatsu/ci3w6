<div class="container-fluid">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
<<<<<<< HEAD
                <h5 class="card-title fw-semibold mb-4">Form tambah layanan
                    <a href="<?= base_url('layanan') ?>" class="btn btn-primary btn-sm float-end">
                        <i class="ti ti-arrow-back-up"></i>
                        &nbsp; Kembali ke layanan
=======
                <h5 class="card-title fw-semibold mb-4">Form tambah Layanan
                    <a href="<?= base_url('layanan') ?>" class="btn btn-primary btn-sm float-end">
                        <i class="ti ti-arrow-back-up"></i>
                        &nbsp; Kembali ke Layanan
>>>>>>> d1b233709ef911e11a7c7ec0e61c33b19660835d
                    </a>
                </h5>
                <div class="card">
                    <div class="card-body">
<<<<<<< HEAD
                        <form>
                            <div class="mb-3">
                                <label for="" class="form-label">Nama layanan</label>
                                <input type="text" class="form-control" id="">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Alamat</label>
                                <input type="text" class="form-control" id="">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Email</label>
                                <input type="email" class="form-control" id="">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">No Telpon</label>
                                <input type="text" class="form-control" id="">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Informasi</label>
                                <input type="text" class="form-control" id="">
                            </div>
                            <button type="button" class="btn btn-warning float-center">Batal</button>
=======
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
>>>>>>> d1b233709ef911e11a7c7ec0e61c33b19660835d
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>