<main>
    <div class="container-fluid px-4">
        <!-- content header -->
        <div class="content-header">
            <h1 class="mt-4">@yield('header')</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </div>
        <!-- /.content header -->

        <!-- main content -->
        <div class="content">
            <div class="row">
                @yield('content')
            </div>
        </div>
    </div>
</main>