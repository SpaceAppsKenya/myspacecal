@layout('home::templates.hometemplate')


@section('content')

<div id="content">
  <div class="container"> 
    <!-- Login form -->
    <form class="form-login form-wrapper form-narrow">
      <h3 class="title-divider"><span>Login</span> <small>Not signed up? <a href="{{URL::to('/ses/home/signup');}}">Sign up here</a>.</small></h3>
      <input type="text" class="input-block-level" placeholder="Email address">
      <input type="password" class="input-block-level" placeholder="Password">
      <label class="checkbox">
        <input type="checkbox" value="remember-me">
        Remember me </label>
      <button class="btn btn-primary" type="submit">Sign in</button>
      | <a href="#">Forgotten Password?</a>
    </form>
  </div>
</div>

@endsection

