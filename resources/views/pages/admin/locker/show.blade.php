<div class="row">
    <div class="card-body text-end">
        <a href="{{ route('admin.message.index', $user->id) }}" class="btn btn-primary btn-icon-sm btn-shadow" data-toggle="tooltip" data-placement="top" title="{{ __('admin.messages') }}">
            <i class="fa fa-envelope"></i>
        </a>
    </div>
</div>
<div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 g-5 g-xl-9">
    @foreach ($lockers as $item)
    <div class="col-md-4">
        <div class="card card-flush h-md-100">
            <div class="card-header">
                <div class="card-title">
                    <h2>Description Item</h2>
                </div>
                <div class="card-toolbar">
                    @if ($item->status == 'reserved')
                    <span class="badge badge-pill badge-warning">reserved</span>
                    @elseif ($item->status == 'taken')
                    <span class="badge badge-pill badge-success">taken</span>
                    @endif
                </div>
            </div>
            <div class="card-body pt-1">
                <div class="fw-bolder text-gray-600 mb-5">
                    {{ $item->created_at}} @if($item->status == 'taken') | {{ $item->updated_at }}@endif
                </div>
                <div class="d-flex flex-column text-gray-600">
                    <div class="d-flex align-items-center py-2">
                        <span class="bullet bg-primary me-3"></span>{{ $item->name }}
                    </div>
                </div>
            </div>
            <div class="card-footer flex-wrap pt-0">
                @if ($item->file)
                <img src="{{asset('storage/lockers/'.$item->file)}}" alt="{{$item->file}}" class="img-fluid" width="100" height="100">
                @else
                <!--begin::Notice-->
                <div class="notice d-flex bg-light-warning rounded border-warning border border-dashed p-6">
                    <!--begin::Icon-->
                    <!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
                    <span class="svg-icon svg-icon-2tx svg-icon-warning me-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none">
                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor">
                            </rect>
                            <rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)"
                                fill="currentColor"></rect>
                            <rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)"
                                fill="currentColor"></rect>
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                    <!--end::Icon-->
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-stack flex-grow-1">
                        <!--begin::Content-->
                        <div class="fw-bold">
                            <h6 class="text-gray-900 fw-bolder">File Not Found</h6>
                            <div class="fs-8 text-gray-700">Masih belum menambahkan file/gambar barang.
                            </div>
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Notice-->
                @endif
            </div>
        </div>
    </div>
    @endforeach
</div>

