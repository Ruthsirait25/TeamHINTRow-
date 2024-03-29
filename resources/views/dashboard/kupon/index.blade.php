@extends('dashboard.layout.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Halaman Kupon</h1>
    </div>
<div class="col-lg-8">
    @if(session()->has('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
    @endif

</div>

    <div>
        <a href="/dashboard/kupon/create" class="btn btn-primary mb-3">Create Kupon</a>
        <div class="table-responsive col-lg-8">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Code</th>
                        <th scope="col">Value</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kupons as $kupon)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $kupon->code }}</td>
                        <td>{{ $kupon->value }}</td>
                        <td>
                            <a href="/dashboard/kupon/{{ $kupon->id }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                            <form action="/dashboard/kupon/{{ $kupon->id }}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <button class="badge bg-danger border-0" onclick="return confirm('Yakin data akan dihapus?')"><span data-feather="x-circle"></span></button>
                            </form>
                        </td>
                    </tr>
                        
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
