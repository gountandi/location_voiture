<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>{{$title}}</h1>
    <form action="{{route('entreprises.create')}}" method="get">
        @csrf
        <button type="submit" style="background-color: aqua; color:white;padding:3px;">Ajouter</button>
    </form>   

    <table border="1">
        <thead>

            <tr>
                <th>salaire</th>
                <th>poste</th>
                <th>personne</th>
               
            </tr>
        </thead>
        <tbody>
            @forelse($liste_entreprises as $une_entreprise)
            
            <tr>
                <td>{{$une_entreprise->salaire}}</td>
                <td>{{$une_entreprise->poste}}</td>
                <td>{{$une_entreprise->personne->name}}</td>
                <td>
                        <a href="{{route('entreprises.edit',$une_entreprise)}}">
                        <button type="submit" style="background-color: blue; color:white;padding:3px;">Editer</button>
                        </a>
                      
                      


                    <form action="{{route('entreprises.destroy',$une_entreprise)}}" method="post">

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