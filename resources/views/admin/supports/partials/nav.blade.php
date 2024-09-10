<nav class="navbar navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{ route('supports.index') }}">
            <img src="https://www.tradeupgroup.com/wp-content/uploads/2021/12/tradeup-300x93-1.png" alt="TradeUp"
                width="100" height="40">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar"
            aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar"
            aria-labelledby="offcanvasDarkNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">TradeUp Groupp</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="container my-5">
                    <!-- Formulário de Pesquisa -->
                    <form action="{{ route('supports.index') }}" method="get" class="d-flex mb-4" role="search">
                        <!-- Input de Pesquisa -->
                        <input name="filter" value="{{ $filters['filter'] ?? '' }}" class="form-control me-2"
                            type="text" placeholder="Procurar Chamado" aria-label="Search">
                        <!-- Botão de Pesquisa -->
                        <button class="btn btn-outline-success" type="submit">Pesquisar</button>
                    </form>

                    <!-- Botão Cancelar -->
                    <div class="d-flex">
                        <a href="{{ route('supports.index') }}" class="btn btn-secondary">Cancelar</a>
                    </div>
                </div>


            </div>
        </div>
    </div>
</nav>
