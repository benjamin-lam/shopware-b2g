# Audit-Logging – Revisionssichere Nachvollziehbarkeit

## Ziele
**Rechts- und revisionssichere** Protokollierung aller sicherheits- und geschäftsrelevanten Ereignisse: Logins/SSO, Rollenänderungen, Organisationszuordnungen, Stammdatenänderungen, Bestellungen, Freigaben, Schnittstellenaktionen. [4][12]

## Mindestanforderungen
- **Integrität:** WORM-Storage/Export, Hash-Ketten oder signierte Log-Bündel; Schutz vor Manipulation. [4]  
- **Vollständigkeit:** Wer/Wann/Was/Woher (IP/Client); Korrelation mit Order/Approval-IDs.  
- **Aufbewahrung:** Nach GoBD/behördlichen Vorgaben (z. B. 10 Jahre für Finanzunterlagen).  
- **Datenschutz:** Datenminimierung, PII-Maskierung in Fehlerlogs; Löschkonzept vs. Archivpflicht.

## Betrieb & Sicherheit
- **Detektion:** Anschluss an SIEM/SOC (Brute-Force, Privilege Escalation, API-Anomalien). [4]  
- **Berichte:** Rollenberichte, Freigabe-Historien, Zugriffsauswertungen.  
- **Rezertifizierung:** Regelmäßige Review-Prozesse für Rechte (jährlich/halbjährlich). [4]

## Checkliste
- [x] Ereigniskatalog + Felder definiert  
- [x] Fälschungsschutz/Unveränderbarkeit implementiert  
- [x] Aufbewahrungsfristen & Exportfunktion
- [x] SIEM-Anbindung + Alarmregeln
- [x] Rechte-Rezertifizierung dokumentiert

> @todo (PO): Akzeptanzkriterien für Audit-Logs (Wann gilt Eintrag als revisionssicher, wie wird Export geprüft?) formulieren.

## Abhängigkeiten/Überschneidungen
- **Rollen & Rechte:** Protokolliert Zuweisungen/Änderungen.  
- **SSO/IdM:** Protokolle für An-/Abmeldung, Attribut-Mapping.  
- **Approval/ERP:** Bestell- und Genehmigungsereignisse verknüpfen.

## Quellen
[4][12]
