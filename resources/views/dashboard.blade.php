<x-layout>
    @csrf
    <x-slot:title>{{ $title }}</x-slot>

    <div class="container mt-5">

        <!-- Dashboard Container -->
        <div class="bg-light p-4 rounded">
    
            <div class="row mt-4">
                <!-- Card Jumlah Artikel -->
                <div class="col-md-3">
                    <div class="card border-dark">
                        <div class="card-body text-center">
                            <h5 class="card-title">Jumlah Artikel:</h5>
                            <p class="card-text">{{ $jumlahArtikel }}</p>
                        </div>
                    </div>
                </div>
    
                <!-- Card Jumlah Admin -->
                <div class="col-md-3">
                    <div class="card border-dark">
                        <div class="card-body text-center">
                            <h5 class="card-title">Jumlah Admin:</h5>
                            <p class="card-text">{{$jumlahAdmin}}</p>
                        </div>
                    </div>
                </div>
    
                <!-- Welcome Message -->
                <div class="col-md-6 d-flex align-items-center justify-content-center">
                    <h4 class="fw-bold">Selamat datang,</h4>
                </div>
            </div>
    
            <!-- Menu -->
            <div class="mt-4 p-3 border border-dark rounded">
                <h5>Menu:</h5>
                <ul class="list-unstyled">
                    <a href="/item/additem" style="text-decoration: none; color:black"><li>- Tambah artikel/item</li></a>
                    <a href="/account/register" style="text-decoration: none; color:black"><li>- Tambah user</li></a>
                </ul>
            </div>
        </div>
    </div>

</x-layout>


