import './page/acme-demo-list';
import './snippet/de-DE.json';

const { Module } = Shopware;

Module.register('acme-demo-module', {
    type: 'plugin',
    name: 'AcmeDemoModule',
    title: 'acme-demo-module.general.title',
    description: 'acme-demo-module.general.description',
    color: '#9AA8B5',
    icon: 'default-action-settings',

    routes: {
        list: {
            component: 'acme-demo-list',
            path: 'list',
        },
    },

    navigation: [{
        id: 'acme-demo-module-list',
        parent: 'sw-extension',
        label: 'acme-demo-module.general.navigation',
        color: '#9AA8B5',
        path: 'acme.demo.module.list',
        position: 100,
    }],
});
