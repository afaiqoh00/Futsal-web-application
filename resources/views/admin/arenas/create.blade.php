@extends('layouts.admin')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

<!-- Content Row -->
        <div class="card shadow">
            <div class="card-header">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">{{ __('create arena') }}</h1>
                    <a href="{{ route('admin.arenas.index') }}" class="btn btn-primary btn-sm shadow-sm">{{ __('Go Back') }}</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.arenas.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="number">{{ __('Nomer') }}</label>
                        <input type="text" class="form-control" id="number" placeholder="{{ __('number') }}" name="number" value="{{ old('number') }}" />
                    </div>
                    <div class="form-group">
                        <label for="price">{{ __('Harga per Jam') }}</label>
                        <input type="number" class="form-control" id="price" placeholder="{{ __('price') }}" name="price" value="{{ old('price') }}" />
                    </div>
                    <div class="form-group">
                        <label for="tempat">Tempat</label>
                        <select class="js-example-basic-single form-control" name="tempat_id">
                            <option value="">Pilih Tempat</option>
                            @foreach ($tempats as $tempat)
                                <option value="{{ $tempat->id }}">{{ $tempat->name }}</option>
                            @endforeach
                          </select>
                    </div>
                    <div class="form-group {{ $errors->has('photo') ? 'has-error' : '' }}">
                        <label for="photo">Photo</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input"  name="image" value="{{ old('image')}}" required>
                            <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                            <div class="invalid-feedback">Example invalid custom file feedback</div>
                          </div>
                        {{-- <div class="needsclick dropzone" id="photo-dropzone"> --}}

                        </div>
                        @if($errors->has('image'))
                            <em class="invalid-feedback">
                                {{ $errors->first('image') }}
                            </em>
                        @endif
                    
                    <div class="form-group">
                        <label for="status">{{ __('Status') }}</label>
                        <select name="status" id="status" class="form-control">
                            <option value="1">Active</option>
                            <option value="0">In Active</option>
                        </select>
                    <br>
                    <button type="submit" class="btn btn-primary btn-block">{{ __('Save') }}</button>
                    </div>
                    </div>
                </form>
            </div>
        </div>
    

    <!-- Content Row -->

</div>
@endsection

@push('style-alt')
<link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css" rel="stylesheet" />
@endpush

@push('script-alt')

<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>
<script>
    Dropzone.options.photoDropzone = {
        url: "{{ route('admin.arenas.storeMedia') }}",
        maxFilesize: 2, // MB
        acceptedFiles: '.jpeg,.jpg,.png,.gif',
        maxFiles: 1,
        addRemoveLinks: true,
        headers: {
        'X-CSRF-TOKEN': "{{ csrf_token() }}"
        },
        params: {
        size: 2,
        width: 4096,
        height: 4096
        },
        success: function (file, response) {
        $('form').find('input[name="photo"]').remove()
        $('form').append('<input type="hidden" name="photo" value="' + response.name + '">')
        },
        removedfile: function (file) {
        file.previewElement.remove()
        if (file.status !== 'error') {
            $('form').find('input[name="photo"]').remove()
            this.options.maxFiles = this.options.maxFiles + 1
        }
        },
        init: function () {
            @if(isset($arena) && $arena->photo)
                var file = {!! json_encode($arena->photo) !!}
                    this.options.addedfile.call(this, file)
                this.options.thumbnail.call(this, file, "{{ $arena->photo->getUrl('thumb') }}")
                file.previewElement.classList.add('dz-complete')
                $('form').append('<input type="hidden" name="photo" value="' + file.file_name + '">')
                this.options.maxFiles = this.options.maxFiles - 1
            @endif
        },
        error: function (file, response) {
            if ($.type(response) === 'string') {
                var message = response //dropzone sends it's own error messages in string
            } else {
                var message = response.errors.file
            }
            file.previewElement.classList.add('dz-error')
            _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
            _results = []
            for (_i = 0, _len = _ref.length; _i < _len; _i++) {
                node = _ref[_i]
                _results.push(node.textContent = message)
            }
            return _results
        }
    }
    // In your Javascript (external .js resource or <script> tag)
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });
</script>
@endpush