@extends ('layouts.blog')

@section('content')
    <main class="container mx-auto mt-6 flex justify-center">
        {{-- Blog Article Section --}}
        <section class="w-3/5 bg-white p-6 shadow-md rounded-lg">
            <h1 class="text-2xl font-bold mb-4">Blog Post Title</h1>
            <img src="{{asset('assets/images/placeholder-800x400.jpeg')}}" alt="Post Image" class="w-full object-cover mb-4">
            <p class="text-gray-600 mb-4"> Published on <span class="font-semibold">January 1, 2026</span></p>
            <div class="text-gray-800 space-y-4">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis sint necessitatibus officia vitae odit excepturi, saepe suscipit natus nemo dolore beatae pariatur est officiis quo magni. Omnis, explicabo accusamus. Neque!</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis sint necessitatibus officia vitae odit excepturi, saepe suscipit natus nemo dolore beatae pariatur est officiis quo magni. Omnis, explicabo accusamus. Neque!</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis sint necessitatibus officia vitae odit excepturi, saepe suscipit natus nemo dolore beatae pariatur est officiis quo magni. Omnis, explicabo accusamus. Neque!</p>
            </div>
        </section>
    </main>
@endsection