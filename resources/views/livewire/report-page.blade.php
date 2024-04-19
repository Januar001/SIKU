@push('style')
    <style>
        .image-container {
            position: relative;
            display: inline-block;
        }

        .popup {
            display: none;
            position: fixed;
            z-index: 999;
            padding: 5px;
            background-color: white;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);

        }

        /* .popup img {
                                        height: auto;
                                    } */

        /* Untuk perangkat seluler */
        @media (max-width: 768px) {
            .popup img {
                width: 90vw;
                height: auto;
            }
        }

        /* Untuk komputer */
        @media (min-width: 769px) {
            .popup img {
                width: auto;
                height: 90vh;
            }
        }

        .close {
            position: absolute;
            top: 15px;
            right: 20px;
            font-size: 20px;
            cursor: pointer;
            color: red;
            background: white;
            padding: 1%;
        }

        .popup-image {
            cursor: pointer;
        }

        .popup-image:hover {
            opacity: 0.7;
        }
    </style>
@endpush

<div class="card">
    <div class="card-body">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div>
            <h3>
                Data Report
            </h3>
        </div>
        <div class="pb-2">
            {{-- <livewire:component.AddPegawai> --}}
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Action</th>
                        <th scope="col">Lokasi</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">Tanggal</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Hendro</td>
                        <td>Kunjungan</td>
                        <td>7.9092090,-112.91029019</td>
                        <td>
                            <div class="image-container">
                                <img src="https://t3.ftcdn.net/jpg/03/67/46/48/240_F_367464887_f0w1JrL8PddfuH3P2jSPlIGjKU2BI0rn.jpg"
                                    alt="Image" height="40" class="popup-image" wire:data='1'>
                                <div class="popup">
                                    <span class="close">&times;</span>
                                    <img src="https://t3.ftcdn.net/jpg/03/67/46/48/240_F_367464887_f0w1JrL8PddfuH3P2jSPlIGjKU2BI0rn.jpg"
                                        alt="Popup Image">
                                </div>
                            </div>
                        </td>
                        <td>Menagih Customer</td>
                        <td>12 Januari 2024 <br><span>20:00 WIB</span></td>
                    </tr>
                    {{-- <tr>
                        <td>1</td>
                        <td>Hendro</td>
                        <td>Kunjungan</td>
                        <td>7.9092090,-112.91029019</td>
                        <td>
                            <div class="image-container">
                                <img src="https://t3.ftcdn.net/jpg/03/67/46/48/240_F_367464887_f0w1JrL8PddfuH3P2jSPlIGjKU2BI0rn.jpg"
                                    alt="Image" height="40" class="popup-image" wire:data='1'>
                                <div class="popup">
                                    <span class="close">&times;</span>
                                    <img src="https://t3.ftcdn.net/jpg/03/67/46/48/240_F_367464887_f0w1JrL8PddfuH3P2jSPlIGjKU2BI0rn.jpg"
                                        alt="Popup Image">
                                </div>
                            </div>
                        </td>
                        <td>Menagih Customer</td>
                        <td>12 Januari 2024 <br><span>20:00 WIB</span></td>
                    </tr> --}}
                    <tr>
                        <td>2</td>
                        <td>Dewa</td>
                        <td>Penagihan</td>
                        <td>
                            <a href="https://www.google.com/maps/dir/Current+Location/-7.423585,112.721592"
                                target="_blank">-7.423585, 112.721592</a>
                            <br>
                            <button class="bg-primary rounded-circle" data-toggle="tooltip" data-placement="top"
                                title="Directions">
                                <a href="https://www.google.com/maps/dir/Current+Location/-7.423585,112.721592"
                                    target="_blank">
                                    <i class="text-white fas fa-directions"></i>
                                </a>
                            </button>
                            <button class="bg-danger rounded-circle" data-toggle="tooltip" data-placement="top"
                                title="Map">
                                <a href="https://www.google.com/maps?q=-7.423585,112.721592" target="_blank">
                                    <i class="text-white fas fa-map-marker-alt"></i>
                                </a>
                            </button>
                        </td>
                        <td>
                            <div class="image-container">
                                <img src="https://media.istockphoto.com/id/1489490993/id/foto/pengusaha-muda-yang-percaya-diri-duduk-di-latar-belakang-yang-terisolasi-antusias.jpg?s=612x612&w=0&k=20&c=FRlDIOUmumqtnTUbnoBAqR4mCNgbWDLrkciC_gkgtzY="
                                    alt="Image" height="40" class="popup-image" wire:data='2'>
                                <div class="popup">
                                    <span class="close">&times;</span>
                                    <img src="https://media.istockphoto.com/id/1489490993/id/foto/pengusaha-muda-yang-percaya-diri-duduk-di-latar-belakang-yang-terisolasi-antusias.jpg?s=612x612&w=0&k=20&c=FRlDIOUmumqtnTUbnoBAqR4mCNgbWDLrkciC_gkgtzY="
                                        alt="Popup Image">
                                </div>
                            </div>
                        </td>
                        <td>Menagih Customer</td>
                        <td>12 Januari 2024 <br><span>20:00 WIB</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@push('script')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener('livewire:initialized', () => {

            @this.on('swal', (event) => {
                const data = event
                swal.fire({
                    icon: data[0]['icon'],
                    title: data[0]['title'],
                    text: data[0]['text'],
                })
            })
        })
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const popupImages = document.querySelectorAll(".popup-image");
            const popups = document.querySelectorAll(".popup");
            const closes = document.querySelectorAll(".close");

            popupImages.forEach(function(popupImage, index) {
                popupImage.addEventListener("click", function() {
                    // Menutup semua popup yang terbuka sebelum membuka yang baru
                    popups.forEach(function(popup) {
                        popup.style.display = "none";
                    });
                    // Membuka popup yang sesuai dengan gambar yang diklik
                    popups[index].style.display = "block";
                });
            });

            closes.forEach(function(close) {
                close.addEventListener("click", function() {
                    // Menutup popup saat tombol close diklik
                    popups.forEach(function(popup) {
                        popup.style.display = "none";
                    });
                });
            });
        });
    </script>
@endpush
