@extends('master')
@section('title','About')

@section('content')
<div class="row">
  <div class="col-lg-12">
    <h1 class="page-header">@yield('title')</h1>
  </div>
</div>
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="#">Beranda</a>
  </li>
  <li class="breadcrumb-item active">@yield('title')</li>
</ol> 
  <section class="content">
    <div class="box">
      <div class="box-header">
        Header
      </div>
      <div class="box-body">
        Start creating your amazing application!<br/>
        This is sample of about page.
      </div>
      <div class="box-footer">
        Footer
      </div>
    </div>
  </section>
</div>
@endsection

<ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>