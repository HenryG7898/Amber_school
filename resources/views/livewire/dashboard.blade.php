<div class="mx-auto">

    <div class="text-center">
        <div class="my-7"></div>
        <div class=" w-1/4 text-white rounded bg-black hover:bg-green-500 hover:text-black flex flex-col p-6 justify-center items-center shadow-md my-5 rounded m-auto">

            <div class="text-2xl text-center text-black   font-bold">
                <h1 class="text-white text-5xl font-bold"> Student List</h1>
            </div>

        </div>
    </div>

    <div class=" ">
        <div class=" ">
            <table class="w-full border-collapse block md:table">
                <thead class="bg-black rounded-full">
                <tr>
                    <th class="p-3 font-bold uppercase text-white ">First Name</th>
                    <th class="p-3 font-bold uppercase text-white hidden lg:table-cell">Last Name</th>
                    <th class="p-3 font-bold uppercase text-white hidden lg:table-cell">Email</th>
                    <th class="p-3 font-bold uppercase text-white hidden lg:table-cell">Date of Birth</th>
{{--                    <th class="p-3 font-bold uppercase text-white hidden lg:table-cell">Class</th>--}}
{{--                    <th class="p-3 font-bold uppercase text-white hidden lg:table-cell">Phone Number</th>--}}
                    <th class="p-3 font-bold uppercase text-white hidden lg:table-cell">Gender</th>
                    <th class="p-3 font-bold uppercase text-white hidden lg:table-cell">Actions</th>
                </tr>
                </thead>
                    @foreach($user as $users)
                        @if ($users->user_type === 'student')


                        <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                            <td class="w-full lg:w-auto p-3 text-gray-800 text-center  border-b text-center block lg:table-cell relative lg:static">{{ $users->first_nm }}</td>
                            <td class="w-full lg:w-auto p-3 text-gray-800 text-center  border-b text-center block lg:table-cell relative lg:static">{{ $users->last_nm }}</td>
                            <td class="w-full lg:w-auto p-3 text-gray-800 text-center  border-b text-center block lg:table-cell relative lg:static">{{ $users->email }}</td>
                            <td class="w-full lg:w-auto p-3 text-gray-800 text-center  border-b text-center block lg:table-cell relative lg:static">{{ $users->DOB }}</td>
{{--                            <td class="w-full lg:w-auto p-3 text-gray-800 text-center  border-b text-center block lg:table-cell relative lg:static"></td>--}}
{{--                            <td class="w-full lg:w-auto p-3 text-gray-800 text-center  border-b text-center block lg:table-cell relative lg:static">(876){{$user->Phone_nb}}</td>--}}
                            <td class="w-full lg:w-auto p-3 text-gray-800 text-center  border-b text-center block lg:table-cell relative lg:static">{{ $users->gender }}</td>
                            <td class="w-full lg:w-auto p-3 text-gray-800 text-center  border-b text-center block lg:table-cell relative lg:static">
                                <a href="{{ url('editstudent/'.$users->id) }}" class="btn btn-primary p-2 text-white rounded bg-black hover:bg-green-500 hover:text-black" >Edit</a>
                                <a href="" class="btn btn-primary p-2 text-white rounded bg-black hover:bg-green-500 hover:text-black" >View</a>
                            </td>
                        </tr>
                    @endif
                @endforeach
            </table>
            <div>
            </div>
        </div>



    </div>


    <div class="text-center">
        <div class="my-7"></div>
        <div class=" w-1/4 text-white rounded bg-black hover:bg-green-500 hover:text-black flex flex-col p-6 justify-center items-center  shadow-md my-5 rounded m-auto">

            <div class="text-2xl text-center text-black   font-bold">
                <h1 class="text-white text-5xl font-bold"> Teacher List</h1>
            </div>

        </div>
    </div>

    <div class=" ">
        <div class=" ">
            <table class="w-full border-collapse block md:table">
                <thead class="bg-black rounded-full">
                <tr>
                    <th class="p-3 font-bold uppercase text-white ">First Name</th>
                    <th class="p-3 font-bold uppercase text-white hidden lg:table-cell">Last Name</th>
                    <th class="p-3 font-bold uppercase text-white hidden lg:table-cell">Email</th>
                    <th class="p-3 font-bold uppercase text-white hidden lg:table-cell">Date of Birth</th>
                    {{--                    <th class="p-3 font-bold uppercase text-white hidden lg:table-cell">Class</th>--}}
                    {{--                    <th class="p-3 font-bold uppercase text-white hidden lg:table-cell">Phone Number</th>--}}
                    <th class="p-3 font-bold uppercase text-white hidden lg:table-cell">Gender</th>
                    <th class="p-3 font-bold uppercase text-white hidden lg:table-cell">Actions</th>
                </tr>
                </thead>
                @foreach($user as $users)
                    @if ($users->user_type === 'Teacher')
                        <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                            <td class="w-full lg:w-auto p-3 text-gray-800 text-center  border-b text-center block lg:table-cell relative lg:static">{{ $users->first_nm }}</td>
                            <td class="w-full lg:w-auto p-3 text-gray-800 text-center  border-b text-center block lg:table-cell relative lg:static">{{ $users->last_nm }}</td>
                            <td class="w-full lg:w-auto p-3 text-gray-800 text-center  border-b text-center block lg:table-cell relative lg:static">{{ $users->email }}</td>
                            <td class="w-full lg:w-auto p-3 text-gray-800 text-center  border-b text-center block lg:table-cell relative lg:static">{{ $users->DOB }}</td>
                            {{--                            <td class="w-full lg:w-auto p-3 text-gray-800 text-center  border-b text-center block lg:table-cell relative lg:static"></td>--}}
                            {{--                            <td class="w-full lg:w-auto p-3 text-gray-800 text-center  border-b text-center block lg:table-cell relative lg:static">(876){{$user->Phone_nb}}</td>--}}
                            <td class="w-full lg:w-auto p-3 text-gray-800 text-center  border-b text-center block lg:table-cell relative lg:static">{{ $users->gender }}</td>
                            <td class="w-full lg:w-auto p-3 text-gray-800 text-center  border-b text-center block lg:table-cell relative lg:static">
                                <a href="{{ url('editstudent/'.$users->id) }}" class="btn btn-primary p-2 text-white rounded bg-black hover:bg-green-500 hover:text-black" >Edit</a>
                                <a href="" class="btn btn-primary p-2 text-white rounded bg-black hover:bg-green-500 hover:text-black" >View</a>
                            </td>
                        </tr>
                    @endif
                @endforeach
            </table>
            <div class="text-white bg-black">
            </div>
        </div>
    </div>

    <div class="text-center">
        <div class="my-7"></div>
        <div class=" w-1/4 text-white rounded bg-black hover:bg-green-500 hover:text-black flex flex-col p-6 justify-center items-center shadow-md my-5 rounded m-auto">

            <div class="text-2xl text-center text-black   font-bold">
                <h1 class="text-white text-5xl font-bold"> Subject List</h1>
            </div>

        </div>
    </div>

    <div class=" ">
        <div class=" ">
            <table class="w-full border-collapse block md:table">
                <thead class="bg-black rounded-full">
                <tr>
                    <th class="p-3 font-bold uppercase text-white ">Subject Name</th>
                    <th class="p-3 font-bold uppercase text-white hidden lg:table-cell">Actions</th>
                </tr>
                </thead>
                @foreach($subject as $subjects)
                <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center  border-b text-center block lg:table-cell relative lg:static">{{ $subjects->subject_nm }}</td>
                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center  border-b text-center block lg:table-cell relative lg:static">
                        <a href="{{ url('editsubject/'.$subjects->id) }}" class="btn btn-primary p-2 text-white rounded bg-black hover:bg-green-500 hover:text-black" >Edit</a>
                        <a href="" class="btn btn-primary p-2 text-white rounded bg-black hover:bg-green-500 hover:text-black" >View</a>
                    </td>
                </tr>
                @endforeach
            </table>
            <div class="text-white bg-black">
            </div>
        </div>



    </div>


</div>
