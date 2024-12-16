@extends ('layouts.app')

@section('content')
<div class="container">
    <h2 style="text-align: center; align-items: center; font-family:serif;">Golongan</h2>
    <a href="{{ url('/golongan/create') }}"><button class="btn-sm mb-3" style="background-color:rgb(0, 64, 255); color: white; border: none; padding: 5px 10px; cursor: pointer;" >Tambah Golongan</button></a>
    <table class="table table-bordered" style="box-shadow: 12px 12px 5px rgba(0, 0, 255, .2); border: solid 2px black;">
        <tr style="text-align:center;">
            <th>ID</th>
            <th>KODE</th>
            <th>NAMA</th>
            <th>EDIT</th>
            <th>DELETE</th>
        </tr>
        @foreach ($rows as $row)
        <tr>
            <td>{{ $row->gol_id }}</td>
            <td>{{ $row->gol_kode }}</td>
            <td>{{ $row->gol_nama }}</td>
            <td><a href="{{ url('golongan/' . $row->gol_id . '/edit') }}"><button style="background-color: #ffa500; color: white; border: none; padding: 5px 10px; cursor: pointer;">
    Edit
</button>
</a></td>
                <td>
                    <form action="{{ url('golongan/' . $row->gol_id) }}" method="POST">
                        @method('DELETE')
                        @csrf 
                        <button onclick="return confirm('Apakah anda yakin?')" style="background-color: #f44336; color: white; border: none; padding: 5px 10px; cursor: pointer;">
    Delete
</button>

                    </form>
                </td>
        </tr> 
        @endforeach
    </table>
</div>
@endsection