<x-layouts.app>

    <div class="CL">
        <a href="{{ route('teams.create') }}">Add team</a>
    </div>

    <div class="TC">
    <table>
        <thead>
            <th>Id</th>
            <th>Name</th>
            <th>School</th>
            <th>Players</th>
            <th>Actions</th>

        </thead>

        <tbody>
            @foreach ($teams as $team)
                <tr>
                    <td>{{ $team->id }}</td>
                    <td><a href="{{ route('teams.index', ['teamId' => $team->id]) }}">{{ $team->name }}</a></td>
                    <td>{{$team->school}}</td>
                    <td>{{$team->players}}</td>
                    <td>
                        <a href="{{ route('teams.edit', $team->id) }}" class="button-edit">Edit</a>
                        <form action="{{ route('teams.destroy', $team->id) }}" method="post">
                            @csrf
                            @method("DELETE")
                            <input type="submit" value="Delete" class="button-delete">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</x-layouts.app>
