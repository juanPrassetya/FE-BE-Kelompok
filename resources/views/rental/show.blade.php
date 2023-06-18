<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rental Project || Show</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
      <div class="d-flex justify-content-center align-items-center container my-5">
          <div class="card my-4">
            <div class="container">
                <form style="width:400px;">
        <fieldset disabled><br>
          <legend class="text-center mb-3"><b>Data {{$rental ['nama']}}</b></legend>
          <div class="mb-3">
            <label for="disabledTextInput" class="form-label">Nama</label>
            <input type="text" id="disabledTextInput" class="form-control" placeholder="{{$rental['nama']}}">
          </div>
          <div class="mb-3">
            <label for="disabledTextInput" class="form-label">Alamat</label>
            <input type="text" id="disabledTextInput" class="form-control" placeholder="{{$rental['alamat']}}">
          </div>
          <div class="mb-3">
            <label for="disabledSelect"  class="form-label">Type</label>
                <select id="disabledSelect"  name="type" class="form-select"  placeholder="{{$rental['type']}}">
                    <option value="1-4 orang">1-4 Orang</option>
                    <option value="1-6 orang">1-6 Orang</option>
                </select>
          <div class="mb-3">
            <label for="disabledTextInput" class="form-label">Durasi jam</label>
            <input type="number" id="disabledTextInput" class="form-control" placeholder="{{$rental['waktu_jam']}}">
          </div>
          <div class="mb-3">
            <label for="disabledTextInput" class="form-label">Biaya</label>
            <input type="text" id="disabledTextInput" class="form-control" placeholder="{{$rental['total_harga']}}">
          </div>
          <div class="mb-3">
            <label for="disabledTextInput" class="form-label">Jam mulai</label>
            <input type="time" id="disabledTextInput" class="form-control" val ue="{{$rental['jam_mulai']}}">
          </div>
          <div class="mb-3">
            <label for="disabledTextInput" class="form-label">supir</label>
            <input type="text" id="disabledTextInput" class="form-control" placeholder="{{$rental['supir']}}">
          </div>
          <div class="mb-3">
            <label for="disabledTextInput" class="form-label">Jam selesai</label>
            <input type="number" id="disabledTextInput" class="form-control" placeholder="{{$rental['jam_selesai']}}">
          </div>
          <div class="mb-3">
            <label for="disabledTextInput" class="form-label">Tempat tujuan</label>
            <input type="text" id="disabledTextInput" class="form-control" placeholder="{{$rental['tempat_tujuan']}}">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Riwayat perjalanan</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="{{$rental['riwayat_perjalanan']}}"></textarea>
          </div>
        </fieldset>
          <a href="/rental" class="btn btn-secondary mb-3">Back</a>
      </form>
           </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>