<x-layouts.app title="Edit tournament">

    <div class="TC">
        <div class="wrapper">
            <div class="form-group">
                <form action="{{ route('tournaments.update', $tournament->id) }}" method="POST">
                    @csrf
                    <label for="name">Titel: </label>
                    <input type="text" name="title" value="{{ $tournament->title }}"><br>

                    <label for="school">Max teams: </label>
                    <input type="text" name="max-teams" value="{{ $tournament->max_teams }}"><br>

                    <label for="players">Gestart: </label>
                    <input type="text" name="started" value="{{ $team->started }}"><br>

                    <input type="submit" value="Save">
                </form>
            </div>

        </div>
    </div>

    </x-layouts.app>
