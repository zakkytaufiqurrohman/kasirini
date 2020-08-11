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
                    <form action="{{route('produk.update',$data->id)}}" method="post">
                        @csrf
                        <input type="hidden" name="_method" value="PATCH">
                        <div class="form-group">
                            <label>nama:</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" required value="{{$data->name}}" autofocus ">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                                <label>harga:</label>
                                <input type="text" class="form-control @error('jumlah') is-invalid @enderror" name="jumlah" required value="{{$data->jumlah}} ">
                                @error('jumlah')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                                <label>harga:</label>
                                <input type="text" class="form-control @error('harga') is-invalid @enderror" name="harga" required value="{{$data->harga}} ">
                                @error('harga')
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
