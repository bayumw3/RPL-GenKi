<div class="sidebar">
    <div class="logo">
        <img src="{{ asset('asst/bahan figma/genki-logo-zip-file/png/logo-no-background.png') }}" alt="Logo">
    </div>
    <ul style="margin-bottom: 30px;">
        <li><a href="{{ url('dashboard') }}"><span class="circum--view-board"></span> Dashboard</a></li>
    </ul>
    <p>PAGES</p>
    <ul>
        <li><a href="{{ url('datalistrik') }}"><span class="uil--table"></span> Data Listrik</a></li>
        <li><a href="{{ url('gallery') }}"><span class="ant-design--picture-outlined"></span> Gallery</a></li>
        <li><a href="{{ url('settings') }}"><span class="ic--outline-settings"></span> Settings</a></li>
        <li><a href="{{ url('logout') }}"><span class="tabler--power"></span> Logout</a></li>
    </ul>
</div>
