<x-app-layout title="Locker">
    <div id="kt_content_container" class="container-xxl">
        <div class="card card-custom">
            <div class="card-body" style="line-height: 4em;">
                <form action="" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi Barang:</label>
                        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" placeholder="Deskripsi"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan">
                    </div><br>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-success btn-elevation-1 btn-elevation-2a">
                            <i class="fa fa-check"></i>
                            Tandai
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>