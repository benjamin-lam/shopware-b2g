# Shopware 6 – Grundlagen & B2B-Components

## Kundenanforderung

Der technische Unterbau eines B2G-Shops basiert auf Shopware 6 mit der optionalen B2B-Suite.  Behörden erwarten, dass diese Basis ihre komplexen Geschäftsprozesse unterstützt: Mehrbenutzerkonten, Genehmigungen, Budgetverwaltung und kundenspezifische Kataloge.[2]

## Warum ist das so?

Shopware 6 ist eine modulare E-Commerce-Plattform.  Die B2B-Components bieten viele Funktionen für Geschäftskunden: Mitarbeiterkonten, Organisationseinheiten, individuelle Preise und Bestelllisten.  Diese Funktionen bilden die Grundlage, auf der B2G-Anforderungen aufbauen.  Ohne B2B-Suite müsste man Grundfunktionen wie Unterkonten selbst implementieren.

## Anforderungen & Besonderheiten (B2G)

1. **Employee Management:** Mehrere Benutzer pro Organisation, Rollenverwaltung und Einladungen[2].
2. **Organisationseinheiten:** Unterteilungen einer Organisation in Abteilungen oder Standorte; Benutzer sehen nur die Daten ihrer Einheit.
3. **Sales-Channels & Mandanten:** Mehrere Verkaufskanäle pro Installation mit individueller Domain, Theme und Kundendaten【38†L104-L112】.
4. **Erweiterbarkeit:** Plugin-System, Data Abstraction Layer (DAL), Events und Admin-Framework, um neue Entitäten, API-Endpunkte und Admin-Oberflächen hinzuzufügen.  B2G-Features wie Genehmigungen oder Kostenzentren erfordern eigene Plugins.
5. **Flow Builder & Rule Builder:** Konfigurierbare Regeln und Prozesse (z. B. Versandkosten, Freigaberegeln).  Diese Werkzeuge sind erweiterbar um eigene Bedingungen oder Aktionen.

## Umsetzung – Technische Leitplanken

- **Installationsbasis:** Setzen Sie eine Shopware 6-Installation mit B2B-Suite auf.  Aktivieren Sie Employee Management und Organisationsstrukturen.
- **Plugin-Entwicklung:** Nutzen Sie das Plugin-Gerüst (siehe `plugin-skeletons`) zur Entwicklung eigener Module (Genehmigung, Kostenstellen, SSO).  Shopware stellt Befehle wie `bin/console plugin:create` bereit, um ein Plugin zu generieren.
- **App-Entwicklung:** Für entkoppelte Services (z. B. Cloud-Integration) können Shopware-Apps entwickelt werden.  Diese werden via Manifest und API angebunden und bieten eine Alternative zu Plugins für externe Dienste.
- **Theme-Anpassung:** Passen Sie Templates, SCSS und JavaScript an.  Nutzen Sie den B2B-Accountbereich (Mein Konto) zur Darstellung von Genehmigungen, Budgets und Einstellungen.  Barrierefreiheit beachten.
- **Konfiguration:** Verwenden Sie das System Config Framework, um Schwellenwerte, Rollenregeln, SSO-Einstellungen etc. administrativ zu verwalten.

## Checkliste

- [ ] B2B-Suite installiert und Employee-Management aktiviert.
- [ ] Organisationseinheiten konfiguriert und getestet.
- [ ] Sales-Channels pro Mandant angelegt; Themes angepasst.
- [ ] Plugin-Gerüst bereitgestellt; Entwickler können neue Plugins erstellen.
- [ ] App-Manifest vorhanden (für externe Services).
- [ ] Flow-Builder-Regeln für B2G-Prozesse definiert.
- [ ] Dokumentation zu B2B-Suite und Erweiterungswegen verlinkt.

## Abhängigkeiten/Überschneidungen

Die Grundlagen dienen als Baustein für alle folgenden Module: Genehmigungen, Budgets, Integration, Barrierefreiheit und Betrieb.  Änderungen an der Basis (z. B. am RBAC) wirken sich auf alle Features aus.

## Akzeptanzkriterien

1. Shopware 6 mit B2B-Suite ist korrekt eingerichtet.
2. Basisfunktionen (Employee Management, Organisationseinheiten, Sales-Channels) funktionieren und sind dokumentiert.
3. Entwickler finden in `plugin-skeletons` ein startfähiges Gerüst inklusive README und How-To.
4. Themes sind anpassbar und barrierefrei.

## Quellen

Siehe Quellen [4], [10] im Quellenverzeichnis.
