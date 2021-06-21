<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, inital-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Список дел</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
	</head>
	<body>
    <div class="container">
		    <h1>Список Дел</h1>
        <form  action="/add.php" method="post">
          <input type="text" name="task" id="task" placeholder="Нужно сделать..." class="form-control">
          <button type="submit" name="sendTask" class="btn btn-success"  >Отправить</button>
          </form>


          <?php
          require 'configDB.php';

          echo '<ul>';
          $query = $pdo->query('SELECT * FROM tasks ORDER BY id DESC');
          while ($row = $query->fetch(PD::FETCH_OBJ)) {
            echo '<li><b>'.$srow->task.'<b><a href="/delete.php?id='.$srow->id.'"><button>Удалить</button></a><li>';
          }
          echo '</ul>';
           ?>

	</body>
</html>
