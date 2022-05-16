
@extends('layouts.app')

@section('content')
<!doctype html>
  <html>
  <head>
      <meta charset="UTF-8">
      <title>Admin - create skills</title>
      <link rel="stylesheet" href="/css/main.css" />
  </head>
  <body>
  <div class="container">
      <header class="row">
      
      </header>
      <article class="row">
          <h1>Contact Us</h1>



          {!! Form::open() !!}

          <div class="form-group">
        {!! Form::label('title', 'Your Name:') !!}
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('detail', 'Your Message:') !!}
        {!! Form::textarea('detail', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Contact Us', ['class' => 'btn btn-primary form-control']) !!}
    </div>


          {!! Form::close() !!}


      </article>
      <footer class="row">
          @include('includes.footer')
      </footer>
  </div><!-- close container -->

  </body>
  </html>
@endsection