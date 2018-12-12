<ul class="sidebar-menu" data-widget="tree">
    <li class="header">Navegación</li>
    <!-- Optionally, you can add icons to the links -->
    <li {{ request()->is('admin') ? 'class=active': ''}}><a href="{{ route('admin') }}"><i class="fa fa-home"></i> <span>Inicio</span></a></li>
    <li><a href="/" target="_blank"><i class="fa fa-link"></i> <span>Web</span></a></li>  
    <li class="treeview">
        <a href="#"><i class="fa fa-bars"></i> <span>Administración</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
          @can('users.index')
          <li><a href="{{ route('users.index') }}" {{ request()->is('users') ? 'class=active': ''}}><i class="fa fa-eye"></i>Usuarios</a></li>
          @endcan
          @can('roless.index')
          <li><a href="{{ route('roles.index') }}"><i class="fa fa-eye"></i>Roles</a></li>
          @endcan
        </ul>
    </li>

    <li class="treeview">
      <a href="#"><i class="fa fa-bars"></i> <span>CMS</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
      </a>
      <ul class="treeview-menu">
          @can('products.index')
        <li><a href="{{ route('products.index') }}"><i class="fa fa-eye"></i>Productos</a></li>
         @endcan
         @can('seccion_unos.index')
        <li><a href="{{ route('seccion_unos.index') }}"><i class="fa fa-eye"></i>Sección uno</a></li>
         @endcan
         @can('categories.index')
         <li><a href="{{ route('categories.index') }}"><i class="fa fa-eye"></i>Categorías</a></li>
          @endcan
        @can('personas.index')
        <li><a href="{{ route('personas.index') }}"><i class="fa fa-eye"></i>Noticias</a></li>
        @endcan
      </ul>
    </li>
  </ul>

