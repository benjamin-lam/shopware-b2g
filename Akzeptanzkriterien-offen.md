## 📋 Offene Akzeptanzkriterien

### ✅ Allgemeine Default-Akzeptanzkriterien

*(können für viele Themen direkt genutzt oder als Vorlage angepasst werden)*

* **Wenn Bedingung X eintritt, dann Ergebnis Y, gemessen durch Z.**
* **Erfolgskriterium = messbar & reproduzierbar.**
* **Fehlerfall = definiert & dokumentiert.**
* **Nachweis = automatisiert oder dokumentiert im Audit-Log.**

---

### 📂 Themen & Status

* **Accessibility_Barrierefreiheit.md**
  → Default: „WCAG 2.1 AA erfüllt, Kontrast & Tastaturnavigation nachweisbar.“

* **Approval_Workflow.md**
  → Default: „Freigabe innerhalb definierter Zeit (z. B. <24h) erfolgt; Eskalation greift automatisch.“

* **Audit_Logging.md**
  → Default: „Alle sicherheitsrelevanten Events revisionssicher, exportierbar, unveränderbar gespeichert.“

* **B2G_Besonderheiten.md**
  → Bitte abstimmen (Minimalnachweise definieren + Abhängigkeiten zu Detailthemen).

* **B2G_Technische_Auswirkungen.md**
  → Default: „Technische Leitplanken eingehalten (Security, Backup, Monitoring vorhanden).“

* **Betrieb_&_Governance.md**
  → Default: „Reaktionszeiten eingehalten, Runbooks vorhanden & getestet.“

* **Broker_Integration_Punchout_&_Katalog.md**
  → Bitte abstimmen (OCI/cXML-Spezialfall).

* **Change_&_Release.md**
  → Default: „Release abgenommen, KPIs dokumentiert, Rückfallplan vorhanden.“

* **CustomForms.md**
  → Default: „Validierungsfehlerquote <x %, erfolgreiche Übergabe an Backend.“

* **Dokumentation_&_Archivierung.md**
  → Default: „Vollständigkeit & Aufbewahrungspflichten erfüllt; Nachweise prüfbar.“

* **DrBackup_&_Wiederherstellung.md**
  → Default: „RPO/RTO innerhalb vereinbarter Zeit nachweisbar (Test-Restore erfolgreich).“

* **ERP_Schnittstellen.md**
  → Bitte abstimmen (abhängig von ERP-System & Latenzanforderungen).

* **FAQ.md**
  → Default: „Alle Top-10 Standardfragen beantwortet; Aktualität geprüft.“

* **Invoicing_XRechnung_ZUGFeRD.md**
  → Bitte abstimmen (Spezialfall, Validierung & PEPPOL-Test).

* **Kostenstellen_&_Budgets.md**
  → Default: „Budgetprüfungen schlagen bei Überschreitung an; Reports vollständig.“

* **Mandate_Management.md**
  → Bitte abstimmen (Audit-Log-Nachweise & Ablaufregeln klären).

* **Monitoring_&_Alerting.md**
  → Default: „Alarme <x Minuten Reaktionszeit; SLA-Nachweise dokumentiert.“

* **Rollen_&_Rechte.md**
  → Default: „Rezertifizierung alle x Monate; Audit-Belege vorhanden.“

* **Single_Sign-On_&_IdM.md**
  → Default: „Token-Validierung, IdP-Failover, Deprovisioning <x Stunden.“

* **Testing_&_Abnahme.md**
  → Default: „Minimaler Testumfang erreicht; Abnahmeprotokoll dokumentiert.“

* **Theming_&_Branding_Mandanten.md**
  → Default: „Kontrastnachweis bestanden, Browserkompatibilität getestet.“

---

👉 Ergebnis:

* **Default-fähig:** Accessibility, Approval, Audit, Betrieb, Change, CustomForms, Dokumentation, Backup, FAQ, Kostenstellen, Monitoring, Rollen, SSO, Testing, Theming.
* **Bitte abstimmen:** B2G-Besonderheiten, B2G-Technische Auswirkungen (teilweise), Punchout/Katalog, ERP, XRechnung, Mandate.
