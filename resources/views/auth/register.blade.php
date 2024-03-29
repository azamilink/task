<x-app-layout>
    <div class="row justify-content-center mt-3">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">Create new account</div>
                <div class="card-body">
                    <form action="{{ route('register') }}" method="post">
                        @csrf
                        <div class="mb-4">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" value="{{ old('name') }}" id="name" class="form-control">
                            @error('name')
                                <div class="text-danger mt2">
                                    {{ $message }}
                                </div>
                            @enderror
                            <label for="username" class="form-label">Username</label>
                            <input type="text" name="username" value="{{ old('username') }}" id="username" class="form-control">
                            @error('username')
                                <div class="text-danger mt2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" value="{{ old('email') }}" id="email" class="form-control">
                            @error('email')
                                <div class="text-danger mt2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" id="password" class="form-control">
                            @error('password')
                                <div class="text-danger mt2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
