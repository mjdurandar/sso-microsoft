<div class="card offset-3 col-6">
  <div class="card-header">
    Login
  </div>
  <div class="card-body">
    <form wire:submit="loginUser">
    <div class="mb-3">
        <label class="form-label">Email address</label>
        <input wire:model="email" type="email" class="form-control">
        <div>
            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
    </div>
    <div class="mb-3">
        <label class="form-label">Password</label>
        <input wire:model="password" type="password" class="form-control">
        <div>
            @error('password') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <div class="mt-4">
        <p>Dont have an Account yet? <a wire:navigate href="/register">Click here...</a></p>
    </div>
    <div>
      <a href="{{ url('/auth/microsoft') }}">
        <button class="btn btn-secondary">Login with Microsoft</button>
      </a>
    </div>
  </div>
</div>