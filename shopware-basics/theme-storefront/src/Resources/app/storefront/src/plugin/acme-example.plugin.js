import Plugin from 'src/plugin-system/plugin.class';

export default class AcmeExamplePlugin extends Plugin {
    init() {
        // Hier eigene JS-Logik ergänzen, z. B. DOM-Manipulationen oder Tracking.
        this.el.dataset.acmeExample = 'initialized';
    }
}

// Registrierung über main.js ergänzen, sobald weitere Plugins existieren.
