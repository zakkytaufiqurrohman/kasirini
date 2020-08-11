@extends('layouts.admin.app')

@section('body')
<section class="content-wrapper">
        {{-- <section class="content-header">
            <h3>add data</h3>
        </section> --}}
        <div class="box box-info">
                <div class="box-header">
                  <h3 class="box-title">insert produk</h3>
                </div>
                <div class="box-body">
                    <form action="{{route('produk.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>nama produk:</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" required placeholder="nama" autofocus ">
                            @error('nama')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                                <label>harga:</label>
                                <input type="number" class="form-control @error('harga') is-invalid @enderror" name="harga" required placeholder="harga" autofocus ">
                                @error('harga')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group">
                                <label>jumlah:</label>
                                <input type="number" class="form-control @error('jumlah') is-invalid @enderror" name="jumlah" required placeholder="jumlah" autofocus ">
                                @error('jumlah')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <button class="btn-succes btn">kirim</button>
                    </form>

                </div>




</section>
@endsection
