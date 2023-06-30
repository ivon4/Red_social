@extends('layouts.principal')

@section('main')
    <div class="border border-t-0 flex-1 h-auto">
        <div class="bg-white sticky top-0">
            <div class="flex">
                <div class="flex-1 m-2">
                    <p class="font-indieflower px-4 py-2  text-6xl text-blue-600 bg-cyan-100 rounded-md ">
                        Snippets -- Comparte tu código
                    </p>
                </div>
            </div>
            <hr class=""/>
        </div>

        <div>
            <!-- tweet box (form) -->
            @include('partials._tweet-box')

            <hr class="border-4"/>

            <div></div>

            <!-- tweet -->
            @include('partials._tweet')
        </div>
    </div>
@stop
