<li class="nav-item">
    <a href="{{ route('klantens.index') }}" class="nav-link {{ Request::is('klantens*') ? 'active' : '' }}">
    <i class="nav-icon fas fa-users"></i>
        <p>Klanten</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('leveranciers.index') }}" class="nav-link {{ Request::is('leveranciers*') ? 'active' : '' }}">
    <i class="nav-icon fas  fa-building"></i>
        <p>Leveranciers</p>
    </a>
</li>

@can('role',['admin'])
<li class="nav-item">
    <a href="{{ route('users.index') }}" class="nav-link {{ Request::is('users*') ? 'active' : '' }}">
    <i class="nav-icon fas fa-user"></i>
      <p>Users</p>
    </a>
</li>
@endcan
