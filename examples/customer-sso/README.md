# Beispiel – Single Sign-On (SSO)

## Warum App?

Eine SSO-Anbindung über SAML oder OpenID Connect erfordert häufig einen externen Service, da der Identity-Provider (IdP) außerhalb von Shopware liegt.  Um den Shop nicht unnötig aufzublähen und Updates zu vereinfachen, wird hier eine **Shopware-App** empfohlen: Sie kommuniziert per API mit Shopware (z. B. über die Admin-API), validiert das Token und erstellt Benutzer.  Dies ermöglicht eine entkoppelte Entwicklung und einfaches Deployment in einer Cloud-Umgebung.  Alternativ kann ein Plugin genutzt werden, falls eine tiefere Integration (z. B. Mapping von Benutzerattributen) erforderlich ist.

## Mini-How-To: App erstellen

1. Lege in `custom/apps/B2gSso` einen Ordner an.  Die **manifest.xml** definiert die App (Name, Version, Zugriffsrechte, Endpunkte).  Beispiel:
```xml
<?xml version="1.0" encoding="utf-8"?>
<manifest xmlns="urn:shopware:app:manifest:v1">
  <meta>
    <name>B2gSso</name>
    <label lang="de-DE">B2G SSO App</label>
    <version>1.0.0</version>
    <author>Your Name</author>
  </meta>
  <permissions>
    <permission key="customer" access="read,write"/>
    <permission key="order" access="read"/>
  </permissions>
  <setup>
    <script><![CDATA[
      // optional: initialisation code
    ]]></script>
  </setup>
  <webhooks>
    <webhook url="https://your-service.example.com/sso/callback" event="customer.login"/>
  </webhooks>
</manifest>
```
2. Entwickle einen externen Service (z. B. Node.js), der SAML/OIDC-Tokens validiert und via Shopware Admin API Benutzerkonten provisioniert oder aktualisiert. Verwende den in der Manifest-Datei konfigurierten Webhook, um auf Login-Ereignisse zu reagieren.
3. Implementiere ein Admin-Panel oder Konfigurationsformular in der App, um IdP-URLs, Client-IDs und Mapping-Regeln einzustellen. Dieses Panel wird in der Shopware Administration eingebettet.
4. Registriere die App: `bin/console app:refresh` gefolgt von `bin/console app:install B2gSso`. Danach können Benutzer sich per SSO anmelden.

## Struktur (Ausschnitt)
```
custom/apps/B2gSso/
 ├── manifest.xml
 ├── Resources/
 │   ├── config/
 │   │   └── config.xml
 │   └── app/admin/
 └── external-service/
     ├── server.js
     └── package.json
```

## Verknüpfte Dokumente

Dieses Beispiel implementiert die Anforderungen aus [docs/b2g-requirements/integration_identity.md](../../docs/b2g-requirements/integration_identity.md) (Integration & Identitätsmanagement). Weitere Informationen zur App-Entwicklung finden sich in der Shopware-Doku („App Base Guide“).
