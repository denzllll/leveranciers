<li class="nav-item">
    <a href="{{ route('klantens.index') }}"
       class="nav-link {{ Request::is('klantens*') ? 'active' : '' }}">
        <p>Klantens</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('leveranciers.index') }}"
       class="nav-link {{ Request::is('leveranciers*') ? 'active' : '' }}">
        <p>Leveranciers</p>
    </a>
</li>


