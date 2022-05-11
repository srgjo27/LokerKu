<x-app-layout title="Mahasiswa">
    <div id="kt_content_container" class="container-xxl">
        <div class="card card-custom">
            <div class="card-body" style="line-height: 4em;">
                <form action="" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="5" placeholder="Deskripsi"></textarea>
                    </div>
                    <div class="form-group" style="float: right;">
                        <a href="{{ route ('admin.pesan.index') }}" class="btn btn-primary" onclick="kirimPesan()">
                            <i class="fa fa-paper-plane"></i> Kirim Pesan
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
