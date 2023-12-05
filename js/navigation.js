// js/navigation.js

(function ($, OC) {
    OC.Plugins.register('OCA.MyApp.Navigation', {
        attach: function (header) {
            var navigation = header.find('#navigation');

            // Ajoutez vos catégories principales ici
            var categories = [
                { label: 'Gestion des licenciés', id: 'licences', submenus: ['Licencié 1', 'Licencié 2'] },
                { label: 'Gestion des plannings', id: 'plannings', submenus: ['Planning 1', 'Planning 2'] }
            ];

            // Construisez le menu principal
            categories.forEach(function (category) {
                var item = $('<li><a href="#" data-id="' + category.id + '">' + category.label + '</a></li>');
                navigation.find('.menu').append(item);

                // Ajoutez les sous-menus si disponibles
                if (category.submenus && category.submenus.length > 0) {
                    var submenu = $('<ul class="submenu"></ul>');
                    category.submenus.forEach(function (submenuItem) {
                        submenu.append('<li><a href="#">' + submenuItem + '</a></li>');
                    });
                    item.append(submenu);
                }
            });

            // Gérez le dépliage/repliage des sous-menus
            navigation.on('click', '.menu a', function (event) {
                event.preventDefault();
                var submenu = $(this).siblings('.submenu');
                submenu.toggleClass('open');
            });
        }
    });
})(jQuery, OC);
