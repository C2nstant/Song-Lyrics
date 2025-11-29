<?php
    $title = "No One Left To Love";
    $artist = "ROOS + BERG";
    $mood = "Hopeful";
    $duration = "3:46";

    $verseCount = 2;
    $repeatChorus = 2;
    $totalSections = $verseCount + $repeatChorus;

    $nouns = [
        "dark", 
        "end", 
        "baby", 
        "love", // Love [3]
        "light", // Light [4]
        "you", // You [5]
        "they", 
        "away", 
        "story", // Story [8]
        "one", // One [9]
        "home", // Home [10]
        "night", // Night [11]
        "plot", 
        "way", 
        "voice", 
        "words", 
        "spark"
    ];

    $verbs = [
        "pushing", 
        "reaching", 
        "keep", // Keep [2]
        "saying", 
        "gone", 
        "loving", 
        "holding", // Holding [6]
        "take", 
        "change", // Change [8]
        "sayin'", // Sayin' [9]
        "is", 
        "there's", // There's [11]
        "guide", // Guide [12]
        "let go", // Let Go [13]
        "lost",
        "got", 
        "say", 
        "love"
    ];
    
    $sections = [
        $verse1 = [
            "Through darkest " . $nouns[0] . ", I'm " . $verbs[0] . " through", 
            "Through the " . $nouns[1] . ", I'm  " . $verbs[1] . "  you", 
            "Though they  " . $verbs[2] . "   " . $verbs[3] . "  that my " . $nouns[2], 
            "Is  " . $verbs[4] . ", I  " . $verbs[2] . "  on  " . $verbs[5] . "  you", 
            "For my " . $nouns[3] . "'s the " . $nouns[4],
            $verbs[6] . "  " . $nouns[5] . " tight,  " . $verbs[6] . "  " . $nouns[5] . " tight",
            "And " . $nouns[6] . " can never  " . $verbs[7] . "  that " . $nouns[7],
            "I'll  " . $verbs[8] . "  the " . $nouns[8] . " where it's  " . $verbs[9] . " "
        ],

        $chorus1 = [
            "There  " . $verbs[10] . "  no " . $nouns[9] . " left to " . $nouns[3] . "",
            "And  " . $verbs[11] . "  no " . $nouns[4] . " left to  " . $verbs[12] . "  us " . $nouns[10] . "",
            "I  " . $verbs[2] . "  " . $nouns[5] . " with me through the darkest " . $nouns[11] . "",
            "And I won't  " . $verbs[13] . ", won't  " . $verbs[13] . " "
        ], 

        $verse2 = [
            "I  " . $verbs[14] . "  the " . $nouns[12] . " along the " . $nouns[13] . "",
            "Still  " . $verbs[15] . "  my " . $nouns[14] . ", last " . $nouns[15] . " to  " . $verbs[16] . " ",
            "I'll  " . $verbs[8] . "  this " . $nouns[8] . " so it's  " . $verbs[9] . " "
        ], 

        $chorus2 = [
            "When there  " . $verbs[10] . "  no " . $nouns[9] . " left to " . $nouns[3] . "",
            "And  " . $verbs[11] . "  no " . $nouns[4] . " left to  " . $verbs[12] . "  us " . $nouns[10] . "",
            "Still  " . $verbs[2] . "  " . $nouns[5] . " with me through the darkest " . $nouns[11] . "",
            "And I won't  " . $verbs[13] . ", won't  " . $verbs[13] . " ",
            "Yeah, " . $verbs[11] . "  always " . $nouns[5] . " to " . $verbs[17] . " ",
            "There's a " . $nouns[16] . " of " . $nouns[4] . " to " . $verbs[12] . " us " . $nouns[10] . "",
            "I  " . $verbs[2] . "  " . $nouns[5] . " with me through the darkest " . $nouns[11] . "",
            "And I won't  " . $verbs[13] . ", won't  " . $verbs[13] . " "
        ], 
    ]
?>

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
                /*background: rgba(152, 28, 57); */
                color: white;
                border-radius: 15px;
            }

            sectionbg1 {
                background: rgba(152, 28, 57);
            }

            sectionbg2 {
                background: rgba(152, 28, 57);
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
            <h1><span>Song Title:</span> <?= $title ?></h1>
            <p><span>Artist:</span> <?= $artist ?></p>
            <p><span>Mood:</span> <?= $mood ?></p>
            <p><span>Total Sections:</span> <?= $totalSections ?></p>
            <p><span>Song Duration:</span> <?= $duration ?></p>
        </div>

        <div class="cover">
            <img src="images/AlbumCover.jpg" alt="No One Left To Love Cover Art">
        </div>


        <section class="section">
            <h2>Verse 1</h2>
            <div class="verse">
                <?php foreach ($sections[0] as $line) {
                    echo "<p>$line</p>";
                } ?>
            </div>
        </section>
        
        <section class="section">
            <h2>Chorus</h2>
            <div class="verse">
                <?php foreach ($sections[1] as $line) {
                    echo "<p>$line</p>";
                } ?>
            </div>
        </section>

        <section class="section">
            <h2>Verse 2</h2>
            <div class="verse">
                <?php foreach ($sections[2] as $line) {
                    echo "<p>$line</p>";
                } ?>
            </div>
        </section>

        <section class="section last">
            <h2>Chorus</h2>
            <div class="verse">
                <?php foreach ($sections[3] as $line) {
                    echo "<p>$line</p>";
                } ?>
            </div>
        </section>
        
        <?php include 'footer.php'; ?>
    </body>

</html>