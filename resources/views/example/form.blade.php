<!DOCTYPE html>
<html lang="sk">
    <head>
        <meta charset="UTF-8">
        <title> matika </title>
    </head>
    <body>

        <h1> Fibonacciho postupnost</h1>
        <form method="POST" action="/example/result">
            @csrf
            <label>Číslo:</label><br>
            <input type="number" name="num">
            <button type="submit">Odoslať</button>
        </form>
    </body>
</html>