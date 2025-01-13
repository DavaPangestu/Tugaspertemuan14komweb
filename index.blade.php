<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Profil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(120deg, #f6d365, #fda085);
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        .table-container {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            margin: 0 auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            text-align: center;
            border: 1px solid #ddd;
        }

        th {
            background-color: #f5f5f5;
            font-weight: bold;
        }

        a.btn {
            text-decoration: none;
            padding: 5px 10px;
            color: #fff;
            border-radius: 5px;
            font-size: 0.9rem;
        }

        a.btn-primary {
            background-color: #007bff;
            margin-right: 5px;
        }

        a.btn-primary:hover {
            background-color: #0056b3;
        }

        button {
            background-color: #dc3545;
            color: #fff;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 0.9rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #c82333;
        }

        a[href] {
            text-decoration: none;
            color: #007bff;
        }

        a[href]:hover {
            text-decoration: underline;
        }

        .add-button {
            display: block;
            text-align: right;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="table-container">
        <h1>Data Profil</h1>
        <div class="add-button">
            <a href="{{ route('biodatas.create') }}" class="btn btn-primary">Tambah Data Profil</a>
        </div>
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama Depan</th>
                    <th>Nama Belakang</th>
                    <th>Jenis Kelamin</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($biodatas as $biodata)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $biodata->first_name }}</td>
                        <td>{{ $biodata->last_name }}</td>
                        <td>{{ ucfirst($biodata->gender) }}</td>
                        <td>
                            <a href="{{ route('biodatas.edit', $biodata->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('biodatas.destroy', $biodata->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
