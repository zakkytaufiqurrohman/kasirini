@extends('layouts.admin.app')
@section('asset-top')
    <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
@endsection
@section('body')
<section class="content-wrapper">
        <div class="col-xs-12">
            <div class="mt-xl-10">
                <p></p>
            </div>
            <div class="box mt-100 " >
                    @if ($succes = Session::get('succes'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $succes }}</strong>
                    </div>
                    @endif
                    <div class="box-header">
                    <!-- <a href="{{route('produk.create')}}" class="box-title btn-success btn-sm">Add data</a> -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                    <label>select produk:</label>
                        <select name="produk" id="names" class="form-control" required>
                            <option value=""> pilih produk</option>
                            @foreach ($produk as $data)
                                <option value="{{$data->id}}">{{$data->name}}</option>
                            @endforeach

                        </select>
                    </div>
                    <label for="">Harga</label>
                    <input type="text" name='harga' class="total" id="hargas" value="0"><br>
                    <!-- /.box-body -->
                </div>
             <!-- /.box -->
            </div>
        </div>
    </div>
</section>
@endsection
@section('asset-button')
    <script src="{{ asset('assets/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<script>
      $("#names").change(function(){
         
       var id = $(this).val(); 
       $.ajax({
          type: "GET",
          dataType : 'json',
          async : true,
          url: 'transaksi/cari/'+id,
        //   data: "id_provinces="+id,
          success: function(msg){
             $("#hargas").val(msg.harga);                                                       
            //  $("img#load1").hide();
            //  getAjaxKota();     
            console.log(msg);                                                   
          }
       });                    
     });  
</script>
@endsection
