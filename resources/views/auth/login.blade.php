@extends('main')

@section('content')
<main>
    <div class="container-xxl py-5">
        <div class="container">
            @if(session('pesan') == 'gagal')
                <div class="alert alert-danger text-center mb-4">Email dan Password tidak sesuai!</div>
            @endif

            <div class="row justify-content-center pt-5">
                <div class="col-lg-4 col-md-6">
                    <div class="bg-white rounded p-4 shadow-sm login-form">
                        <h2 class="text-center mb-4">Form Login</h2>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="Email" required>
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
                            </div>

                            <!-- Checkbox untuk Lihat Password -->
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="show-password" onclick="togglePassword()">
                                <label class="form-check-label" for="show-password">Lihat Password</label>
                            </div>

                            <button type="submit" class="btn text-light w-100 small-btn" style="background-color: #6a75f3">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection

<script>
    function togglePassword() {
        var passwordInput = document.getElementById("password");
        if (passwordInput.type === "password") {
            passwordInput.type = "text";
        } else {
            passwordInput.type = "password";
        }
    }
</script>

<style>
    .login-form {
        max-width: 400px;
        margin-top: 30px;
        margin-bottom: 30px;
        padding: 20px;
        border: 1px solid #dee2e6;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .small-btn {
        font-size: 0.875rem;
        padding: 0.5rem 1rem;
        background-color: #007bff;
        border: none;
    }

    .small-btn:hover {
        background-color: #0056b3;
    }
</style>
