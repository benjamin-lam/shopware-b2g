# Genehmigungs-Workflows, Rollen & Mandatsverwaltung

Öffentliche Beschaffungen folgen dem Vier-Augen-Prinzip und bedürfen komplexer Genehmigungsketten.  Der Shop muss mehrere Ebenen abbilden können:

- **Mehrstufige Genehmigungen:** Basierend auf Beträgen, Warengruppen oder Kostenstellen müssen Bestellungen von verschiedenen Personen freigegeben werden.  AND/OR-Bedingungen sind möglich (z. B. Abteilungsleitung *oder* Stellvertretung *und* Haushaltsbeauftragter).  Fristen und automatische Eskalationen bei Nichterledigung sind vorgesehen.
- **Rollen & Rechte:** Mitarbeiter einer Behörde besitzen unterschiedliche Rollen – Besteller, Freigeber, Controller, Administratoren.  Ein feingranulares RBAC-System mit Unterkonten und ggf. Attribut-basierten Berechtigungen (ABAC) ist notwendig.  Jede Änderung an Rollen muss protokolliert und regelmäßig rezertifiziert werden[2].
- **Mandatsverwaltung (Stellvertretung):** Vertreter können temporär im Auftrag von Vorgesetzten handeln.  Dabei muss klar ausgewiesen werden, für wen der Vertreter agiert, und der Zeitraum des Mandats muss begrenzt sein.  Impersonation und Delegated-Actions sind zwei denkbare Modelle.
- **Custom Forms und Freigabeobjekte:** Neben Standardbestellungen können Freigabeanträge für Haushaltsmittel, Dienstreisen etc. erforderlich sein.  Hierfür sollten konfigurierbare Formulare mit Validierung existieren.

**Umsetzung in Shopware:**

Die B2B-Components von Shopware bieten Employee-Management und Organisationseinheiten.  Genehmigungsworkflows müssen jedoch als Plugins implementiert werden: eigene Datenmodelle für Freigabeanträge, Services für Eskalationen (Timer/Queue) und Admin-Oberflächen für Genehmiger.  RBAC lässt sich über Erweiterungen des Shopware-ACL-Systems realisieren; Attribut-basierte Regeln können über Custom Fields und Policies abgebildet werden.

**Offene Fragen / Akzeptanzkriterien:**

- Welche Freigabekriterien (Betrag, Produktkategorie) gelten pro Behörde?
- Wie viele Eskalationsstufen werden benötigt und wie lange sind die Fristen?
- Wie lassen sich SSO-Attribute (z. B. IdP-Gruppen) automatisch auf Shop-Rollen mappen?
