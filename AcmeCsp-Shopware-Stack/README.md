# Generic Service-Portal Stack (Shopware 6)

Zweck: Vorbereitete Modulbibliothek für B2B/Public-Sector-Anforderungen auf Shopware-Basis.
Kein Kundennamen. Allgemeine Problemstellung:
- Shopware OOTB deckt Governance/B2B-Anforderungen (Rollen, Genehmigungen, Mandanten, E-Rechnung, SSO, Audit) nicht vollständig ab.
- Ziel: Service-Portal (Bestellung = Antrag + Genehmigungen + Provisionierung) mit strengen Compliance-Vorgaben.

Struktur:
- /plugins/<Module> : eigenständige Shopware-Plugins (Scaffolds)
- /shared : wiederverwendbare Helpers/DTOs/Policies
- ROADMAP.md : empfohlene Umsetzungsreihenfolge & Best Practices
- ADRs/ : Architecture Decision Records
