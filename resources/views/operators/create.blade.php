@include('template.header')

@include('template.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>OPERATORS</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">CREATE OPERATOR</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="{{ route('operators.store') }}" method="POST" enctype="multipart/form-data">
                        
                    @csrf

                    <div class="form-group">
                        <label class="font-weight-bold">NAMA</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" placeholder="Masukkan Nama Operator">
                    
                        <!-- error message untuk nama -->
                        @error('nama')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="font-weight-bold">ALAMAT</label>
                        <textarea class="form-control @error('alamat') is-invalid @enderror" name="alamat" placeholder="Masukkan Alamat">{{ old('alamat') }}</textarea>

                        <!-- error message untuk alamat -->
                        @error('alamat')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="font-weight-bold">NO TELEPON</label>
                        <input type="text" class="form-control @error('no_telepon') is-invalid @enderror" name="no_telepon" value="{{ old('no_telepon') }}" placeholder="Masukkan No Telepon">

                        <!-- error message untuk no_telepon -->
                        @error('no_telepon')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="font-weight-bold">KETERANGAN</label>
                        <textarea class="form-control @error('keterangan') is-invalid @enderror" name="keterangan" placeholder="Masukkan Keterangan">{{ old('keterangan') }}</textarea>

                        <!-- error message untuk keterangan -->
                        @error('keterangan')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                    <button type="reset" class="btn btn-md btn-warning">RESET</button>
                    <a href="{{ route('operators.index') }}" class="btn btn-md btn-danger">KEMBALI</a>

                </form> 
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

@include('template.footer')