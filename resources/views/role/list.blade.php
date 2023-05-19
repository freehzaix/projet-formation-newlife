<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Liste des Rôles</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    
    <div class="container">
      <div class="row">
        <div class="col">
          <h1>La liste des rôles</h1>
          <a href="{{ route('ajouter_role') }}" class="btn btn-primary"> Ajouter un rôle </a>
        </div>
      </div>
        
        @if (session('status'))
            <div class="alert alert-success"> {{ session('status') }} </div>
        @endif
        <div class="row">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom rôle</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>

                  @php
                   $ite = 1;   
                  @endphp
                    @foreach ($roles as $role)
                    <tr>
                        <th scope="row"> {{ $ite }} </th>
                        <td> {{ $role->nom_role }} </td>
                        <td>
                          <a href="./modifier/{{$role->id}}" class="btn btn-primary">Modifier</a>
                          <a href="./supprimer/{{$role->id}}" class="btn btn-danger">Supprimer</a>
                        </td>
                    </tr> 
                    @php $ite++ @endphp
                    @endforeach
                  
                </tbody>
              </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>