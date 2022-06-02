<x-app-layout title="Message">
    <div id="" class="container-xxl">
        <div class="card card-flush shadow-sm">
            <div class="card-header">
                <h3 class="card-title">Message</h3>
                <div class="card-toolbar">
                    <a href="{{ route('web.locker.index') }}" class="btn btn-icon btn-sm btn-active-light-primary ms-2">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
            </div>
            <div class="card-body py-5 scroll h-400px">
                @foreach ($messages as $message)
                @if($message->user_id == Auth::user()->id)
                <div class="d-flex flex-column align-items-end">
                    <!--begin::User-->
                    <div class="d-flex align-items-center mb-2">
                        <div class="ms-3 text-end">
                            <div class="d-flex align-items-center mb-2">
                                <div class="ms-3">
                                    <p class="text-body font-weight-bold fs-5">{{ $message->user->name }}
                                        <small class="d-block text-muted fs-8">{{ $message->created_at->diffForHumans() }}</small>
                                    </p>
                                </div>
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="{{ $message->user->name }}" src="{{ asset('public/profiles/'.$message->user->image) }}" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::User-->
                    <!--begin::Text-->
                    <div class="p-5 rounded bg-light-primary text-dark fw-bold mw-lg-400px text-end" data-kt-element="message-text">
                        {{ $message->message }}
                    </div>
                    <!--end::Text-->
                </div>
                @else
                    <div class="d-flex flex-column align-items-start">
                        <!--begin::User-->
                        <div class="d-flex align-items-center mb-2">
                            <div class="symbol symbol-35px symbol-circle">
                                <img alt="Admin" src="{{ asset('img/avatars/admin.png') }}" />
                            </div>
                            <div class="ms-3">
                                <p class="text-body font-weight-bold fs-5">{{ $message->user->name }}
                                    <small class="d-block text-muted fs-8">{{ $message->created_at->diffForHumans() }}</small>
                                </p>
                            </div>
                        </div>
                        <!--end::User-->
                        <!--begin::Text-->
                        <div class="p-5 rounded bg-light-success text-dark fw-bold mw-lg-400px text-start" data-kt-element="message-text">
                            {{ $message->message }}
                        </div>
                        <!--end::Text-->
                    </div>
                @endif
                @endforeach
            </div>
            <div class="card-footer">
                <form action="{{ route('web.message.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <textarea name="message" id="message" cols="30" rows="3" class="form-control" placeholder="Tulis pesan..."></textarea>
                    </div><br>
                    <div class="form-group text-center">
                        <button class="btn btn-primary btn-sm">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>