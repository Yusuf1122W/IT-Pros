<x-layouts.app title="Edit team">

    <div class="TC">
        <div class="wrapper">
            <div class="form-group">
                <form action="{{ route('teams.update', $team->id) }}" method="POST">
                    @csrf
                    <label for="name">Name: </label>
                    <input type="text" name="name" value="{{ $team->name }}"><br>

                    <label for="school">School: </label>
                    <input type="text" name="school" value="{{ $team->school }}"><br>

                    <label for="players">Players: </label>
                    <input type="text" name="players" value="{{ $team->players }}"><br>

                    <input type="submit" value="Save">
                </form>
            </div>

        </div>
    </div>

    </x-layouts.app>
