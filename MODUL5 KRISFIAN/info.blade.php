@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 ">
            <div class="card">
                <div class="card-header">{{__('Input Product')}}</div>

                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <div class="x_panel">
<a href="" id="edit_mo0dal" data-toggle="modal" data-target="#mymodal" class="btn btn-primary">Add Product</a>
                        <div class="x_content table-responsive">

                          <table class="table table-striped" id="myTable">

                            <thead>
                              <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Tanggal</th>
                                <th>Action </th>


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
                                    <td> <a href="/info/edit/{{$i->id}}" id="edit_mo0dal" data-toggle="modal" data-target="#mymodal{{$i->id}}" class="btn btn-primary">Edit</a>
                                        <a href="/info/delete/{{$i->id}}" class="btn btn-danger">Delete</a>
                                    </td>


                                </tr>

                                @endforeach

                            </thead>

                          </table>
                        </div>

                        <div id="mymodal" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <!-- konten modal-->
                                <div class="modal-content">
                                    <!-- heading modal -->
                                    <div class="modal-header">
                                        <button type="button"  data-dismiss="modal">&times; </button class="close">
                                        <h2 class="modal-title">Input Barang</h2>

                                    </div>
                                    <!-- body modal -->
                                    <form action="" method="POST">
                                    <div class="modal-body">
                                            {{ csrf_field() }}
                                            {{ method_field('PUT') }}

                                            <input type="hidden" name="id" >
                                                <div class="form-group row">
                                                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                                                    <div class="col-sm-10">
                                                    <input type="text" class="form-control-plaintext" name="nama" required="required" >
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="email" class="col-sm-2 col-form-label">Alamat</label>
                                                    <div class="col-sm-10">
                                                    <input type="text" class="form-control-plaintext" name="email" required="required" >
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="dob" class="col-sm-2 col-form-label">Tanggal</label>
                                                    <div class="col-sm-10">
                                                    <input type="date" class="form-control-plaintext" name="tanggal" required="required" >
                                                    </div>
                                                </div>
                                    </div>
                                    <!-- footer modal -->
                                    <div class="modal-footer">
                                        <button type="submit" value="Update" class="btn btn-success pul-right">Add Product</button>
                                    </div>
                                </form>
                                </div>
                      </div>
                    </div>


                        @foreach($tampil as $i)
                        <div id="mymodal{{$i->id}}" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <!-- konten modal-->
                                <div class="modal-content">
                                    <!-- heading modal -->
                                    <div class="modal-header">
                                        <button type="button"  data-dismiss="modal">&times; </button class="close">
                                        <h2 class="modal-title">Input Barang</h2>

                                    </div>
                                    <!-- body modal -->
                                    <form action="/info/update/{{$i->id}}" method="POST">
                                    <div class="modal-body">
                                            {{ csrf_field() }}
                                            {{ method_field('PUT') }}

                                            <input type="hidden" name="id" value="{{$i->id}} " >
                                                <div class="form-group row">
                                                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                                                    <div class="col-sm-10">
                                                    <input type="text" class="form-control-plaintext" name="nama" required="required" value="{{$i->name}}">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="email" class="col-sm-2 col-form-label">email</label>
                                                    <div class="col-sm-10">
                                                    <input type="text" class="form-control-plaintext" name="email" required="required" value="{{$i->email}}">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="dob" class="col-sm-2 col-form-label">Tanggal</label>
                                                    <div class="col-sm-10">
                                                    <input type="date" class="form-control-plaintext" name="tanggal" required="required" value="{{$i->dob}}">
                                                    </div>
                                                </div>



                                    </div>
                                    <!-- footer modal -->
                                    <div class="modal-footer">
                                        <button type="submit" value="Update" class="btn btn-success pul-right">Update</button>
                                    </div>
                                </form>
                                </div>
                      </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
