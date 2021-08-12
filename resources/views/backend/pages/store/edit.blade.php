@extends(themeLayout('layouts.master'))

@section('template_title')
    Update Store
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Store</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.stores.update', $store->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include(theme('store.form'))

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
