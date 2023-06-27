@extends('layouts.app')
@section('page-title', $slides['serie'])
@section('content')
<div class="w-full mx-auto">
    <div class="h-16 bg-primaryBlu w-full mx-auto"></div>
    <div class="flex items-center flex-col">
        <div class="border max-w-5xl w-full">
            @foreach ($slides['comics'] as $item)
                @if ($item['series'] === $slides['serie'])
                    <img src="{{ url($item['thumb']) }}" alt="cover-img" class="object-cover h-[230px] w-[150px] object-top mt-[-250px] border border-white mb-20">
                    <h1 class="text-3xl text-[#005C86] font-bold mb-6">{{ Str::upper($item['title']) }}</h1>
                    <div class="bg-[#55BA58] h-9"></div>
                @endif
            @endforeach
        </div>
    </div>
</div>
@endsection
