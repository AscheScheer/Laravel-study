<x-layout>
    <x-slot:title>{{ $title }}</x-slot>

    <div class="container">
        <p class="card-text">{{$post['payload']}}</p>
        <a href="/"><button class="btn-primary">Kembali</button></a>
    </div>

</x-layout>
