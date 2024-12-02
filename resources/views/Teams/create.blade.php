<x-layouts.app title="Add team">

    <div class="TC">

    <div class="wrapper">

            <div class="form-group">
                <form action="{{ route('teams.store') }}" method="POST">
                    @csrf
                    <label for="name">Name: </label>
                    <input type="text" name="name"><br>

                    <label for="school">School: </label>
                    <input type="text" name="school"><br>

                    <textarea class="players" name="players" id="players" cols="30" rows="10"></textarea>

                    <input type="submit" value="Save">
                </form>
            </div>

        </div>
    </div>

    </x-layouts.app>
