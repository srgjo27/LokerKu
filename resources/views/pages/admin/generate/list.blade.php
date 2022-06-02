        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="kt_datatable_example_1" class="table table-row-bordered gy-5">
                        <thead>
                            <tr class="fw-bold fs-6 text-muted">
                                <th>No</th>
                                <th>Nama</th>
                                <th>Nama Barang</th>
                                <th>Waktu Pemasukan</th>
                                <th>Waktu Pengambilan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($lockers as $key => $value)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $value->user->name }}</td>
                                <td>{{ $value->name }}</td>
                                <td>{{ $value->created_at }}</td>
                                <td>
                                    @if ($value->status == 'taken')
                                    {{ $value->updated_at }}
                                    @else
                                    -
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="d-flex flex-stack flex-wrap pt-10">
                    <div class="fs-6 fw-bold text-gray-700">
                        Showing {{ $lockers->firstItem() }} to {{ $lockers->lastItem() }} of {{ $lockers->total() }}
                    </div>
                    {{ $lockers->links('theme.app.pagination') }}
                </div>
            </div>
        </div>