@extends('Home.templates.layouts')
@section('title','Artikel')
@section('content')
<section class="single-article">
    <div class="container">
        <div class="row breadcrumb-row">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent">
                    <li class="breadcrumb-item"><a href="{{route('sidipi-home')}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                </ol>
            </nav>
        </div>

        <div class="row row-judul">
            <div class="col-12">
                <h4 class="judul-artikel">
                    Manfaat Mengkonsumsi Sayuran dan
                    Buah
                </h4>
            </div>
        </div>

        <div class="row row-img-single">
            <div class="col-12">
                <img src="{{url('Home/assets/img/img-single.png')}}" class="img-fluid img-single" alt="">
                <p class="sumber">https://unsplash.com/photos/0eJVAZJ7jJU</p>
            </div>
        </div>

        <div class="row row-isi">
            <div class="col-12">
                <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, neque
                    aspernatur porro molestiae
                    aliquam cum debitis? Temporibus rem quam reiciendis id fuga est officia fugit dolor magni expedita
                    suscipit, sunt accusantium dolore sint non soluta explicabo consequuntur omnis ipsam iste laudantium
                    culpa! Delectus in dolores sint deleniti rem itaque vel voluptas nisi ab similique est nemo
                    assumenda odit earum ex suscipit natus impedit iure fuga vero ipsam, perspiciatis accusamus debitis!
                    Voluptas neque adipisci officia aperiam vero quasi quidem ipsam, accusamus hic odit, cumque esse
                    corrupti animi quos eum. Enim, laborum repellat, commodi amet porro esse rem, blanditiis eveniet
                    minima praesentium culpa aliquam similique? Reiciendis quo, ut veritatis ipsum, reprehenderit
                    sapiente placeat quos explicabo consectetur, recusandae quam? Omnis debitis nesciunt animi suscipit
                    quo in alias qui earum doloremque architecto corporis enim, aspernatur dignissimos nostrum officiis
                    velit voluptatem quibusdam dolorem laborum a! Quam iure ab quia non blanditiis facere, suscipit
                    perspiciatis accusantium harum eveniet modi ipsa odio aspernatur officiis. Veritatis sapiente magni
                    aperiam perspiciatis consequatur a doloribus reprehenderit. Nihil qui esse quis quasi explicabo
                    quaerat, laboriosam nesciunt voluptatem repellat dignissimos, hic sint nemo autem non rem ducimus
                    eos, quod quos similique omnis numquam assumenda quidem unde. Rem optio veniam nemo id deleniti quis
                    pariatur, tempora quidem accusantium eaque veritatis voluptas voluptatum at vitae maxime dolorum
                    laborum magni consectetur est ea adipisci ducimus aperiam sit. Accusamus commodi facere, dolorem
                    sapiente asperiores voluptates molestias soluta porro ut nostrum voluptas, autem facilis voluptatum
                    earum praesentium illo laudantium, error maxime quisquam suscipit unde ipsa totam in! Ad eius autem
                    et a expedita, dolorum amet voluptatem quo deleniti! Soluta, odit explicabo? Voluptatem distinctio
                    nemo odio sunt deserunt rem iste doloribus? Minima sunt molestiae ipsam quaerat labore atque!
                    Praesentium numquam corrupti ipsa animi error sint magnam harum natus alias neque quam quidem
                    placeat beatae voluptates, sed amet. Dolores necessitatibus ipsam quis, inventore sequi voluptates,
                    tempore, repellat aut exercitationem iure corrupti perferendis voluptas soluta placeat laborum.
                    Sapiente, quo eaque veniam quia voluptatum aliquid reiciendis esse asperiores ipsum saepe eum
                    architecto. Animi deserunt amet quaerat corrupti cumque iure dignissimos officia repellendus rem
                    libero quasi alias labore veniam corporis, eveniet ad aut, hic minima modi. Voluptatibus ipsam
                    praesentium molestiae veniam, doloribus incidunt soluta pariatur tempore illum hic iusto ipsa eum
                    exercitationem! Veniam, rem neque sequi ullam dolor aliquam beatae cum quibusdam vel officiis
                    debitis nemo. Facere, laborum quae. Consequatur assumenda molestiae reprehenderit iure debitis
                    itaque minus consequuntur rerum sunt recusandae ea maiores sed rem corporis ut fugit vel illum
                    ratione amet eos, temporibus tempore. Ipsum est nihil reiciendis laudantium, accusantium animi
                    consequuntur eos quaerat, vel sapiente voluptates eius. Sequi atque explicabo, magnam, voluptates
                    voluptate ea est doloremque vel labore aut sed consectetur numquam libero voluptas sunt. Impedit ab
                    quo nihil explicabo facilis? Quis repellendus sed eos, numquam soluta quae voluptates velit beatae
                    quod excepturi adipisci molestias tempora vero laudantium ullam quidem aliquam ipsum molestiae
                    blanditiis maiores voluptatum consequatur aliquid. Sapiente officiis inventore illo repellat nobis
                    atque sed esse non asperiores perferendis nihil odit repudiandae nesciunt consequuntur
                    exercitationem delectus libero, mollitia ratione!</p>
            </div>
        </div>
    </div>
</section>

@endsection