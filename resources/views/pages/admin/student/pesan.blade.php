<x-app-layout title="Mahasiswa">
    <div id="kt_content_container" class="container-xxl">
        <div class="card card-custom text-center">
            <div class="card-body" style="line-height: 4em;">
                <form action="" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="deskripsi">Pesan</label>
                        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="5" placeholder="Tuliskan pesan..."></textarea>
                    </div><br>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-icon-sm">
                            <span class="btn-inner--icon"><i class="fas fa-paper-plane"></i></span>
                            <span class="btn-inner--text">Kirim</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
