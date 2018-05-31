<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>forma</title>
</head>
<body>
<h2>post form:</h2>
<form method="post" action="/rest-pages">
    <!--@csrf-->
    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
    <input name="asd" type="text" value="asdf" />
    <button type="submit" >Go</button>
    <!--<input type="submit" value="going!!!">-->
</form>

<br><br><br><h2>Put form: </h2>
<form method="put" action="/rest-pages/10">
    @csrf
    <!--<input type="hidden" name="_token" value="{{ csrf_token() }}"/>-->
    <input name="asd" type="text" value="asdf" />
    <!--<button type="submit" >Go</button>-->
    <input type="submit" value="going!!!">
</form>

</body>
</html>