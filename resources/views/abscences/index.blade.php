<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>{{$title}}</h1>
    <form action="{{route('abscences.create')}}" method="get">
        @csrf
        <button type="submit" style="background-color: aqua; color:white;padding:3px;">Ajouter</button>
    </form>   

    <table border="1">
        <thead>

            <tr>
                <th>date_absence</th>
                <th>justificatif</th>
                <th>employer</th>
                
            </tr>
        </thead>
        <tbody>
            @forelse($liste_abscence as $une_abscence)
            
            <tr>
                <td>{{$une_abscence->date_absence}}</td>
                <td>{{$une_abscence->justificatif}}</td>
                <td>{{$une_abscence->employer->name}}</td>
                
                <td>
                        <a href="{{route('abscences.edit',$une_abscence)}}">
                        <button type="submit" style="background-color: blue; color:white;padding:3px;">Editer</button>
                        </a>
                      
                      
                        <th>date_absence</th>


                    <form action="{{route('abscences.destroy',$une_abscence)}}" method="post">

                        @csrf
                        @method("DELETE")
                        <button type="submit" style="background-color: red; color:white;padding:3px;">supprimer</button>
                        
                    </form>   
                </td>
            </tr>
            @empty
            <p>Aucune entreprise</p>
            @endforelse
        </tbody>
    </table>
</body>
</html>