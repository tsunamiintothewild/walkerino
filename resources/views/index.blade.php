<html>
    <head>
        <title>
            Walkerino
        </title>
    </head>
    <body>
        <h1>Walkerino</h1>
        <form action="/walks" method="POST">
            @csrf

            <input type="number" step="0.01" min="0" name="distance">

            <input type="date" name="date" id="date">

            <button type="submit">Add new walk</button>
        </form>
    </body>
</html>