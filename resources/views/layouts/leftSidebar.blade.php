@php
    $prefix = Request::route()->getPrefix();
    $route = Route::current()->getName();
@endphp
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/dashboard" class="brand-link">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          @if (Auth::user()->role == 'Admin')
          <li class="nav-item has-treeview {{ ($prefix == '/users')?'menu-open':'' }}">
            <a href="" class="nav-link {{ ($prefix == '/users')?'active':'' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                User
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('users.view') }}" class="nav-link {{ ($route == 'users.view')?'active':'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>User List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('users.add') }}" class="nav-link {{ ($route == 'users.add')?'active':'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add New</p>
                </a>
              </li>
            </ul>
          </li>
          @endif 
          <li class="nav-item has-treeview {{ ($prefix == '/profile')?'menu-open':'' }}">
            <a href="" class="nav-link {{ ($prefix == '/profile')?'active':'' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Profile
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('profile.view') }}" class="nav-link {{ ($route == 'profile.view')?'active':'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Profile</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('profile.change.password') }}" class="nav-link {{ ($route == 'profile.change.password')?'active':'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Change Password</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview {{ ($prefix == '/suppliers')?'menu-open':'' }}">
            <a href="" class="nav-link {{ ($prefix == '/suppliers')?'active':'' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Supplier
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('suppliers.view') }}" class="nav-link {{ ($route == 'suppliers.view')?'active':'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Supplier</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('suppliers.add') }}" class="nav-link {{ ($route == 'suppliers.add')?'active':'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Supplier</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview {{ ($prefix == '/customers')?'menu-open':'' }}">
            <a href="" class="nav-link {{ ($prefix == '/customers')?'active':'' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Customers 
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('customers.view') }}" class="nav-link {{ ($route == 'customers.view')?'active':'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Customets</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('customers.add') }}" class="nav-link {{ ($route == 'customers.add')?'active':'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Customers</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview {{ ($prefix == '/unites')?'menu-open':'' }}">
            <a href="" class="nav-link {{ ($prefix == '/unites')?'active':'' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Unites 
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('unites.view') }}" class="nav-link {{ ($route == 'unites.view')?'active':'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Unites</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('unites.add') }}" class="nav-link {{ ($route == 'unites.add')?'active':'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Unites</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview {{ ($prefix == '/categorys')?'menu-open':'' }}">
            <a href="" class="nav-link {{ ($prefix == '/categorys')?'active':'' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Categorys 
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('categorys.view') }}" class="nav-link {{ ($route == 'categorys.view')?'active':'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Categorys</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('categorys.add') }}" class="nav-link {{ ($route == 'categorys.add')?'active':'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Categorys</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview {{ ($prefix == '/products')?'menu-open':'' }}">
            <a href="" class="nav-link {{ ($prefix == '/products')?'active':'' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Products 
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('products.view') }}" class="nav-link {{ ($route == 'products.view')?'active':'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Products</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('products.add') }}" class="nav-link {{ ($route == 'products.add')?'active':'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Products</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview {{ ($prefix == '/purchase')?'menu-open':'' }}">
            <a href="" class="nav-link {{ ($prefix == '/purchase')?'active':'' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Purchase 
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('purchase.add') }}" class="nav-link {{ ($route == 'purchase.add')?'active':'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Purchase</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('purchase.view') }}" class="nav-link {{ ($route == 'purchase.view')?'active':'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Purchase</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('purchase.approve.list') }}" class="nav-link {{ ($route == 'purchase.approve.list')?'active':'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Approve Purchase</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>