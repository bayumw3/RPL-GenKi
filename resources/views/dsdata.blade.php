<!-- resources/views/dsdata.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Listrik</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f5f5f5;
            font-family: Arial, sans-serif;
        }
        .table-container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .table th, .table td {
            text-align: center;
            vertical-align: middle;
        }
        .btn-primary {
            display: block;
            margin: 20px auto;
        }
    </style>
</head>
<body>
    <div class="table-container">
        <h3 class="text-center">Data Listrik</h3>
        
        <form action="{{ route('data-listrik.store') }}" method="POST">
            @csrf
            <table class="table table-bordered">
                <thead>
                    <tr class="bg-primary text-white">
                        <th>No</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Daya Listrik</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($dataListriks as $index => $data)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td><input type="date" name="data[{{ $index }}][date]" class="form-control" value="{{ $data->date }}"></td>
                        <td><input type="time" name="data[{{ $index }}][time]" class="form-control" value="{{ $data->time }}"></td>
                        <td><input type="text" name="data[{{ $index }}][daya_listrik]" class="form-control" value="{{ $data->daya_listrik }}"></td>
                        <td>
                            <select name="data[{{ $index }}][status]" class="form-control">
                                <option value="Updated" {{ $data->status == 'Updated' ? 'selected' : '' }}>Updated</option>
                                <option value="Not Updated" {{ $data->status == 'Not Updated' ? 'selected' : '' }}>Not Updated</option>
                            </select>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <button type="submit" class="btn btn-primary">Simpan Data</button>
        </form>
    </div>
</body>
</html>
