<x-app-layout title="Locker">
    <div id="content_list" class="container-xxl">
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
        </div>
        <div id="list_result" class="card-body">
            <!-- -->
        </div>
    </div>
    @section('custom_js')
    <script>
        load_list(1);
    </script>
    @endsection
</x-app-layout>