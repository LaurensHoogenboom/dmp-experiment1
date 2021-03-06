<?php 
    include $_SERVER['DOCUMENT_ROOT'] . "/src/php/header.php"; 
?>

<div class="description">
    <h1>En nu...</h1>
    <p>
        We hebben nu ervaringen. Hieruit kunnen we sterke punten formuleren. Hierbij is de uitdaging,
        om ze tegelijkertijd algemeen maken, maar tegelijkertijd ook concreet.
    </p>
    <p>
        <i>Bijvoorbeeld:</i>
        <br>
        Je had een ervaring tijdens een vergadering met verschillende partijen met eigen belangen. In eerste
        instantie heerste er wantrouwen, maar je wist mensen bij elkaar te brengen. Hierover voelde je tevreden.
    </p>
    <p>
        <i>Wordt:</i>
        <br>
        Ik voel me goed / sterk wanneer ik mensen met verschillende belangen, tijdens een vergadering bijeen weet te brengen,
        waarover ik mij tevreden voel.
    </p>
    <p>
        <i>
            Toch nog niet helemaal zeker van de ervaringen zoals jij ze hebt beschreven. 
            <a href="/experience/completion/add_details.php" onclick="firstExperience()">Klik</a> dan hier om ze aan te passen.
        </i>
    </p>
</div>

<div class="content">
</div>

<div class="actions">
    <div class="left">
    </div>

    <div class="middle">
        <a class="button" href="/personal_strengths/add_details.php">Start</a>
    </div>

    <div class="right">
    </div>
</div>

<script>
    startPersonalStrengthCreation();
</script>

<?php 
    include $_SERVER['DOCUMENT_ROOT'] . "/src/php/footer.php"; 
?>