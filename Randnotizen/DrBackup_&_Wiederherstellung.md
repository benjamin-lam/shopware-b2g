# Disaster Recovery & Backup – RPO/RTO, Offsite & Tests

## Ziel
Wiederherstellung des Betriebs innerhalb definierter **RTO** bei maximalem **RPO**-Datenverlust. Verschlüsselte, verifizierte **Offsite-Backups**; regelmäßige **Restore-Tests**; dokumentiertes **DR-Playbook**. [10][11][17]

## Umsetzung
- **Strategie:** DB/Files/Config getrennt, versioniert; Offsite (zweites RZ/Cloud DE); Schlüsselschutz.  
- **Automatisierung:** Geplante Jobs, Integritätsprüfungen, Monitoring/Alarmierung.  
- **Tests:** Regelmäßige Restores in Staging mit Zeitmessung; Ergebnisprotokolle für Revision.  
- **Archivierung:** Jahresstände/GoBD-konform; DSGVO vs. Aufbewahrung abwägen.  
- **Organisation:** Verantwortlichkeiten, Kontaktliste, Kommunikationsplan.

## Checkliste
- [x] RPO/RTO definiert & mit Auftraggeber abgestimmt  
- [x] Backup-Jobs stabil + überwacht  
- [x] Restore-Test erfolgreich dokumentiert  
- [x] Notfallhandbuch/Runbooks gepflegt
- [x] Zugriff/Schlüsselmanagement geprüft
- [x] Langzeit-Archivierung geregelt

## Abhängigkeiten/Überschneidungen
- **Monitoring:** Backup-Fehler/Alter der Sicherungen alarmieren.
- **Audit:** Nachweise zu Tests/Aufbewahrung.

> @todo (PO): Akzeptanzkriterien für RPO/RTO-Nachweise und Restore-Tests definieren.

## Quellen
[10][11][17]
