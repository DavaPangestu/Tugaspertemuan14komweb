<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(120deg, #89f7fe, #66a6ff);
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .form-container {
            background: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            width: 100%;
        }

        h1 {
            font-size: 2rem;
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
            margin-top: 10px;
            display: block;
            color: #555;
        }

        input, select {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
        }

        button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 12px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
            margin-top: 15px;
            width: 100%;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0056b3;
        }

        a {
            display: block;
            text-align: center;
            margin-top: 15px;
            color: #007bff;
            text-decoration: none;
            font-size: 0.9rem;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>Edit Profil</h1>
        <form action="{{ route('biodatas.update', $biodata->id) }}" method="POST">
            @csrf
            @method('PUT')

            <label for="first_name">Nama Depan:</label>
            <input type="text" name="first_name" id="first_name" value="{{ $biodata->first_name }}" placeholder="Masukkan nama depan" required>

            <label for="last_name">Nama Belakang:</label>
            <input type="text" name="last_name" id="last_name" value="{{ $biodata->last_name }}" placeholder="Masukkan nama belakang" required>

            <label for="gender">Jenis Kelamin:</label>
            <select name="gender" id="gender" required>
                <option value="male" {{ $biodata->gender == 'male' ? 'selected' : '' }}>Laki-Laki</option>
                <option value="female" {{ $biodata->gender == 'female' ? 'selected' : '' }}>Perempuan</option>
            </select>

            <button type="submit">Simpan Perubahan</button>
        </form>
        <a href="{{ route('biodatas.index') }}">Kembali ke Daftar Profil</a>
    </div>
</body>
</html>
