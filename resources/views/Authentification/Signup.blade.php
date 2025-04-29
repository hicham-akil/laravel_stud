<h1>Signup</h1>
<form action="{{ route('Signup') }}" method="POST">
    @csrf

    <!-- Name Input -->
    <span>Name</span>
    <input type="text" name="name" value="{{ old('name') }}" required>
    @error('name')
        <div class="error">{{ $message }}</div>
    @enderror

    <!-- Email Input -->
    <span>Email</span>
    <input type="email" name="email" value="{{ old('email') }}" required>
    @error('email')
        <div class="error">{{ $message }}</div>
    @enderror

    <!-- Password Input -->
    <span>Password</span>
    <input type="password" name="password" required>
    @error('password')
        <div class="error">{{ $message }}</div>
    @enderror

    <!-- Submit Button -->
    <button type="submit">Sign Up</button>
</form>
