@extends('layouts.app_admin')
@section('title','Create Teacher')
@section('content')
 
        
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          @if (session('sucessMSG'))
            <div class="alert alert-success">
                {{ session('sucessMSG') }}
            </div>
          @endif

 

          <form action="{{ url('admin/teachers') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"  placeholder="Enter Teacher name" value="{{ old('name') }}">

 

                  @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                   
                </div>
                
                <div class="form-group">
                  <label for="position">Position</label>
                  <input type="text" class="form-control @error('position') is-invalid @enderror" id="position" name="position"  placeholder="Enter Teacher position" value="{{ old('position') }}">

 

                  @error('position')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                   
                </div>                
                <div class="form-group">
                  <label for="address">Address</label>
                  <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address"  placeholder="Enter Teacher address" value="{{ old('address') }}">

 

                  @error('address')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                   
                </div>

                <div class="form-group">
                  <label for="image">Image</label>
                  <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image">
                  @error('image')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div> 

                <div class="form-group">
                  <label for="facebook">Facebook</label>
                  <input type="text" class="form-control @error('facebook') is-invalid @enderror" id="facebook" name="facebook"  placeholder="Enter facebook" value="{{ old('facebook') }}">

 

                  @error('facebook')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror

 

                </div>
                <div class="form-group">
                  <label for="twitter">Twitter</label>
                  <input type="text" class="form-control @error('twitter') is-invalid @enderror" id="twitter" name="twitter"  placeholder="Enter twitter" value="{{ old('twitter') }}">

 

                  @error('twitter')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror

 

                </div>
                <div class="form-group">
                  <label for="linkedin">Linkedin</label>
                  <input type="text" class="form-control @error('linkedin') is-invalid @enderror" id="linkedin" name="linkedin"  placeholder="Enter linkedin" value="{{ old('linkedin') }}">

 

                  @error('linkedin')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror

                <div class="form-group">
                  <label for="skype">Skype</label>
                  <input type="text" class="form-control @error('skype') is-invalid @enderror" id="skype" name="skype"  placeholder="Enter skype" value="{{ old('skype') }}">

 

                  @error('skype')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
 

                </div>             
                <button type="submit" class="btn btn-primary">Submit</button>
             </form>
        </main>
@endsection