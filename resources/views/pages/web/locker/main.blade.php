<x-app-layout title="Locker">
    <div id="content_list" class="container-xxl">
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
    @section('custom_js')
    <script>
        load_list(1);
    </script>
    @endsection
</x-app-layout>