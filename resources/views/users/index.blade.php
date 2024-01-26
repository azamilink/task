<x-app-layout>
    <h1>All Users</h1>

    @foreach ($users as $user)
        <li><a href="{{ route('users.show', $user) }}">{{ $user->name }}</a></li>
    @endforeach

</x-app-layout>
