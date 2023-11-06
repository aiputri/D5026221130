<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JavaScript</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
    function changeText() {
        var span = document.getElementById("output"); //mendapatkan object tulisan
        var textBox = document.getElementById("textbox"); //mendapatkan object text box

        textbox.style.color = "green"; // mengganti DOM CSS, color text jadi merah ketika di klik (jika menulis style, maka akan muncul keseluruhan syntax CSS)
        span.innerHTML = textBox.value; // membaca isi text box, dan mengubah tulisan non input
    } 
    </script>

</head>

<body>
    <div class="container">
        <script>
            function showAlert(){
                alert("Selamat anda mendapatkan 100 Juta");
            }
        </script>
    <button class="btn btn-primary" onclick="showAlert()">Klik Disini</button>
    <br>
    <button onclick="changeText();" class="btn btn-warning">Click me!</button>
    <span id="output">replace me</span>
    <input id="textbox" type="text" class="form-control"/>
    </div>
</body>

</html>