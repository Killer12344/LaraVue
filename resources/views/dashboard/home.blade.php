@extends('dashboard.layouts.master')

@section('content')
    <div class="row">
        <div class="col-12 col-md-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="fw-bolder"> Add Category </h4>
                    <form action="{{ route('category.store') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <input type="text" name="name" placeholder="Enter Category Name" class="form-control @error('name')
                                is-invalid
                            @enderror">
                            <span class="text-danger">
                                @error('name')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <button class="btn btn-primary"> Add Category </button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="fw-bolder"> Add Article </h4>
                    <form action="{{ route('article.store') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <input type="text" name="title" placeholder="Enter Title" class="form-control @error('title')
                                is-invalid
                            @enderror">
                            <span class="text-danger">
                                @error('title')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="mb-3">
                            <textarea name="description" placeholder="Enter Description" class="form-control @error('description')
                                is-invalid
                            @enderror" cols="30" rows="10"></textarea>
                            <span class="text-danger">
                                @error('description')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="mb-3">
                            @forelse ($allCategory as $cat)
                            <div class="form-check form-check-inline">
                                <input class="form-check-input
                                    @error('category')
                                        is-invalid
                                    @enderror
                                "name="category[]" type="checkbox" value="{{ $cat->id }}" id="{{ $cat->id }}">
                                <label class="form-check-label" for="{{ $cat->id }}">
                                    {{ $cat->name }}
                                </label>
                            </div>
                            @empty
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" disabled type="checkbox" value="cat" id="0">
                                <label class="form-check-label" for="cat">
                                    Disable
                                </label>
                            </div>
                            @endforelse
                            <small class="text-danger d-block">
                                @error('category')
                                {{ $message  }}
                                @enderror
                            </small>
                        </div>
                        <button class="btn btn-primary"> Add Article </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
