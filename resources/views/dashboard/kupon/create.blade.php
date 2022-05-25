@extends('dashboard.layout.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create New Kupon</h1>
    </div>
<div class="col-lg-8">
    <form action="/dashboard/kupon" method="post"> 
        @csrf
        <div class="mb-3">
            <label for="code" class="form-label">Code</label>
            <input type="text" class="form-control @error('code') is-invalid @enderror" id="code" name="code">
            @error('code')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="value" class="form-label">Value</label>
            <input type="text" class="form-control @error('value') is-invalid @enderror" id="value" name="value">
            @error('value')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Create Kupon</button>
    </form>

</div>
@endsection
