<!-- Sidebar  -->
<nav id="sidebar" class="">
    <div class="sidebar-header">
        <a href="{{ url('/home') }}">
        <h3>Impacta</h3>
        <strong>I</strong>
        </a>
    </div>

    <ul class="list-unstyled components">
        <li class="{{ Request::is('recyclers') ? 'active' : ''}}">
        <a href="{{route('recyclers.index')}}">
                <i class="fas fa-users"></i>
                Mis recicladores
            </a>
        </li>
        <li>
            <a href="/comunidad">
                <i class="fas fa-street-view"></i>
                Comunidad
            </a>
            <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <i class="fas fa-chart-line"></i>
                Indicadores Ambientales
            </a>
            <ul class="collapse list-unstyled" id="pageSubmenu">
                <li>
                    <a href="{{ url('/mediciones/emisiones') }}">Emisiones</a>
                </li>
                <li>
                    <a href="{{ url('/mediciones/nueva') }}">Nueva Medición</a>
                </li>
                <li>
                    <a href="{{ url('/mediciones/historial') }}">Historial</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="{{ url('/notificaciones') }}">
                <i class="fas fa-comment"></i>
                Notificaciones
            </a>
        </li>
        <li>
            <a href="{{ url('/configuracion') }}">
                <i class="fas fa-cogs"></i>
                Configuracion
            </a>
        </li>
        <li>
            <a href="{{ url('/contacto') }}">
                <i class="fas fa-phone"></i>
                Contacto
            </a>
        </li>
    </ul>
</nav>
<!--End Sidebar-->
