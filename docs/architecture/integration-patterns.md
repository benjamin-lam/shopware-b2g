# Integrationsmuster und Schnittstellen

Die Anbindung externer Systeme ist für das CSP essentiell.  Folgende Muster werden empfohlen:

- **Schnittstellen zum ERP (REST/Queue):**  Produkte, Preise und Lagerbestände werden per REST-API oder Fileschnittstelle importiert.  Bestellungen werden nach Freigabe an das ERP übergeben.  Eine Message-Queue puffert Übertragungen und wiederholt bei Fehlern.
- **Punchout-Anbindung (OCI/cXML):**  Für E-Procurement-Plattformen wird der Shop als externer Katalog bereitgestellt.  Der Prozess umfasst einen Log-in via Single Sign-On, den Aufbau eines Warenkorbs und die Rückgabe als OCI-Formular oder cXML-Order.  Standards und Felddefinitionen müssen eingehalten werden.
- **PEPPOL/UBL für Rechnungen:**  XRechnung wird über PEPPOL (AS4-Protokoll) oder per Upload an behördliche Portale versendet.  Validierungsservices prüfen die Syntax vor dem Versand.
- **IdM-Anbindung (SAML/OIDC):**  Der Shop vertraut auf Tokens des IdP.  Die Authentifizierung muss signiert, zeitlich begrenzt und gegen Replay-Angriffe geschützt sein.  Attribut-Mapping erfolgt serverseitig.
- **Event-basiertes Monitoring:**  Plugins senden Betriebs- und Audit-Events an einen zentralen Event-Bus.  Externe Systeme (SIEM, Monitoring) abonnieren diese Events und generieren Alarme oder Berichte.

Diese Muster sollten im Code konsequent angewandt werden, um lose Kopplung und Fehlertoleranz zu gewährleisten.
