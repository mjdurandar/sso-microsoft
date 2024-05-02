<div class="card offset-3 col-6">
  <div class="card-header">
    Edit Customer
  </div>
  <div class="card-body">
    <form wire:submit="updateCustomer">
    <div class="mb-3">
        <label class="form-label">Name</label>
        <input wire:model="name" type="name" class="form-control" id="name">
        <div>
            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
    </div>
    <div class="mb-3">
        <label class="form-label">Email</label>
        <input wire:model="email" type="email" class="form-control" id="email">
        <div>
            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
    </div>
    <div class="mb-3">
        <label class="form-label">Phone</label>
        <input wire:model="phone" type="phone" class="form-control" id="phone">
        <div>
            @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
    </div>
        <button wire:navigate href="/customers" type="button" class="btn btn-secondary">Back</button>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>