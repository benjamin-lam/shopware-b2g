# Integration in Verwaltungs-IT & Identitätsmanagement

## Kundenanforderung

Der B2G-Shop soll sich nahtlos in bestehende Systeme einfügen: Artikelstammdaten, Preise und Bestellungen werden mit dem ERP synchronisiert; E-Procurement-Plattformen nutzen den Shop via Punchout (OCI/cXML); Mitarbeitende melden sich per Single Sign-On über den zentralen Identity-Provider an【38†L84-L90】.  Weitere Fachverfahren (z. B. Dokumentenmanagement, Vergabeplattform) sollen angebunden werden.

## Warum ist das so?

Behörden haben etablierte ERP- und E-Procurement-Systeme.  Ein isolierter Shop würde Doppelerfassung und Medienbrüche verursachen.  Punchout ermöglicht es, den Shop als externen Katalog zu nutzen; nach der Warenkorberstellung werden die Daten an das E-Procurement-System zurückgegeben【38†L84-L90】.  Single Sign-On via SAML/OIDC ist erforderlich, damit Mitarbeitende ihre dienstlichen Accounts verwenden können und zentral gesteuerte Sicherheitsrichtlinien (MFA, Passwortwechsel) gelten.

## Anforderungen & Besonderheiten (B2G)

1. **ERP-Integration:** Regelmäßiger Import von Artikeln, Preisen und Beständen sowie Export von freigegebenen Bestellungen.  Asynchrone Verarbeitung mit Queues und Retry-Mechanismen【38†L84-L90】.
2. **Punchout (OCI/cXML):** Unterstützung für OCI-Punchout (SAP) und cXML-Punchout (Ariba, Coupa).  Session-Management, Warenkorbübernahme und Rückgabe im Standardformat.
3. **Single Sign-On (SAML/OIDC):** Authentifizierung über einen zentralen Identity-Provider.  Attribut-Mapping (Abteilung, Rolle, Kostenstelle) und Just-in-Time-Provisioning von Benutzerkonten【38†L84-L90】.
4. **Fachverfahren & Schnittstellen:** Anbindung an Dokumentenmanagement, Vergabeplattformen oder andere Fachverfahren mit standardisierten Formaten (UBL, CSV).  Ereignisse (OrderPlaced, InvoiceGenerated) als Webhooks oder Events bereitstellen.
5. **Sicherheit & Compliance:** Verschlüsselte Übertragung, Idempotenz bei der Synchronisation, Monitoring der Schnittstellen und Authentifizierung von API-Clients.

## Umsetzung – Technische Leitplanken

- **Integration Layer:** Entwickeln Sie einen Microservice oder ein Plugin, das Daten asynchron synchronisiert.  Nutzen Sie Message-Queues (z. B. RabbitMQ) für Import/Export und implementieren Sie Retry-Logik.  Datenänderungen in Shopware lösen Events aus, die an den Integration Layer gesendet werden.
- **Punchout Controller:** Implementieren Sie Controller für OCI und cXML: Der Controller nimmt Login-Parameter entgegen, erstellt eine Session, erlaubt dem Benutzer einen Warenkorb aufzubauen und sendet diesen als cXML/OCI an das E-Procurement-System zurück.
- **SSO Provider:** Verwenden Sie eine bestehende SAML/OIDC-Bibliothek oder erweitern Sie ein verfügbares Shopware-Plugin.  Beim ersten Login werden Benutzerkonten und Organisationen automatisch angelegt (Just-in-Time).  Attribute aus dem Token (Rollen, OrgUnit, CostsCenter) werden auf Shop-Rollen und Organisationen gemappt.  Deprovisioning erfolgt beim Logout oder wenn der IdP den Benutzer löscht.
- **Fachverfahren Adapter:** Nutzen Sie die Shopware-API, um Fachverfahren anzubinden.  Implementieren Sie Endpunkte für Datenabfragen (z. B. GET /api/b2g/orders?status=pendingApproval) und nutzen Sie Event-Publishing für Echtzeit-Updates.
- **Security & Monitoring:** Jede Schnittstelle muss TLS nutzen, API-Keys oder OAuth2 für Authentifizierung verwenden und Rate-Limits definieren.  Ein Monitoring überwacht den Datenfluss (Erfolgsquoten, Latenzen) und sendet Alerts bei Fehlern.【38†L84-L90】

## Checkliste

- [ ] ERP-Import/Export implementiert mit Queue und Retry.
- [ ] OCI und cXML Punchout vollständig unterstützt (Session-Management, Warenkorbübernahme, Rückgabe).
- [ ] SAML/OIDC-Login funktioniert; Benutzer- und Organisationszuordnung wird automatisch erstellt.
- [ ] Fachverfahren können per API integriert werden (DMS, Vergabeplattform).
- [ ] Alle Schnittstellen verwenden TLS und auth.  Monitoring protokolliert Fehler und Latenzen.
- [ ] Offene Punkte (z. B. spezifikationskonforme Feldbelegungen) als `@todo` notiert.

## Abhängigkeiten/Überschneidungen

Dieses Modul beeinflusst **Roles & Workflows** (Attribute aus dem IdP werden auf Rollen abgebildet), **Budgets & Rechnungen** (ERP-Integration, Rechnungsdaten), **Vergabe & Compliance** (Ausschreibungsplattformen) und **Betrieb & Governance** (Monitoring der Schnittstellen).  Die Sicherheitseinstellungen müssen mit dem Infrastrukturteam abgestimmt werden.

## Akzeptanzkriterien

1. Synchronisation mit dem ERP funktioniert fehlerfrei; Daten sind konsistent.
2. Punchout-Prozesse werden mit mindestens einem E-Procurement-System erfolgreich durchgeführt.
3. Single Sign-On mit Attribut-Mapping funktioniert und ist abgesichert (MFA, Token-Validierung).
4. Schnittstellen erfüllen Sicherheitsstandards (TLS, Auth, Rate-Limits) und werden überwacht.
5. Dokumentierte Adapter für mindestens ein Fachverfahren sind vorhanden.

## Quellen

Siehe Quellen [8], [12] im Quellenverzeichnis.
