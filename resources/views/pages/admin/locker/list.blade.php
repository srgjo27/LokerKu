<div class="content d-flex flex-column flex-column-fluid" id="">
    <div id="" class="container-xxl">
        <div class="row g-6 g-xl-9">
            @foreach ($lockers as $locker)   
            <div class="col-md-6 col-xxl-4 py-1 px-1">
                <div class="card border bg-light-primary">
                    <div class="card-body d-flex flex-center flex-column p-9">
                        <div class="mb-5">
                            <div class="symbol symbol-75px symbol-circle">             
                                @if ($locker->user_image != null)
                                    <img src="{{ asset('public/profiles/'.$locker->user_image) }}" class="symbol-shape" />
                                @else
                                    <i class="fa fa-user"></i>
                                @endif
                            </div>
                        </div>
                        <h4 class="text-center mb-0">{{ $locker->user_name }}</h4>
                        <div class="fw-bold text-gray-400 mb-6">
                            @if($locker->dormitory_id == null)
                                <span class="badge badge-pill badge-warning">Belum Diatur</span>
                            @else
                                <span class="badge badge-pill badge-success">{{ $locker->dorm_name }}</span>
                                {{-- {{ \App\Models\Dormitory::where('id',$locker->dormitory_id)->first()->name }} --}}
                            @endif
                        </div>
                        <a href="javascript:;" onclick="load_detail('{{route('admin.locker.show',$locker->id)}}');"
                            class="btn btn-sm btn-light-warning fw-bolder">
                            View
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="d-flex flex-stack flex-wrap pt-10">
            <div class="fs-6 fw-bold text-gray-700">
                Showing {{ $lockers->firstItem() }} to {{ $lockers->lastItem() }} of {{ $lockers->total() }}
            </div>
            {{ $lockers->links('theme.app.pagination') }}
        </div>
    </div>
</div>