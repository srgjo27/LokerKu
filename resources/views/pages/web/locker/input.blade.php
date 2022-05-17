<div class="post d-flex flex-column-fluid" id="kt_post">
    <!--begin::Container-->
    <div id="" class="container-xxl">
        <div class="card card-flush shadow-sm">
            <div class="card-header">
                <h3 class="card-title fs-3">
                    @if($locker->id)
                        Edit
                    @else
                        New 
                    @endif
                        Item
                </h3>
                <div class="card-toolbar">
                    <a href="{{ route('web.locker.index') }}" class="btn btn-icon btn-sm btn-active-light-primary ms-2">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
            </div>
            <div class="card-body">
                <form id="form_input">
                    <div class="row">
                        <div class="col-lg-12 mb-5">
                            <label for="name" class="required form-label">Nama Barang</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Nama barang" value="{{ $locker->name }}">             
                        </div>
                        <div class="col-lg-12 mb-5">
                            <label for="file">Choose File</label>
                            <input type="file" class="form-control form-control-lg form-control-solid" id="file" name="file">             
                        </div>
                    </div>
                    <div class="row">
                        <div class="min-w-150px mt-10 text-end">
                            @if ($locker->id)
                            <button id="tombol_simpan" onclick="handle_upload('#tombol_simpan','#form_input','{{route('web.locker.update',$locker->id)}}','PATCH');" class="btn btn-sm btn-primary">Save</button>
                            @else
                            <button id="tombol_simpan" onclick="handle_upload('#tombol_simpan','#form_input','{{route('web.locker.store')}}','POST');" class="btn btn-sm btn-primary">Save</button>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--end::Container-->
</div>