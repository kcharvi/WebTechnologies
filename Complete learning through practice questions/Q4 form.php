<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body bgcolor="#ff8af9">
    <form action="Q4 form output.php" method="POST">
        First Name  :<input type="text" name="fname" size="10"> &nbsp Last Name   :<input type="text" name="lname" size="10"><br><br>
        Gender: 
        <label>
            <input type="radio" name="radio" value="Male">Male
        </label>
        <label>
            <input type="radio" name="radio" value="Female">Female
        </label> <br><br>

        Enter your Quote here: <textarea name="quote" rows="5" cols="30" placeholder="Message"> </textarea><br><br>
        
        Enter level of Education:
            <select name="Education" maxlength="50"><br>
                <option> College</option>
                <option> Undergrad</option>
                <option> Postgrad</option>
                <option> PHD</option>
            </select><br><br>
        Hobbies : 
        <label>
            <input type="checkbox" name="check_list[]" value="Travelling">Travelling 
        </label>
        <label>
            <input type="checkbox" name="check_list[]" value="Painting">Painting 
        </label>
        <label>
            <input type="checkbox" name="check_list[]" value="Reading">Reading 
        </label>
        <br><br>  

        <input type="submit" name="submit">

    </form>

</body>
</html>
