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
        

        <h3>Update Entreprise</h3>
        {{ dump($entreprise) }}
        <form action="{{ route('entreprises.store') }}" method="post">
            @csrf
            <div class="entreprise">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" value="{{ old('name')??$entreprise->name}}" class=" @error('name') failed_input @enderror">
            @error('name')
                <br>
                <span style="color: red;"> champ requis</span>
            @enderror
            </div>
            <div class="entreprise">
            <label for="country">Country</label>
            <input type="text" id="country" name="country" value="{{ old('country')??$entreprise->name}}" class=" @error('name') failed_input @enderror">
            @error('country')
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