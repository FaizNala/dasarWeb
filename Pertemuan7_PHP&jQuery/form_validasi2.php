<!DOCTYPE html>
<html>
<head>
    <title>Form Input dengan Validasi</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Form Input dengan Validasi</h1>
    <form id="myForm" method="POST" action="proses_validasi.php">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama">
        <span id="nama-error" style="color: red;"></span><br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        <span id="email-error" style="color: red;"></span><br>

        <label for="password">Password:</label>
        <input type="text" id="password" name="password">
        <span id="password-error" style="color: red;"></span><br>

        <input type="submit" value="Submit">
    </form>

    <div id="hasil">
        <!-- Hasil akan ditampilkan disini -->
    </div>

    <script>
        $(document).ready(function() {
            $("#myForm").submit(function(event) {
                event.preventDefault();
                var nama = $("#nama").val();
                var email = $("#email").val();
                var password = $("#password").val();
                var valid = true;

                if (nama == "") {
                    $("#nama-error").text("Nama harus diisi.");
                    valid = false;
                } else {
                    $("#nama-error").text("");
                }

                if (email == "") {
                    $("#email-error").text("Email harus diisi");
                    valid = false;
                } else {
                    $("#email-error").text("");
                }

                if (password == "") {
                    $("#password-error").text("Password harus diisi");
                    valid = false;
                }

                if (!valid) {
                    event.preventDefault();
                    // Menghentikan pengiriman form jika validasi gagal
                }

                // Mengumpulkan data form
                var formData = $("#myForm") .serialize();

                // kirim data ke server PHP
                $.ajax({
                    url : "proses_validasi.php",
                    type : "POST",
                    data :formData,
                    success :function (response) {
                        // Tampilkan hasil dari server di div "hasil"
                        $("#hasil").html(response);
                    }
                })
            });
        });
    </script>
</body>
</html>