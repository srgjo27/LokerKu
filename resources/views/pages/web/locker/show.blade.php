<div class="post d-flex flex-column-fluid" id="kt_post">
    <!--begin::Container-->
    <div id="" class="container-xxl">
        <div class="card card-flush shadow-sm">
            <div class="card-header">
                <h3 class="card-title fs-3">
                    Deskripsi Barang
                </h3>
                <div class="card-toolbar">
                    {{-- <a href="{{ route('web.locker.index') }}" class="btn btn-icon btn-sm btn-hover-light-primary mr-1"> --}}
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12 mb-5">
                        {{ $locker->created_at . ' | ' . $locker->updated_at }}
                        <p class="form-control-static">{{ $locker->description }}</p>             
                    </div>
                    <div class="col-lg-12">
                        @if ($locker->file)
                            <a href="{{asset('storage/lockers/'.$locker->file)}}" target="_blank">{{$locker->file}}</a>
                        @else
                            <!--begin::Notice-->
                            <div class="notice d-flex bg-light-warning rounded border-warning border border-dashed p-6">
                                <!--begin::Icon-->
                                <!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
                                <span class="svg-icon svg-icon-2tx svg-icon-warning me-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor"></rect>
                                        <rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)" fill="currentColor"></rect>
                                        <rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)" fill="currentColor"></rect>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                                <!--end::Icon-->
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-stack flex-grow-1">
                                    <!--begin::Content-->
                                    <div class="fw-bold">
                                        <h6 class="text-gray-900 fw-bolder">File Not Found</h6>
                                        <div class="fs-8 text-gray-700">Anda masih belum menambahkan file/gambar barang.</div> 
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
        </div><br>
        <!--begin::Message-->
        @if($locker->message)
        <div class="card card-flush shadow-sm">
            <div class="card-header">
                <h3 class="card-title fs-3">
                    Pesan
                </h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12 mb-5">
                        <p class="form-control-static">{{ $locker->message }}</p>               
                    </div>
                </div>
            </div>
        </div><br>
        @endif
        <!--end::Message-->
        <!--begin::Hostory-->
        <div class="card card-flush shadow-sm">
            <div class="card-header">
                <h3 class="card-title fs-3">
                    History
                </h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12 mb-5">
                        <div class="d-flex flex-column text-gray-600">
                            <div class="d-flex align-items-center py-2">
                            <span class="bullet bg-primary me-3"></span></div>
                        </div>               
                    </div>
                </div>
            </div>
        </div><br>
        <!--end::Hostory-->
        <!--begin::Status-->
        <div class="card card-flush shadow-sm">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12 mb-5">
                        <form id="form_input">
                            <div class="row">
                                <div class="col-lg-12">
                                    <label for="status" class="form-label">Keterangan</label>
                                    <input type="text" class="form-control form-control-lg form-control-solid" id="status" name="status">
                                </div>
                                <div class="min-w-100px mt-5 text-center">
                                    <button id="tombol_simpan" onclick="handle_upload('#tombol_simpan','#form_input','{{route('web.locker.update',$locker->id)}}','PUT');" class="btn btn-sm btn-success">
                                        <i class="la la-check"></i>
                                        Tandai
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--end::Status-->
    </div>
<!--end::Container-->
</div>
