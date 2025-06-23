<div>
    <h1>Ajouter un film</h1>
    <form action="{{ route('films.store') }}" method="POST">
        @csrf
        <div>
            <label for="titre">Titre</label>
            <input type="text" name="titre" id="titre" required>
        </div>
        <div>
            <label for="date">Date</label>
            <input type="date" name="date" id="date" required>
        </div>
        <div>
            <label for="note">Note</label>
            <input type="text" name="note" id="note" required>
        </div>
        <div>
            <label for="commentaire">Commentaire</label>
            <textarea name="commentaire" id="commentaire" required></textarea>
        </div>
        <button type="submit">Valider</button>
    </form>
</div>
