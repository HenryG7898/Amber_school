@extends('layout.admin')

@section('section')
    <div class="m-auto my-16">

        <div class="bg-white m-auto   p-16 rounded shadow-2xl w-4/6">
            @if ($data)
                @if ($data->user_type === "Teacher")
                    <h2 class="text-3xl font-bold mb-5 text-gray-800 text-center">Edit Teacher</h2>

                @else
                    <h2 class="text-3xl font-bold mb-5 text-gray-800 text-center">Edit Student</h2>

                @endif


                <form class="space-y-5 space-x-5 grid md:grid-cols-3" action="{{ url('updatestudent') }}" method="post">
                    @csrf

                    <div>
                        <label class="block mb-1 font-bold text-gray-500">First Name</label>
                        <input type="text" value="{{ $data->first_nm }}" name="First_nm" class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500">
                        <input type="hidden" value="{{ $data->id }}" name="id" class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500">
                    </div>

                    <div>
                        <label class="block mb-1 font-bold text-gray-500">Last Name</label>
                        <input type="text" value="{{ $data->last_nm }}" name="Last_nm" class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500">
                    </div>

                    <div>
                        <label class="block mb-1 font-bold text-gray-500">Date of Birth</label>
                        <input type="date" value="{{ $data->DOB }}" name="DOB" class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500">
                    </div>

                    {{--                    <div>--}}
                    {{--                        <label class="block mb-1 font-bold text-gray-500">Class</label>--}}
                    {{--                        <input type="text" value="{{ $data->Class }}" name="Class" class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500">--}}
                    {{--                    </div>--}}

                    <div>
                        <label class="block mb-1 font-bold text-gray-500">Email</label>
                        <input type="email" value="{{ $data->email }}" name="Email" class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500">
                    </div>

                    {{--                    <div>--}}
                    {{--                        <label class="block mb-1 font-bold text-gray-500">Phone Number</label>--}}
                    {{--                        <input type="text" value="{{ $data->Phone_nb }}" name="Phone_nb" class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500">--}}
                    {{--                    </div>--}}

                    <div>
                        <label class="block mb-1 font-bold text-gray-500">Gender</label>
                        <select name="Gender"  class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500" id="Gender">
                            @if ($data->Gender === "Male")
                                <option selected value="Male">Male</option>
                                <option value="Female">Female</option>


                            @else
                                <option selected value="Female">Female</option>
                                <option value="Male">Male</option>

                            @endif
                        </select>
                    </div>
                    <br>
                    <div class="flex  mt-6 space-x-1">
                        <button class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-green-500
                                   rounded-md hover:bg-green-600 focus:outline-none focus:bg-gray-600">
                            Save
                        </button>
                        <a class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-red-500
                            rounded-md hover:bg-red-600 focus:outline-none focus:bg-gray-600" href="{{ url('dashboard') }}">back</a>
                    </div>
                    {{--                    <button type="submit" class="block w-full bg-yellow-400 hover:bg-yellow-300 p-4 rounded text-yellow-900 hover:text-yellow-800 transition duration-300">Save</button>--}}

                </form>
            @else
                <h2 class="text-5xl font-bold mb-10 text-gray-800 text-center">Sorry! No Student Available</h2>
            @endif
        </div>

    </div>
{{--    <div class="bg-black">--}}
{{--    @if ($data)--}}

{{--        <div class="my-36 flex-wrap justify-center border items-center h-10/12    border-black">--}}
{{--            <div class="my-9">--}}
{{--                <h1 class="text-center text-3xl font-bold p-2">Edit Subject</h1>--}}
{{--                <form method="post" action="{{url('updatesubject')}}" class="mb-4 h-full p-5 flex flex-col   justify-center items-center x ">--}}
{{--                    @csrf--}}
{{--                    <input type="text" value="{{ $data->subject_nm }}" name="subject_nm" class="bg-gray-300 p-2 mx-1.5 w-1/4 rounded-md border-2 border-gray-400"><br>--}}
{{--                    <input type="text" value="{{ $data->cost_amt }}" name="cost_amt"  class="bg-gray-300 p-2 w-1/4 mx-1.5 rounded-md border-2 border-gray-400"><br>--}}
{{--                    <input type="hidden" value="{{ $data->id }}" name="id"  class="bg-gray-300 p-2 w-1/4 mx-1.5 rounded-md border-2 border-gray-400"><br>--}}
{{--                    <button type="submit" class="bg-blue-700 rounded-md hover:bg-green-800 duration-100 text-white p-3 w-1/6 mx-1.5 shadow-md">Submit</button>--}}
{{--                </form>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    @else--}}
{{--        <div class="my-52 flex-wrap justify-center border items-center h-10/12    border-black">--}}
{{--            <div class="my-12">--}}
{{--                <h1 class="text-center text-5xl font-bold p-2">Sorry! No Subject Available</h1>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    @endif--}}
{{--    </div>--}}
    @endsection
