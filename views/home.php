    <div class="content">
        <div class="info">
            <h2>Over dit spel</h2>
            <p class="main-text">Je hebt 5 dobbelstenen alles bij elkaar op getelt is je score.
                Heb je nou de hoogste score van het uur, dag of week dan wordt
                je score opgeslagen en komt je score aan de rechter kant van deze
                pagina te staan.
            </p>
            <div class="form-group">
                <label for="name">Vul hier je naam in:</label>
                <input type="text" id="name" placeholder="Gast">
            </div>
            <p>Of laat het leeg en speel als Gast</p>
        </div>
        <div class="highscore">
            <div class="inner">
                <h2 class="title">Scorebord</h2>
                <div class="highscore_data">
                    <p>Hoogste score ooit gehaald:</p>
                    <p id="score_hour"><?php echo getScore('best'); ?></p>
                </div>
                <div class="highscore_data">
                    <p>Hoogste afgelopen uur:</p>
                    <p id="score_hour"><?php echo getScore('1 HOUR'); ?></p>
                </div>
                <div class="highscore_data">
                    <p>Hoogste afgelopen dag:</p>
                    <p id="score_today"><?php echo getScore('1 DAY'); ?></p>
                </div>
                <div class="highscore_data">
                    <p>Hoogste afgelopen week:</p>
                    <p class="score_week"><?php echo getScore('1 WEEK'); ?></p>
                </div>
            </div>
        </div>
    </div>
    <div class="dobbelen_maar">
        <a href="?page=spel" id="startDobbel" class="btn">Dobbelen maar!</a>
    </div>
    
    <script src="js/home.js"></script>