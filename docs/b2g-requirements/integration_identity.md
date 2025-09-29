# Integration in Verwaltungs-IT & Identitätsmanagement

Ein B2G-Shop ist kein isoliertes System.  Er muss sich in die bestehende IT-Landschaft der Behörden einfügen und Nutzer authentifizieren, ohne eine separate Benutzerverwaltung zu betreiben:

- **ERP-Integration:** Artikelstammdaten, Preise und Lagerbestände werden regelmäßig aus dem ERP (z. B. SAP) importiert.  Bestellungen werden nach der Freigabe zurück ans ERP übertragen.  Die Schnittstellen sollten asynchron (Queues) gestaltet sein, um Ausfälle abzufangen und Wiederholungen zu ermöglichen.  Punchout-Schnittstellen wie OCI und cXML erlauben es, den Shop als externen Katalog in E-Procurement-Plattformen zu integrieren.
- **Single Sign-On (SSO) & IdM:** Nutzer melden sich über den zentralen Identity Provider der Behörde an (SAML 2.0 oder OpenID Connect).  Beim ersten Login werden Shop-Accounts automatisch provisioniert (Just-in-Time-Provisioning).  Attribute wie Abteilung, Rolle oder Kostenstelle werden vom IdP übernommen und auf Shop-Rollen gemappt.  Entzug von Zugriffsrechten im IdP muss zum Sperren des Shop-Accounts führen.  MFA wird durch den IdP erzwungen.
- **Weitere Fachverfahren:** Dokumentenmanagement, Vergabeplattformen, Ticketsysteme oder Fachverfahren (z. B. für Genehmigungen) können angebunden werden.  Standardisierte Formate (UBL, CSV) und Events erleichtern den Austausch.

**Umsetzung in Shopware:**

Für die ERP-Anbindung kann ein Connector-Service entwickelt werden, der per REST oder Message-Queue Stammdaten synchronisiert und Bestellungen exportiert.  Punchout-Anbindungen erfordern eigene Controller, um OCI-Aufrufe entgegenzunehmen und Warenkörbe als cXML zurückzugeben.  Für SSO gibt es Community-Plugins, die erweitert werden müssen: sie validieren SAML/OIDC-Tokens, legen Accounts an und mappen Attribute.  Events und Webhooks können für externe Fachverfahren genutzt werden.

**Offene Fragen / Akzeptanzkriterien:**

- Wie wird die Datenqualität bei der ERP-Synchronisation sichergestellt?
- Welche IdP-Attribute müssen gemappt werden und wie erfolgt die Rezertifizierung der Nutzer?
- Welche Standards (PEPPOL/OCI/cXML) müssen zwingend unterstützt werden?
