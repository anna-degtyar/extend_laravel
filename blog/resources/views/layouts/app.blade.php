<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Laravel Quickstart - Intermediate</title>

     <div class="panel-body">
    <!-- Отображение ошибок проверки ввода -->
    @include('common.errors')

    <!-- Форма новой задачи -->
    <form action="/task" method="POST" class="form-horizontal">
      {{ csrf_field() }}

      <!-- Имя задачи -->
      <div class="form-group">
        <label for="task" class="col-sm-3 control-label">Задача</label>

        <div class="col-sm-6">
          <input type="text" name="name" id="task-name" class="form-control">
        </div>
      </div>

      <!-- Кнопка добавления задачи -->
      <div class="form-group">
        <div class="col-sm-offset-3 col-sm-6">
          <button type="submit" class="btn btn-default">
            <i class="fa fa-plus"></i> Добавить задачу
          </button>
        </div>
      </div>
    </form>
  </div>

  <!-- TODO: Текущие задачи -->
@endsection
=======
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </head>

  <body>
    <div class="container">
      <nav class="navbar navbar-default">
        <!-- Содержимое Navbar -->
      </nav>
    </div>

    @yield('content')
  </body>
</html>
