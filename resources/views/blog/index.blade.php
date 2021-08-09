@extends('layouts.app')
@section('content')

<div class="w-4/5 m-auto text-center">
    <div class="py-15 border-b border-gray-200">
        <h1 class="text-6xl">
            Blog posts
        </h1>
    </div>
</div>



@if (Session('status'))

<div class="w-4/5 fade-message alert alert-success m-auto mt-10 pl-2">
    <p class="w-2/65  ml-4 mb-4 text-gray-50 bg-green-500 rounded-2xl py-4 ">
        {{ session('status') }}
    </p>
</div>

<script>
    $(function(){
        setTimeout(function() {
            $('.fade-message').slideUp();
        }, 3000);
    });
</script>
@endif



@if (Auth::check())
<div class="pt-15 w-4/5 m-auto">
    <a class="bg-blue-500 uppercase bg-transparent text-gray-100
    text-xs font-extrabold py-3 px-5 rounded-3xl" href="/blog/create">
        Create a post
    </a>
</div>
@endif




@foreach ($posts as $post)


<div class="sm:grid grid-cols-2 gap-20 w-4/5 
mx-auto py-15 border-b border-gray-200">

    <div>
        <img src="/images/{{ $post->image_path }}" alt="" width="700" />
    </div>

    <div class="">
        <h2 class="text-gray-700 font-bold text-5xl pb-4">
            {{ $post->title }}
        </h2>
        <span class="text-gray-500">
            By <span class="font-bold italic text-gray-800">
                {{ $post->user->name }}</span>,Created on {{ date('js m y',strtotime($post->updated_at)) }}
        </span>
        <p class="text-x text-gray-700 pt-8 pb-10 leading-8 font-light">
            {{ $post->description }}
        </p>
        <a class="uppercase bg-blue-500 text-gray-100 text-lg
         font-extrabold py-4 px-8 rounded-3xl" href="/blog/{{ $post->slug }}">keep reading</a>

        @if (isset(Auth::user()->id) && Auth::user()->id == $post->user_id)
        <span class="float-right ">

            <a class="text-gray-700 italic hover:text-gray-900 pb-1 border-b-2" href="/blog/{{ $post->slug }}/edit">
                Edit
            </a>
        </span>


        <span class="float-right">
            <form method="POST" action="/blog/{{ $post->slug }}">
                @csrf
                @method('delete')
                <button class="text-red-500 pr-3" type="submit">

                    delete
                </button>

            </form>

        </span>
        @endif



    </div>
</div>
@endforeach


@endsection