<div>
    <div class="sm:mx-auto lg:mx-auto w-full h-screen bg-black
                flex items-center shadow-lg"
    >

        <section
            class="w-3/5 p-6 mx-auto bg-white rounded-md shadow-md dark:bg-gray-800">
            <div class="">
                @if(session()->has('success'))
                    <div class="bg-green-200 px-6 py-4 mx-2 my-4 rounded-md text-lg flex items-center mx-auto w-3/4 xl:w-2/4">
                        <svg viewBox="0 0 24 24" class="text-green-600 w-5 h-5 sm:w-5 sm:h-5 mr-3">
                            <path fill="currentColor"
                                  d="M12,0A12,12,0,1,0,24,12,12.014,12.014,0,0,0,12,0Zm6.927,8.2-6.845,9.289a1.011,1.011,0,0,1-1.43.188L5.764,13.769a1,1,0,1,1,1.25-1.562l4.076,3.261,6.227-8.451A1,1,0,1,1,18.927,8.2Z"
                            ></path>
                        </svg>
                        <span class="text-green-800"> {{ session('success') }} </span>
                    </div>
                @endif
                <div class="">
                    <h2 class="text-3xl font-bold mb-10 text-gray-800 text-center">Assign Student To Class</h2>

                    <form class="space-y-5 space-x-1" wire:submit.prevent="assignclass">
                        <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
                            <div>
                                <label class="block mb-1 font-bold text-gray-500">Student Name</label>
                                <select wire:model="student_id" id="" class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500">
                                    <option value="">Select a Student</option>
                                    @foreach($student as $students)
                                        @if ($students->user_type === 'student')
                                            <option value="{{ $students->id }}">{{ $students->first_nm.' '.$students->last_nm }}</option>
                                        @endif
                                    @endforeach
                                </select>
                                @error('student_id') <span class="error text-red-600">{{ $message }}</span> @enderror
                            </div>
                            <div>
                                <label class="block mb-1 font-bold text-gray-500">Class:</label>
                                <select wire:model="class_id" id="" class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500">
                                    <option value="">Select a Class</option>
                                    @foreach($class as $classes)
                                            <option value="{{ $classes->id }}">{{ $classes->class_nm.' ' . $classes->subject->subject_nm }}</option>
                                    @endforeach
                                </select>
                                @error('class_id') <span class="error text-red-600">{{ $message }}</span> @enderror
                            </div>

                        </div>

                        <div class="flex justify-end mt-6 space-x-1">
                            <button type="submit" class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-green-500
                                   rounded-md hover:bg-green-600 focus:outline-none focus:bg-gray-600">
                                Save
                            </button>
                            <a class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-red-500
                            rounded-md hover:bg-red-600 focus:outline-none focus:bg-gray-600" href="{{ url('dashboard') }}">back</a>
                        </div>
                    </form>

                </div>

            </div>
        </section>
    </div></div>
