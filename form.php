<!DOCTYPE html>

<html>
    <head>
        <title>Pavlo's Gym Inscription Form</title>
        <link rel="stylesheet" type="text/css" href="style/mainStyle.css"> <!--external css-->
        <script src="scripts/checkEmptyForm.js"> </script> <!--external javascript form check-->
        <script src="scripts/validateName.js"></script> <!--external javascript name check-->  
    </head>

    <body> 
        <div class="center">
            <h1>Pavlo's Gym</h1>
            <h2>A new way of working out!</h2>

            <h3>Inscription form</h3>
                <form name="subs" onsubmit="return checkEmptyForm()" action="action.html" method="POST"> <!--name form for script reference-->
                    First Name<br/>
                        <input type="text" name="first" id="first" onkeyup="validateName(this)"> <br> <!--verifies for no spaces or # char-->

                    <br/>Last Name<br/>
                        <input type="text" name="last" id="last" onkeyup="validateName(this)"> <br/>

                    <br/>e-mail<br/>
                        <input type="text" name="email" id="email"> <br/>

                    <br/>Service required<br/>
                        <select name="service">
                            <option value="gft">Group Fitness Classes</option>
                            <option value="pt">Personal Training</option>
                        </select><br/><br/>

                    <table>
                        <tr>
                            <td>What days work best for you?</td>
                            <td><input type="checkbox" name="day" value="monday"> Monday</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="checkbox" name="day" value="tuesday"> Tuesday</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="checkbox" name="day" value="wednesday"> Wednesday</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="checkbox" name="day" value="thursday"> Thursday</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="checkbox" name="day" value="friday"> Friday</td>
                        </tr>
                    </table><br/>

                    <table>
                        <tr>
                            <td>Time of the day</td>
                            <td><input type="radio" name="time" value="morning"> Morning</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="radio" name="time" value="afternoon"> Afternoon</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="radio" name="time" value="evening"> Evening</td>
                        </tr>
                    </table><br/>
                    <input class="button" type="submit" value="Submit Inscription"> <!--checks function to verify for empty form-->
                </form>
        </div>
    </body>
</html>