# Datenmodell für B2G-Erweiterungen

## Kundenanforderung

Das Datenmodell muss erweiterbar sein, um zusätzliche Entitäten wie Organisationen, Kostenstellen, Genehmigungen und Mandate abzubilden.  Es muss Mandantentrennung, Versionierung und Verknüpfungen zu Shopware-Core-Entitäten gewährleisten.[2]【38†L66-L75】

## Warum ist das so?

Standard-Shopware-Entitäten (Customer, Order, Product) reichen für B2G nicht aus: Behörden benötigen mehrstufige Organisationen, Budgets und komplexe Freigabeobjekte.  Daten müssen sauber voneinander getrennt sein (Mandanten), um rechtskonforme Verarbeitung zu gewährleisten.  Ohne erweiterbares Datenmodell lässt sich das System nicht anpassen.

## Anforderungen & Besonderheiten (B2G)

1. **Organisation & Organisationseinheiten:** Eine Organisation repräsentiert eine Behörde; sie besitzt mehrere Organisationseinheiten (Abteilungen).  Beide Entities referenzieren eine Mandanten-ID und enthalten Kontakt-, Rechnungs- und Budgetinformationen.
2. **Cost Center:** Repräsentiert eine Kostenstelle mit Budget, Buchungen und Zeitraum【38†L66-L75】.
3. **Approval Request:** Freigabeobjekt mit Verweis auf eine Bestellung, den Status, Genehmigungskette, Kommentare und History[4].
4. **Mandate:** Vertretungsrechte zwischen Benutzern, mit Gültigkeitszeitraum und Scope[3].
5. **Invoice Document:** Verweist auf generierte XRechnungen/ZUGFeRD-Dateien, Validierungsstatus, Leitweg-ID und Archivierungsinformationen【38†L76-L83】.
6. **Audit Log:** Unveränderbarer Log aller wichtigen Aktionen (Bestellung, Genehmigung, Rollenänderung).  Enthält User-ID, Zeitstempel, Aktionstyp und alte/neue Werte.
7. **Mandanten-ID:** Jeder Datensatz hat eine Mandanten-ID zur Isolation【38†L104-L112】.

## Umsetzung – Technische Leitplanken

- **Entity Definitions:** Verwenden Sie das Shopware DAL, um Custom Entities zu definieren.  Jede Entität hat eine Datenbanktabelle, Definition-Klasse, Collection- und Entity-Klassen.
- **Relations:** Modellieren Sie One-To-Many- und Many-To-One-Beziehungen (Organisation → Organisationseinheit, Organisationseinheit → Cost Center, Cost Center → Order).  Nutzen Sie Search Criteria zur Abfrage.
- **Versioning & Auditing:** Aktivieren Sie Versioning für kritische Entities (z. B. Approval Request).  Nutzen Sie Write-Exceptions, um Änderungen zu validieren.  Audit-Logs werden über Event-Subscriber erstellt und in separater Tabelle gespeichert.
- **Mandantentrennung:** Fügen Sie ein Feld `tenant_id` in jede Tabelle ein.  Filtern Sie alle Abfragen im Repository nach dieser ID (via Context).  Achten Sie darauf, dass `DataValidationDefinition` das Feld als Pflichtfeld definiert.
- **Migrations:** Schreiben Sie Migrationsskripte für alle neuen Tabellen.  Jede Migration hat eine Up/Down-Methode und setzt Fremdschlüssel mit `ON DELETE CASCADE`.

## Checkliste

- [ ] Definitionen für Organisation, Organisationseinheit, Cost Center, Approval Request, Mandate, Invoice Document und Audit-Log angelegt.
- [ ] Beziehungen und Foreign-Keys modelliert; Mandanten-IDs überall vorhanden.
- [ ] Versionierung und Audit-Log implementiert; Write-Exceptions validieren Änderungen.
- [ ] Migrations erstellt und erfolgreich ausgeführt.
- [ ] Prüfungen für Mandanten-ID implementiert (Middleware / Repository-Extensions).
- [ ] Offene Punkte (`@todo`) notiert (z. B. Mapping von bestehenden Shopware-IDs zu neuen Entitäten).

## Abhängigkeiten/Überschneidungen

Das Datenmodell wird von allen anderen Modulen verwendet.  Änderungen müssen backward-kompatibel bleiben und Migrationen enthalten.  Mandanten-ID beeinflusst alle Abfragen; Benutzerdaten (Shopware Customer) müssen mit Organisation und Organisationseinheit verknüpft werden.

## Akzeptanzkriterien

1. Alle benötigten Entitäten sind im DAL definiert und können über die Admin-API verwaltet werden.
2. Beziehungen sind korrekt und testen Abfragen in Integrationstests.
3. Mandantentrennung funktioniert; kein Zugriff auf Daten anderer Mandanten.
4. Versionierung und Audit-Log zeichnen Änderungen auf.

## Quellen

Siehe Quellen [4], [6], [10] im Quellenverzeichnis.
