@extends("layouts.master")

@section("content")
<div class="centered">
   {{--<p> As with all those at syntax things here then I will specify a section to name content because remember--}}

    {{--an hour later here we find to insert all content stuff in here.--}}

    {{--And I have also closed a section--}}

    {{--and now I just well some see us as classes I'm now using.--}}

    {{--So I'm creating a div with a class of centered which will as you might guess centered content then I--}}

    {{--would create a paragraph in here and inside this paragraph or just enter some Lorem Ipsum text and get--}}

    {{--prepared here but in cloud 9.--}}

    {{--You could also just type Lorem and this would create some text.--}}

    {{--Well why don't we use that.--}}
   {{--</p>--}}
    {{--<ul>--}}
    {{--@for($i = 0;$i < 4;$i++)--}}
        {{--<li>Item {{$i + 1}}</li>--}}
    {{--@endfor--}}
    {{--</ul>--}}
    <a href="{{route('greet')}}">Greet</a>
<a href="{{route('pokemon')}}">Pokemon</a>
    <a href="{{route('hug')}}">Hug</a>
    <a href="{{route('kiss')}}">Kiss</a>
<br>
<form action="{{route('benice')}}" method="post">
<label for="select-action">i want to...</label> 
<select id="select-action" name="action">
    <option value="greet">greet</option>
    <option value="hug">hug</option>
    <option value="kiss">kiss</option>
    
</select>
<input type="text" name="name">
<button type="submit">do nice</button>
<input type="hidden" value="{{Session::token()}}" name="_token">
</form>
</div>
@endsection