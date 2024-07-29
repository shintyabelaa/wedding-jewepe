@extends('admin.template')
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
                <h4 class="mb-md-0 mb-3">WO JeWePe Catalogue</h4>
            </div>
            <div class="d-flex align-items-center flex-wrap text-nowrap">
                <a href="{{ route('catalogues.create') }}" class="d-flex btn btn-primary btn-icon-text mb-md-0 mb-2">
                    <i class="btn-icon-prepend" data-feather="plus"></i>
                    Add New Catalogue
                </a>
            </div>
        </div>
        <div class="row w-100 mx-0">
            <div class="mx-auto">
                <div class="row">
                    <div class="ps-md-0">
                        <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 g-4">
                            @foreach ($catalogues as $catalogue)
                                <div class="col">
                                    <div class="card h-100">
                                        <div class="tw-relative tw-group">
                                            {{-- black transparent background --}}
                                            <div class="tw-z-10 tw-absolute h-100 w-100 group-hover:tw-opacity-70 tw-bg-black tw-duration-300 tw-opacity-0"></div>
                                            {{-- button edit and delete --}}
                                            <div class="d-flex tw-absolute tw-z-20 tw-opacity-0 tw-gap-4 group-hover:tw-opacity-100 tw-duration-300 tw-left-1/2 -tw-translate-x-1/2 tw-top-1/2 -tw-translate-y-1/2">
                                                <a href="{{ route('catalogues.edit', $catalogue->catalogue_id) }}" class="btn btn-lg btn-info">Edit</a>
                                                <form action="{{ route('catalogues.destroy', $catalogue->catalogue_id) }}" method="POST">
                                                    @csrf @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-lg">Delete</button>
                                                </form>
                                            </div>
                                            <img src="{{ Storage::url($catalogue->image) }}" class="card-img-top" alt="{{ $catalogue->image }}">
                                        </div>
                                        <div class="card-body d-flex flex-column tw-justify-between">
                                            <div>
                                                <h5 class="card-title">{{ $catalogue->package_name }}</h5>
                                                <p class="card-text tw-line-clamp-2">{{ $catalogue->description }}</p>
                                            </div>
                                            <div class="d-flex tw-justify-between pt-4">
                                                <h6 class="tw-font-semibold">{{ $catalogue->price }}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
