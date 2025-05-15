<header class="masthead bg-primary text-white text-center">
    <div class="container d-flex align-items-center flex-column">
        <!-- Masthead Avatar Image-->
        <img class="masthead-avatar mb-5" src="{{ asset('assets/img/tiket.png') }}" alt="..." />
        <!-- Masthead Heading-->
        <h1 class="masthead-heading text-uppercase mb-0">Pesan Ticket</h1>
        <!-- Icon Divider-->
        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Tombol Beli Tiket-->
<button class="btn btn-light btn-lg mt-3" data-bs-toggle="modal" data-bs-target="#pesanTiketModal">
    PESAN TICKET SEKARANG
</button>

    </div>
</header>

<!-- Modal -->
<div class="modal fade" id="pesanTiketModal" tabindex="-1" aria-labelledby="pesanTiketLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content text-start">
      <div class="modal-header">
        <h5 class="modal-title" id="pesanTiketLabel">Pesan Tiket</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="nama" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" id="nama" placeholder="Masukkan nama Anda">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Alamat Email</label>
            <input type="email" class="form-control" id="email" placeholder="nama@email.com">
          </div>
          <div class="mb-3">
            <label for="jumlah" class="form-label">Jumlah Tiket</label>
            <input type="number" class="form-control" id="jumlah" min="1" value="1">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Pesan</button>
      </div>
    </div>
  </div>
</div>
