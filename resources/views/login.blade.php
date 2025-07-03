<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <meta charset="utf-8">
</head>
<body>
    <h1>Login</h1>
    <form method="POST" action="{{ url('/login') }}">
        @csrf
        <div>
            <label for="username">Username</label>
            <input id="username" type="text" name="username" value="{{ old('username') }}" required>
        </div>
        <div>
            <label for="password">Password</label>
            <input id="password" type="password" name="password" required>
        </div>
        @error('username')
            <div>{{ $message }}</div>
        @enderror
        <button type="submit">Login</button>
    </form>
</body>
</html>
