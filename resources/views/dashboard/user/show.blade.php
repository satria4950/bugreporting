@extends('dashboard.layouts.main')
@section('container') 

<div class="container">
    <div class="row my-3">
        <div class="col-lg-12">
            <h2>{{ $bugreport->judul }}</h2>
            <h6 disabled>{{ $bugreport->jenis_laporan }}</h4>
            
            <a href="/dashboard/bugreportuser" class="btn btn-success"><span data-feather="arrow-left"></span> Back to all bug report</a>
            <a href="/dashboard/bugreportuser/{{ $bugreport->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
            <form action="/dashboard/bugreportuser/{{ $bugreport->slug }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')"><span data-feather="x-circle"></span> Delete</button>
              </form>
            

            <div style="max-height: 350px; overflow:hidden;">
                <img src="{{ asset('storage/' . $bugreport->image) }}" class="img-fluid mt-3" alt="{{ $bugreport->nama_portofolio }}">
            </div>               
            <article class="my-3 fs-5">
                {!! $bugreport->deskripsi !!} 
            </article>

        </div>
    </div>
</div>

@endsection