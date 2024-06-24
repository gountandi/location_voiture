<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style >
        .failed_input{
            border: solid,1px,red;
        }

    </style>
    <div class="container " >
        <h3>Create Entreprise</h3>
        <form action="{{ route('clients.store') }}" method="post">
            @csrf
            <div class="client">
            <label for="numero_carte">Numero_carte</label>
            <input type="text" id="numero_carte" name="numero_carte" value="{{old('numero_carte')}}" class=" @error('numero_carte') failed_input @enderror">
            @error('numero_carte')
                <br>
                <span style="color: red;"> champ requis</span>
            @enderror
            </div>
            <div class="client">
            <label for="user_id">User_id</label>
            <input type="number" id="user_id" name="user_id" value="{{old('user_id')}}" class=" @error('user_id') failed_input @enderror">
            @error('user_id')
                <br>
                <span style="color: red;"> champ requis</span>
            @enderror
            </div>
         
            <button type="submit" >Create</button>
        </form>
        </div>
    </div>
    </div>
</body>
</html>