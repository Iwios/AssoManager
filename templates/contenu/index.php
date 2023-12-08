    <div>
        <div id="sample">Sample app text here</div>

        <div style="display:flex;justify-content:flex-end;">
                <button>Ajouter</button>
                <div>
                    <label for="site-search">Licenciés :</label>
                    <input type="search" id="site-search" name="q" />
                    <button>Recherche</button>
                </div>
        </div>
        <div style="display:flex;justify-content:center;">
            <table style="width:100%;margin: 20px 10px 0px 10px;border:black solid 2px;flex;justify-content:space-between;">
                <thead>
                    <tr>
                        <th colspan="1">Nom</th>
                        <th colspan="1">Prénom</th>
                        <th colspan="1">Groupe</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Justin</td>
                        <td>Didier</td>
                        <td>1</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <style scoped lang="scss">
        th {
            border:black solid 2px;
        }
    </style>