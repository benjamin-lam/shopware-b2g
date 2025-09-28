# Rollen & Rechte – Governance & Funktionstrennung

## Ziel
Mehrbenutzer-Organisationen (Behörden) mit **feingranularen Berechtigungen** für Besteller, Freigeber, Controlling/Revision und Admins. [15][16][19][21]

## B2G-Spezifika
- **Hierarchien & Limits:** Formale Ebenen, Freigabegrenzen, Querschnittsstellen (IT/Vergabe).  
- **Mandanten-Trennung:** Keine Überschneidung zwischen Organisationen; Sales-Channel-gebunden.  
- **Dokumentation:** Rollenvergabe/-änderung nachvollziehbar, Reporting/Rezertifizierung. [4]

## Shopware-Bezug
- **OOTB Lücke (CE):** Keine Kunden-Unterkonten/RBAC im Frontend; B2B-Suite/Components liefern Basis, **Customizing bleibt nötig**. [15][16][19][21]  
- **Erweiterungen:** Rollen für Kostenstellen/Approval, SSO-Mapping, Exportrechte.

## Umsetzung
- **Datenmodell:** Organisation, Orga-User, Rollen, evtl. Gruppen; Mehrrollenfähigkeit; Mandantenschlüssel.  
- **Policy-Checks:** Serverseitige Gates; Rule-Builder-Integration.  
- **Admin-UI:** Pflege von Orgs/Benutzer/Rollen; Exporte; Rezertifizierung.  
- **Audit:** Jede Rollenaktion protokollieren. [4]

## Checkliste
- [x] Rollenmodell & Hierarchien definiert  
- [x] Datenmodell & Migrationen  
- [x] Admin-UI & Reports
- [x] Policy-Enforcement/Tests
- [x] SSO-Mapping & Audit

## Abhängigkeiten/Überschneidungen
- **Approval/Mandate:** Rechte wirken auf Genehmigungen/Vertretungen.
- **SSO/IdM:** Attribut-Mapping → Rollen.

> @todo (PO): Akzeptanzkriterien für Rollenvergabe/Rezertifizierung definieren (z. B. Prüfintervalle, Audit-Belege).

## Quellen
[15][16][19][21][4]
