@extends('layouts.app')

@section('title', 'Login')

@section('content')

    <div class="login-container">

        <h2>Login Sistem Monitoring Posyandu</h2>

        <div class="role-selection">
            <button onclick="selectRole('kader')" id="btn-kader">Kader Posyandu</button>
            <button onclick="selectRole('ortu')" id="btn-ortu">Orang Tua</button>
        </div>

        <form method="POST" action="#">
            @csrf
            <input type="hidden" name="role" id="role">

            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" required>
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" required>
            </div>

            <button type="submit" class="login-btn">Login</button>
        </form>

    </div>

    <style>
        .login-container {
            max-width: 400px;
            margin: 60px auto;
            padding: 40px;
            background: white;
            border-radius: 12px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
            text-align: center;
        }

        .login-container h2 {
            margin-bottom: 25px;
        }

        .role-selection {
            display: flex;
            gap: 10px;
            margin-bottom: 25px;
        }

        .role-selection button {
            flex: 1;
            padding: 10px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            background: #e0e0e0;
            transition: 0.3s;
        }

        .role-selection button.active {
            background: #0d4f4d;
            color: white;
        }

        .form-group {
            text-align: left;
            margin-bottom: 15px;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border-radius: 6px;
            border: 1px solid #ccc;
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
        }

        .login-btn:hover {
            background: #0a3c3a;
        }
    </style>

    <script>
        function selectRole(role) {
            document.getElementById('role').value = role;

            document.getElementById('btn-kader').classList.remove('active');
            document.getElementById('btn-ortu').classList.remove('active');

            if (role === 'kader') {
                document.getElementById('btn-kader').classList.add('active');
            } else {
                document.getElementById('btn-ortu').classList.add('active');
            }
        }
    </script>

@endsection