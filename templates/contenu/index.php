<div>
    <div id="sample">Sample app text here</div>

    <div id="container">
        <button>Ajouter</button>
        <div class="recherche">
            <label for="recherche">Licenciés :</label>
            <input type="search" id="recherche" name="q" />
            <button>Recherche</button>
        </div>
    </div>

    <div style="display:flex;justify-content:center;">
        <table>
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Groupe</th>
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

    body {
        font-family: Arial, sans-serif;
    }

    #sample {
        margin: 10px 0;
    }

    #container {
        display: flex;
        justify-content: flex-end;
        margin-bottom: 20px;
        align-items: center;
    }

    button {
        margin-left: 10px;
        width: 110px;
        height: 36px;
    }

    .recherche {
        display: flex;
        align-items: center;
    }

    label {
        margin-right: 5px;
    }

    table {
        width: 100%;
        margin: 20px 10px 0 10px;
        border-collapse: collapse;
    }

    th, td {
        border: 2px solid black;
        padding: 8px;
        text-align: center;
    }

    #recherche {
        border: 1px solid black;
        border-radius: 2px;
    }

</style>