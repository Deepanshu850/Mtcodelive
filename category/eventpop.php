<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MoneyTree Proptree Mela</title>
    <style>
        /* Custom Wrapper for Popup */
        .custom-popup-wrapper {
            display: none;
            position: fixed;
            z-index: 999;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            justify-content: center;
            align-items: center;
            animation: fadeIn 0.5s ease-in-out;
        }

        /* Popup Content */
        .custom-popup-content {
            position: relative;
            /* background-color: white; */
            border-radius: 15px;
            width: min-content;
            max-width: 450px;
            text-align: center;
            /* box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4); */
            animation: slideIn 0.4s ease;
            overflow: hidden;
            padding: 1rem 0.8rem;
            padding-top: 1.2rem;
            /* background-color: rgba(0, 0, 0,0.1); */
            /* backdrop-filter: blur(8px); */
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .custom-popup-content img {
            width: 34vw;
            margin-block: 1rem;
        }

        @media (width < 700px) {
            .custom-popup-content img {
                width: 98vw;
                margin-block: 1rem;
            }
        }

        /* Close Button */
        .custom-close-btn {
            position: absolute;
            top: 12px;
            right: 20px;
            font-size: 26px;
            color: #888;
            cursor: pointer;
            transition: color 0.3s ease;
            z-index: 1100;
        }

        .custom-close-btn:hover {
            color: #ff4b4b;
        }

        /* Event Image */
        .custom-event-img {
            width: 100%;
            max-width: 350px;
            margin: 15px auto;
            border-radius: 10px;
            transition: transform 0.3s ease;
        }

        /* .custom-event-img:hover {
            transform: scale(1.02);
        } */

        /* Event Button (Hide Button) */
        .custom-btn {
            display: inline-block;
            padding: 0 30px;
            background: linear-gradient(45deg, #d39f51, #e5b566, #f0cb7b, #f8e292, #fff7a9);
            color: white;
            border: none;
            border-radius: 6px;
            text-decoration: none;
            font-weight: bold;
            font-size: 16px;
            /* margin-top: 20px; */
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .custom-btn:hover {
            /* background-color: #0056b3; */
            transform: scale(1.03);
        }

        /* Animations */
        @keyframes slideIn {
            from {
                transform: translateY(-100%);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        /* Shadow and hover for popup */
        /* .custom-popup-content:hover {
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.5);
        } */

        /* Emoji sprinkle styles */
        .emoji {
            position: fixed;
            font-size: 30px;
            opacity: 0.9;
            pointer-events: none;
            animation: fall 1.5s linear infinite;
        }

        @keyframes fall {
            0% {
                transform: translateY(-100%);
            }

            100% {
                transform: translateY(100vh);
            }
        }
    </style>
</head>

<body>


    <!-- Event Popup Modal -->
    <div class="custom-popup-wrapper">
        <div class="custom-popup-content animate-popup">
            <span class="custom-close-btn">&times;</span>
            <img src="../event2oct.jpeg" alt="Proptree Mela" class="custom-event-img">
            <button class="custom-btn hide-btn">Cancel</button>
        </div>
    </div>

    <script>
        // Show popup on page load
        window.onload = function() {
            const popupWrapper = document.querySelector(".custom-popup-wrapper");
            popupWrapper.style.display = "flex";

            // Automatically hide popup after 20 seconds
            setTimeout(function() {
                popupWrapper.style.display = "none";
            }, 20000); // 20000 milliseconds = 20 seconds
        };

        // Close the popup when the close button is clicked
        document.querySelector(".custom-close-btn").addEventListener("click", function() {
            document.querySelector(".custom-popup-wrapper").style.display = "none";
        });

        // Hide the popup when the "Hide this popup" button is clicked
        document.querySelector(".hide-btn").addEventListener("click", function() {
            document.querySelector(".custom-popup-wrapper").style.display = "none";
        });
    </script>

</body>

</html>