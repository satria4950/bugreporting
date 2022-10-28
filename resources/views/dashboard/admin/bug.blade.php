@extends('dashboard.layouts.main')
@section('container') 


        {{-- <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
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
        </div> --}}

        <div class="row">
          <div class="col-12">
            <div class="card mb-4">
              <div class="card-header pb-0">
                <h6>BUG</h6>
              </div>
              @if (session()->has('success'))
                <div class="alert alert-success col-lg-12" role="alert">
                    {{ session('success') }}
                </div>
              @endif
              <div class="row">
                <div class="col ms-4 text-start">
                  <a class="btn bg-gradient-danger mb-0" href="/dashboard/bugreportadmin/create"><i class="fas fa-plus"></i>&nbsp;&nbsp;Create New Bug Report</a>
                </div>
              </div>
              <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                  <table class="table align-items-center mb-0">
                    <thead>
                      <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">#</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Judul</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Aplikasi</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jenis</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Role</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Link Bug</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Deskripsi</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Keterangan</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($bug_reportings as $bug)
                      <tr>
                        <td>
                          <div class="d-flex px-2 py-1">
                            <div class="d-flex flex-column justify-content-center">
                              <h6 class="mb-0 text-sm">{{ $loop->iteration }}</h6>
                            </div>
                          </div>
                        </td>
                        <td>
                          <div class="d-flex px-2 py-1">
                            <div class="d-flex flex-column justify-content-center">
                              <h6 class="text-xs mb-0">{!! Str::words($bug->judul, 10,' ....')  !!}</h6>
                            </div>
                          </div>
                        </td>
                        <td>
                          <h6 class="text-xs font-weight-bold mb-0">{{ $bug->aplikasi }}</h6>
                        </td>
                        <td class="align-middle text-center text-sm">
                          <span class="badge badge-sm bg-gradient-success">{{ $bug->jenis_laporan }}</span>
                        </td>
                        @if ($bug->role_akun == 1)
                        <td><h6 class="text-xs font-weight-bold mb-0">Super Admin</h6></td>
                        @elseif($bug->role_akun == 2)
                        <td><h6 class="text-xs font-weight-bold mb-0">Board Of Director</h6></td>  
                        @elseif($bug->role_akun == 3)
                        <td><h6 class="text-xs font-weight-bold mb-0">Project Manager</h6></td>  
                        @elseif($bug->role_akun == 4)
                        <td><h6 class="text-xs font-weight-bold mb-0">Marketing</h6></td>  
                        @elseif($bug->role_akun == 5)
                        <td><h6 class="text-xs font-weight-bold mb-0">Sales Agent</h6></td>  
                        @else
                        <td><h6 class="text-xs font-weight-bold mb-0">Undefined</h6></td>
                        @endif    
                        <td class="align-middle text-center">
                          <span class="text-secondary text-xs font-weight-bold">{{ $bug->link }}</span>
                        </td>
                        <td class="align-middle text-center">
                          <span class="text-secondary text-xs font-weight-bold">{!! Str::words($bug->deskripsi, 10,' ....')  !!}</span>
                        </td>
                        @if ($bug->status == "Bug Report Diterima")
                        <td><span class="badge badge-sm bg-primary">Bug Report Diterima</span></td>
                        @elseif($bug->status == "Bug Report Sedang Diperbaiki")
                        <td><span class="badge badge-sm bg-warning">Bug Report Sedang Diperbaiki</span></td>  
                        @elseif($bug->status == "Bug Report Teratasi")
                        <td><span class="badge badge-sm bg-gradient-success">Bug Report Teratasi</span></td>  
                        @else
                        <td><span class="badge badge-sm bg-gradient-success">Undefined</span></td>
                        @endif
                        @if ($bug->keterangan == "Bug Reporting")
                        <td><span class="badge badge-sm bg-primary">Bug Reporting</span></td>
                        @elseif($bug->keterangan == "Not Bug")
                        <td><span class="badge badge-sm bg-danger">Not Bug</span></td>  
                        @elseif($bug->keterangan == "Bug To Fix")
                        <td><span class="badge badge-sm bg-warning">Bug To Fix</span></td>  
                        @elseif($bug->keterangan == "Bug Fixed")
                        <td><span class="badge badge-sm bg-gradient-success">Bug Fixed</span></td>  
                        @else
                        <td><span class="badge badge-sm bg-gradient-success">Undefined</span></td>
                        @endif   
                        <td class="align-middle text-center">
                          <div class="ms-auto text-end">
                            <form action="/dashboard/bugreportadmin/{{ $bug->slug }}" method="post" class="d-inline">
                              @method('delete')
                              @csrf
                              <button class="btn btn-link text-danger text-gradient px-3 mb-0" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')"><i class="far fa-trash-alt me-2"></i>Delete</button>
                            </form>
                            {{-- <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i class="far fa-trash-alt me-2"></i>Delete</a> --}}
                            <a class="btn btn-link text-dark px-3 mb-0" href="/dashboard/bugreportadmin/{{ $bug->slug }}/edit"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                            <a class="btn btn-link text-primary px-3 mb-0" href="/dashboard/bugreportadmin/{{ $bug->slug}}"><i class="fas fa-eye text-primary me-2" aria-hidden="true"></i>Show</a>
                          </div>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
    
@endsection