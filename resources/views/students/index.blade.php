@extends('Template.AdminTemplate', ['title' => 'Étudiants'])

@section('css')
    <link rel="stylesheet" type = "text/css" href ="{{url('css/Students/index.css')}}">
@endsection

@section('content')
    @if(session()->has('info'))
        <div class="notification is-success">
            {{ session('info') }}
        </div>
    @endif
    <div class="card w-75 text-center  mx-auto mt-3" id="content">
        <div class="row">
            <div class="col">
                <form action="{{ route('students.search') }}" method="GET">
                    @csrf
                    <label for="exampleInputEmail1">Nom :</label>
                    <input type="search" class="form-control w-50 mx-auto" name="name" id="name">
                    <label for="exampleInputEmail1">Prénom :</label>
                    <input type="search" class="form-control w-50 mx-auto" name="firstName" id="firstName">
                    <input type="submit" class="btn btn-dark w-25 mt-3" value="Rechercher">
                </form><br>
                <label for="exampleInputEmail1">Centre :</label><br>
                <select class="custom-select w-50" id="selectAvancement1" onchange="window.location.href = this.value">
                    <option value="{{ route('students.index') }}" @unless($slug) selected @endunless>Toutes catégories</option>
                    @foreach($centers as $center)
                        <option value="{{ route('students.center', $center->slug) }}" {{ $slug == $center->slug ? 'selected' : '' }}>{{ $center->name }}</option>
                    @endforeach
                </select><br>
                <label for="exampleInputEmail1">Promotion :</label><br>
                <select class="custom-select w-50" id="selectAvancement2" onchange="window.location.href = this.value">
                    <option value="{{ route('students.index') }}" @unless($slug) selected @endunless>Toutes catégories</option>
                    @foreach($promotions as $promotion)
                        <option value="{{ route('students.promotion', $promotion->slug) }}" {{ $slug == $promotion->slug ? 'selected' : '' }}>{{ $promotion->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col">
                <button type="button" class="btn btn-success w-50 mt-5">Créer un nouvel étudiant</button>
            </div>
        </div>
        @foreach($students as $student)
        <div class="card mt-5 w-75 mx-auto">
            <div class="row">
                <div class="col">
                    <h5 class="card-title">{{$student->name}} {{$student->firstName}}</h5>
                    <p class="card-text">Centre de {{$student->center->name}}</p>
                    @foreach($student->promotions as $promotion)                    
                    <p class="card-text">Promotion : {{$promotion->name}}</p>
                    @endforeach
                </div>
                <div class="col text-right mt-4">
                    <button type="button" class="btn btn-dark w-25">Voir</button>
                    <button type="button" class="btn btn-success w-25">Modifier</button>
                    <button type="button" class="btn btn-danger w-25">Supprimer</button>
                </div>
            </div>
        </div>
        @endforeach
        <footer class="card-footer is-centered">
            {{ $students->links() }}
        </footer>
    </div>
@endsection
