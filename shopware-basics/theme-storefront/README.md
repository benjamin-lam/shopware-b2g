# Theme Storefront Skeleton

## Was ist das?
Dieses Skeleton liefert ein minimales Shopware-Theme inklusive Twig-Override, SCSS-Grundlage und JS-Plugin-Stub. Es dient als Startpunkt für visuelle Anpassungen ohne den Core zu verändern.

## Typische Anwendungsfälle
- Logos, Farben und Layouts projektspezifisch anpassen.
- JavaScript-Hooks für Tracking oder Interaktionen einfügen.
- SCSS-Variablen überschreiben und Komponenten erweitern.
- Twig-Strukturen für Header/Footer individualisieren.

## Kurzes How-to
1. `composer.json` prüfen und Paketnamen anpassen (falls eigenes Repository).
2. Plugin-Klasse `src/AcmeSwBasicsTheme.php` um Theme-Config erweitern.
3. Twig, SCSS und JS nach Projektanforderungen füllen.
4. Theme installieren (`bin/console plugin:install --activate AcmeSwBasicsTheme`).
5. Cache leeren (`bin/console cache:clear`) und Theme kompilieren (`bin/console theme:compile`).
6. Im Admin das Theme einem Verkaufskanal zuweisen und testen.

## Wann einsetzen / Wann nicht
**Wann einsetzen:** Für Layout/Styling-Anpassungen an der Storefront. Empfohlen bei Projekten mit klassischer Storefront.
**Wann nicht:** Bei reinen Headless-Setups oder wenn nur einzelne CMS-Elemente angepasst werden müssen – dort schlankere Lösungen wählen.

## Wo erweitern?
- `src/AcmeSwBasicsTheme.php` – Einstiegspunkt, Theme-Konfiguration.
- `src/Resources/storefront/layout/header/logo.html.twig` – Beispiel Override.
- `src/Resources/app/storefront/src/plugin/acme-example.plugin.js` – JS-Injektionen.
- `src/Resources/app/storefront/src/scss/base.scss` – SCSS-Basis.

## Weiterführend
- Suche nach `ThemeCompiler` im Core.
- Twig Inheritance (`{% sw_extends %}`) verstehen.
- SCSS Variablen: `@import 'component/_variables.scss'` im Core prüfen.

## Hinweise für Produktion
- Theme-Builds im CI erzeugen, um Deployments zu beschleunigen.
- Assets versionieren (Cache-Busting) und CDN berücksichtigen.
- Regressionstests für kritische Templates einplanen.
