@extends('Layouts/master',['title'=>'Contact'])

@section('content')
  <section class="container">
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <h2>Get In Touch</h2>
        <p class="text-muted">If you having trouble with service, please <a href="#" class="text-primary">ask for help</a> </p>

        <form class="" methode="post">
          @csrf
          <div class="mb-3 form-group">
            <label for="name" class="form-label">Name</label>
            <input type="name" class="form-control" id="name" aria-describedby="nameHelp">
            {{-- <div id="nameHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
          </div>
          <div class="mb-3 form-group">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
            {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
          </div>
          <div class="mb-3 form-group">
            <label for="message" class="form-label sr-only">Message</label>
            <textarea name="message" class="form-control" rows="10" cols="80" id="message" aria-describedby="emailMessage" placeholder="Type your Message here"></textarea>
            {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
          </div>

          <div class="mb-3 form-group">
            <button class="btn btn-danger w-100" type="submit" class="btn btn-primary">Submit</button>
          </div>

      </form>
      </div>
    </div>
  </section>
@endsection
