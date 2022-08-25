@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col p-4">
                <img
                    src="https://dkstatics-public.digikala.com/digikala-brands/af664f0bcf9bc412b741c618e6e52fc2d090198f_1619269008.png?x-oss-process=image/resize,m_lfit,h_160,w_160/quality,q_80"
                    class="rounded-circle" alt="">
            </div>
            <div class="col-9 p-5">
                <div><h1>{{ $user->username }}</h1></div>
                <div class="d-flex">
                    <div><strong>{{$user->posts->count()}}</strong> post</div>
                    <div class="px-5"><strong>153</strong> followers</div>
                    <div><strong>153</strong> following</div>
                </div>
                <div class="pt-4"><strong>{{ $user->profile->title }}</strong></div>
                <div>{{ $user->profile->bio }}</div>
                <div><a href="#">{{ $user->profile->url }}</a></div>
            </div>
        </div>
        <div class="row pt-4">
            @foreach($user->posts as $post)
                <div class="col-4 pb-4"><img src="/storage/{{$post->image}}" alt="" class="w-100"></div>
            @endforeach
        </div>
    </div>
    </div>
@endsection
