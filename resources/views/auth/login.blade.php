@extends('layouts.app')

@section('style')
<style>
    body {
        background: url("/img/Capture.png");
    }
</style>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header">Informasi Seputar SIP3KTI</div>
                <div class="card-body">
                <p>Sistem Informasi Pengelolaan Pengajuan dan Peminjaman Karya Tulis Ilmiah (SIP3KTI).</p>
                <img src="{{ asset('img/DSC_0003.jpg') }}" width="580px"><br/>
                <p>Badan Tenaga Nuklir Nasional (BATAN) merupakan lembaga yang melaksanakan tugas pemerintahan di bidang penelitian, pengembangan dan penyandagunaan ilmu pengetahuan dan teknologi nuklir yang salah satunya pada bagian Pusat Sains dan Teknologi Nuklir Terapan (PSTNT).</p>
                <p>Sesuai dengan buku Panduan Penelitian dan Pengembangan (Litbang) 2008 untuk pembinaan jabatan fungsional peneliti, terdapat norma penelitian yakni pelaporan penelitian dalam bentuk makalah atau karya tulis ilmiah untuk kepentingan publikasi.</p>
                <p>Sistem ini membantu mengelola data pengajuan dan peminjaman makalah di PSTNT Badan Tenaga Nuklir Nasional
                sebagai lembaga Penelitian dan Pengembangan Nuklir Bandung. </p>
                </div>
            </div>
        </div>

        <div class="col-md-5">
            <div class="card">
                <div class="card-header">{{ __('Silahkan Login terlebih dahulu') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="nip" class="col-sm-5 col-form-label text-md-right">{{ __('Nomor Induk Pegawai') }}</label>

                            <div class="col-md-6">
                                <input id="nip" type="text" class="form-control{{ $errors->has('nip') ? ' is-invalid' : '' }}" name="nip" value="{{ old('nip') }}" required autofocus>

                                @if ($errors->has('nip'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nip') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-5 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                <!--<a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Lupa Password Anda?') }}
                                </a>-->
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


