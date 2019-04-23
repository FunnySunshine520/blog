<html>
<head>
    <title>{{ config('blog.title') }}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
    <div class="container">
        <a class="navbar-brand mr-auto mr-lg-0" href="#">{{ config('blog.title') }} 后台</a>
        <button class="navbar-toggler p-0 border-0" type="button" data-toggle="collapse" data-target="#navbar-menu"
                aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbar-menu">
            @include('admin.partials.navbar')
        </div>
    </div>
</nav>
<div class="container">
    <h1>{{ config('blog.title') }}</h1>
    <h5>Page {{ $posts->currentPage() }} of {{ $posts->lastPage() }}</h5>
    <hr>
    <ul>
        @foreach ($posts as $post)
            <li>
                <a href="{{ route('blog.detail', ['slug' => $post->slug]) }}">{{ $post->title }}</a>
                <em>({{ $post->published_at }})</em>
                <p>
                    {{ str_limit($post->content) }}
                </p>
            </li>
        @endforeach
    </ul>
    <hr>
    {!! $posts->render() !!}
</div>
</body>
</html>
