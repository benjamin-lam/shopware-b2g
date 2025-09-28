# ADR-0001: Release-Strategie

## Status
Entwurf – anpassen und finalisieren, sobald der Prozess abgestimmt ist.

## Kontext
Wir veröffentlichen regelmäßig Shopware-Erweiterungen und benötigen einen konsistenten Prozess für Releases, inklusive SemVer, Sicherheitsprüfung und Kommunikationsplan.

## Entscheidung
- Wir folgen SemVer (MAJOR.MINOR.PATCH).
- Sicherheitsrelevante Fixes erhalten Patch-Release mit Hotfix-Prozess.
- Release-Candidate Phase mit manuellen Tests und automatisierten Pipelines.
- Changelog wird pro Release gepflegt und mit Store-Eintrag synchronisiert.

## Konsequenzen
- Team muss Feature-Flags und Migrationspfade planen.
- Automatisierte Tests (Unit, Integration, Smoke) sind Pflicht vor Release.
- Sicherheitsreview (Dependency-Check, Secrets, Permissions) vor Freigabe.
- Rollback-Plan und Monitoring aktiv halten.
