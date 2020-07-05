@extends('layouts.master')

@section('content')
    <div class="ml-3 mt-4 mr-3">
        <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Edit Artikel</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
          
            <form role="form" action="/artikel/{{$artikel->id}}" method="POST">
              @csrf
              @method('PUT')

              <div class="card-body">
                <div class="form-group">
                  <label for="judul">Judul</label>
                  <input type="text" class="form-control" id="judul" value="{{$artikel->judul}}" name="judul" placeholder="Enter judul artikel">
                </div>
                <div class="form-group">
                  <label for="isi">Isi</label>
                  <textarea type="text" cols="40" rows="10" class="form-control" id="isi" value="{{$artikel->isi}}" name="isi" placeholder="isi artikel"></textarea>
                </div>
                <div class="form-group">
                    <label for="tanggal_dibuat">Slug</label>
                    <input type="text" class="form-control" id="slug" value="{{$artikel->slug}}" name="slug" placeholder="">
                </div>
                <div class="form-group">
                    <label for="tanggal_diperbaharui">Tag</label>
                    <input type="text" class="form-control" id="tag" value="{{$artikel->tag}}" name="tag" placeholder="">
                </div>
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
        </div>
    </div>


@endsection