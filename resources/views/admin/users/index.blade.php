<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuários</title>
</head>
<body>
    <h1>Tabela de usuários</h1>
    
    
<table>
        <thead>
            <tr>
                <th>Nome do Usuario</th>
                <th>Email</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $user)
            <tr>
                <td>{{  $user->name  }}</td>
                <td>{{  $user->email  }}</td>
                <td>-</td>
            </tr>

            @empty
            <tr>
                <td colspan="100">Nenhum usuário foi encontrado</td>
            </tr>
            
           
            @endforelse
        </tbody>
    </table>

    {{$users->links()}}
</body>
</html>