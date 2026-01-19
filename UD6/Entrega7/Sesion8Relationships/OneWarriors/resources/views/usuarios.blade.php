<!DOCTYPE html>
<html>
<head>
    <title>Users and Warrior Equipment</title>
</head>
<body>
    <h1>Users and Their Warrior Equipment</h1>

    <ul>
        @foreach($users as $user)
            <li>
                <strong>{{ $user->name }}</strong> — 
                Equipment: {{ $user->championship->warrior_equipment ?? 'No equipment assigned' }}
            </li>
        @endforeach
    </ul>
</body>
</html>