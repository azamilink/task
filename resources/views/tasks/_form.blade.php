<input type="text" name="list" value="{{ old('list') ?? $task->list }}" placeholder="The name pf the task" class="form-control me-2 @error('list') is-invalid @enderror">
<button type="submit" class="btn btn-info">{{ $submit }}</button>
