<li class="nav-item">
    <a href="{{ route('subscriptions.index') }}" class="nav-link {{ Request::is('subscriptions*') ? 'active' : '' }}">
        <p>ภาพรวม</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('courses.index') }}" class="nav-link {{ Request::is('courses*') ? 'active' : '' }}">
        <p>เนื้อหา</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('categories.index') }}" class="nav-link {{ Request::is('categories*') ? 'active' : '' }}">
        <p>กลุ่ม</p>
    </a>
</li>
