<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Data Pasien</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="links">
                    <a href="/">Home</a>
                    <a href="/pasien">Master Pasien</a>
                    <a href="https://laracasts.com">Master Dokter</a>
                    <a href="https://laravel-news.com">Master Perawat</a>
                    <a href="https://blog.laravel.com">Transaksi Pendaftaran</a>
                    
                </div>
    <div class="container mt-5">
        <h2>Form Input Data Pasien</h2>
        <form action="{{ route('pasien.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama" required maxlength="60">
            </div>
            <div class="form-group">
                <label for="nrm">NRM:</label>
                <input type="text" class="form-control" id="nrm" name="nrm" required maxlength="6">
            </div>
            <div class="form-group">
                <label for="tempat_lahir">Tempat Lahir:</label>
                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" maxlength="30">
            </div>
            <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir:</label>
                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir">
            </div>
            <div class="form-group">
                <label for="gender">Jenis Kelamin:</label>
                <select class="form-control" id="gender" name="gender" required>
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <textarea class="form-control" id="alamat" name="alamat" rows="3" required maxlength="100"></textarea>
            </div>
            <div class="form-group">
                <label for="nomor_jamkes">Nomor Jamkes:</label>
                <input type="text" class="form-control" id="nomor_jamkes" name="nomor_jamkes" required maxlength="16">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
