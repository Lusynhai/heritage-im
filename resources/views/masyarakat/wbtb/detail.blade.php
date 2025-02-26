@extends('masyarakat.partials.master')

@section('title', 'Detail Wasian Budaya Tak Benda')

@section('css')
<style>
    .justifikasi-teks {
        text-align: justify;
        text-justify: inter-word;
        margin: 20px 5%;
    }
</style>
@endsection

@section('content')
    <div class="container mt-5">
        <h2>{{ $wbtb->nama }}</h2>
    </div>
    <div class="more-info">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tabs-content">
                        <div class="row">
                            <div class="nav-wrapper">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="description-tab" data-bs-toggle="tab" data-bs-target="#description" type="button" role="tab" aria-controls="description" aria-selected="true">Description</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="alamat-tab" data-bs-toggle="tab" data-bs-target="#alamat" type="button" role="tab" aria-controls="alamat" aria-selected="false">Alamat</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="document-tab" data-bs-toggle="tab" data-bs-target="#document" type="button" role="tab" aria-controls="document" aria-selected="false">Document</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="galeri-tab" data-bs-toggle="tab" data-bs-target="#galeri" type="button" role="tab" aria-controls="galeri" aria-selected="false">Galeri</button>
                                    </li>
                                </ul>
                            </div>              
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                                    <p class="justifikasi-teks">{!! nl2br(e($wbtb->deskripsi)) !!}</p>
                                </div>
                                <div class="tab-pane fade" id="alamat" role="tabpanel" aria-labelledby="alamat-tab">
                                    <p>{{ $wbtb->alamat }}</p>
                                </div>
                                <div class="tab-pane fade show active" id="document" role="tabpanel" aria-labelledby="document-tab">
                                    <p class="justifikasi-teks">{!! nl2br(e($wbtb->document)) !!}</p>
                                </div>
                                <div class="tab-pane fade" id="galeri" role="tabpanel" aria-labelledby="galeri-tab">
                                    <div class="row">
                                        {{-- @foreach($wbtbnas->galleries as $image)
                                            <div class="col-lg-3 col-md-4 col-6">
                                                <div class="d-block mb-4 h-100">
                                                    <a href="{{ route('galeri.show', $image->id) }}">
                                                        <img class="img-fluid img-thumbnail" src="{{ Storage::url('galeri/' . $image->file_path) }}" alt="{{ $image->nama }}">
                                                    </a>
                                                </div>
                                            </div>
                                        @endforeach --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Hilangkan logika modal yang tidak diperlukan
    });
</script>
@endsection
