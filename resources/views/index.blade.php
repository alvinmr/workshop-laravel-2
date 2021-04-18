@extends('layouts.app', ['categories' => $categories])

@section('title', 'Bakso Barokah')

@section('content')
<div class="mt-5">
    {{-- List bakso --}}
    <div class="mt-5 row d-flex ">
        @foreach ($products as $product)
        <div class="col-4 g-5">
            <div class="border-0 card">
                <div class="img-card" style="background-image: url('{{ asset('images/'.$product->photo) }}')"></div>
                <div class="p-0 pt-3 card-body">
                    <div class="d-flex justify-content-between">
                        <p class="card-text-name">{{ $product->name }}</p>
                        <p>Rp. {{ $product->price }}</p>
                    </div>
                    <p class="mb-4">{{ $product->desc }}</p>
                    <x-button message="Beli"></x-button>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection

<style>
    .img-card {
        height: 250px;
        background-position: center;
        background-size: cover;
        border-radius: 10px;
    }

    .card-text-name {
        font-weight: bold;
    }
</style>