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
        function validateFrom(){
            console.log("Ini baris 14");
            return false; //dimanapun ketemu return, akan exit function
            //perintah bawahnya tidak dijalankan
            console.log("Ini baris 16"); //dalam satu function bisa lebih dari satu return
            return true
            console.log("Ini baris 18")
        }
        function validate(){
            var bil1 = document.getElementById("bil1");

            if(bil1.value == "")//isiannya lupa ga diisi
            {
                alert("Bilangan 1 harus diisi");
                bil1.focus();
                return false;
            } 

            if(bil2.value == "")//isiannya lupa ga diisi
            {
                //alert("Bilangan 2 harus diisi");
                bil2.placeholder = "Mohon diisi angka";
                bil2.focus();
                return false;
            }

            if(isNaN(nrp.value))
            {
                alert("NRP harus angka!");
                nrp.focus();
                return false;
            }

            if(nrp.value == "" )
            {
                alert("NRP harus diisi!");
                nrp.focus();
                return false;
            } 

            if(nrp.value.length < 10)
            {
                alert("NRP kurang dari 10 digit!");
                nrp.focus();
                return false;
            } 

            if(nrp.value.length > 10)
            {
                alert("NRP lebih dari 10 digit!");
                nrp.focus();
                return false;
            }

            if(nrp.value.length == 10)
            {
                alert("NRP benar!");
                nrp.focus();
                return true;
            }

        }
    </script>
</head>
<!--true mengikuti hyperlink kalo false tidak-->
<body>
    <div class="container"> 
        <form action="http://www.detik.com" method="post" onsubmit="return validate();"> <!--method get memberikan keluaran yang sama seperti hyperlink-->
            <!--<input type="number" id="bil1" class="form-control" placeholder="Harus diisi" name="bil1"> -->
            <div class="form-group">
                <label for="bil1">Bilangan 1 :</label>
                <input type="number" id="bil1" class="form-control">
            </div>
            <div class="form-group">
                <label for="bil2">Bilangan 2 :</label>
                <input type="number" id="bil2" class="form-control">
            </div>
            <div class="form-group">
                <label for="nrp">Masukan NRP :</label>
                <input type="text" id="nrp" class="form-control">
            </div>
            <input type="submit" value="KIRIM" class="btn btn-primary">
        </form>
    </div>
</body>

</html>

<!--Function
1. void -> no return value
2. function -> return value--> 