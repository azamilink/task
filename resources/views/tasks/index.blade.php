<x-app-layout>
    <div class="row justify-content-center mt-3">
        <div class="col-lg-8">
            @include("tasks._create")
            <ul class="list-group mt-3">
                @foreach ($tasks as $index => $task)
                    <li class="list-group-item d-flex align-items-center justify-content-between">
                        {{ $index + 1 }} - {{ $task->list }}
                        <div class="d-flex">
                            <a href="{{ route("tasks.edit", $task->id) }}" class="btn btn-info me-2">Edit</a>
                            <form action="{{ route("tasks.destroy", $task->id) }}" method="post">
                                @csrf
                                @method("delete")
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin?')">Delete</button>
                            </form>
                        </div>
                    </li>
                @endforeach
            </ul>
            <div class="mt-2">
                {{ $tasks->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
