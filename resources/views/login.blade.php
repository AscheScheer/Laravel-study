<x-layout>
    <x-slot:title>{{ $title }}</x-slot>

    <div class="d-flex justify-content-center align-items-center bg-light">

        <div class="card p-4 shadow my-4" style="width: 24rem;">
            <h3 class="card-title text-center mb-4">Login</h3>
            <form action="{{ route('submit.login') }}" method="post">
                @csrf
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
                <button type="submit" class="btn btn-primary w-100">Login</button>
            </form>
            @if(session('failed'))
            <p class="text-danger">{{ session('failed') }}</p>
            @endif
        </div>

    </div>

</x-layout>
