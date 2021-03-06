<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rounded Clock</title>

    <link rel="stylesheet" href="style.css">
    <-- Digital Clock -->
        <link rel="stylesheet" href="{{ asset('backend/clock') }}/clock_style.css">
</head>

<body onload="resizeClock()">
    <main class="container">
        <div class="box">
            <svg class="clock-container">
                <circle class="clock-shape"></circle>
                <circle class="clock-shape main-circle"></circle>
            </svg>
            <div class="content">
                <span class="time hour">
                    12
                </span>
                <b class="colon">:</b>
                <span class="time min">
                    00
                </span>
            </div>
        </div>
        <footer>
            made with love by <a href="https://github.com/tdtonmoydeb" class="link">tom</a>
        </footer>
    </main>
    <script src="{{ asset('backend/clock') }}/app.js"></script>

</body>

</html>
