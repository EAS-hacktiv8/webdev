<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Kontak Manajemen</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="add.php">Add</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="search.php">Search</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Cari Kontak</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="searchTerm" class="form-label">Search Term</label>
                        <input type="text" class="form-control" id="name" name="searchTerm">
                    </div>
                    <div class="mb-3">
                        <label for="method" class="form-label">Method</label>
                        <select class="form-select" id="method" name="method">
                            <option value="name">Name</option>
                            <option value="email">Email</option>
                        </select>
                    </div>
                    <button type="button" onclick="searchHandler()" class="btn btn-primary">Search</button>
                </form>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>Results</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Birthday</th>
                        </tr>
                    </thead>
                    <tbody id="resultsTable">
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script>
        async function searchHandler() {
            const name = document.getElementById('name').value;
            const method = document.getElementById('method').value;
            const url = `api/contact_search.php?searchTerm=${name}&method=${method}`;
            const result = await fetch(url);
            const response = await result.json();
            const resultsTable = document.getElementById('resultsTable');
            resultsTable.innerHTML = '';
            response.forEach(contact => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <th scope="row">${contact.id}</th>
                    <td>${contact.nama}</td>
                    <td>${contact.email}</td>
                    <td>${contact.nomor_telepon}</td>
                    <td>${contact.tanggal_lahir}</td>
                `;
                resultsTable.appendChild(row);
            })
        }
    </script>
</body>

</html>