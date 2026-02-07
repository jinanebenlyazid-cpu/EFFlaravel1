@extends('main')

@section('content')
<h1>Liste des événements :</h1>

@if($events->isEmpty())
    <p>Aucun événement trouvé.</p>
@else
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>Thème</th>
                <th>Date Début</th>
                <th>Date Fin</th>
                <th>Description</th>
                <th>Coût Journalier</th>
                <th>Expert ID</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($events as $even)
            <tr>
                <td>{{ $even->theme }}</td>
                <td>{{ $even->date_debut }}</td>
                <td>{{ $even->date_fin }}</td>
                <td>{{ $even->description }}</td>
                <td>{{ $even->cout_journalier }}</td>
                <td>{{ $even->expert_id }}</td>
                <td>
                    <!-- Consulter -->
                    <a href="{{ route('evenements.show', $even->id) }}" class="btn btn-sm btn-info">Consulter</a>
                    
                    <!-- Modifier -->
                    <a href="{{ route('evenements.edit', $even->id) }}" class="btn btn-sm btn-warning">Modifier</a>
                    
                    <!-- Supprimer -->
                    <form action="{{ route('evenements.destroy', $even->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet événement ?')">Supprimer</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endif

@endsection
