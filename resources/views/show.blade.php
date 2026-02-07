@extends('main')
@section('content')
<h1>Détails de l'événement :</h1>

<table class="table table-bordered table-striped">
    <tr>
        <th>Thème</th>
        <th>Date Début</th>
        <th>Date Fin</th>
        <th>Description</th>
        <th>Coût Journalier</th>
        <th>Expert</th>
    </tr>
    <tr>
        <td>{{ $event->theme }}</td>
        <td>{{ $event->date_debut }}</td>
        <td>{{ $event->date_fin }}</td>
        <td>{{ $event->description }}</td>
        <td>{{ $event->cout_journalier }}</td>
        <td>{{ $expertnom }}</td>
    </tr>
</table>
<h1>Les ateliers de l'evenement :</h1>
<table class="table table-bordered table-striped">
    <tr>
        <th>Nom de l'atelier</th>
        <th>Description de l'atelier</th>
    </tr>
    @foreach ($ateliers as $at)
        <tr>
            <td>{{$at->nomatelier}}</td>
            <td>{{$at->description}}</td>
        </tr>
    @endforeach
</table>
<a href="{{ url()->previous() }}" class="btn btn-secondary">Retour</a>

@endsection
