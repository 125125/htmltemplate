    <div id="wrapper">
      <div id="content">
        <center>
          <form action="config/db_install.php" method="POST">
            <div id="inputs">
            <input type="text" class="input" name="host" placeholder="Hostname/IP">
            <input type="text" class="input" name="user" placeholder="Database Username">
            <input type="text" class="input" name="pass" placeholder="Datbase Password"><br>
            <input type="text" class="input" name="dbname" placeholder="Web Database Name">
            <input type="text" class="input" name="auth" placeholder="Account Database Name">
            <input type="text" class="input" name="world" placeholder="World Database Name"><br>
            <input type="text" class="input" name="char" placeholder="Character Database Name"><br>
              <input type="submit" class="button" value="Connect">
            </div>
          </form>
        </center>
        <fieldset>
          <legend>Default Values</legend>
          <table>
            <tr>
              <td><b>Hostname/IP:</b> 127.0.0.1</td>
              <td><b>Database Username:</b> root</td>
              <td><b>Database Password:</b> ascent</td>
            </tr>
            <tr>
              <td><b>Web Database Name:</b> htmltemplate</td>
              <td><b>Account Database Name:</b> auth</td>
              <td><b>World Database Name:</b> world</td>
            </tr>
            <tr>
              <td><b>Character Database Name:</b> characters</td>
            </tr>
          </table>
        </fieldset>