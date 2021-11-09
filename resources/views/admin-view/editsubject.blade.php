@extends('layout.admin')

@section('section')
    <div class="bg-black">
    @if ($data)

        <div class="my-36 flex-wrap justify-center border items-center h-10/12    border-black">
            <div class="my-9">
                <h1 class="text-center text-3xl font-bold p-2">Edit Subject</h1>
                <form method="post" action="{{url('updatesubject')}}" class="mb-4 h-full p-5 flex flex-col   justify-center items-center x ">
                    @csrf
                    <input type="text" value="{{ $data->subject_nm }}" name="subject_nm" class="bg-gray-300 p-2 mx-1.5 w-1/4 rounded-md border-2 border-gray-400"><br>
{{--                    <input type="text" value="{{ $data->cost_amt }}" name="cost_amt"  class="bg-gray-300 p-2 w-1/4 mx-1.5 rounded-md border-2 border-gray-400"><br>--}}
                    <input type="hidden" value="{{ $data->id }}" name="id"  class="bg-gray-300 p-2 w-1/4 mx-1.5 rounded-md border-2 border-gray-400"><br>
                    <button type="submit" class="bg-blue-700 rounded-md hover:bg-green-800 duration-100 text-white p-3 w-1/6 mx-1.5 shadow-md">Submit</button>
                </form>
            </div>
        </div>
    @else
        <div class="my-52 flex-wrap justify-center border items-center h-10/12    border-black">
            <div class="my-12">
                <h1 class="text-center text-5xl font-bold p-2">Sorry! No Subject Available</h1>
            </div>
        </div>
    @endif
    </div>
    @endsection
