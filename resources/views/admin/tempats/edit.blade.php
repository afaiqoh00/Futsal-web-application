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
                @can('arena_create')
                <a href="{{ url('edit-tempat/'. $tempat->id) }}" class="btn btn-primary">
                    <span class="icon text-white-50">
                        <i class="fa fa-plus"></i>
                    </span>
                    <span class="text">{{ __('New tempat') }}</span>
                </a>
                @endcan
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
                            <th>Image</th>
                            <th>Tempat</th>
                            <!-- <th>Harga</th>
                            <th>Gambar</th>
                            <th>Status</th> -->
                            <th>Action</th>
                        </tr>
                    </thead>
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
                                {{ $tempat->name }}
                                </td>
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
    
</div>
@endsection