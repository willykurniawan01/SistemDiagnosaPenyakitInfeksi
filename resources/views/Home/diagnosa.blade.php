@extends('Home.templates.layouts')
@section('title','Diagnosa')
@section('content')
<section class="diagnosa">
    <div class="container">
        <div class="row breadcrumb-row">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent">
                    <li class="breadcrumb-item"><a href="{{route('sidipi-home')}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Diagnosa</li>
                </ol>
            </nav>
        </div>

        <form action="{{route('proses-diagnosa')}}" method="post">
            @csrf
            <table class="table">
                <thead class="bg-sidipi text-sidipi">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Pertanyaan</th>
                        <th scope="col">Jawaban</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($gejala as $g)
                    <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{!!$g->pertanyaan!!}</td>
                    <td>
                        <div class="input-group">
                        <input type="checkbox"class="form-check" name="jawaban[]" id="ya" value="{{$g->  id_gejala}}">
                        <label for="ya">ya</label>
                        </div>
                    </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <button type="submit" class="btn btn-sidipi">Proses</button>
        </form>
    </div>
</section>
@endsection