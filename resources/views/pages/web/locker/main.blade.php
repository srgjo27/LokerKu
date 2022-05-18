<x-app-layout title="Locker">
    <div id="content_list" class="container-xxl">
        <div id="kt_docs_search_handler_basic" data-kt-search-keypress="true" data-kt-search-min-length="2"
            data-kt-search-enter="true" data-kt-search-layout="inline">

            <!--begin::Input Form-->
            <form id="content_filter" data-kt-search-element="form" class="w-100 position-relative mb-5"
                autocomplete="off">
                <input type="text" name="keywords" onkeyup="load_list(1);"
                    class="form-control form-control-lg form-control-solid px-15 bg-white" placeholder="Search..." />
            </form>
            <!--end::Form-->

        </div>
        <!--begin::Row-->
        <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 g-5 g-xl-9" id="list_result">
            <!--begin::Add new card-->
        </div>
        <!--end::Row-->
    </div>
    <div id="content_input" class="container-xxl">
        <!--begin::Row-->
        <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 g-5 g-xl-9">
            <!--begin::Add new card-->
        </div>
        <!--end::Row-->
    </div>
    <div id="content_detail" class="container-xxl">
        <!--begin::Row-->
        <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 g-5 g-xl-9">
            <!--begin::Add new card-->
        </div>
        <!--end::Row-->
    </div>
    @section('custom_js')
    <script>
        load_list(1);
    </script>
    @endsection
</x-app-layout>