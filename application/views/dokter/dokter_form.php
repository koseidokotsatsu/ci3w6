<div class="container-fluid">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Form tambah Dokter
                    <a href="<?= base_url('dokter') ?>" class="btn btn-primary btn-sm float-end">
                        <i class="ti ti-arrow-back-up"></i>
                        &nbsp; Kembali ke Dokter
                    </a>
                </h5>
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="<?= base_url(); ?>dokter/insert">
                            <div class="mb-3">
                                <label for="" class="form-label">Nama Dokter</label>
                                <input type="text" class="form-control" id="nama_dokter" name="nama_dokter">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Spesiali</label>
                                <input type="text" class="form-control" id="spesialis" name="spesialis">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Jadwal</label>
                                <select name="id_jadwal" id="id_jadwal" class="form-control">
                                    <option value="">Pilih Jadwal</option>
                                    <?php foreach ($jadwal as $j) : ?>
                                        <option value="<?= $j['id_jadwal']; ?>"><?= $j['nama_jadwal']; ?></option>
                                    <?php endforeach ?>
                                </select>
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