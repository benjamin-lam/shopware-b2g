# Glossar (B2G, Shopware & GovTech)

> Dieses Glossar erklärt die in `/Randnotizen` verwendeten Begriffe **kurz & präzise**.  
> Querverweise zeigen auf Randnotizen und (falls sinnvoll) auf Quellen-Nummern aus `/Quellen.md`.

## A

**ABAC (Attribute-Based Access Control)**  
Rechtevergabe anhand von Attributen (z. B. Kostenstelle, Betrag, Warengruppe). Ergänzt RBAC bei feingranularen Policy-Regeln.  
Siehe: `Randnotizen/Rollen_&_Rechte.md`.

**ADR (Architecture Decision Record)**  
Kurzprotokoll einer Architekturentscheidung inkl. Kontext, Alternativen, Entscheidung und Folgen.  
Siehe: `Randnotizen/B2G_Technische_Auswirkungen.md`.

**Audit-Trail**  
Revisionsfähige, unveränderbare Ereignis-Historie (wer/was/wann/warum). Grundlage für Prüf- und Nachweispflichten.  
Siehe: `Randnotizen/Audit_Logging.md` • Quellen: [4], [12].

## B

**Backpressure**  
Steuerung/Begrenzung von Verarbeitungsrate bei Lastspitzen, um Systeme stabil zu halten (Queues, Retries).  
Siehe: `Randnotizen/ERP_Schnittstellen.md`.

**BGG/BFSG**  
Bundesgleichstellungsgesetz / Barrierefreiheitsstärkungsgesetz – Rechtsrahmen Barrierefreiheit.  
Siehe: `Randnotizen/Accessibility_Barrierefreiheit.md` • Quellen: [26].

**BITV 2.0**  
Barrierefreie Informationstechnik-Verordnung: nationale Konkretisierung der WCAG-Anforderungen für öffentliche Stellen.  
Siehe: `Randnotizen/Accessibility_Barrierefreiheit.md` • Quellen: [3], [7], [14].

**BSI-Mindeststandard**  
Mindestanforderungen an Informationssicherheit, u. a. zu Security-Logs, SIEM, Angriffserkennung.  
Siehe: `Randnotizen/Audit_Logging.md`, `Monitoring_&_Alerting.md` • Quellen: [4], [12].

**B2G (Business-to-Government)**  
Leistungsbeziehung Unternehmen ↔ Behörde (E-Procurement, Portale, Fachverfahren).  
Siehe: `Randnotizen/B2G_Besonderheiten.md`.

## C

**cXML**  
XML-Standard für E-Procurement (z. B. PunchOutSetupRequest, PunchOutOrderMessage).  
Siehe: `Randnotizen/Broker_Integration_Punchout_&_Katalog.md`.

**CSP (Content Security Policy)**  
HTTP-Sicherheitsrichtlinie zur Begrenzung erlaubter Ressourcen, mindert XSS-Risiken.  
Siehe: `Randnotizen/B2G_Technische_Auswirkungen.md`.

## D

**DAL (Data Abstraction Layer)**  
Shopware-Abstraktionsschicht für Entities/Repositories/Events.  
Siehe: `Randnotizen/ERP_Schnittstellen.md`.

**Dead-Letter Queue (DLQ)**  
Auffang-Queue für nicht verarbeitbare Nachrichten zur späteren Analyse/Retry.  
Siehe: `Randnotizen/ERP_Schnittstellen.md`.

**Delegated Action**  
Handlung im eigenen Kontext „für eine andere Person/Organisation“, ohne vollständige Impersonation.  
Siehe: `Randnotizen/Mandate_Management.md`.

**DR (Disaster Recovery)**  
Wiederanlaufkonzept nach Störungen/Ausfällen, inkl. RPO/RTO und dokumentierten Wiederherstellungstests.  
Siehe: `Randnotizen/DrBackup_&_Wiederherstellung.md`.

## E

**EN 16931 (XRechnung)**  
Europäische Norm für elektronische Rechnungen; in DE als XRechnung umgesetzt.  
Siehe: `Randnotizen/Invoicing_XRechnung_ZUGFeRD.md` • Quellen: [8], [22].

**eVergabe**  
Elektronische Vergabeplattformen der öffentlichen Hand (Ausschreibung, Angebotsabgabe).  
Siehe: `Randnotizen/Approval_Workflow.md`.

**Experience Pages (Shopware)**  
CMS-Seiten/Layouts pro Sales-Channel/Mandant; Branding & Rechtstexte je Organisation.  
Siehe: `Randnotizen/Theming_&_Branding_Mandanten.md`.

## F

**Factur-X / ZUGFeRD**  
Hybrid aus PDF/A-3 + eingebettetem XML (Factur-X/ZUGFeRD) für Rechnungen.  
Siehe: `Randnotizen/Invoicing_XRechnung_ZUGFeRD.md` • Quellen: [17].

## I

**Idempotenz**  
Wiederholte Verarbeitung erzeugt denselben Endzustand (z. B. Order-Export).  
Siehe: `Randnotizen/ERP_Schnittstellen.md`.

**IdP (Identity Provider)**  
Zentrale Identitätsquelle (z. B. Azure AD, Keycloak) für SSO.  
Siehe: `Randnotizen/Single_Sign-On_&_IdM.md`.

**Impersonation**  
Handeln „als“ eine andere Person/Organisation (mit expliziter UI-Kennzeichnung).  
Siehe: `Randnotizen/Mandate_Management.md`.

## J

**JIT-Provisioning**  
Just-in-Time-Anlage/Zuordnung von Nutzern beim ersten SSO-Login.  
Siehe: `Randnotizen/Single_Sign-On_&_IdM.md`.

## L

**Leitweg-ID**  
Behördenkennung zur eindeutigen Zustellung von E-Rechnungen an öffentliche Empfänger.  
Siehe: `Randnotizen/Invoicing_XRechnung_ZUGFeRD.md` • Quellen: [8].

## M

**Mandant (Mandantenfähigkeit)**  
Strikte Trennung von Daten/Branding/Konfiguration pro Organisation.  
Siehe: `Randnotizen/Theming_&_Branding_Mandanten.md`.

**Monitoring (Synthetics)**  
Künstliche Requests/Checks zur Überwachung kritischer Endpunkte/Flows (ERP, Punchout, XRechnung).  
Siehe: `Randnotizen/Monitoring_&_Alerting.md` • Quellen: [9], [13], [16].

## N

**NIS-2**  
EU-Richtlinie zur Cybersicherheit kritischer/wichtiger Einrichtungen.  
Siehe: `Randnotizen/B2G_Technische_Auswirkungen.md` • Quellen: [5], [20].

## O

**OCI (Open Catalog Interface)**  
Schnittstellenstandard für Punchout/Katalog zwischen Shop und Beschaffungssystem.  
Siehe: `Randnotizen/Broker_Integration_Punchout_&_Katalog.md`.

**OZG (Onlinezugangsgesetz)**  
Digitalisierung staatlicher Leistungen; häufig mit Formularen/Antragsprozessen verknüpft.  
Siehe: `Randnotizen/CustomForms.md`.

## P

**PEPPOL**  
Pan-European Public Procurement Online: Netzwerk/Standards für elektronische Beschaffung (z. B. eRechnung).  
Siehe: `Randnotizen/Invoicing_XRechnung_ZUGFeRD.md` • Quellen: [8], [22].

**Policy (Zugriffsregel)**  
Technischer Ausdruck einer geschäftlichen Regel (z. B. „Betrag > 1.000 € erfordert Stufe 2“).  
Siehe: `Randnotizen/Approval_Workflow.md`, `Rollen_&_Rechte.md`.

**Punchout**  
Echtzeit-Katalogaufruf aus einem eProcurement-System; Warenkorb wird zurückgegeben (OCI/cXML).  
Siehe: `Randnotizen/Broker_Integration_Punchout_&_Katalog.md`.

## R

**RBAC (Role-Based Access Control)**  
Rechtevergabe basierend auf Rollen (z. B. Besteller, Freigeber, Admin).  
Siehe: `Randnotizen/Rollen_&_Rechte.md`.

**RPO / RTO**  
Recovery Point/Time Objective: maximaler Datenverlust / maximale Wiederanlaufzeit.  
Siehe: `Randnotizen/DrBackup_&_Wiederherstellung.md`.

## S

**SAML 2.0 / OpenID Connect (OIDC)**  
Standards für Single Sign-On mit Assertions/ID-Tokens.  
Siehe: `Randnotizen/Single_Sign-On_&_IdM.md`.

**Schematron**  
Regelbasierte XML-Validierung (z. B. XRechnung).  
Siehe: `Randnotizen/Invoicing_XRechnung_ZUGFeRD.md`.

**SIEM / SOC**  
Security-Informations- und Ereignismanagement / Security Operations Center (Detektion, Korrelation, Reaktion).  
Siehe: `Randnotizen/Audit_Logging.md`, `Monitoring_&_Alerting.md` • Quellen: [4], [12].

**SSO (Single Sign-On)**  
Zentraler Login über IdP; Shop vertraut Signatur/Claims.  
Siehe: `Randnotizen/Single_Sign-On_&_IdM.md`.

## T

**Theme / Sales Channel (Shopware)**  
Visuelle/inhaltliche Ausprägung je Kanal/Organisation; rechtliche Seiten pro Channel.  
Siehe: `Randnotizen/Theming_&_Branding_Mandanten.md`.

## U

**UBL (Universal Business Language)**  
XML-Standard für Geschäftsdokumente (u. a. Aufträge/Rechnungen), Basis für PEPPOL BIS.  
Siehe: `Randnotizen/Broker_Integration_Punchout_&_Katalog.md`, `Invoicing_XRechnung_ZUGFeRD.md`.

## W

**WCAG 2.1 AA**  
Richtlinien für barrierefreie Webinhalte; AA ist der verpflichtende Ziellevel für Behörden.  
Siehe: `Randnotizen/Accessibility_Barrierefreiheit.md` • Quellen: [3], [7], [13].

**WORM**  
Write-Once-Read-Many: Unveränderbare Speicherung (z. B. Audit-Export).  
Siehe: `Randnotizen/Audit_Logging.md`.

---
