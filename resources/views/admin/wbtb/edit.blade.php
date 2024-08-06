@extends('layouts.master')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
    integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />

<style>
    #map {
        height: 400px;
    }
</style>
@section('content')
 <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data WBTB Kabupaten</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('wbtb.update', $wbtb->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-7 mb-3">
                                    <div id="map"></div>
                                </div>
                                <div class="col-5 mb-3">
                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input type="text" name="nama" class="form-control" id="nama"
                                            required value="{{$wbtb->nama}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="deskripsi">Deskripsi</label>
                                        <textarea name="deskripsi" class="form-control" id="deskripsi" rows="3" required>{{$wbtb->deskripsi}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="deskripsi">Alamat</label>
                                        <textarea name="alamat" class="form-control" id="alamat" rows="3" required>{{$wbtb->alamat}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="koordinat" class="form-label"><span
                                                style="color: red;">*</span>
                                            Koordinat</label>
                                        <input id="koordinat" type="text" class="form-control" name="koordinat"
                                            value="{{$wbtb->koordinat}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="longitude" class="form-label"><span
                                                style="color: red;">*</span>
                                            Longitude</label>
                                        <input id="longitude" type="text" class="form-control"
                                            name="longitude" required value="{{$wbtb->koordinat}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="latitude" class="form-label"><span
                                                style="color: red;">*</span>
                                            Latitude</label>
                                        <input id="latitude" type="text" class="form-control" name="latitude"
                                            required value="{{$wbtb->koordinat}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="document">Document</label>
                                        <textarea name="document" class="form-control" id="deskripsi" rows="3" >{{$wbtb->document}}</textarea>  
                                    </div>
                                    <div class="form-group">
                                        <label for="galeri">SK Format Gambar</label>
                                        <input type="file" name="sk_gambar" class="form-control-file" id="sk_gambar">
                                    </div>
                                    <div class="form-group">
                                        <label for="kategori">Kategori Objek Budaya</label>
                                        <select name="kategori_budaya" id="kategori_budaya" class="form-control" required>
                                            {{-- <option value="">Pilih Kategori</option> --}}
                                            
                                            @if ()
                                                
                                            @else
                                                
                                            @endif
                                            <option value="Sejarah/Tradisi">Sejarah/Tradisi</option>
                                            <option value="Cagar Budaya">Cagar Budaya</option>
                                            <option value="Kesenian">Kesenian</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="kategori">Kategori Objek Budaya</label>
                                        <select class="form-control" name="kategori_wbtb_id" required>
                                            <option value="">Pilih kategori Objek budaya</option>
                                            @forelse ($kategori as $kategoris)
                                            <option value="{{ $kategoris->id }}" {{ $wbtb->kategori_wbtb_id == $kategoris->id ? 'selected' : ''
                                                }}>
                                                {{ $kategoris->nama }}</option>
                                            @empty
                                            <option value="NULL">kategori belum diinput</option>
                                            @endforelse
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
    integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
<script>
    // var koordinats = document.getElementById("koordinat");
        var osm = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        });

        var Stadia_Dark = L.tileLayer(
            'https://tiles.stadiamaps.com/tiles/alidade_smooth_dark/{z}/{x}/{y}{r}.png', {
                maxZoom: 20,
                attribution: '&copy; <a href="https://stadiamaps.com/">Stadia Maps</a>, &copy; <a href="https://openmaptiles.org/">OpenMapTiles</a> &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors'
            });

        var Esri_WorldStreetMap = L.tileLayer(
            'https://server.arcgisonline.com/ArcGIS/rest/services/World_Street_Map/MapServer/tile/{z}/{y}/{x}', {
                attribution: 'Tiles &copy; Esri &mdash; Source: Esri, DeLorme, NAVTEQ, USGS, Intermap, iPC, NRCAN, Esri Japan, METI, Esri China (Hong Kong), Esri (Thailand), TomTom, 2012'
            });

        var map = L.map('map', {
            center: [-5.129541583080711, 113.62957770241515],
            zoom: 5,
            layers: [osm]
        })


        var marker = L.marker([{{$wbtb->koordinat}}], {
            draggable: true
        }).addTo(map);

        var baseMaps = {
            'Open Street Map': osm,
            'Esri World': Esri_WorldStreetMap,
            'Stadia Dark': Stadia_Dark
        }

        L.control.layers(baseMaps).addTo(map)

        // CARA PERTAMA
        function onMapClick(e) {
            var coords = document.querySelector("[name=koordinat]")
            var latitude = document.querySelector("[name=latitude]")
            var longitude = document.querySelector("[name=longitude]")
            var lat = e.latlng.lat
            var lng = e.latlng.lng

            if (!marker) {
                marker = L.marker(e.latlng).addTo(map)
            } else {
                marker.setLatLng(e.latlng)
            }

            coords.value = lat + "," + lng
            latitude.value = lat,
                longitude.value = lng
        }
        map.on('click', onMapClick)
        // CARA PERTAMA

        // CARA KEDUA
        marker.on('dragend', function() {
            var koordinat = marker.getLatLng();
            marker.setLatLng(koordinat, {
                draggable: true
            })
            $('#koordinat').val(koordinat.lat + "," + koordinat.lng).keyup()
            $('#latitude').val(koordinat.lat).keyup()
            $('#longitude').val(koordinat.lng).keyup()
        })
        // CARA KEDUA
</script>

@endsection

