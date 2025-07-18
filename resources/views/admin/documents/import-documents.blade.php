<!DOCTYPE html>
<html>
<head>
    <title>Import Documents</title>
</head>
<body>
    <h1>Import Documents CSV</h1>
    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif
    <form method="POST" action="/import-documents" enctype="multipart/form-data">
        @csrf
        <input type="file" name="csv_file" required>
        <button type="submit">Import</button>
    </form>
</body>
</html>
