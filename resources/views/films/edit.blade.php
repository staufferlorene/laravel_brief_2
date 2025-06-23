<div>
    <h1>Modifier un film</h1>
    <form action="{{ route('films.update', $film) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="titre">Titre</label>
            <input value={{ $film->titre }} type="text" name="titre" id="titre" required>
        </div>
        <div>
            <label for="date">Date</label>
            <input value={{ $film->date }} type="date" name="date" id="date" required>
        </div>
        <div>
            <label for="note">Note</label>
            <input value={{ $film->note }} type="text" name="note" id="note" required>
        </div>
        <div>
            <label for="commentaire">Commentaire</label>
            <textarea name="commentaire" id="commentaire" required>{{ $film->commentaire }}</textarea>
        </div>
        <button type="submit">Valider</button>
    </form>
</div>
