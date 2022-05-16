<x-app-layout title="Locker">
    <div id="kt_content_container" class="container-xxl">
        <div class="team-area default-padding bottom-less">
            <div class="container">
                <div class="team-items text-center">
                    <div class="row">
                        <div class="col-md-12 p-2 m-5">
                            <div class="float-end">
                                <a class="btn btn-success" type="submit" href="{{ route ('admin.generate.index') }}">Mengenerate</a>
                            </div>
                        </div>
                        <div class="col-md-12 bg-body p-2 m-5">
                            <form class="d-flex">
                                <div class="col-md-9">
                                    <div class="d-flex">
                                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="d-flex">
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Asrama</option>
                                            <option value="1">Pniel</option>
                                            <option value="2">Kafernaum</option>
                                            <option value="3">Silo</option>
                                            <option value="3">Rusun IV</option>
                                          </select>
                                        <a class="btn btn-outline-success" type="submit" href="{{ route ('admin.kirimpesan.index') }}">Tampilkan</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-12 bg-body p-2 m-5 text-center">
                            <h4>Nama Mahasiswa</h4>
                        </div>
                        <div class="row justify-content-center">
                            <!-- Single Item -->
                        <div class="single-item col-md-3 m-5">
                            <div class="item">
                                <div class="thumb">
                                    <img src="{{ asset('assets/media/avatars/300-14.jpg') }}" alt="Thumb">
                                </div>
                                <div class="info m-2">
                                    <h4>Ester Simamora</h4>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="single-item col-md-3 m-5">
                            <div class="item">
                                <div class="thumb">
                                    <img src="{{ asset('assets/media/avatars/300-2.jpg') }}" alt="Thumb">
                                </div>
                                <div class="info m-2">
                                    <h4>Elisa Simanjuntak</h4>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="single-item col-md-3 m-5">
                            <div class="item">
                                <div class="thumb">
                                    <img src="{{ asset('assets/media/avatars/300-20.jpg') }}" alt="Thumb">
                                </div>
                                <div class="info m-2">
                                    <h4>Santa Sinaga</h4>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="single-item col-md-3 m-5">
                            <div class="item">
                                <div class="thumb">
                                    <img src="{{ asset('assets/media/avatars/300-5.jpg') }}" alt="Thumb">
                                </div>
                                <div class="info m-2">
                                    <h4>Josua Siregar</h4>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="single-item col-md-3 m-5">
                            <div class="item">
                                <div class="thumb">
                                    <img src="{{ asset('assets/media/avatars/300-23.jpg') }}" alt="Thumb">
                                </div>
                                <div class="info m-2">
                                    <h4>Fritz Marpaung</h4>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="single-item col-md-3 m-5">
                            <div class="item">
                                <div class="thumb">
                                    <img src="{{ asset('assets/media/avatars/300-25.jpg') }}" alt="Thumb">
                                </div>
                                <div class="info m-2">
                                    <h4>Christian Lumbantoruan</h4>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>