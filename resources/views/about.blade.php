@extends('layouts/master',['title'=>'About'])

@section('content')
  <div class="container">

      <h2>What is {{config('app.name')}} ?</h2>
      <p>{{config('app.name')}} is a clone app of <a class="text-primary" href="https://laramap.com" target="_blank">Laramap.com</a></p>

      <div class="row">
          <div class="col-md-6">
                <p class="alert alert-warning">
                  <strong>
                    <i class="fas fa-exclamation-triangle"></i>
                    This app has been build @etsmo for learning purposes.
                  </strong>
                </p>
          </div>
      </div>

      <p>Feel free top help to improve the <a class="text-primary" href="https://github.com/TariqIssame/laracarte-Tutoriel" target="_blank">source code.</a></p>
      <hr>
      <h2>What is Laramap ?</h2>
      <p>Laramap is the website by which laracarte was inspired :).</p>
      <p>More info <a href="https://laramap.com/p/about"></a> </p>
      <hr>
      <h2>Which tools and services are used in {{config('app.name')}} ?</h2>
      <p>Basically it s built on laravel &amp; Boostrap. But there's a bunch of services used for email and other sections</p>
      <ul>
        <li>Laravel</li>
        <li>Bootstrap</li>
        <li>Amazon S3</li>
        <li>Mandrill</li>
        <li>Google Maps</li>
        <li>Gravatar</li>
        <li>Antony Martin's Geolocation Package</li>
        <li>Michek Fortin's Markdown Parser Package</li>
        <li>Heroku</li>
      </ul>

  </div>
@endsection
