@push('style')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

    <style>
        html,
        body {
            height: 100%;
            margin: 0;
        }

        .leaflet-container {
            height: 400px;
            width: auto;
            max-width: 100%;
            max-height: 100%;
        }
    </style>
@endpush

<div class="card">
    <div id="map" style="width: auto; height: 70vh"></div>
</div>



@php
    $totalLat = 0;
    $totalLng = 0;
    $markerCount = count($data);

    foreach ($data as $item) {
        $totalLat += $item['latitude'];
        $totalLng += $item['longitude'];
    }

    $centerLat = $totalLat / $markerCount;
    $centerLng = $totalLng / $markerCount;
@endphp

@push('script')
<script>
    const centerLat = {{ $centerLat }};
    const centerLng = {{ $centerLng }};

    const map = L.map('map').setView([centerLat, centerLng], 13);

    const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);

    const markers = [];
    @php
        foreach ($data as $key => $item) {
    @endphp
        const marker{{$key}} = L.marker([{{$item->latitude}}, {{$item->longitude}}]).addTo(map)
            .bindPopup('<b>AO : {{ $item->users->name }}</b>').openPopup();
        markers.push(marker{{$key}}.getLatLng());
    @php
        }
    @endphp

    const line = L.polyline(markers, {color: 'green'}).addTo(map);
</script>



@endpush



{{-- <script>
        const map = L.map('map').setView([-7.422946, 112.693785], 13);

        const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);

        const marker1 = L.marker([-7.405701, 112.677028]).addTo(map)
            .bindPopup('<b>Hello world!</b><br />I am a popup.').openPopup();

        const marker2 = L.marker([-7.422946, 112.693785]).addTo(map)
            .bindPopup('<b>Hello world!</b><br />I am a popup.');

        const marker3 = L.marker([51.55, -0.06]).addTo(map)
            .bindPopup('<b>Hello world!</b><br />I am a popup.');

        const line = L.polyline([
            marker1.getLatLng(),
            marker2.getLatLng(),
            marker3.getLatLng()
        ]).addTo(map);

        function calculateDistance(latlng1, latlng2) {
            return latlng1.distanceTo(latlng2); // Jarak dalam meter
        }

        // Fungsi untuk menampilkan jarak antara setiap dua titik ketika garis diklik
        function displayDistanceOnClick(e) {
            const latlngs = e.target.getLatLngs(); // Dapatkan semua titik koordinat pada garis
            let content = '';

            // Iterasi melalui setiap dua titik berturut-turut untuk menghitung jarak
            for (let i = 0; i < latlngs.length - 1; i++) {
                const latlng1 = latlngs[i];
                const latlng2 = latlngs[i + 1];
                const distance = calculateDistance(latlng1, latlng2);
                content += `Jarak antara titik ${i + 1} dan ${i + 2}: ${distance.toFixed(2)} meter<br>`;
            }

            // Set content pada bindPopup garis
            e.target.bindPopup(content).openPopup();
        }

        // Tambahkan event click pada garis
        line.on('click', displayDistanceOnClick);
    </script> --}}
