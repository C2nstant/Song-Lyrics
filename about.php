<!DOCTYPE html>
<html>
    <head>
        <title>Song Lyrics</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            body {
                background: rgba(28, 22, 22);
            }
            .information {
                padding: 10px;
                width: 95%;
                margin: 0 auto;
                text-align: center;
                font-size: 1.3em;
                margin-top: 40px;
                margin-bottom: 50px;
                background: white;
                border-radius: 15px;
            }

            h1 {
                font-weight: normal;
            }

            span {
                font-weight: bold;
            }

            section {
                padding: 10px;
                margin: 0 auto;
                width: 95%;
                text-align: center;
                font-size: 1.2em;
                margin-bottom: 30px;
                background: rgba(152, 28, 57);
                color: white;
                border-radius: 15px;
            }

            .cover {
                margin: 0 auto;
                width: 300px;
                margin-bottom: 30px;
                border: 3px solid rgba(255, 255, 255, 0.2);
            }

            .last {
                margin-bottom: 80px;
            }
        </style>
    </head>

    <body>
        <?php include 'header.php'; ?>

        <div class="information">
            <h1><span>About Page</span></h1>
            <p>This application allows users to view song lyrics along with relevant information such as the artist, mood, and structure of my favorite song ^o^.</p>
        </div>

        <div class="section">
            <section>
                <h2>Song Features</h2>
                <ul>
                </ul>
            </section>
            <section class="last">
                <h2>Contact Information</h2>
                <p>For inquiries or feedback, please contact me at:
                    <br>Email:
            </section>
        </div>

        
        
        <?php include 'footer.php'; ?>
    </body>

</html>