<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Take the survey</title>
</head>
<body>
<h1>Midterm Survey</h1>
<form action="#" method="post" class="form-horizontal">
    <div class="form-group">
        <label for="name">Enter your name </label>
        <input type="text" class="form-control" name="name" id="name">
    </div>

    <div class="form-group">
        <label>Check all that apply</label>
        <br>
        <label><input type="checkbox" name="option1" value="Easy"> Midterm was easy peasy </label>
        <br>
        <label><input type="checkbox" name="option2" value="Tough"> Midterm was a bit tough</label>
        <br>
        <label><input type="checkbox" name="option3" value="Dark Souls"> Beating Dark Souls with a Guitar Hero controller
            would be easier.</label>
        <br>
        <label><input type="checkbox" name="option4" value="Knuckles"> And Knuckles</label>
        <br>
        <label><input type="checkbox" name="option5" value="Enjoyed Midterm">I enjoyed this midterm.</label>
        <br>
    </div>

    <div class="col-xs-3 ">
        <input class="form-control btn btn-default"
               type="submit" value="Complete survey">
    </div>

</form>


</body>
</html>