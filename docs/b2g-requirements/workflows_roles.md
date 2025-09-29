# Genehmigungs-Workflows, Rollen & Mandate

## Kundenanforderung

Behörden benötigen einen strukturierten Genehmigungsprozess für Bestellungen: Das Vier-Augen-Prinzip und mehrstufige Freigaben sollen sicherstellen, dass nur berechtigte Personen Aufträge auslösen.  Nutzer sollen verschiedene Rollen haben (Besteller, Freigeber, Controller, Administrator), und es müssen Stellvertretungsregeln hinterlegt werden[4][2].  Mandanten müssen getrennt und Rollenänderungen protokolliert werden.

## Warum ist das so?

In der öffentlichen Verwaltung ist die Funktionstrennung gesetzlich vorgeschrieben; kein einzelner Nutzer darf vollständige Kontrolle über einen Bestellprozess haben.  Mehrstufige Freigaben verhindern Fehler und Missbrauch und erhöhen die Transparenz[4].  Vertretungen sind nötig, um Urlaubs- oder Krankheitszeiten abzudecken[3].  Hierarchien und verschiedene Abteilungen erfordern ein flexibles Rollenmodell[2].

## Anforderungen & Besonderheiten (B2G)

1. **Mehrstufige Genehmigungen:** Konfigurierbare Freigabeketten (z. B. Abteilungsleiter oder Stellvertretung plus Haushaltsbeauftragter) mit AND/OR-Verknüpfungen und Eskalationsfristen[4].
2. **Rollen & Rechte:** Granular definierte Rollen (Besteller, Freigeber, Controller, Admin) plus Attribut-basierte Berechtigungen (z. B. Budgetgrenzen, Produktkategorien)[2].  Periodische Rezertifizierung der Rechte.
3. **Mandatsverwaltung:** Stellvertretungen mit Gültigkeitszeiträumen, Scope (Bestellung, Freigabe) und Protokoll „im Auftrag von“[3].
4. **Mandantentrennung:** Rollen und Freigaberegeln müssen pro Behörde getrennt sein; Mandant A darf die Rollen von Mandant B nicht sehen.
5. **Benachrichtigungen & Historie:** Genehmiger erhalten Aufgabenlisten und Benachrichtigungen; alle Genehmigungsentscheidungen werden versioniert und mit Kommentaren dokumentiert.

## Umsetzung – Technische Leitplanken

- **Custom Entities & Repositories:** Erstellen Sie Entitäten `b2g_approval_request`, `b2g_role`, `b2g_mandate`.  Eine Approval-Request ist mit einer Bestellung verknüpft, enthält den Status, die Genehmigerkette und Kommentare.
- **Workflow-Engine:** Implementieren Sie Genehmigungslogik via Event-Listener (z. B. `OrderPlacedEvent`).  Bei Auslösung wird ein Approval-Request erstellt und die Bestellung in einen Status „pending approval“ versetzt.  Timer-Jobs steuern Eskalationen bei Fristablauf.
- **Rollenmodell:** Erweitern Sie das Shopware ACL um kundenspezifische Rollen.  Legen Sie Berechtigungen auf Ebene von Kostenstellen, Warengruppen und Beträgen fest (ABAC).  Im Admin können Rollen konfiguriert und Benutzer zugewiesen werden.
- **Mandatsverwaltung:** Eine Mandat-Entität verknüpft Vertreter mit Vertretenem, Zeitraum und Scope.  Bei Aktionen wird geprüft, ob der aktuelle Benutzer ein gültiges Mandat besitzt; im Audit-Log wird „acting_on_behalf_of“ vermerkt.
- **Benachrichtigungen:** Integrieren Sie E-Mail- und UI-Benachrichtigungen für Genehmiger.  Implementieren Sie einen Admin-Modul zur Anzeige aller offenen Genehmigungen pro Rolle und Mandant.  Über den Flow-Builder können Anpassungen konfiguriert werden.

## Checkliste

- [ ] Genehmigungsregeln können mit AND/OR-Bedingungen konfiguriert werden (z. B. Abteilungsleitung ODER Stellvertretung UND Haushaltsbeauftragter).
- [ ] Rollenmodell unterstützt mehrere Ebenen, inklusive Vertretungen, und kann pro Mandant konfiguriert werden.
- [ ] Approval-Requests werden erstellt, versioniert und archiviert.  Kommentare können hinterlegt werden.
- [ ] Eskalationsfristen sind konfigurierbar; bei Nichterledigung wird automatisch eskaliert.
- [ ] Benachrichtigungen werden per E-Mail und UI ausgelöst.
- [ ] Protokollierung „im Auftrag von“ und Rezertifizierung der Rollen vorhanden.

## Abhängigkeiten/Überschneidungen

Dieses Modul ist eng mit **Budgets** (Freigabe abhängig von Beträgen), **Mandatsverwaltung** (siehe dieses Dokument), **Vergabe & Compliance** (Audit-Trail) und **Integrationslayer** (Übertragung von Genehmigungsstatus ans ERP) verzahnt.  Rollen wirken sich auf alle anderen Module aus; daher muss das Rollenmodell als erstes konzipiert werden.

## Akzeptanzkriterien

1. Eine Bestellung wird erst nach erfolgreichem Genehmigungsworkflow finalisiert.
2. Genehmigungsregeln sind administrativ konfigurierbar und unterstützen komplexe Bedingungen.
3. Stellvertretungen funktionieren mit korrekter Protokollierung.
4. Rollenänderungen werden versioniert und müssen regelmäßig rezertifiziert werden.
5. Alle Aktionen sind im Audit-Log nachvollziehbar.

## Quellen

Siehe Quellen [3], [4], [5], [12] im Quellenverzeichnis.
