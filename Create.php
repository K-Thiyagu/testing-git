<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Page</title>
</head>
<body>
    <h1>Create Page</h1>
    <form action="/createPage" method="post">
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"/>
         <table>
            <tr>
            <td>Name</td>
            <td> <input type="text" name="name" placeholder="Enter your name"/></td>
            </tr>
            <tr>
            <td>Phone Number</td>
            <td><input type="number" name="phone_number" placeholder="Enter your mobile number"/></td>
            </tr>
            <tr>
            <td>Course :</td>
            <td>
            <select id="course" name="course" >
                <option value="mech">MECH</option>
                <option value="eee">EEE</option>
                <option value="ece">ECE</option>
                <option value="cse">CSE</option>
                </select>
            </td>
            </tr>
            <tr>
              <td colspan="2">
                <input type="submit" value="Add Student"/>
              </td>
            </tr>

         </table>



    </form>

</body>
</html>
