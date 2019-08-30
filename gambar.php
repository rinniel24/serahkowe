<!DOCTYPE html>
<html>
<head>
 <script>
 
    function validateFile()
        {   var allowedExtension = ['jpeg', 'jpg'];
            var fileExtension =document.getElementById('img_gb').value.split('.').pop().toLowerCase();
            var isValidFile = false;

                for(var index in allowedExtension) {

                    if(fileExtension === allowedExtension[index]) {
                        isValidFile = true;
                        alert('Tipe file sudah benar')
                        break;
                    }
                }
                if(!isValidFile) {
                    alert('Hanya menerima File Type : *.' + allowedExtension.join(', *.'));
                }

                return isValidFile;
        }
</script>
<script>
   function loadImage() {
      document.getElementById("image").style.display = "block";
      var oFReader = new FileReader();
       oFReader.readAsDataURL(document.getElementById("img_gb").files[0]);
       
      oFReader.onload = function(oFREvent) {
        document.getElementById("image").src = oFREvent.target.result;
    };
  };
</script>
 <title></title>
</head>
<body>

<h1>Upload Gambar</h1>
<br>
Gambar yang akan diupload
<form method="post" action="" enctype="multipart/form-data" >
<input type="file" name="myFile" id="img_gb"  />
<button type="button"onclick="validateFile()">Validasi</button>
</form>
<button type="button"onclick="loadImage()">Upload</button>
<br>
Gambar yang anda input :
<img id="image">
</body>
</html>