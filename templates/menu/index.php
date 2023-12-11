<ul class="menuderoulant">
    <li>
        <input type="checkbox" id="dashboard">
        <label for="dashboard">
            <div class="icon-category-dashboard"></div><a href="../index.php">Tableau de bord</a>
        </label>
    </li>
    <li>
        <input type="checkbox" id="groupes">
        <label for="groupes">
            <div class="icon-category-dashboard"></div>Gestion des groupes
        </label>
        <ul class="sousmenu">
            <li><a href="../liste_groupe.php">Liste des groupes</a></li>
            <li><a href="../planning_groupe.php">Planning des groupes</a></li>
        </ul>
    </li>
    <li>
        <input type="checkbox" id="licencies">
        <label for="licencies">
            <div class="icon-category-dashboard"></div>Gestion des licenciés
        </label>
        <ul class="sousmenu">
            <li><a href="#">Liste des licenciés</a></li>
        </ul>
    </li>
    <li>
        <input type="checkbox" id="inscriptions">
        <label for="inscriptions">
            <div class="icon-category-dashboard"></div><a href="../templates/contenu/index.php">Gestion des inscriptions</a>
        </label>
    </li>
</ul>

<style scoped lang="scss">
    .menuderoulant {
        list-style: none;
        padding: 0;
    }

    li {
        margin-bottom: 5px;
    }

    input {
        display: none;
    }

    label {
        background: none;
        border: none;
        width: 220px;
        display: flex;
        flex-direction: row;
        align-items: center;
        padding: 5px;
        cursor: pointer;
    }

    .icon-category-dashboard {
        padding-right: 20px;
    }

    .sousmenu {
        display: none;
        flex-direction: column;
        align-items: center;
        padding-left: 30px;
    }

    input:checked + label + .sousmenu,
    input:hover + label + .sousmenu {
        display: block;
    }
</style>
