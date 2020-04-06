<nav role="navigation" class="navbar navbar-expand-md navbar-dark bg-dark">
    <a href="" class="navbar-brand">
        <img src="{{$publicUrl}}images/logo.png" width="25" height="25" />
            php-base-info-site</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse" id="navbarNav">
        <div class="mr-auto navbar-nav">
            <a href="" data-rb-event-key="" class="nav-link">Home</a>
            <a href="about{{$extFile}}" data-rb-event-key="about{{$extFile}}" class="nav-link">About Us</a>
            <a href="contact{{$extFile}}" data-rb-event-key="contact{{$extFile}}" class="nav-link">Contact Us</a>
        </div>
        <form target="_blank" method="get" action="http://www.google.com/search" class="form-inline">
            <input type="hidden" name="sitesearch" value="magicianred.altervista.org">
            <div class="input-group">
                <input name="q" placeholder="Search" type="text" class="form-control">
                <div class="input-group-append">
                    <button type="submit" class="btn btn-outline-secondary">
                        <small>Search on Google</small>
                    </button>
                </div>
            </div>
        </form>
    </div>
</nav>