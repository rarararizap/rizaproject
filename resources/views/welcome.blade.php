<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ra Ra Ra RIZAP</title>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="{{ secure_asset('css/style.css') }}">
        <style type="text/css">
        
        /*ここに調整CSS記述*/
        .main { background:url(photo-1500264071431-8dd63bfd6e7e.jpg) center no-repeat; 
                
                /* 画像を常に天地左右の中央に配置 */
          background-position: center center;
           
          /* 画像をタイル状に繰り返し表示しない */
          background-repeat: no-repeat;
           
          /* コンテンツの高さが画像の高さより大きい時、動かないように固定 */
          background-attachment: fixed;
           
          /* 表示するコンテナの大きさに基づいて、背景画像を調整 */
          background-size: cover;
           
          /* 背景画像が読み込まれる前に表示される背景のカラー */
          background-color: #464646;
          
          
        }
        
        .container{
            position: absolute;
            top: 0px;
            right: 0px;
            bottom: 0px;
            left: 0px;
            margin: auto;
            height: 250px;
        }
        
        .form-group{
            color:gold;
            font-size: 30px;
            text-align: center;
        }
        
        .alert-danger{
            margin-top: 200px;
        }
        
        .main h1{
            text-align: center;
            font-size: 100px;
            
        }
           
        .form-control{
            opacity: 0.7; 
       }
        

    
        
        
        </style>
    </head>
    
    <body class=main>
        
            @if (session('situation'))
            <div class="container mt-2">
                <div class="alert alert-danger">
                    <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                    {{ session('situation') }}
                </div>
            </div>
             @endif
    
            <h1>Ra Ra Ra RIZAP</h1>


          <div class="container">
             

            {!! Form::open(['route' => 'keyword']) !!}
                <div class="form-group">
                    {!! Form::label('keyword', 'What is the word?') !!}
                    {!! Form::text('keyword', null, ['class' => 'form-control']) !!}
                </div>
            <!--{!! Form::close() !!}-->
            
            <!--{!! Form::open(['route' => ['members.index']]) !!}-->
                <div class="text-right">
                 
                    {!! Form::submit('input', ['class' => 'btn btn-light']) !!}
                   
                </div>
            {!! Form::close() !!}
        
             
               
          </div>

  </body>
</html>