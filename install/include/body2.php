<div id="wrapper">
      <div id="content">
        <center>
          <form action="config/installuser.php" method="POST">
            <div id="inputs">
            <input type="text" class="input" name="uname" placeholder="Account Username">
            <input type="password" class="input" name="pass" placeholder="Account Password">
            <input type="password" class="input" name="pass2" placeholder="Account Password"><br>
            <input type="email" class="input" name="email" placeholder="Email">
            <input type="text" class="input" name="gmlevel" placeholder="Gm Level">
            <input type="text" class="input" name="realm" placeholder="realm id"><br>
              <input type="submit" class="button" value="Next">
            </div>
          </form>
        </center>
        <fieldset>
          <legend>Default Values</legend>
          <table>
            <tr>
              <td><b>Account Username:</b> Admin</td>
              <td><b>Account Password:</b> Admin</td>
              <td><b>GM Level:</b> 3</td>
            </tr>
            <tr>
              <td><b>Realm id:</b> -1</td>
              <td><b>Email:</b> example@website.com</td>
            </tr>
          </table>
        </fieldset>