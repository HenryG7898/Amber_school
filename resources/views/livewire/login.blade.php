<div>
    <div class="h-full bg-cover bg-fixed" style="background-image: url(https://i.idol.st/u/background/x3LA4iBackground-0ZHwra.jpg)">
        <div class="py-20">
            <div class="flex bg-white rounded-lg shadow-lg overflow-hidden mx-auto max-w-sm lg:max-w-4xl">
                <div class="hidden lg:block lg:w-1/2 bg-cover" style="background-image:url('https://e-thaksalawalms.moe.gov.lk/pluginfile.php/81555/coursecat/description/16-164766_transparent-school-technology-clipart-clipart-transparent-background-education.png')"></div>
                <div class="w-full p-8 lg:w-1/2">
                    @if(session()->has('messages'))
                        <div class="bg-green-200 px-6 py-4 mx-2 my-4 rounded-md text-lg flex items-center mx-auto w-3/4 xl:w-2/4">
                            <svg viewBox="0 0 24 24" class="text-green-600 w-5 h-5 sm:w-5 sm:h-5 mr-3">
                                <path fill="currentColor"
                                      d="M12,0A12,12,0,1,0,24,12,12.014,12.014,0,0,0,12,0Zm6.927,8.2-6.845,9.289a1.011,1.011,0,0,1-1.43.188L5.764,13.769a1,1,0,1,1,1.25-1.562l4.076,3.261,6.227-8.451A1,1,0,1,1,18.927,8.2Z"
                                ></path>
                            </svg>
                            <span class="text-green-800"> {{ session('messages') }} </span>
                        </div>
                    @endif
                        @if(session()->has('error'))
                            <div class="bg-green-200 px-6 py-4 mx-2 my-4 rounded-md text-lg flex items-center mx-auto w-3/4 xl:w-2/4">
                                <svg viewBox="0 0 24 24" class="text-green-600 w-5 h-5 sm:w-5 sm:h-5 mr-3">
                                    <path fill="currentColor"
                                          d="M12,0A12,12,0,1,0,24,12,12.014,12.014,0,0,0,12,0Zm6.927,8.2-6.845,9.289a1.011,1.011,0,0,1-1.43.188L5.764,13.769a1,1,0,1,1,1.25-1.562l4.076,3.261,6.227-8.451A1,1,0,1,1,18.927,8.2Z"
                                    ></path>
                                </svg>
                                <span class="text-green-800"> {{ session('error') }} </span>
                            </div>
                        @endif
                    <h2 class="text-2xl font-semibold text-gray-700 text-center">Welcome back!</h2>
                    <p class="text-xl text-gray-600 text-center">To</p>
                    <p class="text-xl text-gray-600 text-center">Henry's Academy</p>
                    <div class="mt-4 flex items-center justify-between">
                        <span class="border-b w-1/5 lg:w-1/4"></span>
                        <a href="#" class="text-xs text-center text-gray-500 uppercase">login with email</a>
                        <span class="border-b w-1/5 lg:w-1/4"></span>
                    </div>
                    <form wire:submit.prevent="onLogin">
                        <div class="mt-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2">Email Address</label>
                            <input wire:model="email" class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none" type="email">
                            <span class="text-red-700 text-2xs">@error('email') {{$message}} @enderror</span>
                        </div>
                        <div class="mt-4">
                            <div class="flex justify-between">
                                <label class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                                <a href="#" class="text-xs text-gray-500">Forget Password?</a>
                            </div>
                            <input wire:model="password" class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none" type="password">
                            <span class="text-red-700 text-2xs">@error('password') {{$message}} @enderror</span>
                        </div>
                        <div class="mt-8">
                            <button type="submit" class="bg-gray-700 text-white font-bold py-2 px-4 w-full rounded hover:bg-gray-600">Login</button>
                        </div>
                    </form>
                    <div class="mt-4 flex items-center justify-between">
                        <span class="border-b w-1/5 md:w-1/4"></span>
                        <a href="{{url('Signup')}}" class="text-xs text-gray-500 uppercase">or sign up</a>
                        <span class="border-b w-1/5 md:w-1/4"></span>
                    </div>
                </div>
            </div>
        </div>
    </div></div>
