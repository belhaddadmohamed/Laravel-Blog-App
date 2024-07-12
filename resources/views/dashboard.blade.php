<x-app-layout>

    @section('hero')
        <div class="w-full text-center py-32">
            <h1 class="text-2xl md:text-3xl font-bold text-center lg:text-5xl text-gray-700">
                Welcome to <span class="text-yellow-500">&lt;YELO&gt;</span> <span class="text-gray-900"> News</span>
            </h1>
            <p class="text-gray-500 text-lg mt-1">Best Blog in the universe</p>
            <a class="px-3 py-2 text-lg text-white bg-gray-800 rounded mt-5 inline-block"
                href="http://127.0.0.1:8000/blog">Start
                Reading</a>
        </div>
    @endsection

    <h1 style="color: blue; font-size:50px; text-align:center; display:block;">This is the dashboard</h1>

    <div class="mb-10 w-full">
        <div class="mb-16">
                
        </div>
        <a class="mt-10 block text-center text-lg text-yellow-500 font-semibold"
            href="http://127.0.0.1:8000/blog">More
            Posts</a>
    </div>


</x-app-layout>
