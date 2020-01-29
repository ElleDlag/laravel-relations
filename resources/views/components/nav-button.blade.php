<div class="d-flex w-100 flex-nowrap nav-buttons justify-content-between align-items-center">
    <div class="subnav d-flex flex-nowrap">
        <span class='subnav-span d-flex align-items-center'>POSTS</span>
        <a class="btn-primary btn right btn-home oto" href="{{ route('posts.home') }}"><i class="fas fa-home"></i></a>
        <span class='subnav-span d-flex align-items-center'>RAW</span>
        <a class="btn-primary btn right btn-home mtm" href="{{ route('pages.raw') }}"><i class="fas fa-home"></i></a>
    </div>
    <div class="subnav">
        <a class="btn-primary btn right" href="{{ route('posts.create') }}">Aggiungi Nuovo</a>
    </div>
</div>