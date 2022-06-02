<x-app-layout title="Locker">
    <div id="content_list" class="container-xxl">
        <div class="card card-flush shadow-sm">
            <div class="card-header">
                <div class="card-title">
                    <!-- -->
                </div>
                <div class="card-toolbar">
                    <a href="{{ route('admin.generate.index') }}" class="btn btn-light-primary btn-sm">
                        <i class="fas fa-print"></i>
                        Generate Locker
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div id="kt_docs_search_handler_basic" data-kt-search-keypress="true"
                            data-kt-search-min-length="2" data-kt-search-enter="true" data-kt-search-layout="inline">
                            <form id="content_filter" data-kt-search-element="form" class="w-100 position-relative mb-5" autocomplete="off">
                                <input type="text" name="keywords" onkeyup="load_list(1);"
                                    class="form-control form-control-lg form-control-solid px-15 bg-white"
                                    placeholder="Search..." />
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card bg-secondary py-1 text-center">
                            <h4>Detail Mahasiswa</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div id="list_result" class="card-body">
                <!-- -->
            </div>
        </div>
    </div>
    <div id="content_detail" class="container-xxl">
    </div>
    @section('custom_js')
    <script>
        load_list(1);
    </script>
    @endsection
</x-app-layout>