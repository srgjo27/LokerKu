<x-app-layout title="Locker">
    <div id="kt_content_container" class="container-xxl">
        <div class="card card-custom">
            <div class="card-body" style="line-height: 4em;">
                <form action="" method="POST">
                    @csrf
                    <div>
                        <div class="form-group">
                            <label for="deskripsi" class="fs-4">Deskripsi Barang:</label>
                            <input type="text" class="form-control" name="deskripsi" placeholder="" required>
                        </div>
                        <div class="form-group">
                            <label for="jumlah" class="fs-4">Jam:</label>
                            <input type="time" class="form-control" placeholder="" required>
                        </div>
                        <div class="form-group">
                            <label for="jumlah" class="fs-4">Tanggal:</label>
                            <input type="date" class="form-control" placeholder="" required>
                        </div>
                        <div class="form-group">
                            <label for="file" class="fs-4">File:</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="file" name="file" required>
                                <label class="custom-file-label" for="file">Choose file</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary">Tambahkan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>