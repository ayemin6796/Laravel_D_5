@extends('Layouts.master')

@section('title',"Category List")

@section('content')
<h4>Category List</h4>
@if (session('status'))
<div class="alert alert-success">
    {{session('status')}}
</div>
@endif
<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Description</th>
            <th>Control</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($categories as $category)
        <tr>
            <td>{{$category->id}}</td>
            <td>{{$category->title}}</td>
            <td>{{Str::limit($category->description,20)}}</td>
            <td>
                <a href="{{route('category.show',$category->id)}}" class="btn btn-outline-info btn-sm">Details</a>
                <a href="{{route('category.edit',$category->id)}}" class="btn btn-outline-success btn-sm">Update</a>
                <form action="{{route('category.destroy',$category->id)}}" class="d-inline" method="post">
                    @method('delete')
                    @csrf
                    <button class="btn btn-outline-danger btn-sm">Delete</button>
                </form>
            </td>
        </tr>
        @empty
        <tr class="text-center">
            <td colspan='4'>Nothing is new here. <i class="text-info">Wanna Create Some</i>
                <a href="{{route('category.create')}}" class="btn btn-primary">Create New</a>
            </td>
        </tr>
        @endforelse
    </tbody>
</table>
{{$categories->onEachSide(3)->links()}}
@endsection