@extends('layouts.admin')
@section('content')
@includeIf('admin.patients.relationships.delete_modal')

@can('patient_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.patients.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.patient.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.patient.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body" style="padding: 40px 16.6% 40px 0px; !important;margin:0px !important">
        <table class=" table table-bordered table-hover ajaxTable datatable datatable-Patient">
            <thead>
                <tr>
                    <th width="10">

                    </th>
                    <th>
                        {{ trans('cruds.patient.fields.id') }}
                    </th>
                    <th>
                        {{ trans('cruds.patient.fields.code') }}
                    </th>
                    <th>
                        {{ trans('cruds.patient.fields.name') }}
                    </th>
                    <th>
                        {{ trans('cruds.patient.fields.gender') }}
                    </th>
                    <th>
                        {{ trans('cruds.patient.fields.birthday') }}
                    </th>
                    <th>
                        {{ trans('cruds.patient.fields.birth_place') }}
                    </th>
                    <th>
                        {{ trans('cruds.patient.fields.phone') }}
                    </th>
              
                    <th>
                        {{ trans('cruds.patient.fields.email') }}
                    </th>
                    
                    <th>
                        &nbsp;
                    </th>
                    
                </tr>
            </thead>
        </table>
    </div>
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('patient_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}';
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.patients.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).data(), function (entry) {
          return entry.id
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
  // dtButtons.push(deleteButton)
@endcan

  let dtOverrideGlobals = {
    buttons: dtButtons,
    processing: true,
    serverSide: true,
    retrieve: true,
    aaSorting: [],
    ajax: "{{ route('admin.patients.index') }}",
    columns: [
      { data: 'placeholder', name: 'placeholder' },
{ data: 'id', name: 'id' },
{ data: 'code', name: 'code' },
{ data: 'name', name: 'name' },
{ data: 'gender', name: 'gender' },
{ data: 'birthday', name: 'birthday' },
{ data: 'birth_place', name: 'birth_place' },
{ data: 'phone', name: 'phone' },
 { data: 'email', name: 'email' },
{ data: 'actions', name: '{{ trans('global.actions') }}' }
    ],
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 25,
  };
  let table = $('.datatable-Patient').DataTable(dtOverrideGlobals);
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
});

</script>
@endsection