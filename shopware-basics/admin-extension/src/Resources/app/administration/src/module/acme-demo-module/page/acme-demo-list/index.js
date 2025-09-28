const { Component } = Shopware;

Component.register('acme-demo-list', {
    template: `
        <div class="acme-demo-list">
            <h1>{{ $tc('acme-demo-module.general.title') }}</h1>
            <p>[[Tabellen oder Listen über Repositories hier anbinden.]]</p>
        </div>
    `,
});
