<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <title>Griya Homestay</title>
  </head>
<body>
<style>
    table{
      width: 100%;
      height: 720px;
      background-color: #c2d6ff;
    }
    td{
      padding: 0px 7px;
    }
    input[type=submit] {
    width: 130px;
    }
    #jelajah{
      width: 200px
    }
    #trtop, #tr2nd{
      background-color: #007bff;
    }
    .header{
      padding: 10px 10px 0px 10px;
    } 
    .header2{
      padding: 0px 10px 10px 0px;
    }
</style>
  <div class="container-fluid">
  <table border="0">
  <div class="container">
  <div class="mt-3"> 
  <div class="ml-2"> 
    <tr style="height:20px;" id="trtop">
        <td width="59%" rowspan="2" class="header"><img src="images/logo1putih.png" alt="" width="150px"></td>
        <td width="1%" class="header"></td>
        <td width="10%" class="header">Email</td>
        <td width="10%" class="header">Password</td>
        <td width="10%" class="header"></td>
    </tr>
    <tr style="height:20px;" id="tr2nd">
        <td width="1%" class="header2"></td>
        <td class="header2">
            <div class="col-sm-13">
              <input type="email" class="form-control form-control-sm" id="colFormLabelSm">
            </div>
          </div>
        </td>
        <td class="header2">
            <div class="col-sm-13">
              <input type="password" class="form-control form-control-sm" id="colFormLabelSm">
            </div>
          </div>
        </td>
        <td class="header2">
        <input type="submit" class="btn btn-info btn-sm">
        </div>
        </td>
    </tr>
  </div>
  </div>
  </div>
    <tr style="height:590px;">
        <td width="57%" align="center">
        <!--<img src="images/logo2.png" alt="" width="65px" height="43px"> <br>-->
        <h3> Hobby Travelling tapi bingung cari tempat menginap yang murah ? <br>
        Keliling kota nyari penginapan tapi hasilnya nihil <br>
        Kami ada untuk anda <br>
        Griya Homestay, solusi terbaik untuk dompet tipis anda <br>
        <div class="mt-3">
        <button type="button" class="btn btn-primary btn-lg" id="jelajah">Jelajahi</button>
        </div>
        </td>
        <td width="40%" colspan="4" padding="0px 5px">
          <form>
            <div class="container">
            <div class="mt-1">
            <div><h1>Daftar</div></div>
            <div class="mt-5">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputNamaPemilik">Nama</label>
                  <input type="text" class="form-control" id="inputNamaPemilik">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputNumber">No. Telephone</label>
                  <input type="tel" class="form-control" id="inputNumber">
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail">Email</label>
                <input type="email" class="form-control" id="inputEmail">
              </div>
              <div class="form-group">
                <label for="inputPassword">Password</label>
                <input type="password" class="form-control" id="inputPassword">
              </div>
              <div class="form-group">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="gridCheck">
                  <label class="form-check-label" for="gridCheck">
                    Ingat Saya
                  </label>
                </div>
              </div>
              <button type="submit" class="btn btn-primary">Daftar</button>
            </div>
            </form>
        </td>
    </tr>
    <tr style="height:10px;">
      <td colspan="5" rowspan="2" align="center"><h6> Scroll Down Untuk melihat hal-hal yang Luar biasa </td>
    </tr>
    </div>
    </div>
    
  </table>
  </div>
  
  

  </body>
</html>