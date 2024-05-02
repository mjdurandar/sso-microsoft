<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Livewire</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a wire:navigate href='/customers' class="nav-link active" aria-current="page" href="#">Customer</a>
        </li>
        @guest
            <li class="nav-item">
                <a class="nav-link" wire:navigate href="/login">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" wire:navigate href="/register">Register</a>
            </li>
        @endguest
      </ul>

      <ul class="navbar-nav ml-auto mb-2 mb-lg-0"> <!-- Added ml-auto class for right alignment -->
        @auth 
            <!-- <li class="nav-item">
            <a wire:navigate href='/customers' class="nav-link active" aria-current="page" href="#">Customer</a>
            </li> -->
            <li class="nav-item">
                <button class="btn btn-secondary btn-md" wire:click='logout'>Logout</button>
            </li>
        @endauth
      </ul>
    </div>
  </div>
</nav>
