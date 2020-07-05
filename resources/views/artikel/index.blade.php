@extends('layouts.master')

@section('content')
<div class="ml-3 mt-4 mr-3">
    <h1>List Artikel</h1>
    <a href="/artikel/create" class="btn btn-primary mb-3">
        Buat Lagi!
    </a>
    <table class="table table-bordered">
        <thead>                  
          <tr>
            <th style="width: 10px">#</th>
            <th>Judul</th>
            <th>Isi</th>
            <th style="width: 40px">Slug</th>
            <th style="width: 40px">Tag</th>
            <th>Tombol</th>
          </tr>
        </thead>
        <tbody>
          @foreach($artikel as $key => $item)
            <tr>
            <td> {{$key+1}} </td>
            <td> {{ $item->judul }} </td>
            <td> {{ $item->isi }} </td>
            <td> {{ $item->slug}} </td>
            <td> {{ $item->tag}} </td>
            <td>
              <a href="/artikel/{{$item->id}}" class="btn btn-sm btn-info">show</a>
              <a href="/artikel/{{$item->id}}/edit" class="btn btn-sm btn-warning">edit</a>
              <form action="/artikel/{{$item->id}}" method="post" style="display:inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
              </form>
            </td>
            </tr>
          @endforeach
          
        </tbody>
      </table>
</div>

@endsection

@push('scripts')
    <script>
        Swal.fire({
        title: 'Berhasil!',
        text: 'Memasangkan script sweet alert',
        icon: 'success',
        confirmButtonText: 'Cool'
        })
    </script>
@endpush