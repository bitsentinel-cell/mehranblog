@extends('layouts.app')

@section('content')
<div class="background-image grid grid-cols-1 m-auto">
    <div class="flex text-gray-100 pt-10">
        <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
            <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">

                do you want a developer
            </h1>
            <a class="text-center bg-gray-50 text-blue-700
                py-2 px-4 font-bold  text-xl
                 uppercase" href="/blog">
                readmore</a>

        </div>
    </div>
</div>

<div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
    <div>
        <img class="mt-5" src="https://i.pinimg.com/originals/5e/82/2f/5e822f6dd19756209181f1a215cf0941.jpg" alt=""
            width="700" />
    </div>
    <div class="m-auto sm:m-auto text-left w-4/5 block ">
        <h2 class="text-4xl font-extrabold text-gray-600">
            struglling to be a better web developer?
        </h2>
        <p class="py-8 text-gray-500 text-xl">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium quaerat,
            exercitationem tempora repellat minima natus fugit quis
        </p>
        <p class="font-extrabold text-gray-600 text-xl pb-9">
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Earum, eligendi? Recusandae culpa debitis quasi voluptatum fac
        </p>
        <a href="/blog" class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
            Find out more
        </a>

    </div>

</div>


<div class="text-center p-15 bg-black text-white">
    <h2 class="text-2xl pb-5 text-l">
        i'm an expert ...
    </h2>
    <span class="font-extrabold block text-4xl py-1">
        UX design
    </span>
    <span class="font-extrabold block text-4xl py-1">
        Project managment
    </span>
    <span class="font-extrabold block text-4xl py-1">
        SEO strategy
    </span>
    <span class="font-extrabold block text-4xl py-1">
        BackEnd development
    </span>

</div>

<div class="text-center py-15">
    <span class="uppercase text-s text-gray-400">
        Blog
    </span>
    <h2 class="text-4xl font-bold py-10">
        Recent Post
    </h2>
    <p class="m-auto w-4/5 text-gray-500">

        Lorem, ipsum dolor sit amet consectetur adipisicing elit.
        Numquam explicabo non fugiat alias
        amet esse dolorum molestiae at.

    </p>

</div>
<div class="sm:grid grid-cols-2 w-4/5 m-auto">
    <div class="flex bg-yellow-700 text-gray-100 pt-10">
        <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
            <span class="uppercase text-xs ">
                PHP
            </span>
            <h3 class="text-xl font-bold py-10">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Ex odio corrupti ipsam laudantium nam maiores
                libero molestiae enim reiciendis optio itaque aliquam voluptate,
                recusandae magnam! Perspiciatis ipsam
                architecto rerum vitae.
            </h3>
            <a class="uppercase bg-transparent 
            border-2 border-gray-100 text-xs
            font-extrabold py-3 px-5 rounded-3xl" href="">
                Find out more


            </a>
        </div>

    </div>
    <div>
        <img src="https://i.pinimg.com/originals/5e/82/2f/5e822f6dd19756209181f1a215cf0941.jpg" alt="" width="700" />

    </div>
</div>
@endsection