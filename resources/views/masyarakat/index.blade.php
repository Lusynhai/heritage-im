@extends('masyarakat.partials.master')

@section('title', 'Disbud Indramayu')

@section('content')
    <div class="main-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="caption header-text">
                        <h6>Selamat Datang di</h6>
                        <h2>DINAS KEBUDAYAAN KABUPATEN INDRAMAYU</h2>
                        <div class="search-input">
                            <form id="search" action="#">
                                <input type="text" placeholder="Ketik Sesuatu" id='searchText' name="searchKeyword" onkeypress="handle"/>
                                <button role="button">Cari Sekarang</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container mt-4">
        <div class="d-flex justify-content-between">
            <div class="flex-grow-1 mr-4" style="flex-basis: 60%;">
                <div id="acc" class="card bg-none border">
                    <div class="card-body">
                        <div class="category-section">
                            <h4 class="category-title">Warisan Budaya Tak Benda</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="category-section">
                            <h4 class="category-title">
                                <a href="#" class="text-dark">WBTB Kabupaten Indramayu - Nasional</a>
                            </h4>
                            @foreach($wbtb as $item)
                            @if($item->kategori_wbtb_id == '1')
                            <div class="card-body">
                                <div class="category-section">
                                    <h4 class="category-title">
                                        @if($item->kategori_budaya == 'Sejarah/Tradisi')
                                            <span class="badge" style="background-color: red;">&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                            <a href="{{ route('masyarakat.wbtb.detail', ['id' => $item->id]) }}" class="text-dark">{{ $item->nama }}</a>
                                        @elseif($item->kategori_budaya == 'Cagar Budaya')
                                            <span class="badge" style="background-color: blue;">&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                            <a href="{{ route('masyarakat.wbtb.detail', ['id' => $item->id]) }}" class="text-dark">{{ $item->nama }}</a>
                                        @elseif($item->kategori_budaya == 'Kesenian')
                                            <span class="badge" style="background: linear-gradient(to right, red, yellow, blue);">&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                            <a href="{{ route('masyarakat.wbtb.detail', ['id' => $item->id]) }}" class="text-dark">{{ $item->nama }}</a>
                                        @endif
                                    </h4>
                                </div> 
                            </div>
                            @endif
                            @endforeach
                        </div> 
                    </div>
                    
                    <div class="card-body">
                        <div class="category-section">
                            <h4 class="category-title">
                                <a href="#" class="text-dark">WBTB Kabupaten Indramayu - Provinsi</a>
                            </h4>
                            @foreach($wbtb as $item)
                            @if($item->kategori_wbtb_id == '2')
                            <div class="card-body">
                                <div class="category-section">
                                    <h4 class="category-title">
                                        @if($item->kategori_budaya == 'Sejarah/Tradisi')
                                            <span class="badge" style="background-color: red;">&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                            <a href="{{ route('masyarakat.wbtb.detail', ['id' => $item->id]) }}" class="text-dark">{{ $item->nama }}</a>
                                        @elseif($item->kategori_budaya == 'Cagar Budaya')
                                            <span class="badge" style="background-color: blue;">&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                            <a href="{{ route('masyarakat.wbtb.detail', ['id' => $item->id]) }}" class="text-dark">{{ $item->nama }}</a>
                                        @elseif($item->kategori_budaya == 'Kesenian')
                                            <span class="badge" style="background: linear-gradient(to right, red, yellow, blue);">&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                            <a href="{{ route('masyarakat.wbtb.detail', ['id' => $item->id]) }}" class="text-dark">{{ $item->nama }}</a>
                                        @endif
                                    </h4>
                                </div> 
                            </div>
                            @endif
                            @endforeach
                        </div> 
                    </div>

                    <div class="card-body">
                        <div class="category-section">
                            <h4 class="category-title">
                                <a href="#" class="text-dark">WBTB Kabupaten Indramayu - Kabupaten</a>
                            </h4>
                            @foreach($wbtb as $item)
                            @if($item->kategori_wbtb_id == '3')
                            <div class="card-body">
                                <div class="category-section">
                                    <h4 class="category-title">
                                        @if($item->kategori_budaya == 'Sejarah/Tradisi')
                                            <span class="badge" style="background-color: red;">&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                            <a href="{{ route('masyarakat.wbtb.detail', ['id' => $item->id]) }}" class="text-dark">{{ $item->nama }}</a>
                                        @elseif($item->kategori_budaya == 'Cagar Budaya')
                                            <span class="badge" style="background-color: blue;">&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                            <a href="{{ route('masyarakat.wbtb.detail', ['id' => $item->id]) }}" class="text-dark">{{ $item->nama }}</a>
                                        @elseif($item->kategori_budaya == 'Kesenian')
                                            <span class="badge" style="background: linear-gradient(to right, red, yellow, blue);">&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                            <a href="{{ route('masyarakat.wbtb.detail', ['id' => $item->id]) }}" class="text-dark">{{ $item->nama }}</a>
                                        @endif
                                    </h4>
                                </div> 
                            </div>
                            @endif
                            @endforeach
                        </div> 
                    </div>

                    <div class="card-body">
                        <div class="category-section">
                            <h4 class="category-title">
                                <a href="#" class="text-dark">Pengajuan Objek Budaya</a>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="flex-shrink-0" style="flex-basis: 46%;">
                <!-- Card for Detail Information -->
                <div class="card mb-4">
                    <div class="card-header">
                        PERBUP Indramayu Nomor 5 Tahun 2022
                    </div>
                    <div class="card-body">
                        <p>
                            Berdasarkan Peraturan Bupati Indramayu Nomor 5 Tahun 2022 tentang Organisasi dan Tata Kerja Dinas Pendidikan dan Kebudayaan Kabupaten Indramayu, bidang kebudayaan terdiri dari tiga kategori objek budaya sebagai berikut:
                        </p>
                        <h5>Kategori Objek Budaya:</h5>
                        <ol>
                            <li>
                                <strong>a. Sejarah dan Tradisi</strong>: 
                                <ul>
                                    <li>Merupakan objek budaya yang mencakup aspek-aspek sejarah dan tradisi lokal yang memiliki nilai historis dan kultural.</li>
                                    <li>Termasuk kebiasaan, upacara, dan praktik yang diwariskan dari generasi ke generasi.</li>
                                    <li>Mencerminkan identitas dan sejarah masyarakat setempat.</li>
                                </ul>
                            </li>
                            <li>
                                <strong>b. Cagar Budaya</strong>: 
                                <ul>
                                    <li>Merupakan objek budaya yang meliputi situs, bangunan, dan struktur fisik yang memiliki nilai sejarah, arkeologi, atau arsitektur.</li>
                                    <li>Cagar budaya biasanya merupakan warisan dari masa lalu yang harus dilestarikan karena keunikan dan nilai sejarahnya.</li>
                                </ul>
                            </li>
                            <li>
                                <strong>c. Kesenian</strong>: 
                                <ul>
                                    <li>Meliputi berbagai bentuk seni yang merupakan ekspresi kreatif dan budaya dari masyarakat.</li>
                                    <li>Ini termasuk seni pertunjukan, musik, tarian, dan seni rupa yang memiliki nilai kultural.</li>
                                    <li>Sering kali ditampilkan dalam acara atau festival budaya.</li>
                                </ul>
                            </li>
                        </ol>

                        <SPAN></SPAN>
                        <p>
                            Dari ketiga kategori objek budaya tersebut, semuanya termasuk dalam kategori Warisan Budaya Tak Benda. Warisan Budaya Tak Benda adalah kategori budaya yang mencakup elemen-elemen budaya yang tidak memiliki bentuk fisik namun memiliki nilai historis, kultural, dan sosial yang penting bagi masyarakat.
                        </p>
                        <h5>Kategori Warisan Budaya Tak Benda:</h5>
                        <ul>
                            <li>
                                <strong>1. WBTB Ditetapkan Secara Nasional</strong>: 
                                <ul>
                                    <li>Warisan budaya yang diakui dan ditetapkan sebagai bagian dari warisan budaya nasional oleh pemerintah pusat.</li>
                                </ul>
                            </li>
                            <li>
                                <strong>2. WBTB Ditetapkan Secara Provinsi</strong>: 
                                <ul>
                                    <li>Warisan budaya yang diakui dan ditetapkan oleh pemerintah provinsi sebagai bagian dari warisan budaya lokal.</li>
                                </ul>
                            </li>
                            <li>
                                <strong>3. WBTB Ditetapkan Secara Kabupaten</strong>: 
                                <ul>
                                    <li>Warisan budaya yang diakui dan ditetapkan oleh pemerintah kabupaten sebagai bagian dari warisan budaya daerah.</li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <!--simbol-->
                <div class="card mt-4">
                    <div class="card-header">
                        Keterangan Simbol
                    </div>
                    <div class="card-body">
                        <p><span class="badge" style="background-color: red;">&nbsp;&nbsp;&nbsp;&nbsp;</span> Sejarah/Tradisi</p>
                        <p><span class="badge" style="background-color: blue;">&nbsp;&nbsp;&nbsp;&nbsp;</span> Cagar Budaya</p>
                        <p><span class="badge" style="background: linear-gradient(to right, red, yellow, blue);">&nbsp;&nbsp;&nbsp;&nbsp;</span> Kesenian</p>
                    </div>
                </div>
                
                <div class="card mt-4">
                    <div class="card-header">
                        Disclaimer
                    </div>
                    <div class="card-body">
                        <p>
                            Warisan Budaya Tak Benda Kabupaten Indramayu mencakup berbagai jenis budaya yang memiliki nilai historis dan kultural yang penting. Data yang disajikan dalam portal ini merupakan hasil pengumpulan dan verifikasi yang dilakukan oleh dinas terkait dan dapat mengalami perubahan. Harap digunakan dengan bijak untuk keperluan penelitian, edukasi, dan pelestarian budaya. Terima kasih atas perhatian dan dukungannya.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
