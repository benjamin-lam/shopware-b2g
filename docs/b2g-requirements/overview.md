# Überblick über B2G-Anforderungen

## Kundenanforderung

Behörden, Ministerien und kommunale Einrichtungen erwarten von einem B2G-Shop eine Lösung, die sie sicher und komfortabel bei der Beschaffung unterstützt.  Wichtige Merkmale sind Rechtskonformität, Barrierefreiheit, Transparenz, Mandantenfähigkeit und Nachweispflicht【39†L1-L3】.  Der Shop muss komplexe Genehmigungsprozesse, Budgetprüfungen, elektronische Rechnungsstellung und Anbindung an bestehende Systeme abbilden.

## Warum ist das so?

Die Beschaffung mit öffentlichen Mitteln unterliegt strengen Vorschriften: Vergaberecht, Haushaltsrecht, Datenschutz und IT-Sicherheit definieren klare Rahmenbedingungen[1].  Jede Bestellung muss rechtlich zulässig sein, Dokumentations- und Archivierungspflichten erfüllen und einer Prüfung durch Rechnungshöfe standhalten.  Barrierefreiheit ist gesetzlich vorgeschrieben (WCAG 2.1 AA, BITV 2.0)【39†L38-L45】, damit auch Menschen mit Einschränkungen den Dienst nutzen können.  Zudem sind Behörden föderal organisiert; eine Plattform muss mehrere Mandanten isoliert bedienen【38†L104-L112】.  Schließlich verlangt die NIS2-Richtlinie strenge Sicherheitsstandards und Nachweispflichten【39†L29-L38】.

## Anforderungen & Besonderheiten (B2G)

1. **Vergabe & Compliance:** Formale Ausschreibungen, Schwellenwerte, Vergabevermerke und Archivierungspflichten[1].
2. **Workflows & Rollen:** Vier-Augen-Prinzip, mehrstufige Genehmigungen, feingranulares Rollen- und Rechtekonzept[4][2].
3. **Budgets & Rechnungen:** Zuordnung zu Kostenstellen, Budgetprüfung und XRechnung/ZUGFeRD【38†L66-L75】【38†L76-L83】.
4. **Integration & Identität:** Anbindung an ERP/E-Procurement (Punchout, cXML/OCI) und Identity-Provider (SAML/OIDC)【38†L84-L90】.
5. **Barrierefreiheit & Multitenancy:** WCAG 2.1 AA konformes Frontend, separate Sales-Channels pro Behörde und Mandantentrennung【38†L104-L112】.
6. **Betrieb & Governance:** Monitoring, Audit-Trails, Backups und Change-Management auf hohem Sicherheitsniveau【38†L112-L120】.

## Umsetzung – Technische Leitplanken

Das System basiert auf Shopware 6 mit der B2B-Suite.  B2G-Spezifika werden über eigene Plugins oder Apps umgesetzt (siehe Beispiel-Ordner).  Kernpunkte:

- **Custom Entities:** Erweiterungen des Datenmodells (Organisation, Kostenstelle, Approval-Request) via Shopware DAL.  Migrationsskripte erstellen die Tabellen.
- **Event-Driven Workflows:** Nutzung von Events (z. B. nach Bestellabschluss) und Flow Builder zur Orchestrierung von Genehmigungen und Budgetprüfungen.
- **Integration Layer:** REST-/Queue-basierte Adapter zum ERP, cXML/OCI-Controller für Punchout, SAML/OIDC-Service für SSO.  Fehler sollten gepuffert und idempotent verarbeitet werden.
- **Frontend & Admin:** Anpassungen an Theme und Admin-Module zur Darstellung von Genehmigungen, Budgets und Mandaten.  Barrierefreie Komponenten, ARIA-Labels und kontrastreiche Themes sind Pflicht.
- **Security & Compliance:** Logging, MFA, Verschlüsselung, strenge CSP-Header, Penetrationstests.  Audit-Trails müssen unveränderbar archiviert werden【39†L29-L38】.

## Checkliste

- [ ] Anforderungskatalog vollständig dokumentiert und Rechtsgrundlagen (Vergaberecht, DSGVO, BITV) berücksichtigt.
- [ ] Datenmodell mit Organisationen, Kostenstellen, Freigaben und Rechnungen konzipiert.
- [ ] Genehmigungsprozess mit Eskalationen und Vertretungen implementiert.
- [ ] SSO und ERP-Schnittstellen integriert (SAML/OIDC, Punchout, cXML/OCI).
- [ ] Frontend barrierefrei (WCAG 2.1 AA) und multitenantfähig gestaltet.
- [ ] Monitoring, Logging, Backup und Change-Management eingerichtet.
- [ ] Offenpunkte als `@todo` markiert.

## Abhängigkeiten/Überschneidungen

Dieses Dokument ist ein Einstieg in alle folgenden Themen.  Vergabe & Compliance, Workflows & Rollen, Budgets, Integration, Barrierefreiheit und Betrieb haben starke Abhängigkeiten voneinander.  Zum Beispiel beeinflusst die Rechtevergabe die Genehmigungsregeln; Budgets sind für Freigaben relevant; die Integration muss SSO-Informationen in Rollen umwandeln; Barrierefreiheit gilt für alle UI-Module.

## Akzeptanzkriterien

Die Übersicht gilt als vollständig, wenn alle genannten Anforderungen identifiziert sind, Verweise auf vertiefende Dokumente vorhanden sind und eine Checkliste für den Projektstart existiert.  Alle Kernpunkte sollten mit einer Quelle belegt sein.

## Offene Fragen

- Welche Themenbereiche müssen priorisiert werden, um ein Minimal Viable Product für den Behördeneinkauf bereitzustellen?
- Welche gesetzlichen Änderungen (z. B. NIS2, Vergaberecht) sind kurzfristig zu erwarten und müssen frühzeitig in den Plan aufgenommen werden?
- Welche Schnittstellen zu bestehenden Behördenlösungen haben die höchste Integrationstiefe und benötigen vertiefte Workshops?

## Quellen

Siehe Quellen [1]–[11] im Quellenverzeichnis.
