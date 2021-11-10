<div>
    <div class="my-5 -mb-2.5 text-center">
        <div class="my-7"></div>
        <div class=" w-2/4 text-white rounded bg-black hover:bg-green-500 hover:text-black flex flex-col p-6 justify-center items-center  shadow-md my-5 rounded m-auto">

            <div class="text-2xl text-center text-black   font-bold">
                <h1 class="text-white text-5xl font-bold"> Class Schedule</h1>
            </div>

        </div>
    </div>

    <div class=" ">
        <div class=" ">
            <table class="w-full border-collapse block md:table">
                <thead class="bg-black rounded-full">
                <tr>
                    <th class="p-3 font-bold uppercase text-white ">Class Name</th>
                    <th class="p-3 font-bold uppercase text-white hidden lg:table-cell">Teacher Name</th>
                    <th class="p-3 font-bold uppercase text-white hidden lg:table-cell">Subject Name</th>
                    <th class="p-3 font-bold uppercase text-white hidden lg:table-cell">Start</th>
                    {{--                    <th class="p-3 font-bold uppercase text-white hidden lg:table-cell">Class</th>--}}
                    {{--                    <th class="p-3 font-bold uppercase text-white hidden lg:table-cell">Phone Number</th>--}}
                    <th class="p-3 font-bold uppercase text-white hidden lg:table-cell">End</th>
                    <th class="p-3 font-bold uppercase text-white hidden lg:table-cell">Actions</th>
                </tr>
                </thead>
                @foreach($class as $classes)

                        <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                            <td class="w-full lg:w-auto p-3 text-gray-800 text-center  border-b text-center block lg:table-cell relative lg:static">{{ $classes->class_nm }}</td>
                            <td class="w-full lg:w-auto p-3 text-gray-800 text-center  border-b text-center block lg:table-cell relative lg:static">{{ $classes->teacher->first_nm }}</td>
                            <td class="w-full lg:w-auto p-3 text-gray-800 text-center  border-b text-center block lg:table-cell relative lg:static">{{ $classes->subject->subject_nm }}</td>
                            <td class="w-full lg:w-auto p-3 text-gray-800 text-center  border-b text-center block lg:table-cell relative lg:static">{{ $classes->start_time }}</td>
{{--                                                        <td class="w-full lg:w-auto p-3 text-gray-800 text-center  border-b text-center block lg:table-cell relative lg:static"></td>--}}
                                                        <td class="w-full lg:w-auto p-3 text-gray-800 text-center  border-b text-center block lg:table-cell relative lg:static">{{$classes->end_time}}</td>
{{--                            <td class="w-full lg:w-auto p-3 text-gray-800 text-center  border-b text-center block lg:table-cell relative lg:static">{{ $classes }}</td>--}}
                            <td class="w-full lg:w-auto p-3 text-gray-800 text-center  border-b text-center block lg:table-cell relative lg:static">
                                <a href="" class="btn btn-primary p-2 text-white rounded bg-black hover:bg-green-500 hover:text-black" >Delete</a>
{{--                                <a href="" class="btn btn-primary p-2 text-white rounded bg-black hover:bg-green-500 hover:text-black" >View</a>--}}
                            </td>
                        </tr>

                @endforeach
            </table>
            <div class="text-white bg-black">
            </div>
        </div>
    </div></div>
