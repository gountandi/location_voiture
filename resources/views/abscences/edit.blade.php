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
        <form action="{{ route('abscences.store') }}" method="post">
            @csrf
            <div class="abscence">
            <label for="date_absence">Date_absence</label>
            <input type="text" id="date_absence" name="date_absence" value="{{ old('date_absence')??$abscence->date_absence}}" class=" @error('date_absence') failed_input @enderror">
            @error('date_absence')
                <br>
                <span style="color: red;"> champ requis</span>
            @enderror
            </div>
            <div class="abscence">
            <label for="justificatif">Justificatif</label>
            <input type="text" id="justificatif" name="justificatif" value="{{ old('justificatif')??$abscence->justificatif}}" class=" @error('justificatif') failed_input @enderror">
            @error('justificatif')
                <br>
                <span style="color: red;"> champ requis</span>
            @enderror
            </div>
            <div class="entreprise">
            <label for="emp_id">Emp_id</label>
            <input type="text" id="emp_id" name="emp_id" value="{{ old('emp_id')??$abscence->emp_id}}"  class=" @error('emp_id') failed_input @enderror">
            @error('emp_id')
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