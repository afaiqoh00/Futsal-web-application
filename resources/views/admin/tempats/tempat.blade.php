@extends('layouts.admin')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    
<!-- Content Row -->
    <div class="card">
        <div class="card shadow">
            <div class="card-header">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">{{ __('create tempat') }}</h1>
                    <a href="{{ route('admin.arenas.index') }}" class="btn btn-primary btn-sm shadow-sm">{{ __('Go Back') }}</a>
                </div>
            </div>
            <div class="card-body">
            <form action="{{ url('admin/post-tempat') }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="form-group">
                <label for="time_from">Nama Tempat</label>
                <input type="text" class="form-control datetimepicker"  name="tempat" value="{{ old('tempat') }}" />
            </div>
            <div class="form-group">
                <label for="operator">{{ __('Nama Operator') }}</label>
                <input type="text" class="form-control" id="operator" placeholder="{{ __('') }}" name="operator" value="{{ old('operator') }}" />
            </div>
            <div class="custom-file">
                <label class="custom-file-label" for="validatedCustomFile"> Pilih Gambar</label>
                <input type="file" class="custom-file-input"  name="image" value="{{ old('image')}}" required>
                
                <br>
                <div class="invalid-feedback">Example invalid custom file feedback</div>
            </div> 
            <div class="form-group">
                <label for="operator">{{ __('Google Maps') }}</label>
                <input type="text" class="form-control" id="maps" placeholder="{{ __('') }}" name="maps" value="{{ old('maps') }}" />
            </div>
            <div class="form-group">
                <label for="operator">{{ __('Jam Tutup') }}</label>
                <input type="text" class="form-control" id="tutup" placeholder="{{ __('') }}" name="tutup" value="{{ old('tutup') }}" />
            </div>
            <div class="form-group">
                <label for="operator">{{ __('No Whatsapp') }}</label>
                <input type="text" class="form-control" id="waa" placeholder="{{ __('') }}" name="waa" value="{{ old('waa') }}" />
            </div>
            
            <!-- <div class="form-group">
                <label for="time_from">Kecamatan</label>
                <input type="text" class="form-control datetimepicker" id="kec"name="kec" value="{{ old('kec') }}" />
            </div> -->
            
            <button type="submit" class="btn btn-primary btn-block">{{ __('Save') }}</button>
                </form>
            </div>
        </div>
        
    </div>
<br>
<div class="card">
<div class="card shadow">
<div class="card-body">
<div class="table-responsive">
                <table class="table table-bordered table-striped table-hover datatable datatable-arena" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th width="10">

                            </th>
                            <th>No</th>
                            <th>Image</th>
                            <th>Tempat</th>
                            <th>Operator</th>
                            <th>Link Google Maps</th>
                            <th>Jam Tutup</th>
                            <th>No Whatsapp</th>
                            <!-- <th>Kecamatan</th> -->
                            <!-- <th>Harga</th>
                            <th>Gambar</th>
                            <th>Status</th> -->
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>                
            <div class="card-header py-3 d-flex">
                <h6 class="m-0 font-weight-bold text-primary">
                    {{ __('Tempat') }}
                </h6>
            <div class="ml-auto">
                @can('Tempat_create')
                <!-- <a href="{{ url('admin/tempats/create_tempat') }}" class="btn btn-primary">
                    <span class="icon text-white-50">
                        <i class="fa fa-plus"></i>
                    </span>
                    <span class="text">{{ __('New tempat') }}</span> -->
                </a>
                @endcan
            </div>
            </form>  
                @forelse($datas as $tempat)
                <tr data-entry-id="{{ $tempat->id }}">
                    <td> </td>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                        <img src="{{ asset('images/tempat/'.$tempat->image) }}" width="50px" height="50px">
                    </td>
                    <td>
                    {{ $tempat->name }}
                    </td>
                    <td>
                    {{ $tempat->operator }}
                    </td>
                    <td>
                    {{ $tempat->maps }}
                    </td>
                    <td>
                    {{ $tempat->tutup }}
                    </td>
                    <td>
                    {{ $tempat->waa }}
                    </td>
                    <!-- <td>
                    {{ $tempat->kec }}
                    </td> -->
                    <td>
                    <a href="{{ url('edit-tempat/'.$tempat->id)}}" class="btn btn-primary"> Edit </a>
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
    <!-- Content Row -->
        <!-- <div class="card">
            <div class="card-header py-3 d-flex">
                <h6 class="m-0 font-weight-bold text-primary">
                    {{ __('arena') }}
                </h6>
                <div class="ml-auto">
                    <form action="{{ url('admin/post-tempat') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                        <div class="form-group">
                            <label for="time_from">Tempat</label>
                            <input type="text" class="form-control datetimepicker"  name="tempat" value="{{ old('tempat') }}" />
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input"  name="image" value="{{ old('image')}}" required>
                            <label class="custom-file-label" for="validatedCustomFile"></label>
                            <div class="invalid-feedback">Example invalid custom file feedback</div>
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
                                <th>Foto</th>
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
                                    <img src="{{ asset('images/tempat/'.$tempat->image) }}" width="50px" height="50px">

                                </td>
                                <td>
                                    <form action="{{ url('admin/edit-tempat/' .$tempat->id) }}" method="POST">
                                        @csrf
                                        <input type="text" class="form-control datetimepicker"  name="tempat" value="{{ $tempat->name }}" />
                                        {{-- <div class="custom-file"> --}}
                                            <input type="file" class="custom-file-input"  name="image" value="{{ old('image')}}" required>
                                            {{-- <label class="custom-file-label" for="validatedCustomFile">Choose file...</label> --}}
                                            <div class="invalid-feedback">Example invalid custom file feedback</div>
                                          {{-- </div> --}}
                                        <button type="submit" class="btn btn-primary btn-block">{{ __('Save') }}</button>
                                    </form>

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
        </div> -->
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
