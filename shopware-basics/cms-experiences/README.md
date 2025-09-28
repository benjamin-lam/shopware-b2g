# Erlebniswelten Element Skeleton

## Was ist das?
Dieses Skeleton demonstriert, wie ein eigener CMS-Block mit einem einfachen Textelement für die Storefront erstellt wird. Es dient als Ausgangspunkt, um Marketing-Inhalte modular aufzubauen und über das Admin CMS zu pflegen.

## Typische Anwendungsfälle
- Inline-Textblöcke mit Custom Fields oder Snippets.
- Landingpages mit wiederverwendbaren Textbausteinen.
- Schnelle Prototypen für Kampagnen-Elemente.
- Minimaler Einstieg für individuelle CMS-Komponenten.

## Kurzes How-to
1. Block- und Element-Dateien in `src/Resources/storefront/block/...` und `src/Resources/app/administration/...` anpassen.
2. Registrierung in `src/Resources/app/administration/src/module/cms/elements/acme-simple-text/index.js` erweitern (Config/Fielde).
3. CMS-Definition per `cms.xml` in das Plugin aufnehmen.
4. Plugin installieren und aktivieren, danach Cache leeren (`bin/console cache:clear`).
5. Im Admin unter Erlebniswelten den Block suchen, platzieren und Texte pflegen.
6. Storefront prüfen, ggf. Theme kompilieren (`bin/console theme:compile`).

## Wann einsetzen / Wann nicht
**Wann einsetzen:** Für leichtgewichtige Inhaltsblöcke ohne komplexe Interaktionen. Gut geeignet für Marketing-Teams mit CMS-Fokus.
**Wann nicht:** Bei umfangreichen Formularen, interaktiven Komponenten oder wenn Headless-only benötigt wird – dort besser dedizierte Vue/JS-Apps nutzen.

## Wo erweitern?
- `src/Resources/storefront/block/acme-simple-text/block.html.twig` – Ausgabe in der Storefront.
- `src/Resources/app/administration/src/module/cms/elements/acme-simple-text` – Admin-Konfiguration.
- `cms.xml` – Registrierung von Block und Element.

## Weiterführend
- Suche nach `cms-element` Komponenten im Core.
- Twig Blocks: `component_cms_block_*` als Referenz.
- Snippet Namespace: `cms.elements.*` für Übersetzungen.

## Hinweise für Produktion
- Responsive Verhalten testen und CSS erweitern.
- Übersetzungen für alle Sprachen anlegen.
- Deployment: CMS-Caches invalidieren und Erlebniswelten neu zuweisen.
