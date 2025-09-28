# Change- & Release-Management

## Ziel
Änderungen an B2G-Systemen nachvollziehbar planen, dokumentieren, testen und freigeben, ohne Compliance oder Verfügbarkeit zu gefährden.

## Anforderungen
- **Patch-Management:** Sicherheitsupdates zeitnah einspielen, dokumentierte Change Requests. [12]
- **Release-Prozesse:** CI/CD mit Staging/Prod-Trennung, Abnahme durch Fachbereiche. [18]
- **Architekturentscheidungen:** Dokumentation per ADRs (Architecture Decision Records). [18]
- **Change Advisory Board (CAB):** Optional bei kritischen Behördenprojekten.
- **Rollback-Strategien:** Jeder Release braucht ein getestetes Rollback-Szenario. 

## Dokumentation
- **Change-Log:** Version, Datum, Inhalt, Verantwortliche.  
- **Betriebshandbuch:** Laufend aktualisiert mit Prozessen, Kontakten, Runbooks.  
- **Freigabeprotokolle:** Sign-off durch Verantwortliche (IT + Fachbereich).

## Checkliste
- [x] Change Request erstellt  
- [x] Risikoanalyse durchgeführt  
- [x] Tests in Staging erfolgreich  
- [x] Abnahme dokumentiert  
- [x] Rollback-Szenario getestet  
- [x] Release in Change-Log dokumentiert

## Quellen
[12][18]
