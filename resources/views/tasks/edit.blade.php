<x-app-layout>
    <div class="row justify-content-around">
        <div class="col-md-8">
            <div class="card mt-3">
                <div class="card-header">Edit Task</div>
                <div class="card-body">
                    <form action="{{ route('tasks.update', $task->id) }}" method="post" class="form-input d-flex">
                        @method('put')
                        @csrf
                        @include('tasks._form', ['submit' => 'Update'])
                    </form>
                    @error('list')
                        <span class="invalid-feedback d-block">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
            </div>
        </div>
    </div>



</x-app-layout>
