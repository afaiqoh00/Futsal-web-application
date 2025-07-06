@extends('layouts.admin')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
   

    <!-- Content Row -->
        <div class="card">
            <div class="card-header py-3 d-flex">
                <h6 class="m-0 font-weight-bold text-primary">
                    {{ __('order') }}
                </h6>
                <div class="ml-auto">
                    @can('arena_create')
                    <a href="{{ route('admin.arenas.create') }}" class="btn btn-primary">
                        <span class="icon text-white-50">
                            <i class="fa fa-plus"></i>
                        </span>
                        <span class="text">{{ __('New order') }}</span>
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
                                <th>Nama</th>
                                <th>Address</th>
                                <th>No tlp</th>
                                <th>Total Harga</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            
                        </thead>
                        <tbody>
                            @forelse($datas as $data)
                            <tr data-entry-id="{{ $data->id }}">
                                <td> </td>
                                <td>{{ $loop->iteration }}</td>

                                <td>{{$data->name}}</td>
                                <td>{{ $data->adress }}</td>
                                <td>{{ $data->phone }}</td>
                                <td>Rp. {{ number_format( $data->total_price,2,',','.')}}</td>
                                <td>{{ $data->status }}</td>
                                <td>

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
  
</script>
@endpush