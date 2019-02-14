<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Siushikanishe</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div class="col-md-4 col-md-offset-4" style="margin-top: 200px">
                <div id="app_vue">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text"  class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="age">Age</label>
                        <input type="text"  class="form-control" id="age" name="age" required>
                    </div>
                    <div class="form-group">
                        <label for="profession">Profession</label>
                        <input type="text"  class="form-control" id="profession" name="profession" required>
                    </div>
                    <button type="submit" id="regi" class="btn btn-primary btn-block btn-flat fa fa-pencil">Add</button>
                </div>
                <example-component></example-component>
            </div>
        </div>
        <script src="{{ asset('js/app.js') }}"> </script>
    </body>
</html>
