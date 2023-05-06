@extends('layouts.app2')

@section('content')
    <div class="container mt-4 mb-2 card">
        <div class="card-body">
            @if (session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif
            <h5 class="card-title">Sebelum masuk, Pilih Dimana Anda Sekarang</h5>
            <form action="{{ route('products.search') }}" method="GET">
                @csrf
                <div class="form-group">
                    <label for="address-select">Saya di:</label>
                    <select name="address_id" id="address-select" class="form-control">
                        <option value="" disabled selected>-- Pilih Alamat --</option>
                        @foreach ($addresses as $address)
                            <option value="{{ $address->id }}">{{ $address->city }}/{{ $address->district }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-success mt-3">Masuk</button>
            </form>
        </div>
    </div>
@endsection
