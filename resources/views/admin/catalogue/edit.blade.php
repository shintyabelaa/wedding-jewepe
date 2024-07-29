@extends('admin.template')
@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/admin/vendors/easymde/easymde.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/vendors/flatpickr/flatpickr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/vendors/dropify/dist/dropify.min.css') }}">
@endsection
@section('content')
    <div class="page-content">
        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Tables</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                    Data Table
                </li>
            </ol>
        </nav>
        <div class="d-flex justify-content-between align-items-center grid-margin flex-wrap">
            <div>
                <h4 class="mb-md-0 mb-3">Welcome to Dashboard</h4>
            </div>
        </div>
        <div class="row w-100 mx-0 auth-page">
            <div class="mx-auto">
                <div class="card">
                    <div class="row">
                        <div class="ps-md-0">
                            <div class="auth-form-wrapper px-4 pt-2 pb-5">
                                <form action="{{ route('catalogues.update', $catalogue->catalogue_id) }}" method="POST" enctype="multipart/form-data">
                                    @method('PATCH')
                                    @csrf
                                    <input type="hidden" name="author" value="{{ auth()->user()->name }}">
                                    <div class="mb-3">
                                        <label for="package_name" class="form-label">Package Name</label>
                                        <input type="text" name="package_name" class="form-control @error('package_name') is-invalid @enderror" id="package_name" value="{{ $catalogue->package_name }}" placeholder="Enter Package Name">
                                        @error('package_name')
                                            <span class="tw-text-red-500 tw-text-xs">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="date" class="form-label">Price</label>
                                        <div class="input-group flatpickr" id="flatpickr-price">
                                            <input type="number" name="price" id="price" class="form-control @error('price') is-invalid @enderror" placeholder="Price" data-input value="{{ $catalogue->price }}">
                                        </div>
                                        @error('price')
                                            <span class="tw-text-red-500 tw-text-xs">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="description" class="form-label">Description</label>
                                        <textarea class="form-control" class="@error('description') is-invalid @enderror" name="description" id="description" rows="10">{{ $catalogue->description }}</textarea>
                                        @error('description')
                                            <span class="tw-text-red-500 tw-text-xs">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="image" class="form-label">Image</label>
                                        <input name="image" data-default-file="{{ Storage::url($catalogue->image) }}" class="dropify @error('image') is-invalid @enderror" type="file" accept="image/*" id="image" />
                                        @error('image')
                                            <span class="tw-text-red-500 tw-text-xs">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <input type="hidden" name="image" value="{{$catalogue->image}}">
                                    
                                    <div class="mb-3">
                                        <label for="status_publish" class="form-label">Publish Status</label>
                                        <div class="form-check">
                                            <input class="form-check-input @error('status_publish') is-invalid @enderror" type="radio" name="status_publish" id="publish_yes" value="Y" {{ old('status_publish') == 'Y' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="publish_yes">
                                                Yes
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input @error('status_publish') is-invalid @enderror" type="radio" name="status_publish" id="publish_no" value="N" {{ old('status_publish') == 'N' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="publish_no">
                                                No
                                            </label>
                                        </div>
                                        @error('status_publish')
                                            <span class="tw-text-red-500 tw-text-xs">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <button class="btn btn-primary" type="submit">Submit form</button>
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
    <script src="{{ asset('assets/admin/vendors/easymde/easymde.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/easymde.js') }}"></script>
    <script src="{{ asset('assets/admin/vendors/flatpickr/flatpickr.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/flatpickr.js') }}"></script>
    <script src="{{ asset('assets/admin/vendors/dropify/dist/dropify.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/dropify.js') }}"></script>
@endsection
