<li class="nav-item">
    <a href="{{ route('klantens.index') }}"
       class="nav-link {{ Request::is('klantens*') ? 'active' : '' }}">
        <p>Klanten</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('leveranciers.index') }}"
       class="nav-link {{ Request::is('leveranciers*') ? 'active' : '' }}">
        <p>Leveranciers</p>
    </a>
</li>

@can('role',['admin'])
<li class="nav-item">
    <a href="{{ route('users.index') }}"
       class="nav-link {{ Request::is('users*') ? 'active' : '' }}">
        <p>Users</p>
    </a>
</li>
@endcan


