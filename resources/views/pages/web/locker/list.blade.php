<!--begin::Add new card-->
<div class="col-md-4">
    <!--begin::Card-->
    <div class="card h-md-100">
        <!--begin::Card body-->
        <div class="card-body d-flex flex-center">
            <!--begin::Button-->
            <a href="javascript:;" onclick="load_input('{{route('web.locker.create')}}');"
                class="btn btn-clear d-flex flex-column flex-center">
                <!--begin::Illustration-->
                <img src="assets/media/illustrations/sketchy-1/4.png" alt="" class="mw-100 mh-150px mb-7">
                <!--end::Illustration-->
                <!--begin::Label-->
                <div class="fw-bolder fs-3 text-gray-600 text-hover-primary">Add Item</div>
                <!--end::Label-->
            </a>
            <!--end::Button-->
        </div>
        <!--begin::Card body-->
    </div>
</div>
<!--begin::Card-->
@foreach ($lockers as $item)
<div class="col-md-4">
    <!--begin::Card-->
    <div class="card card-flush h-md-100">
        <!--begin::Card header-->
        <div class="card-header">
            <!--begin::Card title-->
            <div class="card-title">
                <h2>Description Item</h2>
            </div>
            <!--end::Card title-->
            <div class="card-toolbar">
                @if ($item->status == 'reserved')
                <span class="badge badge-pill badge-warning">reserved</span>
                @elseif ($item->status == 'taken')
                <span class="badge badge-pill badge-success">taken</span>
                @endif
            </div>
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body pt-1">
            <!--begin::Users-->
            <div class="fw-bolder text-gray-600 mb-5">{{ $item->created_at}} @if($item->status == 'taken') |
                {{ $item->updated_at }}@endif</div>
            <!--end::Users-->
            <!--begin::Permissions-->
            <div class="d-flex flex-column text-gray-600">
                <div class="d-flex align-items-center py-2">
                    <span class="bullet bg-primary me-3"></span>{{ $item->name }}
                </div>
            </div>
            <!--end::Permissions-->
        </div>
        <!--end::Card body-->
        <!--begin::Card footer-->
        <div class="card-footer flex-wrap pt-0">
            <a href="javascript:;" onclick="load_detail('{{route('web.locker.show',$item->id)}}');"
                class="menu-link px-3"><i class="fa fa-eye text-primary"></i>View</a>
            @if ($item->status == 'reserved')
            <a href="javascript:;" onclick="load_input('{{route('web.locker.edit',$item->id)}}');"
                class="menu-link px-3"><i class="fa fa-edit text-warning"></i>Edit</a>
            <a href="javascript:;"
                onclick="handle_confirm('Apakah Anda Yakin?','Yakin','Tidak','DELETE','{{route('web.locker.destroy',$item->id)}}');"
                class="menu-link px-3"><i class="fa fa-trash text-danger"></i>Delete</a>
            @endif
        </div>
        <!--end::Card footer-->
    </div>
    <!--end::Card-->
</div>
@endforeach