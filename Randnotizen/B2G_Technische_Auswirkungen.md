# B2G – Technische Auswirkungen

## Architektur
- **Policy-getrieben** (RBAC/ABAC), Events, asynchron (Queues), idempotente Integrationen.
- **Mandantenfähigkeit** (Daten-/Sicht-/Budget-Trennung), Branding je Mandant.

## Sicherheit/Compliance
- **CSP**, TLS, Secrets-Management, Hardening.
- **Audit-Trails** (unveränderbar), Aufbewahrung, Export.
- **Privacy by Design** (Minimierung, Löschkonzepte).

## Schnittstellen
- **ERP** (Stammdaten/Order/Invoice), **Broker** (Punchout/PEPPOL), **IDM** (SAML/OIDC), **E-Rechnung** (XRechnung/ZUGFeRD).

## Betrieb
- **Monitoring/APM/Logs**, Alerting, **DR/Backup** (RPO/RTO).
- **CI/CD**, Tests (Unit/Integrations/E2E), Doku/ADRs.

## Shopware-Implikationen
- OOTB reicht selten: **Plugins/Custom-Module** für Rollen, Approval, CostCenter, E-Invoice, SSO, Audit, etc.

> @todo (PO): Checkliste ableiten (Welche technischen Leitplanken müssen erfüllt sein?).
> @todo (PO): Abhängigkeiten zu Spezialthemen (z. B. Monitoring, Backup, Security) strukturieren.
> @todo (PO): Akzeptanzkriterien für Architektur-Guidelines formulieren.
