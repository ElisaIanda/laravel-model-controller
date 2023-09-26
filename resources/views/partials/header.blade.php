@php
$menuList = [
[
"name" => "Film",
],
[
"name" => "Series",
],
[
"name" => "Genre",
],
[
"name" => "Free",
],
];
@endphp
<header>
    <div class="container p-4">
        <div class="row justify-content-center">
            <div class="logo">
                <img class="w-100" src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7a/Logonetflix.png/1600px-Logonetflix.png" alt="">
            </div>
            <div class="list-menu d-flex justify-content-center">
                <ul class="nav">
                    <li class="nav-item">
                        @foreach ( $menuList as $singleMenu )
                        <a href="#" class="nav-link ">{{$singleMenu["name"]}}</a>
                        @endforeach
                    </li>
                </ul>
            </div>
        </div>
    </div>

</header>