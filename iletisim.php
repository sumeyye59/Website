<?php include "header.html"; ?>
<div class="jumbotron mb-0">

  <div id="formDiv" class="container shadow-lg col-md-6 text-white">
    <br>
    <form   method="POST" id="iletisimFormu" name="iletisimFormu" onsubmit="return false">
      <div class="form-row">
	  
        <div class="col-md-6 mb-3">
          <label for="validationCustom01">Ad</label>
          <input type="text" name="ad" id="ad" class="form-control" placeholder="Ad" value="">
          <label id="adKontrol" class="lblerr"></label>
        </div>

        <div class="col-md-6 mb-3">
		
          <label for="validationCustom02">Soyad</label>
          <input type="text" name="soyad" id="soyad" class="form-control" placeholder="Soyad" value="">
          <label id="soyadKontrol" class="lblerr"></label>
        </div>
      </div>

      <div class="form-row">

       


        <div class="col-md-6 mb-3">
		
          <label for="validationCustom05">Email</label>
          <input type="text" name="email" id="email" class="form-control" placeholder="Email">
          <label id="mailKontrol" class="lblerr"></label>
        </div>
 <div class="col-md-6 mb-3">
          <label for="validationCustom03">Telefon</label>
		  
          <input type="tel" name="telefon" id="telefon" class="form-control" placeholder="05xx-xxx-xxxx">
          <label  class="lblerr" id="telefonKontrol"></label>
        </div>
      </div>

      <fieldset class="form-group">
	  
        <div class="row">
		
          <legend class="col-form-label col-sm-2 pt-0">Cinsiyet</legend>
          <div class="col-sm-10">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="cinsiyet" id="erkek" value="erkek">
              <label class="form-check-label" for="erkek">
                Erkek
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio"  id="kadın" name="cinsiyet" value="kadın">
			  
              <label class="form-check-label" for="kadın">
                Kadın
              </label>
            </div>
          </div>
        </div>
        <label id="cinsiyetKontrol" class="lblerr"></label>
      </fieldset>

      <textarea class="form-control" cols="0" rows="0" id="cinsiyet" name="cinsiyet"></textarea>

      <div class="form-group row">
        <label for="example-date-input" class="col-3 col-form-label">Doğum Tarihiniz</label>
        <div class="col-9">
          <input class="form-control" type="date" id="dogum" name="dogum">
          <label id="dogumKontrol" class="lblerr"></label>
        </div>
      </div>

      <div class="form-group">
        <label for="exampleFormControlSelect1" >Programınız</label>
        <select class="form-control" id="program" name="program">
          <option value="Önlisans">Önlisans</option>
		  
          <option value="Lisans">Lisans</option>
          <option value="Yükseklisans">Yükseklisans</option>
        
        </select>
        <label  class="lblerr" id="progKontrol"></label>
      </div>

      <div class="form-group">
        <label for="exampleFormControlTextarea1">Mesaj</label>
        <textarea   id="mesaj" name="mesaj" class="form-control" rows="3"></textarea>
        <label id="mesajKontrol" class="lblerr"></label>
      </div>

      <div class="form-row">

        <div class="col-md-4 mb-3">
          <div class="form-check">
            <input class="form-check-input" type="checkbox"  name="check" value="" id="check">
            <label class="form-check-label" for="invalidCheck">
              Koşulları kabul ediyorum.
            </label>
          </div>
        </div>

        <div class="col-md-8 mb-3">
          <label id="kosulKontrol" class="lblerr"></label>
        </div>

      </div>

      <button class="btn btn-success mr-4" onclick="formKontrol()">Gönder</button>
      <button class="btn btn-primary" type="reset">Temizle</button>

    </form>
    <br>
  </div>

</div>


<script src="js/Form.js"></script>
<?php include "footer.php"; ?>
