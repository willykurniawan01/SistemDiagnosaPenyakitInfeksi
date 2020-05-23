@extends('Home.templates.layouts')
@section('title','Diagnosa')
@section('content')
<section class="diagnosa">
    <div class="container">
        <form action="" method="post">
            <table class="table">
                <thead class="bg-sidipi text-sidipi">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Pertanyaan</th>
                        <th scope="col">Jawaban</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                    </tr>
                </tbody>
            </table>
            <a href="{{route('sidipi-hasil-diagnosa',['id'=>1])}}" class="btn btn-sidipi">Proses</a>
        </form>
    </div>
</section>
@endsection