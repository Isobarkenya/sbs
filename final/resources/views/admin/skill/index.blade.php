@extends('layouts.admin')

@section('template_title')
    {{ trans('admin.skills.pages.index.title') }}
@endsection

@section('template_description')
    {{ trans('admin.skills.pages.index.desc') }}
@endsection

@section('header_title')
    {{ trans('admin.skills.pages.index.header') }}
@endsection

@push('head')
@endpush

@section('content')

<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('createskill') }}" class="btn btn-sm pull-right" data-toggle="tooltip" data-placement="left" title="{!! trans('tooltips.skill.create') !!}">
                        <i class="nc-icon nc-simple-add" aria-hidden="true"></i>
                        <span class="hidden-xs">
                           Create Skill
                        </span>
                    </a>
                    <h4 class="card-title">
                        Skills
                    </h4>
                    <span class="badge badge-pill badge-primary pull-left">

                    </span>
                </div>

                <hr>
                @include('admin.partials.messages')
                @include('admin.partials.loading-spinner-1')

                <div class="card-body" id="skills_table_card" style="display: none;">
                    <div class="table-responsive">
                        <table id="skills_table" class="table table-sm">
                            <thead class="text-primary">
                                <th>
                                   id
                                </th>
                                <th>
                                   name
                                </th>
                                <th>
                                    slug
                                </th>


                                <th data-sortable="false" class="no-search no-sort">
                                    Actions
                                </th>
                                <th data-sortable="false" class="no-sort no-search"></th>
                            </thead>
                            <tbody>
                                @foreach ($skills as $skill)
                                    <tr>
                                        <td class="data-style">
                                            {{ $skill->id }}
                                        </td>

                                        <td>
                                            {{ $skill->name }}
                                        </td>
                                        <td>
                                            {{ $skill->slug }}
                                        </td>

                                        <td>
                                            <a href="/admin/skills/{{ $skill->id }}/edit" class="btn btn-sm btn-info" data-toggle="tooltip" data-placement="left" title="{!! trans('tooltips.skill.edit') !!}">
                                                <i class="fa fa-edit fa-fw" aria-hidden="true"></i>
                                              Edit
                                            </a>
                                        </td>
                                        <td>
                                            <span data-toggle="tooltip" data-placement="top" title="Delete Skill">
                                                <button type="button" class="btn btn-danger btn-sm btn-block delete-skill-trigger" data-toggle="modal" data-target="#modal_delete_skill" data-skillid="{{ $skill->id }}">
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

@include('admin.modals.delete-skill-modal-form', ['skillId' => null])

@endsection

@push('scripts')
    <script>
        $(function() {
            $('#skills_table').DataTable({
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

            $('.delete-skill-trigger').click(function(event) {
                var skillId = $(this).data("skillid");
                $('#modal_delete_skill').on('show.bs.modal', function (e) {
                    document.delete_skill_form.action = "{{ url('/') }}" + "/admin/skills/" + skillId;
                });
            });

            $('.loading').hide();
            $('#skills_table_card').fadeIn(100);
        });
    </script>
@endpush
