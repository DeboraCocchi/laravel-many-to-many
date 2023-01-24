<aside class="aside-menu h-100 py-5 d-flex flex-column justify-content-between">
    <nav class="h-100 d-flex flex-column justify-content-between">
        <ul class="text-left px-5">

                <li class="mb-4">
                    <a href="{{ route('admin.dashboard') }}"><i class="fa-solid me-2 fa-user"></i> Area Personale</a>
                </li>
                <li class="mb-4">
                    <a href="{{ route('admin.projects.index') }}"><i class="fa-solid me-2 fa-object-group"></i> I tuoi progetti</a>
                </li>
                <li class="mb-4">
                    <a href="{{ route('admin.projects.create') }}"><i class="fa-solid me-2 fa-circle-plus"></i> Aggiungi nuovo progetto</a>
                </li>
                <li class="mb-4">
                    <a href="{{ route('admin.project-list-by-type') }}"><i class="fa-solid me-2 fa-rectangle-list"></i> Tipi/Progetti</a>
                </li>
                <li class="mb-4">
                    <a href="{{ route('admin.types.index') }}"><i class="fa-solid me-2 fa-bookmark"></i> Types</a>
                </li>
                <li class="mb-4">
                    <a href="{{ route('admin.project-list-by-type') }}"><i class="fa-solid me-2 fa-tag"></i> Technologies</a>
                </li>




            </ul>
            <div class="settings-area px-5">
                    <a href="#"><i class="fa-solid fa-gear me-2"></i> Impostazioni</a>

            </div>
    </nav>


</aside>
