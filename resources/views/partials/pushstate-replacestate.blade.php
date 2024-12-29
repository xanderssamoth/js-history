
        <div class="mb-4">
            <div class="px-5 text-center bg-body-tertiary">
                <div class="container py-4">
                    <h1 class="display-1"><i class="bi bi-3-circle"></i></h1>
                    <h1 class="text-body-emphasis">Exploring the History <code>pushState()</code> and <code>replaceState()</code> Methods</h1>
                    <p class="col-lg-8 lead mx-auto my-4">
                        The <code>replaceState()</code> method of the History interface modifies the current history entry, replacing it with the state object and URL passed in the method parameters.
                    </p>
                    <a href="{{ route('home') }}" class="btn btn-lg btn-light shadow-0">Back home</a>
                </div>
            </div>
        </div>

        <div class="container-lg container-fluid mb-4">
            <div class="row">
                <div class="col-12 text-center">
                    <p role="button" id="l1" class="mb-4">Trigger One</p>
                    <p class="mb-4"><a role="button" id="l2">Trigger Two</a></p>
                    <p class="mb-4"><button id="l3" class="btn btn-lg btn-primary shadow-0 text-capitalize">Trigger Three</button></p>
                    <h3 id="result" class="h3"></h3>
                </div>
            </div>
        </div>
