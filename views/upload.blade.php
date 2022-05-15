<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Upload</title>
        <link rel="stylesheet" href="assets/css/sty.css">            
    
    </head>
    <body>
        <div class="kotak">
          <div class="jdlh3">Upload Dokumen </div>
            <form action="proses.php" method="post">
                <label></label><br>
                <div class="form-group" style="user-select: auto;">
                    <label class="judul" style="user-select: auto; ">Tahun Kurikulum</label><br>
                    <div class="col-sm-6  " style="user-select: auto;">
                    <select  class="form-control"  aria-required="true" style="user-select: auto; width: 90%; height: 15%; margin-top:15px; margin-bottom: 15px;">
                    <option value="" style="user-select: auto;">Select...</option>
                    <option value="1" style="user-select: auto;">2019</option>
                    <option value="2" style="user-select: auto;">2020</option>
                    <option value="3" style="user-select: auto;">2021</option>
                    <option value="4" style="user-select: auto;">2022</option>
                    <option value="8" selected="" style="user-select: auto;">2019</option>
                    </select>
                    </div>
          
                        <label class="judul">Prodi dan Jenjang</label>
                        <div class="col-sm-6  " style="user-select: auto;">
                        <select  class="form-control"  aria-required="true" style="user-select: auto; width: 90%; height: 15%; margin-top:13px; margin-bottom: 15px;">
                        <option value="" style="user-select: auto;">Select...</option>
                        <optgroup label="DIII" style="user-select: auto;">
                        <option value="1" style="user-select: auto;">Teknologi Informasi</option>
                        <option value="3" style="user-select: auto;">Teknologi Komputer</option>
                        </optgroup>
                        <optgroup label="DIV" style="user-select: auto;">
                        <option value="4" style="user-select: auto;">Teknologi Rekayasa Perangkat Lunak</option>
                        </optgroup>
                        <optgroup label="S1" style="user-select: auto;">
                        <option value="6" style="user-select: auto;">Informatika</option>
                        <option value="10" style="user-select: auto;">Manajemen Rekayasa</option>
                        <option value="9" style="user-select: auto;">Sistem Informasi</option>
                        <option value="8" style="user-select: auto;">Teknik Bioproses</option>
                        <option value="7" style="user-select: auto;">Teknik Elektro</option>
                        </optgroup>
                        </select>
                        </div>
                        </div>
                        
                <label></label>
                <div class="file"> <input type="file" name="files" multiple> </div>
                <a href="masukan"><button>Upload</a> 

                <p><a class="back" href="/prodi">back to menu</a></p>

                </div>
            </form>
        </div>
    </body>
</html>