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
        

        <h3>Update employer</h3>
        {{ dump($employer) }}
        <form action="{{ route('employers.store') }}" method="post">
            @csrf
            <div class="employer">
            <label for="salaire">Salaire</label>
            <input type="number" id="salaire" name="salaire" value="{{ old('salaire')??$employer->salaire}}" class=" @error('salaire') failed_input @enderror">
            @error('salaire')
                <br>
                <span style="color: red;"> champ requis</span>
            @enderror
            </div> 
            <div class="employer">
            <label for="poste">Poste</label>
            <input type="text" id="poste" name="poste" value="{{ old('poste')??$employer->poste}}" class=" @error('poste') failed_input @enderror">
            @error('poste')
                <br>
                <span style="color: red;"> champ requis</span>
            @enderror
            </div>
            <div class="employer">
            <label for="per_id">Per_id</label>
            <input type="text" id="per_id" name="per_id" value="{{ old('per_id')??$employer->per_id}}"  class=" @error('per_id') failed_input @enderror">
            @error('per_id')
                <br>
                <span style="color: red;"> champ requis</span>
            @enderror
            </div>
    </div>
</body>
</html>