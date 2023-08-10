<div class="container-fluid">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Form tambah Jadwal
                    <a href="<?= base_url('jadwal') ?>" class="btn btn-primary btn-sm float-end">
                        <i class="ti ti-arrow-back-up"></i>
                        &nbsp; Kembali ke Jadwal
                    </a>
                </h5>
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="<?= base_url(); ?>jadwal/insert">
                            <div class="mb-3">
                                <label for="" class="form-label">Nama Jadwal</label>
                                <input type="text" class="form-control" id="nama_jadwal" name="nama_jadwal">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Tanggal</label>
                                <input type="date" class="form-control" id="tanggal" name="tanggal">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Jam Tersedia</label>
                                <input type="time" class="form-control" id="jam_mulai" name="jam_mulai">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Jam Selesai</label>
                                <input type="time" class="form-control" id="jam_selesai" name="jam_selesai">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Status</label>
                                <select name="status" id="status" class="form-control">
                                    <option value="tersedia" selected>Tersedia</option>
                                    <option value="tidak tersedia">Tidak Tersedia</option>
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