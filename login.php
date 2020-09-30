<html>
  <head>

  </head>
  <body>
    <form method="post" action="backend/handleLogin.php">
      <input 
        placeholder="enter email" 
        name="email"
        type="email"
        required
      />
      <input 
        placeholder="enter password"
        name="pwd"
        type="password"
        required
      />
      <button
        type="submit"
      >
        LOGIN
      </button>
    </form>

    <?php
      if($_GET['login']=="false"){
        echo "wrong credentials entered";
      }
    ?>
  </body>
</html>