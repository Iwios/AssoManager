<head>
    <link rel="stylesheet" href="/css/style.css" />
</head>

<ul class="menuderoulant">
    <div id="sample" style="display:flex;justify-content:center;"></span><button href="../index.php" style="background:none;width:220px;border:none;display:flex;flex-direction:row;align-items:center;"><div class="icon-category-dashboard" style="padding-right:20px;"></div>Tableau de bord</button></div>
    <div id="sample" style="display:flex;justify-content:center;"></span><button style="background:none;width:220px;border:none;display:flex;flex-direction:row;align-items:center;"><div class="icon-category-dashboard" style="padding-right:20px;"></div>Gestion des groupes</button></div>
        <ul style="display:flex;justify-content:center;display:flex;flex-direction:column;align-items:center;" class="sousmenu">
            <li style="width:150px;"><a href="<?php echo($_['url']['liste_groupe']); ?>">Liste des groupes</a></li>
            <li style="width:150px;"><a href="../planning_groupe.php">Planning des groupes</a></li>
        </ul>
    <div id="sample" style="display:flex;justify-content:center;"></span><button style="background:none;width:220px;border:none;display:flex;flex-direction:row;align-items:center;"><div class="icon-category-dashboard" style="padding-right:20px;"></div>Gestion des licenciés</button></div>
        <ul style="display:flex;justify-content:center;" class="sousmenu">
            <li style="width:150px;"><a href="#">Liste des licenciés</a></li>
        </ul>
    <div id="sample" style="display:flex;justify-content:center;"></span><button style="background:none;width:220px;border:none;display:flex;flex-direction:row;align-items:center;"><div class="icon-category-dashboard" style="padding-right:20px;"></div>Gestion des inscription</button></div>
</ul>

<style scoped lang="scss">
    .sousmenu {
        display:flex;
        justify-content: center;
        padding-left: 30px;

    }

    .menuderoulant .sousmenu {
        display: none;
    }

    li:hover .sousmenu {
        display: block;
    }
</style>