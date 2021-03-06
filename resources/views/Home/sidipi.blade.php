@extends('Home.templates.layouts') @section('title','Home') @section('content')

{{-- section carousel --}}
<section class="carousel">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            @foreach ($post as $p)
            <div @if($loop->
                iteration==1) class="carousel-item active" @else
                class="carousel-item" @endif data-interval="5000">
                <div class="container">
                    <div class="row mt-5">
                        <div class="col-12 justify-content-center mt-5 mt-md-0 col-md-6 d-flex">
                            <div class="align-self-center">
                                <h1 class="judul text-sidipi font-weight-bolder">“{{$p->judul}}”</h1>
                                <div class="text-white text-justify">
                                    {!!(str_word_count($p->isi))>60 ? substr($p->isi,0,200).' ...':$p->isi!!}</div>
                                <div class="pt-2">
                                    <a href="{{route('sidipi-single',['id'=>$p->id_post])}}"
                                        class="btn btn-sidipi">Selengkapnya</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 d-none d-md-flex justify-content-center">
                            <img src="{{url('storage/uploads/'.$p->img)}}" class="img-carousel img-fluid" alt="..." />
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>
{{-- section carousel end --}}

<div class="row justify-content-center row-search">
    <div class="col-10 col-md-6">
        <form class="form-inline search-form">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search" />
            <button class="btn" type="submit">Cari</button>
        </form>
    </div>
</div>

{{-- section portal-informasi --}}
<section class="portal-informasi" data-aos="fade-right" data-aos-delay="500">
    <div class="container portal-container">
        <div class="row">
            <h4>Portal Informasi</h4>
        </div>
    </div>

    <div class="caroussel d-none d-md-block">
        <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-interval="10000">
                    <div class="container d-flex justify-content-md-around">
                        @if(isset($portal_informasi) AND count($portal_informasi)>0)
                        <?php $limit=3; ?>
                        @if(count($portal_informasi)==2)
                        <?php $limit=2; ?>
                        @endif
                        @if(count($portal_informasi)==1)
                        <?php $limit=1; ?>
                        @endif
                        @for($i=0;$i<$limit;$i++) <div class="card py-4 px-4 my-3">
                            <figure class="figure">
                                <div class="figure-img">
                                    <img src="{{url('storage/uploads').'/'.$portal_informasi[$i]->img}}"
                                        class="figure-img img-fluid" alt="..." />
                                    <a class="d-flex"
                                        href="{{route('sidipi-single',['id'=>$portal_informasi[$i]->id_post])}}"><img
                                            class="align-self-center m-auto" src="{{
                                            url('Home/assets/img/see-icon.png')
                                        }}" alt="" /></a>
                                </div>
                                <figcaption class="figure-caption text-sidipi2 fs-20">
                                    <h4 class="judul">{{$portal_informasi[$i]->judul}}</h4>
                                    <div> {!!(str_word_count($portal_informasi[$i]->isi))>60 ?
                                        substr($portal_informasi[$i]->isi,0,20):$portal_informasi[$i]->isi!!}
                                        ...</div>
                                    <a href="{{route('sidipi-single',['id'=>$portal_informasi[$i]->id_post])}}"
                                        class="btn btn-sidipi">Selengkapnya</a>
                                </figcaption>
                            </figure>
                    </div>
                    @endfor @endif
                </div>
            </div>

            <div class="carousel-item" data-interval="10000">
                <div class="container d-flex justify-content-md-around">
                    @if(isset($portal_informasi) AND count($portal_informasi)>3) @for($i=3;$i
                    <count($portal_informasi);$i++)<div class="card py-4 px-4 my-3" data-aos="fade-right"
                        data-aos-delay="500">
                        <figure class="figure">
                            <div class="figure-img">
                                <img src="{{url('storage/uploads').'/'.$portal_informasi[$i]->img}}"
                                    class="figure-img img-fluid" alt="..." />
                                <a class="d-flex"
                                    href="{{route('sidipi-single',['id'=>$portal_informasi[$i]->id_post])}}"><img
                                        class="align-self-center m-auto" src="{{
                                            url('Home/assets/img/see-icon.png')
                                        }}" alt="" /></a>
                            </div>
                            <figcaption class="figure-caption text-sidipi2 fs-20">
                                <h4 class="judul">{{$portal_informasi[$i]->judul}}</h4>
                                <p> {{(str_word_count($portal_informasi[$i]->isi))>60 ? substr($portal_informasi[$i]->isi,0,20):$portal_informasi[$i]->isi}}
                                    ...</p>
                                <a href="{{route('sidipi-single',['id'=>$portal_informasi[$i]->id_post])}}"
                                    class="btn btn-sidipi">Selengkapnya</a>
                            </figcaption>
                        </figure>
                </div>
                @endfor @endif
            </div>
        </div>
    </div>

    <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
        <img src="{{ url('Home/assets/img/NEXT.png') }}" alt="" />
    </a>
    <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
        <img src="{{ url('Home/assets/img/NEXT2.png') }}" alt="" />
    </a>
    </div>
    </div>
</section>
{{-- section portal-informasi --}}

<!-- section info kseshatan -->
<section class="info-kesehatan" data-aos="fade-left" data-aos-delay="800">
    <div class="container info-kesehatan-container">
        <div class="row">
            <h4>Info Kesehatan</h4>
        </div>
    </div>

    <!-- info-kesehatan-carousel -->
    <div class="info-carousel">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                @foreach($info_kesehatan as $i)
                <div @if($loop->
                    iteration==1) class="carousel-item active"@else
                    class="carousel-item"@endif>
                    <div class="container">
                        <div class="row justify-content-around">
                            <div class="col-4 d-flex">
                                <img class="align-self-center img-carousel" src="{{url('storage/uploads/'.$i->img)}}"
                                    alt="" />
                            </div>

                            <div class="col-8">
                                <h4 class="judul">
                                    {{$i->judul}}
                                </h4>
                                <div class="text-justify">
                                    {!!(str_word_count($i->isi))>60 ? substr($i->isi,0,1000):$i->isi!!}
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-2">
                                <a href="{{route('sidipi-single',['id'=>$i->id_post])}}" class="btn btn-sidipi my-3">
                                    Selengkapnya
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <!-- info-kesehatan-carousel-end -->
</section>
<!-- section info kseshatan -->

{{-- Corona Virus section --}}
<section class="portal-informasi" data-aos="fade-right" data-aos-delay="800">
    <div class="container portal-container">
        <div class="row">
            <h4>Corona Virus</h4>
        </div>
    </div>

    <div class="caroussel d-none d-md-block">
        <div id="carouselExampleFade" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-interval="10000">
                    <div class="container d-flex justify-content-md-around">
                        @if(isset($corona_virus) AND count($corona_virus)>0)
                        <?php $limit=3; ?>
                        @if(count($corona_virus)==2)
                        <?php $limit=2; ?>
                        @endif
                        @if(count($corona_virus)==1)
                        <?php $limit=1; ?>
                        @endif
                        @for($i=0;$i<$limit;$i++)<div class="card py-4 px-4 my-3">
                            <figure class="figure">
                                <div class="figure-img">
                                    <img src="{{url('storage/uploads').'/'.$corona_virus[$i]->img}}"
                                        class="figure-img img-fluid rounded" alt="..." />
                                    <a class="d-flex"
                                        href="{{route('sidipi-single',['id'=>$corona_virus[$i]->id_post])}}"><img
                                            class="align-self-center m-auto" src="{{
                                            url('Home/assets/img/see-icon.png')
                                        }}" alt="" /></a>
                                </div>
                                <figcaption class="figure-caption text-sidipi2 fs-20">
                                    <h4 class="judul">{{$corona_virus[$i]->judul}}</h4>
                                    <div> {!!(str_word_count($corona_virus[$i]->isi))>60 ?
                                        substr($corona_virus[$i]->isi,0,20):$corona_virus[$i]->isi!!}
                                        ...</div>
                                    <a href="{{route('sidipi-single',['id'=>$corona_virus[$i]->id_post])}}"
                                        class="btn btn-sidipi">Selengkapnya</a>
                                </figcaption>
                            </figure>
                    </div>
                    @endfor
                    @endif
                </div>
            </div>

            <div class="carousel-item" data-interval="5000">
                <div class="container d-flex justify-content-md-around">
                    @if(isset($corona_virus) AND count($corona_virus)>3)
                    @for($i=3;$i<count($corona_virus);$i++) <div class="card py-4 px-4 my-3" data-aos="fade-left"
                        data-aos-delay="500">
                        <figure class="figure">
                            <div class="figure-img">
                                <img src="{{url('storage/uploads').'/'.$corona_virus[$i]->img}}"
                                    class="figure-img img-fluid rounded" alt="..." />
                                <a class="d-flex"
                                    href="{{route('sidipi-single',['id'=>encrypt($corona_virus[$i]->id_post)])}}"><img
                                        class="align-self-center m-auto" src="{{
                                            url('Home/assets/img/see-icon.png')
                                        }}" alt="" /></a>
                            </div>
                            <figcaption class="figure-caption text-sidipi2 fs-20">
                                <h4 class="judul">{{$corona_virus[$i]->judul}}</h4>
                                <div> {!!(str_word_count($corona_virus[$i]->isi))>60 ?
                                    substr($corona_virus[$i]->isi,0,20):$corona_virus[$i]->isi!!}
                                    ...</div>
                                <a href="{{route('sidipi-single',['id'=>$corona_virus[$i]->id_post])}}"
                                    class="btn btn-sidipi">Selengkapnya</a>
                            </figcaption>
                        </figure>
                </div>
                @endfor
                @endif
            </div>
        </div>
    </div>

    <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
        <img src="{{ url('Home/assets/img/NEXT.png') }}" alt="" />
    </a>
    <a class="carousel-control-next" href="#carouselExampleFade  " role="button" data-slide="next">
        <img src="{{ url('Home/assets/img/NEXT2.png') }}" alt="" />
    </a>
    </div>
    </div>
</section>
{{-- section corona virus --}}

<!-- section Penyakit infeksi -->
<section class="penyakit-infeksi" data-aos="fade-left" data-aos-delay="800">
    <div class="container penyakit-container my-2">
        <div class="row">
            <h4>{{$penyakit_infeksi[0]->judul}}</h4>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-3">
                <img src="{{ url('storage/uploads/'.'/'.$penyakit_infeksi[0]->img) }}" alt="" />
            </div>

            <div class="col-9 d-flex">
                <div class="text-justify align-self-center">
                    {!!$penyakit_infeksi[0]->isi!!}
                </div>
            </div>
        </div>
    </div>
</section>
<!-- section Penyakit infeksi -->

<!-- section developer -->
<section class="developer" data-aos="fade-right" data-aos-delay="800">
    <div class="container developer-container mb-3">
        <div class="row">
            <h4>Developer</h4>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-around">
            <figure class="figure">
                <div class="figure-img">
                    <img src="{{ url('Home/assets/img/developer.png') }}" class="img-fluid rounded-circle" alt="..." />
                    <a href="{{route('sidipi-developer',['id'=>1])}}"></a>
                </div>
                <figcaption class="figure-caption text-center">
                    <h5 class="text-sidipi">Willy kurniawan</h5>
                    <h4 class="text-sidipi2 font-weight-bold">Web Developer</h4>
                </figcaption>
            </figure>
        </div>
    </div>
</section>
<!-- section developer -->

@endsection