@extends('master')
@section('title', 'Daftar Pengguna')

@section('content')
    <div class="main-content">
        <section class="section">

            <div class="section-header">
                <h1>Daftar Semua Pengguna {{ config('app.name') }}</h1>
            </div>

            <div class="section-body">
                <div class="card card-success">
                    <div class="card-body">

                        <div class="float-right">
                            <form method="GET">
                                <div class="input-group">
                                    <input name="search" type="text" class="form-control" placeholder="Cari Pengguna..."
                                        autofocus>
                                    <div class="input-group-append">
                                        <button class="btn btn-success">
                                            <i class="fas fa-search"></i> Cari
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="clearfix mb-3"></div>

                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Lengkap</th>
                                        <th>Alamat Email</th>
                                        <th>Telepon</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @forelse ($users as $index => $user)
                                        <tr>
                                            <td>{{ $index + $users->firstItem() }}</td>
                                            <td>{{ $user->name }}
                                                @if (auth()->user()->role == 'superadmin')
                                                    <div class="table-links">

                                                        <a href="" class="text-success text-decoration-none">
                                                            <span class="bullet"></span>Lihat
                                                        </a>

                                                        <a href="" class="text-warning text-decoration-none">
                                                            <span class="bullet"></span>Ubah
                                                        </a>

                                                        <a href="" class="text-danger text-decoration-none">
                                                            <span class="bullet"></span>Hapus
                                                        </a>
                                                    </div>
                                                @endif
                                            </td>
                                            <td>{{ $user->email }}</td>
                                            <td>
                                                <span class="badge badge-dark">
                                                    {{ $user->phone }}
                                                </span>
                                            </td>
                                            <td>
                                                @if ($user->email_verified_at != null)
                                                    <span class="badge badge-success">
                                                        Terverifikasi
                                                    </span>
                                                @else
                                                    <span class="badge badge-warning">
                                                        Menunggu
                                                    </span>
                                                @endif
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5" class="text-center h5">
                                                Nyari apa bro? Nulis yang bener dong!
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>

                            <div class="float-right">
                                <nav>
                                    <ul class="pagination">
                                        {{ $users->withQueryString()->links() }}
                                    </ul>
                                </nav>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </section>
    </div>
@endsection
