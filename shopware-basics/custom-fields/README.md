# Custom Fields & CMS Anbindung

## Was ist das?
Dieses Skeleton zeigt, wie ein Shopware-Plugin eigene Custom Fields registriert und sie in Erlebniswelten referenziert. Es dient als Ausgangspunkt, um zusätzliche Produktattribute wie ein `acme_badge`-Flag bereitzustellen und im Admin gepflegt nutzbar zu machen.

## Typische Anwendungsfälle
- Zusatzinformationen an Produkten oder Kategorien für Marketing-Labels.
- Steuerung von CMS-Sichtbarkeit über boolesche Flags.
- Anreicherungen für Rule Builder oder Flow Builder Bedingungen.
- Austauschbare Hinweise für Export-/Integrations-Szenarien.

## Kurzes How-to
1. Plugin-Gerüst in `custom_fields/` in ein eigenständiges Plugin verschieben oder ein bestehendes erweitern.
2. Custom-Field-Set in `src/Resources/config/custom_fields.xml` anpassen und mit gewünschten Entitäten verknüpfen.
3. CMS-Zuordnung in `src/Resources/config/cms.xml` ergänzen, falls das Feld im Erlebniswelten-Layout benötigt wird.
4. Plugin installieren (`bin/console plugin:install --activate`) und den Cache leeren (`bin/console cache:clear`).
5. Im Admin unter Einstellungen → System → Custom Fields das Set prüfen und in Produkt-Layouts verwenden.
6. Optional Regeln/Flows erstellen, die das Custom Field als Bedingung nutzen.

## Wann einsetzen / Wann nicht
**Wann einsetzen:** Wenn strukturierte Zusatzdaten ohne Core-Anpassungen benötigt werden. Ideal für einfache Booleans, Strings oder Selektoren, die im Admin gepflegt werden sollen.
**Wann nicht:** Bei komplexen Relationen oder großen Datenmengen; hier lieber eigene Entities oder CMS-Blöcke nutzen. Keine Verwendung, wenn reine temporäre Berechnungen nötig sind.

## Wo erweitern?
- `src/Resources/config/custom_fields.xml` – Definition des Custom-Field-Sets und der Felder.
- `src/Resources/config/cms.xml` – Verknüpfung der Custom Fields mit CMS-Komponenten.
- `OVERVIEW.md` – Ergänzungen zu Abhängigkeiten oder Besonderheiten dokumentieren.

## Weiterführend
- Suchbegriff: "CustomFieldSetDefinition" im Core.
- Ereignisse: `CustomFieldSetWrittenEvent` für Reaktionen.
- Administration-Komponenten: `sw-field` für eigene Editoren.

## Hinweise für Produktion
- Migrationen und Deployments auf Staging prüfen, bevor Felder live geschaltet werden.
- Tests für Datenintegrität und Default-Werte ergänzen.
- Observability: Logging einbauen, falls Custom Fields externe Integrationen triggern.
