<ul class="menuderoulant">
    <li>
        <button><div class="icon-category-dashboard"></div>Tableau de bord</button>
    </li>
    <li>
        <button><div class="icon-category-dashboard"></div>Gestion des groupes</button>
        <ul class="sousmenu">
            <li><a href="<?php echo($_['url']['liste_groupe']); ?>">Liste des groupes</a></li>
            <li><a href="../planning_groupe.php">Planning des groupes</a></li>
        </ul>
    </li>
    <li>
        <button><div class="icon-category-dashboard"></div>Gestion des licenciés</button>
        <ul class="sousmenu">
            <li><a href="#">Liste des licenciés</a></li>
        </ul>
    </li>
    <li>
        <button><div class="icon-category-dashboard"></div>Gestion des inscriptions</button>
    </li>
</ul>

<style scoped lang="scss">
    .menuderoulant {
        list-style: none;
        padding: 0;
    }

    li {
        display: flex;
        align-items: center;
        margin-bottom: 5px;
    }

    button {
        background: none;
        border: none;
        width: 220px;
        display: flex;
        flex-direction: row;
        align-items: center;
        padding: 5px;
    }

    .icon-category-dashboard {
        padding-right: 20px;
    }

    .sousmenu {
        display: none;
        flex-direction: column;
        align-items: center;
        border: solid red 4px;
        padding-left: 30px;
    }

    li:hover .sousmenu {
        display: block;
    }
</style>
