@extends('layout.app')

@push('style')
    <style>
        #background {
            background-image: url("{{ $anime->image_url }}")
        }
    </style>
@endpush
@section('title', $anime->title . ' - ' . config('app.name'))
@section('content')
    <x-navbar />

    <div class="relative w-full bg-gray-200 bg-cover bg-center pt-[300px] lg:pt-[500px]" id="background">
        <div class="absolute inset-0 flex w-full items-end bg-black/40 pb-8 backdrop-blur-lg">
            <div class="container mx-auto py-4">
                <div class="flex flex-row items-end gap-4">
                    <div>
                        <img src="{{ $anime->image_url }}" class="aspect-3/4 h-[200px] rounded-xl object-cover lg:h-[290px]"
                            alt="" />
                    </div>
                    <div class="mt-4 flex w-[350px] flex-col lg:w-[700px]">
                        <a href="#">
                            <div class="badge badge-neutral">{{ $anime->type }}</div>
                        </a>
                        <p class="text-2xl font-bold text-white">{{ $anime->title }}</p>
                        <p class="text-base text-gray-100">{{ $anime->english_title }}</p>
                        <p class="text-base text-gray-100">{{ $anime->other_title }}</p>
                        <div class="mt-2 flex flex-wrap gap-1 lg:w-[500px]">
                            @foreach ($genres as $genre)
                                <a href="#" class="badge badge-primary">{{ $genre }}</a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mx-auto flex flex-col gap-4 py-8">
        <div class="grid grid-cols-1 gap-4 lg:grid-cols-12">
            <div class="col-span-8">
                <div class="flex w-full flex-col gap-2">
                    <h3 class="text-xl font-bold lg:text-2xl">Synopsis</h3>
                    <p class="text-sm leading-[1.7] lg:text-base">{{ $anime->synopsis }}</p>
                </div>
            </div>
            <div class="col-span-4">
                <div class="flex w-full flex-col gap-2 lg:w-3/4">
                    <h3 class="text-xl font-bold lg:text-2xl">Information</h3>
                    <p class="text-sm lg:text-base">
                        <strong>Type</strong> : {{ $anime->type }}
                    </p>
                    <p class="text-sm lg:text-base">
                        <strong>Episodes</strong> : {{ $anime->episodes }}
                    </p>
                    <p class="text-sm lg:text-base">
                        <strong>Status</strong> : {{ $anime->status }}
                    </p>
                    <p class="text-sm lg:text-base">
                        <strong>Premiered</strong> : {{ $anime->premiered_season }} {{ $anime->premiered_year }}
                    </p>
                    <p class="text-sm lg:text-base">
                        <strong>Producers</strong> :
                        @foreach ($producers as $index => $producer)
                            <span>{{ $producer }}</span>{{ $loop->last ? '' : ', ' }}
                        @endforeach
                    </p>
                    <p class="text-sm lg:text-base">
                        <strong>Licensors</strong> :
                        @foreach ($licensors as $index => $licensor)
                            <span>{{ $licensor }}</span>{{ $loop->last ? '' : ', ' }}
                        @endforeach
                    </p>
                    <p class="text-sm lg:text-base">
                        <strong>Studios</strong> :
                        @foreach ($studios as $index => $studio)
                            <span>{{ $studio }}</span>{{ $loop->last ? '' : ', ' }}
                        @endforeach
                    </p>
                    <p class="text-sm lg:text-base">
                        <strong>Rating</strong> : {{ $anime->rating }}
                    </p>
                </div>
            </div>
        </div>

        <div class="mt-8">
            <h2 class='text-xl lg:text-3xl font-bold'>
                Related Anime
            </h2>
            <div class="mt-8">
                <AnimeList pagination={false} itemPerRows={6} anime={related_anime} />
            </div>
        </div>
    </div>
@endsection
