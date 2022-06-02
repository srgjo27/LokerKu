<x-auth-layout title="Masuk">
    <div id="page_login">
        <!--begin::Wrapper-->
		<div class="w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
			<!--begin::Form-->
			<form class="form w-100" novalidate="novalidate" id="form_login">
				<!--begin::Heading-->
				<div class="text-center mb-10">
					<!--begin::Title-->
					<h1 class="text-dark mb-3">Sign In LokerKu</h1>
					<div class="text-gray-400 fw-bold fs-4">Belum Memiliki Akun?
					<a href="javascript:;" onclick="auth_content('page_register');" class="link-primary fw-bolder">Buat Akun</a></div>
					<!--end::Link-->
				</div>
				<!--begin::Heading-->
				<!--begin::Input group-->
				<div class="fv-row mb-10">
					<!--begin::Label-->
					<label class="form-label fs-6 fw-bolder text-dark required">Username</label>
					<!--end::Label-->
					<!--begin::Input-->
	    			<input class="form-control form-control-lg form-control-solid" type="text" name="username" autocomplete="off" />
				<!--end::Input-->
				</div>
				<!--end::Input group-->
				<!--begin::Input group-->
				<div class="fv-row mb-10">
					<!--begin::Wrapper-->
					<div class="d-flex flex-stack mb-2">
						<!--begin::Label-->
						<label class="form-label fw-bolder text-dark fs-6 mb-0 required">Password</label>
						<!--end::Label-->
						<!--begin::Link-->
						{{-- <a href="javascript:;" onclick="auth_content('page_forgot');" class="link-primary fs-6 fw-bolder">Forgot Password ?</a> --}}
						<!--end::Link-->
					</div>
					<!--end::Wrapper-->
					<!--begin::Input-->
	    			<input class="form-control form-control-lg form-control-solid" type="password" name="password" autocomplete="off" />
				<!--end::Input-->
				</div>
				<!--end::Input group-->
				<!--begin::Actions-->
				<div class="text-center">
					<!--begin::Submit button-->
					<button type="submit" id="tombol_login" onclick="handle_post('#tombol_login','#form_login','{{route('web.auth.login')}}');" class="btn btn-lg btn-primary w-100 mb-5">
						<span class="indicator-label">Continue</span>
						<span class="indicator-progress">Please wait...
						<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
					</button>
					<!--end::Submit button-->
				</div>
				<!--end::Actions-->
			</form>
			<!--end::Form-->
		</div>
    </div>
    <div id="page_register">
        <div class="w-lg-600px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
            <!--begin::Form-->
            <form class="form w-100" novalidate="novalidate" id="form_register">
                <!--begin::Heading-->
                <div class="mb-10 text-center">
                    <!--begin::Title-->
                    <h1 class="text-dark mb-3">Buat Akun</h1>
                    <!--end::Title-->
                    <!--begin::Link-->
                    <div class="text-gray-400 fw-bold fs-4">Sudah memiliki akun?
                    <a href="javascript:;" onclick="auth_content('page_login');" class="link-primary fw-bolder">Masuk di Sini</a></div>
                    <!--end::Link-->
                </div>
                <div class="row fv-row mb-7">
                    <!--begin::Col-->
                    <label class="form-label fw-bolder text-dark fs-6 required">Nama</label>
                    <input class="form-control form-control-lg form-control-solid" type="text" placeholder="" name="name" autocomplete="off" />
                    <!--end::Col-->
                </div>
                <div class="row fv-row mb-7">
                    <!--begin::Col-->
                    <label class="form-label fw-bolder text-dark fs-6 required">Username</label>
                    <input class="form-control form-control-lg form-control-solid" type="text" placeholder="" name="username" autocomplete="off" />
                    <!--end::Col-->
                </div>
                <div class="fv-row mb-7">
                    <label class="form-label fw-bolder text-dark fs-6 required">Email</label>
                    <input class="form-control form-control-lg form-control-solid" type="email" placeholder="" name="email" autocomplete="off" />
                </div>
                <div class="fv-row mb-7">
                    <label class="form-label fw-bolder text-dark fs-6 required">No. Phone</label>
                    <input class="form-control form-control-lg form-control-solid" type="text" placeholder="" name="phone" autocomplete="off" />
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="mb-10 fv-row" data-kt-password-meter="true">
                    <!--begin::Wrapper-->
                    <div class="mb-1">

                        <label class="form-label fw-bolder text-dark fs-6 required">Password</label>
                        <!--end::Label-->
                        <!--begin::Input wrapper-->
                        <div class="position-relative mb-3">
                            <input class="form-control form-control-lg form-control-solid" type="password" placeholder="" name="password" autocomplete="off" />
                            <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
                                <i class="bi bi-eye-slash fs-2"></i>
                                <i class="bi bi-eye fs-2 d-none"></i>
                            </span>
                        </div>
                        <!--end::Input wrapper-->
                        <!--begin::Meter-->
                        <div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
                        </div>
                        <!--end::Meter-->
                    </div>
                    <!--end::Wrapper-->
                    <!--begin::Hint-->
                    <div class="text-muted">Use 8 or more characters with a mix of letters, numbers &amp; symbols.</div>
                    <!--end::Hint-->
                </div>
                <!--end::Input group=-->
                <!--begin::Actions-->
                <div class="text-center">
                    <button type="button" id="tombol_register" onclick="handle_post('#tombol_register','#form_register','{{route('web.auth.register')}}');" class="btn btn-lg btn-primary">
                        <span class="indicator-label">Submit</span>
                        <span class="indicator-progress">Please wait...
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                    </button>
                </div>
                <!--end::Actions-->
            </form>
            <!--end::Form-->
        </div>
    </div>
    {{-- <div id="page_forgot">
        <div class="w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
            <!--begin::Form-->
            <form class="form w-100" novalidate="novalidate" id="form_forgot">
                <!--begin::Heading-->
                <div class="text-center mb-10">
                    <!--begin::Title-->
                    <h1 class="text-dark mb-3">Forgot Password ?</h1>
                    <!--end::Title-->
                    <!--begin::Link-->
                    <div class="text-gray-400 fw-bold fs-4">Enter your email to reset your password.</div>
                    <!--end::Link-->
                </div>
                <!--begin::Heading-->
                <!--begin::Input group-->
                <div class="fv-row mb-10">
                    <label class="form-label fw-bolder text-gray-900 fs-6">Email</label>
                    <input class="form-control form-control-solid" type="email" placeholder="" name="email" autocomplete="off" />
                </div>
                <!--end::Input group-->
                <!--begin::Actions-->
                <div class="d-flex flex-wrap justify-content-center pb-lg-0">
                    <button type="button" id="kt_password_reset_submit" class="btn btn-lg btn-primary fw-bolder me-4">
                        <span class="indicator-label">Submit</span>
                        <span class="indicator-progress">Please wait...
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                    </button>
                    <a href="javascript:;" onclick="auth_content('page_login');" class="btn btn-lg btn-light-primary fw-bolder">Cancel</a>
                </div>
                <!--end::Actions-->
            </form>
            <!--end::Form-->
        </div>
    </div> --}}
    @section('custom_js')
        <script>
            auth_content('page_login');
        </script>
    @endsection
</x-auth-layout>