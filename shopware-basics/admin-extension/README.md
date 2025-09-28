# Administration Extension Skeleton

## Was ist das?
Dieses Skeleton stellt ein minimales Administration-Modul bereit, das im Shopware Backend eingebunden wird. Es dient als Grundlage für eigene Vue-Komponenten, Listen und Detailseiten.

## Typische Anwendungsfälle
- Custom-Module zur Pflege projektspezifischer Daten.
- Dashboards oder Übersichten mit API-Anbindungen.
- Erweiterung bestehender Admin-Funktionen durch zusätzliche Tabs.
- Interne Tools für Support- oder Content-Teams.

## Kurzes How-to
1. Einstieg in `src/Resources/app/administration/src/main.js` prüfen und Module registrieren.
2. Modulstruktur in `module/acme-demo-module/` erweitern (Routing, Komponenten, Services).
3. Snippets in `snippet/de-DE.json` anpassen, weitere Sprachen ergänzen.
4. Module mit `module.xml` aktivieren.
5. Plugin/Bundle installieren und Administration neu kompilieren (`bin/console administration:build`).
6. Cache leeren (`bin/console cache:clear`) und Modul im Admin unter Inhalt → Plugins testen.

## Wann einsetzen / Wann nicht
**Wann einsetzen:** Für individuelle Backend-Arbeitsoberflächen oder Konfigurationen, die Shopware nicht ab Werk liefert.
**Wann nicht:** Wenn lediglich API-Endpunkte konsumiert werden sollen (dann ggf. externe Tools) oder für reine Storefront-Anpassungen.

## Wo erweitern?
- `src/Resources/app/administration/src/main.js` – Modulregistrierung.
- `module/acme-demo-module/page/acme-demo-list/index.js` – Vue-Komponenten.
- `module/acme-demo-module/snippet/de-DE.json` – Übersetzungen.
- `module.xml` – Modul-Definition.

## Weiterführend
- Begriffe: ModuleFactory, ComponentFactory, RepositoryFactory.
- Suche im Core nach `sw-extension-component-section`.
- Themen: Administration Bundling, ACL Berechtigungen.

## Hinweise für Produktion
- ACL-Rechte für Module definieren.
- UI-Tests (z. B. Cypress) einplanen.
- Buildzeiten berücksichtigen und Artefakte cachen.
