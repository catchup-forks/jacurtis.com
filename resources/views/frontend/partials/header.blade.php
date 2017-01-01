<nav class="navbar navbar-default" id="head-c">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="{{ url('/') }}">{{ Settings::blogTitle() }}</a>

      <div class="nav-links pull-right">
        <button class="btn btn-success navbar-toggle collapsed">MENU <i class="fa fa-bars"></i></button>
      </div>
    </div>
  </div>
</nav>
{{-- @if(isset($user->twitter) && strlen($user->twitter))
        <a href="http://twitter.com/{{ $user->twitter }}" target="_blank" id="social"><i class="fa fa-fw fa-twitter"></i></a>
      @endif
      @if(isset($user->facebook) && strlen($user->facebook))
        <a href="http://facebook.com/{{ $user->facebook }}" target="_blank" id="social"><i class="fa fa-fw fa-facebook"></i></a>
      @endif
      @if(isset($user->github) && strlen($user->github))
        <a href="http://github.com/{{ $user->github }}" target="_blank" id="social"><i class="fa fa-fw fa-github"></i></a>
      @endif
      @if(isset($user->linkedin) && strlen($user->linkedin))
        <a href="http://linkedin.com/in/{{ $user->linkedin }}" target="_blank" id="social"><i class="fa fa-fw fa-linkedin"></i></a>
      @endif --}}
