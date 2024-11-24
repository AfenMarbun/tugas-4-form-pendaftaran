<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Formulir Reservasi</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Formulir Reservasi</h1>
        <div class="row justify-content-center">
          <div class="col-md-6">
            <form action="process.php" method="POST" enctype="multipart/form-data">
              <div class="mb-3">
                <label for="name" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan nama Anda" required />
              </div>
              <div class="mb-3">
                <label for="phone" class="form-label">Nomor Telepon</label>
                <input type="tel" class="form-control" id="phone" name="phone" placeholder="Masukkan nomor telepon" required />
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email Anda" />
              </div>
      
              <div class="mb-3">
                <label for="reservationType" class="form-label">Jenis Reservasi</label>
                <select class="form-select" id="reservationType" name="reservationType" required>
                  <option value="" selected disabled>Pilih jenis reservasi</option>
                  <option value="hotel">Hotel</option>
                  <option value="restoran">Restoran</option>
                  <option value="sewaKendaraan">Sewa Kendaraan</option>
                  <option value="event">Event</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="date" class="form-label">Tanggal Reservasi</label>
                <input type="date" class="form-control" id="date" name="date" required />
              </div>
              <div class="mb-3">
                <label for="time" class="form-label">Waktu Reservasi</label>
                <input type="time" class="form-control" id="time" name="time" required />
              </div>
              <div class="mb-3">
                <label for="guestCount" class="form-label">Jumlah Orang</label>
                <input type="number" class="form-control" id="guestCount" name="guestCount" placeholder="Masukkan jumlah orang" required />
              </div>
      
              <div class="mb-3">
                <label for="specialRequest" class="form-label">Permintaan Khusus (Unggah File Teks)</label>
                <input type="file" class="form-control" id="specialRequest" name="specialRequest" accept=".txt" required />
              </div>
      
              <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" id="terms" name="terms" required />
                <label class="form-check-label" for="terms">
                  Saya setuju dengan syarat dan ketentuan yang berlaku.
                </label>
              </div>
      
              <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
          </div>
        </div>
      </div>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
      integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
