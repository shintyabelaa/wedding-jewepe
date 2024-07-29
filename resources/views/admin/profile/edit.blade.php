@extends('admin.template')
@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/admin/vendors/dropify/dist/dropify.min.css') }}">
@endsection
@section('content')
    <div class="page-content">
        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Settings</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Profile</li>
            </ol>
        </nav>
        <div class="d-flex justify-content-between align-items-center grid-margin flex-wrap">
            <div>
                <h4 class="mb-md-0 mb-3">Edit Profile</h4>
            </div>
        </div>
        <div class="row w-100 mx-0 auth-page">
            <div class="mx-auto">
                <div class="card">
                    <div class="row">
                        <div class="ps-md-0">
                            <div class="auth-form-wrapper px-4 pt-2 pb-5">
                                <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                                    @method('POST')
                                    @csrf
                                    <div class="mb-3">
                                        <label for="website_name" class="form-label">Website Name</label>
                                        <input type="text" name="website_name" class="form-control @error('website_name') is-invalid @enderror" id="website_name" value="{{ $setting->website_name }}" placeholder="Enter Website Name">
                                        @error('website_name')
                                            <span class="tw-text-red-500 tw-text-xs">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="phone_number1" class="form-label">Phone Number 1</label>
                                        <input type="text" name="phone_number1" class="form-control @error('phone_number1') is-invalid @enderror" id="phone_number1" value="{{ $setting->phone_number1 }}" placeholder="Enter Phone Number 1">
                                        @error('phone_number1')
                                            <span class="tw-text-red-500 tw-text-xs">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="phone_number2" class="form-label">Phone Number 2</label>
                                        <input type="text" name="phone_number2" class="form-control @error('phone_number2') is-invalid @enderror" id="phone_number2" value="{{ $setting->phone_number2 }}" placeholder="Enter Phone Number 2">
                                        @error('phone_number2')
                                            <span class="tw-text-red-500 tw-text-xs">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="email1" class="form-label">Email 1</label>
                                        <input type="email" name="email1" class="form-control @error('email1') is-invalid @enderror" id="email1" value="{{ $setting->email1 }}" placeholder="Enter Email 1">
                                        @error('email1')
                                            <span class="tw-text-red-500 tw-text-xs">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="email2" class="form-label">Email 2</label>
                                        <input type="email" name="email2" class="form-control @error('email2') is-invalid @enderror" id="email2" value="{{ $setting->email2 }}" placeholder="Enter Email 2">
                                        @error('email2')
                                            <span class="tw-text-red-500 tw-text-xs">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="address" class="form-label">Address</label>
                                        <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" id="address" value="{{ $setting->address }}" placeholder="Enter Address">
                                        @error('address')
                                            <span class="tw-text-red-500 tw-text-xs">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="maps" class="form-label">Maps URL</label>
                                        <input type="text" name="maps" class="form-control @error('maps') is-invalid @enderror" id="maps" value="{{ $setting->maps }}" placeholder="Enter Maps URL">
                                        @error('maps')
                                            <span class="tw-text-red-500 tw-text-xs">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="logo" class="form-label">Logo</label>
                                        <input name="logo" data-default-file="{{ Storage::url($setting->logo) }}" class="dropify @error('logo') is-invalid @enderror" type="file" accept="image/*" id="logo" />
                                        @error('logo')
                                            <span class="tw-text-red-500 tw-text-xs">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="facebook_url" class="form-label">Facebook URL</label>
                                        <input type="text" name="facebook_url" class="form-control @error('facebook_url') is-invalid @enderror" id="facebook_url" value="{{ $setting->facebook_url }}" placeholder="Enter Facebook URL">
                                        @error('facebook_url')
                                            <span class="tw-text-red-500 tw-text-xs">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="instagram_url" class="form-label">Instagram URL</label>
                                        <input type="text" name="instagram_url" class="form-control @error('instagram_url') is-invalid @enderror" id="instagram_url" value="{{ $setting->instagram_url }}" placeholder="Enter Instagram URL">
                                        @error('instagram_url')
                                            <span class="tw-text-red-500 tw-text-xs">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="youtube_url" class="form-label">YouTube URL</label>
                                        <input type="text" name="youtube_url" class="form-control @error('youtube_url') is-invalid @enderror" id="youtube_url" value="{{ $setting->youtube_url }}" placeholder="Enter YouTube URL">
                                        @error('youtube_url')
                                            <span class="tw-text-red-500 tw-text-xs">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="header_business_hour" class="form-label">Business Hours</label>
                                        <input type="text" name="header_business_hour" class="form-control @error('header_business_hour') is-invalid @enderror" id="header_business_hour" value="{{ $setting->header_business_hour }}" placeholder="Enter Business Hours">
                                        @error('header_business_hour')
                                            <span class="tw-text-red-500 tw-text-xs">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="time_business_hour" class="form-label">Time Business Hours</label>
                                        <input type="text" name="time_business_hour" class="form-control @error('time_business_hour') is-invalid @enderror" id="time_business_hour" value="{{ $setting->time_business_hour }}" placeholder="Enter Time Business Hours">
                                        @error('time_business_hour')
                                            <span class="tw-text-red-500 tw-text-xs">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <button class="btn btn-primary" type="submit">Update Profile</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{ asset('assets/admin/vendors/dropify/dist/dropify.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/dropify.js') }}"></script>
@endsection