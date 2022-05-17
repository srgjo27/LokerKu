<div class="post d-flex flex-column-fluid" id="kt_post">
    <!--begin::Container-->
    <div id="" class="container-xxl">
        <div class="card card-flush shadow-sm">
            <div class="card-header">
                <h3 class="card-title fs-3">
                    Item Detail
                </h3>
                <div class="card-toolbar">
                    <a href="{{ route('web.locker.index') }}" class="btn btn-icon btn-sm btn-active-light-primary ms-2">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12 mb-5">
                        {{ $locker->created_at}} @if($locker->status == 'taken') | {{ $locker->updated_at }}@endif
                    </div>
                    <div class="col-lg-12 mb-5">
                        <span class="bullet bg-primary me-3"></span>{{ $locker->name }}
                    </div>
                    <div class="col-lg-12">
                        @if ($locker->file)
                        {{-- <a href="{{asset('storage/lockers/'.$locker->file)}}" target="_blank">{{$locker->file}}</a> --}}
                        <img src="{{asset('storage/lockers/'.$locker->file)}}" alt="{{$locker->file}}" class="img-fluid" width="300" height="300">
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
                                    <div class="fs-8 text-gray-700">Anda masih belum menambahkan file/gambar barang.
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
                <div class="row">
                    <form id="form_input">
                        <div class="min-w-150px mt-10 text-center">

                        </div>
                    </form>
                </div>
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-end">
                            @if($locker->status == 'reserved')
                            <a href="javascript:;" onclick="handle_confirm('Apakah Anda Yakin?','Yakin','Tidak','PATCH','{{ route('web.locker.status', $locker->id) }}');" class="btn btn-sm btn-success">
                                <i class="fa fa-check"></i>
                                Take
                            </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end::Container-->
</div>