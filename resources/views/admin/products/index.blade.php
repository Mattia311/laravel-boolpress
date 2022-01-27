@extends('layouts.admin')


@section('content')

<h1>Products</h1>
<a name="" id="" class="btn btn-dark" href="{{route('admin.products.create')}}" role="button">Create Product</a>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Image</th>
            <th>Name</th>
            <th>Price</th>
            <th>Actions</th>

        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
        <tr>
            <td scope="row">{{$product->id}}</td>
            <td><img width="100" src="{{$product->image}}" alt=""></td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->image }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->description }}</td>
            <td>
                <a class="btn btn-secondary m-1" href="{{ route('admin.products.show', ['product' => $product->id]) }}">VIEW</a>
                <a class="" href="{{ route('admin.products.edit', $product->id) }}"><button type="button" class="btn btn-primary m-1">EDIT</button></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>


@endsection