# Core Plugin Skeleton

## Was ist das?
Dieses Skeleton zeigt die Grundstruktur eines klassischen Shopware-Plugins mit Services, Migration und Konfiguration. Es dient als Ausgangspunkt für serverseitige Erweiterungen.

## Typische Anwendungsfälle
- Backend-Services, die Daten verarbeiten oder APIs anbinden.
- Registrieren von Events, Subscribern oder Cronjobs.
- DAL-Erweiterungen und Migrationslogik.
- Konfigurierbare Business-Prozesse innerhalb von Shopware.

## Kurzes How-to
1. `composer.json` anpassen und Autoload sicherstellen.
2. Plugin-Klasse `src/AcmeSwBasicsCore.php` erweitern (Install/Update Hooks).
3. Services in `src/Resources/config/services.xml` registrieren.
4. Migrationen (z. B. `Migration1700000000.php`) anpassen und neue Tabellen/Spalten definieren.
5. Plugin installieren (`bin/console plugin:install --activate AcmeSwBasicsCore`) und Migrationen ausführen (`bin/console database:migrate`).
6. Cache leeren (`bin/console cache:clear`) und Funktionen testen.

## Wann einsetzen / Wann nicht
**Wann einsetzen:** Wenn tiefgreifende Serverlogik benötigt wird oder wenn Cloud-Einschränkungen irrelevant sind.
**Wann nicht:** Für reine Frontend-/Headless-Anpassungen oder Cloud-Projekte ohne Zugriff auf das Dateisystem – dort Apps bevorzugen.

## Wo erweitern?
- `src/Resources/config/services.xml` – Services/Subscriber deklarieren.
- `src/Service/DemoService.php` – Beispiel-Service als Einstiegspunkt.
- `src/Migration/Migration1700000000.php` – Datenbankschema erweitern.
- `src/AcmeSwBasicsCore.php` – Plugin-Lebenszyklus.

## Weiterführend
- Begriffe: Plugin Lifecycle, Dependency Injection Container, DAL.
- Suche im Core nach `PluginLifecycleService` und `ContainerCompiler`.
- Events: `KernelEvents::REQUEST`, `OrderPlacedEvent` etc.

## Hinweise für Produktion
- Migrationen vor Deployments auf Testumgebung prüfen.
- Unit-/Integrationstests für Services schreiben.
- Logging/Monitoring (z. B. Monolog Channels) konfigurieren.
