<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>{{$title}}</h1>
    <form action="{{route('clients.create')}}" method="get">
        @csrf
        <button type="submit" style="background-color: aqua; color:white;padding:3px;">Ajouter</button>
    </form>   

    <table border="1">
        <thead>

            <tr>
                <th>numero_carte</th>
                <th>user_id</th>
            </tr>
        </thead>
        <tbody>
            @forelse($liste_clients as $un_client)
            
            <tr>
                <td>{{$un_client->numero_carte}}</td>
                <td>{{$un_client->user->name}}</td>
                <td>
                        <a href="{{route('clients.edit',$un_client)}}">
                        <button type="submit" style="background-color: blue; color:white;padding:3px;">Editer</button>
                        </a>
                      
                      


                    <form action="{{route('clients.destroy',$un_client)}}" method="post">

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