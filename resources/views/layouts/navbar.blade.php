<!-- Sidebar  -->
<nav id="sidebar" class="">
    <div class="sidebar-header">
        <a href="{{ url('/') }}">
        <h3>{{ config('app.name', 'Reciclar') }}</h3>
        <strong>R</strong>
        </a>
    </div>

    <ul class="list-unstyled components">
        <li class="{{ Request::is('recyclers', '*') ? 'active' : ''}}">
        <a href="{{route('recyclers.index')}}">
                <i class="fas fa-users"></i>
                Mis recicladores
            </a>
        </li>
        <li>
            <a href="/mapa">
                <i class="fas fa-street-view"></i>
                Comunidad
            </a>
            <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <i class="fas fa-chart-line"></i>
                Indicadores Ambientales
            </a>
            <ul class="collapse list-unstyled" id="pageSubmenu">
                <li>
                    <a href="/indicadores">Emisiones</a>
                </li>
                <li>
                    <a href="/indicadores/nuevo">Nueva Medición</a>
                </li>
                <li>
                    <a href="/indicadores/historial">Historial</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#">
                <i class="fas fa-comment"></i>
                Notificaciones
            </a>
        </li>
        <li>
            <a href="#">
                <i class="fas fa-cogs"></i>
                Configuracion
            </a>
        </li>
        <li>
            <a href="#">
                <i class="fas fa-phone"></i>
                Contacto
            </a>
        </li>
    </ul>
</nav>
<!--End Sidebar-->
