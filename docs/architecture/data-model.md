# Datenmodell für B2G-Erweiterungen

Neben den Standard-Entitäten von Shopware (Customer, Order, Product) sind folgende Erweiterungen geplant:

- **Organisation** – Repräsentiert eine Behörde; enthält Name, Leitweg-ID, Kontakt- und Rechnungsdaten.  Verknüpft mit Sales-Channel.
- **Organisation Unit** – Untereinheit einer Organisation (Abteilung, Schule); verknüpft mit Organisation und adressiert Liefer- und Rechnungsinformationen.
- **Cost Center** – Haushalts-/Kostenstelle einer Organisation; enthält Budget-Informationen und Buchungshistorie.
- **Approval Request** – Freigabeobjekt für Bestellungen; speichert Bestellreferenz, Antragsteller, zugehörige Organisationseinheit, Status, Genehmigerkette, Kommentare und Zeitstempel.
- **Mandate** – Repräsentiert eine Stellvertretung: Vertretener, Vertreter, Gültigkeitszeitraum, Scope (z. B. Freigabe, Bestellung).
- **Invoice Document** – Enthält Verweise auf XRechnung/ZUGFeRD-Dateien, Validierungsstatus und Archivierungsinformationen.

Jede Entität sollte im Shopware-DAL definiert und durch Migrationsskripte angelegt werden.  Beziehungen (z. B. Organisation → Unit, Cost Center → Organisation) sind mittels Foreign-Keys abzubilden.  Für Performance-kritische Zugriffe (Genehmigungen, Budgetprüfungen) sind Indizes einzuplanen.
