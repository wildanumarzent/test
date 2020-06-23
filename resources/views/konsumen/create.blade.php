@extends('layout.main')

@section('title','Tahmbah Mahasiswa')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1>Tambah Kendaraan</h1>
               <form method="post" action="/konsumen">
               @csrf
                    <div class="form-group">
                        <label for="Nama">Nama konsumen</label>
                        <input type="text" value="{{ old('nama_konsumen')}}" class="form-control @error('nama_konsumen') is-invalid @enderror" name="nama_konsumen" id="nama_konsumen" aria-describedby="nama_konsumen" placeholder="masuan nama_konsumen">
                        @error('nama_konsumen')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="id">jenis kendaraan</label>
                        <select name="jenis_kendaraan" class="form-control">
                            <option value="">==please slect==</option>
                            <option value="motor">motor</option>
                            <option value="mobil">mobil</option>
                        </select>
                         @error('jenis_kelamin')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">no polisi</label>
                        <input type="text" class="form-control" value="{{ old('no_polisi')}}" name="no_polisi" id="no_polisi" aria-describedby="no_polisi" placeholder="masuan no_polisi">
                    </div>
                     <div class="form-group">
                        <label for="jurusan">tanggal lahir</label>
                        <input type="date" class="form-control" value="{{ old('tanggal_lahir')}}" name="tanggal_lahir" id="jurusan" aria-describedby="emailHelp" placeholder="masuan jurusan">
                    </div>

                    <div class="form-group">
                        <label for="id">jenis kelamin</label>
                        <select name="jenis_kelamin" class="form-control">
                            <option value="">==please slect==</option>
                            <option value="laki-laki">laki-laki</option>
                            <option value="perempuan">perempuan</option>
                        </select>
                         @error('jenis_kelamin')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="jurusan">No hp</label>
                        <input type="numeric" class="form-control" value="{{ old('no_hp')}}" name="no_hp" id="no_hp" aria-describedby="no_hp" placeholder="masuan no_hp">
                    </div>

                    <button type="submit" class="btn btn-primary ">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection