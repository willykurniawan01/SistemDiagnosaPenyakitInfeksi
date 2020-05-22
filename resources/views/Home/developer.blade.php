@extends('Home.templates.layouts')
@section('title','Developer')
@section('content')
<section class="developer-single d-flex">
    <div class="container container-developer align-self-center">
        <div class="row row-developer align-self-center">
            <div class="col-3">
                <img class="rounded-circle" src="{{url('Home/assets/img/developer.png')}}" alt="">
            </div>
            <div class="col-4 d-flex">
                <div class="info align-self-center">
                    <h4 class="name">Willy kurniawan</h4>
                    <h4 class="role">Web Developer</h4>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bio">
    <div class="container">
        <div class="row row-judul">
            <div class="col">
                <h4>Bio</h4>
            </div>
        </div>
        <div class="row row-bio">
            <div class="col">
                <p class="bio text-justify">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste ratione, fuga adipisci ab fugit
                    libero officiis dolorem eaque tempore voluptate, harum, saepe eos dolore modi nihil accusamus fugiat
                    totam? Quibusdam enim officiis blanditiis tempora voluptate numquam aliquid, quidem recusandae
                    impedit quia! A voluptas dignissimos necessitatibus consequatur eveniet omnis doloribus ipsum quae
                    consequuntur dolores reiciendis adipisci nihil similique, recusandae minima maiores eligendi vel
                    corrupti corporis consectetur aut tempora voluptatem. Dignissimos velit fuga quam! Nostrum fugiat
                    dolorum totam repudiandae maiores itaque assumenda illo quo ducimus natus, voluptatum repellat
                    libero blanditiis autem quaerat vel eum tempore cum vero rem asperiores pariatur alias fugit saepe.
                    Accusantium quia aliquid quos nulla recusandae, omnis ipsum a officia, culpa tempore excepturi
                    rerum? Consequuntur similique, tempora rem ex provident ipsam nostrum veniam harum dolorem? Dolore
                    sed illo atque aliquam architecto libero illum voluptas, consequatur delectus sunt ut! Error, non.
                    Error, commodi delectus ratione, voluptas perspiciatis laboriosam repudiandae blanditiis, libero
                    fugit cupiditate asperiores praesentium qui iste perferendis? Aspernatur delectus possimus nesciunt.
                    Tempora atque accusamus optio obcaecati molestiae aliquam ipsum tempore architecto incidunt sunt
                    libero fuga possimus voluptates, assumenda deleniti, ex ratione exercitationem culpa at alias cum
                    iste quae et? Illum, vitae iure sit amet aliquid facilis quis optio quibusdam.
                </p>
            </div>
        </div>
    </div>
</section>
@endsection