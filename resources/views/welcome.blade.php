<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coming Soon</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        /* Center content */
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Fade-in animation */
        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .fade-in {
            animation: fadeIn 1s ease-in-out;
        }

        /* Blinking cursor animation */
        @keyframes blink {
            0% {
                opacity: 0;
            }

            50% {
                opacity: 1;
            }

            100% {
                opacity: 0;
            }
        }

        .blink {
            animation: blink 1s step-end infinite;
        }
    </style>
</head>

<body style="background-image: url('{{ asset('image.jpg') }}'); color: #913831">

    <div class="container text-center">
        <div class="fade-in">
            <h1 id="mainHeading">Content Coming Soon<span class="blink">|</span></h1>
            <p id="infoText">We are working hard to bring you amazing content. Stay tuned!</p>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Custom JavaScript -->
    <script>
        // JavaScript code to change text and add animations
        $(document).ready(function() {
            // Array of text variations
            var textVariations = [
                "Content Coming Soon",
                "Stay Tuned for Excitement",
                "We're Almost Ready!",
                "Exciting Content On the Way"
            ];

            // Function to update the main heading text with animation
            function updateHeading() {
                var randomIndex = Math.floor(Math.random() * textVariations.length);
                var newText = textVariations[randomIndex];
                $('#mainHeading').fadeOut(500, function() {
                    $(this).text(newText).fadeIn(500);
                });
            }

            // Call updateHeading every 5 seconds
            setInterval(updateHeading, 5000);

            // Event listener for clicking on the info text
            $('#infoText').click(function() {
                $(this).toggleClass('text-danger'); // Change color on click
            });
        });
    </script>

</body>

</html>
