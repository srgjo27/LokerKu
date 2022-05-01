<x-app-layout title="Mahasiswa">
    <div id="kt_content_container" class="container-xxl">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped" id="table_id">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Mahasiswa</th>
                                <th>Tanggal Disimpan</th>
                                <th>Tanggal Diambil</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- contoh data --}}
                            <tr>
                                <td>1</td>
                                <td>Ester Simamora</td>
                                <td>2020-01-01 09:00</td>
                                <td>2020-01-01 15:00</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Santa Sinaga</td>
                                <td>2020-01-01 09:00</td>
                                <td>2020-01-01 15:00</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Elisa Simanjuntak</td>
                                <td>2020-01-01 09:00</td>
                                <td>2020-01-01 15:00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>