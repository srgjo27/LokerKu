<div class="post d-flex flex-column-fluid" id="kt_post">
    <!--begin::Container-->
    <div id="" class="container-xxl">
        <div class="card card-flush shadow-sm">
            <div class="card-header">
                <h3 class="card-title fs-3">
                    Deskripsi Barang
                </h3>
            </div>
            <div class="card-body">
                <form id="form_input">
                    <div class="row">
                        <div class="col-lg-12 mb-5">
                            <label for="description" class="required form-label">Deskripsi Barang</label>
                            <textarea class="form-control form-control-lg form-control-solid h-100px" name="description" id="description" placeholder=""></textarea>              
                        </div>
                        <div class="col-lg-12 mb-5">
                            <label for="file">Pilih File</label>
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
