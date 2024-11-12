@props(['posts'])

<div class="container">
    <div class="row justify-content-between">
        @foreach ($posts as $post)
            <!-- Card 1 -->
            <div class="card card-fixed mb-3">
                <div class="card-body">
                    <a href="/items/{{ $post['slug'] }}"><h5 class="card-title">{{ Str::of($post['titlepost'])->limit(50) }}</h5></a>
                    <p class="card-text">{{Str::of($post['payload'])->limit(80) }}</p>
                    <a href="/items/{{ $post['slug'] }}">Baca Selengkapnya >></a>
                </div>
            </div>
        @endforeach
    </div>
</div>
