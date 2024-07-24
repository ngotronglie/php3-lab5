@extends('layoutadmin')
@section('title')
    Danh sách sản phẩm
@endsection
@section('content')
    <a href="{{ route('category.create') }}" class="btn btn-success">Thêm mới</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">name</th>
                <th scope="col">status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($listCate as $item)
                <tr>
                    <td scope="row">{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>
                        <a href="{{ route('category.edit', $item->id) }}" class="btn btn-warning">update</a>
                        <a href="{{ route('category.destroy', $item->id) }}" class="btn btn-danger">delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
