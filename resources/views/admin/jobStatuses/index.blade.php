@extends('layouts.admin')
@section('content')
@can('job_status_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("admin.job-statuses.create") }}">
                {{ trans('global.add') }} {{ trans('cruds.jobStatus.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.jobStatus.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-JobStatus">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.jobStatus.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.jobStatus.fields.name') }}
                        </th>
                        <th>
                            {{ trans('cruds.jobStatus.fields.description') }}
                        </th>
                        <th>
                            {{ trans('cruds.jobStatus.fields.color') }}
                        </th>
                        <th>
                            {{ trans('cruds.jobStatus.fields.allowed_status_transitions') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($jobStatuses as $key => $jobStatus)
                        <tr data-entry-id="{{ $jobStatus->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $jobStatus->id ?? '' }}
                            </td>
                            <td>
                                {{ $jobStatus->name ?? '' }}
                            </td>
                            <td>
                                {{ $jobStatus->description ?? '' }}
                            </td>
                            <td>
                                {{ $jobStatus->color ?? '' }}
                            </td>
                            <td>
                                {{ $jobStatus->allowed_status_transitions ?? '' }}
                            </td>
                            <td>
                                @can('job_status_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.job-statuses.show', $jobStatus->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('job_status_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.job-statuses.edit', $jobStatus->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('job_status_delete')
                                    <form action="{{ route('admin.job-statuses.destroy', $jobStatus->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('job_status_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.job-statuses.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  $('.datatable-JobStatus:not(.ajaxTable)').DataTable({ buttons: dtButtons })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})

</script>
@endsection