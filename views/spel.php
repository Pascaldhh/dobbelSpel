    <div class="overlay d-none">
        <div class="overlay-inner">
            <h2>Gefeliciteerd met je score</h2>
            <p id="end-score"></p>
            <p>Wil je je geluk nog eens testen? Klik op speel opnieuw!</p>
            <div class="btn_container">
                <a href="/dobbelSpel/" class="btn">Home</a>
                <a href="/dobbelSpel/?page=spel" class="btn">Speel opnieuw!</a>
            </div>
        </div>
    </div>
    <div class="dobbel_container">
        <?php 
            for($i=0; $i<5; $i++)
            {
                echo '<div class="dobbelsteen op-0">
                        <div class="eye eye1"></div>
                        <div class="eye eye2"></div>
                        <div class="eye eye3"></div>
                        <div class="eye eye4"></div>
                        <div class="eye eye5"></div>
                        <div class="eye eye6"></div>
                    </div>';
            }
        ?>  
    </div>
    <h2 id="result">Je score is: </h2>
    <div class="btn_container">
        <button id="trowD" class="btn">Gooi een dobbelsteen!</button>
    </div>
    <script src="js/dobbelGame.js"></script>