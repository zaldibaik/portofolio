@extends('layouts.sidebar')

@section('content')
    <a href="{{ route('categories.create') }}"
        class="mt-100 text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Create
        New Category</a>
    <table
        class="table-auto mt-10 w-full text-sm text-left rtl:text-right text-gray-500 hadow dark:bg-gray-800 dark:border-gray-700">
        <div class="container relative overflow-x-auto shadow-md sm:rounded-lg">
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <tr>
                <th>No</th>
                <th>Name</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $category->name }}</td>
                    <td>
                        <form action="{{ route('categories.destroy', $category->id) }}" method="POST">
                            <a class="text-white bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"
                                href="{{ route('categories.show', $category->id) }}">Show</a>
                            <a class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                href="{{ route('categories.edit', $category->id) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
    </table>
    </div>
@endsection
