<form action="{{ route('teams.create') }}" method="POST">
    @csrf
    <label for="">Naam Toernooi: </label>
    <input type="text" name="tournament"><br>

    <label for="">School: </label>
    <input type="text" name="school"><br>

    <label for="">Players: </label>
    <input type="text" name="players"><br>

    <input type="submit" value="Opslaan">
</form>
