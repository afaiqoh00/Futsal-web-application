@extends('layouts.admin')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
   

    <!-- Content Row -->
        <div class="card">
            <div class="card-header py-3 d-flex">
                <h6 class="m-0 font-weight-bold text-primary">
                    {{ __('arena') }}
                </h6>
                <div class="ml-auto">
                    <form action="{{ url('admin/post-tempat') }}" method="POST">
                    @csrf

                        <div class="form-group">
                            <label for="time_from">Tempat</label>
                            <input type="text" class="form-control datetimepicker"  name="tempat" value="{{ old('tempat') }}" />
                        </div>
                    <button type="submit" class="btn btn-primary btn-block">{{ __('Save') }}</button>

                    </form>
                    {{-- @can('arena_create')
                    <a href="{{ route('admin.arenas.create') }}" class="btn btn-primary">
                        <span class="icon text-white-50">
                            <i class="fa fa-plus"></i>
                        </span>
                        <span class="text">{{ __('New arena') }}</span>
                    </a>
                    @endcan --}}
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover datatable datatable-arena" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th width="10">

                                </th>
                                <th>No</th>
                                <th>tempat</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($datas as $tempat)
                            <tr data-entry-id="{{ $tempat->id }}">
                                <td>

                                </td>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    <form action="{{ url('admin/edit-tempat/' .$tempat->id) }}" method="POST">
                                        @csrf
                                        <input type="text" class="form-control datetimepicker"  name="tempat" value="{{ $tempat->name }}" />
                                        {{-- <div class="custom-file"> --}}
                                            <input type="file" class="custom-file-input"  name="image" value="{{ old('image')}}" required>
                                            <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                            <div class="invalid-feedback">Example invalid custom file feedback</div>
                                          {{-- </div> --}}
                                        <button type="submit" class="btn btn-primary btn-block">{{ __('Save') }}</button>
                                    </form>
                                </td>
                                        <form onclick="return confirm('are you sure ? ')" class="d-inline" action="{{ route('admin.arenas.destroy', $tempat->id) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger" style="border-top-left-radius: 0;border-bottom-left-radius: 0;">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="7" class="text-center">{{ __('Data Empty') }}</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    <!-- Content Row -->

</div>
@endsection

@push('script-alt')
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
  let deleteButtonTrans = 'delete selected'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.arenas.mass_destroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });
      if (ids.length === 0) {
        alert('zero selected')
        return
      }
      if (confirm('are you sure ?')) {
        $.ajax({
          headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
  $.extend(true, $.fn.dataTable.defaults, {
    order: [[ 1, 'asc' ]],
    pageLength: 50,
  });
  $('.datatable-arena:not(.ajaxTable)').DataTable({ buttons: dtButtons })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})
</script>
@endpush