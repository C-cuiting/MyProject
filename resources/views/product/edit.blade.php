
<html>
    <head>
        <title>编辑页面</title>
        <style>
                .header{
                background-color:darkred;
                }
                .container{
                background-color: deepskyblue;
                }
                .footer{
                background-color: greenyellow;
                }
        </style>
    </head>
    <body>

    <div class=" header">
    <h3>编辑页面</h3>
   </div>
   <div class="container">
   <form action="/product/save/{{$product['id']}}">
   ID:<input name="id" value=" {{$product['id']}}"><br/>
   Name:<input name="name" value="{{$product['name']}}"><br/>
   Price:<input name="price" value="{{$product['price']}}"><br/>
   Number:<input name="number" value="{{$product['number']}}"><br/>
   <input type="submit" value="保存">
   </form>
        </div>
<hr/>
        <div class="footer">
         Copy Right @ 2015-2025
        </div>
    </body>
</html>