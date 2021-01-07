<html>
    <head>
        <title>
            Walkerino
        </title>
    </head>
    <body>
        <h1>Walkerino</h1>

        <progress max="1000" value="{{ $total }}"></progress>

        <p>Your last milestone: {{ Minigoals::last($total) }}</p>
        <p>Your next milestone: {{ Minigoals::next($total) }} ({{ Minigoals::distanceToNextGoal($total) }} miles to go!)</p>
        
        <ul>
            @foreach($walks as $walk)
                <li>
                    {{ $walk->date->format('Y/m/d') }}: {{ $walk->distance }}
                </li>
            @endforeach
        </ul>

        <p>Total: {{ $total }} miles</p>

        <form action="/walks" method="POST">
            @csrf

            <input type="number" step="0.01" min="0" name="distance">

            <input type="date" name="date" id="date">

            <button type="submit">Add new walk</button>
        </form>
    </body>
</html>