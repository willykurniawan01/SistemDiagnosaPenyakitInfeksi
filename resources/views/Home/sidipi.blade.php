@extends('Home.templates.layouts') @section('title','Home') @section('content')

{{-- section carousel --}}
<section class="carousel">
    <div
        id="carouselExampleControls"
        class="carousel slide"
        data-ride="carousel"
    >
        <div class="carousel-inner">
            @foreach ($post as $p)
            <div @if($loop->
                iteration==1) class="carousel-item active" @else
                class="carousel-item" @endif data-interval="5000">
                <div class="container">
                    <div class="row mt-5">
                        <div class="col-12 mt-5 mt-md-0 col-md-6 d-flex">
                            <div class="align-self-center">
                                <h1 class="text-carousel">“{{$p->judul}}”</h1>
                            </div>
                        </div>

                        <div
                            class="col-md-6 d-none d-md-flex justify-content-end"
                        >
                            <img
                                src="{{url('storage/uploads/'.$p->img)}}"
                                class="img-carousel img-fluid"
                                alt="..."
                            />
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <a
            class="carousel-control-prev"
            href="#carouselExampleControls"
            role="button"
            data-slide="prev"
        >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a
            class="carousel-control-next"
            href="#carouselExampleControls"
            role="button"
            data-slide="next"
        >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="row justify-content-center">
        <div class="col-10 col-md-6">
            <form class="form-inline search-form">
                <input
                    class="form-control"
                    type="search"
                    placeholder="Search"
                    aria-label="Search"
                />
                <button class="btn" type="submit">Cari</button>
            </form>
        </div>
    </div>
</section>
{{-- section carousel end --}}

{{-- section portal-informasi --}}
<section class="portal-informasi">
    <div class="container portal-container">
        <div class="row">
            <h4>Portal Informasi</h4>
        </div>
    </div>

    <div class="caroussel d-none d-md-block">
        <div
            id="carouselExampleInterval"
            class="carousel slide"
            data-ride="carousel"
        >
            <div class="carousel-inner">
                <div class="carousel-item active" data-interval="10000">
                    <div class="container d-flex justify-content-md-around">
                        @if(count($portal_informasi)>0) @for($i=0;$i<3;$i++)
                        <figure class="figure">
                            <div class="figure-img">
                                <img
                                    src="{{url('storage/uploads').'/'.$portal_informasi[$i]->img}}"
                                    class="figure-img img-fluid"
                                    alt="..."
                                />
                                <a
                                    class="d-flex"
                                    href="{{route('sidipi-single',['id'=>1])}}"
                                    ><img
                                        class="align-self-center m-auto"
                                        src="{{
                                            url('Home/assets/img/see-icon.png')
                                        }}"
                                        alt=""
                                /></a>
                            </div>
                            <figcaption class="figure-caption text-center">
                                {{$portal_informasi[$i]->judul}}
                            </figcaption>
                        </figure>
                        @endfor @endif
                    </div>
                </div>

                <div class="carousel-item" data-interval="10000">
                    <div class="container d-flex justify-content-md-around">
                        @if(count($portal_informasi)>3) @for($i=3;$i<6;$i++)
                        <figure class="figure">
                            <div class="figure-img">
                                <img
                                    src="{{url('storage/uploads').'/'.$portal_informasi[$i]->img}}"
                                    class="figure-img img-fluid"
                                    alt="..."
                                />
                                <a
                                    class="d-flex"
                                    href="{{route('sidipi-single',['id'=>1])}}"
                                    ><img
                                        class="align-self-center m-auto"
                                        src="{{
                                            url('Home/assets/img/see-icon.png')
                                        }}"
                                        alt=""
                                /></a>
                            </div>
                            <figcaption class="figure-caption text-center">
                                {{$portal_informasi[$i]->judul}}
                            </figcaption>
                        </figure>
                        @endfor @endif
                    </div>
                </div>
            </div>

            <a
                class="carousel-control-prev"
                href="#carouselExampleInterval"
                role="button"
                data-slide="prev"
            >
                <img src="{{ url('Home/assets/img/NEXT.png') }}" alt="" />
            </a>
            <a
                class="carousel-control-next"
                href="#carouselExampleInterval"
                role="button"
                data-slide="next"
            >
                <img src="{{ url('Home/assets/img/NEXT2.png') }}" alt="" />
            </a>
        </div>
    </div>
</section>
{{-- section portal-informasi --}}

<!-- section info kseshatan -->
<section class="info-kesehatan">
    <div class="container info-kesehatan-container">
        <div class="row">
            <h4>Info Kesehatan</h4>
        </div>
    </div>

    <!-- info-kesehatan-carousel -->
    <div class="info-carousel">
        <div
            id="carouselExampleIndicators"
            class="carousel slide"
            data-ride="carousel"
        >
            <div class="carousel-inner">
                @foreach($info_kesehatan as $i)
                <div @if($loop->
                    iteration==1) class="carousel-item active"@else
                    class="carousel-item"@endif>
                    <div class="container">
                        <div class="row justify-content-around">
                            <div class="col-4 d-flex">
                                <img
                                    class="align-self-center img-carousel"
                                    src="{{url('storage/uploads/'.$i->img)}}"
                                    alt=""
                                />
                            </div>

                            <div class="col-8">
                                <h4 class="judul">
                                    {{$i->judul}}
                                </h4>
                                <p class="text-justify">
                                    {{(str_word_count($i->isi))>60 ? substr($i->isi,0,1000):$i->isi}}
                                </p>
                            </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="col-2">
                            <a href="{{route('sidipi-single',['id'=>encrypt($i->id_post)])}}" class="form-control btn btn-sidipi">
                                    Selengkapnya
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <a
                class="carousel-control-prev"
                href="#carouselExampleIndicators"
                role="button"
                data-slide="prev"
            >
                <span
                    class="carousel-control-prev-icon"
                    aria-hidden="true"
                ></span>
                <span class="sr-only">Previous</span>
            </a>
            <a
                class="carousel-control-next"
                href="#carouselExampleIndicators"
                role="button"
                data-slide="next"
            >
                <span
                    class="carousel-control-next-icon"
                    aria-hidden="true"
                ></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <!-- info-kesehatan-carousel-end -->
</section>
<!-- section info kseshatan -->

{{-- Corona Virus section --}}
<section class="portal-informasi">
    <div class="container portal-container">
        <div class="row">
            <h4>Corona Virus</h4>
        </div>
    </div>

    <div class="caroussel d-none d-md-block">
        <div
            id="carouselExampleInterval"
            class="carousel slide"
            data-ride="carousel"
        >
            <div class="carousel-inner">
                <div class="carousel-item active" data-interval="10000">
                    <div class="container d-flex justify-content-md-around">
                        <figure class="figure">
                            <div class="figure-img">
                                <img
                                    src="{{
                                        url('Home/assets/img/Rectangle 8.png')
                                    }}"
                                    class="figure-img img-fluid rounded"
                                    alt="..."
                                />
                                <a class="d-flex" href="#"
                                    ><img
                                        class="align-self-center m-auto"
                                        src="{{
                                            url('Home/assets/img/see-icon.png')
                                        }}"
                                        alt=""
                                /></a>
                            </div>
                            <figcaption class="figure-caption">
                                A caption for the above image.
                            </figcaption>
                        </figure>

                        <figure class="figure">
                            <div class="figure-img">
                                <img
                                    src="{{
                                        url('Home/assets/img/Rectangle 8.png')
                                    }}"
                                    class="figure-img img-fluid rounded"
                                    alt="..."
                                />
                                <a href="#"
                                    ><a class="d-flex" href="#"
                                        ><img
                                            class="align-self-center m-auto"
                                            src="{{
                                                url(
                                                    'Home/assets/img/see-icon.png'
                                                )
                                            }}"
                                            alt="" /></a
                                ></a>
                            </div>
                            <figcaption class="figure-caption">
                                A caption for the above image.
                            </figcaption>
                        </figure>

                        <figure class="figure">
                            <div class="figure-img">
                                <img
                                    src="{{
                                        url('Home/assets/img/Rectangle 8.png')
                                    }}"
                                    class="figure-img img-fluid rounded"
                                    alt="..."
                                />
                                <a href="#">
                                    <a class="d-flex" href="#"
                                        ><img
                                            class="align-self-center m-auto"
                                            src="{{
                                                url(
                                                    'Home/assets/img/see-icon.png'
                                                )
                                            }}"
                                            alt=""
                                    /></a>
                                </a>
                            </div>
                            <figcaption class="figure-caption">
                                A caption for the above image.
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>

            <a
                class="carousel-control-prev"
                href="#carouselExampleInterval"
                role="button"
                data-slide="prev"
            >
                <img src="{{ url('Home/assets/img/NEXT.png') }}" alt="" />
            </a>
            <a
                class="carousel-control-next"
                href="#carouselExampleInterval"
                role="button"
                data-slide="next"
            >
                <img src="{{ url('Home/assets/img/NEXT2.png') }}" alt="" />
            </a>
        </div>
    </div>
</section>
{{-- section corona virus --}}

<!-- section Penyakit infeksi -->
<section class="penyakit-infeksi">
    <div class="container penyakit-container">
        <div class="row">
            <h4>Apa itu penyakit infeksi?</h4>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-3">
                <img src="{{ url('Home/assets/img/virus2.png') }}" alt="" />
            </div>

            <div class="col-9 d-flex">
                <p class="text-justify align-self-center">
                    Penyakit infeksi adalah masalah kesehatan yang disebabkan
                    oleh organisme seperti virus, bakteri, jamur, dan parasit.
                    Meski beberapa jenis organisme terdapat di tubuh dan
                    tergolong tidak berbahaya, pada kondisi tertentu,
                    organisme-organisme tersebut dapat menyerang dan menimbulkan
                    gangguan kesehatan, yang bahkan berpotensi menyebabkan
                    kematian. Infeksi dapat disebabkan oleh 4 organisme berbeda,
                    yakni virus, bakteri, parasit, dan jamur. Masing-masing
                    organisme dapat menimbulkan masalah kesehatan yang berbeda.
                </p>
            </div>
        </div>
    </div>
</section>
<!-- section Penyakit infeksi -->

<!-- section developer -->
<section class="developer">
    <div class="container developer-container">
        <div class="row">
            <h4>Developer</h4>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-around">
            <figure class="figure">
                <div class="figure-img">
                    <img
                        src="{{ url('Home/assets/img/developer.png') }}"
                        class="img-fluid rounded-circle"
                        alt="..."
                    />
                    <a href="{{route('sidipi-developer',['id'=>1])}}"></a>
                </div>
                <figcaption class="figure-caption">
                    A caption for the above image.
                </figcaption>
            </figure>
            <figure class="figure">
                <div class="figure-img">
                    <img
                        src="{{ url('Home/assets/img/developer.png') }}"
                        class="img-fluid rounded-circle"
                        alt="..."
                    />
                    <a href=""></a>
                </div>
                <figcaption class="figure-caption">
                    A caption for the above image.
                </figcaption>
            </figure>
            <figure class="figure">
                <div class="figure-img">
                    <img
                        src="{{ url('Home/assets/img/developer.png') }}"
                        class="img-fluid rounded-circle"
                        alt="..."
                    />
                    <a href=""></a>
                </div>
                <figcaption class="figure-caption">
                    A caption for the above image.
                </figcaption>
            </figure>
        </div>
    </div>
</section>
<!-- section developer -->

@endsection
