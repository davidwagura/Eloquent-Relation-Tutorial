@extends('welcome')

@section('content')
    <h1 class="mt-40 text-center bg-red">
        <u>
            Add Profile:
        </u>
    </h1>
    <div class="create-inputs flex justify-center items-center">
        <form class="flex flex-col space-y-4" action="{{ route('profile.store') }}" method="post">
            @csrf
            @method('post')

                <label class="mr-2" for="student_id">Student Id:</label>
                <input class="border rounded px-2 py-1" type="text" name="student_id"><br>

                <label class="mr-2" for="email">Email:</label>
                <input class="border rounded px-2 py-1" type="text" name="email">

                <label class="mr-2" for="phone">Phone:</label>
                <input class="border rounded px-2 py-1" type="text" name="phone"><br>


                <button class="bg-blue-500 hover:bg-blue-700 h-8 px-4 mt-4 border border-blue-700 rounded pr-4" type="submit">Submit</button>
        </form>
    </div>
@endsection