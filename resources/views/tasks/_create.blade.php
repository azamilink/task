<div class="card">
    <div class="card-header">Creat New Task</div>
    <div class="card-body">
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger">
                {{ $error }}
            </div>
        @endforeach
        <form action="{{ route('tasks.store') }}" method="post" class="d-flex">
            @csrf
            @include('tasks._form', ['submit' => 'Create'])
        </form>
    </div>
</div>
