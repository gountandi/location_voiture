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
        <form action="{{ route('entreprises.store') }}" method="post">
            @csrf
            <div class="emplyer">
            <label for="salaire">Name</label>
            <input type="number" id="salaire" name="salaire" value="{{old('salaire')}}" class=" @error('salaire') failed_input @enderror">
            @error('salaire')
                <br>
                <span style="color: red;"> champ requis</span>
            @enderror
            </div>
            <div class="employer">
            <label for="poste">Poste</label>
            <input type="text" id="poste" name="poste" value="{{old('poste')}}" class=" @error('poste') failed_input @enderror">
            @error('poste')
                <br>
                <span style="color: red;"> champ requis</span>
            @enderror
            </div>
            <div class="employer">
            <label for="per_id">Per_id</label>
            <input type="number" id="per_id" name="per_id" value="{{old('per_id')}}" class=" @error('per_id') failed_input @enderror">
            @error('per_id')
                <br>
                <span style="color: red;"> champ requis</span>
            @enderror
            </div>
            
    </div>
</body>
</html>