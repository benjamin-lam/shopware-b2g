# Roadmap (Entwurf)

## Phase 0 – Infrastruktur
- PSR-12, PHPStan (level max sinnvoll), PHPUnit
- CI: Lint, Stan, Test, Build/Package

## Phase 1 – Kern-Governance
- RolesPermissions (ACL-Erweiterung/Policy-Voter)
- ApprovalWorkflow (mehrstufige Freigaben, Eskalation)
- MandateManagement (Mandanten/Branding/Trennung)

## Phase 2 – Commerce/Finanzen
- CostCenters (Kostenstellen im Antrag/Checkout + Export)
- InvoicingXRechnung (XRechnung/ZUGFeRD Hooks)
- ErpIntegration (SAP/MACH Adapter, Outbox/Inbox)

## Phase 3 – Integrationen
- BrokerIntegration (Cloud-Broker API)
- SsoIdm (SAML/OIDC Anbindung, Rollen-Sync)

## Phase 4 – UX & Compliance
- CustomForms (Service-Anträge, Draft/Resume)
- Accessibility (WCAG/BITV Helpers)
- ThemingBranding (Mandanten-Themes)

## Phase 5 – Betrieb & Nachweis
- AuditLogging (revisionssichere Trails)
- Monitoring (Health/Metrics/Tracing)
- DrBackup (Backup/Restore/DR-Doku)

Querschnitt:
- Security (CSP, Nonces, Input-Hardening)
- Tests (Unit/Integration/E2E)
- Docs pro Modul (README, ADR)
