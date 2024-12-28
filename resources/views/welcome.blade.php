@extends('layouts.app', ['page_title' => $title])

@section('app-content')

        <div class="my-4 text-center">
            <div class="bg-image">
                <img src="{{ asset('assets/img/favicon/android-chrome-192x192.png') }}" alt="logo" width="140">
                <div class="mask"></div>
            </div>
            <h1 class="h1 mt-3">JavaScript History API</h1>
        </div>

        <div class="container-lg container-fluid pb-5">
            <div class="row">
                <div class="col-lg-8 col-sm-10 mx-auto">
                    <div class="card">
                        <div class="list-group">
                            <a href="{{ route('exercise', ['entity' => 'pushstate-popstate']) }}" class="list-group-item list-group-item-action py-4">
                                <h4 class="h4 text-secondary"><i class="bi bi-1-circle fs-2 align-middle"></i> pushState & popstate</h4>
                                <p class="card-text text-muted">The <code>pushState()</code> method of the History interface adds an entry to the browser's session history stack; and the <code>popstate</code> event of the Window interface is fired when the active history entry changes while the user navigates the session history.</p>
                            </a>
                            <a href="{{ route('exercise', ['entity' => 'using-api']) }}" class="list-group-item list-group-item-action py-4">
                                <h4 class="h4 text-secondary"><i class="bi bi-2-circle fs-2 align-middle"></i> Using the History API</h4>
                                <p class="card-text text-muted">The History API provides access to the browser's session history (not to be confused with WebExtensions history) through the history global object.</p>
                            </a>
                            <a href="{{ route('exercise', ['entity' => 'pushstate-replacestate']) }}" class="list-group-item list-group-item-action py-4">
                                <h4 class="h4 text-secondary"><i class="bi bi-3-circle fs-2 align-middle"></i> Exploring the History pushState and replaceState Methods</h4>
                                <p class="card-text text-muted">The <code>replaceState()</code> method of the History interface modifies the current history entry, replacing it with the state object and URL passed in the method parameters.</p>
                            </a>
                            <a href="{{ route('exercise', ['entity' => 'popstate-hashchange']) }}" class="list-group-item list-group-item-action py-4">
                                <h4 class="h4 text-secondary"><i class="bi bi-4-circle fs-2 align-middle"></i> Practical Navigation With popstate And hashchange Events</h4>
                                <p class="card-text text-muted">The <code>hashchange</code> event is fired when the fragment identifier of the URL has changed (the part of the URL beginning with and following the # symbol).</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection