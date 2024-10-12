<ul class="account-nav">
    <li><a href="{{ route('user.index') }}" class="menu-link menu-link_us-s">Dashboard</a></li>
    <li><a href="{{ route('user.orders') }}" class="menu-link menu-link_us-s">Pedidos</a></li>
    <li><a href="account-address.html" class="menu-link menu-link_us-s">Direcciones</a></li>
    <li><a href="account-details.html" class="menu-link menu-link_us-s">Detalles de cuenta</a></li>
    <li><a href="account-wishlist.html" class="menu-link menu-link_us-s">Favoritos</a></li>
    <li>
        <form action="{{ route('logout') }}" method="POST" id="logout-form">
            @csrf
            <a href="{{ route('logout') }}" class="menu-link menu-link_us-s" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar sesión</a>
        </form>
    </li>
</ul>