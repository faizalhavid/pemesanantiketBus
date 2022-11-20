

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar10">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbar10">
            <ul class="navbar-nav nav-fill w-100">
                <li class="nav-item">
                    <a class="nav-link {{ ($title == "Dashboard admin") ? 'active' : '' }}" href="/dashboard">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title == "Data Pemesan" || $title == "Tambah Data Pemesan") ? 'active' : '' }}" href="/pemesan">Pemesan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title == "Data Terminal" || $title == "Tambah Data Terminal") ? 'active' : '' }}" href="/terminal">Terminal</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title == "Data Bus"  || $title == "Tambah Data Bus") ? 'active' : '' }}" href="/bus">Bus</a>
                </li>
                <li class="nav-item mt-2 " style="color: #ffff">
                    <p class="mx-2" style="display: inline">{{ "Selamat Datang"." ".Auth::user()->name  }}</p> | <a href="/logout" class="badge badge-danger mx-2">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>