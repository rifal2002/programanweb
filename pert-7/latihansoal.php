<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pengiriman Pesan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }
        h2 {
            margin-bottom: 20px;
        }
        form {
            max-width: 400px;
            margin: auto;
        }
        label {
            display: block;
            margin-bottom: 10px;
        }
        input[type="text"], textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        button[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h2>Formulir Pengiriman Pesan</h2>
    <form id="contactForm" action="submit.php" method="post">
        <label for="name">Nama:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email" required>

        <label for="message">Pesan:</label>
        <textarea id="message" name="message" rows="4" required></textarea>

        <button type="submit" id="submitBtn">Kirim</button>
    </form>
    
    <script>
        document.getElementById("contactForm").addEventListener("submit", function(event){
            var name = document.getElementById("name").value;
            var email = document.getElementById("email").value;
            var message = document.getElementById("message").value;

            // Penggunaan IF untuk validasi
            if(name === "" || email === "" || message === "") {
                alert("Harap isi semua kolom!");
                event.preventDefault(); // Mencegah pengiriman formulir jika ada kolom yang kosong
            } else {
                // Lakukan pengiriman formulir
                // Biasanya menggunakan AJAX atau langsung redirect ke halaman "submit.php"
                // Di sini kita hanya menampilkan pesan sukses
                alert("Pesan berhasil dikirim!");
            }
        });
    </script>
</body>
</html>
