<form action="{{ route('Signin') }}" method="POST">
    @csrf
    <span>Email</span>
    <input type="email" name="email" required>

    <span>Password</span>
    <input type="password" name="password" required>

    <button type="submit">Signin</button>
</form>
