<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ajouter un Rôle</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    
    <div class="container">
        <h1>Ajouter un rôle</h1>
        @if (session('status'))
            <div class="alert alert-success"> {{ session('status') }} </div>
        @endif
        <div class="row">
            <form action="{{ route('ajouter_role_post') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="role" class="form-label">Rôle</label>
                    <input type="text" class="form-control" name="nom_role" id="role" placeholder="Saisir le libellé du rôle">
                  </div>
                  <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Ajouter le rôle</button>
                    &nbsp; &nbsp;
                    <a href="{{ route('list_role') }}" class="btn btn-info"> Afficher la liste </a>
                  </div>
            </form>
            
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>