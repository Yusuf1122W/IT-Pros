<form action="{{ route('tournaments.create') }}" method="POST">
    @csrf
    <label for="">Naam Toernooi: </label>
    <input type="text" name="tournament"><br>

    <label for="">Maximale teams: </label>
    <input type="number" name="max-teams"><br>

    <label for="">Gestart: </label>
    <input type="date" name="started"><br>

    <input type="submit" value="Opslaan">
</form>
