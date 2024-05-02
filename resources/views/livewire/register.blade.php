<div class="card offset-3 col-6">
  <div class="card-header">
    Register
  </div>
  <div class="card-body">
    <form wire:submit="storeUser">
    <div class="mb-3">
        <label class="form-label">Name</label>
        <input wire:model="name" type="name" class="form-control">
        <div>
            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
    </div>
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
    <div class="mb-3">
        <label class="form-label">Confirm Password</label>
        <input wire:model="password_confirmation" type="password" class="form-control">
    </div>
    <div>
        @error('password_confirmation') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <div class="mt-4">
        <p>Already have an Account? <a wire:navigate href="/login">Click here...</a></p>
    </div>
  </div>
</div>