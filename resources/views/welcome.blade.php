<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container{
            padding: 20px;
        }
        h1{
            text-align: center;
        }
       
    </style>
</head>
<body>
    <h1> Badhar Harayako Suchana</h1>
 
   
    @foreach ($articles as $value) 
    <div class="container">
        <h1><a href="article/{{$value['id']}}">{{$value['title']}}</a> </h1>
        <h2>{{$value['desc']}}</h2>
        <p>
    </div>
     @endforeach 

</body>
</html>