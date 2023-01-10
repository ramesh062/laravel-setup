 <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav">
            @if(adminAccessRoute(config('permissions.dashboard.access.view')))
                <a class="nav-link" href="{{route("admin.dashboard")}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
            @endif
            @if(adminAccessRoute(config('permissions.role.access.view')))
                <a class="nav-link" href="{{route("admin.roles.index")}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                    Roles
                </a>
            @endif
            @if(adminAccessRoute(config('permissions.admin-user.access.view')))
                <a class="nav-link" href="{{route("admin.users.index")}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                    Users
                </a>
            @endif
            @if(adminAccessRoute(config('permissions.category.access.view')))
                <a class="nav-link" href="{{route("admin.categories.index")}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                    Categories
                </a>
            @endif
        </div>
    </div>
</nav>
