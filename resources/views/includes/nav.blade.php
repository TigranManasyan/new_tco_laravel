@section('nav-bar')
<div class="container">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">My site</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('home-page')}}">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('blog-page')}}">Blog</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('all-posts')}}">Posts</a>
        </li>
    </ul>
</div>
