@extends("Layouts.master")

@section('title','Create Category')

@section("content")
<h4>Create Category List</h4>
@if (session('status'))
<div class="alert alert-success">
    {{session('status')}}
</div>
@endif
<form action="{{route('category.update',$category->id)}}" method="post">
    @csrf
    @method('put')
    <div>
        <label for="" class="form-label">Put Title Here</label>
        <input type="text" name="title" value="{{old('title',$category->title)}}" class="form-control @error('title')
           is-invalid
        @enderror" id="">
        @error('description')
        <p class="invalid-feedback">{{ $message }}</p>
        @enderror
    </div>

    <div class="mt-3">
        <label for="" class="form-label">Put Description Here</label>
        <input type="text" name="description" value="{{old('description',$category->description)}}" class="form-control @error('description')
           is-invalid
        @enderror" id="">
        @error('description')
        <p class="invalid-feedback">{{ $message }}</p>
        @enderror
    </div>
    <button class="btn btn-primary mt-3">Update Category</button>
</form>
@endsection