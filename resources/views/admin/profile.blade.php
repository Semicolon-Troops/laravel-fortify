@extends('master')
@section('title', 'Akun Saya')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Informasi Akun {{ auth()->user()->name }}</h1>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                        <div class="card card-success">
                            <div class="card-body">
                                <form action="{{ route('user-profile-information.update') }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label for="name">Nama Lengkap</label>
                                        <input type="text" id="name" name="name"
                                            value="{{ auth()->user()->name }}"
                                            class="form-control @error('name', 'updateProfileInformation')
                                        is-invalid
                                    @enderror"
                                            autofocus>

                                        @error('name', 'updateProfileInformation')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="email">Alamat Email</label>
                                            <input type="text" id="email" name="email"
                                                value="{{ auth()->user()->email }}"
                                                class="form-control @error('email', 'updateProfileInformation')
                                            is-invalid
                                        @enderror">

                                            @error('email', 'updateProfileInformation')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="phone">Nomor Telepon</label>
                                            <input type="tel" id="phone" name="phone"
                                                value="{{ auth()->user()->phone }}"
                                                class="form-control @error('phone', 'updateProfileInformation')
                                            is-invalid
                                        @enderror">

                                            @error('phone', 'updateProfileInformation')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-12">
                                            <label>Tentang Saya</label>
                                            <textarea name="bio"
                                                class="form-control summernote-simple @error('bio', 'updateProfileInformation')
                                            is-invalid
                                        @enderror">
                                        {{ auth()->user()->bio }}
                                            </textarea>

                                            @error('bio', 'updateProfileInformation')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="card-footer text-right">
                                        <button type="submit" class="btn btn-success">Simpan</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('customCSS')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/4.9.2/bootstrap-social.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs4.min.css">
@endpush

@push('customJS')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote.min.js"></script>
@endpush
