@extends('layouts.base')
@section('title','En_diary user pgae edit')
@section('main')

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Update</div>
    
                    <div class="card-body">
                        <form method="POST" action="{{ url('users/' .$user->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
    
                            <div class="form-group row align-items-center">
                                <label for="profile_image" class="col-md-4 col-form-label text-md-right">{{ __('Profile Image') }}</label>
    
                                <div class="col-md-6 d-flex align-items-center">
                                    {{-- <img src="{{ asset('/storage/user_images/'. $user->image_file) }}" class="mr-2 rounded-circle" width="80" height="80" alt="profile_image"> --}}
                                    {{-- heroku用 --}}
                                    <img src="data:image/png;base64,{{ $user->image_file }}" class="rounded-circle" width="100" height="100">   
                                    <input type="file" name="profile_image" class="@error('profile_image') is-invalid @enderror" autocomplete="profile_image">
    
                                    @error('profile_image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
        
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
    
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="name" autofocus>
    
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
    
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email">
    
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">SAVE</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

   <!-- jquery.min.js -->
   <script src="js/jquery.min.js"></script>
    <!--Java Script-->
    <script src="js/scripts.js"></script>
</body>
@endsection


