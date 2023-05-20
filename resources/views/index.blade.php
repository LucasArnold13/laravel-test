@extends('layouts.main')
@section('content')
    <div class="flex-1 space-y-5">

        @foreach ($posts as $post)
            <div class="bg-white shadow rounded">
                <img src="https://picsum.photos/800/350?random={{rand(0,100)}}" alt="Random image" class="rounded-t">
                <div class="p-5">
                    <div class="font-bold text-xs text-blue-700">{{$post->created_at}}</div>
                    <div class="text-3xl text-blue-900">{{$post->title}}</div>
                    <div class="text-lg text-gray-700">
                        {{$post->body}}
                    </div>
                </div>
                <div class="footer rounded-b border-t border-gray-300 p-5 text-gray-700 font-bold text-xs bg-indigo-100">
                    {{$post->user->name}}
                </div>
            </div>
        @endforeach

    </div>
    {{-- 2. Spalte ----------------------------------------------------------------------------------}}
    <div class="space-y-5" style="width:300px;">

        <div class="bg-blue-700 shadow rounded-sm">
            <h2 class="text-white text-2xl p-5">Newsletter</h2>
            <div class="border-t border-blue-600 text-white p-5 text-sm">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum laboriosam omnis repudiandae unde.
                <div class="flex mt-5">
                    <input type="text" name="newsletter" class="rounded-l-sm text-gray-800 px-4 py-2 h-12" placeholder="E-Mail Adresse" style="min-width: 0px;">
                    <button type="button" class="bg-blue-800 h-12 text-xs px-4 py-2 rounded-r-sm">abonnieren</button>
                </div>
            </div>
        </div>

        <div class="bg-white shadow p-5 rounded-sm">
            <div class="border-b-2 border-blue-700 relative flex items-center justify-center">
                <h3 class="absolute bg-white px-4 text-xs text-gray-500 font-medium">Neueste Beiträge</h3>
            </div>
            <div class="mt-5 text-gray-700 text-sm">
                <ul>
                    <li><a href="#">Überschrift Beitrag 1</a></li>
                    <li><a href="#">Überschrift Beitrag 2</a></li>
                    <li><a href="#">Überschrift Beitrag 3</a></li>
                    <li><a href="#">Überschrift Beitrag 4</a></li>
                    <li><a href="#">Überschrift Beitrag 5</a></li>
                </ul>
            </div>
        </div>

        <div class="bg-white shadow p-5 rounded-sm">
            <div class="border-b-2 border-blue-700 relative flex items-center justify-center">
                <h3 class="absolute bg-white px-4 text-xs text-gray-500 font-medium">Kategorien</h3>
            </div>
            <div class="mt-5 text-gray-700 text-sm">
                <ul>
                    <li><a href="#">Kategorie Nr. 1</a></li>
                    <li><a href="#">Kategorie Nr. 2</a></li>
                    <li><a href="#">Kategorie Nr. 3</a></li>
                    <li><a href="#">Kategorie Nr. 4</a></li>
                    <li><a href="#">Kategorie Nr. 5</a></li>
                </ul>
            </div>
        </div>

        <div class="bg-white shadow p-5 rounded-sm">
            <div class="border-b-2 border-blue-700 relative flex items-center justify-center">
                <h3 class="absolute bg-white px-4 text-xs text-gray-500 font-medium">Trending Stories</h3>
            </div>
            <div class="mt-5 text-gray-700 text-sm">
                <ul>
                    <li><a href="#">Trending Story No. 1</a></li>
                    <li><a href="#">Trending Story No. 2</a></li>
                    <li><a href="#">Trending Story No. 3</a></li>
                    <li><a href="#">Trending Story No. 4</a></li>
                    <li><a href="#">Trending Story No. 5</a></li>
                </ul>
            </div>
        </div>

    </div>
@endsection


