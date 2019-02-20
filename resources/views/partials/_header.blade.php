<div class="header">
  <div class="header_left">
    <img src="{{ asset('img/logo.png') }}">
  </div>
  <div class="header_right">
    <ul>
      <li class="{{ (Request::route()->getName() == 'home') ? 'active' : null}}">
        <a href="{{ route('home') }}">HOME</a>
      </li>
      <li class="{{ (Request::route()->getName() == 'students.index') ? 'active' : null}}">
        <a href="{{ route('students.index') }}">STUDENTI</a>
      </li>
      <li class="{{ (Request::route()->getName() == 'static_page.privacy_policy') ? 'active' : null}}">
        <a href="{{ route('static_page.privacy_policy') }}">PRIVACY POLICY</a>
      </li>
      <li class="{{ (Request::route()->getName() == 'static_page.work_with_us') ? 'active' : null}}">
        <a href="{{ route('static_page.work_with_us')}}">LAVORA CON NOI</a>
      </li>
    </ul>
  </div>
</div>
