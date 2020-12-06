@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <form method="POST" action="/tambah">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                        </div>
                        <div class="form-group">
                            <label>Jenis Lomba</label>
                            <input type="email" class="form-control" name="email"  value="{{ old('email') }}">
                        </div>
                        <div class="form-group">
                            <label>Tanggal Acara</label>
                            <input type="date" class="form-control" name="dob" value="{{ old('dob') }}">
                        </div>
                        <div class="form-group">
                            <label>Keterangan</label>
                            <textarea name="address" class="form-control" cols="30" rows="10">{{ old('addres') }}</textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary">Simpan</button>
                        </div>

                    </form>
                </div>
                @csrf

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <div class+"container">

                        </div>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 ">
            <div class="card">
                <div class="card-header">{{__('Info')}}</div>

                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <div class="x_panel">

                        <div class="x_content table-responsive">

                          <table class="table table-striped" id="myTable">

                            <thead>
                              <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Jenis Lomba</th>
                                <th>Tanggal Acara</th>
                              </tr>
                              @php
                                  $no = 1
                              @endphp
                                @foreach ($tampil as $i)

                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$i->name}} </td>
                                    <td>{{$i->email}} </td>
                                    <td>{{$i->dob}} </td>


                                </tr>

                                @endforeach

                            </thead>

                          </table>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
