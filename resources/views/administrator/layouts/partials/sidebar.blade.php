

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/administrator">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SaCode <sup>blog</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item{{ (request()->is('administrator/dashboard') || request()->is('/')) ? ' active' : '' }}">
        <a class="nav-link" href="/administrator/dashboard">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard </span></a>
      </li>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item{{ (request()->is('posts') || request()->is('administrator/category') || request()->is('administrator/tags')) ? ' active' : '' }}">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-folder"></i>
          <span>Posts</span>
        </a>
        <div id="collapseTwo" class="collapse{{ (request()->segment(2) == 'posts' || request()->segment(2) == 'category' || request()->segment(2) == 'tags') ? ' show' : '' }}" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item{{ (request()->is('posts') && request()->segment(3) == 'all') ? ' active' : '' }}" href="/administrator/posts/all">All Posts</a>
            <a class="collapse-item{{ (request()->is('posts') && request()->segment(3) == 'new') ? ' active' : '' }}" href="/administrator/posts/new">Add New</a>
            <a class="collapse-item{{ (request()->is('category') && request()->segment(3) == 'all' || request()->segment(2) == 'category' && request()->segment(3) == 'new' ) ? ' active' : '' }}" href="/administrator/category/all">Categories</a>
            <a class="collapse-item{{ (request()->is('administrator/tags') || request()->is('administrator/tags/all') || request()->is('administrator/tags/new')) ? ' active' : '' }}" href="/administrator/tags/all">Tags</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item{{ (request()->segment(2) == 'pages') ? ' active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-folder-open"></i>
          <span>Pages</span>
        </a>
        <div id="collapsePages" class="collapse{{ (request()->segment(2) == 'pages') ? ' show' : '' }}" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item{{ (request()->segment(2) == 'pages' && request()->segment(3) == 'all') ? ' active' : '' }}" href="/administrator/pages/all">All Pages</a>
            <a class="collapse-item{{ (request()->segment(2) == 'pages' && request()->segment(3) == 'new') ? ' active' : '' }}" href="/administrator/pages/new">Add New</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item{{ (request()->segment(2) == 'media') ? ' active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseMedia" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-folder-open"></i>
          <span>Media</span>
        </a>
        <div id="collapseMedia" class="collapse{{ (request()->segment(2) == 'media') ? ' show' : '' }}" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="/administrator/media/all">Library</a>
            <a class="collapse-item" href="/administrator/media/new">Add New</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item{{ (request()->segment(2) == 'appearance') ? ' active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAppearance" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-folder-open"></i>
          <span>Appearance</span>
        </a>
        <div id="collapseAppearance" class="collapse{{ (request()->segment(2) == 'appearance') ? ' show' : '' }}" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="/administrator/appearance/general">Menus</a>
            <a class="collapse-item" href="/administrator/appearance/privacy">Widgets</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item{{ (request()->segment(2) == 'settings') ? ' active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSettings" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-folder-open"></i>
          <span>Settings</span>
        </a>
        <div id="collapseSettings" class="collapse{{ (request()->segment(2) == 'settings') ? ' show' : '' }}" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="/administrator/settings/general">General</a>
            <a class="collapse-item" href="/administrator/settings/privacy">Privacy</a>
            <a class="collapse-item" href="/administrator/settings/permalink">Permalink</a>
          </div>
        </div>
      </li>





      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->
