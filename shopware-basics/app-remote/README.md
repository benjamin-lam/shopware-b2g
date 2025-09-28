# Remote App Skeleton

## Was ist das?
Dieses Skeleton liefert die Grundstruktur einer Shopware App mit Remote-Backend. Es enthält ein Manifest, Administration-Stub und Hinweise für Webhooks sowie App Scripts.

## Typische Anwendungsfälle
- SaaS-Integrationen mit Konfiguration in der Shopware-Administration.
- Externe Services, die Bestellungen synchronisieren oder Daten anreichern.
- Webhook-basierte Automatisierungen ohne Plugin-Installation.
- Multi-Shop-Lösungen mit zentralem App-Backend.

## Kurzes How-to
1. Manifest in `app/manifest.xml` anpassen (App-Name, Domains, Permissions).
2. Remote-Endpunkte implementieren (z. B. `/registration`, `/action`) – hier nur Platzhalter.
3. Administration-Stub in `app/Resources/administration/main.js` erweitern, um Einstellungen zu pflegen.
4. Snippets und Übersetzungen in `app/Resources/snippet/` ergänzen.
5. App packen (`zip -r app.zip app/`) und über den Shopware App Manager installieren.
6. Webhooks auf dem Remote-Server entgegennehmen und authentifizieren.

## Wann einsetzen / Wann nicht
**Wann einsetzen:** Für Integrationen, die außerhalb des Shopware-Servers laufen sollen oder Cloud-kompatibel sein müssen.
**Wann nicht:** Wenn tiefe Shopware-Core-Erweiterungen oder Serverzugriff nötig sind – dann Plugin bauen.

## Wo erweitern?
- `app/manifest.xml` – Registrierung von Webhooks, Privileges, Module.
- `app/Resources/administration/main.js` – UI für Einstellungen.
- `app/Resources/snippet/` – Übersetzungen für die Admin-Oberfläche.
- `app/scripts/` – App Scripts (z. B. zur Preisberechnung) ergänzen.

## Weiterführend
- Begriffe: App Lifecycle, App Webhooks, Permissions.
- Suche nach `AppLifecycle` im Core.
- Themen: App-Script Syntax, Signed Payloads.

## Hinweise für Produktion
- Remote-Server skalieren und Authentifizierung absichern (HMAC, TLS).
- Logging und Monitoring für Webhook-Verarbeitung aufbauen.
- Versionierung via App-Store Release-Prozess einplanen.
