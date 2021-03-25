@extends('Template.AdminTemplate', ['title' => 'Offre'])


@section('content')

<div class="card w-75 text-center  mx-auto mt-3">
        <div class="card-header text-center">
            <h5>[Nom de l'offre] par [Nom de l'entreprise]</h5>
            <p class="font-italic">Offre déposée le [Date de l'offre]</p>
        </div>
        <div class="card-body">
            <h5>Statistiques de l'offre :</h5>
            <div class="card w-75 mx-auto mb-3">
                <div class="card-body ">
                    <p class="card-text text-justify">Compétences : [Compétences]</p>
                    <p class="card-text text-justify">Localité : [Localité]</p>
                    <p class="card-text text-justify">Promotion visée : [Promotion visée]</p>
                    <p class="card-text text-justify">Durée du stage : [Durée du stage]</p>
                    <p class="card-text text-justify">Base de rémunération (/h) : [Base de rémunération (/h)]</p>
                    <p class="card-text text-justify">Nombre de place : [Nombre de place]</p>

                </div>
            </div>
            <h5>Description de l'offre :</h5>
            <div class="card w-75 mx-auto mb-3">
                <div class="card-body ">
                    <p class="card-text text-justify">[Description de l'offre]</p>

                </div>
            </div>
            <button type="button" class="btn btn-success mt-5 w-25 h-50" style="white-space:normal">Postuler</button></br>
            <button type="button" class="btn btn-dark mt-2 w-25 h-50" style="white-space:normal">Ajouter cette offre à ma Wish-List</button>


        </div>
    </div>


    @endsection