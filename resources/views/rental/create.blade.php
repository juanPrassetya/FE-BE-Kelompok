<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rental Project || create</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
  <!-- <div class="d-flex justify-content-center align-items-center my-4">
    <div class="card my-2" style="border-radius:6% 2%">
       <div class=""> -->
            <!-- <form action="/rental/store" method="post" style="width:500px;">
                @csrf
                    <legend class="text-center mt-3"><b>ADD DATA RENTAL</b></legend>
                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" name="nama" id="" class="form-control" placeholder="Disabled input">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Alamat</label>
                        <input type="text" name="alamat" id="" class="form-control" placeholder="Disabled input">
                    </div>
                    <div class="mb-3">
                            <label for="disabledSelect"  class="form-label">Type</label>
                            <select id="disabledSelect"  name="type" class="form-select">
                            <option value="1-4 orang">1-4 Orang</option>
                            <option value="1-6 orang">1-6 Orang</option>
                        </select>
                    </div>
                        <div class="mb-3">
                        <label for="" class="form-label">Durasi jam</label>
                        <input type="number" id="" name="waktu_jam" class="form-control" placeholder="Disabled input">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Jam mulai</label>
                        <input type="time" id="" name="jam_mulai" class="form-control" placeholder="Disabled input">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Supir</label>
                        <input type="text" id="" name="supir" class="form-control" placeholder="Disabled input">
                    </div>
                    <a href="/rental" class="btn btn-secondary mb-3">Back</a>
                    <button type="submit" class="btn btn-primary mb-3">Submit</button>
            </form>
           </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html> --><form action="/rental/store" method="post" >
    @csrf
<div class="wrapper">
        <div class="logo">
            <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxISEhUSEhISFRUVFxYSFxcXFRUXFxUXFRIWFhUXFRcYHSggGBolGxgVITEiJSkrLi4uFx8zODMtNygtLisBCgoKBQUFDgUFDisZExkrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrK//AABEIAOEA4QMBIgACEQEDEQH/xAAcAAEAAgMBAQEAAAAAAAAAAAAAAQIDBwgGBQT/xABJEAACAQIDBAQJCQUECwAAAAAAAQIDBBESIQUxQVEGBxNhFyIyVHGRk9HTFBZSU4GSlKHwI0JictIzVbGyCBU0RGOChKKks/H/xAAUAQEAAAAAAAAAAAAAAAAAAAAA/8QAFBEBAAAAAAAAAAAAAAAAAAAAAP/aAAwDAQACEQMRAD8A3iAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACuYjEq33EZ/4WBmQIiSAAAAoXMbeu4CcScxjcn9Fk49wFmy0WYs3cy9N92AFwAAAAFZECfoxK5u5gWzE5iifd3hy/hYFky5iT7jKAAAAhkkMChKl+vWVx7iMz+iwMmL/X/0EZe79eoAXAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAENkZgLAjEkACEyQAPA7Z62rC2r1bepTunOlJwk4wg44rk3NYrXkfj8Nmzvq7z2dP4gGyga18Nmzvq7z2dP4hMOurZzaXZ3erw1p08Nef7QDZIPAS63NnpYuNwljJLGNLxsrweX9prqfnqdc+z4pN0rxZlmX7OnqvaAbHBrXw2bO+qvPZ0/iGej1x7OlFzcbqMU1Ft0ovV7tIzb4AbDB5fY3WFsy6ajSu6ak9FCopUpN8kqiWb7MT1CYAAAACuYCwIzE4gAQ2EwJAAAAAAABWRGBM44lXS72AwJwIVIdl3sCV6C5jVLvbMgHKfWPUS2pe4tf28uPdE852sfpL1o7InZUm8XTptvVtxi2/yK/IKX1VP7kfcBxz2sfpL1oyW9eKnFuUcFKLeq4NHYXyCl9VT+5H3D5BS+qp/cj7gOVFfUsZuVanKm5TlkcXmTbeV03wx0YhtWD7KU6qeCcZJ6tTwllqYbmlodUrZtL6un9yPuI/1ZR+rp/cj7gOV1tGmmlKtCVTLNKrhpFyay8NeOuGmJNvtKnHNnqxqSbhhJLc1FrMk142XQ6oezaP1dP7kfcYq2xbeawnRoyXJ04NfamgOR7leM8ZKevlfS79T03RHp9e7PaVOo6lFb6FRtww/ge+m/RpzTNy9JOqfZ9ym6UHbVMNJUvI7s1J+K16Mr7zRvS7onc7Oq9ncRWWWPZ1Y49nUS5PhLnF6rvWoHR/Q7pdbbSo9pQbUo4KpSlhnpt81xT1wktH60vQHIvR3blayuIXNCWE4aNPyZxeGaE+cXh9jSe9I6m6M7cpX1tTuaXk1FqnvhJaShLvTxQH1CjLlHDXEBgRgOy72Oz7wJwJiV7LvZaEMO8CwAAAAAAAAAAAAAAANRdJuuGra3de2jZ05qjN08zrSi5YJPHDI8N58zw61/MaXt5fDPN9POjF9U2ld1KdldThKtKUZRoVJRksFrFpYNHwfmjtHzC8/D1f6QNheHWv5jS9vL4Y8OtfzGl7eXwzXvzR2j5hefh6v9I+aO0fMLz8PV/pA2F4da/mNL28vhjw61/MaXt5fDNe/NHaPmF5+Hq/0j5o7R8wvPw9X+kDYXh1r+Y0vby+GZrTr1lmXa2Cy8XCvjJehSgk/WjW/wA0do+YXn4er/Sfi2jsi5t8PlFvXo5vJ7SnOCl3JySxYHUXRTpbabRpudtUxccM9OSy1KeO7NHlv1WKeG8/T0k2FRvredtXjjGa0f70JLyZwfCSf6wZy10b25UsbmndUm8ab8aPCpB+XTlzTXqeD3o60tLiNSEKkHjGcYzi+akk0/UwORtubKqWlxVtqq8elNwb4SW+M13Si4yXpNi9Qe33TuallJ+JXi6sFyq0142H80P/AFoy/wCkHsxQuba5S1q050pd7pSi4v04VGvsRr7ofeuhf2lVfu3FJP8AlnNQn/2ykB1qAAAAAAAAAAAAAArmGYCwCAAAAACmIFzDdXVOlFzqThCC1cpyUYr0t6I+T0s6SUrC3lXqtaeLCOODnNp5Y44ad74JM506VbTvL+o6lzVjOUfGVCMnlop7lGG7FYrF4t82Bva660dkU3ld5GT/AIKdaovvQg1+Zh8LWx/Opfh7n4Zz5bbOXaxhOUJYtqUYyeZNQk9dOa4H47i3dNpScc2GLSeLj3S0wxA6P8LWx/Opfh7n4Y8LWx/Opfh7n4ZzUAOlfC1sfzqX4e5+GeM61esOwvLJ21tKVWc5wlmdOpBU1CSk3jUSbbSy6fSf26dIckt4CTwWJ1t0QtZUrC0pT8qFvRhLucaUU16zSnVZ1e1LmrG5uqLjbQanBTxi60oyTjhHjT5t6PcsccVv/EDUP+kTVXZ2cOLnVl9kYQT/ADkjT2yYOVxQit7rUkvS6sUj3nXDtL5ZfNQqU1Stl8nUnJ4Oq3mrJYLg1GL/AJD5nVv0cnV2lbqaio0qnbSWOrVDCeKS4Z+zWvMDpkFUywAAAACGBIKYslSAsCub9a+4AUc0R2i7zMRgAiSAAAAAxuWuGpkAGmOnltdbU2nKyoRg6NCEIzlPNkpyl40qjy646xilxydza9bsfq1sKKUq0ZV6rSUpyxgpNYY4Qi8EtFz3bz71rQoWFO5uK04U1Uq1LirUk8Fg5Zaab7oKCS5+k8Rf9d9nCTjSt7irFfv+JTT70pPNh6UgPY0+iGzYyzKytc2rzdjDNi9+uGPFlpdDtmzeaVhaSfN0KbenpR4Lw6W/mVf79L3k+HWh5lcffpe8D3nzH2X/AHfZ+wp+4fMfZf8Ad9n7Cn7jwfh1oeZXH36XvHh1oeZXH36XvA958x9l/wB32fsKfuM9l0UsKMlOlZWsJLdKNGmpL0NLFGvPDrQ8yuPv0veY63XrSw8Sxqt8M1WEV60pP8gNu1Ga/wCsfp9G1hK3tJRndPRvHGNBPjL/AImD0j34vgnrPpH1s7Quk4U3C2pvRqlj2jXJ1Xqv+VRZ4J83q3q297b3tsD6sq0scHCk1KSlg8zSnL97fjrrjw0N2dTWxKlKhO7uMO0rv9msNYUcU9O6UknhyjE8H1XdXU76Ubm5i42kXmUXo7hrckvq+cuO5cWuhoxSWCSSWiXBLkBjU1wxxMoAAAACGSAMWdd5HaLvMwAph6fz95BkAAAAAAAAAAAAaJ6/9tzlc0rNNqnTgq8lwlUm5Ri3/LGLw/nZqunTcnhFOT5JNv1I211/dH5qtSv4punKCoVGv3JRlJ02+SkpNY84pcUaotbmdKcalOcoTg1KMovCUWtzTAv8hq/U1fZz9xWdpUSxdKoktW3CSS9LaOgurPrJhfJW9y4wuktOEa6S1lDlPi4/atMcNhVIKScZJNNNNNYpp6NNcUBxu4Pk/UIwb0SbfcjbPWX1fTts1zaqU7Z6zpLfb85RS8qlprxjv3Y4ardRpvVp/wCD9IE/Iav1NX2c/cWp7OryeEaFeT5KlUb/ACibj6sOtDO42l/PxtI0q8npJvyadV8JcpceOustvgct7I6vNqXLWS0qQi/3637KK72p+M/sizaXRDqbt6DVW9mria1VNLCin3p61PtwXcbSAERikkkkktEluSXBEgAAAAAAAAAAAAAAAAAQ2MSJkIC4MYxAumSY0/19hkAxXdtCrCVOpCM4TTjKMknGSejTT3o576zOredg3cWylO0b13uVvjwnxcOUuG5830SVqQUk4ySaaaaaxTT0aa4oDjeE3FqUW001JNNpxaeKaa1TT1xN8dV3WarnLaXslG48mnUeCjX5J8I1e7dLhroeV60OrJ2ua7souVvrKpSWroc5R50v8vo3azt8M8eWaP8AmQHYzaNLdaPVk457uwhjHyqtCK1jxc6KXDfjD1cj63V51huUnbXs4aScKVdzjr4+EadbF6S3ZZceOur2k/1+YHG+jXd/ibe6rusyVNRtb+TdJNQp3En/AGbfkwrN748p8OOmq+z1hdWsKjneWdKHa4SlOjglGrJ4POluzeViuOPPfqaioJTjVVOLzQ8VPxVLLLDOk9Nd6A6sTx1RJoTq46yZ2U1aXrxt8csJrX5PyWm+j/l9Gi3xSqRlFSi1KMkpJp4pprFNNb0BcAACMSSj3gWxJMYAyNgx4kwAuAAAAAAACs0+DKuL5mQAY1F8xllzMgAxqL4syAAAAAaNX9Iepm2r13WoVnbxl40qSpqcM2Orh4yyp/R1XLDcbQAGoX1HU8f9s/8AHTXqdT0mw+jOx69rRVGpdO4UElCUoZZxiv3ZSzPP3cV3n2wBRxfM8H0v6rba+rdupdhUf9o4wzRq98o4rCXet/E9+ANOy6iov/f2v+nXxD2vQTolW2bB0XeuvQ3xpypZXTk3rklneEXr4uG/dhrj60AAAAKOLx3lwBjyPmMr5mQAY8suZMIvi8S4AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAIzEZiuPeMy5oDIgRFkgAAAK5ixjb7wLZicxjclzJxXMCzkSmUzd6JgwLgAAAAKyYzCbK5lzAtmJzGNNc/16icVzAspFjHm7zIAAAAhkkMCuYlSK5u8jMuYF8wK4/r9IAWyLkOzXI+XCrdcYL7MvvLqrcfR/KPvA+mD8tjOq83aLDXTduw13M/UAAAAjKiQBXIuSGRciwAr2a5EpYEgAAAAAAhojIuRYAVyodmuRYAVUFyLAAAAAAAFci5DIuRYAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAB/9k=" alt="">
        </div>
        <div class="text-center mt-4 name">
            Create Data <br>
        </div><br>
        <form class="p-3 mt-3">
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="nama" id="" placeholder="Username">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="text" name="alamat" id="" placeholder="alamat">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="text" name="tempat_tujuan" id="" placeholder="tempat Tujuan">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="number" name="waktu_jam" id="" placeholder="Durasi Waktu">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="time" name="jam_mulai" id="" placeholder="Jam Mulai">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="time" name="jam_selesai" id="" placeholder="Jam selesai">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="text" name="supir" id="" placeholder="Supir">
            </div>
            
            <div class="">
                            <label for=""  class=""></label>
                            <select id=""  name="type" class="form-field d-flex align-items-center">
                            <option value="1-4 orang">1-4 Orang</option>
                            <option value="1-6 orang">1-6 Orang</option>
                        </select>
                    </div>
                    <button type="submit" class="btn mt-3">Submit</button>
            
        </form>
        <div class="text-center fs-6"><br>
            <a href="/rental">Back To Home</a>
        </div>
    </div>
</form>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>

<style>
/* Importing fonts from Google */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

/* Reseting */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body {
    background: #ecf0f3;
}

.wrapper {
    max-width: 350px;
    min-height: 500px;
    margin: 80px auto;
    padding: 40px 30px 30px 30px;
    background-color: #ecf0f3;
    border-radius: 15px;
    box-shadow: 13px 13px 20px #cbced1, -13px -13px 20px #fff;
}

.logo {
    width: 80px;
    margin: auto;
}

.logo img {
    width: 100%;
    height: 80px;
    object-fit: cover;
    border-radius: 50%;
    box-shadow: 0px 0px 3px #5f5f5f,
        0px 0px 0px 5px #ecf0f3,
        8px 8px 15px #a7aaa7,
        -8px -8px 15px #fff;
}

.wrapper .name {
    font-weight: 600;
    font-size: 1.4rem;
    letter-spacing: 1.3px;
    padding-left: 10px;
    color: #555;
}

.wrapper .form-field input {
    width: 100%;
    display: block;
    border: none;
    outline: none;
    background: none;
    font-size: 1.2rem;
    color: #666;
    padding: 10px 15px 10px 10px;
    /* border: 1px solid red; */
}

.wrapper .form-field {
    padding-left: 10px;
    margin-bottom: 20px;
    border-radius: 20px;
    box-shadow: inset 8px 8px 8px #cbced1, inset -8px -8px 8px #fff;
}

.wrapper .form-field .fas {
    color: #555;
}

.wrapper .btn {
    box-shadow: none;
    width: 100%;
    height: 40px;
    background-color: #03A9F4;
    color: #fff;
    border-radius: 25px;
    box-shadow: 3px 3px 3px #b1b1b1,
        -3px -3px 3px #fff;
    letter-spacing: 1.3px;
}

.wrapper .btn:hover {
    background-color: #039BE5;
}

.wrapper a {
    text-decoration: none;
    font-size: 0.8rem;
    color: #03A9F4;
}

.wrapper a:hover {
    color: #039BE5;
}

@media(max-width: 380px) {
    .wrapper {
        margin: 30px 20px;
        padding: 40px 15px 15px 15px;
    }
}
</style>
