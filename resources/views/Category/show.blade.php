@extends('Layouts.master')

@section('title',"Category Details")

@section('content')
<h4>Category Detail</h4>
<table class="table">
    <tr>
        <td>Title</td>
        <td>{{$category->title}}</td>
    </tr>
    <tr>
        <td>Description</td>
        <td>{{$category->description}}</td>
    </tr>
    <tr>
        <td>Created At</td>
        <td>{{$category->created_at}}</td>
    </tr>
    <tr>
        <td>Updated At</td>
        <td>{{$category->updated_at}}</td>
    </tr>
</table>
@endsection