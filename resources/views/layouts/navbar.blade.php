<!-- Sidebar  -->
<nav id="sidebar" class="">
    <div class="sidebar-header">
        <a href="{{ url('/home') }}">
        <h3><img src="{{ url('/Reciclapp_V1.png') }}" style="max-width: 100%"></h3>
        <strong><img src="{{ url('/Reciclapp_V1.png') }}" style="max-width: 100%"></strong>
        </a>
    </div>

    <ul class="list-unstyled components">
        <li>
        <a href="{{url('/recicladores')}}">
                <i class="fas fa-street-view"></i>
                Mis recicladores
            </a>
        </li>
        <li>
            <a href="/comunidad">
                <i class="fas fa-users"></i>
                Mi comunidad
            </a>
            <a href="/historial">
                <i class="fas fa-chart-line"></i>
                Indicadores Ambientales
            </a>
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
