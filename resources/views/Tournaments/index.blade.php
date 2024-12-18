<x-layouts.app>

    <div class="CL">
        <a href="{{ route('tournaments.create') }}">Add tournament</a>
    </div>

    <div class="TC">
    <table>
        <thead>
            <th>Id</th>
            <th>Titel</th>
            <th>Max Teams</th>
            <th>Gestart</th>

        </thead>

        <tbody>
            @foreach ($tournaments as $tournament)
                <tr>
                    <td>{{ $tournament->id }}</td>
                    <td>{{ $tournament->title }}</td>
                    <td>{{ $tournament->max_teams }}</td>
                    <td>{{ $tournament->started }}</td>
                    <td>
                        <a href="{{ route('tournaments.edit', $tournament->id) }}" class="button-edit">Edit</a>
                        <form action="{{ route('tournaments.destroy', $tournament->id) }}" method="post">
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
