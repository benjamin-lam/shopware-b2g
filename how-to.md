## 1) Vergabeprozesse, Compliance & Revisionssicherheit

**Erweiterungsmöglichkeit:** Eigenes **Audit-Logging-Plugin** (Event-Subscriber, unveränderbarer WORM-Store/Hash-Chain, Export an SIEM).
**Begründung:** B2G verlangt lückenlose, jahrelang prüfbare Nachweise (Vergabevermerk, Entscheidungsgründe, „wer hat was wann getan“). Shopware protokolliert Basisevents, aber ein **revisionssicherer, manipulationsresistenter Audit-Trail** (inkl. sicherheitsrelevanter Events) muss als Plugin ergänzt werden, idealerweise mit externer Ablage/Signierung und Auswertungen für Revision/Rechnungshof.   

---

## 2) Mehrstufige Genehmigungs-Workflows (Vier-Augen-Prinzip, Eskalationen)

**Erweiterungsmöglichkeit:** Shopware **B2B-Order Approval** als Basis + **Custom Plugin** für mehrstufige/komplexe Regeln, Fristen & Eskalationen.
**Begründung:** Die B2B-Komponente erlaubt einfache Freigaberegeln (z. B. ab Betrag X), **mehrstufige, kombinierte Bedingungen** und Eskalationen sind **nur begrenzt** abbildbar und benötigen eine eigene Workflow-Logik inklusive Historisierung/Kommentare.    

---

## 3) Organisationsstruktur, Rollen & Rechte (RBAC/ABAC)

**Erweiterungsmöglichkeit:** Shopware **B2B Components** (Unterkonten, Rollen) + **ACL-Erweiterungen** im Plugin (feingranulare Rechte, ABAC-ähnliche Regeln).
**Begründung:** B2G braucht hierarchische Rollen, Limits, Mandantentrennung und protokollierte Rezertifizierung. Die B2B-Suite liefert Unterkonten/Rollen als Grundgerüst; **feinere Domänenrechte** (z. B. „Kostenstellen-Controller“, „Rechnungsprüfer“) und Attribut-basierte Freigaben müssen ergänzt werden.   

---

## 4) Stellvertretung & Delegation („im Auftrag von“)

**Erweiterungsmöglichkeit:** **Mandats-/Delegations-Plugin** (Impersonation oder Delegated Actions, klare UI-Kennzeichnung, Audit-Trail).
**Begründung:** Vertretungsregeln mit Zeitraum, Scope und Betragslimits sind in Verwaltungen essenziell. Technisch sinnvoll: explizite Mandate mit **sichtbarer Kennzeichnung**, Protokollierung „A handelte für B“, automatische Ablauf-/Entzugslogik.   

---

## 5) Kostenstellen & Budgets (Pflichtzuordnung, Budgetprüfung)

**Erweiterungsmöglichkeit:** **Custom DAL-Entity** „Kostenstelle“, Checkout-Erweiterung (Pflichtfeld), **Budget-Validator** + **ERP-Sync** (Stammdaten/Verbräuche).
**Begründung:** Nicht nativ vorhanden. Benötigt Entity-Modell, Validierung „Restbudget ≥ Bestellwert“, Reservierung/Rückbuchung, Reporting und zyklische Bereitstellung (z. B. jährlich) – typischerweise gekoppelt an das Finanz-/ERP-System.    

---

## 6) Elektronische Rechnungen (XRechnung/ZUGFeRD/Peppol)

**Erweiterungsmöglichkeit:** **Dokumenten-Hook** + XML-Generator/Validator (Schematron), optionale **Peppol-Anbindung**; Zusatzfelder (z. B. Leitweg-ID).
**Begründung:** Shopware erzeugt PDFs, **XRechnung ist nicht OOTB**. Benötigt Felder/Validierung, parallele XML-Erzeugung zum PDF und technische Prüfungen (KoSIT), plus Versandweg (z. B. Peppol Service).  

---

## 7) E-Procurement/Punchout (OCI/cXML) & Katalog-Integrationen

**Erweiterungsmöglichkeit:** **Punchout-Controller/Endpoints** (OCI/cXML), Mapping-Layer, robuste **Queue-basierte** Schnittstellen.
**Begründung:** B2G-Beschaffung bindet externe E-Procurement-Systeme an. Dafür braucht es **spezielle Protokolle** (OCI/cXML) mit End-to-End-Tests und Retry/Idempotenz in der Integration.  

---

## 8) Single Sign-On & IdM-Anbindung (SAML/OIDC)

**Erweiterungsmöglichkeit:** **SSO-Plugin** (SAML/OIDC) + **Rollen-Mapping** aus IdP-Attributen.
**Begründung:** Shopware bringt SSO nicht nativ; für Behördenlogin ist IdP-Anbindung üblich. Zusätzlich braucht es **attributbasiertes Rollen-Mapping** (z. B. IdP-Gruppe → Shop-Rolle) und Protokollierung der Rechtevergabe/-änderungen.  

---

## 9) Barrierefreiheit (WCAG/BITV)

**Erweiterungsmöglichkeit:** **Accessible Theme** (Template/JS/SCSS-Pattern), CI-gestützte A11y-Tests (axe/Pa11y), BITV-Review-Checklisten.
**Begründung:** Öffentliche Stellen verlangen BITV-Konformität. Shopware ist anpassbar, aber A11y erfordert **konsequente Komponenten-Patterns** und regelmäßige Prüfungen, um einen BITV-Test zu bestehen. 

---

## 10) Mandantenfähigkeit & Branding (Sales Channels)

**Erweiterungsmöglichkeit:** **Sales-Channels je Mandant**, Theme-Varianten, kanalgebundene CMS/Impressen; strikte Datenfilterung.
**Begründung:** Unterschiedliche Behörden (Marken, Inhalte, AGB) bei getrennter Datensicht lassen sich sauber über **Channels + Themes** lösen – wichtig: keine Datenüberschneidung, klare Trennung in APIs/Backoffice. 

---

## 11) Betrieb, Monitoring, SLAs & Governance

**Erweiterungsmöglichkeit:** **Health-Endpoint**, Scheduled Tasks (Selbsttests), Integration in **Prometheus/Grafana, ELK, Sentry**, Alarmierung/Runbooks.
**Begründung:** Nachweisbare Verfügbarkeit (SLA), proaktive Alarme, Messbarkeit (Jobs gelaufen? ERP-Export ok?), Change-/Rollback-Strategien (Blue-Green, Snapshots) sind Must-haves im Public-Sector-Betrieb.  

---

## 12) Test & Abnahme (End-to-End, Schnittstellen, Barrierefreiheit)

**Erweiterungsmöglichkeit:** **E2E-Pipelines** (Login→Warenkorb→Approval→ERP-Export→XRechnung), **Schema-Validation** (XRechnung), wiederkehrende **A11y-Regression**.
**Begründung:** Formale Abnahmen erfordern reproduzierbare Nachweise über **funktionale und regulatorische** Anforderungen (inkl. Schematron-Prüfung, OCI/cXML-Tests, BITV-Checks) – alles protokolliert und archivierbar. 

---

### Kurzfazit

* **„Out-of-the-box“** (B2B-Suite) deckt Unterkonten/Rollen, einfache Freigaben und Org-Units ab.
* **Pflicht-Customizing** im B2G: **Audit-Trail, Kostenstellen/Budgets, XRechnung, Punchout, SSO-Mapping, A11y-Härtung, Monitoring/SLAs.**  
