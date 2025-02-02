<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container my-5">
        <h1 class="text-center mb-4">Edit Barang</h1>

        <form action="<?php echo base_url('barang/edit_action/' . $barang->id); ?>" method="post">
            <div class="mb-3">
                <label for="nama_barang" class="form-label">Nama Barang</label>
                <input type="text" id="nama_barang" name="nama_barang" value="<?php echo $barang->nama_barang; ?>" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="kode_barang" class="form-label">Kode Barang</label>
                <input type="text" id="kode_barang" name="kode_barang" value="<?php echo $barang->kode_barang; ?>" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="jumlah" class="form-label">Jumlah</label>
                <input type="number" id="jumlah" name="jumlah" value="<?php echo $barang->jumlah; ?>" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="kondisi" class="form-label">Kondisi</label>
                <select id="kondisi" name="kondisi" class="form-select" required>
                    <option value="Baik" <?php echo ($barang->kondisi == 'Baik') ? 'selected' : ''; ?>>Baik</option>
                    <option value="Rusak" <?php echo ($barang->kondisi == 'Rusak') ? 'selected' : ''; ?>>Rusak</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="lokasi" class="form-label">Lokasi</label>
                <input type="text" id="lokasi" name="lokasi" value="<?php echo $barang->lokasi; ?>" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="stok_minimum" class="form-label">Stok Minimum</label>
                <input type="number" id="stok_minimum" name="stok_minimum" class="form-control" value="<?php echo $barang->stok_minimum; ?>" required>
            </div>


            <button type="submit" class="btn btn-primary">Update</button>
            <a href="<?php echo base_url('barang'); ?>" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</body>
</html>
