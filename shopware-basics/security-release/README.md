# Security & Release Skeleton

## Was ist das?
Dieses Skeleton bündelt Best Practices für Releases, Versionierung und Security-Checks von Shopware-Erweiterungen. Es enthält eine ADR-Vorlage und Checklisten.

## Typische Anwendungsfälle
- Planung einer neuen Plugin-Version.
- Sicherheitsüberprüfung vor Store-Release.
- Dokumentation von Breaking Changes.
- Abstimmung zwischen Dev, QA und Ops.

## Kurzes How-to
1. Release-Plan erstellen und in `ADR-0001-release-strategy.md` festhalten.
2. SemVer-Entscheidungen dokumentieren (Major/Minor/Patch).
3. Sicherheits-Checkliste abarbeiten (Dependencies, Secrets, Permissions).
4. Tests ausführen (Unit, Integration, E2E) und Ergebnisse dokumentieren.
5. Changelog vorbereiten und Store-Metadaten aktualisieren.
6. Deployment-Plan mit Rollback definieren.

## Wann einsetzen / Wann nicht
**Wann einsetzen:** Vor jedem offiziellen Release oder sicherheitsrelevanten Patch.
**Wann nicht:** Für interne Prototypen ohne Veröffentlichung – dort genügt vereinfachte Dokumentation.

## Wo erweitern?
- `ADR-0001-release-strategy.md` – Architekturentscheidungen.
- `README.md` – Checklisten erweitern.
- Weitere ADRs hinzufügen (z. B. Security Policy).

## Weiterführend
- Begriffe: SemVer, Security Advisory, Store Submission.
- Suche nach `ReleaseService` im Core.
- Themen: Code Signing, App Store Anforderungen.

## Hinweise für Produktion
- Migrationslisten doppelt prüfen, Rollback-Plan parat haben.
- CVEs beobachten und Dependencies regelmäßig aktualisieren.
- Security-Tests (z. B. SAST/DAST) automatisieren.
