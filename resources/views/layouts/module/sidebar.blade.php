<nav class="sidebar-nav">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="nav-icon icon-speedometer"></i> Dashboard
            </a>
        </li>

        <li class="nav-title">ALL MENU </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('about.index')}}">
                <i class="nav-icon icon-drop"></i> About
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{route('message.index')}}">
                <i class="fa fa-envelope nav-icon"></i> Mailbox
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('services.index')}}">
                <i class="fa fa-user-plus nav-icon"></i> Services
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('skills.index')}}">
                <i class="fa fa-server nav-icon"></i> Skills
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('education.index')}}">
                <i class="fa fa-check-circle-o nav-icon"></i> Education
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('experience.index')}}">
                <i class="fa fa-plus-circle nav-icon"></i> Experience
            </a>
        </li>
        <li class="nav-item nav-dropdown">
            <a class="nav-link nav-dropdown-toggle" href="#">
                <i class="nav-icon icon-settings"></i> Menu Uploads
            </a>
            <ul class="nav-dropdown-items">
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="nav-icon icon-puzzle"></i> Work
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="nav-icon icon-puzzle"></i> Blogs
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('uploads.index')}}">
                        <i class="nav-icon icon-puzzle"></i> CV
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</nav>