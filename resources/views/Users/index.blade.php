<x-layouts.app>

    <div class="TC">
    <table>
        <thead>
            <th>Id</th>
            <th>Name</th>
            <th>Role</th>
            <th>email</th>

        </thead>

        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->role }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <a href="{{ route('users.edit', $user->id) }}">Edit</a>
                        <form action="{{ route('users.destroy', $team->id) }}" method="post">
                            @csrf
                            @method("DELETE")
                            <input type="submit" value="Delete">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</x-layouts.app>
