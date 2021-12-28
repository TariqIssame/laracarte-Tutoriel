@extends('Layouts/master',['title'=>'Contact'])

@section('content')
  <section class="container">
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <h2>Get In Touch</h2>
        <p class="text-muted">If you having trouble with service, please <a href="mailto:{{env('ADMIN_EMAIL')}}?subject=Email-Me" class="text-primary">ask for help</a> </p>

        <form class="needs-validation" action="{{ route('contacts.store') }}"  method="POST" novalidate>
          @csrf
          <div class="mb-3 form-group">
            <label for="name" class="form-label {{ $errors->has('name') ? 'text-danger fw-bold' : '' }}">Name</label>
            <input type="name" class="form-control {{ $getErrorColorForm(old('name'),$errors->has('name')) }}" id="name" name="name" value="{{old('name')}}">
            <div class="form-text text-danger fst-italic">
              @error ('name')
                  {{ $message }}
              @enderror
            </div>
          </div>
          <div class="mb-3 form-group">
            <label for="email" class="form-label {{ $errors->has('email') ? 'text-danger fw-bold' : '' }}">Email</label>
            <input type="email" class="form-control {{ $getErrorColorForm(old('email'),$errors->has('email')) }}" id="email" name="email" value="{{old('email')}}">
            <div class="form-text text-danger fst-italic">
              @error ('email')
                  {{ $message }}
              @enderror
            </div>
          </div>
          <div class="mb-3 form-group">
            <label for="message" class="form-label sr-only">Message</label>
            <textarea name="message" class="form-control {{ $getErrorColorForm(old('message'),$errors->has('message')) }}" rows="10" cols="80" id="message">{{old('message')}}</textarea>
            <div class="form-text text-danger fst-italic">
              @error ('message')
                  {{ $message }}
              @enderror
            </div>
          </div>

          <div class="mb-3 form-group">
            <button class="btn btn-danger w-100" type="submit" class="btn btn-primary">Submit</button>
          </div>
      </form>

      </div>
    </div>
  </section>
@endsection
