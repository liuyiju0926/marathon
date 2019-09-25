<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>UI</title>
    <style>
    .Top{
        width: auto;
        height: 200px;
        position: relative;
        
        background-image: url("img/header.jpg");
        background-size: cover;
    } 

    .Left{
       
        width: 300px;
        height: 800px;
        position: relative;
        background-color: yellow;
    }
   
    

    
    </style>


</head>
<body>
    <!--------------------------------------------------------------------------------------TOP-------------------------------------------------------------------------------------->
    <div class="Top">
      
      

    </div>
    
    <!--------------------------------------------------------------------------------------content-------------------------------------------------------------------------------------->
    
      <div class="Left">
              <div class="accordion" id="accordionExample">
                      <div class="card">
                        <div class="card-header" id="headingOne">
                          <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                              客戶資料管理
                            </button>
                          </h2>
                        </div>
                    
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                          <div class="card-body">
                                  <button class="btn btn-link" type="button"  aria-expanded="true" aria-controls="collapseOne">
                                          基本資料
                                  </button>
                                  <br>
                                  <button class="btn btn-link" type="button"  aria-expanded="true" aria-controls="collapseOne">
                                          基本資料
                                  </button>
                                  <br>
                                  <button class="btn btn-link" type="button"  aria-expanded="true" aria-controls="collapseOne">
                                          基本資料
                                  </button>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" id="headingTwo">
                          <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                              賽事管理
                            </button>
                          </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                          <div class="card-body">
                                  <button class="btn btn-link" type="button"  aria-expanded="true" aria-controls="collapseOne">
                                          基本資料
                                  </button>
                                  <br>
                                  <button class="btn btn-link" type="button"  aria-expanded="true" aria-controls="collapseOne">
                                          基本資料
                                  </button>
                                  <br>
                                  <button class="btn btn-link" type="button"  aria-expanded="true" aria-controls="collapseOne">
                                          基本資料
                                  </button>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" id="headingThree">
                          <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                              訂單管理
                            </button>
                          </h2>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                          <div class="card-body">
                                  <button class="btn btn-link" type="button"  aria-expanded="true" aria-controls="collapseOne">
                                          基本資料
                                  </button>
                                  <br>
                                  <button class="btn btn-link" type="button"  aria-expanded="true" aria-controls="collapseOne">
                                          基本資料
                                  </button>
                                  <br>
                                  <button class="btn btn-link" type="button"  aria-expanded="true" aria-controls="collapseOne">
                                          基本資料
                                  </button>
                          </div>
                        </div>
                      </div>
                    </div>
      

    </div>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>