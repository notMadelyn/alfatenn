<li class="nav-item">
  <a class="nav-link {{ $page === 'home' ? 'active' : '' }}" aria-current="page" href="{{ route('customer.home') }}">Home</a>
</li>
<li class="nav-item">
  <a class="nav-link {{ $page === 'carts' ? 'active' : '' }}" href="{{ route('customer.carts') }}">Carts <span class="badge text-bg-secondary">{{ $jumlah}}</a>
</li>
<li class="nav-item">
  <a class="nav-link {{ $page === 'histories' ? 'active' : '' }}" href="#">Histories</a>
</li>
<li class="nav-item">
  <a class="nav-link {{ $page === 'profile' ? 'active' : '' }}" href="#">Profile</a>
</li>