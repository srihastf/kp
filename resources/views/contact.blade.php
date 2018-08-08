@extends('master')
@section('title','Contact')

@section('content')
<div class="content-wrapper">
  <section class="content-header">
  <ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="home">Home</a>
  </li>
  <li class="breadcrumb-item active">@yield('title')</li>
</ol>
  </section>
  
  <section class="content">
    <div class="box">
      <div class="box-header">
        Header
      </div>
      <div class="box-body">
        Start creating your amazing application!<br/>
        This is sample of contact page.
      </div>
      <div class="box-footer">
        Footer
      </div>
    </div>
  </section>
</div>
@endsection