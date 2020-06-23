@extends('layout.main')

@section('title','Daftar Mahasiswa')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-10">
                <h1>Daftar Konsumen</h1>
                
                <a href="{{url('transaksi/create')}}" class="btn btn-primary mb-3">add konsumen</a>
                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                    
                        <th scope="col">Nama konsumen</th>
                        <th scope="col">jenis kendaraan</th>
                        <th scope="col">no polisi</th>
                        <th scope="col">tanggal masuk</th>
                        <th scope="col">waktu masuk</th>
                        <th scope="col">biaya</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                        <tr>
                          
                           <td>{{$item ->konsumen}}</td>
                           <td>{{$item ->jenis_kendaraan}}</td>
                           <td>{{$item ->no_polisi}}</td>
                           <td>{{$item ->tanggal_masuk}}</td>
                           <td>{{$item ->waktu_masuk}}</td>
                           <td>{{$item ->biaya}}</td>
                           <td>
                               <a href="{{url('konsumen/'.$item->id)}}/edit" class="badge badge-success">Edit</a>
                               <form action="{{url('konsumen/'.$item->id)}}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button type="submit" onclick="return confirm('apakah anda ingin menghapus data ?')" class="badge badge-danger"> <i class="fas fa-trash">delete</i></button>
                              </form>
                           </td>   
                        </tr>
                        @endforeach  
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection