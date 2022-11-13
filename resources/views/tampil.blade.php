<!DOCTYPE html>
<html lang="en">
<head> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif
    <table border=3>
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Description</th>
        </tr>
        @foreach($data as $isi)
        <tr>
            <td>
                {{$isi -> id}}
            </td>
            <td>
                {{$isi -> title}}
            </td>
            <td>
                {{$isi -> description}}
            </td>
            <td class="table-info">
                <a href="/delete/{{ $isi -> id}}">
                    <button typer="submit" class="btn btn-danger">Hapus</button>
                </a>
            </td>
        </tr>
    
        @endforeach
    </table>
</body>
</html>