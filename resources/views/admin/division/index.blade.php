@extends('layouts.admin')

@section('template_title')
    {{ trans('admin.divisions.pages.index.title') }}
@endsection

@section('template_description')
    {{ trans('admin.divisions.pages.index.desc') }}
@endsection

@section('header_title')
    {{ trans('admin.divisions.pages.index.header') }}
@endsection

@push('head')
@endpush

@section('content')

<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('createdivision') }}" class="btn btn-sm pull-right" data-toggle="tooltip" data-placement="left" title="{!! trans('tooltips.division.create') !!}">
                        <i class="nc-icon nc-simple-add" aria-hidden="true"></i>
                        <span class="hidden-xs">
                           Create Division
                        </span>
                    </a>
                    <h4 class="card-title">
                        Divisions
                    </h4>
                    <span class="badge badge-pill badge-primary pull-left">

                    </span>
                </div>

                <hr>
                @include('admin.partials.messages')
                @include('admin.partials.loading-spinner-1')

                <div class="card-body" id="divisions_table_card" style="display: none;">
                    <div class="table-responsive">
                        <table id="divisions_table" class="table table-sm">
                            <thead class="text-primary">
                                <th>
                                   Id
                                </th>
                                <th>
                                 Name
                                </th>
                                <th>
                                  Slung
                                </th>

                                <th data-sortable="false" class="no-search no-sort">
                                   Actions
                                </th>
                                <th data-sortable="false" class="no-sort no-search"></th>
                            </thead>
                            <tbody>
                                @foreach ($divisions as $division)
                                    <tr>
                                        <td class="data-style">
                                            {{ $division->id }}
                                        </td>
                                        <td>
                                            {{ $division->name }}
                                        </td>
                                        <td>
                                            {{ $division->slug }}
                                        </td>


                                        <td>
                                            <a href="/admin/divisions/{{ $division->id }}/edit" class="btn btn-sm btn-info" data-toggle="tooltip" data-placement="left" title="{!! trans('tooltips.division.edit') !!}">
                                                <i class="fa fa-edit fa-fw" aria-hidden="true"></i>
                                               Edit Division
                                            </a>
                                        </td>
                                        <td>
                                            <span data-toggle="tooltip" data-placement="top" title="{!! trans('tooltips.division.delete') !!}">
                                                <button type="button" class="btn btn-danger btn-sm btn-block delete-division-trigger" data-toggle="modal" data-target="#modal_delete_division" data-divisionid="{{ $division->id }}">
                                                    <i class="fa fa-trash-o fa-fw" aria-hidden="true"></i>
                                                    <span class="hidden-xs hidden-sm hidden-md">
                                                       Delete
                                                    </span>
                                                </button>
                                            </span>
                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="clearfix mb-2"></div>

                </div>
            </div>
        </div>
    </div>
</div>

@include('admin.modals.delete-division-modal-form', ['divisionId' => null])

@endsection

@push('scripts')
    <script>
        $(function() {
            $('#divisions_table').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": true,
                "lengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
                "order": [[ 0, "desc" ]],
                'aoColumnDefs': [{
                    'bSortable': false,
                    'searchable': false,
                    'aTargets': ['no-search'],
                    'bTargets': ['no-sort']
                }]
            });

            $('.delete-division-trigger').click(function(event) {
                var divisionId = $(this).data("divisionid");
                $('#modal_delete_division').on('show.bs.modal', function (e) {
                    document.delete_division_form.action = "{{ url('/') }}" + "/admin/divisions/" + divisionId;
                });
            });

            $('.loading').hide();
            $('#divisions_table_card').fadeIn(100);
        });
    </script>
@endpush
