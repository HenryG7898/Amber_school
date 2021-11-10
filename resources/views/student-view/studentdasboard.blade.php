@extends('layout.student')
@section('content')
    <header class="relative flex items-center justify-center h-screen mb-5 overflow-hidden">
        <div
            class="relative z-30 p-5 text-2xl text-white bg-black bg-opacity-50 rounded-xl" style="margin-top: -1%"
        >
            <div class="text-center">
                <h1 class="text-white text-6xl font-bold">Welcome To Henry's Academy</h1>

            </div>
        </div>
        <video
            autoplay
            loop
            muted
            class="absolute z-10 w-auto min-w-full min-h-full max-w-none"
        >
            <source
                src="https://assets.mixkit.co/videos/preview/mixkit-set-of-plateaus-seen-from-the-heights-in-a-sunset-26070-large.mp4"
                type="video/mp4"
            />
            Your browser does not support the video tag.
        </video>
    </header>


@endsection
