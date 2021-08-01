@if (Auth::user()->role_id>2)
<li class="nav-item">
    <a href="{{ route('subscriptions.index') }}"
       class="nav-link {{ Request::is('subscriptions*') ? 'active' : '' }}">
        <p> Enrolled Courses</p>
    </a>
</li>
@endif


@if (Auth::user()->role_id==3)
<li class="nav-item">
    <a href="{{ route('courses.index') }}"
       class="nav-link {{ Request::is('courses*') ? 'active' : '' }}">
        <p>My Courses</p>
    </a>
</li>
@endif


@if (Auth::user()->role_id<3)

<li class="nav-item">
    <a href="{{ route('categories.index') }}"
       class="nav-link {{ Request::is('categories*') ? 'active' : '' }}">
        <p>All Categories</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('courses.index') }}"
       class="nav-link {{ Request::is('courses*') ? 'active' : '' }}">
        <p>All Courses</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('users.index') }}"
       class="nav-link {{ Request::is('users*') ? 'active' : '' }}">
        <p>Users</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('roles.index') }}"
       class="nav-link {{ Request::is('roles*') ? 'active' : '' }}">
        <p>Roles</p>
    </a>
</li>

@endif




