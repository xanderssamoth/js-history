
        <div class="mb-4">
            <div class="px-5 text-center bg-body-tertiary">
                <div class="container py-4">
                    <h1 class="display-1"><i class="bi bi-5-circle"></i></h1>
                    <h1 class="text-body-emphasis">History API Basics with Ajax</h1>
                    <p class="col-lg-8 lead mx-auto my-4">
                        The History API enables a website to interact with the browser's session history: that is, the list of pages that the user has visited in a given window.
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
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggler02" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                                <i class="bi bi-list"></i>
                            </button>
            
                            <div class="collapse navbar-collapse" id="navbarToggler02">
                                <ul class="navbar-nav ms-sm-5 ps-sm-5">
                                    <li class="nav-item px-sm-5 mx-sm-5" title="Dogs" data-bs-toggle="tooltip">
                                        <a class="nav-link ps-sm-4" href="{{ route('exercise', ['entity' => 'history-basics-ajax', 'content' => 'dog']) }}">Dogs</a>
                                    </li>
                                    <li class="nav-item px-sm-5 mx-sm-5" title="Cats" data-bs-toggle="tooltip">
                                        <a class="nav-link ps-sm-4" href="{{ route('exercise', ['entity' => 'history-basics-ajax', 'content' => 'cat']) }}">Cats</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>

            <main>
                <div id="content" class="row">
@if (request()->has('content'))
    @if (request()->get('content') == 'cat')
        @include('partials.cat')
    @endif

    @if (request()->get('content') == 'dog')
        @include('partials.dog')
    @endif
@else
                    <div class="col-lg-8 col-sm-11 col-12 mx-auto">
                        <div class="card card-body">
                            <h3 class="card-title">Dog & Cat</h3>
                            <p class="card-text">
                                Diva, a famous social media star cat, and Chichi, a street dog, lose their respective owners. Then begins a crazy journey between Montreal and New York with, on one side, the humans who have lost track of their animals and, on the other, the animals left to fend for themselves to find their owners.
                            </p>
                        </div>
                    </div>

@endif
                </div>
            </main>
        </div>
