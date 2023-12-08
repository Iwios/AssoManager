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
                        <th class="tableau" colspan="1">Nom</th>
                        <th class="tableau" colspan="1">Prénom</th>
                        <th class="tableau" colspan="1">Groupe</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="tableau">Justin</td>
                        <td class="tableau">Didier</td>
                        <td class="tableau">1</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <style scoped lang="scss">
        .tableau {
            display: flex;
            justify-content: center;
        }

        th {
            border:black solid 2px;
        }
    </style>