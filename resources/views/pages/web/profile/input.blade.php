<div class="card card-flush shadow-sm">
    <div class="card-header">
        <h3 class="card-title fs-3">
        @if ($data->id)
            Edit 
        @endif
            Profile
        </h3>
        <div class="card-toolbar">
            <a href="{{ route('web.profile.index') }}" class="btn btn-icon btn-sm btn-active-light-primary ms-2">
                <i class="fa fa-times"></i>
            </a>
        </div>            
    </div>
    <div class="card-body">
        <form id="form_input">
            <div class="row">
                <div class="col-lg-12 mb-5">
                    <label for="image" class="form-label">Foto</label>
                    <input type="file" name="image" id="image" class="form-control" accept="image/*">
                </div>
                <div class="col-lg-12 mb-5">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{ Auth::user()->name }}">
                </div>
                <div class="col-lg-12 mb-5">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" name="email" id="email" value="{{ Auth::user()->email }}">
                </div>
                <div class="col-lg-12 mb-5">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="text" class="form-control" name="phone" id="phone" value="{{ Auth::user()->phone }}">
                </div>
                <div class="col-lg-12 mb-5">
                    <label for="dormitory_id" class="form-label">Asrama</label>
                    <select class="form-control form-control-lg" name="dormitory_id" data-fv-field="">
                        <option value="">Pilih Asrama</option>
                        <option value="1" {{ Auth::user()->dormitory_id == 1 ? 'selected' : '' }}>Kafernaum</option>
                        <option value="2" {{ Auth::user()->dormitory_id == 2 ? 'selected' : '' }}>Silo</option>
                        <option value="3" {{ Auth::user()->dormitory_id == 3 ? 'selected' : '' }}>Antiokhia</option>
                        <option value="4" {{ Auth::user()->dormitory_id == 4 ? 'selected' : '' }}>Pniel</option>
                        <option value="5" {{ Auth::user()->dormitory_id == 5 ? 'selected' : '' }}>Rusun I</option>
                        <option value="6" {{ Auth::user()->dormitory_id == 6 ? 'selected' : '' }}>Rusun II</option>
                        <option value="7" {{ Auth::user()->dormitory_id == 7 ? 'selected' : '' }}>Rusun III</option>
                        <option value="8" {{ Auth::user()->dormitory_id == 8 ? 'selected' : '' }}>Rusun IV</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="min-w-150px mt-10 text-end">
                    @if ($data->id)
                        <button id="tombol_simpan" onclick="handle_upload('#tombol_simpan','#form_input','{{route('web.profile.update',$data->id)}}','PATCH');" class="btn btn-sm btn-primary">Save</button>
                    @endif
                </div>
            </div>
        </form>
    </div>
</div>