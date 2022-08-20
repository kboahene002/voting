<!Doctype html>
<html>
    @if(\Illuminate\Support\Facades\Auth::user())
        {{"hello world"}}
        {{"hello  world"}}

    @elseif(true)
        {{"Hello s"}}
    @endif

</html>
