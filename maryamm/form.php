
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stylesheet.css">
</head>
<body>
    
    <div class="Reg Form"></div>
    <div class="Main">

        <h1 style = "">REGISTRATION FORM</h1>
        <form action="page2.php" method = "post">
           
            <div id="name">
                <h4 class="name">We'd love to help you start your exceeding your goals</h4>
                <label for="" class="firstlabel">First Name</label>
                <input type="first name" type="text" name="f-name"><br><br>
                <label for="" class="lastlabel">Last Name</label>
                <input type="last name" type="text" name="l-name"><br><br>
            </div>
            <h2 class="name">Company</h2>
            <input type="text" class="company" name="company">
            <h2 class="name">E.mail</h2>
            <input type="text" class="email" name="email">
            <h2 class="name">Phone</h2>
            <input type="text" class="code" name="area-code">
            <label for="" class="area-code">Area code</label>
            <input type="text" class="number" name="phone">
            <label for="" phone-number>Number</label>

            <h2 class="name">Subject</h2>
            <select name="subject" class="option">
                <option disabled="disabled selected="selected >--choose option</option>
                <option value="MVC"></option>
                <option value="JS"></option>
                <option value="MANGO-DB"></option>
            </select>
            <h2 id="Student">Are you beginner?</h2>
            <label for="" class="radio">
                <input type="radio" class="radio-one" checked="checked" >
                <span class="checkmark"></span>
                YES
            </label>
            <label for="" class="radio">
                <input type="radio" class="radio-two" checked="checked">
                <span class="checkmark"></span>
                NO
            </label>
            <button type="submit">Register</button>
        </form>
    </div>
</body>
</html>