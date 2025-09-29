# Vergabe & Compliance

## Kundenanforderung

Behörden unterliegen dem Vergaberecht.  Jede Beschaffung muss formale Ausschreibungsprozesse und Schwellenwerte beachten, Dokumentationspflichten erfüllen und der Prüfung durch Rechnungshöfe standhalten[1].  Kunden erwarten, dass der Shop diese Prozesse abbildet und alle relevanten Dokumente sicher archiviert.

## Warum ist das so?

Öffentliche Mittel dürfen nur nach gesetzlichen Vorgaben ausgegeben werden.  Vergabeverfahren stellen sicher, dass Wirtschaftlichkeit, Transparenz und Gleichbehandlung gewährleistet sind[1].  Bei Prüfungen müssen Behörden jede Entscheidung begründen können; fehlende Dokumente können zu Rechtsverstößen führen.  Außerdem verlangen Datenschutz und Informationssicherheit eine lückenlose Protokollierung【39†L29-L38】.

## Anforderungen & Besonderheiten (B2G)

1. **Vergabevermerke & Unterlagen:** Für jeden Beschaffungsvorgang sind Vergabevermerk, Angebotsunterlagen und Entscheidungsbegründungen digital zu erfassen und dauerhaft zu speichern[1].
2. **Schwellenwerte & Ausschreibungen:** Ab bestimmten Beträgen müssen Ausschreibungen durchgeführt werden.  Der Shop muss diese Schwellenwerte konfigurierbar machen und ggf. eine Ausschreibungsplattform anbinden.
3. **Revisionssichere Audit-Logs:** Jede Aktion (Angebot, Anfrage, Freigabe, Storno) muss manipulationssicher protokolliert und versioniert werden[1].
4. **Archivierung:** Dokumente und Logs müssen über lange Zeiträume (meist zehn Jahre) unveränderbar archiviert werden[1].
5. **Datenschutz & Informationssicherheit:** Nur notwendige Daten verarbeiten; personenbezogene Daten pseudonymisieren; Sicherheitsvorfälle melden【39†L29-L38】.

## Umsetzung – Technische Leitplanken

- **Custom Entities:** Legen Sie eine Entity `b2g_vergabevermerk` an, um Vergabevermerke und zugehörige Dateien zu speichern.  Binden Sie über eine ManyToOne-Relation die Bestellung an den Vergabevermerk.
- **Audit-Logging:** Implementieren Sie einen Event-Subscriber, der relevante Aktionen (Bestellung erstellt, Genehmigung erteilt, Rolle geändert) in einer `b2g_audit_log`-Tabelle aufzeichnet.  Nutzen Sie Append-only-Protokolle oder Write-Once-Speicher, um Manipulation auszuschließen.
- **Archivierung:** Entwickeln Sie einen Adapter für ein Dokumenten-Management-System (DMS) oder Cloud-Storage, das GoBD-konforme Archivierung unterstützt.  Verwenden Sie signierte Hashwerte, um die Integrität archivierter Dateien zu prüfen.
- **Schwellenwerte & Trigger:** Integrieren Sie einen Rule-Builder-Service, der bei Überschreitung eines Schwellenwerts eine Ausschreibungsfunktion auslöst (z. B. Übergabe an Vergabeplattform).  Konfigurierbare Schwellenwerte im Admin bereitstellen.
- **Datenschutz:** Anonymisieren Sie Benutzerinformationen in Logs; setzen Sie rollenbasierte Zugriffe, damit nur Berechtigte Audit-Logs einsehen können.  Prüfen Sie DSGVO-Richtlinien zur Löschung personenbezogener Daten nach Ablauf der Frist【39†L29-L38】.

## Checkliste

- [ ] Vergabevermerke können pro Bestellung angelegt und gespeichert werden.
- [ ] Audit-Logs zeichnen jede Änderung mit Nutzer, Zeitstempel und altem/neuem Wert auf.
- [ ] Archivierungsadapter ist integriert und speichert Dateien unveränderlich.
- [ ] Schwellenwerte sind konfigurierbar; Überschreitungen lösen Ausschreibungsprozesse aus.
- [ ] Logs und Dateien enthalten keine nicht notwendigen personenbezogenen Daten.
- [ ] Offene Punkte sind als `@todo` markiert (z. B. rechtliche Klärung der Aufbewahrungsfristen je Bundesland).

## Abhängigkeiten/Überschneidungen

Dieses Modul hängt eng mit **Workflows & Rollen** (Genehmigungsprozesse) und **Budgets** (Freigabe abhängig von Betrag) zusammen.  Das Audit-Log ist außerdem für das Modul **Betrieb & Governance** relevant; dort werden Protokolle ausgewertet und überwacht.  Die Anbindung an externe Vergabeplattformen kann Überschneidungen mit dem **Integrationsmodul** haben.

## Akzeptanzkriterien

Die Vergabe- und Compliance-Funktion ist implementiert, wenn:

1. Für jeden Bestellvorgang ein Vergabevermerk mit Dokumenten angelegt werden kann.
2. Audit-Logs lückenlos alle Änderungen protokollieren und durch Rollen abgesichert sind.
3. Schwellenwerte aus der Konfiguration ausgelesen und Ausschreibungsprozesse angestoßen werden.
4. Archivierung gemäß GoBD erfolgt und Dateien vor Manipulation geschützt sind.
5. Alle Sicherheitsanforderungen (DSGVO, BSI-Grundschutz) berücksichtigt sind.

## Offene Fragen

- Welche Arten von Dokumenten müssen explizit archiviert werden (z. B. Vergabevermerk, Leistungsbeschreibung)?
- Welche Prüfkriterien gelten für die Revisionssicherheit der Audit-Logs?
- Wie werden personenbezogene Daten im Audit-Log pseudonymisiert?

## Quellen

Siehe Quellen [1], [2], [12] im Quellenverzeichnis.
