# DAL Entity Skeleton

## Was ist das?
Dieses Skeleton zeigt, wie eine eigene DAL-Entity namens "Badge" in Shopware registriert wird. Es umfasst Definition, Migration und Service-Registrierung als Grundlage für weitere Features.

## Typische Anwendungsfälle
- Zusätzliche Datenmodelle für Marketing- oder Content-Labels.
- Referenzen von Produkten oder Kategorien auf eigene Entities.
- Verwaltung von Metadaten für Integrationen.
- Erweiterte CMS-Komponenten, die eigene Datenquellen benötigen.

## Kurzes How-to
1. Entity-Definition in `src/Core/Content/Badge/BadgeDefinition.php` anpassen.
2. Felder und Beziehungen definieren, ggf. Aggregates ergänzen.
3. Migration `src/Migration/Migration1700000001.php` aktualisieren.
4. Services in `src/Resources/config/services.xml` registrieren (Repository, Definition, Collection).
5. Plugin installieren, Migration ausführen, Cache leeren (`bin/console cache:clear`).
6. Repository über Dependency Injection oder im Admin verwenden.

## Wann einsetzen / Wann nicht
**Wann einsetzen:** Wenn strukturierte Daten benötigt werden, die nicht in vorhandene Entities passen.
**Wann nicht:** Für einfache Attribute – dort Custom Fields oder bestehende Relationen nutzen.

## Wo erweitern?
- `BadgeDefinition.php` – Entity-Felder, Beziehungen.
- `Migration1700000001.php` – Tabellenschema.
- `services.xml` – Registrierungen und Repository-Verwendung.

## Weiterführend
- Suche nach `EntityDefinition` im Core.
- Begriffe: Collection, Entity, Definition, DAL.
- Events: `EntityWrittenEvent` zur Reaktion auf Datenänderungen.

## Hinweise für Produktion
- Migrationsstrategie planen und Versionierung beachten.
- Tests für Repository-Operationen schreiben.
- Monitoring: Datenbankgröße und Konsistenz überwachen.
