@extends("admin.template")
@section("content")
    <div class="page-content">
        @if (isset($profile) && $profile->count() > 0)
            @foreach ($profile as $setting)
                <div class="mt-3">
                    <label class="tx-11 fw-bolder mb-0 text-uppercase">
                        Website Name:
                    </label>
                    <p class="text-muted">{{ $setting->website_name }}</p>
                </div>
                <div class="mt-3">
                    <label class="tx-11 fw-bolder mb-0 text-uppercase">
                        Phone Number 1:
                    </label>
                    <p class="text-muted">{{ $setting->phone_number1 }}</p>
                </div>
                <div class="mt-3">
                    <label class="tx-11 fw-bolder mb-0 text-uppercase">
                        Phone Number 2:
                    </label>
                    <p class="text-muted">{{ $setting->phone_number2 }}</p>
                </div>
                <div class="mt-3">
                    <label class="tx-11 fw-bolder mb-0 text-uppercase">
                        Email 1:
                    </label>
                    <p class="text-muted">{{ $setting->email1 }}</p>
                </div>
                <div class="mt-3">
                    <label class="tx-11 fw-bolder mb-0 text-uppercase">
                        Email 2:
                    </label>
                    <p class="text-muted">{{ $setting->email2 }}</p>
                </div>
                <div class="mt-3">
                    <label class="tx-11 fw-bolder mb-0 text-uppercase">
                        Address:
                    </label>
                    <p class="text-muted">{{ $setting->address }}</p>
                </div>
                <div class="mt-3">
                    <label class="tx-11 fw-bolder mb-0 text-uppercase">
                        Maps URL:
                    </label>
                    <p class="text-muted">
                        <a href="{{ $setting->maps }}" target="_blank">
                            {{ $setting->maps }}
                        </a>
                    </p>
                </div>
                <div class="mt-3">
                    <label class="tx-11 fw-bolder mb-0 text-uppercase">
                        Business Hours:
                    </label>
                    <p class="text-muted">{{ $setting->header_business_hour }}</p>
                </div>
                <div class="mt-3">
                    <label class="tx-11 fw-bolder mb-0 text-uppercase">
                        Time Business Hours:
                    </label>
                    <p class="text-muted">{{ $setting->time_business_hour }}</p>
                </div>
                <div class="mt-3">
                    <label class="tx-11 fw-bolder mb-0 text-uppercase">
                        Social Media:
                    </label>
                    <div class="d-flex social-links">
                        <a
                            href="{{ $setting->facebook_url }}"
                            class="btn btn-icon border btn-xs me-2"
                            target="_blank"
                        >
                            <i data-feather="facebook"></i>
                        </a>
                        <a
                            href="{{ $setting->instagram_url }}"
                            class="btn btn-icon border btn-xs me-2"
                            target="_blank"
                        >
                            <i data-feather="instagram"></i>
                        </a>
                        <a
                            href="{{ $setting->youtube_url }}"
                            class="btn btn-icon border btn-xs me-2"
                            target="_blank"
                        >
                            <i data-feather="youtube"></i>
                        </a>
                    </div>
                </div>
            @endforeach
        @else
            <p>No settings found.</p>
        @endif
    </div>
@endsection