<x-layouts.app title="Edit team">

    <div class="TC">
        <div class="wrapper">
            <div class="form-group">
                <form action="{{ route('teams.update', $team->id) }}" method="POST">
                    @csrf
                    <label for="name">Name: </label>
                    <input type="text" name="name" value="{{ $user->name }}"><br>

                    <label for="role">Role: </label>
                    <input type="text" name="role" value="{{ $user->role }}"><br>

                    <label for="email">Email: </label>
                    <input type="text" name="email" value="{{ $user->email }}"><br>

                    <input type="submit" value="Save">
                </form>
            </div>

        </div>
    </div>

    </x-layouts.app>
