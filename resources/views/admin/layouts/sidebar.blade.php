<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard">
        <div class="sidebar-brand-icon">
          <!--<img src="{{asset('admin/img/logo/logo2.png')}}">-->
        </div>
        <div class="sidebar-brand-text mx-3">Admin</div>
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item active">
        <a class="nav-link" href="{{url('auth/dashboard')}}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Features
      </div>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap"
          aria-expanded="true" aria-controls="collapseBootstrap">
          <i class="far fa-fw fa-window-maximize"></i>
          <span>Category</span>
        </a>
        <div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Category</h6>
            <a class="collapse-item" href="{{route('category.index')}}">View</a>
            <a class="collapse-item" href="{{route('category.create')}}">Create</a>
          </div>
        </div>
      </li>
    
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseForm" aria-expanded="true"
          aria-controls="collapseForm">
          <i class="fab fa-fw fa-wpforms"></i>
          <span>Subcategory</span>
        </a>
        <div id="collapseForm" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Subcategory</h6>
            <a class="collapse-item" href="{{route('subcategory.index')}}">View</a>
            <a class="collapse-item" href="{{route('subcategory.create')}}">Create</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable" aria-expanded="true"
          aria-controls="collapseTable">
          <i class="fas fa-fw fa-table"></i>
          <span>Property</span>
        </a>
        <div id="collapseTable" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Property</h6>
            <a class="collapse-item" href="{{route('property.index')}}">View</a>
            <a class="collapse-item" href="{{route('property.create')}}">Create</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSlider" aria-expanded="true"
          aria-controls="collapseSlider">
          <i class="fas fa-fw fa-table"></i>
          <span>Slider</span>
        </a>
        <div id="collapseSlider" class="collapse" aria-labelledby="headingSlidere" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Slider</h6>
            <a class="collapse-item" href="{{route('slider.index')}}">View</a>
            <a class="collapse-item" href="{{route('slider.create')}}">Create</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTag" aria-expanded="true"
          aria-controls="collapseTag">
          <i class="fas fa-fw fa-table"></i>
          <span>Tag</span>
        </a>
        <div id="collapseTag" class="collapse" aria-labelledby="headingTag" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Tags</h6>
            <a class="collapse-item" href="{{route('tag.index')}}">View</a>
            <a class="collapse-item" href="{{route('tag.create')}}">Create</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseService" aria-expanded="true"
          aria-controls="collapseService">
          <i class="fas fa-fw fa-table"></i>
          <span>Service</span>
        </a>
        <div id="collapseService" class="collapse" aria-labelledby="headingTag" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Service</h6>
            <a class="collapse-item" href="{{route('service.index')}}">View</a>
            <a class="collapse-item" href="{{route('service.create')}}">Create</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBlog" aria-expanded="true"
          aria-controls="collapseBlog">
          <i class="fas fa-fw fa-table"></i>
          <span>Blog</span>
        </a>
        <div id="collapseBlog" class="collapse" aria-labelledby="headingTag" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Blog</h6>
            <a class="collapse-item" href="{{route('blogpost.index')}}">View</a>
            <a class="collapse-item" href="{{route('blogpost.create')}}">Create</a>
          </div>
        </div>
      </li>
      
      
     
      
     
      
      <hr class="sidebar-divider">
     
     <li class="nav-item">
      
        
<a class="dropdown-item" href="{{ route('logout') }}"
                                      onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                            <i class="fas fa-sign-out-alt"></i>
Logout

                                   </a>

                                   <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                       @csrf
                                   </form>


      
     </li>
     <hr class="sidebar-divider">
      <div class="version" id="version-ruangadmin"></div>
    </ul>
    
    
        