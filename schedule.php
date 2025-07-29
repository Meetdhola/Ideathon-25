<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PDF Viewer</title>
    <style>
        body {
            font-family: sans-serif;
            margin: 0;
            padding: 0;
        }

        .pdf-container {
            width: 100%;
            height: 90vh;
            max-height: 90vh;
            padding: 1rem;
            box-sizing: border-box;
        }

        .pdf-embed {
            width: 100%;
            height: 100%;
            border: none;
        }

        .download-link {
            display: block;
            margin: 1rem auto;
            text-align: center;
            background-color: #81c784;
            color: white;
            padding: 0.6rem 1.2rem;
            text-decoration: none;
            border-radius: 8px;
            width: max-content;
        }

        @media (max-width: 600px) {
            .pdf-container {
                height: 80vh;
                padding: 0.5rem;
            }

            .download-link {
                font-size: 0.9rem;
                padding: 0.5rem 1rem;
            }
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

    <?php
    include("navbar.php");
    ?>

    <h2 style="margin-left: 1%;">Schedule</h2><br>
    <div class="pdf-container">
        <iframe class="pdf-embed" src="induction_2025-26_schedule.pdf#toolbar=0&navpanes=0&scrollbar=0"></iframe>
    </div>

    <a class="download-link" href="induction_2025-26_schedule.pdf" download>📥 Download PDF</a>

</body>

</html>