# Randnotizen – B2G & Shopware (Nachschlagewerk)

Diese Sammlung bündelt die wichtigsten Problemstellungen und Lösungsansätze im **B2G**-Kontext (Behörden/öffentlicher Sektor) sowie deren **technische Auswirkungen** auf Shopware. Jede Seite ist kurz, prägnant und als Starthilfe für Implementierungen gedacht.

## Allgemeiner Teil
- [B2G_Besonderheiten](B2G_Besonderheiten.md) – Rechtliches/organisatorisches Umfeld, typische Prozesse, Pflichten.
- [B2G_Technische_Auswirkungen](B2G_Technische_Auswirkungen.md) – Architektur- und Sicherheitsimplikationen, Standards, Muster.

## Module (Shopware-spezifische Deep Dives)
- [RolesPermissions](RolesPermissions.md) – Granulare Rollen & Berechtigungen, Unterkonten.
- [MandateManagement](MandateManagement.md) – Vertretungsrechte/Bevollmächtigungen (Handeln im Namen der Organisation).
- [ApprovalWorkflow](ApprovalWorkflow.md) – Mehrstufige Genehmigungen, Eskalation, Budgetgrenzen.
- [CostCenters](CostCenters.md) – Kostenstellen, Kontierung, Budgetkontrolle & Reporting.
- [InvoicingXRechnung](InvoicingXRechnung.md) – E-Rechnung/XRechnung/ZUGFeRD, Pflichtangaben, Validierung.
- [BrokerIntegration](BrokerIntegration.md) – Punchout/OCI/cXML/PEPPOL, Kataloge & Bestellimport.
- [ErpIntegration](ErpIntegration.md) – Stammdaten/Preise/Orders, Sync-Strategien, Fehlerrobustheit.
- [SsoIdm](SsoIdm.md) – SAML/OIDC/LDAP, föderierte Logins, Rollen-Mapping.
- [ThemingBranding](ThemingBranding.md) – Corporate Design/Behörden-CI, Multi-Branding je Mandant.
- [Accessibility](Accessibility.md) – WCAG/BITV, Tests, Do/Don’t bei Themes & Plugins.
- [CustomForms](CustomForms.md) – Form-Builder, Validierung, Persistenz, Übergabe an Fachverfahren.
- [AuditLogging](AuditLogging.md) – Revisionssichere Protokolle, Scope, Aufbewahrung.
- [Monitoring](Monitoring.md) – Uptime/APM/Logs/Security-Signale, Alarmierung, Berichte.
- [DrBackup](DrBackup.md) – Backup/Restore, RPO/RTO, DR-Playbooks, Verschlüsselung.

> Hinweis: Inhalte sind **kundengenerisch** formuliert (keine Namen). Jede Seite enthält: *Kundenanforderung*, *Warum (Kontext)*, *B2G-Besonderheiten*, *Was fehlt OOTB*, *Technische Umsetzung (Allgemein)*, *Spezifisch für Shopware*, *Abhängigkeiten/Überschneidungen*, *Checkliste*.
