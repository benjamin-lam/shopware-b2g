# Randnotizen – B2G & Shopware (Nachschlagewerk)

Diese Sammlung bündelt die wichtigsten Problemstellungen und Lösungsansätze im **B2G**-Kontext (Behörden/öffentlicher Sektor) sowie deren **technische Auswirkungen** auf Shopware. Jede Seite ist kurz, prägnant und als Starthilfe für Implementierungen gedacht.
> **Navigation:** [Index](Randnotizen/Index.md) · [FAQ](Randnotizen/FAQ.md)

## Allgemeiner Teil
- [B2G_Besonderheiten](Randnotizen/B2G_Besonderheiten.md) – Rechtliches/organisatorisches Umfeld, typische Prozesse, Pflichten.
- [B2G_Technische_Auswirkungen](Randnotizen/B2G_Technische_Auswirkungen.md) – Architektur- und Sicherheitsimplikationen, Standards, Muster.
> @todo (PO): Beispiel-Skeleton für B2G_Besonderheiten anlegen / Scope abstimmen
> @todo (PO): Beispiel-Skeleton für B2G_Technische_Auswirkungen anlegen / Scope abstimmen

## Module (Shopware-spezifische Deep Dives)
- [Rollen_&_Rechte](Randnotizen/Rollen_&_Rechte.md) – Granulare Rollen & Berechtigungen, Unterkonten.
- [Mandate_Management](Randnotizen/Mandate_Management.md) – Vertretungsrechte/Bevollmächtigungen (Handeln im Namen der Organisation).
- [Approval_Workflow](Randnotizen/Approval_Workflow.md) – Mehrstufige Genehmigungen, Eskalation, Budgetgrenzen.
- [Kostenstellen_&_Budgets](Randnotizen/Kostenstellen_&_Budgets.md) – Kostenstellen, Kontierung, Budgetkontrolle & Reporting.
- [Invoicing_XRechnung_ZUGFeRD](Randnotizen/Invoicing_XRechnung_ZUGFeRD.md) – E-Rechnung/XRechnung/ZUGFeRD, Pflichtangaben, Validierung.
- [Broker_Integration_Punchout_&_Katalog](Randnotizen/Broker_Integration_Punchout_&_Katalog.md) – Punchout/OCI/cXML/PEPPOL, Kataloge & Bestellimport.
- [ERP_Schnittstellen](Randnotizen/ERP_Schnittstellen.md) – Stammdaten/Preise/Orders, Sync-Strategien, Fehlerrobustheit.
- [Single_Sign-On_&_IdM](Randnotizen/Single_Sign-On_&_IdM.md) – SAML/OIDC/LDAP, föderierte Logins, Rollen-Mapping.
- [Theming_&_Branding_Mandanten](Randnotizen/Theming_&_Branding_Mandanten.md) – Corporate Design/Behörden-CI, Multi-Branding je Mandant.
- [Accessibility_Barrierefreiheit](Randnotizen/Accessibility_Barrierefreiheit.md) – WCAG/BITV, Tests, Do/Don’t bei Themes & Plugins.
- [CustomForms](Randnotizen/CustomForms.md) – Form-Builder, Validierung, Persistenz, Übergabe an Fachverfahren.
- [Audit_Logging](Randnotizen/Audit_Logging.md) – Revisionssichere Protokolle, Scope, Aufbewahrung.
- [Monitoring_&_Alerting](Randnotizen/Monitoring_&_Alerting.md) – Uptime/APM/Logs/Security-Signale, Alarmierung, Berichte.
- [DrBackup_&_Wiederherstellung](Randnotizen/DrBackup_&_Wiederherstellung.md) – Backup/Restore, RPO/RTO, DR-Playbooks, Verschlüsselung.
> @todo (PO): Beispiel-Skeleton für Betrieb & Governance anlegen / Scope abstimmen
> @todo (PO): Beispiel-Skeleton für Change & Release anlegen / Scope abstimmen
> @todo (PO): Beispiel-Skeleton für Dokumentation & Archivierung anlegen / Scope abstimmen
> @todo (PO): Beispiel-Skeleton für Testing & Abnahme anlegen / Scope abstimmen

> Hinweis: Inhalte sind **kundengenerisch** formuliert (keine Namen). Jede Seite enthält: *Kundenanforderung*, *Warum (Kontext)*, *B2G-Besonderheiten*, *Was fehlt OOTB*, *Technische Umsetzung (Allgemein)*, *Spezifisch für Shopware*, *Abhängigkeiten/Überschneidungen*, *Checkliste*.
