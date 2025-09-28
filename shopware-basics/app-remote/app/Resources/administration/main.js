/* eslint-disable no-undef */
Shopware.Module.register('acme-app-settings', {
    type: 'plugin',
    name: 'Acme App Settings',
    title: 'acme-app.general.main',

    routes: {
        index: {
            component: 'sw-settings-index',
            path: 'index',
        },
    },

    settingsItem: {
        group: 'plugins',
        to: 'acme.app.settings.index',
        icon: 'default-basic-settings',
        label: 'acme-app.general.menu',
    },
});

// Projektteams fügen weitere Komponenten hinzu, um Remote-Konfigurationen zu speichern.
