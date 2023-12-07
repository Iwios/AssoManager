<!-- template/menu/index.php -->

<head>
    <link rel="stylesheet" href="/css/style.css" />
</head>

<ul class="menuderoulant" id="appMenu">
    <!-- ... Autres éléments du menu ... -->

    <li>
        <div @click="toggleSubMenu('groupes')">
            <div class="icon-category-dashboard" style="padding-right:20px;"></div>
            Gestion des groupes
        </div>
        <ul v-show="subMenuVisible['groupes']" class="sousmenu">
            <li style="width:150px;"><a href="#">Liste des groupes</a></li>
            <li style="width:150px;"><a href="#">Planning des groupes</a></li>
        </ul>
    </li>

    <!-- ... Autres éléments du menu ... -->
</ul>
