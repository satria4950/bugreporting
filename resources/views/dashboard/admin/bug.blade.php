@extends('dashboard.layouts.main')
@section('container') 


        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Bug Reporting Admin (Bug)</h1>
        </div>

        @if (session()->has('success'))
          <div class="alert alert-success col-lg-9" role="alert">
              {{ session('success') }}
          </div>
        @endif

        <div class="table-responsive col-lg-12">
            <a href="/dashboard/bugreportadmin/create" class="btn btn-primary mb-3">Create New Bug Report</a>
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Judul</th>
                  <th scope="col">Aplikasi</th>
                  <th scope="col">Jenis</th>
                  <th scope="col">Role</th>
                  <th scope="col">Link Bug</th>
                  <th scope="col">Deskripsi</th>
                  <th scope="col">Status</th>
                  <th scope="col">Keterangan</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($bug_reportings as $bug)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{!! Str::words($bug->judul, 10,' ....')  !!}</td>
                    <td>{{ $bug->aplikasi }}</td>
                    <td>{{ $bug->jenis_laporan }}</td>
                    @if ($bug->role_akun=1)
                    <td>Super Admin</td>
                    @elseif($bug->role_akun=2)
                    <td>Board Of Director</td>  
                    @elseif($bug->role_akun=3)
                    <td>Project Manager</td>  
                    @elseif($bug->role_akun=4)
                    <td>Marketing</td>  
                    @elseif($bug->role_akun=5)
                    <td>Sales Agent</td>  
                    @else
                    <td>Undefined</td>
                    @endif                                                                                    
                    <td>{{ $bug->link }}</td>
                    <td>{!! Str::words($bug->deskripsi, 10,' ....')  !!}</td>
                    <td>{{ $bug->status }}</td>
                    <td>{{ $bug->keterangan }}</td>
                    <td>
                        <a href="/dashboard/bugreportadmin/{{ $bug->slug}}" class="badge bg-info">
                            <span data-feather="eye"></span>
                        </a>
                        <a href="/dashboard/bugreportadmin/{{ $bug->slug }}/edit" class="badge bg-warning">
                            <span data-feather="edit"></span>
                        </a>
                        <form action="/dashboard/bugreportadmin/{{ $bug->slug }}" method="post" class="d-inline">
                          @method('delete')
                          @csrf
                          <button class="badge bg-danger border-0" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')"><span data-feather="x-circle"></span></button>
                        </form>
                    </td>
                </tr> 
                @endforeach
              </tbody>
            </table>
          </div>
    
@endsection