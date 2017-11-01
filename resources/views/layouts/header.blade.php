<nav class="navbar navbar-expand-md navbar-light fixed-top">
    <a class="navbar-brand" href="#"><img src="{{ URL::asset('img/logo.png') }}" alt="logo"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse main-nav" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
        <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/project') }}">Project</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/participants') }}">Participants</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/pastinternship') }}">Past Internship</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/blog') }}">Blog</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="{{ url('/task') }}">Task</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/library') }}">Library</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/supporters') }}">Supporters</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/about') }}">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/contact') }}">Contact</a>
        </li>
      </ul>
    </div>
  </nav> 