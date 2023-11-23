<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3" id="nav-bar">
            <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px;">
                <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
                <span class="fs-4">Sidebar</span>
                </a>
                <hr>
                <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="#" class="nav-link active" aria-current="page">
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
                    Home
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link text-white">
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
                    Dashboard
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link text-white">
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
                    Orders
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link text-white">
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
                    Products
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link text-white">
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
                    Customers
                    </a>
                </li>
                </ul>
                <hr>
                <div class="dropdown">
                <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1" style="">
                    <li><a class="dropdown-item" href="#">New project...</a></li>
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Sign out</a></li>
                </ul>
                </div>
            </div>
            </div>
            <!-- Content -->
            <div class="col-md-9" id="content">
                <!-- Contenido del país seleccionado -->
                <div id="country-info">
                    <h1>Selecciona un país</h1>
                    <p>Selecciona un país del menú lateral para ver información.</p>
                </div>
            </div>
        </div>

        <!--'España': {
            background: 'spain.jpg',
            title: 'España',
            text: 'España, oficialmente el Reino de España, es un país miembro de la Unión Europea, ubicado en el suroeste de Europa con algunos de sus territorios en Asia y el norte de África.'
        },
        'Francia': {
            background: 'france.jpg',
            title: 'Francia',
            text: 'Francia es un país soberano, miembro de la Unión Europea, constituido en Estado social y democrático de Derecho y cuya forma política es la república. Su territorio metropolitano se encuentra en Europa Occidental.'
        },
        'Alemania': {
            background: 'germany.jpg',
            title: 'Alemania',
            text: 'Alemania, oficialmente República Federal de Alemania, es un país soberano centroeuropeo y miembro de la Unión Europea. Su capital y ciudad más poblada es Berlín.'
        },
        'Italia': {
            background: 'italy.jpg',
            title: 'Italia',
            text: 'Italia es un país ubicado en el sur de Europa y que forma parte de la Unión Europea. Su territorio lo conforma principalmente la península itálica y dos grandes islas en el mar Mediterráneo: Sicilia y Cerdeña.'
        },
        'Reino Unido': {
            background: 'uk.jpg',
            title: 'Reino Unido',
            text: 'El Reino Unido de Gran Bretaña e Irlanda del Norte, comúnmente conocido como Reino Unido (RU) o Gran Bretaña, es un país soberano e insular ubicado al noroeste de la Europa continental.'
        },
        'Portugal': {
            background: 'portugal.jpg',
            title: 'Portugal',
            text: 'Portugal, oficialmente la República Portuguesa, es un país soberano miembro de la Unión Europea, constituido como un estado de derecho democrático.'
        },
        'Países Bajos': {
            background: 'netherlands.jpg',
            title: 'Países Bajos',
            text: 'Los Países Bajos, llamados también Holanda, son un país constituido por doce provincias en Europa del Norte y tres en el Caribe.'
        },
        'Suecia': {
            background: 'sweden.jpg',
            title: 'Suecia',
            text: 'Suecia es un país escandinavo de Europa del Norte. Limita al norte con Noruega y Finlandia, al este con Finlandia y el mar Báltico, al sur con el mar Báltico, el estrecho de Øresund, el mar del Norte y al oeste con Noruega.'
        },
        'Suiza': {
            background: 'switzerland.jpg',
            title: 'Suiza',
            text: 'Suiza, oficialmente Confederación Suiza, es un país sin salida al mar ubicado en Europa Central y que cuenta con una población de más de 8 millones de personas.'
        },
        'Noruega': {
            background: 'norway.jpg',
            title: 'Noruega',
            text: 'Noruega es un país de Europa septentrional que forma parte de la península escandinava. Limita al noreste con Finlandia, al este con Suecia, al sur con el estrecho de Skagerrak, al oeste con el mar del Norte y al norte con el mar de Noruega.'
        }
    };
-->