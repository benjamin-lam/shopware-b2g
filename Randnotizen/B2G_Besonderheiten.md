# B2G – Besonderheiten (Allgemein)

## Kundenanforderung (einfach)
Beschaffungs-/Service-Portale für Behörden müssen **rechtskonform, nachvollziehbar, barrierefrei, mandantenfähig** und **prüfbar** betrieben werden.

## Warum ist das so?
Öffentliche Mittel, Vergabe-/Haushaltsrecht, Prüfbarkeit (Rechnungshof/Revision), Transparenzpflicht, Dokumentations- und Archivierungspflichten.

## Besonderheiten im B2G
- **Vergabe/Ausschreibung**: definierte Prozesse, Schwellenwerte, Nachweise.
- **Compliance**: DSGVO, Informationssicherheit (BSI-Vorgaben), Protokollierung.
- **Barrierefreiheit**: WCAG/BITV verbindlich.
- **E-Rechnung**: XRechnung/ZUGFeRD, Leitweg-ID etc.
- **Mandanten/Organisationen**: Hierarchien, Rollen, Budgetstellen.
- **Identität/SSO**: Föderierte Logins, zentrale IDM-Vorgaben.
- **Lifecycle & Nachweis**: Versionierung, Freigaben, Audit-Trails.

## Was bedeutet das für die technische Umsetzung?
- Feingranulare **Rollen/Workflows**; strikte **Mandantentrennung**.
- **Sichere AuthN/Z** (SAML/OIDC), **CSP/Hardening**, Logging.
- **Erweiterte Datenmodelle** (Kostenstellen, Mandate, Genehmigungen).
- **Integrationen/Standards** (PEPPOL/OCI/cXML/ERP/IDM).
- **Automatisierte Tests & Doku** als Projektstandard.

## Checkliste (kurz)
- Rollen/Workflows geklärt? • Mandantenmodell? • E-Rechnung? • SSO/IDM? • WCAG? • Audit/Monitoring/Backup? • Externe Standards & Schnittstellen?

> @todo (PO): Akzeptanzkriterien für die Gesamtsicht (Welche Minimalnachweise müssen erfüllt sein?) definieren.
> @todo (PO): Abhängigkeiten zu Detail-Randnotizen explizit verlinken (z. B. Approval ↔ Kostenstellen ↔ ERP).
