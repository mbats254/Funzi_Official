@extends('merchant.app')
@section('merchant')
    <div class="content">
        <div>
            <a href="{{ route('create.properties') }}" class="btn btn-info btn-sm float-right">Create</a>
            <h5>Properties</h5>
        </div>
        <table class="table table-striped mt-4">
            <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Categories</th>
                <th>Page</th>
                            <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($land_pieces as $product)
                <tr>
                    <td><i>{{ @++$i }}</i></td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->property_size }}</td>
                    <td><a href="/property/details/{!! $product->uniqid !!}" class="btn btn-outline-info">Property Page</a></td>
                    {{-- <td>{{ currency($product->price) }}</td> --}}
                    {{-- <td>{{ $product->type }}</td> --}}
                    <td class="text-right">
                        {{-- <a href="{{ url("merchant/products/create?id=$product->id") }}" class="btn btn-outline-info">More &raquo;</a> --}}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
