const { Component, CMS } = Shopware;

Component.register('sw-cms-el-acme-simple-text', {
    template: '<div class="sw-cms-el-preview-acme-simple-text">[[Platzhalter: Vue Template ergänzen]]</div>',

    created() {
        // Hier kann später eine Initialisierung erfolgen, z. B. Laden von Defaults.
    },
});

CMS.registerCmsElement({
    name: 'acme-simple-text',
    label: 'Acme Simple Text',
    component: 'sw-cms-el-acme-simple-text',
    previewComponent: 'sw-cms-el-acme-simple-text',
    configComponent: 'sw-cms-el-config-text',
    defaultConfig: {
        content: {
            source: 'static',
            value: '[[Text per Admin setzen]]',
        },
    },
});
