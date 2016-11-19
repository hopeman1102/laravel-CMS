@extends('webed-core::admin._master')

@section('css')

@endsection

@section('js')

@endsection

@section('js-init')
    <script>
        $(window).load(function () {
            WebEd.DataTableAjax.init($('table.datatables'), {
                dataTableParams: {
                    ajax: {
                        url: '{!! route('admin::blog.posts.index.post') !!}',
                        method: 'POST'
                    },
                    columns: {!! $dataTableHeadings or '[]' !!}
                }
            });
        });
    </script>
@endsection

@section('content')
    <div class="layout-1columns">
        <div class="column main">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">
                        <i class="icon-layers font-dark"></i>
                        Posts
                    </h3>
                    <div class="box-tools">
                        <a class="btn btn-transparent green btn-sm"
                           href="{{ route('admin::blog.posts.create.get') }}">
                            <i class="fa fa-plus"></i> Create
                        </a>
                    </div>
                </div>
                <div class="box-body">
                    @include('webed-core::admin._components.datatables', (isset($dataTableColumns) ? $dataTableColumns : []))
                </div>
            </div>
            @php do_action('meta_boxes', 'main', 'webed-blog.posts.index') @endphp
        </div>
    </div>
@endsection
