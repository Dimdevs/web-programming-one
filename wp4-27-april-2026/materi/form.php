<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        * {
            margin: 0;
            padding: 0;
        }

        .container {
            display: flex;
            height: 100vh;
            justify-content: center;
            align-items: center;
        }

        .form {
            width: 400px;
        }

        .form-group .form-control {
            display: block;
            width: 100%;
            height: 30px;
            margin-bottom: 20px;
        }

        .form-radio {
            display: flex;
            gap: 5px;
        }
    </style>
</head>

<body>

    <div class="container">
        <form action="/proses.php" method="post" class="form">
            <div class="form-group">
                <label for="name">Nama</label>
                <input type="text" id="name" class="form-control" name="name">
            </div>
            <div class="form-group">
                <label for="description">Deskripsi</label>
                <textarea name="description" class="form-control" id="description"></textarea>
            </div>
            <div class="form-group">
                <label for="gender">Gender</label>
                <div class="form-radio">
                    <input type="radio" name="gender" class="form-radio" value="Laki - Laki">
                    <label for="gender">Laki - Laki</label>
                </div>
                <div class="form-radio">
                    <input type="radio" name="gender" class="form-radio" value="Perempuan">
                    <label for="gender">Perempuan</label>
                </div>
            </div>
            <div class="form-group">
                <label for="education">Education</label>
                <select class="form-control" name="education" id="education">
                    <option value="SD">SD</option>
                    <option value="SMP">SMP</option>
                    <option value="SMA">SMA</option>
                </select>
            </div>

            <div class="form-group">
                <label for="hobby">Hobby</label>
                <input type="checkbox" class="form-checkbox" name="hobby1" id="hobby1" value="Olahraga"> Olahraga <br>
                <input type="checkbox" class="form-checkbox" name="hobby2" id="hobby2" value="Makan"> Makan <br>
                <input type="checkbox" class="form-checkbox" name="hobby3" id="hobby3" value="Tidur"> Tidur
            </div>

            <input type="submit" class="btn btn-primary" value="Simpan">
            <input type="reset" value="Batal">
        </form>
    </div>
</body>

</html>