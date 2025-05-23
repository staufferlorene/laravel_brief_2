<div>
    <h1>Nos films</h1>
    <button><a href="{{ route('films.create') }}">Créer un film</a></button>

    @if (!empty($films))
        <table>
            <thead>
            <tr>
                <th>Titre</th>
                <th>Date</th>
                <th>Note</th>
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
</div>
