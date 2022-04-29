<x-app-layout title="Locker">
    <div class="modal-header" _mstvisible="3">
        <!--begin::Modal title-->
        <h2 class="fw-bolder" _msthash="1315769" _msttexthash="305786" _mstvisible="4">Menambahkan Peran</h2>
        <!--end::Modal title-->
        <!--begin::Close-->
        <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-roles-modal-action="close" _mstvisible="4">
            <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
            <span class="svg-icon svg-icon-1" _mstvisible="5">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" _mstVisible="6">
                    <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" _mstVisible="7"></rect>
                    <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" _mstVisible="7"></rect>
                </svg>
            </span>
            <!--end::Svg Icon-->
        </div>
        <!--end::Close-->
    </div>
    <div class="modal-body scroll-y mx-lg-5 my-7" _mstvisible="3">
        <!--begin::Form-->
        <form id="kt_modal_add_role_form" class="form fv-plugins-bootstrap5 fv-plugins-framework" action="#" _mstvisible="4">
            <!--begin::Scroll-->
            <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_role_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_role_header" data-kt-scroll-wrappers="#kt_modal_add_role_scroll" data-kt-scroll-offset="300px" style="max-height: 324px;" _mstvisible="5">
                <!--begin::Input group-->
                <div class="fv-row mb-10 fv-plugins-icon-container" _mstvisible="6">
                    <!--begin::Label-->
                    <label class="fs-5 fw-bolder form-label mb-2" _mstvisible="7">
                        <span class="required" _msthash="1272297" _msttexthash="132691" _mstvisible="8">Nama peran</span>
                    </label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <input class="form-control form-control-solid" placeholder="Masukkan nama peran" name="role_name" _mstplaceholder="348257" _mstvisible="7">
                    <!--end::Input-->
                <div class="fv-plugins-message-container invalid-feedback" _mstvisible="7"></div></div>
                <!--end::Input group-->
                <!--begin::Permissions-->
                <div class="fv-row" _mstvisible="6">
                    <!--begin::Label-->
                    <label class="fs-5 fw-bolder form-label mb-2" _msthash="1273038" _msttexthash="131482" _mstvisible="7">Izin Peran</label>
                    <!--end::Label-->
                    <!--begin::Table wrapper-->
                    <div class="table-responsive" _mstvisible="7">
                        <!--begin::Table-->
                        <table class="table align-middle table-row-dashed fs-6 gy-5" _mstvisible="8">
                            <!--begin::Table body-->
                            <tbody class="text-gray-600 fw-bold" _mstvisible="9">
                                <!--begin::Table row-->
                                <tr _mstvisible="10">
                                    <td class="text-gray-800" _mstvisible="11"><font _mstmutation="1" _msthash="2935374" _msttexthash="387127" _mstvisible="12">Akses Administrator </font><i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="" data-bs-original-title="Allows a full access to the system" aria-label="Memungkinkan akses penuh ke sistem" _mstaria-label="902993" _mstvisible="12"></i></td>
                                    <td _mstvisible="11">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-9" _mstvisible="12">
                                            <input class="form-check-input" type="checkbox" value="" id="kt_roles_select_all" _mstvisible="13">
                                            <span class="form-check-label" for="kt_roles_select_all" _msthash="4304820" _msttexthash="157196" _mstvisible="13">Pilih semua</span>
                                        </label>
                                        <!--end::Checkbox-->
                                    </td>
                                </tr>
                                <!--end::Table row-->
                                <!--begin::Table row-->
                                <tr _mstvisible="10">
                                    <!--begin::Label-->
                                    <td class="text-gray-800" _msthash="2936089" _msttexthash="341068" _mstvisible="11">Manajemen Pengguna</td>
                                    <!--end::Label-->
                                    <!--begin::Options-->
                                    <td _mstvisible="11">
                                        <!--begin::Wrapper-->
                                        <div class="d-flex" _mstvisible="12">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20" _mstvisible="13">
                                                <input class="form-check-input" type="checkbox" value="" name="user_management_read" _mstvisible="14">
                                                <span class="form-check-label" _msthash="4922918" _msttexthash="88712" _mstvisible="14">Membaca</span>
                                            </label>
                                            <!--end::Checkbox-->
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20" _mstvisible="13">
                                                <input class="form-check-input" type="checkbox" value="" name="user_management_write" _mstvisible="14">
                                                <span class="form-check-label" _msthash="4923698" _msttexthash="96850" _mstvisible="14">Menulis</span>
                                            </label>
                                            <!--end::Checkbox-->
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-sm form-check-custom form-check-solid" _mstvisible="13">
                                                <input class="form-check-input" type="checkbox" value="" name="user_management_create" _mstvisible="14">
                                                <span class="form-check-label" _msthash="4924478" _msttexthash="178347" _mstvisible="14">Menciptakan</span>
                                            </label>
                                            <!--end::Checkbox-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </td>
                                    <!--end::Options-->
                                </tr>
                                <!--end::Table row-->
                                <!--begin::Table row-->
                                <tr _mstvisible="10">
                                    <!--begin::Label-->
                                    <td class="text-gray-800" _msthash="2936674" _msttexthash="282555" _mstvisible="11">Manajemen Konten</td>
                                    <!--end::Label-->
                                    <!--begin::Options-->
                                    <td _mstvisible="11">
                                        <!--begin::Wrapper-->
                                        <div class="d-flex" _mstvisible="12">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20" _mstvisible="13">
                                                <input class="form-check-input" type="checkbox" value="" name="content_management_read" _mstvisible="14">
                                                <span class="form-check-label" _msthash="4924322" _msttexthash="88712" _mstvisible="14">Membaca</span>
                                            </label>
                                            <!--end::Checkbox-->
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20" _mstvisible="13">
                                                <input class="form-check-input" type="checkbox" value="" name="content_management_write" _mstvisible="14">
                                                <span class="form-check-label" _msthash="4925102" _msttexthash="96850" _mstvisible="14">Menulis</span>
                                            </label>
                                            <!--end::Checkbox-->
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-sm form-check-custom form-check-solid" _mstvisible="13">
                                                <input class="form-check-input" type="checkbox" value="" name="content_management_create" _mstvisible="14">
                                                <span class="form-check-label" _msthash="4925882" _msttexthash="178347" _mstvisible="14">Menciptakan</span>
                                            </label>
                                            <!--end::Checkbox-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </td>
                                    <!--end::Options-->
                                </tr>
                                <!--end::Table row-->
                                <!--begin::Table row-->
                                <tr _mstvisible="10">
                                    <!--begin::Label-->
                                    <td class="text-gray-800" _msthash="3011632" _msttexthash="338351" _mstvisible="11">Manajemen Keuangan</td>
                                    <!--end::Label-->
                                    <!--begin::Options-->
                                    <td _mstvisible="11">
                                        <!--begin::Wrapper-->
                                        <div class="d-flex" _mstvisible="12">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20" _mstvisible="13">
                                                <input class="form-check-input" type="checkbox" value="" name="financial_management_read" _mstvisible="14">
                                                <span class="form-check-label" _msthash="5010746" _msttexthash="88712" _mstvisible="14">Membaca</span>
                                            </label>
                                            <!--end::Checkbox-->
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20" _mstvisible="13">
                                                <input class="form-check-input" type="checkbox" value="" name="financial_management_write" _mstvisible="14">
                                                <span class="form-check-label" _msthash="5011526" _msttexthash="96850" _mstvisible="14">Menulis</span>
                                            </label>
                                            <!--end::Checkbox-->
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-sm form-check-custom form-check-solid" _mstvisible="13">
                                                <input class="form-check-input" type="checkbox" value="" name="financial_management_create" _mstvisible="14">
                                                <span class="form-check-label" _msthash="5012306" _msttexthash="178347" _mstvisible="14">Menciptakan</span>
                                            </label>
                                            <!--end::Checkbox-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </td>
                                    <!--end::Options-->
                                </tr>
                                <!--end::Table row-->
                                <!--begin::Table row-->
                                <tr _mstvisible="10">
                                    <!--begin::Label-->
                                    <td class="text-gray-800" _msthash="3012256" _msttexthash="134732" _mstvisible="11">Pelaporan</td>
                                    <!--end::Label-->
                                    <!--begin::Options-->
                                    <td _mstvisible="11">
                                        <!--begin::Wrapper-->
                                        <div class="d-flex" _mstvisible="12">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20" _mstvisible="13">
                                                <input class="form-check-input" type="checkbox" value="" name="reporting_read" _mstvisible="14">
                                                <span class="form-check-label" _msthash="5012189" _msttexthash="88712" _mstvisible="14">Membaca</span>
                                            </label>
                                            <!--end::Checkbox-->
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20" _mstvisible="13">
                                                <input class="form-check-input" type="checkbox" value="" name="reporting_write" _mstvisible="14">
                                                <span class="form-check-label" _msthash="5012969" _msttexthash="96850" _mstvisible="14">Menulis</span>
                                            </label>
                                            <!--end::Checkbox-->
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-sm form-check-custom form-check-solid" _mstvisible="13">
                                                <input class="form-check-input" type="checkbox" value="" name="reporting_create" _mstvisible="14">
                                                <span class="form-check-label" _msthash="5013749" _msttexthash="178347" _mstvisible="14">Menciptakan</span>
                                            </label>
                                            <!--end::Checkbox-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </td>
                                    <!--end::Options-->
                                </tr>
                                <!--end::Table row-->
                                <!--begin::Table row-->
                                <tr _mstvisible="10">
                                    <!--begin::Label-->
                                    <td class="text-gray-800" _msthash="3012880" _msttexthash="152724" _mstvisible="11">Penggajian</td>
                                    <!--end::Label-->
                                    <!--begin::Options-->
                                    <td _mstvisible="11">
                                        <!--begin::Wrapper-->
                                        <div class="d-flex" _mstvisible="12">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20" _mstvisible="13">
                                                <input class="form-check-input" type="checkbox" value="" name="payroll_read" _mstvisible="14">
                                                <span class="form-check-label" _msthash="5013632" _msttexthash="88712" _mstvisible="14">Membaca</span>
                                            </label>
                                            <!--end::Checkbox-->
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20" _mstvisible="13">
                                                <input class="form-check-input" type="checkbox" value="" name="payroll_write" _mstvisible="14">
                                                <span class="form-check-label" _msthash="5014412" _msttexthash="96850" _mstvisible="14">Menulis</span>
                                            </label>
                                            <!--end::Checkbox-->
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-sm form-check-custom form-check-solid" _mstvisible="13">
                                                <input class="form-check-input" type="checkbox" value="" name="payroll_create" _mstvisible="14">
                                                <span class="form-check-label" _msthash="5015192" _msttexthash="178347" _mstvisible="14">Menciptakan</span>
                                            </label>
                                            <!--end::Checkbox-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </td>
                                    <!--end::Options-->
                                </tr>
                                <!--end::Table row-->
                                <!--begin::Table row-->
                                <tr _mstvisible="10">
                                    <!--begin::Label-->
                                    <td class="text-gray-800" _msthash="3011619" _msttexthash="340080" _mstvisible="11">Manajemen Sengketa</td>
                                    <!--end::Label-->
                                    <!--begin::Options-->
                                    <td _mstvisible="11">
                                        <!--begin::Wrapper-->
                                        <div class="d-flex" _mstvisible="12">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20" _mstvisible="13">
                                                <input class="form-check-input" type="checkbox" value="" name="disputes_management_read" _mstvisible="14">
                                                <span class="form-check-label" _msthash="5010733" _msttexthash="88712" _mstvisible="14">Membaca</span>
                                            </label>
                                            <!--end::Checkbox-->
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20" _mstvisible="13">
                                                <input class="form-check-input" type="checkbox" value="" name="disputes_management_write" _mstvisible="14">
                                                <span class="form-check-label" _msthash="5011513" _msttexthash="96850" _mstvisible="14">Menulis</span>
                                            </label>
                                            <!--end::Checkbox-->
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-sm form-check-custom form-check-solid" _mstvisible="13">
                                                <input class="form-check-input" type="checkbox" value="" name="disputes_management_create" _mstvisible="14">
                                                <span class="form-check-label" _msthash="5012293" _msttexthash="178347" _mstvisible="14">Menciptakan</span>
                                            </label>
                                            <!--end::Checkbox-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </td>
                                    <!--end::Options-->
                                </tr>
                                <!--end::Table row-->
                                <!--begin::Table row-->
                                <tr _mstvisible="10">
                                    <!--begin::Label-->
                                    <td class="text-gray-800" _msthash="3012243" _msttexthash="140803" _mstvisible="11">Kontrol API</td>
                                    <!--end::Label-->
                                    <!--begin::Options-->
                                    <td _mstvisible="11">
                                        <!--begin::Wrapper-->
                                        <div class="d-flex" _mstvisible="12">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20" _mstvisible="13">
                                                <input class="form-check-input" type="checkbox" value="" name="api_controls_read" _mstvisible="14">
                                                <span class="form-check-label" _msthash="5012176" _msttexthash="88712" _mstvisible="14">Membaca</span>
                                            </label>
                                            <!--end::Checkbox-->
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20" _mstvisible="13">
                                                <input class="form-check-input" type="checkbox" value="" name="api_controls_write" _mstvisible="14">
                                                <span class="form-check-label" _msthash="5012956" _msttexthash="96850" _mstvisible="14">Menulis</span>
                                            </label>
                                            <!--end::Checkbox-->
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-sm form-check-custom form-check-solid" _mstvisible="13">
                                                <input class="form-check-input" type="checkbox" value="" name="api_controls_create" _mstvisible="14">
                                                <span class="form-check-label" _msthash="5013736" _msttexthash="178347" _mstvisible="14">Menciptakan</span>
                                            </label>
                                            <!--end::Checkbox-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </td>
                                    <!--end::Options-->
                                </tr>
                                <!--end::Table row-->
                                <!--begin::Table row-->
                                <tr _mstvisible="10">
                                    <!--begin::Label-->
                                    <td class="text-gray-800" _msthash="3012867" _msttexthash="360906" _mstvisible="11">Manajemen Basis Data</td>
                                    <!--end::Label-->
                                    <!--begin::Options-->
                                    <td _mstvisible="11">
                                        <!--begin::Wrapper-->
                                        <div class="d-flex" _mstvisible="12">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20" _mstvisible="13">
                                                <input class="form-check-input" type="checkbox" value="" name="database_management_read" _mstvisible="14">
                                                <span class="form-check-label" _msthash="5013619" _msttexthash="88712" _mstvisible="14">Membaca</span>
                                            </label>
                                            <!--end::Checkbox-->
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20" _mstvisible="13">
                                                <input class="form-check-input" type="checkbox" value="" name="database_management_write" _mstvisible="14">
                                                <span class="form-check-label" _msthash="5014399" _msttexthash="96850" _mstvisible="14">Menulis</span>
                                            </label>
                                            <!--end::Checkbox-->
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-sm form-check-custom form-check-solid" _mstvisible="13">
                                                <input class="form-check-input" type="checkbox" value="" name="database_management_create" _mstvisible="14">
                                                <span class="form-check-label" _msthash="5015179" _msttexthash="178347" _mstvisible="14">Menciptakan</span>
                                            </label>
                                            <!--end::Checkbox-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </td>
                                    <!--end::Options-->
                                </tr>
                                <!--end::Table row-->
                                <!--begin::Table row-->
                                <tr _mstvisible="10">
                                    <!--begin::Label-->
                                    <td class="text-gray-800" _msthash="3013491" _msttexthash="419367" _mstvisible="11">Manajemen Repositori</td>
                                    <!--end::Label-->
                                    <!--begin::Options-->
                                    <td _mstvisible="11">
                                        <!--begin::Wrapper-->
                                        <div class="d-flex" _mstvisible="12">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20" _mstvisible="13">
                                                <input class="form-check-input" type="checkbox" value="" name="repository_management_read" _mstvisible="14">
                                                <span class="form-check-label" _msthash="5015062" _msttexthash="88712" _mstvisible="14">Membaca</span>
                                            </label>
                                            <!--end::Checkbox-->
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20" _mstvisible="13">
                                                <input class="form-check-input" type="checkbox" value="" name="repository_management_write" _mstvisible="14">
                                                <span class="form-check-label" _msthash="5015842" _msttexthash="96850" _mstvisible="14">Menulis</span>
                                            </label>
                                            <!--end::Checkbox-->
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-sm form-check-custom form-check-solid" _mstvisible="13">
                                                <input class="form-check-input" type="checkbox" value="" name="repository_management_create" _mstvisible="14">
                                                <span class="form-check-label" _msthash="5016622" _msttexthash="178347" _mstvisible="14">Menciptakan</span>
                                            </label>
                                            <!--end::Checkbox-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </td>
                                    <!--end::Options-->
                                </tr>
                                <!--end::Table row-->
                            </tbody>
                            <!--end::Table body-->
                        </table>
                        <!--end::Table-->
                    </div>
                    <!--end::Table wrapper-->
                </div>
                <!--end::Permissions-->
            </div>
            <!--end::Scroll-->
            <!--begin::Actions-->
            <div class="text-center pt-15" _mstvisible="5">
                <button type="reset" class="btn btn-light me-3" data-kt-roles-modal-action="cancel" _msthash="1211093" _msttexthash="112203" _mstvisible="6">Membuang</button>
                <button type="submit" class="btn btn-primary" data-kt-roles-modal-action="submit" _mstvisible="6">
                    <span class="indicator-label" _msthash="1211275" _msttexthash="79105" _mstvisible="7">Tunduk</span>
                    <span class="indicator-progress" _mstvisible="7"><font _mstmutation="1" _msthash="1623362" _msttexthash="217945" _mstvisible="8">Harap tunggu... </font><span class="spinner-border spinner-border-sm align-middle ms-2" _mstvisible="8"></span></span>
                </button>
            </div>
            <!--end::Actions-->
        <div _mstvisible="5"></div></form>
        <!--end::Form-->
    </div>
</x-app-layout>