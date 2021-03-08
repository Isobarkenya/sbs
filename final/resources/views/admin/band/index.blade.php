@extends('layouts.admin')

@section('template_title')
    {{ trans('admin.bands.pages.index.title') }}
@endsection

@section('template_description')
    {{ trans('admin.bands.pages.index.desc') }}
@endsection

@section('header_title')
    {{ trans('admin.bands.pages.index.header') }}
@endsection

@push('head')
@endpush

@section('content')

<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('createband') }}" class="btn btn-sm pull-right" data-toggle="tooltip" data-placement="left" title="{!! trans('tooltips.band.create') !!}">
                        <i class="nc-icon nc-simple-add" aria-hidden="true"></i>
                        <span class="hidden-xs">
                          Create Band
                        </span>
                    </a>
                    <h4 class="card-title">
                       Bands
                    </h4>
                    <span class="badge badge-pill badge-primary pull-left">

                    </span>
                </div>

                <hr>
                @include('admin.partials.messages')
                @include('admin.partials.loading-spinner-1')

                <div class="card-body" id="bands_table_card" style="display: none;">
                    <div class="table-responsive">
                        <table id="bands_table" class="table table-sm">
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
                                <th>
                                 Action
                                </th>

                                <th data-sortable="false" class="no-sort no-search"></th>
                            </thead>
                            <tbody>
                                @foreach ($bands as $band)
                                    <tr>
                                        <td class="data-style">
                                            {{ $band->id }}
                                        </td>
                                        <td>
                                            {{ $band->name }}
                                        </td>
                                        <td class="hidden-sm">
                                            {{ $band->slug }}
                                        </td>
                                        <td>
                                            <a href="/admin/bands/{{ $band->id }}/edit" class="btn btn-sm btn-info" data-toggle="tooltip" data-placement="left" title="{!! trans('tooltips.band.edit') !!}">
                                                <i class="fa fa-edit fa-fw" aria-hidden="true"></i>
                                               edit band
                                            </a>
                                        </td>
                                        <td>
                                            <span data-toggle="tooltip" data-placement="top" title="{!! trans('tooltips.band.delete') !!}">
                                                <button type="button" class="btn btn-danger btn-sm btn-block delete-band-trigger" data-toggle="modal" data-target="#modal_delete_band" data-bandid="{{ $band->id }}">
                                                    <i class="fa fa-trash-o fa-fw" aria-hidden="true"></i>
                                                    <span class="hidden-xs hidden-sm hidden-md">
                                                        {{ trans('admin.buttons.delete') }}
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

@include('admin.modals.delete-band-modal-form', ['bandId' => null])

@endsection

@push('scripts')
    <script>
        $(function() {
            $('#bands_table').DataTable({
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

            $('.delete-band-trigger').click(function(event) {
                var bandId = $(this).data("bandid");
                $('#modal_delete_band').on('show.bs.modal', function (e) {
                    document.delete_band_form.action = "{{ url('/') }}" + "/admin/bands/" + bandId;
                });
            });

            $('.loading').hide();
            $('#bands_table_card').fadeIn(100);
        });
    </script>
@endpush
