<ul class="sidebar-menu">
  <li class="header">
      <i class="fa fa-dashboard">&nbsp;</i>
      <span>
          <strong><b>DASHBOARD</b></strong>
      </span>
  </li>

  <!-- Optionally, you can add icons to the links -->
  <li class="{{ request()->is('admin') ? 'active' : '' }}">
      <a href="{{ route('admin') }}">
          <i class="fa fa-home"></i> <span>HOME</span>
      </a>
  </li>

  @if( checkrights('PUV', auth()->user()->permissions) || checkrights('PRV', auth()->user()->permissions) )
    <li class="treeview {{ request()->is('admin/users*') ? 'active' : '' }} {{ request()->is('admin/roles*') ? 'active' : '' }}">
        <a href="{{ route('admin.users.index') }}"><i class="fa fa-user"></i> <span>USERS</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
            @if( checkrights('PUV', auth()->user()->permissions) )
                <li class="{{ request()->is('admin/users') ? 'active' : '' }}"> <a href="{{ route('admin.users.index') }}"><i class="fa fa-user"></i> List Users</a></li>
            @endif
            @if( checkrights('PRV', auth()->user()->permissions) )
                <li class="{{ request()->is('admin/roles') ? 'active' : '' }}"><a href="{{ route('admin.roles.index') }}"><i class="fa fa-user-secret"></i> List Roles</a></li>
            @endif
{{--            <div class="container">--}}
{{--                <!----> <button type="button" class="btn btn-default btn-sm">Cadastrar Monitorias</button>--}}
{{--            </div>--}}
            <!--Teste modal-->
        </ul>
    </li>
  @endif

    @if( checkrights('PUPV', auth()->user()->permissions) )
        <li class="treeview {{ request()->is('admin/products*') ? 'active' : '' }} {{ request()->is('admin/colores*') ? 'active' : '' }}
        {{ request()->is('admin/categorias*') ? 'active' : '' }} {{ request()->is('admin/specs*') ? 'active' : '' }}">
            <a href="{{ route('admin.products.index') }}"><i class="fa fa-cubes"></i> <span>PRODUCTS</span>
                <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
          </span>
            </a>
            <ul class="treeview-menu">
                <li class="{{ request()->is('admin/products') ? 'active' : '' }}">
                    <a href="{{ route('admin.products.index') }}"><i class="fa fa-cube"></i>List Products</a>
                </li>

                <li class="{{ request()->is('admin/colores') ? 'active' : '' }}">
                    <a href="{{ route('admin.colores.index') }}"><i class="fa fa-paint-brush"></i>List Colores</a>
                </li>

                <li class="{{ request()->is('admin/categorias') ? 'active' : '' }}">
                    <a href="{{ route('admin.categorias.index') }}"><i class="fa fa-navicon"></i>List Category</a>
                </li>
{{--               @if( checkrights('PUSPV', auth()->user()->permissions) )--}}
{{--                    <li class="{{ request()->is('admin/specs') ? 'active' : '' }}">--}}
{{--                        <a href="{{ route('admin.specs.index') }}"><i class="fa fa-crosshairs"></i> List Variant</a>--}}
{{--                    </li>--}}
{{--               @endif--}}
            {{--            <div class="container">--}}
            {{--                <!----> <button type="button" class="btn btn-default btn-sm">Cadastrar Monitorias</button>--}}
            {{--            </div>--}}
            <!--Teste modal-->
            </ul>
        </li>
    @endif

    @if( checkrights('PUORSV', auth()->user()->permissions) )
        <li class="treeview {{ request()->is('admin/orders*') ? 'active' : '' }}">
            <a href="{{ route('orders') }}"><i class="fa fa-tasks"></i> <span>ORDERS</span>
                <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
          </span>
            </a>
            <ul class="treeview-menu">
                <li class="{{ request()->is('admin/orders') ? 'active' : '' }}">
                    <a href="{{ route('orders') }}"><i class="fa fa-reorder"></i>Orders Paid</a>
                </li>

                <li class="{{ request()->is('admin/orders') ? 'active' : '' }}">
                    <a href=""><i class="fa fa-paint-brush"></i>List municipalities</a>
                </li>
            </ul>
        </li>
    @endif

    @if( checkrights('PUPV', auth()->user()->permissions) )
        <li class="treeview {{ request()->is('admin/states*') ? 'active' : '' }} {{ request()->is('admin/municipios*') ? 'active' : '' }}">
            <a href="{{ route('admin.states.index') }}"><i class="fa fa-automobile"></i> <span>DELIVERY</span>
                <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
          </span>
            </a>
            <ul class="treeview-menu">
                <li class="{{ request()->is('admin/states') ? 'active' : '' }}">
                    <a href="{{ route('admin.states.index') }}"><i class="fa fa-cube"></i>List states</a>
                </li>

                <li class="{{ request()->is('admin/municipios') ? 'active' : '' }}">
                    <a href="{{ route('admin.municipios.index') }}"><i class="fa fa-paint-brush"></i>List municipalities</a>
                </li>
            </ul>
        </li>
    @endif

  @if( checkrights('PRRV', auth()->user()->permissions) )
      <li class="treeview {{ request()->is('admin/records*') ? 'active' : '' }}">
          <a href=""><i class="fa fa-book"></i> <span>RECORD AND REPORTS</span>
              <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
              <li class="{{ request()->is('admin/records-users') ? 'active' : '' }}">
                  <a href="{{ route('admin.records') }}"><i class="fa fa-building-o"></i>Record users</a>
              </li>

{{--              <div class="container">--}}
{{--                  <!-- <button type="button" class="btn btn-default btn-sm">Cadastrar Monitorias</button> -->--}}
{{--              </div>--}}
              <!--Teste modal-->

              <!--Teste modal
              <li><a href="#">Meus Ratings</a></li>-->
          </ul>
      </li>
  @endif
  {{--  <li>
      <a href="#"><i class="fa fa-close"></i> <span>SAIR</span></a>
  </li>  --}}
</ul>
