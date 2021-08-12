@extends(themeLayout('layouts.master'))

@section('template_title')
    Create Store
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Store</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.stores.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include(theme('store.form'))

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
