# Testing & CI Skeleton

## Was ist das?
Dieses Skeleton liefert eine minimale Test- und QA-Konfiguration für Shopware-Projekte inklusive PHPUnit, PHPStan und PHP-CS-Fixer.

## Typische Anwendungsfälle
- Aufbau einer CI-Pipeline mit Standard-Tools.
- Lokales Ausführen von Tests und Static Analysis.
- Vorlage für Projekt-spezifische Konfigurationen.
- Dokumentation von Quality-Gates.

## Kurzes How-to
1. `composer.json` im Hauptprojekt um PHPUnit, PHPStan und PHP-CS-Fixer ergänzen.
2. `phpunit.xml.dist`, `phpstan.neon.dist` und `.php-cs-fixer.dist.php` anpassen.
3. `tests/bootstrap.php` mit Autoload ergänzen.
4. Tests in `tests/` ablegen und CI-Workflow konfigurieren.
5. Kommandos lokal ausprobieren (`vendor/bin/phpunit`, `vendor/bin/phpstan analyse`).
6. Ergebnisse in CI visualisieren (z. B. GitHub Actions, GitLab CI).

## Wann einsetzen / Wann nicht
**Wann einsetzen:** Wenn ein Projekt strukturierte Tests und Static Analysis benötigt.
**Wann nicht:** Für Prototypen ohne QA-Anforderungen (kurzlebig).

## Wo erweitern?
- `phpunit.xml.dist` – Test-Suiten, Coverage.
- `phpstan.neon.dist` – Level, IgnoreregEx.
- `.php-cs-fixer.dist.php` – Coding-Style-Regeln.
- `tests/bootstrap.php` – Setup/Mocks.

## Weiterführend
- Begriffe: TestSuite, Level 7/8, PSR-12.
- Suche im Core nach bestehenden Tests (`tests/integration`).
- Themen: Mutation Testing, Static Analysis Baseline.

## Hinweise für Produktion
- Tests automatisiert ausführen (CI).
- Reports versionieren/archivieren.
- Fail-Fast-Strategien (z. B. Lint vor Tests) definieren.
