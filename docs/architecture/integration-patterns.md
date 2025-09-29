# Integrationsmuster und Schnittstellen

## Kundenanforderung

Behörden nutzen unterschiedliche ERP-, E-Procurement- und Fachanwendungen.  Der B2G-Shop muss diese Systeme nahtlos integrieren, damit Daten ausgetauscht werden können, ohne dass Medienbrüche entstehen.  Punchout, E-Rechnung und IdM-Integration sind hierbei besonders wichtig【38†L84-L90】.

## Warum ist das so?

Ohne Integration müsste der Einkauf zwischen mehreren Systemen manuell abgestimmt werden.  Fehler und Verzögerungen wären die Folge.  Punchout ermöglicht effizienten Einkauf, indem der Shop als externer Katalog im E-Procurement genutzt wird.  ERP-Integration sorgt dafür, dass Daten konsistent bleiben; SSO entlastet Nutzer von zusätzlichen Passwörtern und erfüllt Sicherheitsrichtlinien.【38†L84-L90】

## Anforderungen & Besonderheiten (B2G)

1. **ERP-Synchronisation:** Import/Export per REST, cXML, CSV oder Message-Queue; Fehlertoleranz mit Retries.  Bestellungen werden erst nach Genehmigung übergeben.
2. **Punchout:** OCI und cXML Punchout; Session-Management, Warenkorbtransfer, Rückgabe an E-Procurement mit korrekten Feldbelegungen.
3. **E-Rechnung (PEPPOL/UBL):** Bestell- und Rechnungsdaten können per PEPPOL AS4/UBL versendet werden.  Validierung und Leitweg-IDs beachten【38†L76-L83】.
4. **IdM-Integration:** SAML/OIDC; Just-in-Time-Provisioning; Attribut-Mapping; Deprovisionierung.
5. **Event-basierte Kommunikation:** Publizieren von Events (OrderPlaced, ApprovalCompleted) und Abonnieren von ERP-, IdM- oder Fachverfahren-Events.  Use Cases: Synchronisation, Workflow-Trigger, Monitoring.
6. **Sicherheit & Idempotenz:** Alle Aufrufe sind verschlüsselt; Wiederholungen dürfen keine doppelten Buchungen erzeugen; API-Clients authentifizieren sich mit OAuth2/Client-Zertifikaten.

## Umsetzung – Technische Leitplanken

- **Integration Patterns:** Verwenden Sie nach Bedarf *request/reply* (REST), *batch* (CSV), *publish/subscribe* (Event-Bus) oder *messaging* (Queue) Patterns.  Dokumentieren Sie alle Schnittstellen (Input/Output-Schemas, Fehlerbehandlung).
- **Punchout Implementation:** Implementieren Sie Controller und Services, die OCI/cXML-Parameter verarbeiten, eine temporäre Session erstellen, den Warenkorb aufbauen und die Order als cXML/OCI zurückgeben.  Berücksichtigen Sie Benutzerkontext und Organisationseinheit.
- **PEPPOL Adapter:** Nutzen Sie eine Bibliothek oder Service, der UBL-Dokumente erzeugt und über AS4/PEPPOL sendet.  Validieren Sie Nachrichten gegen das XRechnung-Schema; protokollieren Sie Sende-/Empfangszeiten.
- **SSO Connector:** Verwenden Sie SP-Libraries (z. B. `onesaml`) oder OIDC-Provider.  Implementieren Sie Hooks für Attribut-Mapping; speichern Sie externe IDs und Gruppen im Benutzerprofil.
- **Event Bus:** Integrieren Sie RabbitMQ/Kafka; definieren Sie Topics (e.g. `b2g.order.placed`, `b2g.approval.completed`).  Andere Module abonnieren diese Topics und reagieren entsprechend.
- **API Gateway & Security:** Setzen Sie ein Gateway ein, das Authentifizierung, Ratenbegrenzung und Protokollierung übernimmt.  API-Keys oder OAuth2-Tokens verwalten.

## Checkliste

- [ ] Schnittstellen dokumentiert (Schemas, Endpunkte, Authentifizierung, Fehlercodes).
- [ ] ERP-Synch-Service implementiert und getestet (Import/Export, Fehlerbehandlung, Retries).
- [ ] OCI/cXML-Punchout funktioniert End-to-End mit einem Testsystem.
- [ ] PEPPOL/UBL-Adapter implementiert; E-Rechnungen validiert.
- [ ] SAML/OIDC-Connector implementiert; Benutzer werden automatisch angelegt.
- [ ] Event-Bus eingerichtet; Events werden versendet und verarbeitet.
- [ ] API-Security & Idempotenz gewährleistet.

## Abhängigkeiten/Überschneidungen

Die Integrationsmuster stehen im Zentrum des Projekts: Sie verbinden das Kernsystem mit ERP, E-Procurement, Rechnungsplattformen und IdM.  Viele Anforderungen aus den Modulen **Budgets**, **Genehmigungen**, **Rechnungen** und **Betrieb** hängen direkt von einer robusten Integration ab.

## Akzeptanzkriterien

1. Alle kritischen Schnittstellen sind implementiert, dokumentiert und in Tests erfolgreich validiert.
2. Punchout und E-Rechnung funktionieren in realistischen Testläufen.
3. SSO funktioniert; neue Benutzer werden erstellt und korrekt zugeordnet.
4. Event-Bus ist aktiv; Module reagieren auf Events.  Fehler werden behandelt und melden sich im Monitoring.

## Quellen

Siehe Quellen [8], [13] im Quellenverzeichnis.
