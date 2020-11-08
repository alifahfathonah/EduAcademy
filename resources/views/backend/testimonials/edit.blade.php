@extends('layouts.app_admin')
@section('title','Edit Testimonial')
@section('content')
 
        
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          @if (session('sucessMSG'))
            <div class="alert alert-success">
                {{ session('sucessMSG') }}
            </div>
          @endif
 
          {{-- @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
          @endif --}}
 
          <form action="{{ url('admin/testimonials') }}/{{ $objTestimonial->id }}" method="post" enctype="multipart/form-data">
                @method('patch')
                @csrf
                <div class="form-group">
                  <label for="name">Testimonial Name</label>
                  <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"  placeholder="Enter Testimonial Name" value="{{ $objTestimonial->name }}">
                  @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>

                <div class="form-group">
                  <label for="position">Position</label>
                  <input type="text" class="form-control @error('position') is-invalid @enderror" id="position" name="position"  placeholder="Enter Testimonial Position" value="{{ $objTestimonial->position}}">
                  @error('position')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>

                <div class="form-group">
                  <label for="description">Description</label>
                  <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description">{{$objTestimonial->description }}</textarea>
                  @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                 <input type="hidden" name="id" value="{{$objTestimonial->id}}">

                <div class="form-group">
                  <label for="photo">Image</label>
                  <input type="file" class="form-control @error('photo') is-invalid @enderror" id="photo" name="photo">
                  @error('image')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                  <img style="width: 100px;height: 100px;" src="{{ url('') }}/{{ $objTestimonial->photo }}">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
             </form>
        </main>
@endsection