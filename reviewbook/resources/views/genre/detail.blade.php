@extends('layouts.master')
@section('title')
    Halaman Detail Genre
@endsection()
@section('h2')
    Detail Genre
@endsection
@section('content')
    <h1 class="text-primary">{{ $genre->name }}</h1>
    <p>{{ $genre->description }}</p>

    <hr>
    <div class="row">
        @forelse ($genre->Books as $item)
            <div class="col-3 mb-4">
                <div class="card">
                    <img src="{{ asset('image/' . $item->image) }}" class="card-img-top" height="300px" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->title }}</h5>
                        <p class="card-text">{{ Str::limit($item->summary, 100) }}</p>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <small class="text-muted">Stok tersedia:</small>
                            <span class="badge {{ $item->stok > 0 ? 'bg-primary' : 'bg-danger' }} rounded-pill">
                                {{ $item->stok }}
                            </span>
                        </div>

                        <div class="mt-auto">
                            <div class="d-grid gap-2 mb-2">
                                <a href="/book/{{ $item->id }}" class="btn btn-info">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <h1>Tidak ada Buku di Genre ini</h1>
        @endforelse
    </div>

    <a href="/genre" class="btn btn-secondary btn-sm my-3">Kembali</a>
@endsection
