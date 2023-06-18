<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rental Project|| Juan Prasetya</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" 
   
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  </head>
  <body>


  <body>
<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-5">
                        <h2><b>RENTAL PROJECT</b></h2>
                    </div>
                    <div class="col-sm-7">
                        <a href="/rental/create" class="btn btn-secondary"><i class="material-icons">&#xE147;</i> <span>Add New Data</span></a>
                        					
                    </div>
                </div>
            </div>
            <table class="table table-bordered table-info my-4">
                <thead>
                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Nama</th>
                        <th class="text-center">Alamat</th>
                        <th class="text-center">Type</th>
                        <th class="text-center">Waktu</th>
                        <th class="text-center">Biaya</th>
                        <th class="text-center">Jam mulai</th>
                        <th class="text-center">Supir</th>
                        <th width="115" class="text-center">Jam selesai</th>
                        <th width="126" class="text-center">Tempat tujuan</th>
                        <th class="text-center">Riwayat perjalanan</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach($rental as $item)
                  <tr>
                    <td class="text-center">{{$loop->iteration}}</td>
                    <td>{{$item['nama']}}</td>
                    <td width="160" >{{$item['alamat']}}</td>
                    <td class="text-center">{{$item['type']}}</td>
                    <td class="text-center">{{$item['waktu_jam']}} Jam</td>
                    <td class="text-center">Rp.{{$item['total_harga']}}</td>
                    <td width="100" class="text-center">{{$item['jam_mulai']}}</td>
                    <td class="text-center">{{$item['supir']}}</td>
                    <td width="100" class="text-center">{{$item['jam_selesai']}}</td>
                    <td class="text-center">{{$item['tempat_tujuan']}}</td>
                    <td>{{$item['riwayat_perjalanan']}}</td>
                    <td width="20">
                        <form action="/rental/delete/{{$item ['id']}}" method="post" class="mt-1 ">
                            <a href="/rental/{{$item['id']}}" class="btn btn-warning bi bi-eye"></a> 
                            <a href="/rental/edit/{{$item['id']}}" class="btn btn-white bi bi-clipboard-plus"></a> 
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger bi bi-x-octagon"></button>
                        </form>
                    </td>
                  </tr>
                </tbody>
                @endforeach
                
               <br><br>
               
            </table><br>
            
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
            <div class="hint-text mu-10">@ wajib_ngulik</div> <br> <br>

           

            <form action="" method="post">
              <input type="text" name="keyword" size="40" autofocus placeholder="Masukan Keyword">
              <button type="submit" name="cari" class="mr-10" >Cari</button> 
            </form>
            <style>
body {
    color: #566787;
    background: #f5f5f5;
    font-family: 'Varela Round', sans-serif;
    font-size: 13px;
}
.table-responsive {
    margin: 30px 0;
}
.table-wrapper {
    min-width: 1000px;
    background: #fff;
    padding: 20px 25px;
    border-radius: 3px;
    box-shadow: 0 1px 1px rgba(0,0,0,.05);
}
.table-title {
    padding-bottom: 15px;
    background: #299be4;
    color: #fff;
    padding: 16px 30px;
    margin: -20px -25px 10px;
    border-radius: 3px 3px 0 0;
}
.table-title h2 {
    margin: 5px 0 0;
    font-size: 24px;
}
.table-title .btn {
    color: #566787;
    float: right;
    font-size: 13px;
    background: #fff;
    border: none;
    min-width: 50px;
    border-radius: 2px;
    border: none;
    outline: none !important;
    margin-left: 10px;
}
.table-title .btn:hover, .table-title .btn:focus {
    color: #566787;
    background: #f2f2f2;
}
.table-title .btn i {
    float: left;
    font-size: 21px;
    margin-right: 5px;
}
.table-title .btn span {
    float: left;
    margin-top: 2px;
}
table.table tr th, table.table tr td {
    border-color: #e9e9e9;
    padding: 12px 15px;
    vertical-align: middle;
}
table.table tr th:first-child {
    width: 60px;
}
table.table tr th:last-child {
    width: 100px;
}
table.table-striped tbody tr:nth-of-type(odd) {
    background-color: #fcfcfc;
}
table.table-striped.table-hover tbody tr:hover {
    background: #f5f5f5;
}
table.table th i {
    font-size: 13px;
    margin: 0 5px;
    cursor: pointer;
}	
table.table td:last-child i {
    opacity: 0.9;
    font-size: 22px;
    margin: 0 5px;
}
table.table td a {
    font-weight: bold;
    color: #566787;
    display: inline-block;
    text-decoration: none;
}
table.table td a:hover {
    color: #2196F3;
}
table.table td a.settings {
    color: #2196F3;
}
table.table td a.delete {
    color: #F44336;
}
table.table td i {
    font-size: 19px;
}
table.table .avatar {
    border-radius: 50%;
    vertical-align: middle;
    margin-right: 10px;
}
.status {
    font-size: 30px;
    margin: 2px 2px 0 0;
    display: inline-block;
    vertical-align: middle;
    line-height: 10px;
}
.text-success {
    color: #10c469;
}
.text-info {
    color: #62c9e8;
}
.text-warning {
    color: #FFC107;
}
.text-danger {
    color: #ff5b5b;
}
.pagination {
    float: right;
    margin: 0 0 5px;
}
.pagination li a {
    border: none;
    font-size: 13px;
    min-width: 30px;
    min-height: 30px;
    color: #999;
    margin: 0 2px;
    line-height: 30px;
    border-radius: 2px !important;
    text-align: center;
    padding: 0 6px;
}
.pagination li a:hover {
    color: #666;
}	
.pagination li.active a, .pagination li.active a.page-link {
    background: #03A9F4;
}
.pagination li.active a:hover {        
    background: #0397d6;
}
.pagination li.disabled i {
    color: #ccc;
}
.pagination li i {
    font-size: 16px;
    padding-top: 6px
}
.hint-text {
    float: left;
    margin-top: 10px;
    font-size: 13px;
}
</style>
<script>
$(document).ready(function(){
	$('[data-toggle="tooltip"]').tooltip();
});
</script>
            </div>
        </div>
    </div>
</div>     
</body>
</html>