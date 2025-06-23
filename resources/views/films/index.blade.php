<div>
    <h1>Nos films</h1>
    <button><a href="{{ route('films.create') }}">Créer un film</a></button>

    @if (!empty($films))
        <table>
            <thead>
            <tr>
                <th>Titre</th>
                <th>Date <a href="{{ route('films.dateDesc') }}">⬇️️</a> <a href="{{ route('films.dateAsc') }}">⬆️</a> </th>
                <th>Note <a href="{{ route('films.noteDesc') }}">⬇️️</a> <a href="{{ route('films.noteAsc') }}">⬆️</a> </th>
                <th>Commentaire</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($films as $film)
                <tr>
                    <td>{{ $film->titre }}</td>
                    <td>{{ $film->date }}</td>
                    <td>{{ $film->note }}</td>
                    <td>{{ $film->commentaire }}</td>
                    <td>
                        <button><a href="{{ route('films.edit', $film) }}">Modifier</a></button>
                        <form action="{{ route('films.destroy', $film->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <p>Il n'y a pas de film.</p>
    @endif
    <button><a href="{{ route('films.meilleureNote') }}">Note à partir de 8 ️</a></button>
    <button><a href="{{ route('films.sortieRecente') }}">Sortie moins de 3 mois</a></button>
</div>
