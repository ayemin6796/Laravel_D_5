@extends("Layouts.master")

@section('title','Create Category')

@section("content")
<h4>Create Category List</h4>
<form action="{{route('category.store')}}" method="post">
    @csrf
    <div>
        <label for="" class="form-label">Put Title Here</label>
        <input type="text" value="{{old('title')}}" name="title" class="form-control @error('title')
           is-invalid
        @enderror" id="">
        @error('title')
        <p class="invalid-feedback">{{ $message }}</p>
        @enderror
    </div>

    <div class="mt-3">
        <label for="" class="form-label">Put Description Here</label>
        <input type="text" name="description" value="{{old('description')}}" class="form-control @error('description')
           is-invalid
        @enderror" id="">
        @error('description')
        <p class="invalid-feedback">{{ $message }}</p>
        @enderror
    </div>
    <button class="btn btn-primary mt-3">Save Category</button>
</form>
@endsection