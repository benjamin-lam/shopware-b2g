## 🔧 Best Practices Workflow für deine TODO-Liste

### 1. **Inventarisieren & Kategorisieren**

* Alle TODOs in eine **zentrale Datei oder Datenbank** ziehen (z. B. `todos.csv`, `todos.json`, Issue-Tracker).
* Attribute vergeben:

  * **Typ:** Doku / Code / Architektur / Governance
  * **Rolle:** Entwickler:in, Product Owner, Architekt:in, Tester:in
  * **Priorität:** hoch, mittel, niedrig
  * **Komplexität:** schnell erledigt / braucht Recherche / braucht Abstimmung

👉 Ergebnis: aus der losen Markdown-Sammlung wird ein **geordnetes Backlog**.

---

### 2. **Clustern nach Themen**

Deine Beispiele zeigen schon klare Blöcke:

* **Beispiele/** → eher technische Skeletons, Code & HowTos
* **Randnotizen/** → eher PO/PM-Aufgaben: Akzeptanzkriterien, Abhängigkeiten, Dokumentation
* **README.md** → „Meta-TODOs“ fürs Gesamtprojekt

👉 Empfehlung: **zwei Ströme** aufmachen:

* **Tech-Track:** Skeletons, Code, Hooks, Schnittstellen
* **PO/PM-Track:** Akzeptanzkriterien, Scope, Governance, Abhängigkeiten

---

### 3. **Priorisieren**

* **Quick Wins:** Kleine Ergänzungen („URL nachtragen“, „Checkliste erstellen“) zuerst.
* **Hoher Hebel:** Akzeptanzkriterien → die schaffen Klarheit für alle weiteren Arbeiten.
* **Blocker:** Dinge, die andere TODOs erst ermöglichen (z. B. „Scope abstimmen“ in der README.md).

👉 Kannst du mit einem **Kanban-Board** oder GitHub Projects sichtbar machen.

---

### 4. **Verantwortlichkeiten zuordnen**

* Alles mit `(PO)` → Product Owner/Projektleitung
* Alles mit Skeleton/Code → Entwickler:in
* „Quellen ergänzen“ → Researcher/Redaktion
* „Abhängigkeiten dokumentieren“ → Architekt:in oder Tech-Lead

👉 So verhinderst du, dass du selbst alles „querbeet“ anpackst.

---

### 5. **Arbeitsmodus festlegen**

* **Timeboxing:** 1–2h Slots pro Thema, nicht quer springen.
* **Definition of Done pro Kategorie:**

  * Doku-TODO = Markdown ergänzt & PR gemerged
  * Code-TODO = Skeleton + README + Beispiel läuft
  * PO-TODO = Akzeptanzkriterien sind messbar formuliert

---

### 6. **Automatisieren**

* Script/CI, das bei jedem `git push` offene TODOs einsammelt (grep auf `@todo`) → erzeugt Report.
* Optional: **Markdown-Linter mit TODO-Check**, damit nichts „vergessen“ wird.

---

### 7. **Review & Abschluss**

* TODO wird **Issue/Task**, nicht nur ein Haken im Markdown.
* Nach Erledigung: Commit mit `Fixes TODO: <Beschreibung>` → Transparenz.
* Regelmäßiges Review-Meeting (wöchentlich): „Welche TODOs sind noch offen?“

---

## 🚦 Konkrete Handlungsempfehlung für deinen Fall

1. **Alle TODOs** (deine Liste) in ein **CSV/JSON-Backlog** überführen.
   Felder: `Datei`, `Zeile`, `Beschreibung`, `Typ`, `Rolle`, `Prio`.
2. **Tagging:** `(PO)` markiert schon Rollen. Die Skeletons gehen in den Dev-Track.
3. **Quick Wins zuerst:**

   * Quellen-URLs ergänzen
   * @todo-Zeilen in Skeleton-Readmes durch Platzhaltertext ersetzen
4. **Dann die dicken Fische:**

   * PO-Akzeptanzkriterien in den Randnotizen → sonst fehlt die Basis für Abnahme.
5. **Parallel CI-Haken setzen:**

   * Ein `grep -R "@todo"` ins Build, das Reminder generiert.

---

👉 Ergebnis: Aus „TODO-Zettelwirtschaft“ wird ein **strukturierter Workflow**, bei dem du jederzeit weißt:

* Was ist offen?
* Wer ist dran?
* Was ist wirklich wichtig?


# TODOs aus Markdown-Dateien

## Beispiele/B2GAccessibilityToolkit/README.md
- Zeile 9: ## @todo

## Beispiele/B2GApprovalWorkflow/README.md
- Zeile 9: ## @todo
- Zeile 12: - [ ] Eskalationsservice (Timer/Queue, @todo)

## Beispiele/B2GAuditLogging/README.md
- Zeile 9: ## @todo

## Beispiele/B2GBackupStatus/README.md
- Zeile 9: ## @todo

## Beispiele/B2GCostCenters/README.md
- Zeile 9: ## @todo

## Beispiele/B2GCustomForms/README.md
- Zeile 9: ## @todo

## Beispiele/B2GCustomerRBAC/README.md
- Zeile 9: ## @todo

## Beispiele/B2GCustomerSSO/README.md
- Zeile 9: ## @todo

## Beispiele/B2GERPConnector/README.md
- Zeile 9: ## @todo

## Beispiele/B2GInvoicingXRechnung/README.md
- Zeile 9: ## @todo

## Beispiele/B2GMandantTheme/README.md
- Zeile 9: ## @todo

## Beispiele/B2GMandateManagement/README.md
- Zeile 9: ## @todo

## Beispiele/B2GMonitoringHooks/README.md
- Zeile 9: ## @todo

## Beispiele/B2GPunchoutConnector/README.md
- Zeile 9: ## @todo

## README.md
- Zeile 9: > @todo (PO): Beispiel-Skeleton für B2G_Besonderheiten anlegen / Scope abstimmen
- Zeile 10: > @todo (PO): Beispiel-Skeleton für B2G_Technische_Auswirkungen anlegen / Scope abstimmen
- Zeile 27: > @todo (PO): Beispiel-Skeleton für Betrieb & Governance anlegen / Scope abstimmen
- Zeile 28: > @todo (PO): Beispiel-Skeleton für Change & Release anlegen / Scope abstimmen
- Zeile 29: > @todo (PO): Beispiel-Skeleton für Dokumentation & Archivierung anlegen / Scope abstimmen
- Zeile 30: > @todo (PO): Beispiel-Skeleton für Testing & Abnahme anlegen / Scope abstimmen

## Randnotizen/Accessibility_Barrierefreiheit.md
- Zeile 35: > @todo (PO): Akzeptanzkriterien für Accessibility (Wenn Nutzer:in X, Dann Ergebnis Y, gemessen durch Z) definieren.

## Randnotizen/Approval_Workflow.md
- Zeile 31: > @todo (PO): Akzeptanzkriterien für Freigabefälle (Wenn Order-Level X, Dann Genehmigungsstatus Y innerhalb Z Zeit) ergänzen.

## Randnotizen/Audit_Logging.md
- Zeile 24: > @todo (PO): Akzeptanzkriterien für Audit-Logs (Wann gilt Eintrag als revisionssicher, wie wird Export geprüft?) formulieren.

## Randnotizen/B2G_Besonderheiten.md
- Zeile 28: > @todo (PO): Akzeptanzkriterien für die Gesamtsicht (Welche Minimalnachweise müssen erfüllt sein?) definieren.
- Zeile 29: > @todo (PO): Abhängigkeiten zu Detail-Randnotizen explizit verlinken (z. B. Approval ↔ Kostenstellen ↔ ERP).

## Randnotizen/B2G_Technische_Auswirkungen.md
- Zeile 22: > @todo (PO): Checkliste ableiten (Welche technischen Leitplanken müssen erfüllt sein?).
- Zeile 23: > @todo (PO): Abhängigkeiten zu Spezialthemen (z. B. Monitoring, Backup, Security) strukturieren.
- Zeile 24: > @todo (PO): Akzeptanzkriterien für Architektur-Guidelines formulieren.

## Randnotizen/Betrieb_&_Governance.md
- Zeile 26: > @todo (PO): Akzeptanzkriterien für Betriebsprozesse (z. B. maximale Reaktionszeit, Nachweis der Runbook-Übung) beschreiben.
- Zeile 27: > @todo (PO): Abhängigkeiten zu Monitoring, Backup und Change-Management ergänzen.

## Randnotizen/Broker_Integration_Punchout_&_Katalog.md
- Zeile 26: > @todo (PO): Akzeptanzkriterien für Punchout/Katalog (z. B. erfolgreiche OCI-Rückgabe, cXML-Validierung) festlegen.

## Randnotizen/Change_&_Release.md
- Zeile 26: > @todo (PO): Akzeptanzkriterien für Releases (wann gilt ein Change als abgenommen, welche KPIs) definieren.
- Zeile 27: > @todo (PO): Abhängigkeiten zu Betrieb/Testing/Risikomanagement dokumentieren.

## Randnotizen/CustomForms.md
- Zeile 27: > @todo (PO): Akzeptanzkriterien für Formularübermittlungen (z. B. Validierungsfehlerquote, erfolgreiche Übergabe ans Fachverfahren) ausformulieren.

## Randnotizen/Dokumentation_&_Archivierung.md
- Zeile 27: > @todo (PO): Akzeptanzkriterien für Dokumentations-/Archivierungsnachweise definieren (z. B. Vollständigkeits- und Aufbewahrungsprüfungen).
- Zeile 28: > @todo (PO): Abhängigkeiten zu Audit-Logging, Change-Management und Invoicing sichtbar machen.

## Randnotizen/DrBackup_&_Wiederherstellung.md
- Zeile 25: > @todo (PO): Akzeptanzkriterien für RPO/RTO-Nachweise und Restore-Tests definieren.

## Randnotizen/ERP_Schnittstellen.md
- Zeile 24: > @todo (PO): Akzeptanzkriterien für ERP-Integrationen (z. B. Erfolgsquote, Latenz) definieren.

## Randnotizen/FAQ.md
- Zeile 30: > @todo (PO): Akzeptanzkriterien/Checkliste für FAQ-Abdeckung definieren (Welche Themen müssen beantwortet werden?).

## Randnotizen/Invoicing_XRechnung_ZUGFeRD.md
- Zeile 30: > @todo (PO): Akzeptanzkriterien für XRechnung (Validierungsnachweis, PEPPOL-Test, Archivprüfung) ergänzen.

## Randnotizen/Kostenstellen_&_Budgets.md
- Zeile 24: > @todo (PO): Akzeptanzkriterien für Budgetprüfungen (Fehlerfälle, Schwellenwerte, Reporting) festlegen.

## Randnotizen/Mandate_Management.md
- Zeile 26: > @todo (PO): Akzeptanzkriterien für Mandatsnutzung (z. B. Nachweis im Audit-Log, Ablauf von Mandaten) festlegen.

## Randnotizen/Monitoring_&_Alerting.md
- Zeile 28: > @todo (PO): Akzeptanzkriterien für Monitoring (SLA-Nachweise, Alarm-Reaktionszeiten) definieren.

## Randnotizen/Quellen.md
- Zeile 31: > @todo: Recherchierte URL ergänzen (Quelle nachtragen)
- Zeile 38: > @todo: Recherchierte URL ergänzen (Quelle nachtragen)
- Zeile 75: > @todo: Recherchierte URL ergänzen (Quelle nachtragen)
- Zeile 85: > @todo: Recherchierte URL ergänzen (Quelle nachtragen)

## Randnotizen/Rollen_&_Rechte.md
- Zeile 32: > @todo (PO): Akzeptanzkriterien für Rollenvergabe/Rezertifizierung definieren (z. B. Prüfintervalle, Audit-Belege).

## Randnotizen/Single_Sign-On_&_IdM.md
- Zeile 24: > @todo (PO): Akzeptanzkriterien für SSO (z. B. IdP-Failover, Token-Validierung, Deprovisioning-Laufzeit) festlegen.

## Randnotizen/Testing_&_Abnahme.md
- Zeile 27: > @todo (PO): Akzeptanzkriterien für Abnahmen (z. B. minimaler Testumfang, Nachweisformate) definieren.
- Zeile 28: > @todo (PO): Abhängigkeiten zu Change/Betrieb/Monitoring dokumentieren.

## Randnotizen/Theming_&_Branding_Mandanten.md
- Zeile 30: > @todo (PO): Akzeptanzkriterien für Mandanten-Themes (z. B. Kontrastnachweis, Browserkompatibilität, Mandantenwechsel) ausarbeiten.
