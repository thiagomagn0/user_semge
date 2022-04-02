<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<style>
  [class*="sidebar-dark-"] .sidebar a{
    color:white;
  }
  </style>

    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
              <a href="#" class="nav-link ">
                <i class="nav-icon fas fa-edit"></i>
                  <p>Gestão de usuários<i class="fas fa-angle-left right"></i></p>
              </a>
              
            
    
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('users.index') }}"
                    class="nav-link {{ Request::is('users*') ? 'active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                      <p>Usuários</p>
                    </a>
                </li>
            
            </ul>
   
              <li class="nav-item">
                    <a href="{{ route('logout') }}" class="nav-link "
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                      <i class="far fa-circle nav-icon"></i>
                        <p>Sair</p>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                  </form>
              </li>
            
    
            
    
    
      
    
          <script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
    
    
    
    
    
    