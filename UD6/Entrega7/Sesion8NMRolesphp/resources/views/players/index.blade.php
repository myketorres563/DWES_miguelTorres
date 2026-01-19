<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Players & Roles</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  {{-- Pico CSS CDN --}}
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">
</head>
<body>
  <main class="container">
    <header>
      <h1>Players & Roles</h1>
      <p>Many-to-many demo powered by a pivot table.</p>
    </header>

    <article>
      <table role="grid">
        <thead>
          <tr>
            <th>#</th>
            <th>Player</th>
            <th>Level</th>
            <th>Roles</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($players as $i => $player)
            <tr>
              <td>{{ $i + 1 }}</td>
              <td>{{ $player->name }}</td>
              <td>{{ $player->level }}</td>
              <td>
                @if($player->roles->isEmpty())
                  <em>No roles</em>
                @else
                  {{-- Comma-separated role names --}}
                  {{ $player->roles->pluck('name')->join(', ') }}
                @endif
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </article>
  </main>
</body>
</html>