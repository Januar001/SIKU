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
            padding: 20px;
            background-color: white;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .popup img {
            width: 100%;
            height: auto;
        }

        .close {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 20px;
            cursor: pointer;
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
                                    alt="Image" height="30" class="popup-image">
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
            const popupImage = document.querySelector(".popup-image");
            const popup = document.querySelector(".popup");
            const close = document.querySelector(".close");

            popupImage.addEventListener("click", function() {
                popup.style.display = "block";
            });

            close.addEventListener("click", function() {
                popup.style.display = "none";
            });
        });
    </script>
@endpush
