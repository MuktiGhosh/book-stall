@extends('layout')

@section('content')
    <div class="container">
        <h2>Book List</h2><br>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Author</th>
                <th scope="col">Price</th>
            </tr>
            </thead>
            <tbody>
            @forelse($books as $book)
                <tr>
                    <td>{{ $book->name }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->price }}</td>
                </tr>
            @empty
                <p>No data found</p>
            @endforelse
            </tbody>
        </table>
    </div>

@endsection
