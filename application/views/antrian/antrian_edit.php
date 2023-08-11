<div class="container-fluid">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Form Edit antrian
                    <a href="<?= base_url('antrian') ?>" class="btn btn-primary btn-sm float-end">
                        <i class="ti ti-arrow-back-up"></i>
                        &nbsp; Kembali ke antrian
                    </a>
                </h5>
                <div class="card">
                    <div class="card-body">
                        <form>
                            <div class="mb-3">
                                <label for="" class="form-label">layanan</label>
                                <select name="layanan" id="layanan" class="form-control">
                                    <option value="">- pilih -</option>
                                    <?php foreach ($layanan as $la) : ?>
                                        <option value="<?= $la->id_layanan ?>"><?= $la->nama ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">dokter</label>
                                <select name="dokter" id="dokter" class="form-control">
                                    <option value="">- pilih -</option>
                                    <?php foreach ($dokter as $do) : ?>
                                        <option value="<?= $do->id_dokter ?>"><?= $do->nama_dokter ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Tanggal Antrian</label>
                                <input type="date" name="tanggal" class="form-control" value="<?= $antrian->tanggal_antrian ?>">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Jam Anttrian</label>
                                <input type="time" name="jam_antrian" class="form-control" value="<?= $antrian->jam_antrian ?>">
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