<!Doctype html>
<html>
    <head>
        <link rel="stylesheet" href="{{asset('bootstrap-4.3.1-dist/css/bootstrap.css')}}">
    </head>

    @foreach($allCategory as  $cat)
        {{$cat->category_name }} <img width="50" src="{{asset('uploads/'.$cat->category_image)}}" alt=""> <br>
        @foreach($cat->contestants as $catC)
            <ul>
                <li>
                    {{$catC->contestant_name}}
                    <form method="post" action="">
                        <input type="text" value="{{}}">
                    </form>
                </li>
            </ul>
        @endforeach

    @endforeach

</html>
