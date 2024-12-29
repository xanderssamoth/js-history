
        <div class="mb-4">
            <div class="px-5 text-center bg-body-tertiary">
                <div class="container py-4">
                    <h1 class="display-1"><i class="bi bi-4-circle"></i></h1>
                    <h1 class="text-body-emphasis">Practical Navigation With <code>popstate</code> And <code>hashchange</code> Events</h1>
                    <p class="col-lg-8 lead mx-auto my-4">
                        The <code>hashchange</code> event is fired when the fragment identifier of the URL has changed (the part of the URL beginning with and following the # symbol).
                    </p>
                    <a href="{{ route('home') }}" class="btn btn-lg btn-light shadow-0">Back home</a>
                </div>
            </div>
        </div>

        <div class="container-lg container-fluid mb-4">
            <div class="row mb-4">
                <div class="col-lg-8 col-sm-11 col-12 mx-auto">
                    <nav class="navbar navbar-expand-sm bg-black navbar-dark mb-4">
                        <div class="container-fluid">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                                <i class="bi bi-list"></i>
                            </button>
            
                            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                                <ul class="navbar-nav me-auto ps-sm-5">
                                    <li class="nav-item mx-sm-5" title="Earth" data-bs-toggle="tooltip">
                                        <a class="nav-link" data-name="James Holden" data-home="Earth" href="#">James Holden</a>
                                    </li>
                                    <li class="nav-item mx-sm-5" title="Mars" data-bs-toggle="tooltip">
                                        <a class="nav-link" data-name="Bobbie Draper" data-home="Mars" href="#">Bobbie Draper</a>
                                    </li>
                                    <li class="nav-item" title="Belt" data-bs-toggle="tooltip">
                                        <a class="nav-link" data-name="Josephus Miller" data-home="Belt" href="#">Josephus Miller</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>

                    <h4 id="result" class="h4"></h4>
                </div>
            </div>

            <main class="all">
                <div class="row g-3">
                    <div class="col-lg-2 col-sm-3 box earth">
                        <div class="card card-body d-flex justify-content-center align-items-center h-100 bg-primary">Earth</div>
                    </div>
                    <div class="col-lg-2 col-sm-3 box mars">
                        <div class="card card-body d-flex justify-content-center align-items-center h-100 bg-warning text-dark">Mars</div>
                    </div>
                    <div class="col-lg-2 col-sm-3 box belt">
                        <div class="card card-body d-flex justify-content-center align-items-center h-100 bg-secondary text-dark">Belt</div>
                    </div>
                    <div class="col-lg-2 col-sm-3 box mars">
                        <div class="card card-body d-flex justify-content-center align-items-center h-100 bg-warning text-dark">Mars</div>
                    </div>
                    <div class="col-lg-2 col-sm-3 box earth">
                        <div class="card card-body d-flex justify-content-center align-items-center h-100 bg-primary">Earth</div>
                    </div>
                    <div class="col-lg-2 col-sm-3 box belt">
                        <div class="card card-body d-flex justify-content-center align-items-center h-100 bg-secondary text-dark">Belt</div>
                    </div>
                    <div class="col-lg-2 col-sm-3 box mars">
                        <div class="card card-body d-flex justify-content-center align-items-center h-100 bg-warning text-dark">Mars</div>
                    </div>
                    <div class="col-lg-2 col-sm-3 box earth">
                        <div class="card card-body d-flex justify-content-center align-items-center h-100 bg-primary">Earth</div>
                    </div>
                    <div class="col-lg-2 col-sm-3 box mars">
                        <div class="card card-body d-flex justify-content-center align-items-center h-100 bg-warning text-dark">Mars</div>
                    </div>
                    <div class="col-lg-2 col-sm-3 box earth">
                        <div class="card card-body d-flex justify-content-center align-items-center h-100 bg-primary">Earth</div>
                    </div>
                    <div class="col-lg-2 col-sm-3 box belt">
                        <div class="card card-body d-flex justify-content-center align-items-center h-100 bg-secondary text-dark">Belt</div>
                    </div>
                    <div class="col-lg-2 col-sm-3 box earth">
                        <div class="card card-body d-flex justify-content-center align-items-center h-100 bg-primary">Earth</div>
                    </div>
                    <div class="col-lg-2 col-sm-3 box belt">
                        <div class="card card-body d-flex justify-content-center align-items-center h-100 bg-secondary text-dark">Belt</div>
                    </div>
                    <div class="col-lg-2 col-sm-3 box mars">
                        <div class="card card-body d-flex justify-content-center align-items-center h-100 bg-warning text-dark">Mars</div>
                    </div>
                    <div class="col-lg-2 col-sm-3 box earth">
                        <div class="card card-body d-flex justify-content-center align-items-center h-100 bg-primary">Earth</div>
                    </div>
                </div>
            </main>
        </div>
