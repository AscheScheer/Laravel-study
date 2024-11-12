<x-layout>
    <x-slot:title>{{ $title }}</x-slot>

    <div class="d-flex justify-content-center align-items-center bg-light">

        <div class="card p-4 shadow my-4" style="width: 24rem;">
            <h3 class="card-title text-center mb-4">Tambah Artikel/Item</h3>
            <form action="{{ route('submititem') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Judul</label>
                    <input type="text" class="form-control" id="titlepost" name="titlepost"
                        placeholder="Isi judul">
                </div>
                {{-- <div class="mb-3">
                    <label for="username" class="form-label">Slug</label>
                    <input type="text" class="form-control" id="slug" name="slug"
                        placeholder="Digunakan untuk tampilan di link">
                </div> --}}
                <div class="mb-3">
                    <p>Content</p>
                    <textarea id="payload" name="payload" required style="width: 100%"></textarea>
                </div>
                <button type="submit" class="btn btn-primary w-100">Register</button>
            </form>
        </div>

    </div>

</x-layout>
