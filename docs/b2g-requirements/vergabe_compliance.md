# Vergabe & Compliance

In Deutschland unterliegen öffentliche Beschaffungen strengen gesetzlichen Vorgaben.  Das Vergaberecht definiert Schwellenwerte und Ausschreibungsprozesse, während Haushaltsrecht und Prüfinstanzen wie Rechnungshöfe eine lückenlose Nachweisführung verlangen.  Die wichtigsten Anforderungen sind:

- **Dokumentationspflichten:** Jeder Beschaffungsvorgang muss nachvollziehbar und revisionssicher dokumentiert werden.  Dazu gehören Vergabevermerke, Begründungen für Zuschlagsentscheidungen, Budgetfreigaben und alle relevanten Unterlagen.  Audit-Logs müssen alle Änderungen an Bestellungen, Freigaben und Stammdaten enthalten[2].
- **Archivierung:** Dokumente und Daten sind über gesetzlich definierte Zeiträume (häufig zehn Jahre) aufzubewahren.  Eine manipulationssichere Archivierung (z. B. nach GoBD) ist unumgänglich.
- **Transparenz und Prüfbarkeit:** Prüfer müssen zu jeder Zeit nachvollziehen können, wer welche Entscheidung getroffen hat.  Hierzu sind detaillierte Audit-Trails, Berichte und Filter-Funktionen erforderlich.
- **Compliance mit DSGVO und Informationssicherheit:** Personenbezogene Daten dürfen nur im notwendigen Umfang verarbeitet werden und müssen gegen unberechtigten Zugriff geschützt sein.  Protokollierung und SIEM-Anbindung gemäß BSI-Grundschutz sind erforderlich.

**Umsetzung in Shopware:**

Shopware liefert grundlegende Bestellfunktionen, aber keine native Vergabe-Dokumentation.  Es müssen daher eigene Entities und Events eingeführt werden, um Vergabevermerke, Ausschreibungsunterlagen und Audit-Logs abzubilden.  Für die Archivierung sollten Schnittstellen zu einem DMS (Dokumenten-Management-System) oder revisionssicheren Storage genutzt werden.  DSGVO-Anforderungen lassen sich über anonymisierte Log-Daten und Rollenmodelle erfüllen.

**Offene Fragen / Akzeptanzkriterien:**

- Welche Arten von Dokumenten müssen explizit archiviert werden (z. B. Vergabevermerk, Leistungsbeschreibung)?
- Welche Prüfkriterien gelten für die Revisionssicherheit der Audit-Logs?
- Wie werden personenbezogene Daten im Audit-Log pseudonymisiert?
