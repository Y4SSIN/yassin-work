@extends('layouts.admin')

@section('title', 'Create')

@section('content')

<div class="container">
    <div class="dashboard-container">
        <div class="dashboard-block">
            <h2>New project</h2>
        </div>
        <div class="dashboard-block">
            <div class="form-container">
                <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data">
                    <div class="form-block">
                        <label for="name">Title</label>
                        <input type="text" name="title" value="{{ old('title') }}" autocomplete="off" class="form-control">
                        <span class="error">{{ $errors->first('title') }}</span>
                    </div>
        
                    <div class="form-block">
                        <label for="name">Description</label>
                        <input type="text" name="description" value="{{ old('description') }}" autocomplete="off" class="form-control">
                        <span class="error">{{ $errors->first('description') }}</span>
                    </div>

                    <div class="form-block">
                        <label for="name">Category</label>
                        <select class="form-control" name="category_id">
        
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->title }}</option>
                            @endforeach
        
                        </select>
                        <span class="error">{{ $errors->first('category') }}</span>
                    </div>

                    <div class="form-block">
                        <label for="name">Repository url</label>
                        <input type="text" name="repository" value="{{ old('repository') }}" autocomplete="off" class="form-control">
                        <span class="error">{{ $errors->first('repository') }}</span>
                    </div>
        
                    <div class="form-block">
                        <label for="name">Body</label>
                        <textarea name="body" id="textarea" rows="15" autocomplete="off" class="form-control">{{ old('body') }}</textarea>
                        <span class="error">{{ $errors->first('body') }}</span>
                    </div>
        
                    <div class="form-block">
                        <input type="file" name="cover_image" id="cover_image" onchange="readURL(this)">
                        <img id="cover-preview" src="#" alt="" width="25%">
                        <span class="error">{{ $errors->first('cover_image') }}</span>
                    </div>
                    
                    <button type="submit" class="btn-custom btn-add"><i class="fas fa-check"></i></button>
                    <a class="btn-custom btn-cancel" href="{{ url('dashboard/projects') }}"><i class="fas fa-times"></i></a>
                    @csrf
                </form>
            </div>
        </div>
    </div>   
</div>

@endsection