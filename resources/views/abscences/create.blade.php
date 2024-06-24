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
            <div class="entreprise">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" value="{{old('name')}}" class=" @error('name') failed_input @enderror">
            @error('name')
                <br>
                <span style="color: red;"> champ requis</span>
            @enderror
            </div>
            <div class="entreprise">
            <label for="country">Country</label>
            <input type="text" id="country" name="country" value="{{old('country')}}" class=" @error('name') failed_input @enderror">
            @error('country')
                <br>
                <span style="color: red;"> champ requis</span>
            @enderror
            </div>
            <div class="entreprise">
            <label for="town">Town</label>
            <input type="text" id="town" name="town" value="{{old('town')}}" class=" @error('name') failed_input @enderror">
            @error('town')
                <br>
                <span style="color: red;"> champ requis</span>
            @enderror
            </div>
            <div class="entreprise">
            <label for="neighborhood">Neighborhood</label>
            <input type="text" id="neighborhood" name="neighborhood" value="{{old('neighborhood')}}" class=" @error('name') failed_input @enderror">
            @error('neighborhood')
                <br>
                <span style="color: red;"> champ requis</span>
            @enderror
            </div>
            <div class="entreprise">
            <label for="adresses">Adresses</label>
            <input type="text" id="adresses" name="adresses" value="{{old('adresses')}}" class=" @error('name') failed_input @enderror">
            @error('adresses')
                <br>
                <span style="color: red;"> champ requis</span>
            @enderror
            </div>
            <div class="entreprise">
            <label for="user_name">user_name</label>
            <input type="number" id="user_name" name="user_id" value="{{old('user_id')}}" class=" @error('name') failed_input @enderror">
            @error('user_name')
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