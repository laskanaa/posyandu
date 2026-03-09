@extends('layouts.app')

@section('title', 'Login')

@section('content')

    <div class="login-wrapper">

        <div class="login-container">

            <h2 class="login-title">
                Login Sistem Monitoring Posyandu
            </h2>

            <p class="login-subtitle">
                Silakan pilih peran terlebih dahulu
            </p>

            <div class="role-selection">

                <button type="button" onclick="selectRole('kader')" id="btn-kader" class="role-btn">

                    Kader Posyandu

                </button>

                <button type="button" onclick="selectRole('ortu')" id="btn-ortu" class="role-btn">

                    Orang Tua

                </button>

            </div>

            <form method="POST" action="#">
                @csrf

                <input type="hidden" name="role" id="role">

                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" placeholder="Masukkan email" required>
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Masukkan password" required>
                </div>

                <button type="submit" id="login-btn" class="login-btn">
                    Login
                </button>

            </form>

        </div>

    </div>


    <style>
        .login-wrapper {
            min-height: 70vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-container {
            width: 100%;
            max-width: 420px;
            background: white;
            padding: 40px;
            border-radius: 14px;
            box-shadow: 0 10px 35px rgba(0, 0, 0, 0.08);
        }

        .login-title {
            font-weight: 700;
            margin-bottom: 5px;
        }

        .login-subtitle {
            font-size: 14px;
            color: #777;
            margin-bottom: 25px;
        }

        .role-selection {
            display: flex;
            gap: 10px;
            margin-bottom: 25px;
        }

        .role-btn {
            flex: 1;
            padding: 12px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            background: #e5e7eb;
            font-weight: 500;
            transition: 0.3s;
        }

        /* kader aktif */

        .role-btn.kader-active {
            background: #0d4f4d;
            color: white;
        }

        /* ortu aktif */

        .role-btn.ortu-active {
            background: #2563eb;
            color: white;
        }

        .form-group {
            text-align: left;
            margin-bottom: 16px;
        }

        .form-group label {
            font-size: 14px;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border-radius: 6px;
            border: 1px solid #ccc;
            margin-top: 5px;
        }

        .login-btn {
            width: 100%;
            padding: 12px;
            background: #0d4f4d;
            color: white;
            border: none;
            border-radius: 8px;
            margin-top: 10px;
            cursor: pointer;
            font-weight: 500;
            transition: 0.3s;
        }

        .login-btn:hover {
            opacity: 0.9;
        }
    </style>


    <script>

        function selectRole(role) {

            document.getElementById('role').value = role;

            let kaderBtn = document.getElementById('btn-kader');
            let ortuBtn = document.getElementById('btn-ortu');
            let loginBtn = document.getElementById('login-btn');

            kaderBtn.classList.remove('kader-active');
            ortuBtn.classList.remove('ortu-active');

            if (role === 'kader') {

                kaderBtn.classList.add('kader-active');

                loginBtn.style.background = "#0d4f4d";

            } else {

                ortuBtn.classList.add('ortu-active');

                loginBtn.style.background = "#2563eb";

            }

        }

    </script>

@endsection