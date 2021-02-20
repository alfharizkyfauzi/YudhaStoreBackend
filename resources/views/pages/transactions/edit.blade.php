@extends('layouts.default')

@section('content')
    <div class="card">
        <div class="card-header">
            <strong>Edit Transaksi</strong>
            <span class="badge badge-info p-2">{{ $item->uuid }}</span>
        </div>
        <div class="card-body card-block">
            <form action="{{ route('transactions.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="name" class="form-control-label">Nama Pemesan</label>
                    <input type="text" name="name" value="{{ old('name') ? old('name') : $item->name }}" class="form-control @error('name') is-invalid @enderror"/>
                    @error('name') <div class="text-muted">{{ $message }}</div> @enderror
                </div>
                <div class="form-group">
                    <label for="email" class="form-control-label">Email</label>
                    <input type="email" name="email" value="{{ old('email') ? old('email') : $item->email }}" class="form-control @error('email') is-invalid @enderror"/>
                    @error('email') <div class="text-muted">{{ $message }}</div> @enderror
                </div>
                <div class="form-group">
                    <label for="number" class="form-control-label">Nomor HP</label>
                    <input type="text" name="number" value="{{ old('number') ? old('number') : $item->number }}" class="form-control @error('number') is-invalid @enderror"/>
                    @error('number') <div class="text-muted">{{ $message }}</div> @enderror
                </div>
                <div class="form-group">
                    <label for="address" class="form-control-label">Alamat Pemesan</label>
                    <input type="text" name="address" value="{{ old('address') ? old('address') : $item->address }}" class="form-control @error('address') is-invalid @enderror"/>
                    @error('address') <div class="text-muted">{{ $message }}</div> @enderror
                </div>
                {{-- <div class="form-group">
                    <label for="bukti" class="form-control-label">Bukti Pesanan</label>
                @if ($item->bukti == $item->bukti)
                    <img width="50%" height="50%" src="{{ url($item->bukti)}}" alt="">
                @else
                    <input type="file" name="bukti" value="{{ url($item->bukti) ? url($item->bukti) : $item->bukti }}" accept="image/*" class="form-control @error('bukti') is-invalid @enderror"/>
                    @error('bukti') <div class="text-muted">{{ $message }}</div> @enderror
                @endif
                </div> --}}
                <div class="form-group">
                    <button class="btn btn-primary col-3" type="submit"><i class="fa fa-pencil"></i> Edit Transaksi</button>
                    <a href="{{route('transactions.index')}}" class="btn btn-danger col-3"><i class="fa fa-undo"></i> Kembali</a>
                </div>
            </form>
        </div>
    </div>
@endsection