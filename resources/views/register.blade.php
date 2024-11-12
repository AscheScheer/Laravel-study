<x-layout>
    <x-slot:title>{{ $title }}</x-slot>

    <div class="d-flex justify-content-center align-items-center bg-light">

        <div class="card p-4 shadow my-4" style="width: 24rem;">
            <h3 class="card-title text-center mb-4">Register</h3>
            <form action="{{ route('submit.register') }}" method="post">
              @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name"
                        placeholder="Enter your name">
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username"
                        placeholder="Enter your username">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password"
                        placeholder="Enter your password">
                </div>
                <button type="submit" class="btn btn-primary w-100">Register</button>
            </form>
        </div>

    </div>

</x-layout>
